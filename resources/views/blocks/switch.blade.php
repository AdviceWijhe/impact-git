{{--
  Title: Switch Block
  Description: 
  Category: custom-blocks
  Icon: 
  Keywords:
  Mode:
  Align:
  PostTypes:
  SupportsAlign:
  SupportsMode:
  SupportsMultiple:
  EnqueueStyle:
  EnqueueScript:
  EnqueueAssets:
--}}

@php
    $block = get_field("switch_gutenberg_block");
    $block_titel = $block['titel'];
    $block_subtitel = $block['subtitel'];
    $block_content = $block['content'];
    $hasContainer = $block['container'];
    $switchItems = $block['items'];
@endphp

<section class="switch">
@if($hasContainer)
    <div class="container">
@endif
<div class="switch__top text-center">
@if($block_titel)<h2>{{$block_titel}}</h2>@endif
@if($block_subtitel)<h3>{{$block_subtitel}}</h3>@endif
@if($block_content){!! $block_content !!}@endif
</div>

@php
$count = 0;
@endphp
@foreach($switchItems as $item)
@php $count++; @endphp

<div class="switch__item d-lg-flex {{($count % 2 == 0) ? 'flex-row' : 'flex-row-reverse'}}">
    <div class="switch__image" style="background-image: url({{ $item['image']['url'] }})">

    </div>
    <div class="switch__content">
        <div class="switch__content--inner">
            <h3>{{ $item['titel'] }}</h3>
            {!! $item['content'] !!}
        </div>
    </div>
</div>
@endforeach



@if($hasContainer)
    </div>
@endif
</section>

