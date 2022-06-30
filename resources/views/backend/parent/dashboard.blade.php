@extends("backend.parent.layouts.master")

@section("content")
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

			<div class="container-fluid">
                <div class="row">
                    @yield('main_content')
			   </div>
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
