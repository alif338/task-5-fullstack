@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="row mb-3">
            <button type="button" class="btn btn-secondary" href="" style="width: fit-content; margin-right: 10px">Buat Artikel</a>
        </div>
          @forEach($articles as $article)
              <div class="card card-spacer">
                  <div class="card-header"><h3>{{ $article->title }}</h3></div>

                  <div class="card-body d-flex flex-column">
                      <small class="text-muted">By: {{ $article->user->name }}</small>
                      <span class="badge bg-secondary mb-2 mt-2" style="width: fit-content;">{{ $article->category->name}}</span>
                      <img src={{ $article->image}} alt="sample image" class="rounded" style="width: fit-content">
                      <p>{{ $article->content }}</p>

                      <div class="row mt-3">
                          <div class="col-md-8 offset-md-10">
                              <button type="button" class="btn btn-info">
                                  {{ __('Edit') }}
                              </button>
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  {{ __('Delete') }}
                              </button>

                              <!-- Modal Delete -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      Apakah anda yakin ingin menghapus artikel ini? <br><br>
                                      <b> {{ $article->title }} </b>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                                      <button type="button" class="btn btn-primary">batal</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endForeach
      </div>
  </div>
</div>
@endsection