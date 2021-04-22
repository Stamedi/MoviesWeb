
<nav class=" navbar navbar-expand-lg  fixed-top bg-nav ">
        <div class="container-fluid">
          <a href="./?pg=home"><img src="./img/loglo.png" class="icon-nav ms-5" alt=""></a>
          <button type="button" class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon nav-font"></span>
        </button>
          <div class="collapse navbar-collapse " id="navbarCollapse" >
            <ul class="navbar-nav mr-auto bg-nav pt-3 ">
            <?php foreach ($pgdata as $key => $value) : ?>
        <?php if ($key == $page) : ?>
              <li class="nav-item ps-3 pe-3">
                <a class="nav-link nav-font disabled" href="./?pg=<?php echo $key; ?>"><?php echo $value['menuTitle']; ?></a></li>
        <?php else : ?>
              <li class="nav-item ps-3 pe-3">
                <a class="nav-link nav-font" href="./?pg=<?php echo $key; ?>"><?php echo $value['menuTitle']; ?></a></li>
        <?php endif; ?>

        <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </nav>
        