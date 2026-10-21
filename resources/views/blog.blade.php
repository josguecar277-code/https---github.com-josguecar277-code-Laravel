
<x-layout meta-title= "Blog" meta-description = "  Descripcion de Blog">

<h1>Blog</h1>

<!-- @dump($posts) -->
@foreach($posts as $post)
    $post['title']
@endforeach 



</x-layout>
