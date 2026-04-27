@include('admin.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User</h4>
                <a class="btn btn-primary" href="{{ route('user.create') }}">Tambah Akun</a>
                    <div class="col-4">
                        <label class="col-form-label">Role</label>
                        <select class="form-select">
                            <option>Peminjam</option>
                            <option>Petugas</option>
                            <option>Admin</option>
                        </select>
                    </div>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Credit Score</th>
                                <th>Ban Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allUser as $key => $user)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->credit_score }}</td>
                                <td>{{ $user->ban_status }}</td>
                                <td><a class="btn btn-primary" href="{{ route('user.show', $user->id) }}">Detail</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('admin.layout.footer')