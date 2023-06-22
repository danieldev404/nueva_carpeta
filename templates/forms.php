<div class="container-fluid">
    <div class="row-12 d-flex justify-content-center">
        <div class="col-6">
        <form id="form_post" action="./models/controllers/create_data.php" method="post">
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
        <form id="form_get" action="./models/controllers/read_data.php" method="get">
            <div class="mb-3">
          <label for="getuser" class="form-label">Username:</label>
          <input type="text" class="form-control" id="getuser" aria-describedby="emailHelp" name="getuser" placeholder="daniel123">
            </div>
        <button type="submit" name="getbtn" class="btn btn-danger w-100 fs-3">charge</button>
        </form>
        </div>
    </div>
   </div>
   <div class="row-12 d-flex justify-content-center">
    <div class="col-6">
        <form id="form_" action="./models/controllers/remove_data.php" method="delete">
            <div class="mb-3">
          <label for="delete_user" class="form-label">Username:</label>
          <input type="text" class="form-control" id="delete_user" aria-describedby="emailHelp" name="delete_user" placeholder="daniel123">
            </div>
        <button type="submit" name="getbtn" class="btn btn-warning w-100 fs-3">delete</button>
        </form>
        </div>
    </div>
   </div>
   <div class="row-12 d-flex justify-content-center">
    <div class="col-6">
        <form id="form_" action="./models/controllers/update_data.php" method="delete">
            <div class="mb-3">
          <label for="update_user" class="form-label">Username:</label>
          <input type="text" class="form-control" id="update_user" aria-describedby="emailHelp" name="update_user" placeholder="daniel123">
            </div>
            <div class="mb-3">
          <label for="new_name" class="form-label">newname:</label>
          <input type="text" class="form-control" id="new_name" aria-describedby="emailHelp" name="new_name" placeholder="daniel123">
            </div>
        <button type="submit" name="getbtn" class="btn btn-primary w-100 fs-3">update</button>
        </form>
        </div>
    </div>
   </div>
