<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>PHP веб сайт</title>
</head>
<body>
  <?php require "blocks/header.php"?>
    </div>
    <div class='container'>
      <h3 class='mb-5'>Наши статьи</h3>

      <div class='row d-flex'>
        <?php
        for($i = 0; $i < 5; $i++):
        ?>
        <div class="col-4">
          <div class="card mb-4 rounded-3 shadow-sm style="height: 400px;"">
            <div class="card-header">
              <h4 class="my-0 fw-normal">Просто текст</h4>
            </div>
            <div class="card-body d-flex flex-column">
              <img src="img/<?php echo ($i + 1) ?>.jpg" class='img-thumbnail' alt="">
              <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary mt-auto">Подробнее</button>
            </div>
        </div>
        </div>
        <?php endfor; ?>
      </div>
      
    </div>
      </div>

    </div>
    <?php require "blocks/footer.php"?>
  
</body>
</html>
