<?php include "header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="col">
                <div class="h1 text-center px-3 py-5 text-light text-capitalize bg-dark mb-3">Welcome to Our Shop !!</div>
            </div>
            <div class="row">

                <?php foreach ($categoryResult as $category) { ?>

                    <div class="col-md-3">
                        <div class="card h-75 shadow-sm">
                            <a href="action.php?page=category-product&&category=<?php echo $category['name']; ?>&&category-id=<?php echo $category['id']; ?>" class="h-75 w-100">
                                <img src="./assets/img/category/<?php echo $category['image']; ?>" alt="" class="h-100 card-img-top"/>
                            </a>
                            <div class="card-body">
                                <div class="card-text">
                                    <?php echo $category['name']; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }?>

            </div>
        </div>
    </section>

<?php include "footer.php"; ?>