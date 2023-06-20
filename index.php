<?php   
    require_once './app.php';
    include_once __DIR__ . '/templates/header.php';
?>
<main>
   <div class="container-fluid">
    <div class="row-12 d-flex justify-content-center">
        <div class="col-8">
        <form method="POST" id="form_post" action="./models/create_data.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-success w-100 fs-3">Submit</button>
    </form>
        </div>
    </div>
   </div>
</main>

<?php 
    include_once __DIR__. '/templates/footer.php';
?>