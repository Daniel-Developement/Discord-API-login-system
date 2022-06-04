<?php
    session_start();

    extract($_SESSION['userData']);

    $avatar_url = "https://cdn.discordapp.com/avatars/@discord_id/$avatar.jpg";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/504e341a3c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="app/css/style.css">
  <title>Leinad Code</title>
</head>
<body>
    <div class="container">
     <h5 class="title">Welcome to dasboard. <?php echo $name; ?></h5>
     <img src="<?php echo $avatar_url; ?>" alt="">
     <a href="#" class="link">Logout</a>
    </div>
</body>
</html>