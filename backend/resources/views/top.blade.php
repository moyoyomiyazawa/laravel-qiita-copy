@extends('layouts.common')
@section('content')
    @if (!Auth::check())
        @include('parts.login')
    @else
        <div class="top-wrapper">
            <div class="articles-wrapper col-md-6">
                @foreach ($articles as $article)
                    <div class="article-box">
                        <div class="article-box-left"></div>
                        <div class="article-box-right">
                            <a href="{{ route('item', ['id' => $article->id]) }}" class="article-title">{{ $article->title }}</a>
                            <div class="article-details">
                                <div class="article-date">{{ $article->created_at }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
