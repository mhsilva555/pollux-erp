<form wire:submit.prevent="login" method="POST" class="w-full max-w-sm form-login">
    <livewire:logo />

    <fieldset class="mb-3">
        <legend class="text-xs">Usuário</legend>
        <input
            wire:model="username"
            type="text"
            class="block w-full p-2 shadow border border-slate-200 rounded-md"
            autocomplete="off"
        />
        @error('username') <p class="text-red-500 text-xs my-1">{{ $message }}</p> @enderror
    </fieldset>

    <fieldset class="mb-3">
        <legend class="text-xs">Senha</legend>
        <input
            wire:model="password"
            type="password"
            class="block w-full p-2 shadow border border-slate-200 rounded-md"
            autocomplete="off"
        />
        @error('password') <p class="text-red-500 text-xs my-1">{{ $message }}</p> @enderror
    </fieldset>

    <div class="grid grid-cols-2 gap-3 mb-5">
        <fieldset>
            <legend class="text-xs">Loja</legend>
            <input
                wire:model="store"
                type="number"
                class="block w-full p-2 shadow border border-slate-200 rounded-md"
                autocomplete="off"
            />
            @error('store') <p class="text-red-500 text-xs my-1">{{ $message }}</p> @enderror
        </fieldset>

        <fieldset>
            <legend class="text-xs">Estação</legend>
            <input
                wire:model="station"
                type="number"
                class="block w-full p-2 shadow border border-slate-200 rounded-md"
                autocomplete="off"
            />
            @error('station') <p class="text-red-500 text-xs my-1">{{ $message }}</p> @enderror
        </fieldset>
    </div>

    <fieldset class="mb-5 text-sm">
        <input  type="checkbox" id="remember" wire:model="remember" />
        <label for="remember">Lembrar meu acesso</label>
    </fieldset>

    <button type="submit" type="button" class="w-full p-2 pollux-red rounded-md bg-indigo-800 text-white">
        Entrar
    </button>

    @error('auth') <p class="bg-red-100 text-red-500 p-1 px-3 rounded-sm mt-3">{{ $message }}</p> @enderror
</form>
