@extends('layouts/layoutAdmin')

@section('title', 'Список тегов')


@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection


@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 py-3">
    <h4 class="fw-bold mb-0"><span class="text-muted fw-light">Организаторы /</span> Список</h4>
    <button class="btn add-new btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddOrganizer">
        <span>
            <i class="ti ti-plus me-0 me-sm-1" ></i>
            <span class="d-none d-sm-inline-block">Добавить организатора</span>
        </span>
    </button>
</div>
<!-- Examples -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Логотип</th>
                <th>Название</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @forelse ($organizers as $organizer)
            <tr>
                <td>{{ $organizer->id }}</td>
                <td><img src="{{ asset('storage/uploads/') . '/' . $organizer->main_logo }}" width="73" alt=""></td>
                <td style="width: 100%;"><img src="{{ $organizer->name }}" width="60" alt="">{{ $organizer->name }}</td>
                <td>
                    <div class="d-inline-block text-nowrap">
                        <button class="btn btn-sm btn-primary me-2 btn-icon edit-record" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditorganizer{{ $organizer->id }}">
                            <i class="ti ti-edit"></i>
                        </button>
                        <button
                            class="btn btn-sm btn-danger btn-icon delete-record"
                            data-bs-toggle="modal"
                            data-bs-target="#modalDeleteTag{{ $organizer->id }}"
                        >
                            <i class="ti ti-trash"></i>
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="modalDeleteTag{{ $organizer->id }}" tabindex="-1" aria-labelledby="modalDeleteTag{{ $organizer->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form class="modal-content" method="POST" action="{{ route('admin-organizer-destroy', $organizer->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalDeleteTag{{ $organizer->id }}Label">Удаление категории "{{ $organizer->name }}"</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Вы уверены что хотите удалить организатора "{{ $organizer->name }}" ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
                                    <button type="submit" class="btn btn-primary">Да</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Offcanvas to add new tag -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditorganizer{{ $organizer->id }}" aria-labelledby="offcanvasEditorganizer{{ $organizer->id }}Label">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasEditorganizer{{ $organizer->id }}Label" class="offcanvas-title">Редактирование организатора</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body mx-0 flex-grow-0">
                            <form method="POST" action="{{ route('admin-organizer-update', $organizer->id) }}" class="add-new-tag pt-0">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="mb-3">
                                    <label class="form-label" for="add-tag">Название</label>
                                    <input type="text" id="add-tag" name="name" value="{{ $organizer->name }}" class="form-control" />
                                </div>

                                <label class="dropzone needsclick dz-clickable main-event-image mb-4" id="dropzone-main-image" style="--main_image: url({{ asset('storage/uploads/') . '/' . $organizer->main_logo }})">
                                    <div class="dz-message needsclick">
                                        <!-- <img src="{{ URL::asset('storage/uploads/1491165963.jpg') }}" /> -->
                                        Главное лого организатора
                                        <span class="note needsclick">(.jpg | .png | .webp)</span>
                                    </div>
                                    <div class="fallback">
                                        <input name="main_logo" type="file" />
                                    </div>
                                </label>
                                
                                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Сохранить</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Отмена</button>
                            </form>
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
                </td>
            </tr>
            @empty
                <tr>
                    <td>Нет записей</td>
                    <td></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>




<!-- Offcanvas to add new tag -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddOrganizer" aria-labelledby="offcanvasAddOrganizerLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasAddOrganizerLabel" class="offcanvas-title">Новый организатор</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">
      <form method="POST" action="{{ route('admin-organizer-store') }}" class="add-new-tag pt-0"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label" for="add-tag">Название</label>
          <input type="text" id="add-tag" name="name" class="form-control" />
        </div>

        <label class="dropzone needsclick dz-clickable main-event-image mb-4" id="dropzone-main-image">
            <div class="dz-message needsclick">
                <!-- <img src="{{ URL::asset('storage/uploads/1491165963.jpg') }}" /> -->
                Главное лого организатора
                <span class="note needsclick">(.jpg | .png | .webp)</span>
            </div>
            <div class="fallback">
                <input name="main_logo" type="file" />
            </div>
        </label>
        
        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Сохранить</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Отмена</button>
      </form>
    </div>
  </div>
</div>

<!--/ Card layout -->
@endsection