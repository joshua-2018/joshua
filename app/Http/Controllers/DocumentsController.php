<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DocumentsRequest;
use App\Documents;
use DB;

class DocumentsController extends Controller
{
    
 public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));

            $documento=DB::table('documents as d')
            ->join('typedocuments as t','d.typedocument_id','=','t.id')    
             ->select('d.id','d.name','d.description as descripcion','d.archivo','t.name as documento')
             ->where('d.name','LIKE','%'.$query.'%')
             ->orderBy('id','desc')
            ->paginate(2);
            return view('document.index',["documento"=>$documento,"searchText"=>$query]);
        }
    }

   
   public function create()
    {
        $typedocument=DB::table('typedocuments')->get();
         $proceso=DB::table('processes')->get();
        return view('document.create',['typedocument'=>$typedocument,'proceso'=>$proceso]);
    }

   
    public function store(DocumentsRequest $request)
    {
     

$documento= new  Documents;

$documento->name=$request->get('name');
$documento->description=$request->get('description');
$documento->archivo=$request->get('archivo');
$documento->typedocument_id=$request->get('typedocument_id');
$documento->process_id=$request->get('process_id');
$documento->save();
return Redirect::to('document');
  



    }

   
    public function show($id)
    {
          $documento=Documents::findOrFail($id);
        return view('document.show',['documento'=>$documento]);
    }

   
    public function edit($id)
    {
        $documento=Documents::findOrFail($id);
         $proceso=DB::table('processes')->get();
          $typedocument=DB::table('typedocuments')->get();
        return view('document.edit',['documento'=>$documento,'proceso'=>$proceso,'typedocument'=>$typedocument]);
    }

   
    public function update(Request $request,$id)

    {
        $register=Documents::findOrFail($id);
        $register->name=$request->get('name');
        $register->description=$request->get('description');
        $register->archivo=$request->get('archivo');
        $register->process_id=$request->get('process_id');
        $register->typedocument_id=$request->get('typedocument_id');





        $register->save();
                return redirect()
                ->route('document.index')
                ->withSuccess("El cliente {$register->name} fue actualizado satisfactoriamente");
            }

    public function destroy($id)
    {
          $pro=DB::table('documents')->where('id','=',$id)->delete();

        return Redirect::to('document');
    }






}
