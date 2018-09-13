<?php
    namespace Tests\Feature;
    use Tests\TestCase;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    class CategoryTest extends TestCase
    {
        /**
         * A basic test example.
         *
         * @return void
         */
        public function testExample()
        {
            $this->assertTrue(true);
        }
        public function testAddCategory()
        {
            $this->auth(1);
            $this->get('/category/create')
                ->assertSee('Tags');
            $response = $this->post('/category', [
                'name' => 'Une catégorie',
            ]);
            $this->assertDatabaseHas('categories', [
                'name' => 'Une catégorie',
                'slug' => 'une-categorie',
            ]);
            $response->assertStatus(302)
                ->assertHeader('Location', url('/'));
        }

       
    
    }