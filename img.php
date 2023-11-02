
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMG</title>
</head>
<body>
    <form method="post" action="img2.php" enctype="multipart/form-data">
        <label for="image" >Select image file</label>
        <input type="file" name="my_image" id="image" class="form-control" >
        <br>
        <input type="submit" name="btnSave" value="Save">
    </form>
</body>
</html>