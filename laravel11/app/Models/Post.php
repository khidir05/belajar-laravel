<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
            [
                'id' => 1,
                'judul' => 'Artikel 1',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
                'nama' => 'Rifki',
                'date' => '2018-09-01',
            ],
            [
                'id' => 2,
                'judul' => 'Artikel 2',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.',
                'nama' => 'Khidir',
                'date' => '2021-08-01',
            ],
        ];
    }

    public static function find($id): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['id'] == $id);
        if(!$post){
            abort(404);
        }
        return $post;
    }
}

