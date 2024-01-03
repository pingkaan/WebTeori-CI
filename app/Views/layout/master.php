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
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Header -->
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= session()->get('name'); ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="<?= base_url('logout') ?>" method="post">

                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- Sidebar -->
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/">Fashion</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/">FSH</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li class='active'>
                                    <a class="nav-link" href="/">Fashion Product</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Content -->
            <?= $this->renderSection('content') ?>

            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url('library/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('library/popper.js/dist/umd/popper.js') ?>"></script>
    <script src="<?= base_url('library/tooltip.js/dist/umd/tooltip.js') ?>"></script>
    <script src="<?= base_url('library/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') ?>"></script>
    <script src="<?= base_url('library/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('js/stisla.js') ?>"></script>

    <?= $this->renderSection('js') ?>

    <!-- Template JS File -->
    <script src="<?= base_url('js/scripts.js') ?>"></script>
    <script src="<?= base_url('js/custom.js') ?>"></script>
</body>

</html>