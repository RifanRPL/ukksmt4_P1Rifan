@include('petugas.layout.header')
                        <div class="row">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded bg-primary-subtle ">
                                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0 font-size-15">Total Peminjaman</h6>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{$total_peminjaman}}<span class="text-success fw-medium font-size-13 align-middle"></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded bg-primary-subtle ">
                                                                <i class="bx bx-cart-alt font-size-24 mb-0 text-primary"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0 font-size-15">Total Pengembalian</h6>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{$pengembalian}}<span class="text-danger fw-medium font-size-13 align-middle"></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded bg-primary-subtle ">
                                                                <i class="bx bx-cart-alt font-size-24 mb-0 text-primary"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0 font-size-15">Total Pelanggaran</h6>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{$pelanggaran}}<span class="text-danger fw-medium font-size-13 align-middle"></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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
                                                                <th>Pengaju</th>
                                                                <th>Alat</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($peminjaman_pending as $key => $peminjaman)
                                                                <tr>
                                                                    <th scope="row">{{ $peminjaman->id }}</th>
                                                                    <td>{{ $peminjaman->peminjam->nama }}</td>
                                                                    <td>{{ $peminjaman->alat->nama }}</td>
                                                                    <td>
                                                                        <a class="btn btn-primary col-9" href="{{ route('peminjaman.show', $peminjaman->id) }}">Detail</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Pengembalian Telat (Belum DIkembalikan)</h4>
                                            </div>
                                            <div class="card-body">  
                                                <div class="table-responsive">
                                                    <table class="table mb-0"> <!-- table mb-0-->

                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Pengaju</th>
                                                                <th>Alat</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($peminjaman_telat as $key => $peminjaman)
                                                                <tr>
                                                                    <th scope="row">{{ $peminjaman->id }}</th>
                                                                    <td>{{ $peminjaman->peminjam->nama }}</td>
                                                                    <td>{{ $peminjaman->alat->nama }}</td>
                                                                    <td>
                                                                        <a class="btn btn-primary col-9" href="{{ route('peminjaman.show', $peminjaman->id) }}">Detail</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                         <!-- end row -->
        

                        </div>
                        <!-- end row -->
@include('petugas.layout.footer')