@include('admin.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pelanggaran</h4>
                <a class="btn btn-primary" href="{{ route('pelanggaranAdmin.create') }}">Tambah Pelanggaran</a>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Peminjam</th>
                                <th>Denda</th>
                                <th>Status</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($allPelanggaran as $key => $pelanggaran)
                            <tr>
                                <th scope="row">{{ $pelanggaran->id }}</th>
                                <td>{{ $pelanggaran->pengembalian->peminjaman->peminjam->nama }}</td>
                                <td>{{ $pelanggaran->denda }}% (Denda Kerusakan)
                                    @if ($pelanggaran->denda_telat == 5)
                                        + {{$pelanggaran->denda_telat}}% (Per Hari Telat)
                                    @endif
                                </td>
                                <td> @if ($pelanggaran->status == 0)
                                    <span class="badge bg-danger font-size-12 ms-2">Belum Lunas</span>
                                    @else
                                    <span class="badge bg-success font-size-12 ms-2">Lunas</span>
                                    @endif
                                <td>{{ $pelanggaran->created_at }}</td>
                                <td>{{ $pelanggaran->updated_at }}</td>
                                <td>
                                    <a class="btn btn-primary col-9" href="{{ route('pelanggaranAdmin.show', $pelanggaran->id) }}">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('admin.layout.footer')