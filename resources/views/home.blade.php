@extends('layouts/master')

@section('title', 'Главная')

@section('content')
    <h1>All products</h1>
    @include('main-form')
    <div class="row">
        @foreach($products as $product)
            @include('card', ['product' => $product])
        @endforeach

    {{--<nav>--}}
        {{--<ul class="pagination">--}}
            {{--<li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">--}}
                {{--<span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
            {{--</li>--}}
            {{--<li class="page-item active" aria-current="page"><span class="page-link">1</span></li>--}}
            {{--<li class="page-item">--}}
                {{--<a class="page-link" href="?&amp;page=2">2</a>--}}
            {{--</li>--}}
            {{--<li class="page-item">--}}
                {{--<a class="page-link" href="?&amp;page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</nav>--}}
@endsection