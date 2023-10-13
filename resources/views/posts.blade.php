<!doctype html>

<x-layout>
        @foreach ($posts as $post) 
        <article>
            <h1> 
                <a href="/posts/<?= $post->slug;?>">
                    {{-- <?php echo $post->title;?> --}}
                    {{$post->title}}
                </a>
            </h1>
            <div>
                <?= $post->body;?>
            </div>

        </article>
        @endforeach
</x-layout>

