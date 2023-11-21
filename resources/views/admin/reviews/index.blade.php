@extends('layouts/layoutAdmin')

@section('title', 'User Management - Crud App')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/laravel-user-management.js')}}"></script>
@endsection

@section('content')
<div class="row mb-4 g-4">
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row widget-separator g-0">
        <div class="col-sm-5 border-shift border-end">
          <h2 class="text-primary d-flex align-items-center gap-1 mb-2">4.89<i class="ti ti-star-filled"></i></h2>
          <p class="h6 mb-1">Всего 187 отзывов</p>
          <p class="pe-2 mb-2">Все отзывы от авторизованых пользователей</p>
          <span class="badge bg-label-primary p-2 mb-sm-0">+5 На этой неделе</span>
          <hr class="d-sm-none">
        </div>

        <div class="col-sm-7 gap-2 text-nowrap d-flex flex-column justify-content-between ps-sm-4 pt-2 py-sm-2">
          <div class="d-flex align-items-center gap-3">
            <small>5 Звезд</small>
            <div class="progress w-100" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 61.50%" aria-valuenow="61.50"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">124</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>4 Звезд</small>
            <div class="progress w-100" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 24%" aria-valuenow="24"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">40</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>3 Звезд</small>
            <div class="progress w-100" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 12%" aria-valuenow="12"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">12</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>2 Звезд</small>
            <div class="progress w-100" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 7%" aria-valuenow="7"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">7</small>
          </div>
          <div class="d-flex align-items-center gap-3">
            <small>1 Звезд</small>
            <div class="progress w-100" style="height:10px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 2%" aria-valuenow="2"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">2</small>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row">
        <div class="col-sm-5">
          <div class="mb-5">
            <h4 class="mb-2 text-nowrap">Статистика отзывов</h4>
            <p class="mb-0"> <span class="me-2">12 Новых отзывов</span> <span class="badge bg-label-success">+8.4%</span>
            </p>
          </div>

          <div>
            <h5 class="mb-2 fw-normal">
              <span class="text-success me-1">87%</span>Положительных отзывов
            </h5>
            <small class="text-muted">Недельный отчет</small>
          </div>
        </div>
        <div class="col-sm-7 d-flex justify-content-sm-end align-items-end">
          <div id="reviewsChart"></div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- review List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-review table border-top dataTable no-footer dtr-column" id="DataTables_Table_0"
      aria-describedby="DataTables_Table_0_info" style="width: 1394px;">
      <thead>
        <tr>
          <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;"
            aria-label=""></th>
          <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1"
            style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
          <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 240px;" aria-label="Product: activate to sort column descending" aria-sort="ascending">Пост
          </th>
          <th class="text-nowrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 209px;" aria-label="Reviewer: activate to sort column ascending">Автор</th>
          <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 398px;" aria-label="Review">Отзыв</th>
          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 89px;" aria-label="Date: activate to sort column ascending">Дата</th>
          <th class="text-nowrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
            style="width: 75px;" aria-label="Status: activate to sort column ascending">Статус</th>
          <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65px;" aria-label="Actions"></th>
        </tr>
      </thead>
      <tbody>
        <tr class="odd">
          <td class="  control" tabindex="0" style="display: none;"></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center customer-name">
              <div class="avatar-wrapper">
                <div class="avatar me-2 rounded-2 bg-label-secondary"><img
                    src="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-9.png"
                    alt="Product-9" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column"><span class="fw-medium text-nowrap">Air Jordan</span><small
                  class="text-muted">Air Jordan is a line of basketball shoes produced by Nike</small></div>
            </div>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center customer-name">
              <div class="avatar-wrapper">
                <div class="avatar me-2"><img
                    src="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/img/avatars/5.png"
                    alt="Avatar" class="rounded-circle"></div>
              </div>
              <div class="d-flex flex-column"><a
                  href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span
                    class="fw-medium">Gisela Leppard</span></a><small
                  class="text-muted text-nowrap">gleppard8@yandex.ru</small></div>
            </div>
          </td>
          <td>
            <div>
              <div class="read-only-ratings ps-0 mb-2 jq-ry-container" readonly="readonly" style="width: 112px;">
                <div class="jq-ry-group-wrapper">
                  <div class="jq-ry-normal-group jq-ry-group"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-star-filled" width="20px" height="20px" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="gray">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg></div>
                  
                </div>
              </div>
              <p class="h6 mb-1 text-truncate">Ut mauris</p><small class="text-break pe-3">Fusce consequat. Nulla nisl.
                Nunc nisl.</small>
            </div>
          </td>
          <td><span class="text-nowrap">Apr 20, 2020</span></td>
          <td><span class="badge bg-label-success" text-capitalize="">Published</span></td>
          <td>
            <div class="text-xxl-center">
              <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a
                    href="javascript:;" class="dropdown-item">Edit</a><a href="javascript:;"
                    class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div><a href="javascript:;"
                    class="dropdown-item delete-record text-danger">Delete</a>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr class="even">
          <td class="  control" tabindex="0" style="display: none;"></td>
          <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
          <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center customer-name">
              <div class="avatar-wrapper">
                <div class="avatar me-2 rounded-2 bg-label-secondary"><img
                    src="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo/assets/img/ecommerce-images/product-13.png"
                    alt="Product-13" class="rounded-2"></div>
              </div>
              <div class="d-flex flex-column"><span class="fw-medium text-nowrap">Amazon Fire TV</span><small
                  class="text-muted">4K UHD smart TV, stream live TV without cable</small></div>
            </div>
          </td>
          <td>
            <div class="d-flex justify-content-start align-items-center customer-name">
              <div class="avatar-wrapper">
                <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">TV</span></div>
              </div>
              <div class="d-flex flex-column"><a
                  href="https://demos.pixinvent.com/vuexy-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span
                    class="fw-medium">Tracey Ventham</span></a><small
                  class="text-muted text-nowrap">tventhamc@thetimes.co.uk</small></div>
            </div>
          </td>
          <td>
            <div>
              <div class="read-only-ratings ps-0 mb-2 jq-ry-container" readonly="readonly" style="width: 112px;">
                <div class="jq-ry-group-wrapper">
                  <div class="jq-ry-normal-group jq-ry-group"><svg xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-star-filled" width="20px" height="20px" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="gray">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled"
                      width="20px" height="20px" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" fill="gray" style="margin-left: 3px;">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                        stroke-width="0"></path>
                    </svg></div>
                  
                </div>
              </div>
              <p class="h6 mb-1 text-truncate">At nunc commodo placerat praesent</p><small
                class="text-break pe-3">Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque
                libero, convallis eget, eleifend luctus, ultricies eu, nibh.</small>
            </div>
          </td>
          <td><span class="text-nowrap">Mar 17, 2021</span></td>
          <td><span class="badge bg-label-success" text-capitalize="">Published</span></td>
          <td>
            <div class="text-xxl-center">
              <div class="dropdown"><a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                  data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end"><a href="javascript:;" class="dropdown-item">Download</a><a
                    href="javascript:;" class="dropdown-item">Edit</a><a href="javascript:;"
                    class="dropdown-item">Duplicate</a>
                  <div class="dropdown-divider"></div><a href="javascript:;"
                    class="dropdown-item delete-record text-danger">Delete</a>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
