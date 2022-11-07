<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Hello,{{ $data->name }}!</h1>
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Xác nhận email</h5>
            <p class="card-text">để tránh các trường hợp <br> dùng email không có thật chúng tôi cần xác mi tài khoản
                của bản </p>
            <a href="{{ route('get_confirm_account_register', $data->token) }}" class="btn btn-primary">Email
                VerifyToken</a>
        </div>
    </div>
</body>

</html>
