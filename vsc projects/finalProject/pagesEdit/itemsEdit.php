
<?php $i = 0;  ?>
<div class="container marketing down">
  <!-- using foreach for creating cards with object data: -->
  <?php foreach ($urmoBazes as $urmoBaze) { ?>
    <div class="item-card">
      <div class="card optionsecoptions" style="width: 15rem;">
        <form class="button destroy" action="" method="post" style="padding-right:170px">
          <input type="hidden" name="id" value="<?= $urmoBaze->id ?>">
          <button type="submit" name="destroy" class="btn-close" aria-label="Close"></button>
        </form>
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
          <form class="button edit" action="" method="post" data-bs-toggle="modal" data-bs-target="#itemDrop<?= $i ?>" onsubmit="return false">
            <input type="hidden" name="id" value="<?= $urmoBaze->id ?>">
            <button type="submit" name="edit" class="btn btn-primary">edit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <!-- using loop to add special number in id of class: modal. -->
    <div class="modal fade" id="itemDrop<?= $i ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Item</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="name" value="<?= $urmoBaze->name ?>"> name<br>
              <br>
              <input type="text" name="sales_field" value="<?= $urmoBaze->sales_field ?>"> sales_field<br>
              <br>
              <input type="text" name="accepts_card" value="<?= $urmoBaze->accepts_card ?>"> accepts_card<br>
              <br>
              <input type="text" name="items_quantity" value="<?= $urmoBaze->items_quantity ?>"> items_quantity<br>
              <br>
              <input type="hidden" name="id" value="<?= $urmoBaze->id ?>">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-success">update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php $i++;  ?>
  <?php } ?>
</div>

<!-- javascript  -->

<script>
  /// find card buy class name with all items in it and loop :
  let cards = document.getElementsByClassName("item-card");
  for (let i = 0; i < cards.length; i++) {
    // add to each card listner to find which pressed:
    cards[i].addEventListener('click', function(event) {
      // selecting elements in card with index to choose which item is needed
      var selected = cards[i].querySelectorAll("div")[0];
      var editBtn = cards[i].querySelectorAll("form")[0];
      var destroyBtn = cards[i].querySelectorAll("form")[1];
      if (selected) {
        /// selecting all class names made in css for adding to elements for modyfing.
        var selectedEl = document.querySelector(".selected");
        var selectedOn = document.querySelector(".on");
        var selectedOnn = document.querySelector(".onn");

        // removes class name if press
        if (selectedEl && selectedEl !== selected) {
          selectedEl.classList.remove("selected");
          selectedOn.classList.remove("on");
          selectedOnn.classList.remove("onn");
        }
        // changes class name when press

        if (selected, editBtn, destroyBtn) {
          selected.classList.toggle("selected")
          editBtn.classList.toggle("on");
          destroyBtn.classList.toggle("onn");
        }
      }

    })
    /// finding id for edit modal

    var myModal = document.getElementById('itemDrop' + i)
    var myInput = document.getElementById('staticBackdrop' + i)

    myModal.addEventListener('shown.bs.modal', function() {
      console.log(apple)
      myInput.focus();
    })


  };
</script>