@include('peminjam.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Peminjaman</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID Peminjaman</th>
                    <td>{{ $peminjaman->id }}</td>
                </tr>

                <tr>
                    <th>Alat</th>
                    <td>{{ $peminjaman->alat->nama }}</td>
                </tr>

                <tr>
                    <th>Tanggal Pengajuan</th>
                    <td>{{ $peminjaman->created_at }}</td>
                </tr>

                <tr>
                    <th>Tanggal Alat Akan Dipinjam</th>
                    <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                </tr>

                <tr>
                    <th>Tujuan</th>
                    <td>{{ $peminjaman->tujuan }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if ($peminjaman->pengembalian?->pelanggaran != null)
                            @if ($peminjaman->pengembalian->pelanggaran->status == 0)
                            <span class="badge bg-danger font-size-12 ms-2">Pelanggaran</span>
                            @else
                            <span class="badge bg-success font-size-12 ms-2">Lunas</span>
                            @endif
                        @elseif ($peminjaman->pengembalian)
                        <span class="badge bg-success font-size-12 ms-2">Dikembalikan</span>
                        @elseif ($peminjaman->status == 'pending')
                        <span class="badge bg-secondary font-size-12 ms-2">Pending</span>
                        @elseif ($peminjaman->status == 'disetujui')
                        <span class="badge bg-primary font-size-12 ms-2">Disetujui</span>
                        @else
                        <span class="badge bg-danger font-size-12 ms-2">Ditolak</span>
                        @endif
                    </td>
                </tr>

                @if ($peminjaman->pengembalian?->pelanggaran != null)
                <tr>
                    <th>Denda</th>
                    <td>Rp. {{$denda}}</td>
                </tr>

                <tr>
                    <th>Deskripsi Pelanggaran</th>
                    <td>{{$peminjaman->pengembalian->pelanggaran->deskripsi}}</td>
                </tr>
                    @if ($peminjaman->pengembalian?->pelanggaran->tanggal_pelunasan != null)
                    <tr>
                        <th>Tanggal Pelunasan</th>
                        <td>{{$peminjaman->pengembalian?->pelanggaran->tanggal_pelunasan}}</td>
                    </tr>
                    @endif
                @endif
                @if (!$peminjaman->petugas_id==null)
                <tr>
                    <th>Batas Waktu</th>
                    <td>{{ $peminjaman->batas_waktu }}</td>
                </tr>

                <tr>
                    <th>Catatan</th>
                    @if (!$peminjaman->pengembalian)
                    <td>{{ $peminjaman->catatan }}</td>
                    @else
                    <td>{{ $peminjaman->pengembalian->catatan }}</td>
                    @endif
                </tr>
                @endif
            </table>
        </div>
    </div>
</div>
@include('peminjam.layout.footer')