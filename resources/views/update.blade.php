<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <div class="container-fluid" >
        <h1>Update Values</h1>
    </div>
    <div>
        <form action="/save_updated_value" method="Post" >
            @csrf
            <div>
                <input type="hidden" name="id" value="{{ $value->id }}" id="">
                <input type="text" name="name" value="{{ $value->name }}" id="">
                <input type="email" name="email" value="{{ $value->email }}"  id="">
                <button type="submit" >Update</button>
            </div>
        </form>
    </div>
    
</body>
</html>