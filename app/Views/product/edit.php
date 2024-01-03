<?= $this->extend('layout/master'); ?>
<?= $this->section('css'); ?>

<link rel="stylesheet" href="<?= base_url('library/bootstrap-daterangepicker/daterangepicker.css') ?>">
<link rel="stylesheet" href="<?= base_url('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('library/select2/dist/css/select2.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('library/selectric/public/selectric.css') ?>">
<link rel="stylesheet" href="<?= base_url('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') ?>">

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Products</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                <div class="breadcrumb-item">Product</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Product</h2>


            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                    <!-- get error of validator -->
                    <?php echo \Config\Services::validation()->listErrors() ?>

                </div>
                <div class="card-body">


                    <form action="<?= base_url('update-product/') . $product['id'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="name" class="form-control " name="name" tabindex="1" required autofocus value="<?= $product['name'] ?>">

                        </div>
                        <div class="form-group">
                            <label class="form-label">Category</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                    <input type="radio" name="category" value="clothes" class="selectgroup-input" <?php if ($product['category'] === 'clothes') : ?> checked <?php endif ?>>
                                    <span class="selectgroup-button">Clothes</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="category" value="pants" class="selectgroup-input" <?php if ($product['category'] === '[pants]') : ?> checked <?php endif ?>>
                                    <span class="selectgroup-button">Pants</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="category" value="shoes" class="selectgroup-input" <?php if ($product['category'] === 'shoes') : ?> checked <?php endif ?>>
                                    <span class="selectgroup-button">Shoes</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex flex-row">
                                <div class="col-md-4">
                                    <img src="<?= base_url('storage/') . $product['image'] ?>" alt="image" class="img-fluid" width="100" id="preview">
                                </div>
                                <div class="col-md-8">
                                    <label for="image">Image</label>
                                    <input id="image" type="file" class="form-control " name="image" tabindex="1" autofocus>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input id="stock" type="number" class="form-control" name="stock" tabindex="1" required autofocus value="<?= $product['stock'] ?>">

                        </div>
                        <div class=" form-group">
                            <label for="price">Price</label>
                            <input id="price" type="number" class="form-control " name="price" tabindex="1" required autofocus value="<?= $product['price'] ?>">

                        </div>

                </div>
                <div class=" card-footer text-right">
                    <button class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!-- JS Libraies -->
<script src="<?= base_url('library/cleave.js/dist/cleave.min.js') ?>"></script>
<script src="<?= base_url('library/cleave.js/dist/addons/cleave-phone.us.js') ?>"></script>
<script src="<?= base_url('library/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<script src="<?= base_url('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') ?>"></script>
<script src="<?= base_url('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') ?>"></script>
<script src="<?= base_url('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') ?>"></script>
<script src="<?= base_url('library/select2/dist/js/select2.full.min.js') ?>"></script>
<script src="<?= base_url('library/selectric/public/jquery.selectric.min.js') ?>"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url('js/page/forms-advanced-forms.js') ?>"></script>

<!-- Preview Image -->
<script>
    image.onchange = evt => {
        preview = document.getElementById('preview');
        // preview.style.display = 'block';
        const [file] = image.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>
<?= $this->endSection(); ?>