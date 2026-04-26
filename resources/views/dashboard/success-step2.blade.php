

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ebebeb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .modal-card {
            width: 320px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .modal-header {
            background-color: #7cc27e;
            padding: 40px 20px 30px;
            text-align: center;
        }

        .modal-header .icon {
            width: 60px;
            height: 60px;
            border: 2px solid white;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: white;
        }

        .modal-header .text {
            color: white;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
        }

        .modal-body {
            padding: 30px 20px 25px;
            text-align: center;
        }

        .modal-body p {
            font-size: 14px;
            color: #444;
            margin-bottom: 25px;
        }

        .continue-btn {
            background-color: #7cc27e;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: background 0.3s ease;
        }

        .continue-btn:hover {
            background-color: #6ab76e;
        }
    </style>
</head>
<body>

    <div class="modal-card">
        <div class="modal-header">
            <div class="icon">✔</div>
            <div class="text">SUCCESS</div>
        </div>
        <div class="modal-body">
            <p>Congratulations, your account has been successfully created.</p>
            <button class="continue-btn" onclick="goToDashboard()">Continue</button>
        </div>
    </div>

    <script>
        function goToDashboard() {
            window.location.href = "{{ route('home') }}";
        }
    </script>

</body>
</html>


    <form id="redirectForm" action="{{ route('home') }}" method="GET" style="display: none;">
        @foreach ($data as $key => $value)
            <input type="hidden" name="{{ $key }}" value="{{ is_array($value) ? json_encode($value) : $value }}">
        @endforeach
    </form>

    <script>
        function goToDashboard() {
            document.getElementById('redirectForm').submit();
        }
    </script>

</body>
</html>
