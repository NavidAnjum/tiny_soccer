@extends("backend.admin.layouts.master")
@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endpush
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <!-- start your content -->
            <div class="row page-titles mx-0">
                <div class="col-sm-12 p-md-0">
                    <div class="welcome-text">
                        <h4>Add Didiicker</h4>
                    </div>
                </div>
                <div class="col-sm-12 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">diddikickers</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">create</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Payments Queue</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md" id="datatable" >
                                        <thead>
                                        <tr>
                                            <th style="width:80px;"><strong>#ID</strong></th>
                                            <th><strong>Childs Name</strong></th>
                                            <th><strong>Parents Name</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Status</strong></th>
                                            <th><strong>Venue</strong></th>
                                            <th><strong>Class</strong></th>
                                            <th></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($child_details as $child)

                                            <tr>
                                                <td><strong>{{$child->id}}</strong></td>
                                                <td>{{$child->first_name." ".$child->last_name}}</td>

                                                <td>{{$child->parent_first_name." ".$child->parent_last_name}}</td>
                                                <td>{{$child->email}}</td>
                                                <td>
                                                    @if($child->status==="Active")
                                                        <span class="badge light badge-success">
                                                {{$child->status}}
                                            </span>
                                                    @elseif($child->status==="Waiting")
                                                        <span class="badge light badge-warning">
                                                {{$child->status}}
                                            </span>
                                                    @else
                                                        <span class="badge light badge-danger">
                                                {{$child->status}}
                                            </span>
                                                    @endif
                                                </td>


                                                <td>{{$child->venue}}</td>
                                                <td>{{$child->class}}</td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="/admin/diddikickers/{{$child->id}}">Show More</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- start your content -->
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script !src="">
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>


@endpush

