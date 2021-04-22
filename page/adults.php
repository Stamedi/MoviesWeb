<?php
$node = isset($_GET['node']) ? trim(strip_tags($_GET['node'])) : "";
// var_dump($node);
// echo "<br>";

$info = array_slice(scandir($inf_dir), 2);
// var_dump($blogs);
// echo "<br>";
$infoId = preg_replace("/[^0-9]/", "", $info);
// var_dump($blogsId);
// echo "<br>";

array_unshift($infoId, "");
unset($infoId['0']);
// var_dump($blogsId);
?>



<div class="container">

<?php if ($node) :
    $nodeId = array_search($node, $infoId);
    // var_dump($nodeId);
    // echo "<br>";

    if ($nodeId) :
      $nodeItems = file_get_contents($inf_dir . '/adults' . $infoId[$nodeId] . '.txt');
      list($n_image, $n_title,$n_intro, $n_text) = explode('::', $nodeItems);
  ?>

<div class="row mt-3">
    <div class="col-3 my-5 py-5">
      <img src="<?php echo $n_image; ?>" class="img-edit mb-2" alt="..." />
      <a href="./?pg=adults" class="btn buttons my-5">Back to All Movies</a>
    </div>
      <div class="col-9 my-5 py-4">
      <h1 class="display-1"><?php echo $n_title; ?></h1>
 

      <div class="my-5">
      <?php echo $n_text; ?>
      </div>
      </div>
    </div>


    <?php else : ?>
  <div class="row my-5 mx-5">
    <div class="col">
      <h1 class="display-1">404 kļūda<br>Lapa nav atrasta</h1>
      <a href="./?pg=adults" class="btn btn-outline-secondary">Back to All Movies</a>

    </div>
  </div>

  <?php endif; ?>

  <?php else : ?>
  <div class="container kids-header text-center">
          <div class="row">
              <div class="col text-decoration-underline text-uppercase py-5">
                  <h1>Movies for Adults</h1>
              </div>
          </div>
      </div>


      <div class="row movies">
    <?php foreach ($info as $value) :
        $inf = file_get_contents($inf_dir . '/' . $value);
        list($in_image, $in_title, $in_text) = explode('::', $inf);
        $nodeId = preg_replace("/[^0-9]/", "", $value);
        // var_dump($blog);
      ?>

<div class="col movie">
              <img src="<?php echo $in_image; ?>" class="img-card" alt="...">
              <h5><?php echo $in_title; ?></h5>
              <p class="text"><?php echo $in_text; ?></p>
                  <a href="./?pg=adults&node=<?php echo $nodeId; ?>" class="btn-b">More Info</a>
            </div>
    <?php endforeach; ?>
      </div>
      <?php endif; ?>
      </div>


      <footer>
      </footer>

      