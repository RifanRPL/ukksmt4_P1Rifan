@include('admin.layout.header')
<div class="container mt-5">
    <div class="card shadow-lg">

        <div class="card-header text-white">
            <h4 class="m-0">Detail Pelanggaran</h4>
        </div>

        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th width="30%">ID</th>
                    <td>{{ $pelanggaranAdmin->id }}</td>
                </tr>

                <tr>
                    <th width="30%">ID Pengembalian</th>
                    <td>{{ $pelanggaranAdmin->pengembalian_id }}</td>
                </tr>

                <tr>
                    <th>Tanggal Pelunasan</th>
                    <td>
                        @if ($pelanggaranAdmin->tanggal_pelunasan == null)
                        ----
                        @else
                        {{ $pelanggaranAdmin->tanggal_pelunasan }}
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Denda</th>
                    <td>{{$pelanggaranAdmin->denda}}% + {{$pelanggaranAdmin->denda_telat}}% (Per Hari)</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if ($pelanggaranAdmin->status == 0)
                        <span class="badge bg-danger font-size-12 ms-2">Belum Lunas</span>
                        @else
                        <span class="badge bg-success font-size-12 ms-2">Lunas</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $pelanggaranAdmin->deskripsi }}</td>
                </tr>

                <tr>
                    <th>Created_At</th>
                    <td>{{ $pelanggaranAdmin->created_at }}</td>
                </tr>

                <tr>
                    <th>Updated_At</th>
                    <td>{{ $pelanggaranAdmin->updated_at }}</td>
                </tr>
            </table>

            <a href="{{ route('pelanggaranAdmin.index') }}" class="btn btn-primary mt-3">Kembali</a>
            <a href="{{ route('pelanggaranAdmin.edit', $pelanggaranAdmin->id) }}" class='btn btn-warning mt-3'>Edit</a>
            <form action="{{ route('pelanggaranAdmin.destroy', $pelanggaranAdmin->id) }}" method="post">
                @csrf
                @method('DELETE')
            <button class='btn btn-danger mt-3' type="submit">
                Hapus
            </button>
            </form>
        </div>
    </div>
</div>
@include('admin.layout.footer')
