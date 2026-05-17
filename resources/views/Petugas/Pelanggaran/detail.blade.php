@include('petugas.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Akun</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID</th>
                    <td>{{ $pelanggaran->id }}</td>
                </tr>

                <tr>
                    <th>Tanggal Pelunasan</th>
                    <td>
                        @if ($pelanggaran->tanggal_pelunasan == null)
                        ----
                        @else
                        {{ $pelanggaran->tanggal_pelunasan }}
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Denda</th>
                    <td>Rp. {{ $denda }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if ($pelanggaran->status == 0)
                        <span class="badge bg-danger font-size-12 ms-2">Belum Lunas</span>
                        @else
                        <span class="badge bg-success font-size-12 ms-2">Lunas</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $pelanggaran->deskripsi }}</td>
                </tr>

                <tr>
                    <th>Created_At</th>
                    <td>{{ $pelanggaran->created_at }}</td>
                </tr>

                <tr>
                    <th>Updated_At</th>
                    <td>{{ $pelanggaran->updated_at }}</td>
                </tr>
            </table>

            <a href="{{ route('pelanggaran.index') }}" class="btn btn-primary mt-3">Kembali</a>
            @if (!$pelanggaran->status == 1)
                <form action="{{ route('pelanggaran.update', $pelanggaran->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="1">
                <button class='btn btn-success mt-3' type="submit">
                    Ubah Menjadi Lunas
                </button>
                </form>
            @endif
        </div>
    </div>
</div>
@include('petugas.layout.footer')
