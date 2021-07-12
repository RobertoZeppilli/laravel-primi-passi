<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
        }
        header,
        main,
        footer {
            display: flex;
            align-items: center;
        }
        header {
            justify-content: space-between;
            height: 70px;
            padding: 0 10px;
            border-bottom: 1px solid #636b6f;
        }
        .links a {
            text-decoration: none;
            color: #636b6f;
            margin-left: 10px;
        }
        main {
            justify-content: center;
            height: calc(100% - 120px);
            border-bottom: 1px solid #636b6f;
        }
        footer {
            justify-content: center;
            height: 50px;
        }
    </style>
    <title>Primi passi con Laravel</title>
</head>
<body>
    <header>
        <h1>Primi passi con Laravel - Chi Siamo</h1>
        <div class="links">
            <a href="http://127.0.0.1:8000/home">Home</a>
            <a href="http://127.0.0.1:8000/contatti">Contatti</a>
            <a href="http://127.0.0.1:8000/chi-siamo">Chi Siamo</a>
        </div>
    </header>
    <main>
        <section>
            <h2>Descrizione</h2>
            <p>{{ $description }}</p>
        </section>
    </main>
    <footer>
        <h5>Copyright &copy; Laravel &hearts;</h5>
    </footer>
</body>
</html>