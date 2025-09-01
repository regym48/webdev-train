@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <h1>Tambah Simulasi</h1>
    <form action="{{ route('simulasis.store') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label>Nama Simulasi</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}">
            @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <div class="form-group">
                <label for="panduan">Panduan Simulasi</label>
                <textarea name="panduan" id="panduan" class="form-control" rows="4">{{ old('panduan') }}</textarea>
                @error('panduan') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
