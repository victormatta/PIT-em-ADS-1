<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];

    if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        $message = "Email successfuly validated!";
    } else {
        $message = "Try again please!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="nav-bar">
        <h1>Projeto Validação de E-mail</h1>
    </div>
    <form action="validationEmail" method="post">
        <div class="text">
            <input type="text" name="email" id="email" placeholder="Type your e-mail">
        </div>

        <div class="button">
            <button type="submit">Send</button>
        </div>

        <div class="message">
            <?php if (isset($message)): ?>
                <div>
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
        </div>
    </form>
</body>

</html>

<style>
    body {
        background-color: #525252;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .nav-bar {
        background-color: #2525FF;
        width: 100%;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .nav-bar h1 {
        font-weight: bold;
    }

    .nav-bar h1:hover {
        text-decoration: underline;
    }

    .text {
        display: flex;
        width: 100%;
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    .text input {
        display: flex;
        margin: 10px;
        padding: 15px;
        border-radius: 5px;
        font-size: 15px;
        font-weight: bold;
        width: 300px;
    }

    .button {
        display: flex;
        width: 100%;
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    .button button {
        background-color: #DD00FF;
        width: 115px;
        height: 45px;
        justify-content: center;
        align-items: center;
        font-size: 17px;
        font-weight: bold;
        cursor: pointer;
        border: none;
        border-radius: 10px;
        transition: filter 0.2s;
    }

    .button button:hover {
        filter: brightness(0.9);
    }

    .message {
        display: flex;
        width: 100%;
        height: 100px;
        justify-content: center;
        align-items: center;
        font-size: 30px;
    }
</style>