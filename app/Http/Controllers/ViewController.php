<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Siswa;

class ViewController extends Controller
{
    public function index(){
        $siswa = Siswa::latest()->paginate(5);
        return view("index", compact("siswa"))->with('i');
    }

    public function addform(){
        return view("add");
    }

    public function add(Request $request){
        $this->validate(request(),[
            'ids'=> 'required',
            'name'=>'required',
            'class'=>'required'
        ]);

        $siswa = Siswa::create([
            'ids'=>$request->ids,
            'name'=>$request->name,
            'class'=>$request->class
        ]);
        return redirect()->route('index');
    }

    public function editform($id){
        $siswa=Siswa::findOrFail($id);
        return view('edit', compact('siswa'));
    }

    public function edit(Request $request, $id){
        $this->validate(request(),[
            'ids'=>'required',
            'name'=>'required',
            'class'=>'required'
        ]);
        $siswa = Siswa::find($id);
        $siswa->ids = $request->ids;
        $siswa->name = $request->name;
        $siswa->class = $request->class;
        $siswa->save();
        return redirect()->route('index');
    }

    public function del($id){
        $s = Siswa::find($id);
        $s->delete();
        return redirect()->route('index');
    }

}
