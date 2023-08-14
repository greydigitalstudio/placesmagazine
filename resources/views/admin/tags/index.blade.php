@extends('layouts/layoutAdmin')

@section('title', 'Список тегов')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 py-3">
    <h4 class="fw-bold mb-0"><span class="text-muted fw-light">Теги /</span> Список</h4>
    <button class="btn add-new btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddTag"><span><i class="ti ti-plus me-0 me-sm-1" ></i><span
                class="d-none d-sm-inline-block">Добавить тег</span></span></button>
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
            @forelse ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td style="width: 100%;">{{ $tag->name }}</td>
                <td>{{ count($tag->events) }}</td>
                <td>
                    <div class="d-inline-block text-nowrap">
                        <button class="btn btn-sm btn-primary me-2 btn-icon edit-record" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditTag{{ $tag->id }}"><i class="ti ti-edit"></i></button>
                        <button class="btn btn-sm btn-danger btn-icon delete-record" data-bs-toggle="modal" data-bs-target="#modalDeleteTag{{ $tag->id }}"><i class="ti ti-trash"></i></button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="modalDeleteTag{{ $tag->id }}" tabindex="-1" aria-labelledby="modalDeleteTag{{ $tag->id }}Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form class="modal-content" method="POST" action="{{ route('admin-tags-destroy', $tag->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalDeleteTag{{ $tag->id }}Label">Удаление тега "{{ $tag->name }}"</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Вы уверены что хотите удалить тег "{{ $tag->name }}" ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
                                    <button type="submit" class="btn btn-primary">Да</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Offcanvas to add new tag -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditTag{{ $tag->id }}" aria-labelledby="offcanvasEditTag{{ $tag->id }}Label">
                        <div class="offcanvas-header">
                            <h5 id="offcanvasEditTag{{ $tag->id }}Label" class="offcanvas-title">Новый тег</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body mx-0 flex-grow-0">
                            <form method="POST" action="{{ route('admin-tags-update', $tag->id) }}" class="add-new-tag pt-0">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="mb-3">
                                    <label class="form-label" for="add-tag">Название</label>
                                    <input type="text" id="add-tag" name="name" value="{{ $tag->name }}" class="form-control" />
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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddTag" aria-labelledby="offcanvasAddTagLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasAddTagLabel" class="offcanvas-title">Новый тег</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0">
      <form method="POST" action="{{ route('admin-tags-store') }}" class="add-new-tag pt-0">
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