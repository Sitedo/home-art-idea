<h3 class="title--3">{{ $title }}</h3>
<div class="slick-col-3">
    @foreach($images as $alt => $src)
        <div class="slick-col-3__image-wrapper"><img src="{{ $src }}" alt="{{ $alt }}"></div>
    @endforeach
</div>