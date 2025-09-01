@extends('layouts.admin')
@section('content')
<div class="container-fluid">
      
    <h1>Daftar Simulasi</h1>
    <a href="{{ route('simulasis.create') }}" class="btn btn-primary mb-2">Tambah Simulasi</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Simulasi</th>
                <th>Panduan Simulasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($simulasis as $simulasi)
            <tr>
                <td>{{ $simulasi->judul }}</td>
                <td>{{ $simulasi->panduan }}</td>
                <td>
                    <a href="{{ route('simulasis.edit', $simulasi) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('simulasis.destroy', $simulasi) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">Tidak ada data simulasi</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $simulasis->links() }}
</div>
@endsection

@push('after-script')
    <script>
     console.log("Jalan")
    </script>
@endpush