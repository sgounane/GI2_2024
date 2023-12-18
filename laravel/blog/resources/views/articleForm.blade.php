@extends("layout")
@section("titre","New Article")


  
@section("content")

    <form action={{route("createArticle")}} method="POST">
       @csrf
        <div class="form-group mb-2">
            <input class="form-control" type="text" name="titre" placeholder="Titre" value={{old("titre")}}>
            @error("titre")
                {{$message}}
            @enderror
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" name="slug" placeholder="Slug">
            @error("slug")
                {{$message}}
            @enderror
        </div>
        <div class="form-group mb-2">
            <textarea rows=10 class="form-control" type="text" name="content" placeholder="Texte"></textarea>
            @error("content")
                {{$message}}
            @enderror
        </div>
        <div class="form-group mb-2">
            <input type="submit" class="btn btn-primary form-control" value="Enregistrer">
        </div>
    </form>
@endsection