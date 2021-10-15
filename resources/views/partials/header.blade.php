@php
  $logo = get_field("logo", "option");
  $contactgegevens = get_field("contactgegevens", "option");
@endphp

<section class="section__header">

  {{-- NAV BALK --}}
  <nav class="navbar banner d-flex justify-content-center">
    <div class="container">
      <div class="row align-items-end pt-4">
        {{-- LOGO --}}
        <div class="col-8 col-lg-3">
      @if($logo)
          <a class="brand section__header__logo" href="{{ home_url('/') }}"><img src="{{$logo['url']}}" alt="{{ get_bloginfo('name', 'display') }}"></a>
          @else
          <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
          @endif
        </div>


    {{-- HAMBURGER BUTTON --}}
    <div class="col-4 text-right d-lg-none hamburger pb-2 pt-3">
        <a class="navbar-toggle collapsed d-lg-none">
          <i class="fas fa-align-right section__header__mobileicon default"></i>
          <i class="fas fa-align-left section__header__mobileicon active"></i>
        </a>
        <div class="hamburger-background"></div>
    </div>

      {{-- MOBILE NAVIGATION --}}
    <div id="fullmenu" class="col-12 d-lg-none">

      <nav class="nav-primary pt-3 pb-5">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>

    {{-- DESKTOP NAVIGATION --}}
  <div class="col-lg-9 d-none d-lg-block" id="desktopmenu">
      @if (has_nav_menu('primary_navigation'))
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
          <div class="container justify-content-center">
            @php
            wp_nav_menu( array(
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                // 'container'         => 'div',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            @endphp
          </div>


          </div>
        </nav>
      @endif
  </div>



      {{-- CLOSING --}}
      </div>
  </nav>
</section>
