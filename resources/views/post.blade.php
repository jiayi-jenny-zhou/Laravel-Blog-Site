<!doctype html>
<x-layout>
    <article>
            <h1> 
                <a href="/posts/<?= $post->slug;?>">
                    <?= $post->title;?>
                </a>
            </h1>
            <div>
                {{-- <?= $post->body;?> --}}
                {!!$post->body!!}
            </div>

        </article>
        <a href = "/"> <br>Go Back</a>


</x-layout>
