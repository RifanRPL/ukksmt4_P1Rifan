@include('admin.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pengajuan Banding</h4>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pengaju</th>
                                <th>Direview Oleh</th>
                                <th>Status</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Gusti</td>
                                <td>--Belum Di Review--</td>
                                <td>--Belum Di Review--</td>
                                <td>Kemarin</td>
                                <td>Jam segitulah</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('banding.detail') }}">Detail</a>
                                    <!-- <a class="btn btn-danger col-9 my-1" href="">Hapus</a> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('admin.layout.footer')