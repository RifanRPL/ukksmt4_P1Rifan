@include('admin.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Peminjaman</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID</th>
                    <td>{{ $peminjamanAdmin->id }}</td>
                </tr>

                <tr>
                    <th>Alat</th>
                    <td>{{ $peminjamanAdmin->alat->nama }}</td>
                </tr>

                <tr>
                    <th>Petugas (Review Pengajuan)</th>
                    <td>
                        @if ($peminjamanAdmin->petugas_id==null)
                        Belum Direview
                        @else
                        {{$peminjamanAdmin->petugas->nama}}
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if ($peminjamanAdmin->pengembalian?->pelanggaran != null)
                            @if ($peminjamanAdmin->pengembalian->pelanggaran->status == 0)
                            <span class="badge bg-danger font-size-12 ms-2">Pelanggaran</span>
                            @else
                            <span class="badge bg-success font-size-12 ms-2">Lunas</span>
                            @endif
                        @elseif ($peminjamanAdmin->pengembalian)
                        <span class="badge bg-success font-size-12 ms-2">Dikembalikan</span>
                        @elseif ($peminjamanAdmin->status == 'pending')
                        <span class="badge bg-secondary font-size-12 ms-2">Pending</span>
                        @elseif ($peminjamanAdmin->status == 'disetujui')
                        <span class="badge bg-primary font-size-12 ms-2">Disetujui</span>
                        @else
                        <span class="badge bg-danger font-size-12 ms-2">Ditolak</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Peminjaman</th>
                    <td>{{ $peminjamanAdmin->tanggal_peminjaman }}</td>
                </tr>

                <tr>
                    <th>Batas Waktu</th>
                    <td>
                        @if ($peminjamanAdmin->petugas_id==null)
                        Belum Direview
                        @else
                        {{$peminjamanAdmin->batas_waktu}}
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Tujuan Peminjaman</th>
                    <td>{{ $peminjamanAdmin->tujuan }}</td>
                </tr>
                
                <tr>
                    <th>Catatan Petugas</th>
                    <td>{{ $peminjamanAdmin->catatan }}</td>
                </tr>

                <tr>
                    <th>Created_At</th>
                    <td>{{ $peminjamanAdmin->created_at }}</td>
                </tr>

                <tr>
                    <th>Updated_At</th>
                    <td>{{ $peminjamanAdmin->updated_at }}</td>
                </tr>
            </table>

            <a href="{{ route('peminjamanAdmin.index') }}" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('peminjamanAdmin.edit', $peminjamanAdmin->id) }}" class='btn btn-warning mt-3'>Edit</a>
            <form action="{{ route('peminjamanAdmin.destroy', $peminjamanAdmin->id) }}" method="post">
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
