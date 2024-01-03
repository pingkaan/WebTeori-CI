<?= $this->extend('layout/master') ?>;
<?= $this->section('css') ?>;

<!-- CSS Libraries -->
<link rel="stylesheet" href="<?= base_url('library/jqvmap/dist/jqvmap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('library/summernote/dist/summernote-bs4.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('library/ionicons201/css/ionicons.min.css') ?>">

<?= $this->endSection() ?>;


<?= $this->section('content') ?>;
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Products</h1>
            <a href="<?= base_url('add-product') ?>" class="btn btn-primary ml-4">
                <i class="ion ion-plus-round" data-pack="default" data-tags="add, include, new, invite, +"></i>
                <span class="ml-2">Add Product</span>
            </a>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                <div class="breadcrumb-item">Product</div>
            </div>
        </div>

        <div class="section-body">

            <h2 class="section-title">Products</h2>

            <div class="card">
                <div class="card-header">
                    <h4>All Product</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table-striped table">
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>

                            <?php foreach ($product as $item) { ?>
                                <tr>
                                    <td><?= $item['name'] ?></td>
                                    <td>
                                        <img src="<?= base_url('storage/') . $item['image'] ?>" alt="image" class="img-fluid" width="100">
                                    </td>
                                    <td><?= ucfirst($item['category']) ?></td>
                                    <td><?= $item['stock'] ?></td>
                                    <td><?= "Rp " . number_format($item['price'], 0, ",", "."); ?></td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href='<?= base_url('edit-product/') . $item['id'] ?>' class="btn btn-sm btn-info btn-icon">
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>

                                            <form action="<?= base_url('delete-product/') . $item['id'] ?>" method="POST" class="ml-2">
                                                <input type="hidden" name="_method" value="DELETE" />

                                                <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                    <i class="fas fa-times"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

                        </table>
                        <div class="float-right">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection() ?>



<?= $this->section('js') ?>;
<script src="<?= base_url('library/jquery-ui-dist/jquery-ui.min.js') ?>"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url('js/page/components-table.js') ?>"></script>
<?= $this->endSection() ?>;