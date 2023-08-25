<select name="{{$name}}" class="form-control {{$name}}-control" style="border: none" data-course="{{json_encode($dataItem->detail->pluck('course_id')->toArray())}}" data-id="{{$dataItem->id}}">
    @foreach($data as $k => $item)
        <option value="{{$k}}" @if($dataItem->status == $k) selected @endif>{{$item}}</option>
    @endforeach
</select>
