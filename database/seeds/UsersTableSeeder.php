<?php
    use Illuminate\Database\Seeder;
    use App\Models\User;
    class UsersTableSeeder extends Seeder
    {
        public function run()
        {
            User::create([
                'name' => 'So',
                'email' => 'soso@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin'),
            ]);
            User::create([
                'name' => 'Vivi',
                'email' => 'vivi@gmail.com',
                'password' => bcrypt('user'),
            ]);
        }
    }