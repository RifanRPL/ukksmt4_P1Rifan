@include('admin.layout.header')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Unit</h4>
            </div>
            <div class="card-body">
            <form action="">
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label">Status</label>
                    <div class="col-md-10">
                        <select class="form-select">
                            <option>Select</option>
                            <option>Large select</option>
                            <option>Small select</option>
                            <option>Small select</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Catatan</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" id="example-text-input">
                    </div>
                </div>
                
                <button class="btn btn-success" type="submit">Selesai</button>
                <a class="btn btn-danger" href="/unit">Batal</a>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@include('admin.layout.footer')