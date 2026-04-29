@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit</h4>
            </div>
            <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">NIK</label>
                    <div class="col-md-10">
                        <input class="form-control" name="nik" value="{{ $user->nik }}" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" name="nama" value="{{ $user->nama }}" type="text" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">No Hp</label>
                    <div class="col-md-10">
                        <input class="form-control" name="no_hp" value="{{ $user->no_hp }}" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Alamat</label>
                    <div class="col-md-10">
                        <input class="form-control" name="alamat" value="{{ $user->alamat }}" type="text" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-10">
                        <input class="form-control" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" type="date" id="example-date-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" name="email" value="{{ $user->email }}"  type="email" id="example-email-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Role</label>
                    <div class="col-md-10">
                        <select class="form-select" name="role">
                            <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                            <option value="petugas" @if($user->role == 'petugas') selected @endif>Petugas</option>
                            <option value="peminjam" @if($user->role == 'peminjam') selected @endif>Peminjam</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Credit Score</label>
                    <div class="col-md-10">
                        <input class="form-control" name="credit_score" value="{{ $user->credit_score }}" type="number" id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Ban Status</label>
                    <div class="col-md-10">
                        <select class="form-select" name="ban_status">
                            <option value="1" @if($user->ban_status == '1') selected @endif>Ya</option>
                            <option value="0" @if($user->ban_status == '0') selected @endif>Tidak</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-primary" href="{{ route('user.show', $user->id) }}">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@include('admin.layout.footer')