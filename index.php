<?php
    include_once "Class/User.php";
    include_once "Class/UserManager.php";
    include_once "Database/DBConnect.php";
    include_once "Database/UserDB.php";


$userManager = new UserManager();
$user = $userManager->getList();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
    <a href="Process/create.php">
        <button type="button" class="btn btn-outline-success" >Creat</button>
    </a>

    <!--FORM-->
    <form class="form-inline my-2 my-lg-0" id="formSearchs" >
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"style=" width:350px">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">NAME</th>
            <th scope="col">AGE</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">GROUP</th>
            <th scope="col">AVATAR</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($user as $key=> $value):
            ?>
            <tr>
                <th scope="row"><?php echo ++$key ?></th>
                <td><?php echo $value->getName() ?></td>
                <td><?php echo $value->getAge() ?></td>
                <td><?php echo $value->getAddress() ?></td>
                <td><?php echo $value->getGroups() ?></td>
                <td><?php echo '#' ?></td>
                <td>
                    <a href="Process/edit.php?index=<?php echo $value->getId() ?>">
                        <button type="button" class="btn btn-outline-info">Edit</button>
                    </a>
                </td>
                <td>
                    <a href="Process/delete.php?index=<?php echo $value->getId() ?>">
                        <button type="button" class="btn btn-outline-danger ">Delete</button>
                    </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>

</div>
</div>
</body>
</html>