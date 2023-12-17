@extends('layouts.app')

@section('title', 'Главная')

@section('page-scripts')
    <script src="{{asset('js/page-event-single.js')}}"></script>
@endsection


@section('content')
<div class="general__page-breadcrumbs">
    <div class="general__page-breadcrumbs-in center">
        <a href="{{ route('client-events') }}" class="general__page-breadcrumbs-item">События</a>
        <span class="general__page-breadcrumbs-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 16 16" fill="none">
                <path d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z" fill="#999999"/>
            </svg>
        </span>
        <!-- <a href="{{ route('client-events') }}" class="general__page-breadcrumbs-item">{{ $event->categories[0]->name }}</a>
        <span class="general__page-breadcrumbs-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 16 16" fill="none">
                <path d="M15.3536 8.35355C15.5488 8.15829 15.5488 7.84171 15.3536 7.64645L12.1716 4.46447C11.9763 4.2692 11.6597 4.2692 11.4645 4.46447C11.2692 4.65973 11.2692 4.97631 11.4645 5.17157L14.2929 8L11.4645 10.8284C11.2692 11.0237 11.2692 11.3403 11.4645 11.5355C11.6597 11.7308 11.9763 11.7308 12.1716 11.5355L15.3536 8.35355ZM4.37114e-08 8.5L15 8.5L15 7.5L-4.37114e-08 7.5L4.37114e-08 8.5Z" fill="#999999"/>
            </svg>
        </span> -->
        <span class="general__page-breadcrumbs-item">{{ $event->name }}</span>
    </div>
</div>
<div class="general__page-title">
    <div class="general__page-title-in center">
        <h1 class="general__title">{{ $event->name }}</h1>
    </div>
</div>
<div class="general__page-description center">
    {{ $event->description }}
