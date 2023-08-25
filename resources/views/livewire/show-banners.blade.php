<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12" style="padding-right: 0px">
            <div class="btn-actions-pane-left">
                <a class="mb-2 mr-2 btn-icon btn btn-success" href="{{route('admins.banners.create')}}" wire:navigate><i
                        class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('Tạo mới')}}</a>
            </div>
            <div class="btn-actions-pane-right">
                <input type="text" class="" wire:model.lazy="search">
                <button x-on:click="$wire.set('search', '', false)">Clear</button>
            </div>
            <div class="main-card mb-3 card">
                <div class="panel-body-with-table">
                    <div class="table-responsive" id="table-ajax">
                        <table width="100%"
                               class="align-middle mb-0 table table-borderless table-striped table-hover cell-border">
                            <thead>
                            <tr>
                                <th class="text-center align-middle" width="5%">ID</th>
                                <th class="align-middle text-center">TÊN</th>
                                <th class="align-middle text-center">HÌNH ẢNH</th>
                                <th class="align-middle text-center">HÀNH ĐỘNG</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($banners as $banner)
                                <tr wire:key="{{$banner->id}}">
                                    <th scope="row">{{$banner->id}}</th>
                                    <td>{{$banner->name}}</td>
                                    <td><img src="{{$banner->image}}" height="70px"></td>
                                    <td>
                                        <a class="btn actions-link edit" href="{{route('admins.banners.edit', $banner->id)}}" wire:navigate data-original-title="Edit">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true" title="Sửa">Sửa</i>
                                        </a>&nbsp
                                        <button class="btn actions-link delete"
{{--                                                wire:click="delete({{$banner->id}})"--}}
                                                onclick="baodelete({{$banner->id}})"
                                                title="Delete">
                                            <i class="fa fa-trash" title="Xoá"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$banners->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        function baodelete(id)
        {
            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })
            // console.log(id)
            // Livewire.dispatch('delete', {id:id});
        }
    </script>
@endpush
