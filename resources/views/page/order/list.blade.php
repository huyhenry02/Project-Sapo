@extends('layout.main')
@section('content')

    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center mb-3">
                    <div class="col-sm">
                        <h1 class="page-header-title">Đơn hàng <span class="badge badge-soft-dark ml-2">106,905</span></h1>

                        <div class="mt-2">
                            <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#exportOrdersModal">
                                <i class="tio-download-to mr-1"></i> Xuất
                            </a>

                            <!-- Unfold -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker text-body" href="javascript:;" data-hs-unfold-options='{
                       "target": "#moreOptionsDropdown",
                       "type": "css-animation"
                     }'>
                                    Thêm lựa chọn <i class="tio-chevron-down"></i>
                                </a>

                                <div id="moreOptionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                                    <a class="dropdown-item" href="{{route('show_add_order.index')}}">
                                        <i class="tio-folder-add dropdown-item-icon"></i> Đơn hàng mới
                                    </a>

                                </div>
                            </div>
                            <!-- End Unfold -->
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                <!-- Nav Scroller -->
                <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-left"></i>
              </a>
            </span>

                    <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="tio-chevron-right"></i>
              </a>
            </span>

                    <!-- Nav -->
                    <ul class="nav nav-tabs page-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Tất cả đơn hàng</a>
                        </li>

                    </ul>
                    <!-- End Nav -->
                </div>
                <!-- End Nav Scroller -->
            </div>
            <!-- End Page Header -->

            <!-- Card -->
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <form>
                                <!-- Search -->
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tio-search"></i>
                                        </div>
                                    </div>
                                    <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm đơn hàng ..." aria-label="Search orders">
                                </div>
                                <!-- End Search -->
                            </form>
                        </div>

                        <div class="col-lg-6">
                            <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
                                <!-- Datatable Info -->
                                <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
                                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                                        <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                                            <i class="tio-delete-outlined"></i> Delete
                                        </a>
                                    </div>
                                </div>
                                <!-- End Datatable Info -->

                                <!-- Unfold -->
                                <div class="hs-unfold mr-2">
                                    <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                                        <i class="tio-download-to mr-1"></i> Export
                                    </a>

                                    <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                                        <span class="dropdown-header">Options</span>
                                        <a id="export-copy" class="dropdown-item" href="javascript:;">
                                            <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\illustrations\copy.svg" alt="Image Description">
                                            Copy
                                        </a>
                                        <a id="export-print" class="dropdown-item" href="javascript:;">
                                            <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\illustrations\print.svg" alt="Image Description">
                                            Print
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <span class="dropdown-header">Download options</span>
                                        <a id="export-excel" class="dropdown-item" href="javascript:;">
                                            <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\brands\excel.svg" alt="Image Description">
                                            Excel
                                        </a>
                                        <a id="export-csv" class="dropdown-item" href="javascript:;">
                                            <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\components\placeholder-csv-format.svg" alt="Image Description">
                                            .CSV
                                        </a>
                                        <a id="export-pdf" class="dropdown-item" href="javascript:;">
                                            <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\brands\pdf.svg" alt="Image Description">
                                            PDF
                                        </a>
                                    </div>
                                </div>
                                <!-- End Unfold -->

                                <!-- Unfold -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#showHideDropdown",
                         "type": "css-animation"
                       }'>
                                        <i class="tio-table mr-1"></i> Columns <span class="badge badge-soft-dark rounded-circle ml-1">7</span>
                                    </a>

                                    <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Order</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_order">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_order" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Date</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_date">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_date" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Customer</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_customer">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_customer" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Payment status</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_payment_status">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_payment_status" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Fulfillment status</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_fulfillment_status">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_fulfillment_status">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Payment method</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_payment_method">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_payment_method" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Total</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_total">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_total" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="mr-2">Actions</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_actions">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_actions" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Unfold -->
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Header -->

                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 12,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label" for="datatableCheckAll"></label>
                                </div>
                            </th>
                            <th class="table-column-pl-0">Mã hóa đơn số</th>
                            <th>Ngày tháng đặt hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Trạng thái thanh toán</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordersCheck1">
                                    <label class="custom-control-label" for="ordersCheck1"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a href="ecommerce-order-details.html">#35463</a>
                            </td>
                            <td>Aug 17, 2020, 5:48 (ET)</td>
                            <td>
                                <a class="text-body" href="ecommerce-customer-details.html">Jase Marley</a>
                            </td>
                            <td>
                    <span class="badge badge-soft-success">
                      <span class="legend-indicator bg-success"></span>Paid
                    </span>
                            </td>
                            <td>4</td>
                            <td>$256.39</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-sm btn-white" href="ecommerce-order-details.html">
                                        <i class="tio-visible-outlined"></i>
                                    </a>

                                    <!-- Unfold -->
                                    <div class="hs-unfold btn-group">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty" href="javascript:;" data-hs-unfold-options='{
                             "target": "#ordersExportDropdown1",
                             "type": "css-animation",
                             "smartPositionOffEl": "#datatable"
                           }'></a>

                                        <div id="ordersExportDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                                            <span class="dropdown-header">Options</span>
                                            <a class="js-export-copy dropdown-item" href="javascript:;">
                                                <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\illustrations\copy.svg" alt="Image Description">
                                                Copy
                                            </a>
                                            <a class="js-export-print dropdown-item" href="javascript:;">
                                                <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\illustrations\print.svg" alt="Image Description">
                                                Print
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <span class="dropdown-header">Download options</span>
                                            <a class="js-export-excel dropdown-item" href="javascript:;">
                                                <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\brands\excel.svg" alt="Image Description">
                                                Excel
                                            </a>
                                            <a class="js-export-csv dropdown-item" href="javascript:;">
                                                <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\components\placeholder-csv-format.svg" alt="Image Description">
                                                .CSV
                                            </a>
                                            <a class="js-export-pdf dropdown-item" href="javascript:;">
                                                <img class="avatar avatar-xss avatar-4by3 mr-2" src="\frontend\assets\svg\brands\pdf.svg" alt="Image Description">
                                                PDF
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i class="tio-delete-outlined dropdown-item-icon"></i> Xóa
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Unfold -->
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!-- End Table -->

                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                        <div class="col-sm mb-2 mb-sm-0">
                            <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                                <span class="mr-2">Showing:</span>

                                <!-- Select -->
                                <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                                    <option value="12" selected="">12</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>
                                    <option value="18">18</option>
                                </select>
                                <!-- End Select -->

                                <span class="text-secondary mr-2">of</span>

                                <!-- Pagination Quantity -->
                                <span id="datatableWithPaginationInfoTotalQty"></span>
                            </div>
                        </div>

                        <div class="col-sm-auto">
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                <!-- Pagination -->
                                <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Card -->
        </div>
        <!-- End Content -->
    </main>
@endsection
