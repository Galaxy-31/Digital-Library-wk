@extends('components.master')

@section('title', 'Anggota')

@section('content')
    <div class="row mt-4 justify-content-center align-items-center" style="height: calc(75vh)">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h3 class="text-capitalize text-center">Create Anggota</h3>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <form action="{{ route('anggotas.store') }}" method="POST">
                            @csrf

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="NIS">NIS Siswa</label>
                                    <input type="text" class="form-control" id="NIS" name="NIS"
                                        placeholder="Nis Siswa">
                                </div>
                                {{-- @error('NIS')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Nama Siswa">
                                </div>
                                {{-- @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="jk">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jk" name="jk"
                                        placeholder="Jenis Kelamin">
                                </div>
                            </div>
                            {{-- <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="no_hp">Nomor Telepon</label>
                                    <input type="number" pattern="^[0-9]\d*$" minlength="10" maxlength="13" name="hp" min="0"
                                    class="form-control @error('hp') is-invalid @enderror" id="hp" value="{{ old('hp') }}>
                                </div> --}}
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label class="h6 text-capitalize" for="no_hp">Nomor Telepon</label>
                                        <input type="number" class="form-control" id="no_hp" name="no_hp"
                                            placeholder="Nomor Telepon">
                                    </div>
                                </div>
                                {{-- @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label class="h6 text-capitalize" for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Alamat">
                                </div>
                                {{-- @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
