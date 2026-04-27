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
                                <th>Code Unit</th>
                                <th>Status</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Gusti</td>
                                <td>Laptop</td>
                                <td>L098</td>
                                <td>Belum diapa-apain</td>
                                <td>Jam segitulah</td>
                                <td>Jam segitulah</td>
                                <td>
                                    <a class="btn btn-primary col-9" href="{{ route('peminjaman.detail') }}">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('petugas.layout.footer')