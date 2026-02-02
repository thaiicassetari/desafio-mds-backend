<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    // Endpoint 
    public function acessar(Request $request)
    {
        $email = $request->input('email');
        $senha = $request->input('senha');

        // Validação fictícia 
        if ($email === 'teste@mds.gov.br' && $senha === '123456') {
            return response()->json([
                'auth' => true,
                'email' => $email
            ], 200);
        }

        // Retorno de erro  
        return response()->json(['erro' => 'Usuário ou senha inválidos.'], 401);
    }

    // Endpoint /registrar 
    public function registrar(Request $request)
    {
        $email = $request->input('email');
        $dt_nascimento = $request->input('dt_nascimento');
        
        $idade = Carbon::parse($dt_nascimento)->age;

        if ($idade < 18) {
            return response()->json(['erro' => 'O usuário deve ser maior de 18 anos.'], 400);
        }

        /* Simulação de e-mail 
           Aqui seria verificado se o e-mail já existe no banco de dados.
           Ex: if (User::where('email', $email)->exists()) { ... }
        */
        if ($email === 'jaexiste@mds.gov.br') {
            return response()->json(['erro' => 'Este e-mail já está registrado.'], 400);
        }

        /* AÇÃO FICTÍCIA: 
           Aqui seria realizada a inserção real no banco de dados (MySQL/PostgreSQL).
           Ex: User::create([...]);
        */

        // retorno manual para funcionamento da SPA
        return response()->json(['mensagem' => 'Registro realizado com sucesso!'], 201);
    }

    // Endpoint /listagem-usuarios 
    public function listagem()
    {
        /* AÇÃO FICTÍCIA: 
           Aqui as informações seriam resgatadas do banco de dados real 
           Ex: $usuarios = User::all();
        */
           
        // Retorno manual de dados para preencher a tabela no Front-end
        return response()->json([
            ['id' => 1, 'email' => 'joao@mds.gov.br', 'dt_nascimento' => '1990-01-01'],
            ['id' => 2, 'email' => 'maria@suas.gov.br', 'dt_nascimento' => '1985-05-15'],
            ['id' => 3, 'email' => 'jose@governo.br', 'dt_nascimento' => '2000-12-20'],
        ]);
    }
}