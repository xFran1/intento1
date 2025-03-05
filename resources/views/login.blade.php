<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body class="container-fluid  d-flex flex-column">
    
        <div class=" row d-flex justify-content-center align-items-center vh-100 position-relative">
       
        <div class="row bg-primary d-flex justify-content-center position-absolute top-0">
            <div class="col-8 bg-secondary d-flex justify-content-center position-relative ">
            @if (Session::has('success'))
            <span class="alert position-absolute w-5 top-0 alert-success mt-2 p-2">{{ Session::get('success') }}</span>
        @endif
            </div>
        </div>

        <div class="col-6">
        <h2>Inicio sesión</h2>
      
    <div class="card-body">
                <form action="{{ route('AddUser') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Full Name</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                        @error('full_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="formGroupExampleInput2" placeholder="Enter password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  

                    <button type="submit" class="btn btn-primary">Save</button>


                </form>
            </div>
          

        </div>
        </div>
    </div>
</body>
</html>