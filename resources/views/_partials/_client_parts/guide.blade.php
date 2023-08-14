<section class="guide">
        <div class="guide__in center">
            <div class="guide__top">
                <h1 class="general__title guide__title">{{ $title }}</h1>
            </div>
            <div class="guide__bottom">
                <div class="guide__left">
                    <div class="guide__left-in">
                        <p>
                            Где вкуснее еда, где лучше потанцевать и где трава зеленее — знают наши эксперты. Они работают 24/7, чтобы помочь жителям не заблудиться в мире развлечений.
                        </p>
                        <p>
                            Каждое место тестируется 
                            на прочность – от качества пива 
                            до пышности коврика в зале для йоги. 
                        </p>
                        <p>
                            Применяйте фильтры и выбирайте подходящее событие.
                        </p>
                        <p>
                            Читайте обзоры и будьте уверены 
                            в событиях PlacesMagazine.
                        </p>
                        @include(
                            '_partials._client_parts.button-circle',
                            [
                                'link' => '#',
                                'text' => 'ко всем событиям'
                            ]
                        )
                    </div>
                    <div class="guide__left-scroller"></div>
                </div>
                <div class="guide__right">
                    <div class="guide__slider glide">
                        <div class="glide__track" data-glide-el="track">
                            <div class="glide__slides">
                                @each('_partials._client_parts.card_small', $cards, 'event')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>