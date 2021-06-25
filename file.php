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
            <div class="col-lg-4 col-md-6 col-12 m-auto">
                <div class="card card-profile">
                    <div class="card-body">
                        <canvas id="canvas"></canvas>
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
            const imageData = {
                data;
            };
            unshuffle(imageData.data);
            reDrawEditedImage(imageData);

            function shuffle(inArr, seed, unshuffle = false) {
                let outArr = inArr,
                    len = inArr.length

                let swap = (a, b) => [outArr[a], outArr[b]] = [outArr[b], outArr[a]]

                for (
                    var i = unshuffle ? len - 1 : 0; unshuffle && i >= 0 || !unshuffle && i < len; i += unshuffle ? -1 : 1
                )

                    swap(seed[i % seed.length] % len, i)
                return new Uint8ClampedArray(outArr);

            }

            function unshuffle(inArr, seed) {
                shuffle(inArr, seed, true)
            }

            function reDrawEditedImage(newData) {
                const reCanvas = $('#reCanvas');
                var ctxEdited = reCanvas.getContext('2d');
                ctxEdited.putImageData(newData, 0, 0);
            }
        });
    </script>
</body>
<!-- END: Body-->

</html>