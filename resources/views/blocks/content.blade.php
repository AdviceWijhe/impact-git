{{--
  Title: Content Block
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
    $block = get_field("content_gutenberg_block");
    $block_titel = $block['titel'];
    $block_content = $block['content'];
    $hasContainer = $block['container'];
@endphp

<section class="content">
@if($hasContainer)
    <div class="container">
@endif
<div class="content__inner">
<h2>{{ $block_titel }}</h2>
{!! $block_content !!}
</div>


@if($hasContainer)
    </div>
@endif
</section>

