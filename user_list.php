<?php
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
                    <td><?php echo $row["first_name"]; ?></td>
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
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</div>
</main>
</div>
</body>      
</html>