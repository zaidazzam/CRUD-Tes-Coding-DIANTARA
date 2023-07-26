<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Dashboard extends Component
{
    public $users;
    public $totalUsers;
    public $totalMale;
    public $totalFemale;
    public $totalActiveUsers;

    public function mount()
    {
        // Mengambil semua data user dari model User saat komponen dimuat
        $this->users = User::all();

        // Menghitung total jumlah user
        $this->totalUsers = User::count();

        // Menghitung total jumlah male
        $this->totalMale = User::where('jenis_kelamin', 'Male')->count();

        // Menghitung total jumlah female
        $this->totalFemale = User::where('jenis_kelamin', 'Female')->count();

        // Menghitung total jumlah status active
        $this->totalActiveUsers = User::where('status', 'Active')->count();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
