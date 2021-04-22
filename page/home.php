
  <?php
$node = isset($_GET['node']) ? trim(strip_tags($_GET['node'])) : "";
// var_dump($node);
// echo "<br>";

$info = array_slice(scandir($in_dir), 2);
// var_dump($blogs);
// echo "<br>";
$infoId = preg_replace("/[^0-9]/", "", $info);
// var_dump($blogsId);
// echo "<br>";

array_unshift($infoId, "");
unset($infoId['0']);
// var_dump($blogsId);
?>


 


  <?php if ($node) :
    $nodeId = array_search($node, $infoId);
    // var_dump($nodeId);
    // echo "<br>";

    if ($nodeId) :
      $nodeItems = file_get_contents($in_dir . '/home' . $infoId[$nodeId] . '.txt');
      list($n_image, $n_title,$n_intro, $n_text) = explode('::', $nodeItems);
  ?>

<div class="container">
<div class="row mt-3">
    <div class="col-3 my-5 py-5">
      <img src="<?php echo $n_image; ?>" class="img-edit mb-2" alt="..." />
      <a href="./?pg=home" class="btn buttons my-5">Back to Home Page</a>
    </div>
      <div class="col-9 my-5 py-4">
      <h1 class="display-1"><?php echo $n_title; ?></h1>
 

      <div class="my-5">
      <?php echo $n_text; ?>
      </div>
      </div>
    </div>
    </div>


    <?php else : ?>
  <div class="row my-5 mx-5">
    <div class="col">
      <h1 class="display-1">404 kļūda<br>Lapa nav atrasta</h1>
      <a href="./?pg=home" class="btn btn-outline-secondary">Back to All Movies</a>

    </div>
  </div>

  <?php endif; ?>


  <?php else : ?>


    <header>
    <h1 class="bc-color text-uppercase">Welcome To Movie Info</h1>
    <a href="#about" class="btn my-5 btn-lg buttons">More Info</a>
  </header>
  
    <div class="container py-5 text-center ">
    <div class="row">
      <div class="col">
        <div class="py-3 text-decoration-underline text-uppercase" id="about" >
        <h2> About Us/ Webiste Info</h2>
      </div>
        <p class="main-text">As we live in 21 century and quarantine is a big problem for us because we have to spend most of our time at home so sometimes or most of the times you might get bored. That is why we are here to help you by recommending specific movies that you would definitely love to watch or rewatch because It is quarantine anyways and maybe you don't feel productive at all that day. So on this website you can read more detailed info about a specific movie that you would love to watch. </p>
      </div>
    </div>
  </div>

  <div class="container text-decoration-underline">
    <div class="row py-3">
      <div class="col-md text-uppercase">
        <h3>Few Of The Movies</h3>
      </div>

    </div>
  </div>
      <div class="container">
      <div class="row movies">
    <?php foreach ($info as $value) :
        $inf = file_get_contents($in_dir . '/' . $value);
        list($in_image, $in_title, $in_text) = explode('::', $inf);
        $nodeId = preg_replace("/[^0-9]/", "", $value);
      ?>

<div class="col movie">
              <img src="<?php echo $in_image; ?>" class="img-card" alt="Boss-Baby">
              <h5 id="1"><?php echo $in_title; ?></h5>
              <p class="text"><?php echo $in_text; ?></p>
                  <a href="./?pg=home&node=<?php echo $nodeId; ?>" class="btn-b">More Info</a>
            </div>
    <?php endforeach; ?>
      </div>
      </div>
      <?php endif; ?>





  <footer>
  </footer>
