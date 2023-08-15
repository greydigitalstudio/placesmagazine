<div class="saves saves__slider glide">
    <div class="saves__in center">
        <div class="saves__top">
            <h1 class="saves__title general__title">{{ $title }}</h1>
            <div class="saves__arrows general__arrows" data-glide-el="controls">
                <div class="general__arrow glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 34 22" fill="none">
                        <path d="M32.7071 11.7071C33.0976 11.3166 33.0976 10.6834 32.7071 10.2929L26.3431 3.92893C25.9526 3.53841 25.3195 3.53841 24.9289 3.92893C24.5384 4.31946 24.5384 4.95262 24.9289 5.34315L30.5858 11L24.9289 16.6569C24.5384 17.0474 24.5384 17.6805 24.9289 18.0711C25.3195 18.4616 25.9526 18.4616 26.3431 18.0711L32.7071 11.7071ZM0 12H32V10H0V12Z" fill="#121212"/>
                    </svg>
                </div>
                <div class="general__arrow glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 34 22" fill="none">
                        <path d="M32.7071 11.7071C33.0976 11.3166 33.0976 10.6834 32.7071 10.2929L26.3431 3.92893C25.9526 3.53841 25.3195 3.53841 24.9289 3.92893C24.5384 4.31946 24.5384 4.95262 24.9289 5.34315L30.5858 11L24.9289 16.6569C24.5384 17.0474 24.5384 17.6805 24.9289 18.0711C25.3195 18.4616 25.9526 18.4616 26.3431 18.0711L32.7071 11.7071ZM0 12H32V10H0V12Z" fill="#121212"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="saves__items glide__track" data-glide-el="track">
            <div class="glide__slides">
                @each('_partials._client_parts.card_small', $cards, 'event')
            </div>
        </div>
    </div>
</div>