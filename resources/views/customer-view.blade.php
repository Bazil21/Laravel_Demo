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
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
