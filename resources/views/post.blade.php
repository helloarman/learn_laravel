@extends('welcome')
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/posts.css">


@section('datax')
    <div class="center">
    <?php $post; ?>
        <br><br>
        <button class="btn btn-color btn-lg txt-color" type="button" style="font-size: 15px;" onclick="window.location.href='/posts'">Go Back</button>
    </div>
@endsection