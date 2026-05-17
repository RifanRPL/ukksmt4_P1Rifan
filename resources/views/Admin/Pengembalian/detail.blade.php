@include('admin.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Pengembalian</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID</th>
                    <td>{{ $pengembalianAdmin->id }}</td>
                </tr>

                <tr>
                    <th width="30%">ID Peminjaman</th>
                    <td>{{ $pengembalianAdmin->peminjaman_id }}</td>
                </tr>

                <tr>
                    <th>Petugas (Mengurus Pengembalian)</th>
                    <td>
                        @if ($pengembalianAdmin->petugas_id==null)
                        Belum Direview
                        @else
                        {{$pengembalianAdmin->petugas->nama}}
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Pengembalian</th>
                    <td>{{ $pengembalianAdmin->tanggal_pengembalian }}</td>
                </tr>

                <tr>
                    <th>Kondisi</th>
                    <td>
                        @if ($pengembalianAdmin->kondisi == 'rusak_ringan')
                        <span class="badge bg-primary font-size-12 ms-2">Rusak Ringan</span>
                        @elseif ($pengembalianAdmin->kondisi == 'rusak_sedang')
                        <span class="badge bg-warning font-size-12 ms-2">Rusak Sedang</span>
                        @elseif ($pengembalianAdmin->kondisi == 'rusak_berat')
                        <span class="badge bg-danger font-size-12 ms-2">Rusak Berat</span>
                        @elseif ($pengembalianAdmin->kondisi == 'baik')
                        <span class="badge bg-success font-size-12 ms-2">Baik</span>
                        @else
                        <span class="badge bg-dark font-size-12 ms-2">Hilang</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Catatan</th>
                    <td>{{ $pengembalianAdmin->catatan }}</td>
                </tr>

                <tr>
                    <th>Created_At</th>
                    <td>{{ $pengembalianAdmin->created_at }}</td>
                </tr>

                <tr>
                    <th>Updated_At</th>
                    <td>{{ $pengembalianAdmin->updated_at }}</td>
                </tr>
            </table>

            <a href="{{ route('pengembalianAdmin.index') }}" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('pengembalianAdmin.edit', $pengembalianAdmin->id) }}" class='btn btn-warning mt-3'>Edit</a>
            <form action="{{ route('pengembalianAdmin.destroy', $pengembalianAdmin->id) }}" method="post">
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
