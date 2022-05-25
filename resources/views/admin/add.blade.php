<x-admin-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('admin.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nama')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
			
			<!-- NIK -->
            <div>
                <x-label for="nik" :value="__('NIK')" />

                <x-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required autofocus />
            </div>
			
			<!-- Address -->
            <div>
                <x-label for="address" :value="__('Alamat')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>
			
			<!-- Status -->
            <div>
                <x-label for="status" :value="__('Status')" />

                <x-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autofocus />
            </div>
			
			<!-- Description -->
            <div>
                <x-label for="description" :value="__('Deskripsi')" />

                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Add') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-admin-guest-layout>