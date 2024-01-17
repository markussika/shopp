<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
    form{
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        gap:10px;
        align-items: center;
    }
    h1{
        text-align: center;
    }
    form button{
        width: 100px;
    }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="/register">
    @csrf
    <label>
    <span>Username:</span>
    <input name="username">
    </label>

    <label
    ><span>Email:</span>
    <input type="email" name="email">
    </label>

    <label>
    <span>Password:</span
    ><input type="password" name="password">
    </label>
    <button>Submit</button>
    </form>
</body>
</html>