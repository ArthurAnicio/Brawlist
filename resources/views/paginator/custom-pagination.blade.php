@if($paginator->hasPages())
    <nav>
        <span>
            @if(! $paginator->onFirstPage())
            <div class="blueIcon">
                <a href="{{$paginator->previousPageUrl()}}">
                <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
            @endif
        </span>
        <span>
            @if($paginator->hasMorePages())
            <div class="blueIcon">
                <a href="{{$paginator->nextPageUrl()}}">
                <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            @endif
        </span>
    </nav>
@endif