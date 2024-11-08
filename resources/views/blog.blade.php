<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <h3 class="text-xl"></h3>
  @foreach($posts as $post)
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class="mb-1 text-3xl tracking-tight font-bold">{{$post['title']}}</h2>
    <div class="text-base text-gray-500">
      <a href="">{{$post['author']}}</a>
    </div>
    <div>
     <p class="my-4 font-light">
       {{Str::limit($post['body'],52)}}
     </p>
    </div>
    <a>
    
    </a>
  </article>
  @endforeach
</x-layout>