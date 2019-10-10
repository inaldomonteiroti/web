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
       // $this->authorize('update', Usuario::class);
 
        $usuario = User::find($id);
        return view('usuarios.editar', compact('usuario'));
    }
 
    public function atualizar(Request $request, $id)
    {
        //s$this->authorize('update', Usuario::class);
        $dados = $request->all();
        $usuario = User::find($id);
 
        if(!$dados['password']){
            $senha_antiga = $usuario->senha;
            $dados['password'] = $senha_antiga;
           
        }else{
            $senha_nova = Hash::make($dados['password']);
            $dados['password'] = $senha_nova;
            
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
        
        if(!$dados['password']){
            $senha_antiga = $usuario->senha;
            $dados['password'] = $senha_antiga;
            
        }else{
            $senha_nova = Hash::make($dados['password']);
            $dados['password'] = $senha_nova;            
        }

        User::create($dados);
 
        return redirect()->route('listar');
    }
    public function deletar($id)
    {
        $usuario = User::find($id);      
 
        $usuario->delete();

        \Session::flash('flash_message',[
            'msg'=>"Telefone deletado com Sucesso!",
            'class'=>"alert-success"
        ]); 
  
        return redirect()->route('listar'); 
    }
}