<?php
    
    namespace Database\Seeders;
    
    use App\Models\Comment;
    use App\Models\Post;
    use App\Models\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    
    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            // User::factory(10)->create();
            
            User::factory()->create([
              'name' => 'JuanJota',
              'email' => 'esnola@gmail.com',
              'password' => Hash::make('12345678')
            ]);
            
            User::factory(10)->create();
            
            Post::factory(15)->create();
            Comment::factory(25)->create();
        }
    }
