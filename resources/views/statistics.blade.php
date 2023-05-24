<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Statistics page</title>
</head>
<body> 
    <div class="statistics-info">
        <h1>Donation statistics</h1>
        <p>
            You can see donation statistics for the last month below.
        </p>
    </div>
    <div class="card-container">
        <x-cards title="Top Donator"
            :amount="$topDonatorAmount"
            :donator="$topDonatorName"
        ></x-cards>
        <x-cards title="Last Month Amount"
            :amount="$lastMonthAmount"
            donator=""
        ></x-cards>
        <x-cards title="All Time Amount"
            :amount="$allTimeAmount"
            donator=""
        ></x-cards>
    </div>  
    <div class="table-responsive">
        <h2>List of all donations</h2>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Donator Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->donatorname }}</td>
                    <td>{{ $donation->email }}</td>
                    <td>{{ $donation->amount }}</td>
                    <td>{{ $donation->message }}</td>
                    <td>{{ $donation->date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $donations->links() }}
    </div>
</body>
</html>
