@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Alat</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('alat.update', $alat->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ $alat->nama }}" name="nama" type="text" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Kategori</label>
                    <div class="col-md-10">
                        <select class="form-select" name="kategori_id">
                            @foreach($allKategori as $k)
                            <option value="{{ $k->id }}" @if($alat->kategori_id == $k->id) selected @endif>{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Harga</label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ $alat->harga }}" name="harga" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Minimal Credit Score</label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ $alat->min_credit_score }}" name="min_credit_score" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Deskripsi</label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ $alat->deskripsi }}" name="deskripsi" type="text" id="example-text-input">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Foto</label>
                    <div class="col-md-10">
                        <input class="form-control" name="foto" type="file" id="example-text-input">
                        <img class="w-25" src="{{ asset('assets/images/alats/'.$alat->foto) }}" alt="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Status</label>
                    <div class="col-md-10">
                        <select class="form-select" name="status">
                            <option value="1" @if($alat->status == '1') selected @endif>Ready</option>
                            <option value="0" @if($alat->status == '0') selected @endif>Tidak</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-primary" href="{{ route('alat.show', $alat->id) }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('admin.layout.footer')