@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Edit a Level")
   @section('List')
   <form action="{{route('Adventure.update',$adventure->id)}}" method="PUT">
   @csrf
  <label for="fname">Level:</label><br>
  <input type="text" id="fname" name="lecel"><br>
  <label for="lname">Background:</label><br>
  <input type="text" id="lname" name="back"><br><br>
  <label for="fname">Gimmick:</label><br>
  <input type="text" id="fname1" name="gim"><br>
  <label for="lname">Flags:</label><br>
  <input type="text" id="lname2" name="fleg"><br><br>
  <label for="lname">Waves:</label><br>
  <input type="text" id="lname2" name="wave"><br><br>
  <label for="lname">description:</label><br>
  <input type="text" id="lname3" name="descrip"><br><br>
  <input type="submit" value="Submit">
</form>
   @endsection