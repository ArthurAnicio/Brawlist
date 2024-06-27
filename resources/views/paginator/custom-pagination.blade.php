@if($paginator->hasPages())
    <nav>
        <span>
            @if($paginator->onFirstPage())
                <span>
                    Anterior
                </span>
            @else
                <a href="{{$paginator->previousPageUrl()}}">
                    Anterior
                </a>
            @endif
        </span>
        <span>
            @if($paginator->hasMorePages())
                <a href="{{$paginator->nextPageUrl()}}">
                    Próximo
                </a>
            @else
                <span>
                    Próximo
                </span>
            @endif
        </span>
    </nav>
@endif