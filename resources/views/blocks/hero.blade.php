{{--
  Title: Hero Block
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
    $block = get_field("hero_gutenberg_block");
    $layout = $block['layout'];
    $carousel_settings = $block['carousel_settings'];

    if($layout == 'text-per-image') {
        $images = $block['text_per_image']['images'];
    }
    else if($layout == 'single-text') {
        $images = $block['single_text']['images'];
        $title = $block['single_text']['title'];
        $subtitle = $block['single_text']['subtitle'];
        $content = $block['single_text']['content'];
        $button = $block['single_text']['button'];
    }
@endphp

<section class="hero p-0 {{$layout}}">

    @include('blocks.layouts.hero.'.$layout)


</section>



