<nav class="w-full p-4 border-gray-300 bg-zinc-50 text-neutral-500 hover:text-neutral-700">
    <ul class="list-none flex">
        @foreach (['loto' => '賭ける', 'deal' => '取引', 'stat' => '統計'] as $key => $value)
            <li><a @class(['m-2', 'text-black', 'font-bold' => $key == $active]) href="/{{ $key }}" wire:navigate>{{ $value }}</a>
        @endforeach
    </ul>
</nav>
