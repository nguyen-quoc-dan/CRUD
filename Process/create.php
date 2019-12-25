<?php


include_once "../Database/DBConnect.php";
include_once "../Database/UserDB.php";
include_once "../Class/UserManager.php";
include_once "../Class/User.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $groups = $_POST['groups'];
    $userManager = new UserManager();
    $user = new User($name, $age, $address, $groups);
    $userManager->add($user);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>User name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-6">
                <label>Age </label>
                <input type="number" class="form-control" name="age">
            </div>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="ĐỊA CHỈ" name="address">
        </div>
        <div class="form-group">
            <label>Groups</label>
            <input type="text" class="form-control" placeholder="GROUPS" name="groups">
        </div>
        <div>
            <label>Avatar</label>
            <input type="file" class="form-control" value="Upload" name="avatar">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-success">Add</button>
        <a href="../index.php">
            <button type="button" class="btn btn-outline-dark">Back</button>
        </a>
    </form>
</div>

</body>
</html>