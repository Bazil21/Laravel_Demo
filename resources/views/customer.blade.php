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
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f093fb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar container p-3 navbar-expand-sm navbar-dark bg-primary">

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/customer') }}">View Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.create') }}">Create Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About Page</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-10 col-xl-10">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-2 p-md-5">
                            <h3 class="mb-2 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form action="{{ url('/') }}/customer" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-2 ">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" name="name"
                                                class="form-control  form-control-lg" />
                                            <label class="form-label " for="firstName">Name</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="email" id="lastName" name="email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Email</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="password" id="Password" name="password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="Password">Password</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <div class="form-outline">
                                            <input type="password" id="Cpassword" name="confirm_password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="Cpassword">Confirm Password</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('confirm_password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="date" name="dob" class="form-control form-control-lg"
                                                id="birthdayDate" />
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('dob')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-2">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="femaleGender" value="F" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="maleGender" value="M" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="otherGender" value="O" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('gender')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-2 pb-2">

                                        <div class="form-outline">
                                            <input type="text" id="Country" name="country"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="Country">Country</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('country')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6 mb-2 pb-2">

                                        <div class="form-outline">
                                            <input type="text" id="State" name="state"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="State">State</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('state')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-outline">
                                            <input type="text" id="Address" name="address"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="Address">Address</label>
                                        </div>
                                        <span class="text-danger">
                                            @error('address')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