</div>
<div class="general__page-slider center">
    <div class="general__page-slider-top">
        <div class="general__page-slider-top-left">
            @if ($event->pg)
                <div class="general__page-slider-top-pg">18+</div>    
            @endif
            <div class="general__page-slider-tags">
                @forelse ($event->tags as $tag)
                    <div class="general__page-slider-tag">{{ $tag->name }}</div>
                @empty
                    <div class="general__page-slider-tag">Нет метки</div>
                @endforelse
            </div>
        </div>
        <div class="general__page-slider-top-right">

            @if (strtotime($event->endtime) > time())
                <div class="general__page-slider-top-point">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 19 19" fill="none">
                            <path d="M14.812 5.70781C14.7384 5.6336 14.6509 5.57471 14.5544 5.53452C14.4579 5.49433 14.3544 5.47363 14.2499 5.47363C14.1454 5.47363 14.042 5.49433 13.9455 5.53452C13.849 5.57471 13.7615 5.6336 13.6879 5.70781L7.78994 11.6136L5.31202 9.12781C5.23561 9.05399 5.14541 8.99595 5.04656 8.957C4.94772 8.91805 4.84217 8.89894 4.73594 8.90078C4.62972 8.90262 4.52489 8.92536 4.42746 8.96771C4.33002 9.01006 4.24188 9.07119 4.16806 9.1476C4.09425 9.22401 4.03621 9.31421 3.99726 9.41306C3.9583 9.5119 3.9392 9.61745 3.94104 9.72368C3.94288 9.8299 3.96562 9.93473 4.00797 10.0322C4.05032 10.1296 4.11144 10.2177 4.18786 10.2916L7.22786 13.3316C7.30145 13.4058 7.38901 13.4647 7.48548 13.5048C7.58196 13.545 7.68543 13.5657 7.78994 13.5657C7.89445 13.5657 7.99792 13.545 8.0944 13.5048C8.19087 13.4647 8.27843 13.4058 8.35202 13.3316L14.812 6.87156C14.8924 6.79742 14.9565 6.70745 15.0004 6.6073C15.0442 6.50716 15.0669 6.39901 15.0669 6.28968C15.0669 6.18035 15.0442 6.07221 15.0004 5.97206C14.9565 5.87191 14.8924 5.78194 14.812 5.70781Z" fill="#414141"/>
                        </svg>
                    </div>
                    <div class="text">Активное событие</div>
                </div>
            @endif
            
            <div class="general__page-slider-top-point">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 19 19" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.54175C0 4.23007 1.06332 3.16675 2.375 3.16675H8.70833C10.02 3.16675 11.0833 4.23007 11.0833 5.54175V12.6667C11.0833 13.5412 10.3744 14.2501 9.5 14.2501H6.33333V12.6667H9.10417C9.32278 12.6667 9.5 12.4895 9.5 12.2709V5.54175C9.5 5.10452 9.14556 4.75008 8.70833 4.75008H2.375C1.93777 4.75008 1.58333 5.10452 1.58333 5.54175V11.8751C1.58333 12.3123 1.93777 12.6667 2.375 12.6667H3.16667V14.2501H2.375C1.06332 14.2501 0 13.1868 0 11.8751V5.54175Z" fill="#414141"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 5.54175H14.4282C15.0202 5.54175 15.5909 5.76285 16.0284 6.16173L18.2252 8.16468C18.7187 8.61471 19 9.25177 19 9.9197V11.8751C19 13.1868 17.9367 14.2501 16.625 14.2501H15.8333V12.6667H16.625C17.0622 12.6667 17.4167 12.3123 17.4167 11.8751V9.9197C17.4167 9.69706 17.3229 9.48471 17.1584 9.3347L14.9616 7.33174C14.8158 7.19878 14.6255 7.12508 14.4282 7.12508H11.875C11.4378 7.12508 11.0833 7.47952 11.0833 7.91675V12.2709C11.0833 12.4895 11.2606 12.6667 11.4792 12.6667H12.6667V14.2501H9.5V5.54175Z" fill="#414141"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 14.2499C5.18723 14.2499 5.54167 13.8955 5.54167 13.4583C5.54167 13.021 5.18723 12.6666 4.75 12.6666C4.31277 12.6666 3.95833 13.021 3.95833 13.4583C3.95833 13.8955 4.31277 14.2499 4.75 14.2499ZM4.75 15.8333C6.06168 15.8333 7.125 14.7699 7.125 13.4583C7.125 12.1466 6.06168 11.0833 4.75 11.0833C3.43832 11.0833 2.375 12.1466 2.375 13.4583C2.375 14.7699 3.43832 15.8333 4.75 15.8333Z" fill="#414141"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.25 14.2499C14.6872 14.2499 15.0417 13.8955 15.0417 13.4583C15.0417 13.021 14.6872 12.6666 14.25 12.6666C13.8128 12.6666 13.4583 13.021 13.4583 13.4583C13.4583 13.8955 13.8128 14.2499 14.25 14.2499ZM14.25 15.8333C15.5617 15.8333 16.625 14.7699 16.625 13.4583C16.625 12.1466 15.5617 11.0833 14.25 11.0833C12.9383 11.0833 11.875 12.1466 11.875 13.4583C11.875 14.7699 12.9383 15.8333 14.25 15.8333Z" fill="#414141"/>
                    </svg>
                </div>
                <div class="text">Можно на выезд</div>
            </div>
        </div>
    </div>
    <div class="general__page-slider-images">
        <div class="general__page-slider-images-in general__page-slider-images-js glide">
            <div class="glide__track" data-glide-el="track">
                <div class="glide__slides">
                  <div class="glide__slide general__page-slider-slide">
                    <img src="https://place-hold.it/1272x584" width="100%" alt="image">
                  </div>
                  <div class="glide__slide general__page-slider-slide">
                    <img src="https://place-hold.it/1272x584" width="100%" alt="image">
                  </div>
                  <div class="glide__slide general__page-slider-slide">
                    <img src="https://place-hold.it/1272x584" width="100%" alt="image">
                  </div>
                  <div class="glide__slide general__page-slider-slide">
                    <img src="https://place-hold.it/1272x584" width="100%" alt="image">
                  </div>
                </div>
            </div>
            <div data-glide-el="controls">
                <button class="glide__arrow glide__arrow--prev" data-glide-dir="<">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 22 22" fill="none">
                        <g id="Arrow XL-line" clip-path="url(#clip0_2048_517)">
                            <path id="Arrow 1" d="M1.29289 10.2929C0.90237 10.6834 0.90237 11.3166 1.29289 11.7071L7.65685 18.0711C8.04738 18.4616 8.68054 18.4616 9.07107 18.0711C9.46159 17.6805 9.46159 17.0474 9.07107 16.6569L3.41421 11L9.07107 5.34314C9.46159 4.95262 9.46159 4.31945 9.07107 3.92893C8.68054 3.53841 8.04738 3.53841 7.65686 3.92893L1.29289 10.2929ZM34 10L2 10L2 12L34 12L34 10Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2048_517">
                                <rect width="22" height="22" fill="white" transform="translate(22 22) rotate(-180)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
                <button class="glide__arrow glide__arrow--next" data-glide-dir=">">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 22 22" fill="none">
                        <g id="Arrow XL-line" clip-path="url(#clip0_2048_517)">
                            <path id="Arrow 1" d="M1.29289 10.2929C0.90237 10.6834 0.90237 11.3166 1.29289 11.7071L7.65685 18.0711C8.04738 18.4616 8.68054 18.4616 9.07107 18.0711C9.46159 17.6805 9.46159 17.0474 9.07107 16.6569L3.41421 11L9.07107 5.34314C9.46159 4.95262 9.46159 4.31945 9.07107 3.92893C8.68054 3.53841 8.04738 3.53841 7.65686 3.92893L1.29289 10.2929ZM34 10L2 10L2 12L34 12L34 10Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2048_517">
                                <rect width="22" height="22" fill="white" transform="translate(22 22) rotate(-180)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
    <!-- {{ $event->name }}
    <br />
    {{ $event->price }}
    <br />
    {{ $event->description }}
    <br />
    {!! $event->content !!}
    <br />
    {{ $event->recomended }}
    <br />
    <img src="{{ asset('storage/uploads/') . '/' . $event->main_photo }}" alt="{{ $event->name }}" width="100%">
    <br />
    {{ $event->popular }}
    <br />
    <strong>{{ date('j F', strtotime($event->event_datetime)) }}</strong> <span>c {{ date('H:i', strtotime($event->event_datetime)) }} до {{ date('H:i', strtotime($event->endtime)) }}</span>
    <br />
    {{ $event->occasion }}
    <br />
    {{ $event->min_guests }}
    <br />
    {{ $event->max_guests }}
    <br />
    {{ $event->transfer }}
    <br />
    {{ $event->place }}
    <br />
    {{ $event->checked }}
    <br />
    {{ $event->pg }}
    <br />
    {{ $event->address }} -->
@endsection