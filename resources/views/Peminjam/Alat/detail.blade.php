@include('peminjam.layout.header')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href=""></a>
                    <div class="col-xl-4">
                        <div class="product-detail mt-3" dir="ltr">

                            <div class="swiper product-thumbnail-slider rounded border overflow-hidden position-relative">
                                <div class="p-3">
                                    <div class="product-img bg-light rounded p-3">
                                        <img src="{{ asset('assets/images/alats/'.$alat->foto) }}" class="img-fluid d-block" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="mt-3 mt-xl-3 ps-xl-5">
                            <h4 class="font-size-20 mb-3"><a href="#" class="text-body">{{ $alat->nama }}</a></h4>

                            <div class="text-muted mt-2">
                                 <p>{{ $alat->kategori->nama }}</p>
                            </div>

                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <h5 class="font-size-14">Deskripsi :</h5>
                                                <p class="mb-1">{{ $alat->deskripsi }}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <h5 class="font-size-14">Minimal Credit Score :</h5>
                                                <p class="mb-1 text-truncate">{{ $alat->min_credit_score }}</p>
                                        </div>
                                        <!-- <div class="mt-3">
                                            <h5 class="font-size-14">Delivery location :</h5>

                                            <div class="d-inline-flex mt-2">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Enter Delivery pincode">
                                                    <button class="btn btn-primary" type="button">Check</button>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-sm-8">
                                        <div class="row text-center mt-4 pt-1">
                                            <div class="col-sm-6">
                                                <div class="d-grid">
                                                    <a href="{{ route('peminjaman.create', $alat->id)}}" class="btn btn-primary waves-effect  mt-2 waves-light">
                                                        <i class="bx bx-shopping-bag me-2"></i>Ajukan Pinjaman
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>
@include('peminjam.layout.footer')