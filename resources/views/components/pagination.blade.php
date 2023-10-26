<ul class="pagination pagination-md justify-content-center">
  <li class="page-item">
      <a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">{{ __('Previous') }}</a>
  </li>
  @for ($i = 1; $i <= $products->lastPage(); $i++)
      <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
          <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
      </li>
  @endfor
  <li class="page-item">
      <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">{{ __('Next') }}</a>
  </li>
</ul>