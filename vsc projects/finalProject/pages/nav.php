<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logologo.png" style="height: 70px;width:200px;"  alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" onmouseover="" style="cursor: pointer;" onclick="window.location.href = 'index.php';">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  onmouseover="" style="cursor: pointer;" onclick="window.location.href = 'about.php';">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onmouseover="" style="cursor: pointer;" onclick="window.location.href = 'contact.php';">Contact Us</a>
                </li>
            </ul>
            <li class="nav-item dropdown" style="margin-right:30px;list-style-type: none;"">
                <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sort by
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <form class="sort" action="" method="GET">
                            <input type="hidden" name="sort" value="items_quantity asc">
                            <button class="dropdown-item" type="submit">Price: Low-High</button>
                        </form>
                    </li>
                    <li>
                        <form class="sort" action="" method="GET">
                            <input type="hidden" name="sort" value="items_quantity desc">
                            <button class="dropdown-item" type="submit">Price: High-Low</button>
                        </form>
                    </li>
                </ul>
            </li>
            <form class="button1" action="" method="post" data-bs-toggle="modal" data-bs-target="#signIn" onsubmit="return false">
                <button class="btn btn-success" type="submit">Sign in</button>
            </form>
        </div>
    </div>
</nav>
<div id="signIn" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Member Login</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                </div>
                <br>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" onclick="window.location.href = 'indexEdit.php';">Login</button>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>







<script>
    var myModal = document.getElementById('signIn');
    var myInput = document.getElementById('signIn');

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus();
    })
</script>