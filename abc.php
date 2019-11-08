<?php
include_once("header.php");
include_once("model/danhba.php");
$lsFromDB = DanhBa::getListFromDB();
?>
<div class="container bg-light">
    <h2 style="text-align: center;color:  red;">KIỂM TRA</h2>
    <header class="">
        <div class="pos-f-t navbar navbar-light bg-light">

            <div class="col-md-3">
                <i class="navbar-toggler-icon"></i>
                <img src="img/contacts_48dp.png" alt="1" style="width: 40px;height: 40px;">
                <span>danh bạ</span>
                <!-- <i class="fas fa-bars"></i> -->
            </div>
            <div class="input-group md-form form-sm form-1 pl-0 col-md-9">
                <div class="input-group-prepend">
                    <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-white" aria-hidden="true"></i></span>
                </div>
                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
            </div>
        </div>

    </header>
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="nav-item active">
                    <a class="nav-link"  href="abc.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>thêm liên hệ</span>
                    </a>
                </li>

                <li class="list-group-item">
                    <a class="nav-link" style="color: black;" href="abc.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Danh bạ<span class="badge">14</span></span></a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" href="abc.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Thường xuyên liên hệ<span class="badge">14</span></span></a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link"  href="abc.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Liên hệ trùng lặp<span class="badge">14</span></span></a>
                </li>
                <hr>
                <li class="list-group-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">Nhãn</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">FPT</a>
                        <a class="dropdown-item" href="#">ai dó</a>
                        <a class="dropdown-item" href="#">bó tay</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-9">

            <table class="table table-borderless">
                <thead class="thead-dark">
                    <tr style="border-bottom: 1px solid #aba79d;">
                        <th colspan="5">Tên</th>
                        <th colspan="6">Email</th>
                        <th colspan="2">Số điện thoại</th>
                        <th colspan="2">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #aba79d;">
                        <td colspan="15">Người liên hệ có gắn dấu sao (3)</td>
                    </tr>
                    <?php
                    foreach ($lsFromDB as $key => $value) {
                        ?>
                        <tr>
                            <td colspan="5"><input type="checkbox" id="<?php echo $value->id ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $value->name ?></td>
                            <td colspan="6"><?php echo $value->email ?></td>
                            <td colspan="2"><?php echo $value->phone ?></td>
                            <td colspan="2"> <button onclick="func(this)" id="editdanhba" data-toggle="modal" data-target="#editModal" class="btn btn-outline-warning" name="BtnEdit" >
                                    <i class="fas fa-edit"></i>Sửa </button>
                                <button href="abc.php?action=xoa&&id=<?php echo $value->id ?>" type="submit" class="btn btn-outline-danger" nanme="deletedanhba"><i class="fas fa-trash-alt"></i>Xóa </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tbody>
                    <tr style="border-bottom: 1px solid #aba79d;">
                        <td colspan="15">Danh bạ (20)</td>
                    </tr>
                    <?php
                    foreach ($lsFromDB as $key => $value) {
                        ?>
                        <tr>
                            <td colspan="5"><input type="checkbox" id="<?php echo $value->id ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $value->name ?></td>
                            <td colspan="6"><?php echo $value->email ?></td>
                            <td colspan="2"><?php echo $value->phone ?></td>
                            <td colspan="2"> <button onclick="func(this)" id="editdanhba" data-toggle="modal" data-target="#editModal" class="btn btn-outline-warning" name="BtnEdit" >
                                    <i class="fas fa-edit"></i>Sửa </button>
                                <button href="abc.php?action=xoa&&id=<?php echo $value->id ?>" type="submit" class="btn btn-outline-danger" nanme="deletedanhba"><i class="fas fa-trash-alt"></i>Xóa </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>

        </div>
    </div>
</div>


<?php include_once("footer.php") ?>