<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

include 'config/post.php';

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrayPosts = config('post');

        foreach($arrayPosts as $post){

            $newPost = new Post();
            $newPost->nome = $post['nome'];
            $newPost->ingredienti = $post['ingredienti'];
            $newPost->descrizione = $post['descrizione'];
            $newPost->difficolta = $post['difficolta'];
            $newPost->tempo_cottura = $post['tempo_cottura'];
            $newPost->save();

        }


        /* for($i = 0; $i < 100; $i++){

            $newPost = new Post();
            $newPost->title = $faker->words(5,true);
            $newPost->body = $faker->text();
            $newPost->save();
        } */
    }
}
