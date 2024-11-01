<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            max-width: 400px;
            margin-top: 100px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 4px;
            box-shadow: none;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            border-color: #000000;
            box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25);
        }
    </style>
</head>

<body>
    <div class="container fw-bold">
        <h3 class="fw-bold text-center mb-100">Signup</h3>
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success') }}
        </div>
        @endif
        @if($errors->any())
        @foreach ($errors->all() as $err)
        <div class="alert alert-danger">
            {{ $err }}
        </div>
        @endforeach
        @endif
        <form method="POST" action="{{ route('storeSignup') }}">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            @csrf
            <button class="btn btn-dark">Submit</button>
            <button type="button" class="btn btn-secondary btn-block" onclick="window.location.href='/'">Back</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>