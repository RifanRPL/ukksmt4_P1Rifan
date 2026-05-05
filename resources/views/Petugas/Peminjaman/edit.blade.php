@include('petugas.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Review Pengajuan Peminjaman</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="petugas_id" value="{{ Auth::user()->id }}">
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Batas Waktu</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" id="example-date-input" name="batas_waktu">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Catatan</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="example-text-input" name="catatan">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Status</label>
                    <div class="col-md-10">
                        <select class="form-select" name="status">
                            <option value="">-- Ubah Status --</option>
                            <option value="disetujui">Disetujui</option>
                            <option value="ditolak">Ditolak</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-danger" href="{{ route('peminjaman.show', $peminjaman->id) }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('petugas.layout.footer')