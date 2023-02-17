@extends('admin.admin_master')
@section('admin')
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
        </div>
    </div>
@endsection
