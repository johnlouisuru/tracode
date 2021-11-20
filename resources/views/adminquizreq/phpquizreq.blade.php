@extends('admin.navad')
@section('contents')

        <div class=" container h-75 p-5">
            <div class="row align-items-center h-75 p-5">
                <div class="col-6 mx-auto" style=" background-color: #fedcda; border-radius: 20px; border: solid #fed4d2;">
                    <center><h1>Quiz Required score</h1></center>
                    <center><form action="/reqscores/create"><button class="button create" type="submit" >Create required Score</button></form></center>
                <center><form action="/phpquizreqviews"><button class="button create" type="submit" >Show Required score</button></form></center>
               <br>
               

            <div  class="col d-flex justify-content-center" style="display: flex; align-items: center;">
            </div>
        </div>

                </div>
            </div>
 @endsection