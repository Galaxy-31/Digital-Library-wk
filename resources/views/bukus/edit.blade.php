@extends('components.master')

@section('title', 'Buku')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Edit Buku</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('bukus.update', $buku->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="ISBN">Kode Buku</label>
                                    <input type="number" class="form-control" id="ISBN" name="ISBN"
                                        placeholder="Kode Buku" value="{{ $buku->ISBN }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="judul">Judul Buku</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Judul Buku" value="{{ $buku->judul }}">
                                </div>
                            </div>
                            {{-- <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama_merek">Nama Merek</label>
                                    <select name="nama_merek" id="nama_merek" class="form-select">
                                        @foreach ($merek as $m)
                                            <option value="{{ $m->nama_merek }}" @if($m->nama_merek == $buku->nama_merek) selected @endif>{{ $m->nama_merek }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama_distributor">Nama Distributor</label>
                                    <select name="nama_distributor" id="nama_distributor" class="form-select">
                                        @foreach ($distributor as $d)
                                            <option value="{{ $d->nama_distributor }}" @if($d->nama_distributor == $buku->nama_distributor) selected @endif>{{ $d->nama_distributor }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="file">File Buku</label>
                                    <input type="file" class="form-control" id="file" name="file"
                                        placeholder="File Buku" value="{{ $buku->file }}">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="pengarang">Pengarang</label>
                                    <input type="text" class="form-control" id="pengarang" name="pengarang"
                                        placeholder="Pengarang" value="{{ $buku->pengarang }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="penerbit">Penerbit</label>
                                    <input type="text" class="form-control" id="penerbit" name="penerbit"
                                        placeholder="penerbit" value="{{ $buku->penerbit }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="kategori">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori"
                                        placeholder="kategori" value="{{ $buku->kategori }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="tahun">Tahun</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun"
                                        placeholder="tahun" value="{{ $buku->tahun }}">
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                                        placeholder="Tanggal Masuk" value="{{ $buku->tanggal_masuk }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="petugas" name="petugas"
                                        placeholder="Petugas" value="{{ $buku->petugas }}">
                                </div>
                            </div> --}}
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
