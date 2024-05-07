<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}
;

if (isset($_GET['logout'])) {
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/png" sizes="32x32" href="./assets/pic/logo.png">
   <title>Profile</title>

   <!-- custom css file link  -->


</head>

<body>
   <header>
      <h2 class="logo">Milky</h2>
      <nav>
      <ul class="nav_list">
            <li><a href="admin_page.php">Home</a></li>
            <li><a href="index.php" class="btn">clients</a></li>
            <li><a href="Statistiques.php">Statistics</a></li>
            <li><a href="prof-admin.php">profile</a></li>
            <li><a href="logout.php" class="btn">logout</a></li>
        </ul>
        </nav>
      </nav>
   </header>


   
   <div class="container">

      <div class="profile">
         <?php
         $select = mysqli_query($conn, "SELECT * FROM `prof` WHERE id = '$user_id'") or die('query failed');
         if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
         }
         if ($fetch['image'] == '') {
            echo '<img src="images/default-avatar.png">';
         } else {
            echo '<img src="uploaded_img/' . $fetch['image'] . '">';
         }
         ?>
         <h3>Full Name: <?php echo $fetch['name']; ?></h3>
         <h3>Email: <?php echo $fetch['email']; ?></h3>

         <a href="update_profile.php" class="btn">update profile</a>

      </div>

   </div>

</body>

</html>