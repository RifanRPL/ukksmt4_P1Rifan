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
                    <td>{{ $alat->id }}</td>
                </tr>

                <tr>
                    <th>Kategori</th>
                    <td>{{ $alat->kategori_id }}</td>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td>{{ $alat->nama }}</td>
                </tr>

                <tr>
                    <th>Harga</th>
                    <td>{{ $alat->harga }}</td>
                </tr>

                <tr>
                    <th>Minimal Credit Score</th>
                    <td>{{ $alat->min_credit_score }}</td>
                </tr>

                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $alat->deskripsi }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if($alat->status == '0') Tidak @endif
                        @if($alat->status == '1') Ready @endif
                    </td>
                </tr>

                <tr>
                    <th>Foto</th>
                    <td><img class="w-25" src="{{ asset('assets/images/alats/'.$alat->foto) }}" alt=""></td>
                </tr>

                <tr>
                    <th>Created_At</th>
                    <td>{{ $alat->created_at }}</td>
                </tr>

                <tr>
                    <th>Updated_At</th>
                    <td>{{ $alat->updated_at }}</td>
                </tr>
            </table>

            <a href="{{ route('alat.index') }}" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('alat.edit', $alat->id) }}" class='btn btn-warning mt-3'>
                Edit
            </a>
            <form action="{{ route('alat.destroy', $alat->id) }}" method="post">
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
