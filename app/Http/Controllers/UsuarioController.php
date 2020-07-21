<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;



use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioRequest;
use DB;
use App\User;

class UsuarioController extends Controller
{
   

 public function __construct()
    {

$this->middleware('auth'); 


 }

     public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));

            $usuarios=DB::table('users as a')
            ->join('rols as r','a.rol_id','=','r.id')         
             ->select('a.id','a.name','a.apellidos','a.email','a.address','a.dni','r.name as rol','a.telefono','a.imagen')
             
            ->where('a.name','LIKE','%'.$query.'%')
            ->orwhere('apellidos','LIKE','%'.$query.'%')
            ->orwhere('dni','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(2);
            return view('seguridad.index',["usuarios"=>$usuarios,"searchText"=>$query]);
        }
    }


   




    public function create(){
      
      $rol=DB::table('rols')->get();
        return view('seguridad.create',["rol"=>$rol]);
    }





 public function store(UsuarioRequest $request){
    

$usuario= new  User;

$usuario->name=$request->get('name');
$usuario->apellidos=$request->get('apellidos');
$usuario->email=$request->get('email');
$usuario->password=bcrypt($request->get('password'));
$usuario->address=$request->get('address');
//$usuario->idrol = $request->get('idrol');
$usuario->dni=$request->get('dni');
$usuario->telefono=$request->get('telefono');
$usuario->rol_id=$request->get('idrol');
if ($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $file->move(public_path().'/imagenes/avatar/',$file->getClientOriginalName());
        $usuario->imagen=$file->getClientOriginalName();
        }


$usuario->save();
return Redirect::to('seguridad');



    }

  public function show($id){
       //$rols=DB::table('rol')->where('idrol','!=','1')->get();
       $usuario=User::findOrFail($id);
        return view("seguridad.show",["usuario"=>$usuario]);
    }



    public function edit($id){
        $usuario=User::findOrFail($id);
          $rol=DB::table('rols')->get();
        
        return view("seguridad.edit",["usuario"=>$usuario,"rol"=>$rol]);
      }



public function update(Request $request,$id){

$this->validate($request,[
'name'=>'required|max:100',
'apellidos'=>'required|max:100',
'email'=>'required|email',

'address'=>'required|max:100',
'dni'=>'max:10',
'telefono'=>'max:10',
'imagen'=>'mimes:jpeg,bmp,png',
'password'=>($request->get('password') !="") ? 'required|min:5|confirmed':"",


]);

 
$usuario=User::findOrFail($id);

$usuario->name=$request->get('name');
$usuario->apellidos=$request->get('apellidos');
$usuario->email=$request->get('email');
 if($request->get('password')!='') $usuario->password=bcrypt($request->get('password'));
$usuario->address=$request->get('address');
//$usuario->idrol = $request->get('idrol');
$usuario->dni=$request->get('dni');
$usuario->telefono=$request->get('telefono');
$usuario->rol_id=$request->get('idrol');
if ($request->hasFile('imagen')){
         $file=$request->file('imagen');
         $file->move(public_path().'/imagenes/avatar/',$file->getClientOriginalName());
        $usuario->imagen=$file->getClientOriginalName();
        }

$usuario->update();
return Redirect::to('seguridad');





    }


     public function destroy($id){

        $usuario=DB::table('users')->where('id','=',$id)->delete();

        return Redirect::to('seguridad');





    }












}
