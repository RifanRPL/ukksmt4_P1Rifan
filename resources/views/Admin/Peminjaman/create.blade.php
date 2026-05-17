@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Peminjaman</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('peminjamanAdmin.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Peminjam</label>
                    <div class="col-md-10">
                        <select class="form-select" name="peminjam_id">
                            <option value="">-- Pilih Peminjam --</option>
                            @foreach($peminjam as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }} ({{$p->id}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Petugas</label>
                    <div class="col-md-10">
                        <select class="form-select" name="petugas_id">
                            <option value="">(Optional)</option>
                            @foreach($petugas as $pt)
                            <option value="{{ $pt->id }}">{{ $pt->nama }} ({{$pt->id}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Alat</label>
                    <div class="col-md-10">
                        <select class="form-select" name="alat_id">
                            <option value="">-- Pilih Alat --</option>
                            @foreach($alat as $a)
                            <option value="{{ $a->id }}">{{ $a->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Status</label>
                    <div class="col-md-10">
                        <select class="form-select" name="status">
                            <option value="pending">Pending</option>
                            <option value="disetujui">Disetujui</option>
                            <option value="ditolak">Ditolak</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Peminjaman</label>
                    <div class="col-md-10">
                        <input class="form-control" name="tanggal_peminjaman" type="date" id="example-date-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Batas Waktu</label>
                    <div class="col-md-10">
                        <input class="form-control" name="batas_waktu" type="date" id="example-date-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Tujuan Peminjaman</label>
                    <div class="col-md-10">
                        <input class="form-control" name="tujuan" type="text" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Catatan</label>
                    <div class="col-md-10">
                        <input class="form-control" name="catatan" type="text" id="example-text-input">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-primary" href="{{ route('peminjamanAdmin.index') }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('admin.layout.footer')