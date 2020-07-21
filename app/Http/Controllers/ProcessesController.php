<?php

namespace App\Http\Controllers;

use App\Processes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProcessesRequest;
use DB;

class ProcessesController extends Controller
{
    

public function __construct()
    {

//$this->middleware('auth'); 


 }

    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));

            $processes=DB::table('Processes as p')
                    
             ->select('p.id','p.name','p.description as descripcion','p.archivo')
             ->where('name','LIKE','%'.$query.'%')
             ->orderBy('id','desc')
            ->paginate(2);
            return view('proceso.index',["processes"=>$processes,"searchText"=>$query]);
        }
    }

  
    public function create()
    {
        return view('proceso.create');
    }

   
    public function store(ProcessesRequest $request)
    {
     

$proceso= new  Processes;

$proceso->name=$request->get('name');
$proceso->description=$request->get('description');


if ($request->hasFile('archivo')){
         $file=$request->file('archivo');
         $file->move(public_path().'/archivo/',$file->getClientOriginalName());
        $proceso->archivo=$file->getClientOriginalName();
        }


$proceso->save();
return Redirect::to('proceso');
  



    }

   
    public function show($id)
    {
          $proceso=Processes::findOrFail($id);
        return view('proceso.show',['proceso'=>$proceso]);
    }

   
    public function edit($id)
    {
        $proceso=Processes::findOrFail($id);
        return view('proceso.edit',['proceso'=>$proceso]);
    }

   
    public function update(Request $request,$id)

    {
        $proceso=Processes::findOrFail($id);
        $proceso->name=$request->get('name');
        $proceso->description=$request->get('description');


if ($request->hasFile('archivo')){
         $file=$request->file('archivo');
         $file->move(public_path().'/archivo/',$file->getClientOriginalName());
        $proceso->archivo=$file->getClientOriginalName();
        }


$proceso->save();
        return redirect()
        ->route('proceso.index')
        ->withSuccess("El cliente {$proceso->name} fue actualizado satisfactoriamente");
    }

    public function destroy($id)
    {
          $pro=DB::table('processes')->where('id','=',$id)->delete();

        return Redirect::to('proceso');
    }
}
