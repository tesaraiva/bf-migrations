<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {

    $posts = [
      [
        'title' => 'Post 1',
        'date' => 'April 16, 2022',
        'author' => 'Jacob',
        'text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, blanditiis et! Minus quasi, sequi minima placeat, ipsam ad modi quo optio perferendis delectus numquam! Dolorem magni quos et praesentium neque.
'
      ],
      [
        'title' => 'Post 2',
        'date' => 'April 18, 2022',
        'author' => 'Jacob',
        'text' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse itaque pariatur et laboriosam velit recusandae saepe magni, veritatis repellat aliquid quos fuga facilis minus voluptates rem nemo? Laudantium, maxime nobis.'
      ],
    ];

    return view('blog', [
      'posts' => $posts,
    ]);
  }
}
