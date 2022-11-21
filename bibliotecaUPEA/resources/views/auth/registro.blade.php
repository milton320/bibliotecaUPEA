<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/registro" method="POST">
        @csrf
        <label for="">usuario</label><br>
        <input type="text" name="name"><br>
        <label for="">email</label><br>
        <input type="text" name="email"><br>
        <label for="">rol</label><br>
        <select name="rol"> <br>
            <option value="estudiante">estudiante</option>
            <option value="administrador">admin</option>
        </select><br>
        <label for="">pasord</label><br>
        <input type="text" name="password"><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>