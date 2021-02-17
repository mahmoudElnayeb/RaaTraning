<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Save  File</title>
</head>
<body>
    <h1> Save File In FileSystem </h1>

    <button onclick= {{ url()->to('fil/en') }}> Arabic </button>
    <button onclick= {{ redirect('/fil/en')}}> English </button>

    <form action="{{route('files.store')}}" method="POST">
        <input type="hidden" name="_token" value={{ csrf_token() }}>
    <label for="title"> {{trans('title.title') }} </label>
    <br>
        <input type="text" name="title" id="title">
        <br><br>
        <label for="content"> {{ trans('title.content') }}</label>
        <br>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Add Inforamtion here"></textarea>
        <br>
        <input type="submit" value=" {{ trans('title.send') }}">
</body>
    </form>
</html>