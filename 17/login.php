<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            background-color: #eee;
            margin: 300px;
            border: 1px solid black;

        }

        th {
            background-color: #ddd;
            padding: 0px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="home.php" method="post">
        <table>
            <tr>
                <th>Login</th>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="email" name="uname"></td>
            </tr>
            <tr>
                <td>Pssword</td>
                <td><input type="password" name="psw"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="login" value="login"></td>
            </tr>


        </table>
    </form>

</body>

</html>