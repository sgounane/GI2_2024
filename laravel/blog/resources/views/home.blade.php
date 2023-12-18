@extends("layout")
@section('content')
<article class="col-8">

        @foreach($articles as $article)
            <h1>{{$article->titre}}</h1>
            <p>{{$article->slug}}</p>
            <p>{{$article->content }}</p>
            <a href={{"/articles/".$article->slug}} >Lire plus </a>
        @endforeach
        {{$articles->links()}} 

    </article>
@endsection
@section('aside')
<aside class="col-4">

<div>
    <h4>Nouveaux Articles</h4>
</div>
    @foreach($latest as $article)
    <div>
        
        <a href="">
            {{$article->titre}}
        </a>
    </div>
    @endforeach
</aside>
@endsection
