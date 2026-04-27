@include('admin.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Unit dari ...</h4>
                <a class="btn btn-primary" href="{{ route('unit.create') }}">Tambah Unit</a>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Status</th>
                                <th>Catatan</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ready</td>
                                <td>Laptop</td>
                                <td>Jam segitulah</td>
                                <td>Jam segitulah</td>
                                <td>
                                    <a class="btn btn-warning col-3" href="{{ route('unit.edit') }}">Edit</a>
                                    <a class="btn btn-danger col-3 my-1" href="">Hapus</a>
                                    <a class="btn btn-primary col-3" href="/unit">Kondisi</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('admin.layout.footer')