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