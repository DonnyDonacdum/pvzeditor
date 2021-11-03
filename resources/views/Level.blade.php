@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Level description")
   @section('List')
   <h1>{{ $adventure['level']}}</h1>
        <p>Background : {{ $adventure['background']}}</p>
        <p>{{ $adventure['description']}}</p>
   @endsection