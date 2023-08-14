<div class="main_banner">
        <div class="main_banner__in" style="--background: url({{ asset('assets/img/main_banner.jpg') }})">
            <div class="main_banner__top">
                <div class="main_banner__name">placesmagazine</div>
                <div class="main_banner__subtitle">На перекрестке главных событий Иркутска</div>
            </div>
            <div class="main_banner__middle">
                <div class="main_banner__search">
                    <form action="/search" class="search">
                        <input type="text" name="name" class="search__input" placeholder="Танцы, бары и вечеринки">
                        <button class="search__button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none"><path d="M17.1867 16.063L14.2496 13.1497C15.3897 11.7282 15.9418 9.92389 15.7924 8.1078C15.643 6.29172 14.8035 4.60189 13.4465 3.38578C12.0895 2.16967 10.3181 1.51972 8.49652 1.56956C6.67498 1.61941 4.94177 2.36526 3.65327 3.65376C2.36477 4.94226 1.61892 6.67547 1.56907 8.497C1.51923 10.3185 2.16919 12.0899 3.3853 13.447C4.60141 14.804 6.29123 15.6435 8.10732 15.7929C9.9234 15.9423 11.7277 15.3902 13.1492 14.2501L16.0625 17.1634C16.1361 17.2376 16.2237 17.2965 16.3202 17.3367C16.4166 17.3769 16.5201 17.3976 16.6246 17.3976C16.7291 17.3976 16.8326 17.3769 16.9291 17.3367C17.0255 17.2965 17.1131 17.2376 17.1867 17.1634C17.3294 17.0158 17.4092 16.8185 17.4092 16.6132C17.4092 16.4079 17.3294 16.2106 17.1867 16.063ZM8.70795 14.2501C7.61191 14.2501 6.54049 13.9251 5.62917 13.3162C4.71785 12.7072 4.00756 11.8418 3.58812 10.8291C3.16868 9.81654 3.05894 8.70229 3.27277 7.62732C3.48659 6.55234 4.01439 5.56491 4.7894 4.78989C5.56442 4.01487 6.55185 3.48708 7.62683 3.27326C8.70181 3.05943 9.81605 3.16917 10.8287 3.58861C11.8413 4.00804 12.7068 4.71833 13.3157 5.62966C13.9246 6.54098 14.2496 7.6124 14.2496 8.70844C14.2496 10.1782 13.6658 11.5877 12.6265 12.627C11.5872 13.6663 10.1777 14.2501 8.70795 14.2501Z" fill="white"/></svg>
                        </button>
                    </form>
                </div>
                <div class="main_banner__tags">
                    @forelse ($tags as $tag)
                        <a href="{{ route('client-search', ['tag' => $tag->name]); }}" class="main_banner__tag">{{ $tag->name }}</a>
                    @empty
                        
                    @endforelse
                </div>
            </div>
            <div class="main_banner__bottom">
                <ul>
                    <li><a href="#">Москва</a></li>
                    <li class="delim">|</li>
                    <li><a href="#">Нижний Новгород</a></li>
                    <li class="delim">|</li>
                    <li><a href="#">Иркутск</a></li>
                    <li class="delim">|</li>
                    <li><a href="#">Санкт-Петербург</a></li>
                </ul>
            </div>
        </div>
    </div>