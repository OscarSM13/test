@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a class="navlinks" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="navlinks current">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="navlinks current">{{ $page }}</a>
                    @else
                        <a class="navlinks" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="navlinks" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a></li>
        @endif
    </ul>
@endif
