@include('petugas.layout.header')
<div class="row">
    <div class="col-lg-12">
                <div class="invoice-title">
                    <h4 class="float-end font-size-15">Pengembalian
                        @if ($pengembalian->kondisi == 'rusak_ringan')
                        <span class="badge bg-primary font-size-12 ms-2">Rusak Ringan</span>
                        @elseif ($pengembalian->kondisi == 'rusak_sedang')
                        <span class="badge bg-warning font-size-12 ms-2">Rusak Sedang</span>
                        @elseif ($pengembalian->kondisi == 'rusak_berat')
                        <span class="badge bg-danger font-size-12 ms-2">Rusak Berat</span>
                        @elseif ($pengembalian->kondisi == 'baik')
                        <span class="badge bg-success font-size-12 ms-2">Baik</span>
                        @else
                        <span class="badge bg-dark font-size-12 ms-2">Hilang</span>
                        @endif</td>
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
                            <h5 class="font-size-16 mb-3">Catatan Petugas:</h5>
                            <h5 class="font-size-15 mb-2">{{$pengembalian->petugas->nama}}</h5>
                            <p class="mb-1">{{$pengembalian->catatan}}</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-muted text-sm-end">
                            <div>
                                <h5 class="font-size-15 mb-1">ID Pengembalian:</h5>
                                <p>#{{$pengembalian->id}}</p>
                            </div>
                            <div class="mt-4">
                                <h5 class="font-size-15 mb-1">Batas_Waktu:</h5>
                                <p>{{$pengembalian->peminjaman->batas_waktu}}</p>
                            </div>
                            <div class="mt-4">
                                <h5 class="font-size-15 mb-1">Tanggal Pengembalian:</h5>
                                <p>{{$pengembalian->tanggal_pengembalian}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                
                <div class="py-2">
                    <div class="d-print-none mt-4">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-secondary me-1"><i class="fa fa-print"></i></a>
                            <a href="{{ route('pengembalian.index') }}" class="btn btn-primary w-md">Kembali</a>
                        </div>
                    </div>
                </div>
    </div><!-- end col -->
</div><!-- end row -->
@include('petugas.layout.footer')
