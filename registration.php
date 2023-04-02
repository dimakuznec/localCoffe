<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="registration.css">
    <title>registration</title>
</head>
<body>
    <?php
     // Соединение с фйлом подключения к БД 
     require("indexbd.php");
     // Проверяю, была ли отправлена форма
if (isset($_POST['go'])) {
    // Получаю логин и пароль из формы
    $login = $_POST['login'];
    $password = $_POST['password'];
  
    // Проверяю, были ли введены логин и пароль
    if (empty($login) || empty($password)) {
      $error = 'Необходимо заполнить все поля';
    } else {
      // Проверяю, существует ли пользователь с заданным логином
      $query = "SELECT * FROM users WHERE login='$login'";
      $result = mysqli_query($conn, $query);
      $user = mysqli_fetch_assoc($result);
  
      // Если пользователь существует, вывожу ошибку
      if ($user) {
        $error = 'Пользователь с таким логином уже существует';
      } else {
        // Проверяю, содержит ли пароль запрещённые символы
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
          $error = 'Пароль не может содержать запрещённые символы';
        } else {
          // Проверяю сложность пароля
          if (strlen($password) < 8) {
            $error = 'Пароль должен быть не менее 8 символов';
          } else {
            // Если пользователя не существует, добавляем его в базу данных
            $query = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
            $result = mysqli_query($conn, $query);
  
            if ($result) {
              // Авторизуем пользователя
              session_start();
              $_SESSION['user_id'] = mysqli_insert_id($conn);
              $_SESSION['user_login'] = $login;
  
              echo 'Регистрация прошла успешно!';
            } else {
              $error = 'Ошибка при регистрации пользователя';
            }
          }
        }
      }
    }
  
    // Если есть ошибки, вывожу их
    if (isset($error)) {
      echo $error;
    }
  }
  
  // Проверяю, авторизован ли пользователь
  session_start();
  if (isset($_SESSION['user_id'])) {
    // Пользователь авторизован
    echo 'Вы вошли как ' . $_SESSION['user_login'];
  } else {
    // Пользователь не авторизован
    echo 'Вы не авторизованы';
  }
    ?>
        <header class="Registration">
         <div class="container">
           <form class="form-signin" method="POST">
                <h2>Registration</h2>
                <input class="form-control" name="login" type="text" placeholder="login">
                <input class="form-control" name="password" type="password" placeholder="password">
           </form>
           <form class="form-signin" method="POST">
                <h2>Authorization</h2>
                <input class="form-control" name="login" type="text" placeholder="login">
                <input class="form-control" name="password" type="password" placeholder="password">
                <button class="btn btn-lg btn-primary btn-block" name="go" type="submit">Register</button>
           </form>
         </div>
       </header>
    </body>
    </html>
    