@extends('site.layouts.app')

@section('content')



    {{-- Yangiliklar section --}}
    <section class="news-filter-dark">
        <x-category/>
    </section>


    {{-- Section five --}}
    @foreach($categories as $category)
        <section class="section-five container mx-auto">
            <div class="section-three-first-content-head-text flex items-center justify-between">
                <h1 class="">{{ $category->name }}</h1>
                <a href="{{ route('articleCategory', ['category_slug' => $category->slug]) }}">Barchasi</a>
            </div>
            <div class="line-gradient-five"></div>
            <div class="interview-cards flex">
                <x-articlecategory :category="$category->id"/>
            </div>
        </section>
    @endforeach
@endsection
