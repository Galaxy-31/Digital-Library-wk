@extends('components.master')

@section('title', 'Anggota')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Edit Anggota</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('anggotas.update', $buku->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="NIS">NIS Siswa</label>
                                    <input type="number" class="form-control" id="NIS" name="NIS"
                                        placeholder="Kode Buku" value="{{ $buku->NIS }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="nama Buku" value="{{ $buku->nama }}">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_hp">no_hp </label>
                                    <input type="no_hp" min="0" class="form-control" id="no_hp" name="no_hp"
                                        placeholder="no_hp " value="{{ $buku->no_hp }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Harga Beli" value="{{ $buku->alamat }}">
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
