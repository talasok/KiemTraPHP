<?php
// session_start();
// include_once("model/user.php");
// include_once("model/sql.php");
// if (!isset($_SESSION["user"]))
//     header("location:login.php");
//  include_once("header.php")
?>
<?php
    include_once("header.php"); 
    include_once("model/danhba.php");
?> 
<?php
    $lsFromDB = DanhBa::getListFromDB();
?>

<div class="container-fluid" style="margin-top: 25px;">
    <div class="row">
        <!-- row -->
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <i class="fas fa-bars"></i>
            <a> <img src="img/contacts_48dp.png" alt="" style="width:40px;margin-bottom: 8px;"> <span style="font-size: 25px;"> Danh bạ </span></a>
        </div>
        <div class="col-lg-7">
            <form action="" method="GET">
                <!-- <div class="form-group">
                <button type="submit" class="btn btn-default" style="margin-left:-50px" name="submitSearch"><i class="fas fa-search"></i></button>
                    <input class="form-control" value="" name="search" style="max-width: 95%; display:inline-block;" placeholder="Search">
                   
                </div> -->
                <div class="input-group md-form form-sm form-1 pl-0">
                    <div class="input-group-prepend">
                        <button class="input-group-text cyan lighten-2" id="basic-text1" style="background: gray;"><i class="fas fa-search text-white" aria-hidden="true"></i></button>
                    </div>
                    <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" style="    max-width: 90%;    height: 50px;" name="search" value="">
                </div>
            </form>
        </div>
        <div class="col-lg-1"></div>
        <!-- end row -->
    </div>
    <div class="row">
        <!-- open row -->
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <!-- col 3 -->
            <div style="max-width: 80%;">
                <div>
                    <button style="
                                        width: 85%;
                                         height: 44px;
                                        padding: 5px 20px;
                                        border-radius: 20px;
                                        -moz-border-radius: 20px;
                                        -webkit-border-radius: 20px;
                                        border: none;
                                        background: whilte;
                                        color: #585858;
                                        cursor: pointer;
                                        margin-left: 18px;
                                        margin-bottom: 8px;">
                        <img src="img/add2.png" alt="">
                        <span>Them lien he</span>
                    </button>
                </div>
                <div class="list-group">
                    <div>
                        <a href="#" class="list-group-item ">
                            <span>
                                Danh bạ
                                <span class="badge badge-primary badge-pill" style="float: right;">14</span>
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="list-group-item "> <span> Thường xuyên liên hệ <span class="badge badge-primary badge-pill" style="float: right;">14</span> </span> </a>
                    </div>
                    <div>
                        <a href="#" class="list-group-item "> <span> Liên hệ trung lập <span class="badge badge-primary badge-pill" style="float: right;">14</span> </span> </a>
                    </div>

                    <hr>

                    <!-- dropdown -->
                    <!-- <div>
                            <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%;   background: white; color: black;">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                            </div>
                         </div> -->
                    <!--  -->
                    <div>
                        <a href="#" class="list-group-item ">
                            <span>
                                Danh bạ
                                <span class="badge badge-primary badge-pill" style="float: right;">14</span>
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="list-group-item "> <span> Thường xuyên liên hệ <span class="badge badge-primary badge-pill" style="float: right;">14</span> </span> </a>
                    </div>
                    <div>
                        <a href="#" class="list-group-item "> <span> Liên hệ trung lập <span class="badge badge-primary badge-pill" style="float: right;">14</span> </span> </a>
                    </div>
                    <div>
                        <a href="#" class="list-group-item ">
                            <span>
                                Danh bạ
                                <span class="badge badge-primary badge-pill" style="float: right;">14</span>
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="list-group-item "> <span> Thường xuyên liên hệ <span class="badge badge-primary badge-pill" style="float: right;">14</span> </span> </a>
                    </div>
                    <div>
                        <a href="#" class="list-group-item "> <span> Liên hệ trung lập <span class="badge badge-primary badge-pill" style="float: right;">14</span> </span> </a>
                    </div>
                </div>
            </div>
            <!-- end col 3 -->
        </div>
        <div class="col-lg-7">
            <!-- col 7 -->
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Số điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //độ dài list ls
                        // count($ls)
                        foreach ($lsFromDB as $key => $value) {
                            ?>
                            <tr>
                                <th colspan="1"><?php echo $value->id ?></th>
                                <td colspan="2"><?php echo $value->name ?></td>
                                <td colspan="2"><?php echo $value->email ?></td>
                                <td colspan="2"><?php echo $value->phone ?></td>
                                
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- end col 7 -->
        </div>
        <div class="col-lg-1"></div>
    </div>
    <!-- end row -->
</div>



<?php include_once("footer.php") ?>