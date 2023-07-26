@extends('layout.main')
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 mb-3 mb-lg-0">

            </div>

            <div class="col-lg-10">
                <!-- Card -->
                <div class="card">
                    <!-- Body -->
            <form method="post" action="{{route('add_brand.post')}}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="addresszipCodeLabel" class="input-label">Tên thương hiệu <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="You can find your code in a postal address."></i></label>

            <input type="text" class="js-masked-input form-control" name="name" id="addresszipCodeLabel" placeholder="Thương hiệu ..." aria-label="Your zip code" data-hs-mask-options='{
                           "template": "AA0 0AA"
                         }'>
        </div>
        <!-- End Form Group -->

        <!-- Custom Checkbox -->
        <div class="custom-control custom-checkbox form-group">
            <input type="checkbox" value="1" name="active" class="custom-control-input" id="billingAddressCheckbox">
            <label class="custom-control-label" for="billingAddressCheckbox">Đã Hoạt Động</label>
        </div>
        <!-- End Custom Checkbox -->

        <div class="d-flex justify-content-end">

            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </div>
</form>
                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->
        <!-- End Row -->
    </div>
    <!-- End Content -->

    <script>
        // Xử lý khi người dùng nhấn vào checkbox
        document.getElementById('billingAddressCheckbox').addEventListener('change', function() {
            if (this.checked) {
                this.value = 1;
            } else {
                this.value = 0;
            }
        });
    </script>

@endsection
