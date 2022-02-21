@if ($paginator->hasPages())
    <div class="card-footer d-flex justify-content-between">
        <!-- Pagination (prev) -->
        <ul class="pagination pagination-tabs card-pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link" style="border-top-width: 1px !important;"><i class="fe fe-arrow-left me-1"></i> Prev</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        <i class="fe fe-arrow-left me-1"></i> Prev</a></li>
            @endif
        </ul>
        {{-- Pagination Elements --}}
        <ul class="pagination pagination-tabs card-pagination">
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
        <!-- Pagination (next) -->
        <ul class="pagination pagination-tabs card-pagination">
            <li class="page-item">
                <a class="page-link ps-4 pe-0 border-start" href="{{ $paginator->nextPageUrl() }}">
                    Next <i class="fe fe-arrow-right ms-1"></i>
                </a>
            </li>
        </ul>
    </div>
@endif
