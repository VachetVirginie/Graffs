<?php
    use Illuminate\Database\Seeder;
    use App\Models\Category;
    class CategoriesTableSeeder extends Seeder
    {
        public function run()
        {
            Category::create([
                'name' => 'Graffitis ',
            ]);
            Category::create([
                'name' => 'Tags',
            ]);
            Category::create([
                'name' => 'Stencils',
            ]);
            Category::create([
                'name' => 'Installations',
            ]);
            Category::create([
                'name' => 'Tape Art',
            ]);
        }
    }