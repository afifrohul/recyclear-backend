<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article_tag = new \App\Models\ArticleTag();
        $article_tag->article_id = 1;
        $article_tag->tag_id = 1;
        $article_tag->save();

        $article_tag = new \App\Models\ArticleTag();
        $article_tag->article_id = 2;
        $article_tag->tag_id = 1;
        $article_tag->save();

        $article_tag = new \App\Models\ArticleTag();
        $article_tag->article_id = 3;
        $article_tag->tag_id = 1;
        $article_tag->save();

        $article_tag = new \App\Models\ArticleTag();
        $article_tag->article_id = 3;
        $article_tag->tag_id = 2;
        $article_tag->save();


    }
}
