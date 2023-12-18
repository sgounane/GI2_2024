@extends("layout")
@section("titre","New User")


  
@section("content")
@error("error")
    <div class="alert alert-danger">
    {{$message}}
    </div>
                
@enderror

    <form action={{route("login")}} method="POST">
       @csrf
        <div class="form-group mb-2">
            <input class="form-control" type="email" name="email" placeholder="Email">
            @error("email")
                {{$message}}
            @enderror
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="password" name="password" />
            @error("password")
                {{$message}}
            @enderror
        </div>
        <div class="form-group mb-2">
            <input type="submit" class="btn btn-primary form-control" value="Login">
        </div>
    </form>
@endsection