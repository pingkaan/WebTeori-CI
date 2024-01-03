<?= $this->extend('layout/auth') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= base_url('library/selectric/public/selectric.css') ?>">
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="card card-primary">
    <div class="card-header">
        <h4>Register</h4>
        <?php echo \Config\Services::validation()->listErrors() ?>
    </div>

    <div class="card-body">
        <form method="POST" action="<?= base_url('addUser') ?>" class="needs-validation" novalidate="">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="name" class="form-control " name="name" tabindex="1" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control " name="email" tabindex="1" required autofocus>

            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>

            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password_confirmation" class="control-label">Password Confirmation</label>
                </div>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" tabindex="2" required>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
<div class="text-muted mt-5 text-center">
    Do you have an account? <a href="<?= base_url('login') ?>">Login</a>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url('library/selectric/public/jquery.selectric.min.js') ?>"></script>
<script src="<?= base_url('library/jquery.pwstrength/jquery.pwstrength.min.js') ?>"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url('js/page/auth-register.js') ?>"></script>
<?= $this->endSection() ?>