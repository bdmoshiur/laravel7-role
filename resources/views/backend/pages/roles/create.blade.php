@extends('backend.layouts.master')

@section('title')
    Role Create - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection

@section('admin-content')

         <!-- page title area start -->
         <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Role Create</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li><span>All Roles</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                   @include('backend.layouts.partials.logout')
                </div>
            </div>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">
                <!-- data table start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title"> Create New Role</h4>
                            @include('backend.layouts.partials.messages')
                            
                            <form action="{{ route('roles.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Role Name</label>
                                    <input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp" placeholder="Enter Role Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Permissions</label>
                                    @foreach ($permissions as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="parmissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                            <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- data table end -->
            </div>
        </div>

@endsection

@section('scripts')
    <script>
    </script>
@endsection
