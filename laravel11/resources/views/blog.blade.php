<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3 class="text-xl">Wlcome to my blog</h3>
    <!-- Artikel Blog -->
    @foreach($artikel as $artikelItem)
        <div class="artikel">
            <h2>{{ $artikelItem['judul'] }}</h2>
            <p>{{ $artikelItem['isi'] }}</p>
        </div>
    @endforeach
</x-layout>