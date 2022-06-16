@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @for ($i = 0; $i < 5; $i++)
            <div class="card card-spacer">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif --}}
                    
                    <div class="">
                        {{ __('You are logged in!') }}
                    </div>

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
            @endfor
        </div>
    </div>
</div>
@endsection
