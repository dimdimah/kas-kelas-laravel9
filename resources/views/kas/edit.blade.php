@extends('page.template');
<!-- START FORM -->
@section('content')
    <form action='{{ url('kas/' . $data->nim) }}' method='post'>
        @csrf
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10 ">
                    <div class="border border-muted rounded-2 p-2">{{ $data->nim }}
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal' value="{{ $data->tanggal }}" id="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='Keterangan' value="{{ $data->Keterangan }}"
                        id="Keterangan">
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
