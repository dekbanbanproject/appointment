@extends('layouts.appdash')

@section('content')


    <div class="app-content content">
        <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                        <h3 class="content-header-title mb-0 d-inline-block">รายการนัดคนไช้</h3>
                        <div class="row breadcrumbs-top d-inline-block">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <!-- <li class="breadcrumb-item"><a href="#">สถานพยาบาล</a> -->
                                    </li>
                                    <li class="breadcrumb-item active">รายการนัดคนไช้
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-right col-md-6 col-12">
                        <div class="btn-group float-md-right"> 
                            <!-- <a href="{{url('setting/drug_create/'.(Auth::user()->store_id).'/'.(Auth::user()->id))}}" class="float-sm-right btn btn-success btn-glow round px-2"><i class="fas fa-plus-circle text-white-90 mr-1" style="font-size:15px "></i>เพิ่มรายการยา</a>&nbsp;&nbsp;                 
                            <a href="" class="float-sm-right btn btn-info btn-glow round px-2" data-toggle="modal" data-target="#exampleModal{{(Auth::user()->store_id)}}"><i class="fas fa-file-excel text-white-90 mr-1" style="font-size:15px "></i> นำเข้าด้วย Excel</a>&nbsp;&nbsp;
                            <a href="{{url('hos/drug_hos/'.(Auth::user()->store_id).'/'.(Auth::user()->id))}}" class="float-sm-right btn btn-success btn-glow round px-2"><i class="fas fa-plus-circle text-white-90 mr-1" style="font-size:15px "></i> เพิ่มรายการยาจาก Hos</a>&nbsp;&nbsp;
                            <a href="{{url('setting/drug_print/'.(Auth::user()->store_id).'/'.(Auth::user()->id))}}" class="float-sm-right btn btn-warning btn-glow round px-2"><i class="fas fa-print text-white-90 mr-1" style="font-size:15px "></i>Print Drug all&nbsp;&nbsp;</a> -->
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <section id="floating-point">
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <div class="card">   
                                    <div class="card-content collapse show">
                                        <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap shadow-lg">
                                            <div class="table-responsive">
                                                <table id="example" class="table table-hover sourced-data" >                                   
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;color:#7B0099" width="2%">ลำดับ</th>
                                                             <!-- <th style="text-align: center;color:#7B0099" width="3%">Clinic</th> -->
                                                            <th style="text-align: center;color:#7B0099" width="5%">oapp_id</th>
                                                            <th style="text-align: center;color:#7B0099" width="15%">ptname</th>
                                                             <!--<th style="text-align: center;color:#7B0099" >doctor</th> -->
                                                            <th style="text-align: center;color:#7B0099" width="8%">clinic_name</th>
                                                            <th style="text-align: center;color:#7B0099" width="15%">doctor_name</th>
                                                            <th style="text-align: center;color:#7B0099" width="5%">hn</th>
                                                            <th style="text-align: center;color:#7B0099" width="10%">vstdate</th>                                                          
                                                            <th style="text-align: center;color:#7B0099 "width="10%">nextdate</th>
                                                            <th style="text-align: center;color:#7B0099 "width="7%">nexttime</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>         
                                                        <?php $number = 0; ?>                                               
                                                        @foreach ($datahos as $items)

                                                                <?php $number++;   
                                                                    $calculater = DB::connection('mysql2')->table('oapp')->where('oapp_id','=',$items->oappid)->first(); 
                                                                    if ($calculater->nextdate == '') {
                                                                            $infobgcolor = "background-color:#D6EAF8";
                                                                    }elseif($calculater->nextdate !== ''){
                                                                        $countdateold =   round(abs(strtotime(date('Y-m-d')) - strtotime($calculater->nextdate))/60/60/24)+1; 
                                                                        $datestartss = strtotime($calculater->nextdate);

                                                                        $datestart = date('Y-m-d');
                                                                        $strNewDate1 = date ("Y-m-d", strtotime("+1 day", strtotime($datestart)));  // มากกว่า 1 วัน
                                                                        $strNewDate2 = date ("Y-m-d", strtotime("+2 day", strtotime($datestart)));  // มากกว่า 2 วัน
                                                                        $strNewDate3 = date ("Y-m-d", strtotime("+3 day", strtotime($datestart)));  // มากกว่า 3 วัน
                                                                        // echo 'วันที่ '.$strNewDate;
                                                                        //   echo 'วันที่ '.$datestartss;
                                                                        // $datestart=strtotime(date('Y-m-d'));   
                                                                        // $dateend= $calculater->nextdate;
                                                                        
                                                                        // $calculate =strtotime("$dateend")-strtotime("$datestart");
                                                                        // $summary=floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.)
                                                                        // echo "$summary วัน";
                                                                                                                      
                                                                            if(strtotime($calculater->nextdate) == $datestart){
                                                                                $infobgcolor = "background-color:#56F378";
                                                                            }elseif($calculater->nextdate == $strNewDate1 ){                                                    
                                                                                $infobgcolor = "background-color:#7A9AF1";    
                                                                            }elseif($calculater->nextdate == $strNewDate2 ){                                                    
                                                                                $infobgcolor = "background-color:#F17ADD";  
                                                                            }elseif($calculater->nextdate == $strNewDate3 ){                                                    
                                                                                $infobgcolor = "background-color:#67F8F8";  
                                                                                
                                                                            }else{
                                                                                $infobgcolor = "";   // 23985 
                                                                            }
                                                                    } else {
                                                                        $infobgcolor = "background-color:#F3FADA";
                                                                    }                                                              
                                                                
                                                                ?> 
                                                            <tr class="pull-up" style="{{$infobgcolor}}">   
                                                                <td style="text-align: center;" width="2%">{{$number+1}}</td>
                                                               
                                                                <td style="text-align: center;" width="5%">{{$items->oappid }}</td>
                                                                <td style="text-align: center;" width="15%">{{$items->pname }} {{$items->fname }} {{$items->lname }}</td>
                                                               
                                                                <td style="text-align: center;">{{$items->name }}</td>
                                                                <td style="text-align: center;" width="15%">{{$items->dname }}</td>
                                                                <td style="text-align: center;" width="5%">{{$items->hn }}</td>
                                                                <td style="text-align: center;" width="10%">{{$items->vstdate }}</td>  
                                                                <td style="text-align: center;" width="10%">{{$items->nextdate }}</td> 
                                                                <td style="text-align: center;" width="7%"> {{$items->nexttime }} 
                                                                </td> 
                                                            </tr>   
                                                          
                                                         @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

 

@endsection

