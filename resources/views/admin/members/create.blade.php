@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Member Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" name="role" value="{{ old('role') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-control" name="image" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="linkedin" class="form-label">LinkedIn</label>
            <input type="url" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
        </div>

        <div class="mb-3">
            <label for="github" class="form-label">GitHub</label>
            <input type="url" class="form-control" name="github" value="{{ old('github') }}">
        </div>

        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="url" class="form-control" name="twitter" value="{{ old('twitter') }}">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
