@extends('components.master')

@section('title', 'Penerbit')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Create Penerbit</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('penerbits.store') }}" method="POST">
                            @csrf

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama">Nama </label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder=" Nama">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label class="h6 text-capitalize" for="desk">Deskripsi</label>
                                        <textarea class="form-control form-control form-control-solid @error('desk')is-invalid @enderror" id="desk" name="desk" data-kt-autosize="true">{{ old('desk') }}</textarea>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Create</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
