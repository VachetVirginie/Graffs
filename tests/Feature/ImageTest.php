<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
class ImageTest extends TestCase
{
    /**
     * Test add image.
     *
     * @return void
     */
    public function testAddImage()
    {
        $this->auth(2);
        $response = $this->get('/');
        $response->assertSee('Add an image');
        $responses = $this->get('/image/create');
        $responses->assertSee('Description');
        Storage::fake('images');
        Storage::fake('thumbs');
        $response = $this->post('/image', [
            'image' => UploadedFile::fake()->image('paysage.jpg'),
            'category_id' => 2,
            'description' => 'un beau paysage',
        ]);
        $this->assertDatabaseHas('images', [
            'description' => 'un beau paysage',
        ]);
        $response->assertStatus(302)
            ->assertHeader('Location', url('/image/create'));
    }

}