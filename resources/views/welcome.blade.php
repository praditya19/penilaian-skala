<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 100px;
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1 class="display-4">Welcome to Assessment</h1>
        <h2 class="display-4">EXSEED</h2>
        <h3 class="display-4">Exploration of Self Esteem Model</h3>
        <p class="lead">Silahkan pilih salah satu kuisioner di bawah ini:</p>
        <div class="d-flex justify-content-center">
            <a href="/self-esteem-form" class="btn btn-primary btn-custom">Self Assessment</a>
            <a href="/family-support-form" class="btn btn-success btn-custom">Family Support</a>
            <a href="/adjustment-form" class="btn btn-warning btn-custom">Adjustment</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
