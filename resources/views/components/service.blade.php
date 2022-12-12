<?php $arr = json_decode($data);  ?>
<div class="col-md-6 col-lg-4 col-sm-10">
    <div class="how-item">
        <div class="how-thumb-area">
            <div class="how-thumb">
                <img src="{{ url( $arr->icon) }}" alt="how">
            </div>
        </div>
        <div class="how-content">
           <a href="{{ $arr->url }}"> <h5 class="title">{!! $arr->title !!}</h5> </a>
           @if($arr->other)
           <div class="other-content">
               {!! $arr->other !!}
           </div>
           @endif
           <a href="{{ $arr->url }}" class="custom-button"> Get Started <i class="flaticon-right"></i></a>
        </div>
    </div>
</div>

