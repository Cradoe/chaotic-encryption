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
                        <h4 class="card-title">New Mission</h4>

                        <a href="new-team" class="btn btn-primary btn-sm">Register New Team</a>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Mission Code</label>
                                <input type="text" name="code-code" id="" class="form-control" />
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Start Date</label>
                                <input type="date" name="start-date" id="" class="form-control" />
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Team</label>
                                <select name="team" id="" class="form-control">
                                    <option value="" selected disabled>Select</option>
                                    <option value="">Team 02933</option>
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Description</label>
                                <textarea name="" id="" class="form-control" style="resize: none;"></textarea>
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