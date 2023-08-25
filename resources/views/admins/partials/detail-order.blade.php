@foreach ($orderDetail as $k => $order)
    <div class="row">
        <img class="col-md-2" src="/uploads/courses/list/{{$order->course->image}}" style="width: 50px;height: 50px;object-fit: contain">
        <div class="col-md-6">{{$order->course->name}}: </div>
        <div class="col-md-4">
            @if($order->course->discount)
                <span class="old-price">{{number_format($order->course->price)}} VNĐ</span> {{number_format($order->price)}} VNĐ
            @else
                {{number_format($order->course->price)}} VNĐ
            @endif
        </div>
    </div>
@endforeach
