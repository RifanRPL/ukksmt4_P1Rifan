@include('admin.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Alat</h4>
                <a class="btn btn-primary" href="{{ route('alat.create') }}">Tambah Alat</a>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Tipe Item</th>
                                <th>Harga</th>
                                <th>Minimal Credit Score</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Device</td>
                                <td>Laptop</td>
                                <td>Elektronik</td>
                                <td>1000000</td>
                                <td>80</td>
                                <td>Ini Laptop</td>
                                <td>*foto</td>
                                <td>Jam segitulah</td>
                                <td>Jam segitulah</td>
                                <td>
                                    <a class="btn btn-warning col-9" href="{{ route('alat.edit') }}">Edit</a>
                                    <a class="btn btn-danger col-9 my-1" href="">Hapus</a>
                                    <a class="btn btn-primary col-9" href="/unit">Lihat Unit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('admin.layout.footer')