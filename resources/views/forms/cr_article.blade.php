@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Buar Artikel Baru') }}</div>
              
              <div class="card-body">
                @if(!isset($article))
                <form id="article" method="POST" action="{{route('articles.store')}}">
                @else
                <form id="article" method="PUT" action="{{route('articles.update', ['article' => $article])}}">
                @endif
                    @csrf

                    <div class="row mb-3">
                        <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ isset($article) ? $article->title: old('title') }}" required autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Body Artikel') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="content" type="textarea" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autofocus> --}}
                            <textarea name="content" form="article" class="form-control @error('content') is-invalid @enderror" value="{{ isset($article) ? $article->content: old('content') }}" required autofocus>
                            {{ isset($article) ? $article->content: ""}}</textarea>

                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Link Gambar') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ isset($article) ? $article->image: old('image') }}" required autofocus>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="category_id" class="col-md-4 col-form-label text-md-end">{{ __('Kategori') }}</label>
                        
                        <div class="col-md-6">
                            <select name="category_id" class="@error('category') is-invalid @enderror" required>
                                <option value={{null}}>Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value={{ (int) $category->id }} {{ $category->id == $selectedID ? "selected" : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Buat') }}
                            </button>
                        </div>
                    </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection