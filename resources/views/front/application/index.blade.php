
@extends('front.application.inc.master')
@section('title', 'Phil Power Corp  Online Application')
@section('content')



    <form method="POST" action="/application/save" id="application-form" enctype="multipart/form-data">
        
      
        @csrf
        
        <div class="container mt-5 mb-5"> 
            <h1 class="h2">ONLINE APPLICATION</h1>
        </div>
        
        <div class="container mt-5 mb-5">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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
                <div class="mb-5"> 
                    <h2 class="h4">CHARACTER REFERENCE</h1>
                </div>
                @include('front.application.components.character-reference')
                <button type="button"  id="preview-summary-button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Preview Application
                </button>
                <div class="mb-5 mt-2">
                 <button  type="submit" id="btn-submit" class="btn btn-primary">Submit Application</button>
                </div>
            </div>
          </div>
        </div>
       
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content ">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Application Preview</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body container" id="application-form-summary">
           
                </div>
                <div class="modal-footer">
                 <p> we will use that information to respond to your application and to help us get the information you have requested</p>
                </div>
              </div>
            </div>
          </div>
    </form>

@endsection