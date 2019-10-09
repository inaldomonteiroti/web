<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
 
class UsuarioController extends Controller
{
    public function listar()
    {
        $usuarios = User::all();
        return view('usuarios.listar', compact('usuarios'));
    }
 
    public function editar($id)
    {
        $this->authorize('update', Usuario::class);
 
        $usuario = User::find($id);
        return view('usuarios.editar', compact('usuario'));
    }
 
    public function atualizar(Request $request, $id)
    {
        $this->authorize('update', Usuario::class);
         
        $dados = $request->all();
        $usuario = User::find($id);
 
        if(!$dados['senha']){
            $senha_antiga = $usuario->senha;
            $dados['senha'] = $senha_antiga;
            $usuario->update($dados);
        }else{
            $senha_nova = Hash::make($dados['senha']);
            $dados['senha'] = $senha_nova;
            $usuario->update($dados);
        }
 
        return redirect()->route('listar');
    }
 
    public function registrar()
    {
        return view('usuarios.registrar');
    }
 
    public function salvar(Request $request)
    {
        $dados = $request->all();
        User::create($dados);
 
        return redirect()->route('listar');
    }
}