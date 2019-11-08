
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script>
    function func(a){

        var eId = a.getAttribute('eid');
        var eName = a.getAttribute('ename');
        var eEmail = a.getAttribute('eemail');
        var ePhone = a.getAttribute('ephone');
        console.log(eId);       
        var id = document.getElementById("id1");
        var name = document.getElementById("name1");
        var email = document.getElementById("email1");
        var phone = document.getElementById("phone1");
        
        console.log(eName);
        
        id.value = eId;
        name.value = eName;
        email.value = eEmail;
        phone.value = ePhone;
    }
</script>
 <!-- ajax delete -->
 <script>
        function deleteDanhBa(id) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let a = document.getElementById('tr'+id);
                    a.remove();
                    alert('xóa thành công');
                }
            };
            xmlhttp.open("GET", "delete.php?id=" + id, true);
            xmlhttp.send();
        }
        function searchDanhBa() {
            let val = document.getElementById('search').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('contentajax').innerHTML=this.responseText;
                    $('#dataTable').DataTable();
                }
            };
            xmlhttp.open("GET", "search.php?name=" + val, true);
            xmlhttp.send();
        }
    </script>
</body>

</html>