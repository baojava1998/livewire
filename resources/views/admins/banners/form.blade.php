<div class="col-md-12">
{{--    <label class="font-weight-bold">Tên <span class="text-danger">*</span></label>--}}
{{--    <input type="text" wire:model="form.name" class="form-control" value="{{@old('name',$data->name)}}">--}}
{{--    @error('form.name') <span class="red-error">{{ $message }}</span> @enderror--}}
{{--    <br>--}}
{{--    <label class="font-weight-bold">Link</label>--}}
{{--    <input type="text" wire:model="form.link" class="form-control" value="{{@old('description',$data->link)}}">--}}
{{--    @error('form.link') <span class="red-error">{{ $message }}</span> @enderror--}}
{{--    <br>--}}
{{--    <label class="font-weight-bold">Hình ảnh<span class="text-danger">*</span></label>--}}
{{--    <br>--}}
{{--    <input type="file" wire:model="form.image" value="{{@old('avatar',$data->avatar)}}" style="opacity: 0;position: absolute;height: 49px" />--}}
{{--    <a title="Click vào để chọn file ảnh">--}}
{{--        @if ($form->image)--}}
{{--            <img src="{{ $form->image->temporaryUrl() }}" height="50px" id="load_image" alt="Click">--}}
{{--        @else--}}
{{--            <img src="{{ isset($data) ? '/uploads/banners/'.$data->image : asset('add-image.png') }}" height="50px" id="load_image" alt="Click">--}}
{{--        @endif--}}
{{--    </a>--}}
{{--    {!! $errors->first('image', '<p class="red-error">:message</p>') !!}--}}


    <label class="font-weight-bold">Tên <span class="text-danger">*</span></label>
    <input type="text" wire:model="name" name="name" class="form-control" value="{{@old('name',$data->name)}}">
    @error('name') <span class="red-error">{{ $message }}</span> @enderror
    <br>
    <label class="font-weight-bold">Link <span class="text-danger">*</span></label>
    <input type="text" wire:model="link" name="link" class="form-control" value="{{@old('description',$data->link)}}">
    @error('link') <span class="red-error">{{ $message }}</span> @enderror
    <br>
    <label class="font-weight-bold">Hình ảnh<span class="text-danger">*</span></label>
    <br>
    <input type="file" wire:model="image" name="image" value="{{@old('avatar',$data->avatar)}}" style="opacity: 0;position: absolute;height: 49px" />
    <a title="Click vào để chọn file ảnh">
        @if ($image)
            <img src="{{ is_object($image) ? $image->temporaryUrl() : $image}}" height="50px" id="load_image" alt="Click">
        @else
            <img src="{{ isset($data) ? '/uploads/banners/'.$data->image : asset('add-image.png') }}" height="50px" id="load_image" alt="Click">
        @endif
    </a>
    {!! $errors->first('image', '<p class="red-error">:message</p>') !!}
</div>
