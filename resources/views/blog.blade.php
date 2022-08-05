{{-- Siempre comienza con la x, luego el guion y seguido por la ubicacion del componente (x- = apuntan a la carpeta components y layout=al nombre del componente) --}}
<x-layouts.app title="Blog" meta-description="Blog meta description">
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
    @endforeach
</x-layouts.app>
