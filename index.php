<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Login Page</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container form-group">
    <form action="process.php" method="post">
            <label for="">Username</label>
            <input type="text" id="user" class="form-control" name="user" />

            <label for="">Password</label>
            <input type="password" id="pass" class="form-control"  name="pass" />
            <input type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>