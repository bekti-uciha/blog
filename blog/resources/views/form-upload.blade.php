<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tutorial Upload File Laravel - Belajarphp.net</title>
</head>
<body>
    <h3>Script Upload File</h3>
    <form action="upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="gambar">
    <Br>
    <button type="submit">Upload File</button>
    </form>
</body>
</html>
