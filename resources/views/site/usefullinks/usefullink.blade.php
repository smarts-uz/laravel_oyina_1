@extends('site.layouts.app')

@section('content')
    <x-category/>
    <div class="category-news container mx-auto my-8">
        <div class="category-news-content flex">
            <div class="section-three-first-content-head-text flex items-center justify-between">
                <h1 class="">@lang('site.content_menus.useful')</h1>
            </div>
            <div class="line-gradient-five"></div>
            <div class="grid-template-card">
                @foreach($usefullinkall as $useful)
                    @php $icons = json_decode($useful->icon) @endphp
                    <a href="{{ $useful->link }}" class="grid-card-items">
                        <div>
                            @foreach($icons as $icon)
                                @if ($loop->first)
                                    <img src="{{ Voyager::image($icon) }}" alt="">
                                @endif
                            @endforeach
                        </div>
                        <p>{{ $useful->title }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
