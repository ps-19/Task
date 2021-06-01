<?php

        if(isset($_POST['create'])){
                $first=$_POST['firstname'];
                $middle=$_POST['middlename'];
                $last=$_POST['lastname'];
                $email=$_POST['email'];
                $phone=$_POST['phonenumber'];
                $password=sha1($_POST['password']);  // encryption of password

                $sql="INSERT INTO users (firstname,middlename,lastname,email,phonenumber,password) VALUES(?,?,?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result=$stmtinsert->execute([$first,$middle,$last,$email,$phone,$password]);
        }

?>