@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-light">
                        <div class="card-body">

                            <h4 class="card-title">Add Education</h4>

                            <form method="post" action="{{ route('store.education') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="title" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Subject</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="subject" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Institute</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="institute" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Result</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="result" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Passing Year</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="passing_year"
                                            type="text" value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Duration</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="duration" type="text"
                                            value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="">Achievement</label>
                                    <div class="col-sm-10">
                                        <input class="form-control bg-light" id="" name="achievement"
                                            type="text" value="">
                                    </div>
                                </div>
                                <!-- end row -->
                                <input class="btn btn-info waves-effect waves-light" type="submit" value="Add Education">
                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

        </div>
    </div>
@endsection
