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
        <div class="row">

            <div class="col-md-12 col-12" id="member-table">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teams</h4>

                        <a href="new-team" class="btn btn-primary btn-sm">New Team</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="datatable">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Team Code</th>
                                    <th>Oga</th>
                                    <th>Soldiers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm delete">Delete</a>
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
            $('.datatable').DataTable();

            $('#close-mission').click(function(e) {
                if (confirm("Are you sure you want to perform this action? This will close the mission.") == false) {
                    e.preventDefault();
                }
            });
        })
    </script>

</body>
<!-- END: Body-->

</html>