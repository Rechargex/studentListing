<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        // $data = Students::all();
        // $data = Students::where('id',1) ->get();
        // $data = Students::where('first_name','like','%ry%') ->get();
        // $data = Students::where('age','>',21) ->get();
        // $data = Students::where('age','>',21) ->orderby('first_name','asc')->get();
        // $data = Students::where('age','>',21) ->orderby('first_name','asc')->limit(5)->get();
        
        // $data = DB::table('students')->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        $data = Students::where('id', 101)->firstOrFail()->get();
        return view('students.index', ['students' => $data]);
    }
    public function show($id){
        $data = Students::findOrFail($id);
        dd($data);
        return view('students.index',['students']);
    }
}
