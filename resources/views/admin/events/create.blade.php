@extends('layouts/layoutAdmin')

@section('title', 'Создать событие')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection


@section('page-script')
<script src="{{asset('js/event-create.js')}}"></script>
@endsection


@section('content')

    <form action="{{ route('admin-events-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-between align-items-center mb-4 py-3">
            <h4 class="fw-bold mb-0"><span class="text-muted fw-light">События /</span> Новое</h4>
            <button type="submit" class="btn btn-success add-new"><span><i class="ti ti-device-floppy me-0 me-sm-1"></i><span
                        class="d-none d-sm-inline-block">Сохранить</span></span></button>
        </div>
        <div class="row">
            <div class="col-12">
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
                            <div class="col-12 col-md-7">
                                <div class="row">
                            
                                    <div class="col-6">
                                        <input id="event-name" name="name" class="form-control form-control-lg" type="text" placeholder="Название">
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text">₽</span>
                                            <input type="number" min="0" class="form-control" name="price" placeholder="Цена">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <textarea class="form-control form-control-lg" id="event-description" name="description" rows="9" placeholder="Короткое описание"></textarea>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="event_date" class="form-label">Дата проведения</label>
                                        <input class="form-control" type="date" name="event_date" value="" id="event_date">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="event_time" class="form-label">Время проведения</label>
                                        <input class="form-control" type="time" name="event_time" value="" id="event_time">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <label class="switch mb-3">
                                    <input type="checkbox" name="recomended" value="true" class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Сохраненка</span>
                                </label>
                                <label class="switch mb-3">
                                    <input type="checkbox" name="popular" value="true" class="switch-input" />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">Популярное</span>
                                </label>
                                <div class="mb-3">
                                    <label for="event_tags" class="form-label">Теги</label>
                                    <div class="select2-primary">
                                        <select id="event_tags" name="event_tags" class="select2 form-select" multiple>
                                            @forelse ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @empty
                                                <option>Нет записей</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <label class="dropzone needsclick dz-clickable main-event-image" id="dropzone-main-image">
                                    <div class="dz-message needsclick">
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
                <div class="card">
                    <h5 class="card-header">Подробный текст</h5>
                    <div class="card-body">
                        <textarea name="content" id="hidden_content" class="d-none"></textarea>
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
                        <div id="events-create-main"></div>
                    </div>
                </div>
            </div>
            
        </div>

    </form>
    

<!--/ Card layout -->
@endsection