<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Item Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-9">
                <h1>รายการไอเท็มที่สุ่มได้</h1>
            </div>
            <div class="col-md-3 text-end"> 
                <form action="{{ url('/randomitem') }}" method="get">
                    <div class="input-group has-validation">
                        <input type="number" class="form-control" id="qty" name="qty" min="1" value="100" required>
                        <button type="submit" class="btn btn-secondary">สุ่มไอเทม</button>
                        <a href="{{ url('/') }}" class="btn btn-secondary"> ย้อนกลับ </a>
                    </div>
                </form>
            </div>

            @if(isset($error) && count($error)>0)
            <div class="col-md-12 text-center">
                <div> จำนวน stock ทั้งหมด : {{ number_format($error['countstock']) }} </div>
                <div> จำนวนการสุ่ม : {{ number_format($error['itemloop']) }} ครั้ง </div>
                <div class="text-danger"> ผิดผลาด : {{ $error['msg'] }} </div>
            </div>
            @endif

            @if(isset($selectedItems) && count($selectedItems)>0)
            <div class="col-md-12">
                <p> จำนวนที่สุ่มได้ : {{ count($selectedItems) }} ไอเท็ม</p>
            </div>
            @foreach($selectedItems as $row)
            <div class="col-md-2">
                <div class="card mb-2">
                    <div class="card-body">
                        <h6 class="card-title">{{ $row['name'] }}</h6>
                        <div>#ID : {{ $row['game_item_id'] }}</div>
                        <div>Chance : {{ number_format($row['chance']) }}</div>
                        <div>Stock : {{ number_format($row['stock']) }}</div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-12 text-center"> ไม่พบข้อมูล </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>