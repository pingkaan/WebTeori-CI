<?= $this->extend('layout/auth') ?>

<?= $this->section('css') ?>

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?= base_url('library/bootstrap-social/bootstrap-social.css') ?>">

<?= $this->endSection('css') ?>

<?= $this->section('content') ?>
<div class="card card-primary">
    <div class="card-header">
        <h4>Login</h4>
        <?php echo \Config\Services::validation()->listErrors() ?>
    </div>

    <div class="card-body">
        <form method="POST" action="<?= base_url('auth') ?>" class="needs-validation" novalidate="">

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>

            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                    <div class="float-right">
                        <a href="" class="text-small">
                            Forgot Password?
                        </a>
                    </div>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>

            </div>

            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
<div class="text-muted mt-5 text-center">
    Don't have an account? <a href="<?= base_url('register') ?>">Create One</a>
</div>
<?= $this->endSection('content') ?>