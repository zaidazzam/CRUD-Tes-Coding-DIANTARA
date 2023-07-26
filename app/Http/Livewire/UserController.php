<?php

namespace App\Http\Controllers;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'alamat' => ['required', 'string', 'max:255'],
            'nomor_telephone' => ['required', 'string', 'max:20'],
            'tanggal_lahir' => 'required|date',
            'hobi' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'golongan_darah' => ['required', 'string', 'max:255'],
            'status' => ['required', 'boolean'],
            'gambar' => 'required',
        ]);

        $gambarName = null;
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('uploads/'), $filename);
        $gambarName = 'uploads/' . $filename;
    }

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'alamat' => $request->alamat,
        'nomor_telephone' => $request->nomor_telephone,
        'tanggal_lahir' => $request->tanggal_lahir,
        'hobi' => $request->hobi,
        'jenis_kelamin' => $request->jenis_kelamin,
        'golongan_darah' => $request->golongan_darah,
        'status' => $request->status,
        'gambar' => $gambarName,
    ]);

    return redirect()->route('dashboard')->with('success', 'User added successfully.');
    }
}
