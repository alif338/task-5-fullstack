@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forEach($articles as $article)
                <div class="card card-spacer">
                    <div class="card-header"><h3>{{ $article->title }}</h3></div>

                    <div class="card-body d-flex flex-column">
                        <small class="text-muted">By: {{ $article->user->name }}</small>
                        <span class="badge bg-secondary mb-2 mt-2" style="width: fit-content;">{{ $article->category->name}}</span>
                        <img src={{ $article->image}} alt="sample image" class="rounded" style="width: fit-content">
                        <p>{{ $article->content }}</p>
                    </div>
                </div>
            @endForeach
        </div>
    </div>
</div>
@endsection
