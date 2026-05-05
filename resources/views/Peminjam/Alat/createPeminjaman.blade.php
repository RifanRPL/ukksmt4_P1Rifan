@include('peminjam.layout.header')
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <ol class="activity-checkout mb-0 px-4 mt-2">
                                            <li class="checkout-item">
                                                <div class="avatar checkout-icon p-1">
                                                    <div class="avatar-title rounded-circle bg-primary">
                                                        <h5 class="text-white font-size-16 mb-0"></h5>
                                                    </div>
                                                </div>
                                                <div class="feed-item-list">
                                                    <div>
                                                        <h5 class="font-size-16 mb-1">Pengajuan Peminjaman</h5>
                                                        <p class="text-muted text-truncate mb-4">Isi Form di Bawah Ini</p>
                                                        <div class="mb-3">
                                                            <form action="{{ route('peminjaman.store') }}" method="POST">
                                                                @csrf
                                                                <div>
                                                                    <input type="hidden" name="peminjam_id" value="{{ Auth::user()->id }}">
                                                                    <input type="hidden" name="alat_id" value="{{ $alat->id }}">
                                                                    <input type="hidden" name="status" value="pending">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="billing-phone">Tanggal Peminjaman</label>
                                                                                <input type="date" class="form-control" id="billing-phone" name="tanggal_peminjaman">
                                                                            </div>
                                                                        </div>
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="billing-address">Tujuan</label>
                                                                        <textarea class="form-control" id="billing-address" rows="3" placeholder="Masukkan Tujuan" name="tujuan"></textarea>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="row my-4">
                                    <div class="col">
                                        <div class="text-end mt-2 mt-sm-0">
                                            <a href="{{ route('alat.detail', $alat->id) }}" class="btn btn-primary"> Batal </a>
                                            <button type="submit" class="btn btn-success"> Kirim </button>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->
                                </form>
                            </div>
                            <div class="col-xl-4">
                                <div class="card checkout-order-summary">
                                    <div class="card-body">
                                        <div class="p-3 bg-light mb-3">
                                            <h5 class="font-size-16 mb-0">Alat</h5>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0 table-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('assets/images/alats/'.$alat->foto) }}" alt="product-img" title="product-img" class="avatar-md"></th>
                                                        <td>
                                                            <h5 class="font-size-15 text-truncate"><a href="ecommerce-product-detail.html" class="text-body">{{ $alat->nama }}  {{Auth::user()->nama}}</a></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
@include('peminjam.layout.footer')