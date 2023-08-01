@extends('layout.main')
@section('content')
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center mb-3">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Customers <span class="badge badge-soft-dark ml-2">97,524</span></h1>

                        <div class="mt-2">
                            <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#importCustomersModal">
                                <i class="tio-publish mr-1"></i> Import customers
                            </a>
                            <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#exportCustomersModal">
                                <i class="tio-download-to mr-1"></i> Export
                            </a>

                            <!-- Unfold -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker text-body" href="javascript:;" data-hs-unfold-options='{
                       "target": "#moreOptionsDropdown",
                       "type": "css-animation"
                     }'>
                                    More options <i class="tio-chevron-down"></i>
                                </a>

                                <div id="moreOptionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                                    <a class="dropdown-item" href="#">
                                        <i class="tio-copy dropdown-item-icon"></i> Manage duplicates
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="tio-edit dropdown-item-icon"></i> Edit users
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="tio-restore dropdown-item-icon"></i> Restore clients
                                    </a>
                                </div>
                            </div>
                            <!-- End Unfold -->
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="ecommerce-add-customers.html">Add customers</a>
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
                            <a class="nav-link active" href="#">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Returning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Abandoned checkouts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Email subscribers</a>
                        </li>
                    </ul>
                    <!-- End Nav -->
                </div>
                <!-- End Nav Scroller -->
            </div>
            <!-- End Page Header -->

            <!-- Card -->
            <div class="card">
                <!-- Body -->
                <div class="card-body">
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
                                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders" aria-label="Search orders">
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
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#showHideDropdown",
                         "type": "css-animation"
                       }'>
                                        <i class="tio-table mr-1"></i> Columns <span class="badge badge-soft-dark rounded-circle ml-1">5</span>
                                    </a>

                                    <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                                        <div class="card card-sm">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Name</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_name">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_name" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">E-mail</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_email">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_email" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Phone</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_phone">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_phone">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Country</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_country">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_country" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Account status</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_account_status">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_account_status">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Orders</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_orders">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_orders" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="mr-2">Total spent</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_total_spent">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_total_spent" checked="">
                                                        <span class="toggle-switch-label">
                                <span class="toggle-switch-indicator"></span>
                              </span>
                                                    </label>
                                                    <!-- End Checkbox Switch -->
                                                </div>

                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="mr-2">Last activity</span>

                                                    <!-- Checkbox Switch -->
                                                    <label class="toggle-switch toggle-switch-sm" for="toggleColumn_last_activity">
                                                        <input type="checkbox" class="toggle-switch-input" id="toggleColumn_last_activity">
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
                <!-- End Body -->

                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
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
                     "pageLength": 15,
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
                            <th class="table-column-pl-0">Name</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Country</th>
                            <th>Account status</th>
                            <th>Orders</th>
                            <th>Total spent</th>
                            <th>Last activity</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                                    <label class="custom-control-label" for="usersDataCheck1"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img10.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>amanda@example.com</td>
                            <td>+1-202-555-0140</td>
                            <td>United Kingdom <span class="text-hide">Code: GB</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>3</td>
                            <td>$3,511.01</td>
                            <td>Aug 17, 2020, 5:48 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                                    <label class="custom-control-label" for="usersDataCheck2"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-primary avatar-circle">
                                        <span class="avatar-initials">A</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Anne Richard</span>
                                    </div>
                                </a>
                            </td>
                            <td>anne@example.com</td>
                            <td>+1-752-235-2353</td>
                            <td>United States <span class="text-hide">Code: US</span></td>
                            <td>
                                <span class="legend-indicator bg-danger"></span>Disabled
                            </td>
                            <td>1</td>
                            <td>$235.00</td>
                            <td>Aug 17, 2020, 2:01 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck3">
                                    <label class="custom-control-label" for="usersDataCheck3"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img3.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">David Harrison</span>
                                    </div>
                                </a>
                            </td>
                            <td>david@example.com</td>
                            <td>+1-235-364-2611</td>
                            <td>United States <span class="text-hide">Code: US</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>53 <span class="badge badge-soft-dark ml-1">+3 today</span></td>
                            <td>$346,410.12</td>
                            <td>Aug 17, 2020, 1:55 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck4">
                                    <label class="custom-control-label" for="usersDataCheck4"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img5.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Finch Hoot</span>
                                    </div>
                                </a>
                            </td>
                            <td>finch@example.com</td>
                            <td>+1-743-632-9574</td>
                            <td>Argentina <span class="text-hide">Code: AR</span></td>
                            <td>
                                <span class="legend-indicator bg-danger"></span>Disabled
                            </td>
                            <td>12 <span class="badge badge-soft-dark ml-1">+1 today</span></td>
                            <td>$1,350.04</td>
                            <td>Aug 17, 2020, 1:54 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck5">
                                    <label class="custom-control-label" for="usersDataCheck5"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-dark avatar-circle">
                                        <span class="avatar-initials">B</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Bob Dean</span>
                                    </div>
                                </a>
                            </td>
                            <td>bob@example.com</td>
                            <td>+1-854-235-9755</td>
                            <td>Austria <span class="text-hide">Code: AT</span></td>
                            <td>
                                <span class="legend-indicator bg-danger"></span>Disabled
                            </td>
                            <td>8</td>
                            <td>$912.13</td>
                            <td>Aug 17, 2020, 1:04 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck6">
                                    <label class="custom-control-label" for="usersDataCheck6"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img9.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>ella@example.com</td>
                            <td>+1-846-157-2423</td>
                            <td>United Kingdom <span class="text-hide">Code: GB</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>5</td>
                            <td>$451.66</td>
                            <td>Aug 17, 2020, 1:01 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck7">
                                    <label class="custom-control-label" for="usersDataCheck7"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-info avatar-circle">
                                        <span class="avatar-initials">L</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Lori Hunter</span>
                                    </div>
                                </a>
                            </td>
                            <td>hunter@example.com</td>
                            <td>+1-844-235-4378</td>
                            <td>Estonia <span class="text-hide">Code: EE</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>11 <span class="badge badge-soft-dark ml-1">+4 today</span></td>
                            <td>$3,582.46</td>
                            <td>Aug 17, 2020, 12:56 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck16">
                                    <label class="custom-control-label" for="usersDataCheck16"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-primary avatar-circle">
                                        <span class="avatar-initials">M</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Mark Colbert</span>
                                    </div>
                                </a>
                            </td>
                            <td>mark@example.com</td>
                            <td>+1-235-235-7482</td>
                            <td>Canada <span class="text-hide">Code: CA</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>4</td>
                            <td>$481.00</td>
                            <td>Aug 17, 2020, 12:54 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck9">
                                    <label class="custom-control-label" for="usersDataCheck9"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img6.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Costa Quinn</span>
                                    </div>
                                </a>
                            </td>
                            <td>costa@example.com</td>
                            <td>+1-543-346-6343</td>
                            <td>France <span class="text-hide">Code: FR</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>9</td>
                            <td>$2,591.00</td>
                            <td>Aug 17, 2020, 12:48 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck10">
                                    <label class="custom-control-label" for="usersDataCheck10"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-danger avatar-circle">
                                        <span class="avatar-initials">R</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Rachel Doe <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>rachel@example.com</td>
                            <td>+1-232-643-3643</td>
                            <td>United States <span class="text-hide">Code: US</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>21</td>
                            <td>$5,219.18</td>
                            <td>Aug 17, 2020, 12:41 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck11">
                                    <label class="custom-control-label" for="usersDataCheck11"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img8.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Linda Bates</span>
                                    </div>
                                </a>
                            </td>
                            <td>linda@example.com</td>
                            <td>+1-123-523-5433</td>
                            <td>United Kingdom <span class="text-hide">Code: UK</span></td>
                            <td>
                                <span class="legend-indicator bg-danger"></span>Disabled
                            </td>
                            <td>32 <span class="badge badge-soft-dark ml-1">+1 today</span></td>
                            <td>$8,281.99</td>
                            <td>Aug 17, 2020, 12:36 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck12">
                                    <label class="custom-control-label" for="usersDataCheck12"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-info avatar-circle">
                                        <span class="avatar-initials">B</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Brian Halligan</span>
                                    </div>
                                </a>
                            </td>
                            <td>brian@example.com</td>
                            <td>+1-141-463-1512</td>
                            <td>France <span class="text-hide">Code: FR</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>1</td>
                            <td>$100.00</td>
                            <td>Aug 17, 2020, 12:25 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck13">
                                    <label class="custom-control-label" for="usersDataCheck13"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-dark avatar-circle">
                                        <span class="avatar-initials">C</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Chris Mathew</span>
                                    </div>
                                </a>
                            </td>
                            <td>chris@example.com</td>
                            <td>+1-253-463-1242</td>
                            <td>Switzerland <span class="text-hide">Code: CH</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>1</td>
                            <td>$26.00</td>
                            <td>Aug 16, 2020, 4:31 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck14">
                                    <label class="custom-control-label" for="usersDataCheck14"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img7.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Clarice Boone <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>clarice@example.com</td>
                            <td>+1-532-325-3253</td>
                            <td>United Kingdom <span class="text-hide">Code: UK</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>2</td>
                            <td>$274.28</td>
                            <td>Aug 16, 2020, 3:26 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck15">
                                    <label class="custom-control-label" for="usersDataCheck15"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-dark avatar-circle">
                                        <span class="avatar-initials">L</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Lewis Clarke</span>
                                    </div>
                                </a>
                            </td>
                            <td>lewis@example.com</td>
                            <td>+1-235-235-2355</td>
                            <td>Switzerland <span class="text-hide">Code: CH</span></td>
                            <td>
                                <span class="legend-indicator bg-danger"></span>Disabled
                            </td>
                            <td>4</td>
                            <td>$999.00</td>
                            <td>Aug 16, 2020, 2:54 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck8">
                                    <label class="custom-control-label" for="usersDataCheck8"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img4.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Sam Kart</span>
                                    </div>
                                </a>
                            </td>
                            <td>sam@example.com</td>
                            <td>+1-457-745-7555</td>
                            <td>Canada <span class="text-hide">Code: CA</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>62 <span class="badge badge-soft-dark ml-1">+9 today</span></td>
                            <td>$9,281.58</td>
                            <td>Aug 16, 2020, 2:48 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck17">
                                    <label class="custom-control-label" for="usersDataCheck17"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-danger avatar-circle">
                                        <span class="avatar-initials">J</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Johnny Appleseed</span>
                                    </div>
                                </a>
                            </td>
                            <td>johnny@example.com</td>
                            <td>+1-457-734-4544</td>
                            <td>United States <span class="text-hide">Code: US</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>30</td>
                            <td>$23,291.37</td>
                            <td>Aug 16, 2020, 2:40 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck18">
                                    <label class="custom-control-label" for="usersDataCheck18"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-danger avatar-circle">
                                        <span class="avatar-initials">P</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Phileas Fogg</span>
                                    </div>
                                </a>
                            </td>
                            <td>phileas@example.com</td>
                            <td>+1-065-084-8658</td>
                            <td>Spain <span class="text-hide">Code: ES</span></td>
                            <td>
                                <span class="legend-indicator bg-danger"></span>Disabled
                            </td>
                            <td>10</td>
                            <td>$82.39</td>
                            <td>Aug 16, 2020, 1:59 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck19">
                                    <label class="custom-control-label" for="usersDataCheck19"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="/frontend/assets\img\160x160\img6.jpg" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Mark Williams <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>mark@example.com</td>
                            <td>+1-340-055-4733</td>
                            <td>United Kingdom <span class="text-hide">Code: GB</span></td>
                            <td>
                                <span class="legend-indicator bg-danger"></span>Disabled
                            </td>
                            <td>7</td>
                            <td>$343.93</td>
                            <td>Aug 16, 2020, 1:55 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck20">
                                    <label class="custom-control-label" for="usersDataCheck20"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-dark avatar-circle">
                                        <span class="avatar-initials">T</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Timothy Silva</span>
                                    </div>
                                </a>
                            </td>
                            <td>timothy@example.com</td>
                            <td>+1-083-642-4673</td>
                            <td>Italy <span class="text-hide">Code: IT</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>9</td>
                            <td>$2,238.29</td>
                            <td>Aug 16, 2020, 1:15 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck21">
                                    <label class="custom-control-label" for="usersDataCheck21"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-dark avatar-circle">
                                        <span class="avatar-initials">G</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Gary Bishop <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                                    </div>
                                </a>
                            </td>
                            <td>gary@example.com</td>
                            <td>+1-325-547-5683</td>
                            <td>Latvia <span class="text-hide">Code: LV</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>6 <span class="badge badge-soft-dark ml-1">+1 today</span></td>
                            <td>$2,120.29</td>
                            <td>Aug 16, 2020, 1:15 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck22">
                                    <label class="custom-control-label" for="usersDataCheck22"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-dark avatar-circle">
                                        <span class="avatar-initials">Y</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Yorker Scogings</span>
                                    </div>
                                </a>
                            </td>
                            <td>yorker@example.com</td>
                            <td>+1-954-236-3235</td>
                            <td>Norway <span class="text-hide">Code: NO</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>3</td>
                            <td>$882.00</td>
                            <td>Aug 16, 2020, 1:15 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck23">
                                    <label class="custom-control-label" for="usersDataCheck23"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-info avatar-circle">
                                        <span class="avatar-initials">F</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Frank Phillips</span>
                                    </div>
                                </a>
                            </td>
                            <td>frank@example.com</td>
                            <td>+1-253-574-3422</td>
                            <td>Norway <span class="text-hide">Code: NO</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>1</td>
                            <td>$92.00</td>
                            <td>Aug 16, 2020, 1:15 (ET)</td>
                        </tr>

                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck24">
                                    <label class="custom-control-label" for="usersDataCheck24"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a class="d-flex align-items-center" href="ecommerce-customer-details.html">
                                    <div class="avatar avatar-soft-primary avatar-circle">
                                        <span class="avatar-initials">E</span>
                                    </div>
                                    <div class="ml-3">
                                        <span class="h5 text-hover-primary">Elizabeth Carter</span>
                                    </div>
                                </a>
                            </td>
                            <td>eliz@example.com</td>
                            <td>+1-800-724-3303</td>
                            <td>United States <span class="text-hide">Code: UK</span></td>
                            <td>
                                <span class="legend-indicator bg-success"></span>Active
                            </td>
                            <td>2</td>
                            <td>$50.00</td>
                            <td>Aug 16, 2020, 1:15 (ET)</td>
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
                                    <option value="10">10</option>
                                    <option value="15" selected="">15</option>
                                    <option value="20">20</option>
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

        <!-- Footer -->

        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
                </div>
                <div class="col-auto">
                    <div class="d-flex justify-content-end">
                        <!-- List Dot -->
                        <ul class="list-inline list-separator">
                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">FAQ</a>
                            </li>

                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">License</a>
                            </li>

                            <li class="list-inline-item">
                                <!-- Keyboard Shortcuts Toggle -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                                        <i class="tio-command-key"></i>
                                    </a>
                                </div>
                                <!-- End Keyboard Shortcuts Toggle -->
                            </li>
                        </ul>
                        <!-- End List Dot -->
                    </div>
                </div>
            </div>
        </div>



        <!-- End Footer -->
    </main>
@endsection
