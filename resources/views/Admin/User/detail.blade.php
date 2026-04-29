@include('admin.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Akun</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID</th>
                    <td>{{ $user->id }}</td>
                </tr>

                <tr>
                    <th>NIK</th>
                    <td>{{ $user->nik }}</td>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td>{{ $user->nama }}</td>
                </tr>

                <tr>
                    <th>No Hp</th>
                    <td>{{ $user->no_hp }}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $user->alamat }}</td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $user->tanggal_lahir }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>

                <tr>
                    <th>Password</th>
                    <td>{{ $user->password }}</td>
                </tr>

                <tr>
                    <th>Role</th>
                    <td>{{ $user->role }}</td>
                </tr>
                
                <tr>
                    <th>Credit Score</th>
                    <td>{{ $user->credit_score }}</td>
                </tr>

                <tr>
                    <th>Ban Status</th>
                    <td>
                        @if($user->ban_status == '0') Tidak @endif
                        @if($user->ban_status == '1') Ya @endif
                    </td>
                </tr>

                <tr>
                    <th>Created_At</th>
                    <td>{{ $user->created_at }}</td>
                </tr>

                <tr>
                    <th>Updated_At</th>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            </table>

            <a href="{{ route('user.index') }}" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('user.edit', $user->id) }}" class='btn btn-warning mt-3'>
                Edit
            </a>
            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                @csrf
                @method('DELETE')
            <button class='btn btn-danger mt-3' type="submit">
                Hapus
            </button>
            </form>
        </div>
    </div>
</div>
@include('admin.layout.footer')
