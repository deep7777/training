<?php
include("../dashboard.php");
include("../config.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$conn->close();

?>

<main class="page-content">
<div class="container-fluid">
    <div id="response"></div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email </th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td onclick="return getUserDetails(<?php echo $row["id"]; ?>)"><?php echo $row["id"]; ?></td>
                    <td onclick="return getUserDetails()"><?php echo $row["first_name"]; ?></td>
                    <td><?php echo $row["last_name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["mobile_no"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
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
    function getUserDetails(id) {
        console.log("get user details ...."+id);
        // calling php server to get the details of user
        // https://api.jquery.com/jquery.ajax/
        // https://www.w3schools.com/jquery/ajax_ajax.asp
        // https://codebeautify.org/jsonviewer
        $.ajax({
            url: "http://localhost:9000/javascript/getUserDetails.php?id="+id,
            success: function(result){
                console.log("response => "+result);
                $("#response").html(result);
            },
            error: function(err){
                console.log(err);
            }
        });
    }

</script>
</div>
</main>
</div>
</body>      
</html>