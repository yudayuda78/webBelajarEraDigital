
@extends('layouts.main2')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticy Kit | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        /* navbar */
.navbar{
    background-color: #5259FF;
}

.btn{
    color: white;
    width: 5em;
    
}


.carousel-item{
    height: 50vh;
}

.card-content{
    height: 500px;
    width: 1000px;
}

.card{
    margin-left: 30px;
    margin-top: 5px;
}


footer{
    background-color: #5259FF;
    color: white;
    font-size: 1rem;
}

    </style>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Sora&display=swap" rel="stylesheet">
  </head>


@section('container')
@include('layouts.navbar')
@include('layouts.carousel')
@include('layouts.content')
@include('layouts.footer')

<script>
    $(document).ready(function () {
        $("select[name='category']").val("{{ request('category') }}");
        $("select[name='kelas']").val("{{ request('kelas') }}");
        
        $("select[name='category']").change(function () {
            $(this).closest("form").submit();
        });

        $("select[name='kelas']").change(function () {
            $(this).closest("form").submit();
        });
    });
</script>


@endsection

