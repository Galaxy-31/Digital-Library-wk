@extends('components.master')

@section('title', 'Categori')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Edit Categori</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('categoris.update', $categori->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nama" value="{{ $categori->name }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
