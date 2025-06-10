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
                    <h2 class="text-md font-semibold">Detail Team</h2>
                </div>

                <div class="p-6">
                    <table class="min-w-full">
                        <tr>
                            <td>Nama Team</td>
                            <td>{{$data->nama_team}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h2 class="text-md font-semibold">Tambahkan Task</h2>
                </div>

                <div class="p-6">
                    <form method="POST" action="{{route('simpan.task', $data->id)}}">
                        @csrf
                        <div>
                            <x-input-label for="judul_task" :value="__('Task')" />
                            <x-text-input id="judul_task" class="block mt-1 w-full" type="text" name="judul_task" 
                            :value="old('judul_task')" required autofocus />
                            <x-input-error :messages="$errors->get('judul_task')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                            <textarea name="deskripsi" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                            <x-input-error :messages="$errors->get('telpon')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="start_date" :value="__('Start Date')" />
                            <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" 
                            :value="old('start_date')" required autofocus />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="end_date" :value="__('End Date')" />
                            <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" 
                            :value="old('end_date')" required autofocus />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Tambah Task') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h2 class="text-md font-semibold">Tambahkan Member</h2>
                </div>

                <div class="p-6">
                    <form method="POST" action="{{route('simpan.member', $data->id)}}">
                        @csrf
                        <div>
                            <x-input-label for="nama" :value="__('Nama Member')" />
                            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" 
                            :value="old('nama')" required autofocus />
                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="telpon" :value="__('Telpon')" />
                            <x-text-input id="telpon" class="block mt-1 w-full" type="text" name="telpon" 
                            :value="old('telpon')" required autofocus />
                            <x-input-error :messages="$errors->get('telpon')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Tambah Member') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h2 class="text-md font-semibold">Data Member</h2>
                </div>

                <div class="p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <th>Nama Member</th>
                                <th>No Handphone</th>
                            </thead>
                            <tbody>
                                @foreach ($member as $item)
                                    <tr class="border-b-2 border-t-2">
                                        <td class="p-2">{{$item->nama}}</td>
                                        <td>
                                            {{$item->telpon}}
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
