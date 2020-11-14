<!DOCTYPE html>
<html lang="en">
<?php
            include 'admin/includes/config.php';
            $sql = "select * from baiviet where id =".$_GET['id'];
            mysqli_set_charset($conn, "UTF8");
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
             ?>

<head>
    <?php include('head/head.php')?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
    <div><?php include('head/headNav.php')?></div>
    <div class="container">
        <div><?php include('footer/footer.php')?></div>
        <div><?php include('nav/nav.php')?></div>
        <br>
        <br>
        <?php ?>

        <img class="img-responsive" style="height: 400px; width: 100%; " src="image/<?php echo $row['image'] ?>"
            alt="">

        <hr>
        <div class="title mt-3">
            <h1><?php echo $row['tieu_de']; ?></h1>
        </div>
        <div class="noidung mt-2">
            <p class="tieude"><?php echo $row['noi_dung']; ?></p>
        </div>

    </div>
    <?php  ?>
    </div>
    <?php include('footer/footer1.php')?>
</body>

<!-- <link rel="stylesheet" href="head/style.css"> -->

</html>