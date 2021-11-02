@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Level description")
   @section('List')
   <h1>{{ $level['level']}}</h1>
        <p>Background : {{ $level['background']}}</p>
        <p>{{ $level['description']}}</p>
   @endsection