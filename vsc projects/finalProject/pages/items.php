<div class="container marketing">
    <!-- using foreach for creating cards with object data: -->
    <?php foreach ($urmoBazes as $urmoBaze) { ?>
        <div class="item-card">
            <div class="card" style="width: 15rem;">

                <img class="bd-placeholder-img bd-placeholder-img-lg feature-image img-fluid mx-auto" width="100" height="100" src="img/shop.png" alt="">

                <div class="card-body">
                    <h3 class="card-title"><?= $urmoBaze->name ?></h3>
                    <p class="price"><?= $urmoBaze->sales_field ?></p>
                    <p class="price">Prekes: <?= $urmoBaze->items_quantity ?>vnt</p>
                    <?php if ($urmoBaze->accepts_card != 0) { ?>
                        <p><img src="img/cardyes.png" alt="" width="30px" height="22px"></p>
                    <?php } else { ?>
                        <p><img src="img/cardno.png" alt="" width="30px" height="22px"></p>
                    <?php  } ?>
                    <div class="button buy">
                    <button type="submit" name="buy" onclick="window.location.href = 'contact.php';" class="btn btn-primary">find More</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>