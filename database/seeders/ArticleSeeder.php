<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            article::create([
                'title' => 'Tiêu đề bài viết '.$i,
                'content' => 'Nội dung của bài viết'.$i,
                'userId' => 1
            ]);
        }
    }
}
