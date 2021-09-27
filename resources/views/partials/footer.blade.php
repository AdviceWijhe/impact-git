@php
  $contactgegevens = get_field("contactgegevens", "option");
@endphp

<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        @if($contactgegevens['bedrijfsnaam'])
        <h4>{{$contactgegevens['bedrijfsnaam']}}</h4>
        @endif
        <p>
        @if($contactgegevens['adres'])
        {{$contactgegevens['adres']}}<br>
        @endif
        @if($contactgegevens['postcode'] || $contactgegevens['plaats'])
        {{$contactgegevens['postcode']}}, {{$contactgegevens['plaats']}}<br>
        @endif
        @if($contactgegevens['telefoonnummer'])
        <a href="tel:{{$contactgegevens['telefoonnummer']}}">{{$contactgegevens['telefoonnummer']}}</a><br>
        @endif
        @if($contactgegevens['emailadres'])
        <a href="mailto:{{$contactgegevens['emailadres']}}">{{$contactgegevens['emailadres']}}</a>
        @endif
      </p>
      </div>
      <div class="col-12 col-md-4">

      </div>
      <div class="col-12 col-md-4">

      </div>
    </div>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
