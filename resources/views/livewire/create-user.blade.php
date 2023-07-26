<div>
    <nav aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb d-flex justify-content-start">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create User</li>
        </ol>
    </nav>


    <h2>Form User</h2>

    {{-- Form for adding a new user --}}
    <form wire:submit.prevent="create" enctype="multipart/form-data">
        <div class="mt-2">
            <label for="name">Full Name:</label>
            <input class="block mt-1 w-full" type="text" wire:model.defer="name" />
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2">
            <label for="tanggal_lahir">Date of Birth:</label>
            <input class="block mt-1 w-full" type="date" wire:model.defer="tanggal_lahir" />
            @error('tanggal_lahir')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2">
            <label>Gender:</label>
            <div>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Male" required
                        {{ old('jenis_kelamin') === 'Male' ? 'checked' : '' }} wire:model.defer="jenis_kelamin" />
                    Male
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Female" required
                        {{ old('jenis_kelamin') === 'Female' ? 'checked' : '' }} wire:model.defer="jenis_kelamin" />
                    Female
                </label>
            </div>
            @error('jenis_kelamin')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2">
            <label for="golongan_darah">Blood Type:</label>
            <select class="block mt-1 w-full" wire:model.defer="golongan_darah">
                <option value="">-- Please Select --</option>
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="O">O</option>
            </select>
            @error('golongan_darah')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="nomor_telephone">No Handphone:</label>
            <input class="block mt-1 w-full" type="number" wire:model.defer="nomor_telephone" />
            @error('nomor_telephone')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="alamat">Address:</label>
            <input class="block mt-1 w-full" type="text" wire:model.defer="alamat" />
            @error('alamat')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="email">Email:</label>
            <input class="block mt-1 w-full" type="email" wire:model.defer="email" />
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <label for="password">Password:</label>
            <input class="block mt-1 w-full" type="password" wire:model.defer="password" />
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2">
            <label for="password_confirmation">Confirm Password:</label>
            <input class="block mt-1 w-full" type="password" wire:model.defer="password_confirmation" />
            @error('password_confirmation')
                <span>{{ $message }}</span>
            @enderror
        </div>


        <div class="mt-2">
            <label for="hobi">Hobby:</label>
            <input class="block mt-1 w-full" type="text" wire:model.defer="hobi" />
            @error('hobi')
                <span>{{ $message }}</span>
            @enderror
        </div>


        <div class="mt-2">
            <label for="status">Status:</label>
            <div class="flex items-center mt-1">
                <label for="statusToggle" class="flex items-center cursor-pointer" x-data="{ status: @entangle('status') }"
                    @click="status = status === 'Active' ? 'Inactive' : 'Active'">
                    <div class="relative">
                        <input id="statusToggle" type="checkbox" class="sr-only" :checked="status === 'Active'">
                        <div class="block bg-gray-600 w-10 h-6 rounded-full"></div>
                        <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"
                            x-bind:style="status === 'Active' ? 'transform: translateX(100%)' : 'transform: translateX(0)'">
                        </div>
                    </div>
                    <div class="ml-3 text-gray-700 font-medium" x-text="status"></div>
                </label>
            </div>
            @error('status')
                <span>{{ $message }}</span>
            @enderror
        </div>


        <div class="mt-2">
            <label for="gambar">Image:</label>
            <input class="block mt-1 w-full" type="file" wire:model.defer="gambar" />
            @error('gambar')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <!-- resources/views/livewire/create-user.blade.php -->

        <div class="mt-4">
            <button class="bg-green-600 border border-green-700 rounded px-4 py-2 text-white"
                type="submit">Record</button>
            <button class="bg-red-600 rounded px-4 py-2 text-white ml-4" type="button"
                @click="resetForm">Cancel</button>
        </div>

    </form>
</div>
