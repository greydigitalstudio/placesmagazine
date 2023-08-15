@extends('layouts/layoutAdmin')

@section('title', 'Создать событие')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
@endsection


@section('page-script')
<script src="{{asset('js/event-create.js')}}"></script>
@endsection


@section('content')

    <form action="{{ route('admin-events-update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="d-flex justify-content-between align-items-center mb-4 py-3">
            <h4 class="fw-bold mb-0"><span class="text-muted fw-light">События /</span> Новое</h4>
            <button type="submit" class="btn btn-success add-new"><span><i class="ti ti-device-floppy me-0 me-sm-1"></i><span
                        class="d-none d-sm-inline-block">Сохранить</span></span></button>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Основные настройки</h5>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12 col-md-7 mb-3 mb-md-0">
                                <div class="row">
                            
                                    <div class="col-6">
                                        <input id="event-name" name="name" class="form-control form-control-lg" value="{{ $event->name }}" type="text" placeholder="Название">
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text">₽</span>
                                            <input type="number" min="0" class="form-control" name="price" value="{{ $event->price }}" placeholder="Цена">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <textarea class="form-control form-control-lg" id="event-description" name="description" rows="9" placeholder="Короткое описание">{{ $event->description }}</textarea>
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label for="event_date" class="form-label">Дата проведения</label>
                                        <input class="form-control" type="date" name="event_date" value="{{ date('Y-m-d', strtotime($event->event_datetime)) }}" id="event_date">
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label for="event_time" class="form-label">Начало</label>
                                        <input class="form-control" type="time" name="event_time" value="{{ date('H:i', strtotime($event->event_datetime)) }}" id="event_time">
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label for="endtime" class="form-label">Конец</label>
                                        <input class="form-control" type="time" name="endtime" value="{{ date('H:i', strtotime($event->endtime)) }}" id="endtime">
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label for="occasion" class="form-label">Повод</label>
                                        <select id="occasion" name="occasion" class="select2" data-style="btn-default">
                                            <option @if ($event->occasion == 'узнать новое') selected  @endif value="узнать новое">узнать новое</option>
                                            <option @if ($event->occasion == 'посмотреть') selected  @endif value="посмотреть">посмотреть</option>
                                            <option @if ($event->occasion == 'погулять') selected  @endif value="погулять">погулять</option>
                                            <option @if ($event->occasion == 'отметить') selected  @endif value="отметить">отметить</option>
                                            <option @if ($event->occasion == 'перекусить') selected  @endif value="перекусить">перекусить</option>
                                            <option @if ($event->occasion == 'поработать') selected  @endif value="поработать">поработать</option>
                                            <option @if ($event->occasion == 'отдохнуть за городом') selected  @endif value="отдохнуть за городом">отдохнуть за городом</option>
                                            <option @if ($event->occasion == 'тусоваться') selected  @endif value="тусоваться">тусоваться</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label for="transfer" class="form-label">Как добраться</label>
                                        <select id="transfer" name="transfer" class="select2" data-style="btn-default">
                                            <option @if ($event->transfer == 'на своем транспорте') selected  @endif value="на своем транспорте">на своем транспорте</option>
                                            <option @if ($event->transfer == 'общественный транспорт') selected  @endif value="общественный транспорт">общественный транспорт</option>
                                            <option @if ($event->transfer == 'можем сами к вам приехать') selected  @endif value="можем сами к вам приехать">можем сами к вам приехать</option>
                                            <option @if ($event->transfer == 'воздушный трансфер') selected  @endif value="воздушный трансфер">воздушный трансфер</option>
                                            <option @if ($event->transfer == 'водный трансфер') selected  @endif value="водный трансфер">водный трансфер</option>
                                            <option @if ($event->transfer == 'автомобильный трансфер') selected  @endif value="автомобильный трансфер">автомобильный трансфер</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label for="place" class="form-label">Расположение </label>
                                        <select id="place" name="place" class="select2" data-style="btn-default">
                                            <option @if ($event->transfer == 'в городе') selected  @endif value="в городе">в городе</option>
                                            <option @if ($event->transfer == 'за городом') selected  @endif value="за городом">за городом</option>
                                            <option @if ($event->transfer == 'на выезд') selected  @endif value="на выезд">на выезд</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 mt-3">
                                        <label for="min_guests" class="form-label">Количество гостей</label>
                                        
                                        <div class="row">
                                            <div class="col-6">
                                                <input class="form-control" type="number" value="{{ $event->min_guests }}" min="0" max="150" step="1" id="min_guests" name="min_guests" />
                                            </div>
                                            <div class="col-6">
                                                <input class="form-control" type="number" value="{{ $event->max_guests }}" min="0" max="150" step="1" id="max_guests" name="max_guests" />
                                            </div>
                                        </div>
                                        <div class="mt-3" id="slider-guests"></div>
                                    </div>
                                    <div class="col-12 col-md-8 mt-3">
                                        <label for="address" class="form-label">Адрес</label>
                                        <textarea class="form-control" name="address" id="address" rows="2">{{ $event->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="switch mb-3">
                                    <input type="checkbox" name="recomended" value="true" class="switch-input" @if($event->recomended) checked="checked" @endif />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Сохраненка</span>
                                </label>
                                <label class="switch mb-3">
                                    <input type="checkbox" name="popular" value="true" @if($event->popular) checked="checked" @endif class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Популярное</span>
                                </label>
                                <label class="switch mb-3">
                                    <input type="checkbox" name="checked" value="true" @if($event->checked) checked="checked" @endif class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Проверено экспертом</span>
                                </label>
                                <label class="switch mb-3">
                                    <input type="checkbox" name="pg" value="true" @if($event->pg) checked="checked" @endif class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">18+</span>
                                </label>
                                
                                @php
                                    function map_items($item)
                                    {
                                        return $item['id'];
                                    }
                                    $selected_ids = array_map('map_items', $event->tags->toArray());
                                    $selected_categories = array_map('map_items', $event->categories->toArray());
                                @endphp
                                <div class="mb-3">
                                    <label for="event_tags" class="form-label">Теги</label>
                                    <div class="select2-primary">
                                        <select id="event_tags" name="event_tags[]" class="select2 form-select" multiple>
                                            @forelse ($tags as $tag)
                                                <option value="{{ $tag->id }}" @if (in_array($tag->id, $selected_ids)) selected  @endif>{{ $tag->name }}</option>
                                            @empty
                                                <option>Нет записей</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="event_categories" class="form-label">Категории</label>
                                    <div class="select2-primary">
                                        <select id="event_categories" name="event_categories[]" class="select2 form-select" multiple>
                                            @forelse ($categories as $category)
                                                <option value="{{ $category->id }}" @if (in_array($category->id, $selected_categories)) selected  @endif>{{ $category->name }}</option>
                                            @empty
                                                <option>Нет записей</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="dropzone needsclick dz-clickable main-event-image" id="dropzone-main-image" style="--main_image: url({{ asset('storage/uploads/') . '/' . $event->main_photo }})">
                                    <div class="dz-message needsclick opacity-0">
                                        <!-- <img src="{{ URL::asset('storage/uploads/1491165963.jpg') }}" /> -->
                                        Главное фото события
                                        <span class="note needsclick">(.jpg | .png | .webp)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="main_photo" type="file" />
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <style>
                    .main-event-image {
                        background: var(--main_image) 50% 50%/cover no-repeat;
                    }
                    .opacity-0 {
                        opacity: 0;
                    }
                </style>
                <div class="card">
                    <h5 class="card-header">Подробный текст</h5>
                    <div class="card-body">
                        <textarea name="content" id="hidden_content" class="d-none">{!! $event->content !!}</textarea>
                        <div id="events-create-main-toolbar">
                            <span class="ql-formats">
                                <select class="ql-font"></select>
                                <select class="ql-size"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                                <button class="ql-strike"></button>
                            </span>
                            <span class="ql-formats">
                                <select class="ql-color"></select>
                                <select class="ql-background"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-script" value="sub"></button>
                                <button class="ql-script" value="super"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-header" value="1"></button>
                                <button class="ql-header" value="2"></button>
                                <button class="ql-blockquote"></button>
                                <button class="ql-code-block"></button>
                            </span>
                        </div>
                        <div id="events-create-main">
                            {!! $event->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    

<!--/ Card layout -->
@endsection