@php
  $logo = get_field("logo", "option");
@endphp

<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-5 col-md-3">
        @if($logo)
        <a class="brand" href="{{ home_url('/') }}"><img src="{{$logo['url']}}" alt="{{ get_bloginfo('name', 'display') }}"></a>
        @else
        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        @endif
      </div>
      <div class="col-7 col-md-9">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</header>
