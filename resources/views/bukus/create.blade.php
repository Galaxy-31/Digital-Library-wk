@extends('components.master')

@section('title', 'Buku')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Create Buku</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('bukus.store') }}" method="POST">
                            @csrf

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="ISBN">Kode Buku</label>
                                    <input type="text" class="form-control" id="ISBN" name="ISBN"
                                        placeholder="Kode Buku">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="judul">Judul Buku</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Judul Buku">
                                </div>
                            </div>

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="file">File Buku</label>
                                    <input type="file" class="form-control" id="file" name="file"
                                        placeholder="File Buku">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="pengarang">Pengarang</label>
                                    <input type="text" class="form-control" id="pengarang" name="pengarang"
                                        placeholder="Nama Pengarang">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="penerbit">Penerbit</label>
                                    <input type="text" class="form-control" id="penerbit" name="penerbit"
                                        placeholder="Nama Penerbit">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="kategori">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori"
                                        placeholder="Nama Kategori">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="tahun">Tahun</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun"
                                        placeholder="Tahun">
                                </div>
                            </div>
                            {{-- <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                        placeholder="Stok" value="{{ date('Y-m-d H:i:s') }}" hidden>
                            <input type="text" class="form-control" id="petugas" name="petugas"
                                        placeholder="Stok" value="{{ auth()->user()->name }}" hidden>
                            <div class="text-center"> --}}
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
