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

            <div class="col-md-8 m-auto col-12" id="member-table">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Oga</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Agent Code</label>
                                <input type="text" name="agent-code" id="" class="form-control" />
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Agent Name</label>
                                <input type="text" name="fullname" id="" class="form-control" />
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Profile Picture</label>
                                <input type="file" name="team-member" id="" class="form-control" />
                            </div>
                            <div class="form-group mt-2 text-center">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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


</body>
<!-- END: Body-->

</html>