@include('admin.layout.header')
<div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Alat</h4>
                <a class="btn btn-primary" href="{{ route('alat.create') }}">Tambah Alat</a>
            </div>
            <div class="card-body">  
                <div class="table-responsive">
                    <table class="table mb-0"> <!-- table mb-0-->

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Kondisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allAlat as $key => $alat)
                            <tr>
                                <th scope="row">{{ $alat->id }}</th>
                                <td><img class="w-25" src="{{ asset('assets/images/alats/'.$alat->foto) }}" alt=""></td>
                                <td>{{ $alat->nama }}</td>
                                <td>
                                    @if($alat->status == '0') Tidak @endif
                                    @if($alat->status == '1') Ready @endif
                                </td>
                                <td>@if ($alat->kondisi == 'rusak_ringan')
                                    <span class="badge bg-primary font-size-12 ms-2">Rusak Ringan</span>
                                    @elseif ($alat->kondisi == 'rusak_sedang')
                                    <span class="badge bg-warning font-size-12 ms-2">Rusak Sedang</span>
                                    @elseif ($alat->kondisi == 'rusak_berat')
                                    <span class="badge bg-danger font-size-12 ms-2">Rusak Berat</span>
                                    @elseif ($alat->kondisi == 'baik')
                                    <span class="badge bg-success font-size-12 ms-2">Baik</span>
                                    @else
                                    <span class="badge bg-dark font-size-12 ms-2">Hilang</span>
                                    @endif</td></td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('alat.show', $alat->id) }}">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@include('admin.layout.footer')