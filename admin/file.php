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

        .avatar {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .avatar svg {
            width: 60px;
            height: 60px;
        }

        .avatar svg path {
            fill: orange;
        }
    </style>
    <!-- BEGIN: Content-->
    <div class="app-content content chat-application">
        <div class="row">
            <div class="col-md-8 col-12 m-auto">
                <div class="card card-profile" id="file-pane">
                    <div class="card-body">
                        <h4>Page Expiring in <span id="counter-text">0</span></h4>
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
                <div id="expired-pane" class="mt-5" style="display: none;">
                    <div class="card card-profile">
                        <div class="card-body">
                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    <div class="avatar" style="height: 100px;width:100px;">
                                        <i data-feather='lock'></i>
                                    </div>
                                </div>
                            </div>
                            <h3>Image Locked!</h3>
                            <span class="badge badge-light-primary profile-badge">An OTP has been sent to your email address</span>
                            <div class="text-center">
                                <h4 id="counter-text" data-duration="5"></h4>
                                <a href="resend-otp" id="resend-button" class="btn btn-warning btn-sm" style="display: none;">Resend OTP</a>
                            </div>
                            <hr class="mb-2" />
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="open-image" class="btn btn-primary">Unlock File</a>
                            </div>
                        </div>
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
    <script>
        $(function() {
            let duration = 5 * 60;

            let timer = setInterval(() => {
                if (duration > 1) {
                    $('#counter-text').text(`${duration}s`);
                    duration--;
                } else {
                    clearInterval(timer);
                    $('#file-pane').slideUp('slow', () => {
                        $('#expired-pane').slideDown();
                        $('#file-pane').remove();
                    });
                }
            }, 1000);
        });
    </script>
</body>
<!-- END: Body-->

</html>