@include('peminjam.layout.header')
<div class="card">
    <div class="card-body">
        <div>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="col-6">
                            <div class="search-box ms-2">
                                <div class="position-relative">
                                    <input type="text" class="form-control bg-light border-light rounded" placeholder="Search...">
                                    <i class="bx bx-search search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- <h5>Showing result for "Chairs"</h5> -->
                </div>
            </div>

                <!-- Tab panes -->
            <div class="tab-content p-3 text-muted">
                
                <div class="tab-pane active" id="popularity" role="tabpanel">
                    <div class="row">
                        @foreach($allAlat as $key => $alat)
                        <div class="col-xl-4 col-sm-6">
                            <a href="{{ route('alat.detail', $alat->id) }}">
                                <div class="product-box rounded p-3 mt-4">
                                    <!-- <div class="pricing-badge">
                                        <span class="badge">New</span>
                                    </div> -->
                                    <div class="product-img bg-light p-3 rounded">
                                        <img src="{{ asset('assets/images/alats/'.$alat->foto) }}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="product-content pt-3">
                                        <p class="text-muted font-size-13 mb-0">{{ $alat->kategori->nama }}</p>
                                        <h5 class="mt-1 mb-0">{{ $alat->nama }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- end row -->
                </div>
                    <!-- end row -->
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-sm-6">
                    <div>
                        <p class="mb-sm-0">Page 1 of 1</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-end">
                        <ul class="pagination pagination-rounded mb-sm-0">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('peminjam.layout.footer')