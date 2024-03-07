<?php

require "classes.php";

use \Submision as Submision;

$data = "";

if(isset($_POST["username"], $_POST["email"], $_POST["message"]) && $_SERVER["REQUEST_METHOD"] == "POST")
{
  $submission = new Submision(
    $_POST["username"],
    $_POST["email"],
    $_POST["message"]
  );

  $data = $submission->upload();
}

?>

<!DOCTYPE html>
<html>
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Форма обратной связи</h1>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Имя</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" rows="3" name="message" id="message" required></textarea>
            </div>
            <div class="form-group">
                <label for="file">Файл (.jpg, .png)</label>
                <input type="file" class="form-control-file" name="file" id="file" accept=".jpg, .png">
            </div>

            <div class="form-group">
              <label for="data"><?=$data?></label>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Отправить" required>
        </form>
    </div>
</body>
</html>
