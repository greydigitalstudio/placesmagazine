<section class="main_event">
    <div class="main_event__in center">
        @if (isset($title))
            <div class="main_event__top">
                <h1 class="main_event__title general__title">{{ $title }}</h1>
            </div>
        @endif
        <div class="main_event__item">
            <div class="main_event__left">
                <div class="main_event__event">
                    <div class="main_event__event-top">
                        <div class="main_event__event-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 22 22" fill="none">
                                <path id="Vector" d="M18.4799 4.58332C17.5082 3.6091 16.2202 3.01448 14.8484 2.90689C13.4766 2.79931 12.1116 3.18583 10.9999 3.99666C9.83361 3.12916 8.38192 2.73579 6.93719 2.89577C5.49246 3.05576 4.162 3.7572 3.21374 4.85886C2.26547 5.96051 1.76985 7.38055 1.82666 8.833C1.88348 10.2855 2.48851 11.6624 3.51993 12.6867L9.21243 18.3883C9.68911 18.8575 10.3311 19.1204 10.9999 19.1204C11.6687 19.1204 12.3107 18.8575 12.7874 18.3883L18.4799 12.6867C19.5502 11.6098 20.1509 10.1532 20.1509 8.63499C20.1509 7.11674 19.5502 5.66016 18.4799 4.58332ZM17.1874 11.4217L11.4949 17.1142C11.4302 17.1796 11.3531 17.2315 11.2681 17.2669C11.1831 17.3024 11.092 17.3206 10.9999 17.3206C10.9079 17.3206 10.8167 17.3024 10.7318 17.2669C10.6468 17.2315 10.5697 17.1796 10.5049 17.1142L4.81243 11.3942C4.09354 10.6593 3.69099 9.67217 3.69099 8.64416C3.69099 7.61615 4.09354 6.62901 4.81243 5.89416C5.54499 5.17089 6.53299 4.76534 7.56243 4.76534C8.59187 4.76534 9.57987 5.17089 10.3124 5.89416C10.3976 5.98007 10.499 6.04827 10.6107 6.09481C10.7224 6.14134 10.8422 6.1653 10.9633 6.1653C11.0843 6.1653 11.2041 6.14134 11.3158 6.09481C11.4275 6.04827 11.5289 5.98007 11.6141 5.89416C12.3467 5.17089 13.3347 4.76534 14.3641 4.76534C15.3935 4.76534 16.3815 5.17089 17.1141 5.89416C17.8429 6.61938 18.2586 7.60116 18.2723 8.6292C18.286 9.65724 17.8966 10.6498 17.1874 11.3942V11.4217Z" fill="#999999"/>
                            </svg>
                        </div>
                        <div class="main_event__tags">
                            @forelse ($event->tags as $tag)
                                <div class="main_event__tag">{{ $tag->name }}</div>
                            @empty
                                <div class="main_event__tag">Нет метки</div>
                            @endforelse
                        </div>
                    </div>
                    <a href="{{ route('client-event-single', ['id' => $event->id]) }}" class="main_event__event-middle">{{ $event->name }}</a>
                    <div class="main_event__event-bottom">
                        <div class="main_event__time">
                            <strong>{{ date('j F', strtotime($event->event_datetime)) }}</strong> <span>c {{ date('H:i', strtotime($event->event_datetime)) }} до {{ date('H:i', strtotime($event->event_datetime)) }}</span>
                        </div>
                    </div>
                    <div class="main_event__button">
                        @include(
                            '_partials._client_parts.button-circle',
                            [
                                'link' => '#',
                                'text' => 'узнать подробнее'
                            ]
                        )
                    </div>
                </div>
                <div class="main_event__scroller"></div>
            </div>
            <div class="main_event__right">
                <div class="main_event__image">
                    <img src="{{ asset('storage/uploads/') . '/' . $event->main_photo }}" alt="{{ $event->name }}">
                </div>
            </div>
        </div>
    </div>
</section>