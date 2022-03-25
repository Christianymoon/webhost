<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
    #name{
        text-align: center;
        color: blue;
        font-size: 150%;
    }
    </style>
</head>
<body>
    <from enctype="multipart/from-data" action="uploader.php" method="POST">
        <p id="name">Subir archivos</p>
        <input type="file" name="uploaded_file"></input><br />
        <input type="submit" value="Upload"></input>
</from>
</body>
</html>