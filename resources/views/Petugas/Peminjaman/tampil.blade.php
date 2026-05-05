@include('petugas.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Pengajuan Peminjaman</h4>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pengaju</th>
                                <th>Alat</th>
                                <th>Status</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allPeminjaman as $key => $peminjaman)
                            <tr>
                                <th scope="row">{{ $peminjaman->id }}</th>
                                <td>{{ $peminjaman->peminjam->nama }}</td>
                                <td>{{ $peminjaman->alat->nama }}</td>
                                <td> @if ($peminjaman->pengembalian)
                                    <span class="badge bg-success font-size-12 ms-2">Dikembalikan</span>
                                    @elseif ($peminjaman->status == 'pending')
                                    <span class="badge bg-secondary font-size-12 ms-2">Pending</span>
                                    @elseif ($peminjaman->status == 'disetujui')
                                    <span class="badge bg-primary font-size-12 ms-2">Disetujui</span>
                                    @else
                                    <span class="badge bg-danger font-size-12 ms-2">Ditolak</span>
                                    @endif
                                <td>{{ $peminjaman->created_at }}</td>
                                <td>{{ $peminjaman->updated_at }}</td>
                                <td>
                                    <a class="btn btn-primary col-9" href="{{ route('peminjaman.show', $peminjaman->id) }}">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('petugas.layout.footer')