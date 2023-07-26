<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Fullname')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <div class="mt-4">
                <x-label for="tanggal_lahir" :value="__('Date of Birth')" />
                <x-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir"
                    :value="old('tanggal_lahir')" required />
            </div>
            <div class="mt-4">
                <x-label for="jenis_kelamin" :value="__('Gender')" />
                <div class="flex items-center">
                    <label class="mr-4">
                        <input type="radio" name="jenis_kelamin" value="Male" required
                            {{ old('jenis_kelamin') === 'Male' ? 'checked' : '' }}>
                        Male
                    </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="Female" required
                            {{ old('jenis_kelamin') === 'Female' ? 'checked' : '' }}>
                        Female
                    </label>
                </div>
            </div>

            <div class="mt-4">
                <x-label for="golongan_darah" :value="__('Blood Type')" />
                <select id="golongan_darah" name="golongan_darah" class="block mt-1 w-full" required>
                    <option value="">-- Please Select --</option>
                    <option value="A" {{ old('golongan_darah') === 'A' ? 'selected' : '' }}>A</option>
                    <option value="AB" {{ old('golongan_darah') === 'AB' ? 'selected' : '' }}>AB</option>
                    <option value="B" {{ old('golongan_darah') === 'B' ? 'selected' : '' }}>B</option>
                    <option value="O" {{ old('golongan_darah') === 'O' ? 'selected' : '' }}>O</option>
                </select>
            </div>


            <div class="mt-4">
                <x-label for="nomor_telephone" :value="__('No-Telp')" />
                <x-input id="nomor_telephone" class="block mt-1 w-full" type="number" name="nomor_telephone"
                    :value="old('nomor_telephone')" required />
            </div>

            <div class="mt-4">
                <x-label for="alamat" :value="__('Address')" />
                <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')"
                    required />
            </div>

            <div class="mt-4">
                <x-label for="status" :value="__('Status')" />
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="toggleStatus" name="status"
                        value="Active" {{ old('status') === 'Active' ? 'checked' : '' }}>
                    <label class="form-check-label" for="toggleStatus">
                        @if (old('status') === 'Active' || old('status') === null)
                            Active
                        @else
                            Inactive
                        @endif
                    </label>
                </div>
            </div>




            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>
            <!-- Hobi -->
            <div class="mt-4">
                <x-label for="hobi" :value="__('Hobby')" />
                <x-input id="hobi" class="block mt-1 w-full" type="text" name="hobi" :value="old('hobi')"
                    required />
            </div>
            <!-- Gambar -->
            <div class="mt-4">
                <x-label for="gambar" :value="__('Image')" />
                <x-input id="gambar" class="block mt-1 w-full" type="file" name="gambar" :value="old('gambar')" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleStatus = document.getElementById('toggleStatus');
        const statusLabel = toggleStatus.nextElementSibling;

        toggleStatus.addEventListener('change', function() {
            statusLabel.textContent = this.checked ? 'Active' : 'Inactive';
        });
    });
</script>
