<aside class="p-2 bg-pollux-red">
    <div class="container mx-auto flex items-center justify-between">
        <nav></nav>

        <div>
            <span class="text-base font-normal text-white me-3">Bem-vindo, {{ auth()->user()->name }}</span>
            <livewire:auth.logout/>
        </div>
    </div>
</aside>
