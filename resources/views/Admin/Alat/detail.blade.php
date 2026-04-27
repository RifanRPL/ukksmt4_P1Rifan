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
                    <th>NIK</th>
                </tr>

                <tr>
                    <th>Nama</th>
                </tr>

                <tr>
                    <th>No Hp</th>
                </tr>

                <tr>
                    <th>Alamat</th>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                </tr>

                <tr>
                    <th>Email</th>

                </tr>

                <tr>
                    <th>Password</th>
                </tr>

                <tr>
                    <th>Role</th>
                </tr>

                <tr>
                    <th>Role</th>
                </tr>
                
                <tr>
                    <th>Credit Score</th>
                </tr>

                <tr>
                    <th>Ban Status</th>
                </tr>

                <tr>
                    <th>Dibuat Pada</th>
                </tr>

                <tr>
                    <th>Update Terakhir</th>
                </tr>
            </table>

            <a href="/banding" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('banding.edit') }}" class='btn btn-warning mt-3'>Review</a>
        </div>
    </div>
</div>
@include('admin.layout.footer')
