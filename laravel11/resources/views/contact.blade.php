<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
  <h3 class="text-xl">Ini adalah halaman contact</h3>
  <!-- Informasi Kontak -->
    <h2>Informasi Kontak</h2>
    <p>Email: {{ $kontak['email'] }}</p>
    <h2>Sosial Media</h2>
    <ul>
        @foreach($kontak['sosial_media'] as $sosialMedia => $link)
            <li>{{ $sosialMedia }}: <a href="{{ $link }}">{{ $link }}</a></li>
        @endforeach
    </ul>
</x-layout>
