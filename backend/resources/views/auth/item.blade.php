@extends('layouts.common')
@section('content')
    <div class="item-page-wrapper">
        <div class="item-wrapper">
            <div class="item-header">
                <div class="date">{{ $article->created_at }}</div>
            </div>
            <div class="item-title">{{ $article->title }}</div>
            <div class="item-tags">
                <div class="item-tag">{{ $article->tag1 }}</div>
                @isset($article->tag2)
                    <div class="item-tag">{{ $article->tag2 }}</div>
                @endisset
                @isset($article->tag3)
                    <div class="item-tag">{{ $article->tag2 }}</div>
                @endisset
            </div>
            <div class="item-body">
                {{ $article->body }}
            </div>
        </div>
    </div>
@endsection
