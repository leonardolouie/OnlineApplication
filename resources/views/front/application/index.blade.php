
@extends('front.application.inc.master')
@section('title', 'Phil Power Corp  Online Application')
@section('content')



    <form method="POST" action="/application/save">
        @csrf
        
        <div class="container mt-5 mb-5"> 
            <h1 class="h2">ONLINE APPLICATION</h1>
        </div>
        <div class="container"> 
            <div class="row"> 
            <div class="col-lg-6"> 
                @include('front.application.components.top')
                
                <div class="mt-5 mb-5"> 
                    <h2 class="h4">PERSONAL INFORMATION</h1>
                </div>
                
                @include('front.application.components.personal')
            </div>
            <div class="col-lg-6"> 
                <div class="mb-5"> 
                    <h2 class="h4">IN CASE OF EMERGENCY</h1>
                </div>
                 @include('front.application.components.incase-emergency')
                 <div class="mb-5"> 
                    <h2 class="h4">EDUCATIONAL BACKGROUND</h1>
                 </div>
                @include('front.application.components.educational-background')
                <div class="mb-5"> 
                    <h2 class="h4">EMPLOYMENT HISTORY</h1>
                 </div>
                 @include('front.application.components.employment-history')

                 <button type="submit" class="btn btn-primary">Submit Application</button>
            </div>
          </div>
        </div>
       
    </form>

@endsection