<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <?php
    session_start();
    // echo $_SESSION['cid'];
        if (isset($_SESSION['cid'])) {
            echo "session is start";

        }
        else{
            echo "session cant start";
        }
    ?>
    <form action="" method="post">
    <button name="logout">log out</button></form>
    <?php
        if (isset($_POST['logout'])) {
            session_abort();
            echo "session is stop";
            echo $_SESSION['cid'];
        }
        else{
            echo "session is start";

        }
    ?>
</body>
</html>