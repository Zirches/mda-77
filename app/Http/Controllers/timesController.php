<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MdaModel;
use DB;

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

    public function showTable(Request $request)
    {

      $Activities = MdaModel::all()
                      ->where('status', '<>','Finalizado');
      return view('Times.show',compact('Activities'));


    }

    public function test()
    {
      $Activities = MdaModel::all();

      return view('Times.test',compact('Activities'));
    }
 
 
    public function viewTables()
    {
       return view('Times.create'); 
    } 

    public function timesActivity(Request $request)
    {
          $Activity = new MdaModel();
          $Activity->nameEmployer = $request->input('NameEmployer');
          $Activity->nameModul = $request->input('NameModul');
          $Activity->client = $request->input('Client');
          $Activity->dateOn = $request->input('DateOn');
          $Activity->dateOf = $request->input('DateOf');
          $Activity->timeOn = $request->input('TimeOn');
          $Activity->timeOf = $request->input('TimeOf');
          $Activity->status = $request->input('Status');
          $Activity->nameAct = $request->input('nameAct');
          $Activity->numTicket = $request->input('NumTicket');
          $Activity->quantitytime = $request->input('quantitytime');
          $Activity->save();
          return back()->with('mensaje', 'Registo creado');
    }

    public function activityDelete($id)
    {    
        $Activity = MdaModel::findOrFail($id);
        $Activity->delete();

        $Activities = MdaModel::all();
        return view('Times.show',compact('Activities'))->with('mensaje2', 'Registo Eliminado');
    }

    public function activityEdit($id)
    {
        $Activities = MdaModel::findOrFail($id);
        return view ('Times.edit', compact('Activities'));
    }

    public function updateActivity(Request $request,$id)
    {
         $Activity = MdaModel::findOrFail($id);
          $Activity->nameEmployer = $request->NameEmployer;
          $Activity->nameModul = $request->NameModul;
          $Activity->client = $request->Client;
          $Activity->dateOn = $request->DateOn;
          $Activity->dateOf = $request->DateOf;
          $Activity->timeOn = $request->TimeOn;
          $Activity->timeOf = $request->TimeOf;
          $Activity->status = $request->Status;
          $Activity->nameAct = $request->nameAct;
          $Activity->numTicket = $request->NumTicket;
          $Activity->quantitytime = $request->quantitytime;       
          $Activity->save();

        // return back()->with('mensaje', 'Registo Modificado');
         $Activities = MdaModel::all()
                     ->where('status', '<>','Finalizado');
         return view('Times.show',compact('Activities'));

    }

}
