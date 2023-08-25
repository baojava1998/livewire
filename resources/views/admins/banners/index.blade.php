@extends('admin')

@section('content')
    <div class="app-main__inner">
        <div class="row">
            <div class="col-md-12" style="padding-right: 0px">
                <div class="btn-actions-pane-left">
                    <a class="mb-2 mr-2 btn-icon btn btn-success" href="{{route('admins.banners.create')}}"><i
                            class="fa fa-plus" aria-hidden="true"></i>&nbsp;{{__('Tạo mới')}}</a>
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
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function () {

            var table = $('#table-ajax .table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admins.banners.index') }}",
                    data: {table: true}
                },
                columns: [
                    {data: 'id', name: 'id', class: 'text-center'},
                    {data: 'name', name: 'name', class: 'text-center'},
                    {data: 'image', name: 'image', class: 'text-center'},
                    {data: 'action', class: 'text-center', orderable: false, searchable: false},
                ],
                order: [[0, "desc"]],
                language: {
                    paginate: {
                        "previous": "<",
                        "next": ">"
                    },
                    url: "{{ asset('Vietnamese.json') }}"
                }
            });

        });
    </script>
@endpush
