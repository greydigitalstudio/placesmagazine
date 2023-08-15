@extends('layouts/layoutAdmin')

@section('title', 'Список событий')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 py-3">
  <h4 class="fw-bold mb-0"><span class="text-muted fw-light">События /</span> Список</h4>
  <a href="{{ route('admin-events-create')  }}" class="btn add-new btn-primary"><span><i class="ti ti-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Добавить событие</span></span></a>
</div>
<!-- Examples -->
<div class="row mb-5">
  @forelse ($events as $event)
  <div class="col-md-6 col-lg-3 mb-3">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">{{ $event->name }}</h5>
        <!-- <h6 class="card-subtitle text-muted">Support card subtitle</h6> -->
        <img class="img-fluid image-fixed-height d-flex mx-auto my-4 rounded" src="{{ asset('storage/uploads/') . '/' . $event->main_photo }}" alt="Card image cap" />
        <p class="card-text">{{ $event->description }}</p>
        <div class="d-flex">
          <a href="{{ route('admin-events-edit', $event->id) }}" class="btn btn-icon btn-primary waves-effect me-2">
            <span class="ti ti-edit"></span>
          </a>
          <button data-bs-toggle="modal" data-bs-target="#modalDeleteEvent{{ $event->id }}" class="btn btn-icon btn-danger waves-effect">
            <span class="ti ti-trash"></span>
          </button>
          <div class="modal fade" id="modalDeleteEvent{{ $event->id }}" tabindex="-1" aria-labelledby="modalDeleteEvent{{ $event->id }}Label" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <form class="modal-content" method="POST" action="{{ route('admin-events-destroy', $event->id) }}">
                      @csrf
                      <input type="hidden" name="_method" value="DELETE">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalDeleteEvent{{ $event->id }}Label">Удаление события "{{ $event->name }}"</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          </button>
                      </div>
                      <div class="modal-body">
                          <p>Вы уверены что хотите удалить событие "{{ $event->name }}" ?</p>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
                          <button type="submit" class="btn btn-primary">Да</button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty
    <p>Нет записей</p>
  @endforelse
  <style>
    .image-fixed-height {
      height: 250px;
      width: 100%;
      object-fit: cover;
    }
  </style>
</div>

<!--/ Card layout -->
@endsection
