@extends("backend.admin.layouts.master")
@section("content")
    @include('sweetalert::alert')

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
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add details of Diddikikers</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ url('admin/diddikickers') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="first_name" id="first_name" class="form-control input-default " placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" id="last_name"  class="form-control input-default " placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="parents_first_name" id="parents_first_name"  class="form-control input-default " placeholder="Parents First Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="parents_last_name" id="parents_last_name"  class="form-control input-default " placeholder="Parents Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input type="date" class="form-control input-default" id="date_of_birth" name="date_of_birth" placeholder="Childs D.O.B">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="telephone" id="telephone" class="form-control input-default " placeholder="Telephone">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email"  class="form-control input-default " placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address" id="address"  class="form-control input-default" placeholder="Address">
                                        </div>

                                        <div class="form-group">
                                            <div class="dropdown bootstrap-select form-control">

                                                <select name="venue" id="venue" tabindex="-98" class="form-control @error('venue') is-invalid @enderror" required value="{{ old('venue') }}">
                                                    <option value="">Select</option>
                                                    @foreach(config("constants.VENUE") as $key=>$venue)
                                                        <option value="{{$key}}">{{$venue}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="dropdown bootstrap-select form-control">

                                                <select name="class_name" id="class_name" tabindex="-98" class="form-control @error('class_name') is-invalid @enderror" required value="{{ old('venue') }}">
                                                    <option value="">Select</option>
                                                    @foreach(config("constants.CLASS") as $key=>$class)
                                                        <option value="{{$key}}">{{$class}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text"  name="facebook_name" id="facebook_name"  class="form-control input-default " placeholder="Facebook Name">
                                        </div>


                                        <div class="form-group">
                                            <input type="text" name="allergies" id="allergies" class="form-control input-default " placeholder="Allergies">
                                        </div>

                                        <div class="form-group">
                                            <div class="dropdown bootstrap-select form-control ">

                                                <select name="status" id="status" tabindex="-98" class="form-control @error('status') is-invalid @enderror" required value="{{ old('venue') }}">
                                                    <option value="">Select</option>
                                                    @foreach(config("constants.STUDENT_STATUS") as $key=>$status)
                                                        <option value="{{$key}}">{{$status}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="dropdown bootstrap-select form-control ">

                                                <select name="how_enquired" id="how_enquired" tabindex="-98" class="form-control @error('how_enquired') is-invalid @enderror" required value="{{ old('venue') }}">
                                                    <option value="">Select</option>
                                                    @foreach(config("constants.ENQUIRED") as $key=>$enquired)
                                                        <option value="{{$key}}">{{$enquired}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_enquired">Date Enquired</label>
                                            <input type="date" class="form-control input-default" name="date_enquired" id="date_enquired" placeholder="Childs D.O.B">
                                        </div>

                                        <div class="form-group">
                                            <div class="dropdown bootstrap-select form-control">

                                                <select name="heard_about_us" id="heard_about_us" tabindex="-98" class="form-control @error('heard_about_us') is-invalid @enderror" required value="{{ old('venue') }}">
                                                    <option value="">Select</option>
                                                    @foreach(config("constants.HARED") as $key=>$heard)
                                                        <option value="{{$key}}">{{$heard}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <input type="text" name="direct_debit_day" id="direct_debit_day" class="form-control input-default" placeholder="Direct Debit Day">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="note" id="note" rows="4" id="note" placeholder="note"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="add_diddikicker()">Add</button>

                                    </form>
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
      <!-- start of validation & sending to Controller -->

        <script src="{{ asset('assets/backend/js/custom/add-diddicker.js')}}"></script>
      <!-- end of validation & sending to Controller -->

@endpush
