 <?php
    session_start();
    include_once("model/user.php");
    include_once("model/lable.php");
    if (!isset($_SESSION["user"]))
        header("location:login.php");
    $user = unserialize($_SESSION["user"]);

    include_once("model/danhba.php");
    if (isset($_REQUEST["editdanhba"])) {
        $id    = $_REQUEST["id"];
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $phone = $_REQUEST["phone"];

        $content =  array();
        array_push($content, $id);
        array_push($content, $name);
        array_push($content, $email);
        array_push($content, $phone);

        DanhBa::editDB($content);
    }
    if (isset($_REQUEST["adddanhba"])) {

        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $phone = $_REQUEST["phone"];

        $content =  array();
        array_push($content, $name);
        array_push($content, $email);
        array_push($content, $phone);

        DanhBa::addToDB($content);
    }
    if (isset($_REQUEST["addNhan"])) {
        $name = $_REQUEST["name2"];
        Lable::addToDB($name);
    }
    $lslable = Lable::getListLableDB();
    $keyWord = null;
    if (isset($_REQUEST["search"])) {
        $keyWord = $_REQUEST["search"];
    }
    include_once("model/danhba.php");
    $lsFromFile = DanhBa::getSearch($keyWord);
    if ($keyWord != "") {
        if ($lsFromFile != null) {
            $lsFromDB = DanhBa::getSearch($keyWord);
        } else {
            $lsFromDB = DanhBa::getSearch($keyWord);
        }
    } else {
        $lsFromDB = DanhBa::getListFromDB();
    }

    ?>
 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
     <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
         <i class="fas fa-bars"></i>
     </button>
     <div class="col-md-3">
         <img src="img/contacts_48dp.png" alt="1" style="width: 40px;height: 40px;">
         <span style="color: white;">danh bạ</span>
     </div>
     <!-- Navbar Search -->
     <form class="d-md-inline-block form-inline" style="width: 700px;">
         <div class="input-group">
             <input type="text" name="search" id="search" value="<?php echo $keyWord; ?>" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
             <div class="input-group-append">
                 <button class="btn btn-primary" type="submit">
                     <i class="fas fa-search"></i>
                 </button>
             </div>
         </div>
     </form>
     <a href="" style="margin-left: 55px;" class="nav-link text-white px-md-4"><?php echo "Xin chào! " . $user->fullName ?></a>
     <!-- Navbar -->
     <ul class="navbar-nav ml-md-0">
         <li class="nav-item dropdown no-arrow">
             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                 <i class="fas fa-user-circle fa-fw"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="#">Settings</a>
                 <a class="dropdown-item" href="#">Activity Log</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="logout.php">Logout</a>
             </div>
         </li>
     </ul>

 </nav>
 <div id="wrapper">

     <!-- Sidebar -->
     <ul class="sidebar  list-group nav nav-pills">
         <li class="nav-item active">
             <button class="nav-link btn btn-default" data-toggle="modal" data-target="#addModal">
                 <!-- <img src="img/add2.png" alt=""> -->
                 <i class="fas fa-plus-circle"></i>
                 <span>Thêm Liên hệ</span>
             </button>
         </li>
         <li class="nav nav-item">
             <a class="nav-link" href="">
                 <i class="fas fa-user-circle fa-fw"></i>
                 Danh bạ<span class="badge" style="float: right; background: blue;color: white"><?php echo count($lsFromDB) ?></span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Thường xuyên liên hệ<span class="badge" style="float: right; background: blue;color: white;ra">3</span></span></a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Liên hệ trùng lặp<span class="badge" style="float: right; background: blue;color: white;ra">3</span></span></a>
         </li>
         <div class="dropdown-divider"></div>
         <li class="nav nav-item">
             <a class="nav-link " data-toggle="dropdown" href="#">Nhãn</a>
             <div class="dropdown-menu show" style="width: 230px;border: none;background-color: #212529;">
                 <?php
                    foreach ($lslable as $key => $value) { ?>
                     <a class="dropdown-item text-white" href="#"><?php echo $value->name?>
                    <span class="badge" style="float: right; background: blue;color: white;ra">3</span></a>
                 <?php } ?>

                 <!-- <a class="dropdown-item text-white" href="#">FPT<span class="badge" style="float: right; background: blue;color: white;ra">3</span></a>
                 <a class="dropdown-item text-white" href="#">ai dó<span class="badge" style="float: right; background: blue;color: white;ra">3</span></a>
                 <a class="dropdown-item text-white" href="#">bó tay<span class="badge" style="float: right; background: blue;color: white;ra">3</span></a> -->
             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="" id="addNhan" data-toggle="modal" data-target="#addModalNhan">
                 <i class="fas fa-plus-circle"></i>
                 <span>Tạo nhãn</span></a>
         </li>
     </ul>
     <!-- modal tạo nhãn -->
     <form action="indextt.php" method="post">
         <div class="modal fade" id="addModalNhan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Tạo Nhãn</h5>
                         <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <fieldset>
                             <div class="form-group d-flex">
                                 <label class="pt-1 col-md-3 control-label" for="name">Tên Nhãn:</label>
                                 <div class="col-md-9">
                                     <input id="name2" name="name2" type="text" placeholder="Name" class="form-control input-md">
                                 </div>
                             </div>
                         </fieldset>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" name="addNhan" class="btn btn-primary">Save changes</button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
     <!-- modal thêm-->
     <form action="indextt.php" method="post">
         <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Thêm</h5>
                         <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <fieldset>
                             <div class="form-group d-flex">
                                 <label class="pt-1 col-md-2 control-label" for="Title">Tên</label>
                                 <div class="col-md-10">
                                     <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                 </div>
                             </div>
                             <div class="form-group d-flex">
                                 <label class="pt-1 col-md-2 control-label" for="Title">Email</label>
                                 <div class="col-md-10">
                                     <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
                                 </div>
                             </div>
                             <div class="form-group d-flex">
                                 <label class="pt-1 col-md-2 control-label" for="Year">Phone</label>
                                 <div class="col-md-10">
                                     <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control input-md">
                                 </div>
                             </div>
                         </fieldset>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" name="adddanhba" class="btn btn-primary">Save changes</button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
     <div id="content-wrapper" style="background-color: #f8f9fa;">

         <div class="container-fluid">