<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <title><?php echo $title ?></title>

</head>

<body>

  <div class="article">

    <h1><?php echo $article['title'] ?></h1>

    <div class="content">

      <?php echo $article['content'] ?>

    </div>

  </div>

  <ul class="thankyou">

    <li>Thank You !</li>

    <li>

      <?php echo $thank_you ?>

    </li>

  </ul>

</body>

</html>