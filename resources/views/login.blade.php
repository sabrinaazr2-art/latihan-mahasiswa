<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding-top: 40px;
        }
        h2 {
            text-align: center;
            color: salmon;
            font-weight: bolder;
        }
        .form-login {
            border: 2px solid skyblue;
            width: 30%;
            min-width: 320px;
            border-radius: 30px;
            box-shadow: 5px 8px 3px 2px navy;
            background-color: white;
            padding: 25px 15px;
            box-sizing: border-box;
        }
        .input {
            width: 80%;
            height: 40px;
            border-radius: 20px;
            font-size: 15px;
            color: #333;
            padding: 2px 15px;
            border: 1px solid #ccc;
            outline: none;
            box-sizing: border-box;
        }
        .input:focus {
            border-color: skyblue;
        }
        .tombol {
            width: 50%;
            height: 50px;
            border-radius: 20px;
            background-color: lightsalmon;
            color: white;
            font-weight: bolder;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        .tombol:hover {
            background-color: #f76c6c;
        }
    </style>
</head>
<body>
    <h2 class="judul">Login Users</h2>
    <center>
        <form method="POST" action="/login">
            @csrf
            <div class="form-login">
                <p><input type="text" class="input" name="email" placeholder="Masukan Email" required></p>
                <p><input type="password" class="input" name="password" placeholder="Password Anda" required></p>
                <p>
                    <button class="tombol" type="submit">LOGIN</button>
                </p>
            </div>
        </form>
    </center>
</body>
</html>
