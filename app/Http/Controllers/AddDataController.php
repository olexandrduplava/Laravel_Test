<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterie;

class AddDataController extends Controller
{
    public function submit(Request $req){
//        dd($req);

//        $validation = $req->validate([
//            'name' => 'required|min:3|max:25',
//            'description' => 'required|min:10|max:200',
//        ]);
//        dd($req->input('name'));

        $masterie = new Masterie();
        $masterie->name = $req->input('name');
        $masterie->description = $req->input('description');

        $masterie->save();

        return redirect()->route('admin');
    }

    public function allData(){
        $masdata = new Masterie;
        //dd($masdata->all());

        //dd(Masterie::all());

        return view('datainfo', ['data'=> Masterie::all()]);
        //return view('datainfo', ['data'=> $masdata->orderBy('id', 'asc')->get()]);
    }

    public function showOneMasterie($id){
        $masdata = new Masterie;
        return view('one-datainfo', ['data'=> $masdata->find($id)]);
    }

    public function updateMasterie($id){
        $masdata = new Masterie;
        return view('edit', ['data'=> $masdata->find($id)]);
    }

    public function updateMasterieSubmit($id, Request $req){;

        $masterie = Masterie::find($id);
        $masterie->name = $req->input('name');
        $masterie->description = $req->input('description');

        $masterie->save();

        return redirect()->route('datainfo-id', $id);
    }

    public function deleteMasterie($id){
        Masterie::find($id)->delete();
        return redirect()->route('datainfo');
    }

}
