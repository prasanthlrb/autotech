@extends('vendor.layouts')
@section('extra-css')
     <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/tables/datatable/datatables.min.css">
     <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/forms/select/select2.min.css">
@endsection
@section('body-section')

<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Review & Ratings</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">Review & Ratings
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice ID</th>
						                                <th>shop Name</th>
						                                <th>Customer Name</th>
						                                <th>Comments</th>
						                                <th>Reviews</th>
						                                <th>Date & Time</th>
						                                <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($review as $row)
                            <tr>
                            	<td>#{{$row->invoice_id}}</td>
                                <td>{{$row->shop_name}}</td>
                                <td>{{$row->customer_name}}</td>
                                <td>{{$row->comments}}</td>
                <td>
                    <div class="mb-1 font-small-2">
                      <i class="cursor-pointer bx bxs-star text-warning"></i>
                      <i class="cursor-pointer bx bxs-star text-warning"></i>
                      <i class="cursor-pointer bx bxs-star text-warning"></i>
                      <i class="cursor-pointer bx bxs-star text-warning"></i>
                      <i class="cursor-pointer bx bx-star text-muted"></i>
                    </div>
                </td>
                                <td>{{$row->created_at}}</td>
                <td><div class="dropdown">
                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                </span>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-125px, 19px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> Approved</a>
                  <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> Remove</a>
                </div>
              </div></td>
                    </tr>
                @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Invoice ID</th>
						                                <th>shop Name</th>
						                                <th>Customer Name</th>
						                                <th>Comments</th>
						                                <th>Reviews</th>
						                                <th>Date & Time</th>
						                                <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('extra-js')
    <script src="/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
                    <!-- BEGIN: Page Vendor JS-->
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="/app-assets/js/scripts/datatables/datatable.js"></script>

    <script src="/app-assets/js/scripts/forms/select/form-select2.js"></script>
    <script src="/app-assets/vendors/js/forms/select/select2.full.min.js"></script>

<script type="text/javascript">

$('.review').addClass('active');

</script>
@endsection