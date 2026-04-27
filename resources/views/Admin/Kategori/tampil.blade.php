@include('admin.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Kategori</h4>
                <a class="btn btn-primary" href="{{ route('kategori.create') }}">Tambah Kategori</a>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Device</td>
                                <td><a class="btn btn-warning m-1" href="{{ route('kategori.edit', 1) }}">Edit</a><a class="btn btn-danger" href="">Hapus</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('admin.layout.footer')