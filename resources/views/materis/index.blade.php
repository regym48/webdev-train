@extends('layouts.admin')
@section('content')
<div class="container-fluid">
      
    <h1>Daftar Materi</h1>
    <a href="{{ route('materis.create') }}" class="btn btn-primary mb-2">Tambah Materi</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Materi</th>
                <th>Isi Konten</th>
                <th>Materi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse($materis as $materi)
            <tr>
                <td>{{ $materi->judul }}</td>
                <td>{{ $materi->konten }}</td>
                <td>{{ $materi->simulasi->judul ?? '-' }}</td>
                <td>
                    <a href="{{ route('materis.edit', $materi) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('materis.destroy', $materi) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">Tidak ada data materi</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $materis->links() }}
</div>
@endsection

@push('after-script')
    <script>
     console.log("Jalan")
    </script>
@endpush