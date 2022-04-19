@extends('master.main')

@section('pageTitle', 'Gallery')

@section('styles')
<link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
@endsection

@section('content')

<header class="w-100 bg-light mt-2">
  <div class="container" style="padding: 6rem 4rem">
    <div class="row justify-content-center text-center">
      <div class="col-8">
        <h1>Check our gallery</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">View now</button>
      </div>
    </div>
  </div>
</header>

<section class="container">
  <div class="row my-4 mt-2">
    @foreach($images as $image)
    <div class="col-3 gallery-image">
      <img src="{{$image['url']}}" alt="" />
    </div>
    @endforeach
  </div>
</section>

@endsection