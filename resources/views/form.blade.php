<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{ url('/') }}/register" method="post">
        @csrf

        <div class="container bg-info p-4">
            <h2 class="text-center mt-3">Registration Form</h2>

            <x-input type="text" name="name" label="Please Enter Your Name" id="full_name" />
            <x-input type="email" name="email" label="Please Enter Your Email" id="Email" />
            <x-input type="password" name="password" label="Password" />
            <x-input type="confirm_password" name="password" label="Confrim Password" />

            <button class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>
</body>

</html>
