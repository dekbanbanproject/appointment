<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Oapp;
use Phattarachai\LineNotify\Facade\Line;



class DasdboardController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function main()
    {
        $datahos = DB::connection('mysql2')
        ->table('oapp')
        ->select('clinic.name','patient.pname','patient.fname','patient.lname','oapp.clinic','oapp.oapp_id as oappid','oapp.doctor','oapp.clinic','oapp.vstdate','oapp.nextdate','oapp.nexttime','oapp.hn','doctor.name as dname')
        ->leftJoin('patient', 'oapp.hn', '=', 'patient.hn')
        ->leftJoin('clinic', 'oapp.clinic', '=', 'clinic.clinic')
        ->leftJoin('doctor', 'oapp.doctor', '=', 'doctor.code')
        ->leftJoin('ovst', 'oapp.nextdate', '=', 'ovst.vstdate')
        ->leftJoin('kskdepartment', 'oapp.depcode', '=', 'kskdepartment.depcode')
        ->where('oapp.clinic','=',01)
        ->WhereBetween('oapp.nextdate', ['2021-12-20', '2021-12-31'])
        ->get();
        return view('dashboard/main',[
            'datahos' => $datahos,
        ]);
    }
    public function sendnotify()
    {
        $datahos = DB::connection('mysql2')
        ->table('oapp')
        ->select('clinic.name','patient.pname','patient.fname','patient.lname','oapp.clinic','oapp.oapp_id as oappid','oapp.doctor','oapp.clinic','oapp.vstdate','oapp.nextdate','oapp.nexttime','oapp.hn','doctor.name as dname')
        ->leftJoin('patient', 'oapp.hn', '=', 'patient.hn')
        ->leftJoin('clinic', 'oapp.clinic', '=', 'clinic.clinic')
        ->leftJoin('doctor', 'oapp.doctor', '=', 'doctor.code')
        ->leftJoin('ovst', 'oapp.nextdate', '=', 'ovst.vstdate')
        ->leftJoin('kskdepartment', 'oapp.depcode', '=', 'kskdepartment.depcode')
        ->where('oapp.clinic','=',01)
        ->WhereBetween('oapp.nextdate', ['2021-12-20', '2021-12-31'])
        ->get();
        return view('sendnotify',[
            'datahos' => $datahos,
        ]);
    }






}
