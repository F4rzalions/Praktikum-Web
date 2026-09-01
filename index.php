<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solomen Temple</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            scroll-behavior: smooth;
            font-family: "Pixelify Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }


        .judul {
            text-align: center;
            font: 30px;
            color: #2c3e50;
            margin: 4px 0px 14px 0px;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            flex-wrap: wrap;
            margin: 0 auto;
        }

        .flex-item {
            background-color: #edcece;
            padding: 30px;
            border-radius: 4px;
            box-shadow: 0 4px 6px rgb(#000000);
            flex: 1;
            min-width: 250px;
            max-width: 350px;
            text-align: center;

        }

        .flex-item h3 {
            color: #3498db;
            margin-top: 0;
            margin-bottom: 4px;
        }

        .flex-item p {
            color: #555;
            font-size: 14px;
            margin-bottom: 8px;
        }
    </style>
</head>

<body>
    <h1 class="judul">Solo-man Temple</h1>


    <div class="container">
        <div class="flex-item">
            <h3>web design</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quas?</p>
            <form action="POST">
                <label for="">Username</label>
                <input type="username">
                <label for="">Password</label>
                <input type="password">
            </form>
        </div>
        <div class="flex-item">
            <h3>Development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, aliquid?</p>
            <form action="POST">
                <label for="">Username</label>
                <input type="username">
                <label for="">Password</label>
                <input type="password">
            </form>
        </div>
        <div class="flex-item">
            <h3>Optimization</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, aliquid?</p>
            <form action="POST">
                <label for="">Username</label>
                <input type="username">
                <label for="">Password</label>
                <input type="password">
            </form>
        </div>
    </div>
</body>

</html>