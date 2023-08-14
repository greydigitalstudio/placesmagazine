<section class="where_to_go">
    <div class="where_to_go__in center">
        <div class="where_to_go__top">
            <h1 class="general__title where_to_go__title">{{ $title }}</h1>
            <div class="where_to_go__weekdays">
                <ul class="where_to_go__weekdays--list">
                    <li class="isActive">Все</li>
                    <li>|</li>
                    <li>Пн</li>
                    <li>|</li>
                    <li>Вт</li>
                    <li>|</li>
                    <li>Ср</li>
                    <li>|</li>
                    <li>Чт</li>
                    <li>|</li>
                    <li>Пт</li>
                    <li>|</li>
                    <li>Сб</li>
                    <li>|</li>
                    <li>Вск</li>
                </ul>
                <div class="where_to_go__weekdays--scroller"></div>
            </div>
        </div>
        <div class="where_to_go__cards">
            @each('_partials._client_parts.card_small', $cards, 'event')
            
            <div class="where_to_go__subscribe @if(count($cards) >= 4) where_to_go__subscribe--third @endif @if(count($cards) <= 6 && count($cards) >= 4) where_to_go__subscribe--{{ 4 - ((count($cards) + 1) % 4) }}-from-4 @endif">
                @include(
                    '_partials._client_parts.subscription',
                    [
                        'title' => 'подпишитесь на рассылку',
                        'subtitle' => 'Будь первым в курсе всех новостей'
                    ]
                )
                <div class="where_to_go__scroller"></div>
            </div>
        </div>
    </div>
</section>