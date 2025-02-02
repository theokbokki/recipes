<x-layout title="recipes" page="home">
    <h1 class="text-xl bold">Recipes</h1>
    <div class="relative mt-40 flex flex-col" data-role="links-container">
        <span class="opacity-0 bg-stone-100/75 rounded-lg -left-12 -right-12 absolute transition-all -z-1" data-role="links-background"></span>
        @foreach($recipes as $recipe)
        <x-recipe-link :$recipe />
        @endforeach
    </div>
</x-layout>
