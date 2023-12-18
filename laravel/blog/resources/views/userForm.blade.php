@extends("layout")
@section("titre","New User")


  
@section("content")

    <form action={{route("createUser")}} method="POST">
       @csrf
        <div class="form-group mb-2">
            <input class="form-control" type="text" name="name" placeholder="Name" value={{old("name")}}>
            @error("name")
                {{$message}}
            @enderror
        </div>
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
            <input type="submit" class="btn btn-primary form-control" value="Enregistrer">
        </div>
    </form>
@endsection