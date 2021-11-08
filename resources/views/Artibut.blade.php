@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Zombie description")
   @section('List')
   <h1>{{ $zombies['name']}}</h1>
        <p>Speeds : {{ $zombies['speed']}}</p>
        <p>{{ $zombies['descrip']}}</p>
   @endsection