<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ { User, Image, Category };
use App\Repositories\ImageRepository;



class ImageController extends Controller
{
    protected $repository;

    /**
     * Create a new ImageController instance.
     *
     * @param  \App\Repositories\ImageRepository $repository
     */
    public function __construct(ImageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2000',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string|max:255',
        ]);

        $this->repository->store($request);

        return back()->with('ok', __("L'image a bien été enregistrée"));
    }

    /**
     * Display a listing of the images for the specified category.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function category($slug)
    {
        $category = Category::whereSlug($slug)->firstorFail();
        $images = $this->repository->getImagesForCategory($slug);
        return view('home', compact('category', 'images'));
    }

    public function user(User $user)
    {
        $images = $this->repository->getImagesForUser($user->id);
   
        return view('home', compact('user', 'images'));
    }

    public function destroy(Image $image)
    {
        $this->authorize('manage', $image);
        $image->delete();
        return back();
    }

    public function update(Request $request, Image $image)
    {
        $this->authorize('manage', $image);
        
        $image->category_id = $request->category_id;
        $image->save();
        return redirect()->back()->with('updated', __('La catégorie a bien été changée !'));
    }
}
