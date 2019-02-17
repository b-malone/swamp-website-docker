{{-- <article class="jumbotron jumbotron-article text-center" style="background-color: #fff;"> --}}
<article class="text-center" style="background-color: #fff;">

  <h4>{{ $title }}</h4>
  <p>
    <a class="link-text" aria-label="{{ $title }}" target="_self"
    href="{{ $href }}" download="{{ $subtitle }}.pdf">
        {{ $subtitle }}<i class="glyphicon glyphicon-download"></i>
    </a>
  </p>

</article>
