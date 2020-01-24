@extends('layouts.master')
@section('title','Dashboard')
@section('page-header')
    <i class="fas fa-desktop"></i> Dashboard
@stop
@section('css')

    <link href="/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

@stop


@section('content')


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-sm btn-dark float-right" style="margin-bottom: 1rem;"><i class="fas fa-plus-square"></i> Add New</a>
                    <h4 class="card-title">@yield('page-header')</h4>


                    <table class="table table-bordered">
                        <tr>
                            <th>Company</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Employee ID</th>
                            <th>Date</th>
                            <th>Month</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control form-control-sm" data-toggle="select2" style="width: 180px;">
                                    <option>- Select -</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control form-control-sm" data-toggle="select2" style="width: 180px">
                                    <option>- Select -</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control form-control-sm" data-toggle="select2" style="width: 180px">
                                    <option>- Select -</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North CarolinaNorth CarolinaNorth CarolinaNorth Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </select>
                            </td>
                            <td>
                                <input class="form-control form-control-sm" type="text" placeholder="">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="datepicker">
                            </td>
                            <td>
                                <input type="text" class="form-control form-control-sm" id="monthpicker">
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-search"></i> Search</button>
                                    <button class="btn btn-sm btn-dark"><i class="feather-refresh-cw"></i> Refresh</button>
                                </div>
                            </td>
                        </tr>
                    </table>


                    <div class="border" style="overflow-y: scroll;height: 450px;width: 100%;" id="style-1">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                                <th>Username</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                    <nav aria-label="Page navigation example" class="mt-4">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link waves-effect" href="javascript: void(0);" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link waves-effect" href="javascript: void(0);">1</a></li>
                            <li class="page-item active"><a class="page-link waves-effect" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link waves-effect" href="javascript: void(0);">3</a></li>
                            <li class="page-item">
                                <a class="page-link waves-effect" href="javascript: void(0);">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <!-- end card-body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

    </div>


@endsection

@section('js')

    <script src="/plugins/autonumeric/autoNumeric-min.js"></script>
    <script src="/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="/plugins/moment/moment.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/plugins/select2/select2.min.js"></script>
    <script src="/plugins/switchery/switchery.min.js"></script>
    <script src="/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>


    <script type="text/javascript">
        $('[data-toggle="select2"]').select2();

        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });

        $('#monthpicker').datepicker({
            format: "yyyy-mm",
            viewMode: "months",
            minViewMode: "months",
            autoclose: true,
        });
    </script>
@stop
