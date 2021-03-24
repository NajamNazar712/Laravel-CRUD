<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container-fluid  " >
        <h1 class="text-center" >Laravel CRUD </h1>
        <div class="container bg-white border border-dark my-2 " >

           <form action="{{ '/save_value' }}" method="POST" class=""  >
            @csrf
            <div class="pt-4" >
                Name: 
                <input class="w-100 mb-4  " type="text" name="name" id="" required >
            </div>
            <div >
                Email:
                <input class="w-100 mb-4 " type="email" name="email" id="" required>
            </div>
            <div class="pb-5" >
                <button class="btn-sm btn-success px-4 " type="submit " >Add</button>
            </div>
           </form>
        </div>
        <div class="container  border border-dark mb-2 " >
            <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $value as $item )
                        
                    
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <button class="btn-sm btn-danger  " >
                                <a href="delete/{{ $item->id }}" class="text-dark px-3" >Delete</a>
                            </button>
                            <button class=" btn-sm btn-warning " >
                                <a href="update/{{ $item->id  }}"   class="text-dark px-3 " >Update</a>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    
</body>
</html>