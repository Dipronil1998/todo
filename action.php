<?php

$con = new mysqli('localhost', 'root', '');
mysqli_select_db($con,'todo');

if (isset($_POST['insert'])){
    $name=$_POST['name'];
    $des=$_POST['des'];


    $r=mysqli_query($con,"INSERT INTO todo VALUES(null,'$name','$des')");
    if($r==1)
        echo "<script>alert('Task added Successfully');location.href='index.php'</script>";
    else
        echo "<script>alert('Task added failed');location.href='index.php'</script>";
}

if (isset($_POST['delete'])){
    $id=$_GET['id'];
    $r=mysqli_query($con,"DELETE FROM todo WHERE id='$id'");
    if($r==1)
        echo "<script>alert('Data delete Successfully');location.href='index.php'</script>";
    else
        echo "<script>alert('Data delete failed');location.href='index.php'</script>";
}

if (isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $des=$_POST['des'];


    $r=mysqli_query($con,"UPDATE todo SET task='$name',des='$des' WHERE id='$id'");
    if($r==1)
        echo "<script>alert('Task updated Successfully');location.href='index.php'</script>";
    else
        echo "<script>alert('Task updated failed');location.href='index.php'</script>";
}


?>