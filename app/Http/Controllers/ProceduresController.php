<?php

namespace App\Http\Controllers;

use App\Procedures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProceduresRequest;
use App\Processes;
use DB;

class ProceduresController extends Controller
{
   
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));

            $procedure=DB::table('Procedures as p')
            ->join('processes as pro','p.process_id','=','pro.id')    
             ->select('p.id','p.name','p.description as descripcion','p.archivo','pro.name as proceso')
             ->where('p.name','LIKE','%'.$query.'%')
             ->orderBy('id','desc')
            ->paginate(2);
            return view('procedure.index',["procedure"=>$procedure,"searchText"=>$query]);
        }
    }

   
   public function create()
    {
        $proceso=DB::table('processes')->get();
        return view('procedure.create',['proceso'=>$proceso]);
    }

   
    public function store(ProceduresRequest $request)
    {
     

$procedure= new  Procedures;

$procedure->name=$request->get('name');
$procedure->description=$request->get('description');
$procedure->archivo=$request->get('archivo');
$procedure->process_id=$request->get('process_id');

$procedure->save();
return Redirect::to('procedure');
  



    }

   
    public function show($id)
    {
          $procedure=Procedures::findOrFail($id);
        return view('procedure.show',['procedure'=>$procedure]);
    }

   
    public function edit($id)
    {
        $procedure=Procedures::findOrFail($id);
         $proceso=DB::table('processes')->get();
        return view('procedure.edit',['procedure'=>$procedure,'proceso'=>$proceso]);
    }

   
    public function update(Request $request,$id)

    {
        $procedure=Procedures::findOrFail($id);
       $procedure->name=$request->get('name');
        $procedure->description=$request->get('description');
        $procedure->archivo=$request->get('archivo');
        $procedure->process_id=$request->get('process_id');





        $procedure->save();
                return redirect()
                ->route('procedure.index')
                ->withSuccess("El cliente {$procedure->name} fue actualizado satisfactoriamente");
            }

    public function destroy($id)
    {
          $pro=DB::table('procedures')->where('id','=',$id)->delete();

        return Redirect::to('procedure');
    }
}
