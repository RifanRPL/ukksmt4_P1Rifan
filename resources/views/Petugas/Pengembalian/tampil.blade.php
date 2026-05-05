@include('petugas.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Pengembalian</h4>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Petugas</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Kondisi</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allPengembalian as $key => $pengembalian)
                            <tr>
                                <th scope="row">{{ $pengembalian->id }}</th>
                                <td>{{ $pengembalian->petugas->nama }}</td>
                                <td>{{ $pengembalian->tanggal_pengembalian }}</td>
                                <td> @if ($pengembalian->kondisi == 'rusak_ringan')
                                    <span class="badge bg-primary font-size-12 ms-2">Rusak Ringan</span>
                                    @elseif ($pengembalian->kondisi == 'rusak_sedang')
                                    <span class="badge bg-warning font-size-12 ms-2">Rusak Sedang</span>
                                    @elseif ($pengembalian->kondisi == 'rusak_berat')
                                    <span class="badge bg-danger font-size-12 ms-2">Rusak Berat</span>
                                    @elseif ($pengembalian->kondisi == 'baik')
                                    <span class="badge bg-success font-size-12 ms-2">Baik</span>
                                    @else
                                    <span class="badge bg-dark font-size-12 ms-2">Hilang</span>
                                    @endif</td>
                                <td>{{ $pengembalian->created_at }}</td>
                                <td>{{ $pengembalian->updated_at }}</td>
                                <td>
                                    <a class="btn btn-primary col-9" href="{{ route('pengembalian.show', $pengembalian->id) }}">Detail</a>
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