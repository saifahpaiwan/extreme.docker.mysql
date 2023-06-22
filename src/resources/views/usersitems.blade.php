<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <h1>Users Account</h1>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> username </th>
                                <th> company </th>
                                <th> nationality </th>
                                <th> created_at </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($users) && count($users))
                            @foreach($users as $row)
                            <tr>
                                <td> {{ $row->name }} </td>
                                <td> {{ $row->phone }} </td>
                                <td> {{ $row->email }} </td>
                                <td> {{ $row->username }} </td>
                                <td> {{ $row->company }} </td>
                                <td> {{ $row->nationality }} </td>
                                <td> {{ $row->created_at }} </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="7"> ไม่พบข้อมูล </td>
                            </tr> 
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>