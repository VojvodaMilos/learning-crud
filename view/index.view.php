<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
    <div class="container">
      <a class="navbar-brand" href="index.php">Logo</a>
    </div>    
  </nav>
  <div class="container">
    <div class="row mt-3">
      <div class="col-4">
        <form action="create.php">
          <input type="text" name="name" class="form-control"><br>
          <input type="text" name="sport" class="form-control"><br>
          <div class="d-grid gap-2">
          <button class="btn btn-primary btn-lg" type="submit">Create</button>
          </div>
        </form>
      </div>

      <div class="col-4 offset-2 text-center">
      <?php foreach($result as $res): ?>
       
        <h2><?php echo $res["name"] ?> - <?php echo $res["sport"] ?> </h2>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $res["id"]?>">Delete</a>
        <a class="btn btn-info" href="update.php">Rename</a>
        <hr>
        <?php endforeach ?>
      </div>
    </div>

  </div>
</body>
</html>