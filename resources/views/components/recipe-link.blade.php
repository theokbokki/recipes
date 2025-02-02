<div class="relative p-12 -mx-12 rounded-lg text-pretty hover:bg-stone-100" data-role="link" data-transition="true">
    <a href="{{ route('recipe', ['recipe' => $recipe]) }}"  class="block text-stone-800 before:absolute before:inset-0">
        {{ $recipe->title }}
    </a>
    <p class="mt-4 text-stone-500">{{ $recipe->description }}</p>
</div>
