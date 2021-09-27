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
    $block_titel = $block['hero_titel'];
    $block_subtitel = $block['hero_subtitel'];
    $block_content = $block['hero_content'];
    $block_images = $block['hero_images'];
    $block_navigation = $block['hero_navigation'];
@endphp

<section class="section__hero">
    <div class="section__hero__images">
        @foreach($block_images as $image)

            <div class="section__hero__images--image" style="background-image: url({{ $image['url'] }})">
            
            </div>

        @endforeach
    </div>
    <div class="container">
        <div class="section__hero__titel">
            <h1>{{ $block_titel }}</h1>
        </div>
        <div class="section__hero__subtitel">
            <h3>{{ $block_subtitel }}</h3>
        </div>
        <div class="section__hero__content">
            {!!$block_content !!}
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function(event) {
        jQuery('.section__hero__images').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: {{($block_navigation['arrows'] ? 'true' : 'false')}},
            dots: {{($block_navigation['dots'] ? 'true' : 'false')}},
        });
    });

    </script>
</section>

