<?php include "header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="card product-detail-h ">
                <div class="row g-0 h-100">
                    <div class="col-md-4 h-100 p-5">
                        <img src="./assets/img/product/<?php echo $productDetail['image']; ?>" alt="" class="img-fluid rounded-start h-100 mx-auto"/>
                    </div>
                    <div class="col-md-8 product-inner-bg">
                        <div class="card-body">
                            <div class="card-text">
                                <h1 class="text-uppercase fw-bold"><?php echo $productDetail['name']; ?></h1>
                                <h4 class="text-danger">Price : <?php echo $productDetail['price']; ?></h4>
                                <p class="lead"><?php echo $productDetail['description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>