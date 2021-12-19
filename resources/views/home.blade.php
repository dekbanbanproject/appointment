@extends('layouts.appdash')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <section class="col-md-12"> --}}

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
                                                        @foreach ($datahos as $key => $items)
                                                            <tr class="pull-up">   
                                                                <td style="text-align: center;" width="2%">{{$key+1}}</td>
                                                                 <!-- <td style="text-align: center;" width="10%">{{$items->clinic }}</td> -->
                                                                <td style="text-align: center;" width="5%">{{$items->oapp_id }}</td>
                                                                <td style="text-align: center;" width="15%">{{$items->pname }} {{$items->fname }} {{$items->lname }}</td>
                                                                <!-- <td style="text-align: center;">{{$items->doctor }}</td> -->
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
{{-- </section> --}}
@endsection
