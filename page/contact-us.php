
      <div class="container my-5 py-5">
        <div class="row py-5">
          <div class="col">
            <h1 class="display-1 text-center">Contact Us</h1>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img
                  class="img-fluid"
                  src="./img/contact-us.jpg"
                  alt=""
                />
              </div>
          <div class="col-sm-6">
            <form method="POST" action="contact-us.html">
              <div class="mb-3 py-1">
                <label for="exampleInputName" class="form-label">Name</label>
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="exampleInputName"
                  aria-describedby="nameHelp"
                />
              </div>
              <div class="mb-3 py-1">
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3 py-1">
                <label for="exampleInputText" class="form-label">Text</label>
                <textarea
                  name="text"
                  class="form-control"
                  id="exampleInputText"
                  rows="5"
                ></textarea>
              </div>
              <div class="d-grid gap-2">
              <button type="submit" class="btn buttons" value="Send-Text">Submit</button>
            </div>
            </form>

  <?php 
  if(isset($_POST['ok'])) {
    include_once('./contact-us-function.php');
    $obj= new Contact();
    $res=$obj->contact_us($_POST);
    if($res==true) {
      echo "<script> alert ('Query successful') </script>";
    } else {
      echo "<script> alert ('Query NOOOOO!!!!') </script>";
    }
  }

  ?>


          </div>
        </div>
      </div>
      

      <footer>
        <h1>
        </h1>
      </footer>
