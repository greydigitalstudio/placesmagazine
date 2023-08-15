<div class="saves saves__slider glide">
    <div class="saves__in center">
        <div class="saves__top">
            <h1 class="saves__title general__title">
                {{ $title }}
                <span class="heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 22 22" fill="none">
                        <path d="M14.8484 2.90689C16.2202 3.01448 17.5082 3.6091 18.4799 4.58332C19.5502 5.66016 20.1509 7.11674 20.1509 8.63499C20.1509 10.1532 19.5502 11.6098 18.4799 12.6867L12.7874 18.3883C12.3107 18.8575 11.6687 19.1204 10.9999 19.1204C10.3311 19.1204 9.68911 18.8575 9.21243 18.3883L3.51993 12.6867C2.48851 11.6624 1.88348 10.2855 1.82666 8.833C1.76985 7.38055 2.26547 5.96051 3.21374 4.85886C4.162 3.7572 5.49245 3.05576 6.93719 2.89577C8.38192 2.73579 9.83361 3.12916 10.9999 3.99666C12.1116 3.18583 13.4766 2.79931 14.8484 2.90689Z" fill="#D86C66"/>
                    </svg>
                </span>
            </h1>
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