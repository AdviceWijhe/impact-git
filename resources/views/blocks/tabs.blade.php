{{--
  Title: Tabs
  Description: Met dit blok plaats je een hero/ banner op de pagina. Tijdens het plaatsen heb je de mogelijkheid om de witruimte boven en onder aan te passen. Daarnaast heb je de mogelijkheid om de afbeelding aan te passen, de titelm de omschrijving en de button.
  Category: custom-blocks
  Icon: yes-alt
  Keywords:
  Mode: auto
  Align: full
  PostTypes: page post projecten
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
$block = get_field('tabs_gutenberg_block');
$padding_top = $block['padding_top'];
$padding_bottom = $block['padding_bottom'];
$tab_position = $block['tab_positie'];
$title = $block['title'];
$subtitle = $block['subtitle'];

$post_or_tax = $block['post_or_tax'];


if($post_or_tax == 'post_type') {
  $post_type = $block['post_type']['post_types'];
  $args = array(
  'post_type' => $post_type,
  'posts_per_page' => 3,
  );

  $query = new WP_Query($args);

}

if($post_or_tax == 'taxonomy') {
  $taxonomy_name = $block['taxonomy'];
  $taxonomies = get_terms( array(
    'taxonomy' => $taxonomy_name,
    'hide_empty' => true
) );
}

if($post_or_tax == 'paginas') {
  $paginas = $block['paginas'];
}

if($post_or_tax == 'custom') {
  $custom = $block['custom'];
}

$randomNumber = rand(pow(10, 5-1), pow(10, 5)-1);

@endphp

<section id="{{$subtitle}}" class="tabs tabs_{{$randomNumber}} {{ $tab_position }}" style="padding-top: {{ $padding_top }}px; padding-bottom: {{ $padding_bottom }}px;">
  <div class="container">
  <div class="col-12">
  @if(@subtitle)
    <h4 class="pt-4 pb-4">{{$subtitle}}</h4>
  @endif
  @if(@title)
    <h3 class="text-primary pb-4">{{$title}}</h3>
  @endif
  <div class="tabs__inner">
    <div class="tabs__tabs d-none d-md-flex">
    <?php 

      if($post_or_tax == 'custom') {
        $count = 0;
        if(count($custom) > 1) {
        foreach($custom as $tab) {
        $count++;

        // print_r($tab);
        ?>

        <div class="tabs__tab__item @if($count == 1) active @endif" data-count="{{ $count }}">
        {!! $tab['titel'] !!}
        </div>  
        <?php
        
      } // end while
    }
    } // end if
      ?>
    </div>

    <div class="tabs__items">
    <?php 

      if($post_or_tax == 'custom') {
      
        $count = 0;
        
        foreach($custom as $tab) {
          $count++;

          // $term = 'term_'.$taxonomy->term_id;

          // $image = get_field("categorie_image", $term);
          // $usps = get_field("usps", $term);
          
          ?>

          <div class="tabs__item @if($count == 1) active show @endif" data-count="{{ $count }}">
          <div class="mobile_tabs d-block d-md-none @if($count == 1) active @endif">
            {!! $tab['titel'] !!}
            </div>
            <div class="tabs__item__inner">
              <div class="tabs__item__content no-image">
                {!! $tab['content'] !!}
                
              </div>
            </div>
          </div>  
          <?php
          
        } // end while
      } // end if
    
      ?>
      </div>
    </div>
    </div>
  </div>
</section>
<script>

      let tabs{{$randomNumber}} = document.querySelectorAll(".tabs_{{$randomNumber}} .tabs__tab__item");
      let tabItems{{$randomNumber}} = document.querySelectorAll(".tabs_{{$randomNumber}} .tabs__item");
      let mobileTabs{{$randomNumber}} = document.querySelectorAll(".tabs_{{$randomNumber}} .mobile_tabs");
      let tabsElement{{$randomNumber}} = document.querySelector(".tabs_{{$randomNumber}}");

      for(let i = 0; i < tabs{{$randomNumber}}.length; i++) {
        tabs{{$randomNumber}}[i].addEventListener("click", function() {
          for(let x = 0; x < tabs{{$randomNumber}}.length; x++) {
            tabs{{$randomNumber}}[x].classList.remove("active");
            tabItems{{$randomNumber}}[x].classList.remove("active");
          }

          tabItems{{$randomNumber}}[i].classList.add("active");
          tabs{{$randomNumber}}[i].classList.add("active");
        });
      }

      for(let i = 0; i < mobileTabs{{$randomNumber}}.length; i++) {
        mobileTabs{{$randomNumber}}[i].addEventListener("click", function() {
          for(let x = 0; x < mobileTabs{{$randomNumber}}.length; x++) {
            mobileTabs{{$randomNumber}}[x].classList.remove("active");
            tabItems{{$randomNumber}}[x].classList.remove("active");
          }

          tabItems{{$randomNumber}}[i].classList.add("active");
          mobileTabs{{$randomNumber}}[i].classList.add("active");
          tabsElement{{$randomNumber}}.scrollIntoView({"behavior": "smooth"});
        });
      }

      function makeEqualHeight(tabs) {
        maxheight = 0;
        jQuery.each(tabs, function() {
            this.classList.add("active"); /* make all visible */
            maxheight = (this.offsetHeight > maxheight ? this.offsetHeight : maxheight);
            if (!jQuery(this).hasClass("show")) {
                this.classList.remove("active"); /* hide again */
            }
        });
        jQuery.each(tabs, function() {
            jQuery(this).height(maxheight);
        });
      }
      

      jQuery(window).load(function(){
        if (jQuery(window).width() > 768) {
        makeEqualHeight(document.querySelectorAll(".tabs_{{$randomNumber}} .tabs__item__content"));

        window.addEventListener('resize', makeEqualHeight(document.querySelectorAll(".tabs_{{$randomNumber}} .tabs__item__content")));
        }
      });
  
       

      

</script>