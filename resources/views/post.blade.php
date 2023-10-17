<!doctype html>
<x-layout>
    <article>
            <h1> {!!$post->title!!} </h1>
            <p>
                By <a href="#">Jeffrey Way</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            <div>
                {{-- <?= $post->body;?> --}}
                {!!$post->body!!}
            </div>

        </article>
        <a href = "/"> <br>Go Back</a>


</x-layout>
