@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-white">Daftar Member</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.members.create') }}" class="btn btn-gradient mb-3">Tambah Member</a>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Deskripsi</th>
                <th>Social Links</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($members as $member)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($member->image)
                            <img src="{{ asset('images/members/'.$member->image) }}" width="80" class="rounded">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->role }}</td>
                    <td>{{ $member->description }}</td>
                    <td>
                        @if($member->linkedin)
                            <a href="{{ $member->linkedin }}" target="_blank">LinkedIn</a><br>
                        @endif
                        @if($member->github)
                            <a href="{{ $member->github }}" target="_blank">GitHub</a><br>
                        @endif
                        @if($member->twitter)
                            <a href="{{ $member->twitter }}" target="_blank">Twitter</a>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-white">Belum ada member</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
    body {
        background: linear-gradient(to right, #6a11cb, #2575fc);
    }
    .btn-gradient {
        background: linear-gradient(90deg, #6a11cb, #2575fc);
        color: white;
        border: none;
    }
    .btn-gradient:hover {
        opacity: 0.9;
    }
</style>
@endsection
