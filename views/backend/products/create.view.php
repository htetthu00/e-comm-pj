<?php include(base_path('views/backend/layout/header.view.php')) ?>

<div class="t-right">
    <a href="<?= previousPage() ?>" class="btn btn-dark btn-sm mb-3">
        <span class="ri-arrow-drop-left-line"></span> Back
    </a>
</div>

<div class="card rounded-lg shadow-sm">
    <div class="card-header">
        Add Products
    </div>
    <div class="card-body">
        <?php if(isset($errors)) : ?>
            <div class="alert alert-danger error-message">
                 <ul class="error-list-style">
                    <?php foreach($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                 </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="/admin/products/create" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Product Name</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="name" type="text" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Select Shops</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="shop_id">
                        <?php foreach($shops as $shop) : ?>
                            <option value="<?= $shop['id'] ?>"><?= $shop['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Select Category</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="category_id">
                        <?php foreach($categories as $category) : ?>
                            <option value="<?= $category['id'] ?>"><?= $category['name'] ?> (<?= $category['shop_name'] ?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Availability</label>
                <div class="col-sm-12 col-md-10">
                    <select class="custom-select col-12" name="is_stock">
                            <option>Choose availability...</option>
                            <option value="1">In Stock</option>
                            <option value="0">Out of Stock</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="price" type="text" required placeholder="Myanmar Kyats">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Product Description</label>
                <div class="col-sm-12 col-md-10">
                    <textarea class="form-control"  name="description"></textarea>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label>Image 1</label>
                <div class="custom-file" style="max-width: 986px;">
                    <input type="file" name="image1" class="custom-file-input ml-15" require>
                    <label class="col-sm-12  custom-file-label">Choose file</label>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label>Image 2</label>
                <div class="custom-file" style="max-width: 986px;">
                    <input type="file" name="image2" class="custom-file-input ml-15">
                    <label class="col-sm-12  custom-file-label">Choose file</label>
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label>Image 3</label>
                <div class="custom-file" style="max-width: 986px;">
                    <input type="file" name="image3" class="custom-file-input ml-15">
                    <label class="col-sm-12  custom-file-label">Choose file</label>
                </div>
            </div>
            <div class="t-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">
                    Add
                </button>
            </div>
        </form>
    </div>
</div>

<?php include(base_path('views/backend/layout/footer.view.php')) ?>