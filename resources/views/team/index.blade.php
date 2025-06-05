<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-md font-semibold">Team Baru</h2>
                </div>

                <div class="p-6">
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-800 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('team.store')}}">
                        @csrf
                        
                        <div>
                            <x-input-label for="nama_team" :value="__('Nama Team')" />
                            <x-text-input id="nama_team" class="block mt-1 w-full" type="text" name="nama_team" 
                            :value="old('nama_team')" required autofocus />
                            <x-input-error :messages="$errors->get('nama_team')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Tambah Team') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h2 class="text-md font-semibold">Data Team</h2>
                </div>

                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="border-b-2 border-t-2">
                                <th class="text-sm p-2">Nama Team</th>
                                <th class="text-sm p-2">Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr class="border-b-2 border-t-2">
                                        <td class="p-2">{{$item->nama_team}}</td>
                                        <td>
                                            <a href="#">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
