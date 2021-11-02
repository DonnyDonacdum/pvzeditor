@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Create a Level")
   @section('List')
   <form action="/action_page.php" method="post">
  <label for="fname">Level:</label><br>
  <input type="text" id="fname" name="lecel" required><br>
  <label for="lname">Background:</label><br>
  <input type="text" id="lname" name="back" required><br><br>
  <label for="fname">Gimmick:</label><br>
  <input type="text" id="fname1" name="gim" required><br>
  <label for="lname">Flags:</label><br>
  <input type="text" id="lname2" name="fleg" required><br><br>
  <label for="lname">Waves:</label><br>
  <input type="text" id="lname2" name="wave" required><br><br>
  <label for="lname">description:</label><br>
  <input type="text" id="lname3" name="descrip" required><br><br>
  <input type="submit" value="Submit">
</form>
   @endsection