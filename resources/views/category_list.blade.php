@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-3">
                <a class="btn btn-secondary" href="{{route('categories.create')}}" style="width: fit-content; margin-right: 10px">Buat kategori</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Number of Articles</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->user->name == auth()->user()->name ? "YOU" : $category->user->name}}</td>
                        <td>{{ $category->articles->count() }}</td>
                        <td>
                          @if($category->user->id == auth()->user()->id)
                            <a href="{{route('categories.edit', ['category' => $category])}}" class="btn btn-primary">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$category->id}}">Delete</button>
                            <!-- Modal Delete -->
                            <div class="modal fade" id="exampleModal-{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      Apakah anda yakin ingin menghapus Kategori ini? <br><br>
                                      <b>Aksi ini akan menghapus SEMUA artikel yang berketegori: {{ $category->name }} </b>
                                    </div>
                                    <div class="modal-footer">
                                      <form method="POST" action="{{route('categories.destroy', ['category' => $category])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                                      </form>
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">batal</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection