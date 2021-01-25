@extends('FE.layouts.master')


@section('content') 

    @include('FE.home.banner')    

    @include('FE.home.intro')

    @include('FE.components.gallery')

    @include('FE.components.service')

    @include('FE.components.review')

    @include('FE.components.pricing')

    @include('FE.components.team')

    @include('FE.home.news')
    
@endsection