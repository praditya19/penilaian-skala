<!DOCTYPE html>
<html>

<head>
    <title>Self Esteem Result</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: auto;
        }

        .container {
            background: rgba(255, 255, 255, 0.2);
            padding: 40px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            color: #fff;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            color: #fff;
            font-size: 1.2em;
            margin: 10px 0;
        }

        .score-box {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .category {
            font-size: 1.8em;
            font-weight: bold;
            color: #fff;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Self Esteem Result</h1>
        <div class="score-box">
            <p>Total Score: {{ $total_score }}</p>
            <p>Average Score: {{ $average_score }}</p>
        </div>
        <p class="category"><span>Category: {{ $category }}</span></p>
        <div class="footer">
            &copy; 2024 Self Esteem Assessment. All rights reserved.
        </div>
    </div>
</body>

</html>