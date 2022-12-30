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
                <tr>
                    <td>1</td>
                    <td>01/12/2022</td>
                    <td>1000</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>02/12/2022</td>
                    <td>1000</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>03/12/2022</td>
                    <td>1000</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>04/12/2022</td>
                    <td>1000</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>05/12/2022</td>
                    <td>1000</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>06/12/2022</td>
                    <td>1000</td>
                    <td>500</td>
                    <td>500</td>
                </tr>
        </tbody>
    </table>



</body>
</html>