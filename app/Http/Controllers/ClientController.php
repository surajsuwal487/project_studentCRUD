<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
        // return $response->status();
    }

    public function getPostById($id)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }

    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post Titile',
            'body' => 'New post Description'
        ]);

        return $post->json();
    }

    public function updatePost()
    {
        $post = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'Updated Titile',
            'body' => 'Updated Description'
        ]);

        return $post->json();
    }

    public function deletePost($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }
}
