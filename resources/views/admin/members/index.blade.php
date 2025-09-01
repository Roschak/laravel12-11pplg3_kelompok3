<x-app-layout>
    <h1 class="mb-4 text-white text-2xl font-bold">Daftar Member</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white px-4 py-2 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.members.create') }}" 
       class="inline-block mb-3 px-4 py-2 rounded text-white font-medium bg-gradient-to-r from-purple-600 to-blue-500 hover:opacity-90">
       Tambah Member
    </a>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gradient-to-r from-purple-600 to-blue-500 text-white">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Foto</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2">Deskripsi</th>
                    <th class="px-4 py-2">Social Links</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 text-center">
                            @if($member->image)
                                <img src="{{ asset('images/members/'.$member->image) }}" 
                                     class="w-20 h-20 object-cover rounded">
                            @else
                                <span class="text-gray-400">No Image</span>
                            @endif
                        </td>
                        <td class="px-4 py-2">{{ $member->name }}</td>
                        <td class="px-4 py-2">{{ $member->role }}</td>
                        <td class="px-4 py-2">{{ $member->description }}</td>
                        <td class="px-4 py-2 space-y-1">
                            @if($member->linkedin)
                                <a href="{{ $member->linkedin }}" target="_blank" class="text-blue-600 hover:underline">LinkedIn</a><br>
                            @endif
                            @if($member->github)
                                <a href="{{ $member->github }}" target="_blank" class="text-gray-800 hover:underline">GitHub</a><br>
                            @endif
                            @if($member->twitter)
                                <a href="{{ $member->twitter }}" target="_blank" class="text-sky-500 hover:underline">Twitter</a>
                            @endif
                        </td>
                        <td class="px-4 py-2 text-center">
                            <form action="{{ route('admin.members.destroy', $member->id) }}" method="POST" 
                                  onsubmit="return confirm('Yakin ingin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-gray-500">Belum ada member</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
