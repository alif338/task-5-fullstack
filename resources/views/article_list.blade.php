@extends('layouts.app')

@section('content')

@if(session('status'))
<div class="alert alert-success alert-dismissible fade show mx-4" role="alert">
<strong>Success!</strong> {{session('status')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
        
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forEach($articles as $article)
                <div class="card card-spacer">
                    <div class="card-header"><h3>{{ $article->title }}</h3></div>

                    <div class="card-body d-flex flex-column">
                        <small class="text-muted">By: {{ $article->user->name }}</small>
                        <span class="badge bg-secondary mb-2 mt-2" style="width: fit-content;">{{ $article->category->name}}</span>
                        <img src={{ $article->image }} alt="sample image" class="rounded" style="width: fit-content">
                        <p>{{ $article->content }}</p>
                        <small><strong>Tanggal dibuat: {{$article->created_at}}</strong></small>
                        <small><strong>Tanggal di-update: {{$article->updated_at}}</strong></small>
                    </div>
                </div>
            @endForeach
        </div>
    </div>
</div>
@endsection
