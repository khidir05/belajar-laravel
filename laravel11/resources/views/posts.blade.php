<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">Wlcome to my blog</h3>
    <!-- Artikel Blog -->
    <article class="py-8 max-w-screen-md border-b border-gray-500">
    @foreach($posts as $post)
        <div class="artikel">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['judul'] }}</h2>
            </a>
            <div>
                By <a href="/authors/{{ $post->author->username }}" class="hover:underline, text-base text-gray-500">{{ $post->author->name }}</a> 
                in <a href="/category/{{ $post->category->slug }}" class="hover:underline, text-base text-gray-500">{{ $post->category->category }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['isi'], 50 )}}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </div>
    @endforeach
    </article>
</x-layout>