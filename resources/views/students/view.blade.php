@extends('temp')

@section('navbar')
    <div> 
        <p class="text-center"> {{$nav}}</p>
        <h2> @mado</h2>
        <h1> @myName("ali")</h1>     
    </div>
@endsection

@section('content')
     <table class="table table-dark border-3 border-secondary" >
         <thead>
             <th> Id </th>
             <th> first name </th>
             <th> last name </th>
             <th> age </th>
             <th> Salary </th>
             <th> position </th>
         </thead>
         <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>  {{$student['id']}}</td>
                    <td>  {{$student['fname']}}</td>
                    <td>  {{$student['lname']}}</td>
                    <td>  {{$student['age']}}</td>
                    <td>  {{ $student['salary']}}</td>
                    <td>  {{ $student['position']}}</td>
                </tr>
            @endforeach
         </tbody>
     </table>
@endsection