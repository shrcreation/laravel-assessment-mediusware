@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content bg-dark">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                        @php
                            $id = Auth::user()->id;
                            $adminData = App\Models\User::find($id);
                        @endphp
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.profile') }}">{{ $adminData->username }}</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            {{-- finished page titile --}}
            <div class="row bg-white">
                <div class="col-12 d-flex justify-between">
                    <div class="col-6 mt-4">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Create Product </h4>

                                <form method="post" action="{{ route('store.product') }}" enctype="multipart/form-data">
                                    @csrf

                                    <input name="id" type="hidden" value="">
                                    {{-- {{ $aboutpage->id }} --}}

                                    <label class="col-sm-2 col-form-label" for="example-text-input">Product Name</label>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input class="form-control" id="example-text-input" name="title"
                                                type="text" value="" required placeholder="Product Name">
                                            {{-- {{ $aboutpage->title }} --}}
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <label class="col-sm-2 col-form-label" for="example-text-input">Product SKU </label>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input class="form-control" id="example-text-input" name="sku"
                                                type="text" value="" required placeholder="Product SKU">
                                            {{-- {{ $aboutpage->short_title }} --}}
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <label class="col-sm-2 col-form-label" for="example-text-input">Description
                                    </label>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="description" required placeholder="Description" required="" rows="5"></textarea>
                                            {{--  {{ $aboutpage->short_description }} --}}
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    {{-- <label class="col-sm-2 col-form-label" for="example-text-input">Image </label>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input class="form-control" id="image" name="image" type="file">
                                        </div>
                                    </div> --}}
                                    <!-- end row -->

                                    {{-- <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label" for="example-text-input"> </label>
                                        <div class="col-sm-10">
                                            <img class="avatar-lg rounded" id="showImage"
                                                src="{{ !empty($aboutpage->about_image) ? url($aboutpage->about_image) : url('upload/home_about/no_image.jpg') }}"
                                                alt="Card image cap">
                                        </div>
                                    </div> --}}
                                    <!-- end row -->
                                    <input class="btn btn-info waves-effect waves-light" type="submit" value="Add Product">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ms-2 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Variants</h4>
                                <form method="" action="" enctype="multipart/form-data">
                                    @csrf

                                    <input name="id" type="hidden" value="">
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Option</label>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <select class="form-control" id="" name="variant">
                                                <option selected>Color</option>
                                                <option>Size</option>
                                                <option>Style</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="example-text-input" name="variants_name"
                                                type="text" value="">
                                            {{-- {{ $aboutpage->title }} --}}
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <label class="col-sm-2 col-form-label" for="example-text-input">Option</label>
                                    <div class="row mb-3">
                                        <div class="col-sm-4">
                                            <select class="form-control" id="" name="variant">
                                                <option>Color</option>
                                                <option selected>Size</option>
                                                <option>Style</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="example-text-input" name="variants_name"
                                                type="text" value="">
                                            {{-- {{ $aboutpage->title }} --}}
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Add another option</button>
                                    <!-- end row -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#image').change(function(e) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#showImage').attr('src', e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });
            </script>
        @endsection
