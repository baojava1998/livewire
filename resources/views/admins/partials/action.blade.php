<div class="actions">
    @if(isset($show))
        <a class="actions-link edit show-list" data-url="{{route('admins.courses.list.showMember', $show->id)}}" href="javascript:" data-toggle="modal" data-target="#detail-course" data-original-title="Edit">
            <i class="fa fa-cube" aria-hidden="true" title="Danh sách học viên"></i>
        </a>
        &nbsp
    @endif
    @if(isset($edit))
        <a class="actions-link edit" href="{{$edit}}" data-original-title="Edit">
            <i class="fa fa-pencil-square-o" aria-hidden="true" title="Sửa"></i>
        </a>
         &nbsp
    @endif
    @if(isset($delete))
        <a class="actions-link delete" data-url="{{$delete}}" data-confirm="{{@$dataConfirm}}" href="javascript:" title="Delete">
            <i class="fa fa-trash" title="Xoá"></i>
        </a>
    @endif
</div>
