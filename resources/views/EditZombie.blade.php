@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Edit a Level")
   @section('List')
   <form action="{{route('Zombie.update',$adventure->id)}}" method="Put">
  <label for="fname">Level:</label><br>
  <input type="text" id="fname" name="name"><br>
  <label for="lname">Background:</label><br>
  <input type="text" id="lname" name="armor"><br><br>
  <label for="fname">Gimmick:</label><br>
  <input type="text" id="fname1" name="special"><br>
  <label for="lname">Flags:</label><br>
  <input type="text" id="lname2" name="sped"><br><br>
  <label for="lname">Waves:</label><br>
  <input type="text" id="lname3" name="descript"><br><br>
  <input type="submit" value="Submit">
</form>
   @endsection