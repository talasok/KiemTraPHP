<?php include_once("header.php") ?>
<?php include_once("nav.php"); ?>
<div class="container bg-light">
    <h2 style="text-align: center;color:  red;">KIỂM TRA</h2>
    <div class="row">
        <div class="container" id="contentajax">
            <table class="table table-borderless" id="dataTable">
                <thead class="thead-dark">
                    <tr style="border-bottom: 1px solid #aba79d;">
                        <th scope="col">Tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr style="border-bottom: 1px solid #aba79d;">
                        <td colspan="15">Danh bạ (<?php echo count($lsFromDB); ?>)</td>
                    </tr> -->
                    <?php
                    foreach ($lsFromDB as $key => $value) {
                        ?>
                        <tr id="<?php echo "tr" ?><?php echo $value->id ?>">
                            <td scope="col"><input type="checkbox" id="<?php echo $value->id ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $value->name ?></td>
                            <td scope="col"><?php echo $value->email ?></td>
                            <td scope="col"><?php echo $value->phone ?></td>
                            <td scope="col"> <button onclick="func(this)" id="editdanhba" data-toggle="modal" data-target="#editModal" class="btn btn-outline-warning" name="BtnEdit" eid="<?php echo $value->id ?>" ename="<?php echo $value->name ?>" eemail="<?php echo $value->email ?>" ephone="<?php echo $value->phone ?>">
                                    <i class="fas fa-edit"></i>Sửa </button>
                                <button onclick="deleteDanhBa(<?php echo $value->id ?>)" type="submit" class="btn btn-outline-danger" nanme="deletedanhba"><i class="fas fa-trash-alt"></i>Xóa </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>

        </div>
    </div>
</div>
<!-- modal sửa -->
<form action="indextt.php" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa</h5>
                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">ID</label>
                            <div class="col-md-10">
                                <input id="id1" name="id" type="text" value="" placeholder="Name" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Tên</label>
                            <div class="col-md-10">
                                <input id="name1" name="name" type="text" value="" placeholder="Name" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Title">Email</label>
                            <div class="col-md-10">
                                <input id="email1" name="email" type="text" value="" placeholder="Email" class="form-control input-md">
                            </div>
                        </div>

                        <div class="form-group d-flex">
                            <label class="pt-1 col-md-2 control-label" for="Year">Phone</label>
                            <div class="col-md-10">
                                <input type="text" id="phone1" name="phone" value="" placeholder="Phone" class="form-control input-md">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="editdanhba" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include_once("footer.php"); ?>