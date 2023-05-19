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
    <div class="mt-5 container">
        <div class="table-responsive">
            <h4 class="text-center ">Customers Data</h4>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $value)
                        <tr class="">
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>
                                @if ($value->gender == 'M')
                                    Male
                                @elseif($value->gender == 'F')
                                    Female
                                @else
                                    Other
                                @endif
                            </td>
                            <td>{{ $value->dob }}</td>
                            <td>{{ $value->state }}</td>
                            <td>{{ $value->country }}</td>
                            <td>
                                @if ($value->status == 1)
                                    <a href="#">
                                        <span class="badge bg-success">
                                            Active 
                                        </span>
                                    </a>
                                @else
                                    <a href="#">
                                        <span class="badge bg-danger">
                                            Inactive
                                        </span>
                                    </a>
                                @endif
                            </td>
                            <td>
                               <a  class="btn btn-primary" href="{{route('customer.edit',['id' => $value->customer_id])}}"
                                    role="button">Edit</a>
                                <a  class="btn btn-danger" href="{{route('customer.delete',['id' => $value->customer_id])}}"
                                    role="button">Delete</a>
                                    
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
