<div class="main_filter">
    <div class="main_filter__in center">
        <div class="main_filter__top">
            <div class="main_filter__title">
                <div class="general__title general__title--with_subtitle">{{ $title }} <span>Найдено событий:</span> <strong>{{ count($events) }}</strong></div>
            </div>
        </div>
        <div class="main_filter__row">
            <div class="main_filter__left">
                <div class="main_filter__left_in">
                    <div class="main_filter__left-title">темы событий</div>
                    <div class="main_filter__categories">
                        @forelse ($categories as $category)
                            <a href="#" class="main_filter__category">{{ $category->name }}</a>
                        @empty
                            <div>Нет записей</div>
                        @endforelse
                    </div>
                </div>
                <div class="main_filter__scroller"></div>
            </div>
            <div class="main_filter__right">
                @each('_partials._client_parts.card_small', $cards, 'event')
            </div>
        </div>
    </div>
</div>