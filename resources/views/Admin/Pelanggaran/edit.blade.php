@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Pelanggaran</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('pelanggaranAdmin.update', $pelanggaranAdmin->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Pengembalian</label>
                    <div class="col-md-10">
                        <select class="form-select" name="pengembalian_id">
                            <option value="">-- Pilih Pengembalian --</option>
                            @foreach($pengembalian as $p)
                            <option value="{{ $p->id }}" @if($pelanggaranAdmin->pengembalian_id == $p->id) selected @endif>{{$p->id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Status Pelunasan</label>
                    <div class="col-md-10">
                        <select class="form-select" name="status">
                            <option value="1" @if($pelanggaranAdmin->status == 1) selected @endif>Sudah Lunas</option>
                            <option value="0" @if($pelanggaranAdmin->status == 0) selected @endif>Belum Lunas</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Pelunasan</label>
                    <div class="col-md-10">
                        <input class="form-control" name="tanggal_pelunasan" type="date" id="example-date-input" value="{{ $pelanggaranAdmin->tanggal_pelunasan }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Denda</label>
                    <div class="col-md-10">
                        <select class="form-select" name="denda">
                            <option value="0" @if($pelanggaranAdmin->denda == 0) selected @endif>Kondisi Baik, Tidak Ada Denda</option>
                            <option value="20" @if($pelanggaranAdmin->denda == 20) selected @endif>Rusak Ringan, Denda 20%</option>
                            <option value="40" @if($pelanggaranAdmin->denda == 40) selected @endif>Rusak Sedang, Denda 40%</option>
                            <option value="80" @if($pelanggaranAdmin->denda == 80) selected @endif>Rusak Berat, Denda 80%</option>
                            <option value="100" @if($pelanggaranAdmin->denda == 100) selected @endif>Hilang, Denda 100%</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Denda Telat</label>
                    <div class="col-md-10">
                        <select class="form-select" name="denda_telat">
                            <option value="0" @if($pelanggaranAdmin->denda_telat == 0) selected @endif>Tidak Telat, Tidak Ada Denda</option>
                            <option value="5" @if($pelanggaranAdmin->denda_telat == 5) selected @endif>Telat, Denda 5% Per Hari Telat</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Deskripsi</label>
                    <div class="col-md-10">
                        <input class="form-control" name="deskripsi" type="text" id="example-text-input" value="{{$pelanggaranAdmin->deskripsi}}">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-primary" href="{{ route('pelanggaranAdmin.show', $pelanggaranAdmin->id) }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('admin.layout.footer')