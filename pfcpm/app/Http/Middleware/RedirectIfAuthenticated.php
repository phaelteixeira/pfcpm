<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $validacao = $this->Validator($request->all());
            if($validacao->fails())
            {
                return redirect()->back()
                ->witherrors($validacao->errors())
                ->withInput($request->all());
            }
        }

        return $next($request);
    }


    public function Validator($data)
    {
        $regras=[
            'nome'              => 'required',
            'matricula'         => 'required ',
            'foto'              => 'required',
            'patente'           => 'required',
            'dataNascimento'    => 'required',
            'sexo'              => 'required',
            'cidade'            => 'required',
            'estado'            => 'required',
            'pelotao'           => 'required',
            'rg'                => 'required',
            'cpf'               => 'required',
            'senha'             => 'required',
            'rad'               => 'required',
            'senhaConfirma'     => 'required | same:senha',];

        $mensagens=[
            'required'                   => 'Campo Obrigatório',
            'matricula.unique'           => 'Matrícula já existe',
            'same'                       => 'Senhas não coincidem '      
        ];

        return Validator::make($data, $regras, $mensagens);
    }
}
