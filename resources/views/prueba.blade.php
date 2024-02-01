<x-app-layout>
    @php
    $article = App\Models\Article::find(1);
    $fuente =$article->link
    @endphp
<x-noticia :article="$article"></x-noticia>
</x-app-layout>
