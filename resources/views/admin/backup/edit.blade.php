<x-admin-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.update') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$calon->name}}" required autofocus />
            </div>
			
			<!-- NIK -->
            <div>
                <x-label for="nik" :value="__('NIK')" />

                <x-input readonly id="nik" class="block mt-1 w-full" type="text" name="nik" value="{{$calon->nik}}" required autofocus />
            </div>
			
			<!-- Photo -->
            <div>
                <x-label for="photo" :value="__('Foto')" />

                <x-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" required autofocus />
            </div>
			
			<!-- Address -->
            <div>
                <x-label for="address" :value="__('Alamat')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{$calon->address}}" required autofocus />
            </div>
			
			<!-- Status -->
            <div>
                <x-label for="status" :value="__('Status')" />

                <x-input id="status" class="block mt-1 w-full" type="text" name="status" value="{{$calon->status}}" required autofocus />
            </div>
			
			<!-- Description -->
            <div>
                <x-label for="description" :value="__('Deskripsi')" />

                <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$calon->description}}" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Edit') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-admin-guest-layout>