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
                                   
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

 

@endsection

