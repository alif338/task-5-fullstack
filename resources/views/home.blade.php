@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forEach($articles as $article)
                <div class="card card-spacer">
                    <div class="card-header"><h3>{{ $article->title }}</h3></div>

                    <div class="card-body d-flex flex-column">
                        {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif --}}
                        <small class="text-muted">By: {{ $article->user->name }}</small>
                        <img src={{ $article->image}} alt="sample image">
                        <p>{{ $article->content }}</p>

                        <div class="row mt-3">
                            <div class="col-md-8 offset-md-10">
                                <button type="button" class="btn btn-info">
                                    {{ __('Edit') }}
                                </button>
                                <button type="button" class="btn btn-danger">
                                    {{ __('Delete') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endForeach
            {{-- @for ($i = 0; $i < 5; $i++)
            @endfor --}}
        </div>
    </div>
</div>
@endsection
