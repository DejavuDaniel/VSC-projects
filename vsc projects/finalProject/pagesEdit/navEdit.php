<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logologo.png" style="height: 70px;width:200px;" alt="">
    </a>
    <a class="navbar-brand" href="#">
      <h2>Edit Page</h2>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
      </ul>
      <button class="btn btn-info" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="margin-right:30px;">Create</button>
      <button class="btn btn-danger" onclick="window.location.href = 'index.php';">Sign out</button>
    </div>
  </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h3 class="offcanvas-title" id="offcanvasRightLabel">Create new:</h3>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form action="" method="post">
      <input type="text" name="name" placeholder="name" value="<?= $edit ? $urmoBaze->brand : "" ?>"><br>
      <br>
      <input type="" name="sales_field" placeholder="sales_field" value="<?= $edit ? $urmoBaze->item : "" ?>"><br>
      <br>
      <input type="text" name="items_quantity" placeholder="items_quantity" value="<?= $edit ? $urmoBaze->descript : "" ?>"><br>
      <br>
      <input type="text" name="accepts_card" placeholder="accepts_card" value="<?= $edit ? $urmoBaze->price : "" ?>"><br>
      <br>
      <input type="hidden" name="id" value="<?= $edit ? $urmoBaze->id : "" ?>">
      <button type="submit" name="save" class="btn btn-primary">save</button>
    </form>
  </div>
</div>