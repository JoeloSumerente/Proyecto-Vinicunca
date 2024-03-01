<!DOCTYPE html>
<html>
<head>
    <title>Contador</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 10px;
        }

        .number {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        require "../controllers/botones.php";
        ?>
    </div>
</body>
</html>