<?php
    
    namespace Database\Factories;
    
    use App\Models\Post;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    
    class PostFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Post::class;
        
        /**
         * Define the model's default state.
         */
        public function definition(): array
        {
            return [
              'user_id' => rand(1, User::count()),
              'title' => fake()->sentence(4),
              'content' => fake()->paragraphs(3, true),
              'published_at' => fake()->dateTime(),
            ];
        }
    }
