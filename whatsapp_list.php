<?php
include("dashboard.php");
include("config.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$conn->close();
?>
<main class="page-content">
<div class="container alert alert-primary">
    <!----Row -->
    <div class="row">
        <!----Users List -->
        <div class="col-4" style="background-color:yellow;border: 1px solid red;">
            <?php while($row = $result->fetch_assoc()) { ?>
                <div class="row">
                    <div class="col" style="border-bottom: 1px solid grey;"><?php echo $row["first_name"]." ".$row["last_name"]; ?></div>
                </div>
            <?php } ?>
        </div>
        <!----Messages Column -->
        <div class="col-8">
            <!----Messages List -->
            <div class="row">  
                <div class="col" style="margin-top: 0px; margin-bottom: 0px; height: 400;">
                    Previous Messages
                    Previous Messages
                    Previous Messages
                    Previous Messages
                    Previous Messages
                </div>
            </div> 
            <!----Messages Textarea -->
            <div class="row">  
                <div class="col">
                    <textarea class="form-control" style="margin-top: 0px; margin-bottom: 0px; height: 100px;"></textarea>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </div>

    </div>
</div>
</main>
</body>
</html>