<li class="cbp-item">
    <a href="{{ route('area', $area->id) }}" class="cbp-caption">
        <div class="cbp-caption-defaultWrap">
            @if(!$area->getMedia()->isEmpty())
                <img src="{{ $area->getMedia()->first()->getUrl('thumb-practice-areas') }}" alt="">
            @else
                <img src="http://via.placeholder.com/279x200" alt="titulo">
            @endif
        </div>
        <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignLeft">
                <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title"><i class="fa fa-briefcase"></i> <br /> <strong>{{ $area->title }}</strong></div>
                </div>
            </div>
        </div>
    </a>
</li>