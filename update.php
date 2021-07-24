<?php
$con = new mysqli('localhost', 'root', '');
mysqli_select_db($con,'todo');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ToDo Application</title>
</head>

<body>

    <div class="container my-5">
        <?php
            $id=$_GET['id'];
            $r=mysqli_query($con,"SELECT * FROM todo WHERE id='$id'");
            $row=mysqli_fetch_assoc($r);
        ?>
        <form action="./action.php" method="post">
            <input type="hidden" name="id" value=<?php echo $row['id']; ?>>
            <div class="mb-3 ">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value=<?php echo $row['task']; ?> required>
            </div>
            <div class="mb-3 ">
                <label for="des" class="form-label">Address</label>
                <textarea class="form-control" name="des" id="des" rows="3" placeholder="Enter Your Description..."
                    required><?php echo $row['des']; ?></textarea>
            </div>
            <button type="submit" name="update" class="btn btn-success">Update Data</button>
            <button type="button" class="btn btn-danger" onclick="document.location='index.php'">Back</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>