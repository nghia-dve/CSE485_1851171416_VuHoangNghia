<div id="myCarousel" class="carousel slide border" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/cntt-fsoft-ky.jpg" alt="">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image/cse-tlu-nara.jpg" alt="">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image/khai-truong.jpg" alt="">
        </div>
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div>
    <h1 class="mt-3 text-center">Tin tức</h1>
    <hr>
    <div class="news-index">
        <!-- <div class="row">
            <div class="col-md-5"><img src="image/khai-truong.jpg" alt="" ></div>
            <div class="col-mf-7"> -->
                <?php
                     include 'admin/includes/config.php';
                     $sql = "select * from baiviet";
                     mysqli_set_charset($conn, "UTF8");
                     $result = mysqli_query($conn, $sql);
                     while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="noidung-index">
                    <div class="row" style="margin-bottom:10px;">
                        <div class="col-md-5">
                                <img class="img-responsive" style="height: 160px; width: 300px; "
                                    src="image/<?php echo $row['image'] ?>" alt="">
                        </div>

                        <div class="col-md-7">
                            <a href="detail.php?id=<?php echo $row['ID'] ?>"
                                class="title-index"><?php echo $row['tieu_de']; ?></a>
                            <p class="tieude"><?php echo $row['noi_dung']; ?></p>
                            <a href="baiviet.php?id=<?php echo $row['id'] ?>" name="ID">Xem thêm >></a>
                        </div>
                    </div>
                    <hr>
                </div>
                <?php } ?>

            <!-- </div>
        </div> -->
    </div>
    <hr>

</div>