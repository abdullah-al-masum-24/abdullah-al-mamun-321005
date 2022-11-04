<?php include "header.php"; ?>

<section class="py-5 product-bg-dark">
    <div class="container">
        <div class="col">
            <div class="h1 text-center px-3 py-5 text-light text-capitalize bg-dark mb-3"><?php echo $_GET['category']; ?></div>
        </div>
        <div class="row">

            <?php foreach ($productShow as $product) { ?>

                <div class="col-md-3 py-5 product-h">
                   <div class="card shadow h-100 py-2 product-inner-bg">
                       <img src="./assets/img/product/<?php echo $product['image']; ?>" alt="" class="card-img-top h-75 w-50 p-3 mx-auto"/>
                       <div class="card-body">
                           <div class="card-text">
                               <hr/>
                               <h3 class="fw-bold text-uppercase"><?php echo $product['name']; ?></h3>
                               <h6 class="fw-bold text-danger">Price : <?php echo $product['price']; ?></h6>
                               <p class="text-muted"><?php echo substr($product['description'], 0, 50); ?>...</p>
                               <a href="action.php?page=product-detail&&product-id=<?php echo $product['id']; ?>" class="nav-link mt-2 text-success">Detail &rightarrow;</a>
                           </div>
                       </div>
                   </div>
                </div>

            <?php }?>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>