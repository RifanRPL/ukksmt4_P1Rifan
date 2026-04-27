@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah User</h4>
            </div>
            <div class="card-body">
            <form action="">
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="example-text-input">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-danger" href="{{ route('kategori.index') }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@include('admin.layout.footer')