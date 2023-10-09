@if ($paginator->hasPages())
    <div class="join">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="join-item btn btn-disabled" aria-disabled="true" aria-disabled="true"
               aria-label="@lang('pagination.previous')">
                @else
                    <a class="join-item btn" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')">&lsaquo;</a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <a class="join-item btn btn-disabled" aria-disabled="true">{{$element}}</a>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class="join-item btn btn-active" aria-current="page">{{$page}}</a>
                                <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                            @else
                                <a href="{{ $url }}" class="join-item btn">{{page}}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="join-item btn" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                @else
                    <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-disabled" aria-disabled="true"
                       aria-label="@lang('pagination.next') aria-hidden=" true">&rsaquo;</a>
        @endif
    </div>
@endif
