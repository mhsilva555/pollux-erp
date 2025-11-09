<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username = '';
    public $password = '';
    public $store = null;
    public $station = 1;
    public $remember = false;

    public function login()
    {
        $this->validate(
            [
                'username' => 'required|string',
                'password' => 'required|string',
                'store' => 'required|integer',
                'station' => 'required|integer|min:1',
            ],
            [
                'username.required' => 'O campo usuário é obrigatório.',
                'password.required' => 'O campo senha é obrigatório.',
                'store.required' => 'O campo loja é obrigatório.',
                'station.required' => 'O campo estação é obrigatório.',
                'station.min' => 'A estação deve ser maior ou igual a 1.'
            ]
        );

        $credentials = [
            'username' => $this->username,
            'password' => $this->password
        ];

        try {
            if (Auth::attempt($credentials, $this->remember)) {
                session()->regenerate();
                return redirect()->intended(route('dashboard'));
            }

            $this->addError('auth', 'Credenciais inválidas');
        } catch (\Exception $e) {
            $this->addError('error', 'Ocorreu um erro inesperado: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
