
@if ($paginator->hasPages())
    <div class="pagination">
        <ul class="pagination__list">
            @if (!$paginator->onFirstPage())
                <li class="pagination__item pagination__item--ctrl">
                    <a class="pagination__link" href="{{ $paginator->previousPageUrl() }}">
                        <i class="fas fa-angle-left"></i>
                    </a>
                </li>
            @endif
            
            @foreach ($elements as $element)

                @if (is_string($element))
                    <li class="pagination__item pagination__item--dots">
                        <span class="pagination__txt">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))

                    @foreach ($element as $page=>$url)

                        @if ($paginator->currentPage()  == $page)

                            <li class="pagination__item pagination__item--num pagination__item--active">
                                <a class="pagination__link " href="{{ $url }}">{{ $page }}</a>
                            </li>

                        @else
                            <li class="pagination__item pagination__item--num">
                                <a class="pagination__link" href="{{ $url }}">{{ $page }}</a>
                            </li>

                        @endif
                   
                    @endforeach

                @endif

            @endforeach
  
            @if ($paginator->hasMorePages())
                <li class="pagination__item pagination__item--ctrl">
                    <a class="pagination__link" href="{{ $paginator->nextPageUrl() }}">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endif


