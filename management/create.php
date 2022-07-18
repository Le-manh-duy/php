<?php
//kiem tra from co submit (add)
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    //load connection
    include_once("config.php");

    //them ban ghi moi
    $result = mysqli_query($mysqli,"INSERT INTO student (name,email,mobile)
        VALUES('$name','$email','$mobile')");
    //hien thi khi cap nhat xong
    echo "User added successfully";
}
?>

<html>
<head><title> Add student</title></head>

<body>
<a href="index.php" >Go To Home</a>
<br><br>
<form  name="form" method="POST" action="create.php">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" ></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
</body>
</html>