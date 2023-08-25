@if (session()->has('success'))
    <div class="alert alert-success">
        <span class="glyphicon glyphicon-ok"></span>
        {{ session('success') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger">
        <span class="glyphicon glyphicon-remove"></span>
        {{ session('error') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
@endif
