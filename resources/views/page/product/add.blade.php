@extends('layout.main')
@section('content')
    <script src="{{ asset('node_modules/tinymce/tinymce.js/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#description', // Chọn trường textarea có id="description"
            height: 300, // Chiều cao của trình soạn thảo
            plugins: 'lists', // Sử dụng plugin 'lists' để hỗ trợ danh sách đánh số và đấu dòng
            toolbar: 'undo redo | formatselect | bold italic underline | bullist numlist | alignleft aligncenter alignright alignjustify | outdent indent',
            // Các nút trong thanh công cụ, bao gồm danh sách đánh số và đấu dòng
        });
    </script>
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">

<form action="{{route('add_product.post')}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-no-gutter">
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-products.html">Danh sách sản phẩm</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
                            </ol>
                        </nav>

                        <h1 class="page-header-title">Thêm sản phẩm</h1>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->

            <div class="row">
                <div class="col-lg-8">
                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Thông tin sản phẩm</h4>
                        </div>
                        <!-- End Header -->
                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="productNameLabel" class="input-label">Tên sản phẩm <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Products are the goods or services you sell."></i></label>
                                <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="Sản phẩm ..." aria-label="Shirt, t-shirts, etc.">
                            </div>
                            <!-- End Form Group -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="SKULabel" class="input-label">Mã sản phẩm</label>

                                        <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="Mã sản phẩm ..." aria-label="eg. 348121032">
                                    </div>
                                    <!-- End Form Group -->
                                </div>

                            </div>
                            <!-- End Row -->

                            <label class="input-label">Mô tả <span class="input-label-secondary">(Không bắt buộc)</span></label>

                            <!-- Quill -->
                            <div class="quill-custom">

                                <textarea class="form-control" id="description" name="description" rows="8" placeholder="Mô tả sản phẩm ..."></textarea>
                            </div>

                            <!-- End Quill -->
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Hình ảnh</h4>
                        </div>
                        <!-- End Header -->
                        <!-- Body -->
                        <div class="card-body">
                            <!-- Dropzone -->
                            <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">


                                <div class="form-group">
                                    <label for="image">Chọn ảnh</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">File</label>
                                    </div>
                                </div>
                            </div>
                            <!-- End Dropzone -->
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Thuộc tính</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <h6 class="text-cap">Lựa chọn</h6>

                            <div class="js-add-field" data-hs-add-field-options='{
                      "template": "#addAnotherOptionFieldTemplate",
                      "container": "#addAnotherOptionFieldContainer",
                      "defaultCreated": 0
                    }'>
                                <!-- Form Group -->
                                <div class="form-group">
                                    <label for="colorLabel" class="input-label">Màu sắc</label>

                                    <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="colorLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Chọn màu"
                          }'>
                                        <option label="empty"></option>
                                        @foreach($color as $val)
                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sizeLabel" class="input-label">Dung Tích</label>
                                    <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="sizeLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Chọn dung tích"
                          }'>
                                        <option label="empty"></option>
                                        @foreach($size as $key=>$val)
                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ramLabel" class="input-label">Ram</label>

                                    <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="ramLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Chọn Ram"
                          }'>
                                        <option label="empty"></option>
                                        @foreach($ram as $key=>$val)
                                            <option value="{{$val->id}}">{{$val->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- End Form Group -->

                                <!-- Container For Input Field -->
                                <div id="addAnotherOptionFieldContainer"></div>


                            </div>

                            <!-- Add Another Option Input Field -->

                            <!-- End Add Another Option Input Field -->
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->
                </div>

                <div class="col-lg-4">
                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Giá sản phẩm</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="priceNameLabel" class="input-label">Giá</label>

                                <div class="input-group">
                                    <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="VND" aria-label="0.00">

                                    <div class="input-group-append">
                                        <!-- Select -->

                                        <!-- End Select -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->
                            <hr class="my-4">

                            <!-- Toggle Switch -->
                            <label class="row toggle-switch" for="availabilitySwitch1">
                  <span class="col-8 col-sm-9 toggle-switch-content">
                    <span class="text-dark">Availability</span>
                  </span>
                                <span class="col-4 col-sm-3">
                    <input type="checkbox" class="toggle-switch-input" id="availabilitySwitch1">
                    <span class="toggle-switch-label ml-auto">
                      <span class="toggle-switch-indicator"></span>
                    </span>
                  </span>
                            </label>
                            <!-- End Toggle Switch -->
                        </div>
                        <!-- Body -->
                    </div>
                    <!-- End Card -->
                    <!-- Card -->
                    <div class="card">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title"> Tổ chức</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="vendorLabel" class="input-label">Nhà cung cấp</label>

                                <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="vendorLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Chọn nhà cung cấp"
                          }'>
                                    <option label="empty"></option>
                                    @foreach($vendor as $key=>$val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="categoryLabel" class="input-label">Danh mục sản phẩm</label>

                                <!-- Select -->
                                <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="categoryLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Chọn danh mục"
                          }'>
                                    <option label="empty"></option>
                                    @foreach($category as $key=>$val)
                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <!-- End Select -->
                            </div>
                            <div class="form-group">
                                <label for="brandLabel" class="input-label">Thương hiệu</label>

                                <!-- Select -->
                                <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="brandLabel" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Chọn thương hiệu"
                          }'>
                                    <option label="empty"></option>
                                    @foreach($brand as $key=>$val)
                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                                <!-- End Select -->
                            </div>
                            <!-- Form Group -->
                        </div>
                        <!-- End Body -->
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Row -->

            <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem;">
                <!-- Card -->
                <div class="card card-sm bg-dark border-dark mx-2">
                    <div class="card-body">
                        <div class="row justify-content-center justify-content-sm-between">
                            <div class="col">
                                <button type="button" class="btn btn-ghost-danger">Xóa</button>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
    <script src="{{asset('js/add_product/add.js')}}"></script>
</form>
        </div>
    </main>

@endsection
