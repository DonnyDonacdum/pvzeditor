@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Create a Zombie")
   @section('List')
   <form action="{{route('Zombie.store')}}" method="post">
      @csrf
  <label for="fname">Zombie name:</label><br>
  <input type="text" id="fname" name="name" required><br>
  <label for="lname">Armor:</label><br>
  <input type="text" id="lname" name="armor" required><br><br>
  <label for="fname">Abilities:</label><br>
  <input type="text" id="fname1" name="special" required><br>
  <label for="lname">Speeds:</label><br>
  <input type="text" id="lname2" name="sped" required><br><br>
  <label for="lname">description:</label><br>
  <input type="text" id="lname3" name="descript" required><br><br>
  <input type="submit" value="Submit">
</form>
   @endsection