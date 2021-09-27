{{--
  Title: Two Columns
  Description: Met dit blok plaats je een hero/ banner op de pagina. Tijdens het plaatsen heb je de mogelijkheid om de witruimte boven en onder aan te passen. Daarnaast heb je de mogelijkheid om de afbeelding aan te passen, de titelm de omschrijving en de button.
  Category: custom-blocks
  Icon: yes-alt
  Keywords:
  Mode: auto
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
$block = get_field('two_columns_gutenberg_block');
$padding_top = $block['padding_top'];
$padding_bottom = $block['padding_bottom'];
$title = $block['title'];
$section_title = $block['section_title'];
$content = $block['content'];
$content2 = $block['content_2'];
$link = $block['link'];
$link_text = $block['link_text'];
$lead = $block['lead'];
@endphp

<section class="custom_content bg-primary text-white" style="padding-top: {{ $padding_top }}px; padding-bottom: {{ $padding_bottom }}px;">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h5 class="custom_content__sectionTitle text-dark">{{ $section_title }}</h5>
    <h2 class="custom_content__title text-white" data-aos="fade-right">{{ $title }}</h2>
      </div>
    </div>
    <div class="row pt-md-5">
    <div class="custom_content__inner col-md-6 col-12 pr-md-5">
      <div class="@if($lead) lead @endif custom_content__content">{!! $content !!}</div>  
    </div>
    <div class="custom_content__inner col-md-6 col-12 pl-md-5 d-flex align-items-center">
      
      <div class="@if($lead) lead @endif custom_content__content">{!! $content2 !!}</div>
    </div>
    </div>
  </div>
</section>
