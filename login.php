<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Labfinal</title>
  <style>
   
  </style>
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-4 offset-lg-4">
        <form action="insert.php" method="post" enctype="multipart/form-data">
          <h4 class="text-center text-danger mb-3">Login Form</h4>
          <div class="mb-3">
            <label class="fw-bold text-warning">Enter Your Email :</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="mb-3">
            <label class="fw-bold text-warning">Enter Your Password :</label>
            <input type="number" class="form-control" name="price" required>
          </div>
          <button type="submit" class="btn btn-danger col-12" name="add">Add</button>
        </form>
      </div>
    </div>
  </div>

  
  </div>

</body>

</html>