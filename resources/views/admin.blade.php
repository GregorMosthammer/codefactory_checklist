

@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone number</th>
        <th>E-mail</th>
        <th>Checklist status</th>
      </tr>
    </thead>
    <tbody>
     @foreach($students as $student)
    
      <tr>
        <td>{{$student->firstname}}</td>
        <td>{{$student->lastname}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->phone}}</td>
        <a><td>details...</td></a>
      </tr>  
     @endforeach    
      </tbody>
  </table>
</div>
@endsection
