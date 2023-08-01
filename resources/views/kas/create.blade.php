@extends('page.template');
<!-- START FORM -->
@section('content')
    @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <ul>{{ $item }}</ul>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <form action='{{ url('kas') }}' method='post'>
        @csrf
        <div class="my-3 p-5 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nim' value="{{ Session::get('nim') }}"
                        id="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}"
                        id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}"
                        id="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='keterangan' value="{{ Session::get('keterangan') }}"
                        id="keterangan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                </div>
            </div>
    </form>
    </div>
@endsection
<!-- AKHIR FORM -->
