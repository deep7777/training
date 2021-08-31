<?php
include("dashboard.php");
include("config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM users where id = '".$_GET['id']."'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

if(isset($_POST)) {
    // Create connection
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $file_name = '';
    $target_path = "uploads/";

    // Note  In your "php.ini" file, search for the file_uploads directive, and set it to On:
    // file_uploads = On
    // if your file is not uploading then check directory permissions if it is write instead of read.
    // https://www.php.net/manual/en/function.move-uploaded-file.php
    
    $base_name = basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($base_name,PATHINFO_EXTENSION));
    $txt_file_name = "file_".rand().".".$imageFileType;
    $target_path = $target_path . $txt_file_name;
    
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
        $file_name = $txt_file_name;
    } 

    if($_POST["first_name"]!='' && $_POST['last_name']!='')  {
        $sql = "UPDATE users  set first_name = '".$_POST["first_name"]."' 
        , last_name = '".$_POST["last_name"]."' , email = '".$_POST["email"]."'
        , mobile_no = '".$_POST["mobile_no"]."'
        , address =  '".$_POST["address"]."'
        , username = '".$_POST["username"]."' 
        , pwd = '".md5($_POST["password"])."'
        , file_name = '".$file_name."' 
        where id = '".$_GET['id']."' ";
         if ($conn->query($sql)) {
            header("location:user_list.php");
            exit;
         }

         if ($mysqli->errno) {
            printf("Could not update table: %s<br />", $mysqli->error);
         }

    }
    
}

?>
<main class="page-content">
<div class="container-fluid">

<form action="edit_user.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left"></div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Add User</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="first_name" name="first_name" required class="form-control" placeholder="First Name" 
                                    value="<?php echo $row['first_name']; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="last_name" name="last_name" required class="form-control" placeholder="Last Name" 
                                    value="<?php echo $row['last_name']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="username" name="username" required class="form-control" placeholder="Username" 
                                    value="<?php echo $row['username']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required placeholder="Your Email" 
                                    value="<?php echo $row['email']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="mobile_no" class="form-control" placeholder="Your Phone *"
                                     value="<?php echo $row['mobile_no']; ?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" required class="form-control" placeholder="Password" 
                                    value="<?php echo $row['pwd']; ?>"/>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" class="form-control" id="address" rows="3"><?php echo $row['address']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="fileToUpload" class="form-label">Select image to upload:</label>
                                    <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" rows="3"></textarea>
                                </div>
                                <input type="submit" name="submit" class="btnRegister"  value="Submit"/>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</main>
</div>
</body> 
</html>
 <style type="text/css">
 .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}    
 </style>           