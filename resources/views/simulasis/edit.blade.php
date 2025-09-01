@extends('layouts.admin')
@section('content')
<div class="container-fluid">
      
   <h1>Edit Simulasi</h1>
    <form action="{{ route('simulasis.update',$simulasi) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-6">
            <label>Nama Simulasi</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul',$simulasi->judul) }}">
            @error('judul') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <div class="form-group">
                <label for="panduan">Panduan Simulasi</label>
                <textarea name="panduan" id="panduan" class="form-control" rows="4">{{ old('panduan',$simulasi->panduan) }}</textarea>
                @error('panduan') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection