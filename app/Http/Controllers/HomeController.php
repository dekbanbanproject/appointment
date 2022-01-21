<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Oapp;
use Phattarachai\LineNotify\Facade\Line;



class HomeController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
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
        return view('home',[
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

// จากใน Controller หรือที่อื่น ๆ
// Line::send('ทดสอบส่งข้อความ');




}
