<?php
$connect =mysqli_connect("localhost","root","","studentdb1");

//check connect

if (isset($_REQUEST["term"])){

    $sql = "SELECT *FROM student WHERE name LIKE ?";
    if($stmt =mysqli_prepare($connect,$sql)){
        mysqli_stmt_bind_param($stmt,"s",$param_term);

        $param_tem=$_REQUEST["term"]. '%';

        if(mysqli_num_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["name"]."</p>";
                }
            }else{
                echo "<p> No matches found </p>";
            }
        }else{
            echo "ERROR : could not able to execute $sql. ". mysqli_error($link);
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($connect);


?>