<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Pending</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <img src="{{ asset('BhandaraKaro/images/LOGO1.png') }}" alt="Logo" class="img-fluid mb-4"
            style="max-width: 150px;">
        <h1 class="mt-5">Payment Pending</h1>

        <div class="table-responsive mt-4">
            <table class="table table-bordered table-striped w-auto mx-auto">
                <thead class="thead-dark">
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($response as $key => $value)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <button class="btn btn-primary" onclick="window.print()">Print Page</button>
            <a href="{{ url('/') }}" class="btn btn-success">Redirect to Homepage</a>
        </div>
    </div>
    <!-- Display success message or redirect to a thank you page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
