<div class="bg-white shadow-md rounded w-full min-h-screen">
    <div class="grid lg:grid-cols-2 min-h-screen">
        <div class="bg-[var(--pollux-red)] min-h-screen hidden lg:block">
            <img class="h-full object-cover object-center opacity-50" src="{{ asset('images/enterprise.webp') }}" alt="">
        </div>
        <div class="px-10 lg:p-20 bg-white min-h-screen flex items-center justify-center">
            <livewire:auth.login />
        </div>
    </div>
</div>
