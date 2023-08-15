@extends('layouts/layoutAdmin')

@section('title', 'Список тегов')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 py-3">
    <h4 class="fw-bold mb-0"><span class="text-muted fw-light">Категории /</span> Список</h4>
    <button class="btn add-new btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddCategory"><span><i class="ti ti-plus me-0 me-sm-1" ></i><span
                class="d-none d-sm-inline-block">Добавить Категорию</span></span></button>
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
                <th>Название</th>
                <th>Количество событий</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td style="width: 100%;">{{ $category->name }}</td>
                <td>{{ count($category->events) }}</td>
                <td>
                    <div class="d-inline-block text-nowrap">
                        <button class="btn btn-sm btn-primary me-2 btn-icon edit-record" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditCategory{{ $category->id }}"><i class="ti ti-edit"></i></button>
                        <button class="btn btn-sm btn-danger btn-icon delete-record" data-bs-toggle="modal" data-bs-target="#modalDeleteTag{{ $category->id }}"><i class="ti ti-trash"></i></button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="modalDeleteTag{{ $category->id }}" tabindex="-1" aria-labelledby="modalDeleteTag{{ $category->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form class="modal-content" method="POST" action="{{ route('admin-category-destroy', $category->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalDeleteTag{{ $category->id }}Label">Удаление категории "{{ $category->name }}"</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Вы уверены что хотите удалить категорию "{{ $category->name }}" ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
                                    <button type="submit" class="btn btn-primary">Да</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Offcanvas to add new tag -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditCategory{{ $category->id }}" aria-labelledby="offcanvasEditCategory{{ $category->id }}Label">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasEditCategory{{ $category->id }}Label" class="offcanvas-title">Новый тег</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body mx-0 flex-grow-0">
                            <form method="POST" action="{{ route('admin-tags-update', $category->id) }}" class="add-new-tag pt-0">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="mb-3">
                                    <label class="form-label" for="add-tag">Название</label>
                                    <input type="text" id="add-tag" name="name" value="{{ $category->name }}" class="form-control" />
                                </div>
                                
                                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Сохранить</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Отмена</button>
                            </form>
                            </div>
                        </div>
                    </div>
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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddCategory" aria-labelledby="offcanvasAddCategoryLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasAddCategoryLabel" class="offcanvas-title">Новая категория</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">
      <form method="POST" action="{{ route('admin-category-store') }}" class="add-new-tag pt-0">
        @csrf
        <div class="mb-3">
          <label class="form-label" for="add-tag">Название</label>
          <input type="text" id="add-tag" name="name" class="form-control" />
        </div>
        
        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Сохранить</button>
        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Отмена</button>
      </form>
    </div>
  </div>
</div>

<!--/ Card layout -->
@endsection