{{-- @php
    print_r($students);
@endphp --}}

{{-- @foreach ($students as $student)
  {{$student -> first_name}}
@endforeach  --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Students</title>
</head>
<body>
  <ul>
    @foreach ($students as $student)
    <li>{{$student -> first_name}} {{$student -> last_name}} {{ $student -> age}} </li>
    {{-- <li>{{$student -> gender}} {{$student -> gender_count}}</li> --}}
    @endforeach
  </ul>
</body>
</html>