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
        <button type="button" class="btn btn-primary" onclick="document.location='insert.php'">Add Data</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Task</th>
                    <th scope="col">Description</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $r=mysqli_query($con,"SELECT * FROM todo");
                    $i=1;
                    while($row=mysqli_fetch_assoc($r)){
                ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $row['task'] ?></td>
                    <td><?php echo $row['des'] ?></td>
                    <td>
                        <form action="update.php?id=<?php echo $row['id'] ?>" method="post">
                            <button name="update" class="btn btn-success waves-effect"
                                onclick="return confirm('Do you want to update?');">
                                Update
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="action.php?id=<?php echo $row['id'] ?>" method="post">
                            <button name="delete" class="btn btn-danger btn-sm rounded-0 delete waves-effect"
                                onclick="return confirm('Do you want to Delete?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>