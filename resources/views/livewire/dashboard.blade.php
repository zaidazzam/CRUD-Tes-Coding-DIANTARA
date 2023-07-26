<nav aria-label="breadcrumb" class="mt-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
<div class="card bg-base-100 border">
    <div class="card-body">
        Welcome, {{ auth()->user()->name }}
    </div>
</div>


<div class="row mt-4">
    <div class="col-md-12 grid-margin">
        <div class="d-flex flex-row justify-content-center">
            <div class="card card-body bg-orange text-dark mb-3 mx-1 text-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user fa-2x mr-3"></i>
                    <div>
                        <h4>User: {{ $totalUsers }}</h4>
                    </div>
                </div>
            </div>
            <div class="card card-body bg-orange text-dark mb-3 mx-1 text-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-male fa-2x mr-3"></i>
                    <div>
                        <h4>Male: {{ $totalMale }}</h4>
                    </div>
                </div>
            </div>
            <div class="card card-body bg-orange text-dark mb-3 mx-1 text-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-female fa-2x mr-3"></i>
                    <div>
                        <h4>Female: {{ $totalFemale }}</h4>
                    </div>
                </div>
            </div>
            <div class="card card-body bg-orange text-dark mb-3 mx-1 text-center">
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle fa-2x mr-3"></i>
                    <div>
                        <h4>ActiveUsers: {{ $totalActiveUsers }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<!-- Tabel untuk menampilkan data user -->
<div class="card mt-4">
    <div class="card-body">
        <h3 class="text-lg font-semibold mb-4">List of Users</h3>
        <table class="table-fixed text-center">
            <thead class="bg-gray-200">
                <tr class="">
                    <th class="px-4 py-2">Full name</th>
                    <th class="px-4 py-2">Date of Birth</th>
                    <th class="px-4 py-2">Gender</th>
                    <th class="px-4 py-2">Blood Type</th>
                    <th class="px-4 py-2">No Hp</th>
                    <th class="px-4 py-2">Address</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Hoby</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->tanggal_lahir }}</td>
                        <td class="border px-4 py-2">{{ $user->jenis_kelamin }}</td>
                        <td class="border px-4 py-2">{{ $user->golongan_darah }}</td>
                        <td class="border px-4 py-2">{{ $user->nomor_telephone }}</td>
                        <td class="border px-4 py-2">{{ $user->alamat }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->hobi }}</td>
                        <td class="border px-4 py-2">{{ $user->status }}</td>
                        <td class="border px-4 py-2">
                            <img src="{{ asset('storage/' . $user->gambar) }}" alt="User Image"
                                class="h-16 w-16 rounded-full mx-auto">

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
