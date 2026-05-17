@include('admin.layout.header')
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
                                                            <h6 class="mb-0 font-size-15">Total User</h6>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{$user}}<span class="text-success fw-medium font-size-13 align-middle"></h4>
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
                                                            <h6 class="mb-0 font-size-15">Total Alat</h6>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{$alat}}<span class="text-danger fw-medium font-size-13 align-middle"></h4>
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
                                                            <h6 class="mb-0 font-size-15">Total Kategori</h6>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{$kategori}}<span class="text-danger fw-medium font-size-13 align-middle"></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{$peminjaman}}<span class="text-success fw-medium font-size-13 align-middle"></h4>
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
                        </div>
                         <!-- end row -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Log Aktifitas Hari Ini</h4>
                            </div>
                            <div class="card-body">  
                                <div class="table-responsive">
                                    <table class="table mb-0"> <!-- table mb-0-->

                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Aksi</th>
                                                <th>Bagian</th>
                                                <th>Created_At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($logs as $log)
                                            <tr>
                                                <td>{{ $log->user->nama }}</td>
                                                <td>{{ $log->aksi }}</td>
                                                <td>{{ $log->bagian }}</td>
                                                <td>{{ $log->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        </div>
                        <!-- end row -->
@include('admin.layout.footer')