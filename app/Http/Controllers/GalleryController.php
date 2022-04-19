<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
  public function index()
  {

    $images = [
      [
        'url' => 'img/gallery/gallery1.jpeg',
      ],
      [
        'url' => 'img/gallery/gallery2.jpeg',
      ],
      [
        'url' => 'img/gallery/gallery3.jpeg',
      ],
      [
        'url' => 'img/gallery/gallery4.jpeg',
      ],
      [
        'url' => 'img/gallery/gallery5.jpeg',
      ],
      [
        'url' => 'img/gallery/gallery6.jpeg',
      ],
      [
        'url' => 'img/gallery/gallery7.jpeg',
      ],
      [
        'url' => 'img/gallery/gallery8.jpeg',
      ]
    ];

    return view('gallery', [
      'images' => $images,
    ]);
  }
}
