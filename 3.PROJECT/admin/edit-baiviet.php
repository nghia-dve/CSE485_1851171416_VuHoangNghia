<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN CSE</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
</head>
<body>
<?php session_start();
	if($_SESSION['username']=='nghiapgs@gmail.com'){

?>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php"><span>CSE</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php  echo '<strong>' . $_SESSION['username'] . '</strong>'; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<!-- <input type="text" class="form-control" placeholder="Search"> -->
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> QL Tài khoản </a></li>
			<li><a href="QL_bai_viet.php"><em class="fa fa-calendar">&nbsp;</em> QL bài viết</a></li>
			<li><a href="QL_dien_dan.php"><em class="fa fa-bar-chart">&nbsp;</em> QL diễn đàn</a></li>
			<li><a href="../head/logout.php"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="../index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">QL Tài khoản / Sửa bài viết</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa bài viết</h1>
			</div>
		</div><!--/.row-->
		

			<main class="container">
        <div class="row">
            <div class="col-md-2">
                <form action="edit-baiviet-process.php" method="post">
				<?php
					include 'includes/config.php';
					$sql = "select * from baiviet where id =".$_GET['id']; 
					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);
				?>
					<input type="hidden" name="id_baiviet" value="<?php echo $row['id'] ?>">
					<div class="form-group">
						<label for="">Tiêu đề</label>
						<input type="text" name="tieude" placeholder="" value="<?php echo $row['tieu_de'] ?>" >
					</div>
					<div class="form-group">
						<label for="">Nội dung</label>
						<!-- <input type="text" name="noidung" placeholder="" value="<?php echo $row['noi_dung'] ?>" > -->
                        <textarea name="noidung" id="" cols="30" rows="10" ><?php echo $row['noi_dung'] ?></textarea>
					</div><div class="form-group">
						<label for="">image</label>
						<input type="file" name="image" placeholder="" value="<?php echo $row['image'] ?> " >
					</div>
					<div style="width:500px;"> 
						<button type="submit" class="btn btn-success" name="submit" style="float:left;">Cập nhật </button>
                    	<button type="reset" class="btn btn-danger" name="reset">Nhập lại </button>
                    	<a href="index.php" class="btn btn-secondary" name="reset" style="background-color:#333;">Quay lại</a>
					</div>
					
				</form>
           	<div class="col-md-2">
                
            </div>
        </div>
      </main>



			<div class="col-sm-12">
				<p class="back-link">Người tạo  <a href="#">Vũ Hoàng Nghĩa</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>
		
	</script>
<?php }
    ?>
<?php
	if($_SESSION['username']!='nghiapgs@gmail.com')
		{
			header('location:../index.php');
		}
		
?>		
</body>
</html>