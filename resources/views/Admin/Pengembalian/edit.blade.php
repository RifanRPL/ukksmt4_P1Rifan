@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Pengembalian</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('pengembalianAdmin.update', $pengembalianAdmin->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Peminjaman</label>
                    <div class="col-md-10">
                        <select class="form-select" name="peminjaman_id">
                            <option value="">-- Pilih Peminjaman --</option>
                            @foreach($peminjaman as $p)
                            <option value="{{ $p->id }}" @if($pengembalianAdmin->peminjaman_id == $p->id) selected @endif>{{$p->id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Petugas</label>
                    <div class="col-md-10">
                        <select class="form-select" name="petugas_id">
                            <option value="">-- Pilih Petugas --</option>
                            @foreach($petugas as $pt)
                            <option value="{{ $pt->id }}" @if($pengembalianAdmin->petugas_id == $pt->id) selected @endif>{{ $pt->nama }} ({{$pt->id}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Kondisi Alat</label>
                    <div class="col-md-10">
                        <select class="form-select" name="kondisi">
                            <option value="rusak_ringan" @if($pengembalianAdmin->kondisi == 'rusak_ringan') selected @endif>Rusak Ringan</option>
                            <option value="rusak_sedang" @if($pengembalianAdmin->kondisi == 'rusak_sedang') selected @endif>Rusak Sedang</option>
                            <option value="rusak_berat" @if($pengembalianAdmin->kondisi == 'rusak_berat') selected @endif>Rusak Berat</option>
                            <option value="baik" @if($pengembalianAdmin->kondisi == 'baik') selected @endif>Baik</option>
                            <option value="hilang" @if($pengembalianAdmin->kondisi == 'hilang') selected @endif>Hilang</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Pengembalian</label>
                    <div class="col-md-10">
                        <input class="form-control" name="tanggal_pengembalian" type="date" id="example-date-input" value="{{$pengembalianAdmin->tanggal_pengembalian}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Catatan</label>
                    <div class="col-md-10">
                        <input class="form-control" name="catatan" type="text" id="example-text-input" value="{{$pengembalianAdmin->catatan}}">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-primary" href="{{ route('pengembalianAdmin.index') }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('admin.layout.footer')