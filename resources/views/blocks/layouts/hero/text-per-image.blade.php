@php 

$rand = rand();
@endphp

<div class="hero__images carousel{{$rand}}">
@foreach($images as $image)
    <div class="hero__images__image" style="background-image:url('{{$image['image']['url']}}')">
        <div class="container">
            <div class="hero__images__image--inner">
                <div class="hero__images__image--title">
                    <h1>{{$image['title']}}</h1>
                </div>
                <div class="hero__images__image--subtitle">
                    <h3>{{$image['subtitle']}}</h3>
                </div>
                <div class="hero__images__image--content">
                    {!! $image['content'] !!}
                </div>
                <div class="hero__images__image--button">
                    {!! getButton($image['button']['link']['title'], $image['button']['link']['url'], $image['button']['button_style']) !!}
                </div>
            </div>
        </div>
    </div>
@endforeach    
</div>
<script>
jQuery(window).load(function(){
    jQuery('.carousel{{$rand}}').flickity({
    // options
    cellAlign: '{{$carousel_settings['cell_align']}}',
    contain: true,
    fade: @if($carousel_settings['fade']) true @else false @endif,
    prevNextButtons: @if($carousel_settings['arrows']) true @else false @endif,
    pageDots: @if($carousel_settings['dots']) true @else false @endif,
    });
});
</script>