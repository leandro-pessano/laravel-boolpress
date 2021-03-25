<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Post;
use App\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->sentence(4);

            $tempSlug = Str::slug($newPost->title);
            $slug = $tempSlug;
            $counter = 1;
            while (Post::where('slug', $slug)->first()) {
                $slug = $tempSlug .'-' .$counter;
                $counter++;
            }

            $newPost->slug = $slug;
            $newPost->content = $faker->text(100);
            $newPost->user_id = rand(1,Count(User::all()->toArray()));
            $newPost->save();
        }
    }
}
