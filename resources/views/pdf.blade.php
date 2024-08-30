<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <center><h1>{{ $sample->module_name }} | {{ $sample->module_code }}</h1></center>
    <center><h4>({{ $sample->assignment_title}})</h4></center><br>
    <p>{{$sample->pages}}pages |{{$sample->words}}words |{{ $sample->created_at->format('d-M-Y') }}</p><br>
    <h3>Price : {{$sample->pricing}}</h3><br>
    <p>{!! $sample->details !!}</p>
    <!-- Add other sample data as needed -->
</body>
</html>
