<?php session_start(); ?>
<nav id="nav" class="navbar navbar-expand-lg alert alert-secondary">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a id="dhtl" class="navbar-brand nav-title" href="http://www.tlu.edu.vn/">Trường Đại học Thuỷ Lợi-TLU</a>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <form class="form-inline " >
            <div class="container h-100">
                <div class="d-flex justify-content-center h-100" >
                    <div class="searchbar" style="margin-left: 380px;" >
                        <input style="min-width:100px;" class="search_input" type="text" name=""
                            placeholder="Search...">
                        <a href="#" class="search_icon float-right"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="login-menu">
        <?php if(isset($_SESSION['username'])) { ?>
        <a id="login" href=""
            style="margin-left:280px;margin-top:8px;"><?php echo '<strong>'.$_SESSION['username'].'</strong>'; ?></a>
        <a href="">|</a>
        <a id="Register" href="head/logout.php"> Đăng xuất</a>
        <?php } ?>
        <?php if(!isset($_SESSION['username'])) { ?>
        <a id="login" href="head/login.php"> Đăng nhập</a>
        <a href="">|</a>
        <a style="font-size:16px;66 " href="register.php"> Đăng kí</a>
        <?php } ?>
    </div>


</nav>
<style>
.nav-title{
  font-size:25px !important;
}
.searchbar {
    margin-bottom: auto;
    margin-top: auto;
    height: 35px;
    width:410px;
    background-color: #f2f2f2;
    border-radius: 30px;
    padding: 10px;
}

.search_input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;

    line-height: 10px;
    transition: width 0.4s linear;
}


</style>