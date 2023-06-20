<?php
    include '/view/style.css';
    require_once './config/Database.php';
    include_once __DIR__ . '/templates/header.php';
?>
<main>
   <div class="container-fluid">
    <div class="row-12 d-flex justify-content-center">
        <div class="col-6">
        <form id="form_post" action="./models/create_data.php" method="post">
        <div class="mb-3">
          <label for="nameuser" class="form-label">Username:</label>
          <input type="text" class="form-control" id="name_user" aria-describedby="emailHelp" name="name_user" placeholder="daniel123">
        </div>
        <button type="submit" name="postbtn" class="btn btn-success w-100 fs-3">Submit</button>
    </form>
        </div>
        
    </div>
    <div class="row-12 d-flex justify-content-center">
    <div class="col-6">
        <form id="form_get" action="./models/read_data.php" method="get">
            <div class="mb-3">
          <label for="getuser" class="form-label">Username:</label>
          <input type="text" class="form-control" id="getuser" aria-describedby="emailHelp" name="getuser" placeholder="daniel123">
            </div>
        <button type="submit" name="getbtn" class="btn btn-danger w-100 fs-3">charge</button>
        </form>
        </div>
    </div>
   </div>
</main>

<?php 
    include_once __DIR__. '/templates/footer.php';
?>