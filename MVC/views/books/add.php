<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD</title>
    <link rel="stylesheet" href="../../assets/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <script type="text/javascript" src="../../assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../../assets/js/Main.js"></script>
    <link rel="stylesheet" href="../../assets/css/Main.css">
</head>
<body>
<form action="" method="get">
    <div class="form-group">
        <label for="exampleInputEmail1">ID Book</label>
        <input style="width: 50%" type="number" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Book's ID">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Name Book</label>
        <input style="width: 50%" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Book's Name">
    </div>
    <button onclick="return check()" type="submit" id="save">Save</button>
    <button onclick="cancel1()" type="button" id="cancel">Cancel</button>
    <p id="error"></p>
</form>
</body>
</html>