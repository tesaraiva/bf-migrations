@extends('master.main')

@section('pageTitle', 'Home')

@section('content')

@component('components.carousel')
@endcomponent

@component('components.cards', ['cards' => $cards])
@endcomponent

@component('components.image-info')
@endcomponent

@endsection