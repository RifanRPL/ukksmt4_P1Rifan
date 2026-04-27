@include('admin.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Banding</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID</th>
                </tr>

                <tr>
                    <th>Pengaju</th>
                </tr>

                <tr>
                    <th>Direview Oleh</th>
                </tr>

                <tr>
                    <th>Alasan</th>
                </tr>

                <tr>
                    <th>Status</th>
                </tr>

                <tr>
                    <th>Perubahan Credit Score</th>

                </tr>

                <tr>
                    <th>Catatan_Pereview</th>
                </tr>

                <tr>
                    <th>Tanggal Pengajuan</th>
                </tr>

                <tr>
                    <th>Tanggal Review</th>
                </tr>
            </table>

            <a href="/banding" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('banding.edit') }}" class='btn btn-warning mt-3'>Review</a>
        </div>
    </div>
</div>
@include('admin.layout.footer')
