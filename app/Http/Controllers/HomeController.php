<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $cards = [
            [
                'title' => 'A1 Sportback',
                'description' => 'O seu companheiro ideal para um estilo de vida urbano - o Audi A1 Sportback. A segunda geração do nosso bem sucedido compacto impressiona com um design desportivo e opções de equipamento flexíveis.

',
                'image' => 'https://www.audi.pt/media/Model_Gallery_DetailImage_Image_Component/72679-758899_69461-image/dh-1920-ddf998/649d9ebb/1635487668/audi-a1-gelb-seitenansicht.jpg'
            ],
            [
                'title' => 'A1 Citycarver',
                'description' => 'A aparência inconfundível resulta do design único, a flexibilidade de configuração de equipamentos inspira a imaginação e o comportamento ágil garante uma experiência de condução inesquecível.',
                'image' => 'https://www.audi.pt/media/FullWidthImage_Component/72689-759040/dh-1766-33d43f/d3d96723/1635487426/1920x1080-aoz-a1-191001-oe.jpg'
            ],
            [
                'title' => 'S3 Sportback',
                'description' => 'Mais agressivo. Mais desportivo. A combinação perfeita entre condução dinâmica e a praticalidade, equipado com direção progressiva entre outros equipamentos para facilitar todos os seus dias.',
                'image' => 'https://www.audi.pt/media/GalleryThumbnails_Slider_Image_Component/72848-760721-slider-469882/dh-1920-a9ad28/9f32d6ba/1635486258/audi-s3-sportback-heckansicht.jpg'
            ]
        ];


        return view('home', [
            'cards' => $cards

        ]);
    }
}
