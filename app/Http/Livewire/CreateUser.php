<?php
// app/Http/Livewire/CreateUser.php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class CreateUser extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $alamat;
    public $nomor_telephone;
    public $tanggal_lahir;
    public $hobi;
    public $jenis_kelamin;
    public $golongan_darah;
    public $status = 'Inactive'; // Set default status as 'Inactive'
    public $gambar;

    public function create()
    {
        // Validasi input form
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'alamat' => 'required|string|max:255',
            'nomor_telephone' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'hobi' => 'required|string|max:255',
            'jenis_kelamin' =>  ['required', 'in:Male,Female'],
            'golongan_darah' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan gambar ke folder uploads
        $gambarName = $this->gambar->store('uploads', 'public');

        // Membuat record user baru di database
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'alamat' => $this->alamat,
            'nomor_telephone' => $this->nomor_telephone,
            'tanggal_lahir' => $this->tanggal_lahir,
            'hobi' => $this->hobi,
            'jenis_kelamin' => $this->jenis_kelamin,
            'golongan_darah' => $this->golongan_darah,
            'status' => $this->status,
            'gambar' => $gambarName,
        ]);

        // Reset input fields setelah user berhasil ditambahkan
        $this->reset(['name', 'email', 'password', 'alamat', 'nomor_telephone', 'tanggal_lahir', 'hobi', 'jenis_kelamin', 'golongan_darah', 'status', 'gambar']);

        // Flash message untuk notifikasi berhasil
        session()->flash('success', 'User created successfully.');

        // Redirect kembali ke halaman dashboard setelah user berhasil ditambahkan
        return redirect()->route('dashboard');
    }


    public function render()
    {
        return view('livewire.create-user');
    }
}
