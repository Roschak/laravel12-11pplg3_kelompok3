<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tambah Member Baru
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto py-8 px-6">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data" 
              class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 space-y-5">
            @csrf

            <!-- Nama -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                <input type="text" name="name" id="name" 
                       value="{{ old('name') }}" required
                       class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Role -->
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Role</label>
                <input type="text" name="role" id="role" 
                       value="{{ old('role') }}" required
                       class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi</label>
                <textarea name="description" id="description" rows="3" required
                          class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
            </div>

            <!-- Foto -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Foto</label>
                <input type="file" name="image" id="image" accept="image/*"
                       class="mt-1 block w-full text-sm text-gray-700 dark:text-gray-300 file:mr-4 file:rounded-lg file:border-0 file:bg-indigo-600 file:px-4 file:py-2 file:text-white hover:file:bg-indigo-700 cursor-pointer">
            </div>

            <!-- LinkedIn -->
            <div>
                <label for="linkedin" class="block text-sm font-medium text-gray-700 dark:text-gray-300">LinkedIn</label>
                <input type="url" name="linkedin" id="linkedin" 
                       value="{{ old('linkedin') }}"
                       class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- GitHub -->
            <div>
                <label for="github" class="block text-sm font-medium text-gray-700 dark:text-gray-300">GitHub</label>
                <input type="url" name="github" id="github" 
                       value="{{ old('github') }}"
                       class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Twitter -->
            <div>
                <label for="twitter" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Twitter</label>
                <input type="url" name="twitter" id="twitter" 
                       value="{{ old('twitter') }}"
                       class="mt-1 block w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">
                <a href="{{ route('admin.members.index') }}" 
                   class="inline-flex items-center px-4 py-2 rounded-lg bg-gray-500 text-white hover:bg-gray-600 transition">
                    Batal
                </a>
                <button type="submit" 
                        class="inline-flex items-center px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
