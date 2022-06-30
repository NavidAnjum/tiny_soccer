@extends("backend.admin.layouts.master")

@section("content")
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

			<div class="container-fluid">
                <div class="row">
                    {{--  "Seperated Dashboard's main body.Will use dashboard as Master Template"--}}
                    @yield('main_content')
                </div>
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
