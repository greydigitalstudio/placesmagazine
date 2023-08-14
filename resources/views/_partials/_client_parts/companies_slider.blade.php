<section class="companies">
    <div class="companies__in center">
        <div class="companies__top">
            <h1 class="companies__title general__title general__title--small">{{ $title }}</h1>
        </div>
        <div class="companies__slider glide">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">
                    @for ($i = 0; $i < 20; $i++)
                        <div class="companies__slide">
                            <img src="http://placehold.it/123x35" width="100%" alt="logo">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>