@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <h1>Tambah Materi</h1>
    <form action="{{ route('materis.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label>Nama Materi</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}">
            @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <div class="form-group">
                <label for="panduan">Isi Konten Materi</label>
                <textarea name="konten" id="panduan" class="form-control" rows="4">{{ old('konten') }}</textarea>
                @error('konten') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="mb-4">
            <div class="form-group">
                <label for="simulasi_id">Pilih Simulasi</label>
                <select name="simulasi_id" id="simulasi_id" class="form-control select2">
                    <option></option>
                    @foreach ($simulasis as $simulasi)
                    <option value="{{ $simulasi->id }}">{{ $simulasi->judul }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
