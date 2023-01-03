<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Selling</h1>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Amount</td>
                <td>Created_at</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($selling as $sellings)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Rp. {{ number_format($sellings->amount) }}</td>
                    <td>{{ $sellings->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br><br><br>
    <hr>

    <h1>COST</h1>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Amount</td>
                <td>Created_at</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($cost as $costs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>Rp. {{ number_format($costs->amount) }}</td>
                    <td>{{ $costs->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br><br><br>
    <hr>

    <h1>REPORT</h1>
        <table>
        <thead>
            <tr>
                <td>#</td>
                <td>DATE</td>
                <td>SELLING</td>
                <td>COST</td>
                <td>TOTAL</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $date => $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $date->created_at }}</td>
                    <td>{{ $d->total_selling }}</td>
                    <td>{{ $d->total_cost }}</td>
                    <td>{{  ($d->total_selling)+($d->total_cost) }}</td>
                </tr>
            @endforeach
                
        </tbody>
    </table>



</body>
</html>