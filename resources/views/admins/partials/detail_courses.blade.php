<div class="modal-header" style="padding: 0.5rem">
    <h5 class="modal-title" id="exampleModalLabel">Danh sách học viên</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    @forelse($users as $k => $user)
        @if($k != 0)
            <hr>
        @endif
        <div class="row">
            <img class="col-md-2" src="/uploads/{{$user->avatar ? 'avatar/'.$user->avatar : 'users/user.png'}}" style="width: 82px;height: 82px;object-fit: cover; padding: 10px; border-radius: 50%;">
            <div class="col-md-10" style="padding-left: 3px">{{$user->name}}
                <br>
                Khoá học: {{$course->type == 1 ? 'video' : 'meet'}} <br>
                Đã học: {{$user->pivot->lesson_learned}}/{{optional($lessonLatest)->stt ?? 0}}<br>
                Tình trạng: <span class="is-graduate">{{$user->pivot->graduating == 1 ? 'Đã tốt nghiệp' : 'Chưa tốt nghiệp'}} </span>
                @if($user->pivot->graduating != 1)
                    <br>
                    <button class="btn btn-primary send-graduate" data-course="{{$course->id}}" data-user="{{$user->id}}">Gửi bằng tốt nghiệp qua mail</button>
                @endif
            </div>
        </div>
    @empty
        Chưa có học viên
    @endforelse
</div>
