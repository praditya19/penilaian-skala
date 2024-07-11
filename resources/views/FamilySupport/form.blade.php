<!DOCTYPE html>
<html>

<head>
    <title>Family Support Assessment</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
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
            margin-top: 100px;
            background: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #fff;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .accordion {
            margin-bottom: 20px;
        }

        .accordion-item {
            border-bottom: 1px solid #ddd;
        }

        .accordion-item-header {
            padding: 10px;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.2);
            font-weight: bold;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: background-color 0.3s;
            color: #fff;
        }

        .accordion-item-header:hover {
            background-color: #ececec;
        }

        .accordion-item-body {
            display: none;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 5px;
            background: rgba(255, 255, 255, 0.2);
            transition: max-height 0.2s ease-out;
        }

        .accordion-item-body-content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .form-group {
            flex: 1 1 calc(50% - 20px);
            display: flex;
            flex-direction: column;
        }

        select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            font-size: 1em;
            background: rgba(255, 255, 255, 0.2);
            ;
        }

        select:focus {
            border-color: #007BFF;
            outline: none;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #fff;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            font-size: 1em;
            background-color: #f9f9f9;
            margin-top: 5px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            padding: 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            margin-top: 20px;
            width: 100%;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        button:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-size: 0.9em;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
            color: #fff;
        }

        p span {
            font-weight: bold;
            margin-right: 10px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Family Support Assessment</h1>
        <form id="family-support-form" action="/family-support-answers" method="POST">
            @csrf
            <div id="step-1">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required oninput="validateStep1()">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required oninput="validateStep1()">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" name="phone" required oninput="validateStep1()">
                </div>
                <button type="button" id="next-button" class="disabled" onclick="nextStep()">Next</button>
            </div>
            <div id="step-2" style="display:none;">
                <p>
                    <span>SS:</span> Sangat Setuju - Responden sangat setuju dengan pernyataan yang diberikan.<br><br>
                    <span>S:</span> Setuju - Responden setuju dengan pernyataan yang diberikan, meskipun mungkin tidak sepenuhnya.<br><br>
                    <span>TS:</span> Tidak Setuju - Responden tidak setuju dengan pernyataan yang diberikan.<br><br>
                    <span>STS:</span> Sangat Tidak Setuju - Responden sangat tidak setuju dengan pernyataan yang diberikan.<br>
                </p>
                <div class="accordion">
                    @foreach ($questions->chunk(5) as $chunkIndex => $chunk)
                    <div class="accordion-item">
                        <div class="accordion-item-header">Section {{ $chunkIndex + 1 }}</div>
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                                @foreach ($chunk as $questionIndex => $question)
                                <div class="form-group">
                                    <label for="statement_{{ $question->id }}">{{ $questionIndex + 1 }}. {{ $question->question_text }}</label>
                                    <select name="statement_{{ $question->id }}" id="statement_{{ $question->id }}" required>
                                        <option value="">Select an option</option>
                                        <option value="1">SS</option>
                                        <option value="2">S</option>
                                        <option value="3">TS</option>
                                        <option value="4">STS</option>
                                    </select>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button type="submit">Submit</button>
            </div>
        </form>
        <div class="footer">
            &copy; 2024 Family Support Assessment. All rights reserved.
        </div>
    </div>

    <script>
        function validateStep1() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const nextButton = document.getElementById('next-button');

            if (name && email && phone) {
                nextButton.disabled = false;
                nextButton.classList.remove('disabled');
            } else {
                nextButton.disabled = true;
                nextButton.classList.add('disabled');
            }
        }

        function nextStep() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;

            if (!name || !email || !phone) {
                alert('Semua form wajib diisi');
                return;
            }

            document.getElementById('step-1').style.display = 'none';
            document.getElementById('step-2').style.display = 'block';
        }

        document.querySelectorAll('.accordion-item-header').forEach(header => {
            header.addEventListener('click', () => {
                const currentlyActiveHeader = document.querySelector('.accordion-item-header.active');
                if (currentlyActiveHeader && currentlyActiveHeader !== header) {
                    currentlyActiveHeader.classList.toggle('active');
                    currentlyActiveHeader.nextElementSibling.style.display = 'none';
                }

                header.classList.toggle('active');
                const accordionBody = header.nextElementSibling;
                if (header.classList.contains('active')) {
                    accordionBody.style.display = 'block';
                } else {
                    accordionBody.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>