@include('petugas.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Pelanggaran</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('pelanggaran.store') }}" method="post">
                @csrf
                <input type="hidden" name="pengembalian_id" value="{{ $pengembalian->id }}">
                <input type="hidden" name="status" value="0">
                <input type="hidden" name="denda" 
                value='
                    @if ($pengembalian->kondisi == "rusak_ringan")
                        20
                    @elseif ($pengembalian->kondisi == "rusak_sedang")
                        40
                    @elseif ($pengembalian->kondisi == "rusak_berat")
                        80
                    @elseif ($pengembalian->kondisi == "hilang")
                        100
                    @else
                        0
                    @endif
                '>
                <input type="hidden" name="denda_telat"
                value="
                    @if ($tanggal_pengembalian->gt($batas_waktu))
                        5
                    @else
                        0
                    @endif
                ">
                @if ($pengembalian->kondisi == "rusak_ringan")
                <p>Kondisi Rusak Ringan, Denda 20%</p>
                @elseif ($pengembalian->kondisi == "rusak_sedang")
                <p>Kondisi Rusak Sedang, Denda 40%</p>
                @elseif ($pengembalian->kondisi == "rusak_berat")
                <p>Kondisi Rusak Berat, Denda 80%</p>
                @elseif ($pengembalian->kondisi == "hilang")
                <p>Kondisi Hilang, Denda 100%</p>
                @endif
                @if ($tanggal_pengembalian->gt($batas_waktu))
                <p>Denda Telat 5% Per Hari</p>
                @endif
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Deskripsi Pelanggaran</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="example-text-input" name="deskripsi">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('petugas.layout.footer')