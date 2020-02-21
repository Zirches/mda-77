<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developermodel;
use DB;

class TimesDeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function showTableD(Request $request)
    {

      // $Activities = DB::table('mda_models')
      //       ->select('id','nameEmployer','nameModul','client','dateOn','dateOf','timeOn','timeOf','status','nameAct','numTicket')
      //       ->where('status', '<>','Finalizado')
      //       ->get();
      $Activity = Developermodel::all()
                      ->where('status', '<>','Finalizado');
      return view('Developer.show',compact('Activity'));


    }

    public function testD()
    {
      $Activities = Developermodel::all();

      return view('Developer.test',compact('Activities'));
    }
 
 
    public function viewTablesD()
    {
       return view('Developer.create'); 
    } 

    public function timesActivityD(Request $request)
    {
          $Activity = new Developermodel();
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
          // return $request; 
          $Activity->save();
          return back()->with('mensaje', 'Registo creado');
    }

    public function activityDeleteD($id)
    {    
        $Activity = Developermodel::findOrFail($id);
        $Activity->delete();

        $Activities = Developermodel::all();
        return view('Developer.show',compact('Activities'))->with('mensaje2', 'Registo Eliminado');
    }

    public function activityEditD($id)
    {
        $Activities = Developermodel::findOrFail($id);
        return view ('Developer.edit', compact('Activities'));
    }

    public function updateActivityD(Request $request,$id)
    {
         $Activity = Developermodel::findOrFail($id);
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
         $Activities = Developermodel::all()
                     ->where('status', '<>','Finalizado');
         return view('Developer.show',compact('Activities'));

    }
}
