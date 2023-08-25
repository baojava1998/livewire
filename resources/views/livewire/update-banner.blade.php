<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Cập nhật</div>
                <div class="card-body">
                    <form wire:submit="save" method="POST" enctype="multipart/form-data" multiple="">
                        @csrf
                        <div class="table-responsive">
                            @include ('admins.banners.form')
                        </div>
                        <div class="d-block card-footer">
                            <button type="submit" class="mb-2 mr-2 btn-icon btn-pill btn btn-outline-success">Cập nhật</button>
                            <a href="{{ route('admins.banners.index') }}" wire:navigate
                               class="mb-2 mr-2 btn-icon btn-pill btn btn-outline-secondary">Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
