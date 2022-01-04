@extends('layouts.backend.master')
@section('pagename') {{ __('intake.intake_planner', ['attribute' => $intake->id]) }} @endsection
@section('css')

@endsection
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="InlineCheckbox" data-parsley-multiple="groups" data-parsley-mincheck="2">
                            <label class="custom-control-label" for="InlineCheckbox">Check me out</label>
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </form>                                           
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
    <div class="col-lg-4">
        <div class="card"> 
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">                      
                        <h4 class="card-title">{{ __('intake.intake_info') }}</h4>                   
                    </div><!--end col-->                                   
                </div>  <!--end row-->                                  
            </div><!--end card-header-->
            <div class="card-body border-bottom-dashed">
                <div class="earning-data text-center">
                    <img src="assets/images/money-beg.png" alt="" class="money-bag my-3" height="60">
                    <h5 class="earn-money mb-1">{{ $intake->name }} {{ $intake->lastname }}</h5>
                    <p class="text-muted font-15 mb-4">[{{ $intake->company_name }}]</p>
                    <div class="text-center my-2">
                        <h6 class="text-primary bg-soft-primary p-3 mb-0 font-11 rounded">
                            <i class="align-self-center fa fa-envelope mr-1"></i>
                            {{ $intake->email }}
                        </h6>
                    </div> 
                </div>                                                                                                          
            </div><!--end card-body-->
            <div class="card-body my-1">
                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlTextarea1">{{ __('fields.explanation') }}</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" disabled>{{ strip_tags($intake->explanation) }}</textarea>
                    </div><!--end col-->                                     
                </div><!--end row-->  
            </div><!--end card-body-->
        </div><!--end card-->   
    </div><!-- end col--> 
</div> <!-- end row -->
@endsection
@section('js')

@endsection
