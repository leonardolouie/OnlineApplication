
@extends('front.application.inc.master')
@section('title', 'Phil Power Corp  Online Application')
@section('content')



    <form method="POST" action="/application/save">
        @csrf
        
        <div class="container container-main"> 
            <div> 
                <div class="mt-5 mb-5"> 
                    <h1 class="h2">ONLINE APPLICATION</h1>
                </div>
                
                @include('front.application.components.top')
                
                <div class="mt-5 mb-5"> 
                    <h2 class="h4">PERSONAL INFORMATION</h1>
                </div>
                
                @include('front.application.components.personal')
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>

@endsection