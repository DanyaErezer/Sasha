<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WPControllers extends Controller
{
    public function info($category)
    {
        // Получаем посты по категории
        $posts = DB::table('wp_posts as p')
            ->join('wp_term_relationships as tr', 'p.ID', '=', 'tr.object_id')
            ->join('wp_terms as t', 'tr.term_taxonomy_id', '=', 't.term_id')
            ->where('p.post_type', '=', 'post')
            ->where('p.post_status', '=', 'publish')
            ->where('t.name', '=', $category) // Фильтруем по категории
            ->select('p.ID', 'p.post_title', 'p.post_content')
            ->get();

        // Динамически выбираем шаблон в зависимости от категории
        $view = '.Information.information'; // по умолчанию

        // Если категория соответствует, то меняем шаблон
        if ($category == 'info1') {
            $view = '.Information.information';
        } elseif ($category == 'info2') {
            $view = '.Information.information2';
        } elseif ($category == 'info3') {
            $view = '.Information.information3';
        }

        return view($view, [
            'posts' => $posts
        ]);
    }



    public function WP_home()
    {
        $categories = ['home1', 'home2', 'home3']; // Категории для карточек
        $cards = [];

        foreach ($categories as $category) {
            $posts = DB::table('wp_posts as p')
                ->join('wp_term_relationships as tr', 'p.ID', '=', 'tr.object_id')
                ->join('wp_terms as t', 'tr.term_taxonomy_id', '=', 't.term_id')
                ->where('p.post_type', '=', 'post')
                ->where('p.post_status', '=', 'publish')
                ->where('t.name', '=', $category)
                ->select('p.ID', 'p.post_title', 'p.post_content')
                ->limit(1) // Берем только 1 пост на карточку
                ->get();

            $cards[$category] = $posts;
        }

        return view('home', compact('cards'));
    }
    public function WP_travel()
    {
        $categories = ['travel1', 'travel2', 'travel3', 'travel4']; // Категории для карточек
        $cards = [];

        foreach ($categories as $category) {
            $posts = DB::table('wp_posts as p')
                ->join('wp_term_relationships as tr', 'p.ID', '=', 'tr.object_id')
                ->join('wp_terms as t', 'tr.term_taxonomy_id', '=', 't.term_id')
                ->where('p.post_type', '=', 'post')
                ->where('p.post_status', '=', 'publish')
                ->where('t.name', '=', $category)
                ->select('p.ID', 'p.post_title', 'p.post_content')
                ->limit(1) // Берем только 1 пост на карточку
                ->get();

            $cards[$category] = $posts;
        }

        return view('travel', compact('cards'));
    }

}
