<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProyectModel;
use DB;

class TimesProyectController extends Controller
{
    

    public function showTableP(Request $request)
    {

     	// $Activities = DB::table('mda_models')
      //       ->select('id','nameEmployer','nameModul','client','dateOn','dateOf','timeOn','timeOf','status','nameAct','numTicket')
      //       ->where('status', '<>','Finalizado')
      //       ->get();
        $Activity = ProyectModel::all()
                      ->where('status', '<>','Finalizado');
      return view('Proyect.show',compact('Activity'));
    }

    public function testP()
    {
      $Activities = ProyectModel::all();

      return view('Proyect.test',compact('Activities'));
    }
 
 
    public function viewTablesP()
    {
       return view('Proyect.create'); 
    } 

    public function timesActivitiesP(Request $request)
    {
          $Activities = new ProyectModel();
          $Activities->nameEmployer = $request->input('NameEmployer');
          $Activities->nameModul = $request->input('NameModul');
          $Activities->client = $request->input('Client');
          $Activities->NameProyect = $request->input('NameProyect');
          $Activities->dateOn = $request->input('DateOn');
          $Activities->dateOf = $request->input('DateOf');
          $Activities->timeOn = $request->input('TimeOn');
          $Activities->timeOf = $request->input('TimeOf');
          $Activities->status = $request->input('Status');
          $Activities->nameAct = $request->input('nameAct');
          $Activities->numTicket = $request->input('NumTicket');
          $Activities->quantitytime = $request->input('quantitytime');
          // return $request; 
          $Activities->save();
          return back()->with('mensaje', 'Registo creado');
    }

    public function ActivitiesDeleteP($id)
    {    
        $Activities = ProyectModel::findOrFail($id);
        $Activities->delete();

        $Activities = ProyectModel::all();
        return view('Proyect.show',compact('Activities'))->with('mensaje2', 'Registo Eliminado');
    }

    public function ActivitiesEditP($id)
    {
        $Activity = ProyectModel::findOrFail($id);
        return view ('Proyect.edit', compact('Activity'));
    }

    public function updateActivitiesP(Request $request,$id)
    {
         $Activities = ProyectModel::findOrFail($id);
          $Activities->nameEmployer = $request->NameEmployer;
          $Activities->nameModul = $request->NameModul;
          $Activities->NameProyect = $request->NameProyect;
          $Activities->client = $request->Client;
          $Activities->dateOn = $request->DateOn;
          $Activities->dateOf = $request->DateOf;
          $Activities->timeOn = $request->TimeOn;
          $Activities->timeOf = $request->TimeOf;
          $Activities->status = $request->Status;
          $Activities->nameAct = $request->nameAct;
          $Activities->numTicket = $request->NumTicket;
          $Activities->quantitytime = $request->quantitytime;       
          $Activities->save();

        // return back()->with('mensaje', 'Registo Modificado');
         $Activity = ProyectModel::all()
                     ->where('status', '<>','Finalizado');
         return view('Proyect.show',compact('Activity'));

    }
}
