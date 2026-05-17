@include('peminjam.layout.header')
<div class="row">
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Pengajuan Belum Direview</h4>
                                            </div>
                                            <div class="card-body">  
                                                <div class="table-responsive">
                                                    <table class="table mb-0"> <!-- table mb-0-->

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Alat</th>
                                                                <th>Tanggal_Pengajuan</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if ($peminjaman_pending->isEmpty())
                                                                <tr>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                </tr>
                                                                @else
                                                                @foreach($peminjaman_pending as $key => $peminjaman)
                                                                    <tr>
                                                                        <th scope="row">{{ $peminjaman->id }}</th>
                                                                        <td>{{ $peminjaman->alat->nama }}</td>
                                                                        <td>{{ $peminjaman->created_at }}</td>
                                                                        <td>
                                                                            <a class="btn btn-primary col-9" href="{{ route('peminjaman.detail', $peminjaman->id) }}">Detail</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Pelanggaran (Belum Lunas)</h4>
                                            </div>
                                            <div class="card-body">  
                                                <div class="table-responsive">
                                                    <table class="table mb-0"> <!-- table mb-0-->

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Alat</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if ($pelanggaran->isEmpty())
                                                                <tr>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                </tr>
                                                                @else
                                                                @foreach($pelanggaran as $key => $p)
                                                                    <tr>
                                                                        <th scope="row">{{ $p->id }}</th>
                                                                        <td>{{ $p->alat->nama }}</td>
                                                                        <td>
                                                                            <a class="btn btn-primary col-9" href="{{ route('peminjaman.detail', $p->id) }}">Detail</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Alat belum Dikembalikan</h4>
                                            </div>
                                            <div class="card-body">  
                                                <div class="table-responsive">
                                                    <table class="table mb-0"> <!-- table mb-0-->

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Alat</th>
                                                                <th>Tanggal Peminjaman</th>
                                                                <th>Batas Waktu</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if ($pengembalian->isEmpty())
                                                                <tr>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                    <td>---</td>
                                                                </tr>
                                                                @else
                                                                @foreach($pengembalian as $key => $pe)
                                                                    <tr>
                                                                        <th scope="row">{{ $pe->id }}</th>
                                                                        <td>{{ $pe->alat->nama }}</td>
                                                                        <td>{{ $pe->tanggal_peminjaman }}</td>
                                                                        <td>{{ $pe->batas_waktu }}</td>
                                                                        <td>
                                                                            <a class="btn btn-primary col-9" href="{{ route('peminjaman.detail', $pe->id) }}">Detail</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
@include('peminjam.layout.footer')