@include('petugas.layout.header')
<div class="row">
    <div class="col-lg-12">
                <div class="invoice-title">
                    <h4 class="float-end font-size-15">Pengajuan Peminjaman
                        @if ($peminjaman->pengembalian)
                        <span class="badge bg-success font-size-12 ms-2">Dikembalikan</span>
                        @elseif ($peminjaman->status == 'pending')
                        <span class="badge bg-secondary font-size-12 ms-2">Pending</span>
                        @elseif ($peminjaman->status == 'disetujui')
                        <span class="badge bg-primary font-size-12 ms-2">Disetujui</span>
                        @else
                        <span class="badge bg-danger font-size-12 ms-2">Ditolak</span>
                        @endif
                    </h4>
                    <div class="mb-4">
                        <img src="{{ asset('assets/images/logo-dark-sm.png') }}" alt="logo" height="34"/>
                    </div>
                    <div class="text-muted">
                        <p class="mb-1">3184 Spruce Drive Pittsburgh, PA 15201</p>
                        <p class="mb-1"><i class="mdi mdi-email-outline me-1"></i> xyz@987.com</p>
                        <p><i class="mdi mdi-phone-outline me-1"></i> 012-345-6789</p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-muted">
                            <h5 class="font-size-16 mb-3">Pengajuan Oleh:</h5>
                            <h5 class="font-size-15 mb-2">{{$peminjaman->peminjam->nama}}</h5>
                            <p class="mb-1">{{$peminjaman->peminjam->alamat}}</p>
                            <p class="mb-1">{{$peminjaman->peminjam->email}}</p>
                            <p>{{$peminjaman->peminjam->no_hp}}</p>
                        </div>

                        <div class="text-muted">
                            <h5 class="font-size-16 mb-3">Direview Oleh:</h5>
                            @if ($peminjaman->petugas_id==null)
                            <p class="mb-1">Belum Direview</p>
                            @else
                            <h5 class="font-size-15 mb-2">{{$peminjaman->petugas->nama}}</h5>
                            <p class="mb-1">{{$peminjaman->catatan}}</p>
                            @endif
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-muted text-sm-end">
                            <div>
                                <h5 class="font-size-15 mb-1">ID Pengajuan:</h5>
                                <p>#{{$peminjaman->id}}</p>
                            </div>
                            <div class="mt-4">
                                <h5 class="font-size-15 mb-1">Tanggal Pengajuan:</h5>
                                <p>{{$peminjaman->created_at}}</p>
                            </div>
                            <div class="mt-4">
                                <h5 class="font-size-15 mb-1">Batas Waktu:</h5>
                                @if ($peminjaman->petugas_id==null)
                                <p>Belum Direview</p>
                                @else
                                <p>{{$peminjaman->batas_waktu}}</p>
                                @endif
                            </div>
                            <div class="mt-4">
                                <h5 class="font-size-15 mb-1">Tanggal Pengembalian:</h5>
                                @if (!$peminjaman->pengembalian)
                                <p>Belum Dikembalikan</p>
                                @else
                                <p>{{$peminjaman->pengembalian->tanggal_pengembalian}}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                
                <div class="py-2">
                    <h5 class="font-size-15">Alat</h5>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-centered mb-0">
                            <thead>
                                <tr>
                                    <th class="fw-bold" style="width: 70px;">ID.</th>
                                    <th class="fw-bold">Foto</th>
                                    <th class="fw-bold">Nama</th>
                                    <th class="fw-bold">Kategori</th>
                                </tr>
                            </thead><!-- end thead -->
                            <tbody>
                                <tr>
                                    <th scope="row">{{$peminjaman->alat->id}}</th>
                                    <td><img src="{{ asset('assets/images/alats/'.$peminjaman->alat->foto) }}" alt="product-img" title="product-img" class="avatar-md"></td>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14 mb-1">{{$peminjaman->alat->nama}}</h5>
                                        </div>
                                    </td>
                                    <td>{{$peminjaman->alat->kategori->nama}}</td>
                                </tr>
                                <!-- end tr -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end table responsive -->
                    <div class="d-print-none mt-4">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-secondary me-1"><i class="fa fa-print"></i></a>
                            @if (!$peminjaman->pengembalian)
                                <a href="{{ route('pengembalian.create', $peminjaman->id) }}" class="btn btn-primary">
                                    Tambah Pengembalian
                                </a>
                            @endif
                            <a href="{{ route('peminjaman.index') }}" class="btn btn-primary w-md">Kembali</a>
                            @if ($peminjaman->petugas_id==null)
                            <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-success w-md">Review</a>
                            @endif
                        </div>
                    </div>
                </div>
    </div><!-- end col -->
</div><!-- end row -->
@include('petugas.layout.footer')
