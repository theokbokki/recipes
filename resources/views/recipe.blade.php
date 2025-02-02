<x-layout title="{{ $recipe->title }}" page="recipe">
    <h1 class="text-xl bold mt-160">{{ $recipe->title }}</h1>
    <a href="{{ route('home') }}" class="absolute top-80 flex items-center gap-4 text-stone-500 transition-all hover:text-stone-800" data-transition="true">
        <span class="size-14">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>
        </span>
        <span>Back to recipes</span>
    </a>
    <p class="mt-8 text-stone-600">{{ $recipe->description }}</p>
    <section class="mt-40">
        <h2 class="text-lg text-stone-800 mb-16">Ingredients</h2>
        <div class="text-stone-600" data-role="list">{!! $recipe->ingredients !!}</div>
    </section>
    <section class="mt-40">
        <h2 class="text-lg text-stone-800 mb-16">Steps</h2>
        <div class="text-stone-600" data-role="list">{!! $recipe->steps !!}</div>
    </section>
</x-layout>
