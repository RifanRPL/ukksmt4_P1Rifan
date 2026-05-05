@include('petugas.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pelanggaran</h4>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID Pengembalian</th>
                                <th>Peminjam</th>
                                <th>Status</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-primary col-9" href="">Detail</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('petugas.layout.footer')