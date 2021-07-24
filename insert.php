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
        <form action="./action.php" method="post">
            <div class="mb-3 ">
                <label for="name" class="form-label">Task Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Task......" required>
            </div>
            <div class="mb-3 ">
                <label for="des" class="form-label">Description</label>
                <textarea class="form-control" name="des" id="des" rows="3" placeholder="Enter Your Description..." required></textarea>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Add Task</button>
            <button type="button" class="btn btn-danger" onclick="document.location='index.php'">Back</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>