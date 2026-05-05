@include('petugas.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Pengembalian</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('pengembalian.store') }}" method="post">
                @csrf
                <input type="hidden" name="petugas_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="peminjaman_id" value="{{ $peminjaman->id }}">
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Pengembalian</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" id="example-date-input" name="tanggal_pengembalian">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Kondisi</label>
                    <div class="col-md-10">
                        <select class="form-select" name="kondisi">
                            <option value="">-- Ubah Status --</option>
                            <option value="rusak_ringan">Rusak Ringan</option>
                            <option value="rusak_sedang">Rusak Sedang</option>
                            <option value="rusak_berat">Rusak Berat</option>
                            <option value="baik">Baik</option>
                            <option value="hilang">Hilang</option>
                        </select>
                    </div>
                </div>
                                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Catatan</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="example-text-input" name="catatan">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-primary" href="{{ route('peminjaman.show', $peminjaman->id) }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('petugas.layout.footer')