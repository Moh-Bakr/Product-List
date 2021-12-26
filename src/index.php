<?php require_once(__DIR__ . '/Views/layouts/cdn.php') ?>
<head>
    <title>Scandiweb</title>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href='/' class="navbar-brand mb-0 h1">
                <img src="https://yt3.ggpht.com/ytc/AKedOLQ4c6V1SB6BxHWYjRIPs8uVi3Kyb7Xb-hs-xw6I=s900-c-k-c0x00ffffff-no-rj"
                     alt="" width="40" height="24"> Product List</a>
            <div>
                <a href="addproduct.php" class="btn btn-primary ml-4">ADD</a>
                <button form="products_form" type="submit" class="btn btn-danger my-2 my-sm-0 mx-1"
                        id="delete-product-btn">MASS DELETE
                </button>
            </div>
        </div>
    </nav>
</head>
<body class="d-flex flex-column" style="min-height: 100vh">
<main style="flex: 1">
    <div class="container py-4" id="products_form">
        <div class="row justify-content-center justify-content-sm-start">
            <?php $products = ['id'=>'1','sku' => 'Gws', 'name' => 'Hello', 'price' => '55', 'size' => '10',
                "weight"=>'20',"height"=>'5',"width"=>'6', "length"=>'3']; ?>
            <?php foreach ($products as $key => $product) { ?>
                <div class="col-10 col-sm-6 col-md-4 col-lg-3 my-3 ">
                    <div class="card border border-secondary rounded-lg">
                        <div class="card-body text-center">
                            <div class="custom-control custom-checkbox text-left mb-2">
                                <input type="checkbox" class="delete-checkbox"
                                       name="products[]" id="product<?= $products['id'] ?>"
                                       value="product<?= $products['id'] ?>">
                                <label class="custom-control-label" for="product<?= $products['id'] ?>"></label>
                            </div>
                            <h5 class="card-title"><?= $products['sku'] ?></h5>
                            <h5 class="card-title"><?= $products['name'] ?></h5>
                            <h5 class="card-subtitle mb-2"><?= $products['price'] ?> $</h5>
                            <?= $products['size'] ? '<h5 class="card-text">' . 'Size: ' . $products['size'] . ' MB' . '</h5>' : '' ?>
                            <?= $products['weight'] ? '<h5 class="card-text">' . 'Weight: ' . $products['weight'] . ' KG' . '</h5>' : '' ?>
                            <?= $products['height'] ? '<h5 class="card-text">' . 'Dimensions: ' . $products['height'] . 'x' . $products['width'] . 'x' . $products['length'] . '</h5>' : '' ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
<?php require_once(__DIR__ . '/Views/scripts/scripts.php') ?>
</body>
