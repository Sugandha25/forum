<?php
    require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['submit'])){
        //$Userame = $_POST['Username'];
        $id = $_POST['Id'];
        $postcontent= $_POST['comment'];
        //$pictures = $_POST['pictures'];
        //$created_on = $_POST['created_on'];
        $subject = $_POST['subject'];
        echo "hi";
        $query = "INSERT INTO postques (id,postcontent,subject) VALUES ('$id','$postcontent','$subject')";
        $result = mysqli_query($connection,$query);
        if($result){
            $smsg = "Posted Successfully.";
        }else{
            $fmsg ="Failed";
        }
    }
    include('post.php');
    ?>
