<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php include "includes/header-resources.php"; ?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar" oncontextmenu="return false">

    <!-- BEGIN: Header-->
    <?php include "includes/header-nav.php"; ?>
    <!-- END: Header-->
    <style>
        .app-content {
            padding: calc(2rem + 4.45rem + 1.3rem) 2rem 0 !important;
        }
    </style>
    <!-- BEGIN: Content-->
    <div class="app-content content chat-application">
        <div class="row match-height">


            <div class="col-lg-3 col-sm-6 col-12">
                <a href="new-mission">
                    <div class="card bg-primary text-white">
                        <div class="card-header flex-column align-items-start ">
                            <div class="avatar bg-light-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather='smile' class="font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="fw-bolder mt-1 text-warning">New Mission</h2>
                            <p class="card-text">Choose teams members and oga</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-3 col-sm-6 col-12">
                <a href="teams">
                    <div class="card">
                        <div class="card-header flex-column align-items-start ">
                            <div class="avatar bg-light-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="users" class="font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="fw-bolder mt-1">92.6k</h2>
                            <p class="card-text">Teams</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header flex-column align-items-start ">
                        <div class="avatar bg-light-warning p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="package" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="fw-bolder mt-1">38.4K</h2>
                        <p class="card-text">Missions</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header flex-column align-items-start ">
                        <div class="avatar bg-light-warning p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather="package" class="font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="fw-bolder mt-1">38.4K</h2>
                        <p class="card-text">Completed Missions</p>
                    </div>
                </div>
            </div>




        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ongoing Missions</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Mission Code</th>
                                    <th>Members</th>
                                    <th>Oga</th>
                                    <th>Date Started</th>
                                    <th class="cell-fit">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Adewale Idris</td>
                                    <td>1</td>
                                    <td>
                                        <a href="mission" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Completed Missions</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Mission Code</th>
                                    <th>Members</th>
                                    <th>Oga</th>
                                    <th>Date Started</th>
                                    <th class="cell-fit">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <a href="completed-mission" class="btn btn-primary btn-sm">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include "includes/footer.php"; ?>
    <!-- END: Footer-->

    <?php include "includes/footer-resources.php"; ?>
    <script src="../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script>
        $(function() {
            $('.datatable').DataTable();;
        })
    </script>
</body>
<!-- END: Body-->

</html>