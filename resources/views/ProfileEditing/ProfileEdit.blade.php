<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Profile') }}
      </h2>
  </x-slot>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/navreg.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <br>
  <div class="container-fluid h-100">
    <div style="z-index: 100;">
    <div class="row align-items-center h-100">
      <div class="col-6 mx-auto" style=" padding-bottom: 20px;">
        <div class="d-flex justify-content-center row">  
  <div class="card text-center"  style="width: 18rem; height: 15rem;">
   <div class="card-header">
  <x-label for="name" :value="__('Name')" />
   </div>
   <div class="card-body">
    <h3>{{Auth::user()->name}}</h3>
    </div>
    <div class="card-footer">
    <a href="/userprofile/{{Auth::user()->id}}" class="btn btn-primary">Edit name</a>
    <form method="POST" action="{{ route('logout2') }}">
      @csrf
      <x-dropdown-link :href="route('logout2')"
        onclick="event.preventDefault();
        this.closest('form').submit();">
        {{ __('Reset Password') }}
       </x-dropdown-link>
  </form>
   </div>
</div>
      </div>
    </div>
  </div>
    </div>
  <style>
  .container { 
  margin-left: 26%;
  width: 1000px;
  }
  img {
    display: block;
  }
  .center {
    margin-right: -15%;
    text-align: center;
    border: 3px solid green;
  }	
  </style>
 
</x-app-layout>
