@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit</h4>
            </div>
            <div class="card-body">
            <form action="">
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">No Hp</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Alamat</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" id="example-date-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Role</label>
                    <div class="col-md-10">
                        <select class="form-select">
                            <option>Select</option>
                            <option>Large select</option>
                            <option>Small select</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">No Hp</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Credit Score</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Ban Status</label>
                    <div class="col-md-10">
                        <select class="form-select">
                            <option>Select</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-danger" href="{{ route('user.index') }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@include('admin.layout.footer')