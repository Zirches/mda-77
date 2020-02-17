<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MdaModel;

class timesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       return view('Times.index'); 
    }

    public function showTable()
    {
      $Activities = MdaModel::all();
      return view('Times.show',compact('Activities'));
    }

    public function test()
    {
      return view('Times.test');
    }
 
 
    public function viewTables()
    {
       return view('Times.create'); 
    } 

    public function timesActivity(Request $request)
    {
         $request->validate([
            'nameEmployer' => 'required',
            'nameModul' => 'required',
            'nameAct' => 'required',
            'client' => 'required',
            'DateOn' => 'required',
            'TimeOn' => 'required',            
            'TimeOf' => 'required',
            'DateOf' => 'required'
         ]);
             

          $Activity = new MdaModel();
          $Activity->nameEmployer = $request->input('nameEmployer');
          $Activity->nameModul = $request->input('nameModul');
          $Activity->nameAct = $request->input('nameAct');
          $Activity->client = $request->input('client');
          $Activity->dateOn = $request->input('DateOn');
          $Activity->timeOn = $request->input('TimeOn');
          $Activity->timeOf = $request->input('TimeOf');
          $Activity->dateOf = $request->input('DateOf');

          $Activity->save();
          $Activities = MdaModel::all();
          return view('Times.show',compact('Activities'));

    }

    public function activityDelete($id)
    {    
        $Activity = MdaModel::findOrFail($id);
        $Activity->delete();

        $Activities = MdaModel::all();
        return view('Times.show',compact('Activities'))->with('mensaje2', 'Registo Eliminado');
    }

    // public function activityEdit($id)
    // {
    //     $Activities = llx_labelModel::findOrFail($id);
    //     return view ('Times.edit', compact('Activities'));
    // }

}
