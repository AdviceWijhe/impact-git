@php
  $logo = get_field("logo", "option");
@endphp

<section class="section__header">
  <nav class="navbar banner d-flex align-items-center justify-content-center">
    <div class="container">
      <div class="row section__header__row align-items-center">
        <div class="col-7 col-lg-3">
      @if($logo)
          <a class="brand section__header__logo" href="{{ home_url('/') }}"><img src="{{$logo['url']}}" alt="{{ get_bloginfo('name', 'display') }}"></a>
          @else
          <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
          @endif
        </div>

    {{-- HAMBURGER BUTTON --}}
        <a class="navbar-toggle collapsed d-lg-none col-5 text-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <i class="fas fa-bars section__header__mobileicon"></i>
        </a>

    {{-- NAV --}}
  <div class="col-md-9 d-none d-lg-flex my-auto justify-content-between align-items-center">
    <div class="nav section__header__text col-md-9">
        @if (has_nav_menu('primary_navigation'))
                      <nav class="navbar navbar-expand-md navbar-light" role="navigation">
  <div class="container justify-content-center">
        @php
        wp_nav_menu( array(
            'theme_location'    => 'primary_navigation',
            'depth'             => 2,
            'container'         => 'div',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        @endphp
    </div>
</nav>
            @endif


    </div>

        <div class="md-2 section__header__headerbutton">
      {!! getButton('Bel me terug', '/contact', 'primary') !!}
        </div>
        <div class="md-1">
        {{get_search_form()}}
        </div>
  </div>
</div>


    {{-- MOBILE NAV --}}
  <div id="navbar" class="navbar-collapse collapse section__header__mobilenav">
    <nav class="nav section__header__text d-flex flex-column section__header__mobilenavitems">

      @if (has_nav_menu('primary_navigation'))

<nav class="navbar-expand-lg" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->

        @php
        wp_nav_menu( array(
            'theme_location'    => 'primary_navigation',
            'depth'             => 2,
            'container'         => 'div',
            // 'container_class'   => 'collapse navbar-collapse',
            // 'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        @endphp
    </div>
</nav>

            @endif
    </nav>

      {!! getButton('Bel me terug', '/contact', 'primary') !!}
      {{get_search_form()}}

  </div>
  </div>
</nav>
</section>
