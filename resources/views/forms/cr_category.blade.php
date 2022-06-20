@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buar Artikel Baru') }}</div>
                
                <div class="card-body">
                    <form action="POST" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="name-category" class="col-md-4 col-form-label text-md-end">{{ __('Name Category') }}</label>

                            <div class="col-md-6">
                                <input id="name-category" type="name-category" class="form-control @error('name-category') is-invalid @enderror" name="name-category" value="{{ old('name-category') }}" required autofocus>

                                @error('name-category')
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