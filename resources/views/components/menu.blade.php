<nav class="flex w-full p-4 border-gray-300 bg-zinc-50 text-neutral-500">
    <a class="m-2 hover:text-neutral-700" href="/">宝くじ全プッシュの街</a>
    <ul class="flex flex-grow justify-end m-2 list-none">
        @foreach (['loto' => '賭ける', 'deal' => '取引', 'stat' => '統計'] as $key => $value)
            <li><a @class(['m-2', 'hover:text-neutral-700', 'font-bold' => $key == $active]) href="/{{ $key }}" wire:navigate>{{ $value }}</a>
        @endforeach
    </ul>
</nav>
