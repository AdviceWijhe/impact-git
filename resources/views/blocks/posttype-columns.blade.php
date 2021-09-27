{{--
  Title: Posts Columns Block
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
    $block = get_field("posts_columns_gutenberg_block");
    $block_titel = $block['titel'];
    $block_subtitel = $block['subtitel'];
    $block_content = $block['content'];
    $block_posttype = $block['post_type'];
    $block_grid_layout = $block['grid_layout'];
    $block_posts_per_page = $block['number_of_posts'];
    $hasContainer = $block['container'];
    $posts_per_row = $block['posts_per_row'];
    $bgColor = $block['background_color'];
    $button_link = $block['button_link'];
    $button_link_text = $block['button_link_text'];
    $button_style = $block['button_style'];
    $isCarousel = $block['iscarousel'];
    $rand = rand();

    $columns = (12 / $posts_per_row);

    $args = array(
        'post_type' => $block_posttype,
        'posts_per_page' => $block_posts_per_page,
    );

    $query = new WP_Query($args);
@endphp

<section class="posts_columns bg-{{$bgColor}}">
@if($hasContainer)
    <div class="container">
@endif

    <div class="posts_columns__inner">

        @include('blocks.components.block-title')

        <div class="row grid-{{$rand}} mb-5">
        @if ( $query->have_posts() )
        @while($query->have_posts())
        @php $query->the_post(); @endphp
            @include('blocks.layouts.'.$block_grid_layout)
            @endwhile
        @endif
        </div>
        @if($button_link)
            {!! getButton($button_link, $button_link_text, $button_style) !!}
        @endif
    </div>

@if($hasContainer)
    </div>
@endif

<script>
@if($isCarousel)
jQuery(document).ready(function() {
    jQuery('.grid-{{$rand}}').slick({
    dots: false,
    arrows: false,
    infinite: false,
    speed: 300,
    mobileFirst: true,
    slidesToShow: 1.2,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 860,
        settings: "unslick",
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 2.2,
            slidesToScroll: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 1.2,
            slidesToScroll: 1
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });
});
@endif
</script>
</section>

