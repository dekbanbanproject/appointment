@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection



   <!-- <?php                                  
            $calculater = DB::table('asset_article')->where('ARTICLE_ID','=',$infoasset->ARTICLE_ID)->first();                                                
            if($calculater->EXPIRE_DATE == ''){
                $infobgcoloer = "background-color:#D6EAF8";
            }elseif($calculater->EXPIRE_DATE !== ''){
                $countdateold =   round(abs(strtotime(date('Y-m-d')) - strtotime($calculater->EXPIRE_DATE))/60/60/24)+1;                                                    
                if(strtotime($calculater->EXPIRE_DATE) > strtotime(date('Y-m-d'))){
                    $infobgcoloer = "background-color:#90EE90";
                }elseif($countdateold <= 30 && $countdateold >= 0){                                                    
                    $infobgcoloer = "background-color:#FCF3CF";
                }else{
                    $infobgcoloer = "";
                }

            }else{
                $infobgcoloer = "";                                                    
            }
?> -->
