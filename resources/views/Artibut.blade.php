@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Zombie description")
   @section('List')
   <h1>{{ $adventure['level']}}</h1>
        <p>Background : {{ $zombie['speed']}}</p>
        <p>{{ $zombie['descrip']}}</p>
   @endsection