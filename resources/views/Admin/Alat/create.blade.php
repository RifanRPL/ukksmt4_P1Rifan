@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Alat</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('alat.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" name="nama" type="text" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Kategori</label>
                    <div class="col-md-10">
                        <select class="form-select" name="kategori_id">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($allKategori as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Harga</label>
                    <div class="col-md-10">
                        <input class="form-control" name="harga" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Minimal Credit Score</label>
                    <div class="col-md-10">
                        <input class="form-control" name="min_credit_score" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Deskripsi</label>
                    <div class="col-md-10">
                        <input class="form-control" name="deskripsi" type="text" id="example-text-input">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Foto</label>
                    <div class="col-md-10">
                        <input class="form-control" name="foto" type="file" id="example-text-input">
                    </div>
                </div>
                <input class="form-control" name="status" type="hidden" value="1">  
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-primary" href="{{ route('alat.index') }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('admin.layout.footer')