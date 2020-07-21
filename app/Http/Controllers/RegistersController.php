<?php

namespace App\Http\Controllers;

use App\Registers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistersRequest;
use App\Procedures;
use DB;

class RegistersController extends Controller
{
     public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));

            $register=DB::table('registers as r')
            ->join('procedures as p','r.procedure_id','=','p.id')    
             ->select('r.id','r.name','r.description as descripcion','r.ruta_drive','p.name as procedimiento')
             ->where('r.name','LIKE','%'.$query.'%')
             ->orderBy('id','desc')
            ->paginate(7);
            return view('registers.index',["register"=>$register,"searchText"=>$query]);
        }
    }

   
   public function create()
    {
        $procedure=DB::table('procedures')->get();
        return view('registers.create',['procedure'=>$procedure]);
    }

   
    public function store(RegistersRequest $request)
    {
     

$register= new  Registers;

$register->name=$request->get('name');
$register->description=$request->get('description');
$register->ruta_drive=$request->get('ruta_drive');
$register->procedure_id=$request->get('procedure_id');

$register->save();
return Redirect::to('registers');
  



    }

   
    public function show($id)
    {
         
    }

   
    public function edit($id)
    {
        $register=Registers::findOrFail($id);
         $procedure=DB::table('procedures')->get();
        return view('registers.edit',['register'=>$register,'procedure'=>$procedure]);
    }

   
    public function update(Request $request,$id)

    {
        $register=Registers::findOrFail($id);
        $register->name=$request->get('name');
        $register->description=$request->get('description');
        $register->ruta_drive=$request->get('ruta_drive');
        $register->procedure_id=$request->get('procedure_id');





        $register->save();
                return redirect()
                ->route('registers.index')
                ->withSuccess("El cliente {$register->name} fue actualizado satisfactoriamente");
            }

    public function destroy($id)
    {
          $pro=DB::table('registers')->where('id','=',$id)->delete();

        return Redirect::to('registers');
    }
}
