<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Готовый WEB-сайт </title>
</head>
<body>

    <?php require "blocks/header.php" ?>

    <div class="container mt-5">
    <h3 class="mb-5">Наши статьи</h3>

    <div class="d-flex flex-wrap">

    <?php
      for( $i = 0; $i < 6; $i++):
    ?>
    <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="image/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
  <?php endfor; ?>
  </div>

  </div>

  <?php require "blocks/footer.php" ?>
  
</body>
</html>
