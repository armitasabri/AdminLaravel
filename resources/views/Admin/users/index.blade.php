

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
               
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">delete or update</th>
                
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          @foreach ($users as $user)
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                     <td> <a href="/editmyuser/{{$user->id}}">update</a>  
                       <a href="/deletemyuser/{{$user->id}}">delete</a> </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                <div class="card-body">
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


