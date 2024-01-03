<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Fashion</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('library/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Libraries -->
    <?= $this->renderSection('css') ?>;

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/components.css') ?>">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <!-- Header -->
                        <div class="login-brand">
                            <img src="<?= base_url('img/stisla-fill.svg') ?>" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>


                        <!-- Content -->
                        <?= $this->renderSection('content') ?>

                        <!-- Footer -->
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url('library/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('library/popper.js/dist/umd/popper.js') ?>"></script>
    <script src="<?= base_url('library/tooltip.js/dist/umd/tooltip.js') ?>"></script>
    <script src="<?= base_url('library/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= base_url('library/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('js/stisla.js') ?>"></script>

    <!-- JS Libraies -->
    <?= $this->renderSection('js') ?>;

    <!-- Template JS File -->
    <script src="<?= base_url('js/scripts.js') ?>"></script>
    <script src="<?= base_url('js/custom.js') ?>"></script>
</body>

</html>