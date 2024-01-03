{{-- @dd stand for die dump --}}
{{-- @dd($data); for testing--}}

{{-- {{}} it means mashtash--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User {{$name}}</title>
</head>
<body>
    <h3>{{$id}}</h3>
    <h3>{{$name}}</h3>
    <h3>{{$gender}}</h3>
    <h3>{{$age}}</h3>
    <h3>{{print_r($data)}}</h3>
</body>
</html>