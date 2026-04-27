@include('petugas.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Pengajuan</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID</th>
                    <td>87</td>
                </tr>

                <tr>
                    <th>Pengaju</th>
                </tr>

                <tr>
                    <th>Alat</th>
                </tr>

                <tr>
                    <th>Code Unit</th>
                </tr>

                <tr>
                    <th>Petugas</th>
                </tr>

                <tr>
                    <th>Status</th>

                </tr>

                <tr>
                    <th>Tanggal Peminjaman</th>
                </tr>

                <tr>
                    <th>Batas Waktu</th>
                </tr>

                <tr>
                    <th>Tujuan</th>
                </tr>
                
                <tr>
                    <th>Catatan</th>
                </tr>

                <tr>
                    <th>Created_At</th>
                </tr>

                <tr>
                    <th>Updated_At</th>
                </tr>
            </table>

            <a href="/peminjaman" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('peminjaman.edit') }}" class='btn btn-warning mt-3'>Review</a>
        </div>
    </div>
</div>
@include('petugas.layout.footer')
