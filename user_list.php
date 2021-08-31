<?php
session_start();
include("dashboard.php");
include("config.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$conn->close();
?>
<main class="page-content">
<div class="container-fluid">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Img</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email </th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <?php $file_name = ($row["file_name"]!='' )? "uploads/".$row["file_name"] : "uploads/default.png"; ?>
                <tr>
                    <td><img title="<?php echo $file_name; ?>" width="50" height="50" src="<?php echo $file_name; ?>"></td>
                    <td><?php echo $row["first_name"]; ?></td>
                    <td><?php echo $row["last_name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["mobile_no"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td>
                        <a href="/edit_user.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm rounded-0">
                            <i class="fa fa-edit"> </i>
                        </a>
                        <button onclick="return deleteUser(<?php echo $row["id"]; ?>)" type="button" class="btn btn-danger btn-sm rounded-0">
                            <i class="fa fa-trash"> </i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
            </tr>
        </tfoot>
    </table>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function deleteUser(id) {
        if (confirm("Press a button!")) {
            console.log("ok Button Clicked");
            $.ajax({
                url: "http://localhost:9000/delete_user.php?id="+id,
                success: function(result){
                    console.log("response => "+result);
                    $("#response").html(result);
                },
                error: function(err){
                    console.log(err);
                }
            });
        } else {
            console.log("cancel Button Clicked");
        }
    }

    function editUser() {

    }
</script>
</div>
</main>
</div>
</body>      
</html>