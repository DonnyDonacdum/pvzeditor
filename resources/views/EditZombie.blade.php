@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Edit a Zombie")
   @section('List')
   <form action="{{route('Zombie.update',$zombies->id)}}" method="Post">
   <input type="hidden" name="_menthod" value="PATCH">
   <label for="fname">Zombie name:</label><br>
  <input type="text" id="fname" name="name" ><br>
  <label for="lname">Armor:</label><br>
  <input type="text" id="lname" name="armor" ><br><br>
  <label for="fname">Abilities:</label><br>
  <input type="text" id="fname1" name="special" ><br>
  <label for="lname">Speeds:</label><br>
  <input type="text" id="lname2" name="sped" ><br><br>
  <label for="lname">description:</label><br>
  <input type="text" id="lname3" name="descript" ><br><br>
  <input type="submit" value="Submit">
</form>
   @endsection