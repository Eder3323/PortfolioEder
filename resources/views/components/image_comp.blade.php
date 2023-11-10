@props(['disabled' => false,'text'=>'','route'=>'','width'=>'60','height'=>'60', 'alt'=>'icon','class'=>''])
<div class="d-inline-flex align-items-center {{$class}}">
    <div class="d-flex flex-column align-items-center hover_image_png">
        <img {{ $disabled ? 'disabled' : '' }} src="{{asset($route)}}" alt="{{$alt}}" {!! $attributes->merge(['class' => 'img-thumbnail my_img_thumbnail m-1']) !!} width="{{$width}}" height="{{$height}}">
        @if($text)
            <small class="text-center">{{$text}}</small>
        @endif
    </div>
</div>

