@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Zombie List")
   @section('List')
    <div>
        <h1>Zombie List</h1>
    </div class="text-left">
    <a href="{{route('Zombie.create')}}"> Create a zombie</a>
    <div>

    </div>
    <table class="table table-success table-stripped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>ArmorType</th>
        <th>Abilities</th>
        <th>Speeds</th>
        <th>Manage</th>
    </tr>
    @php ($wut=0)
    @foreach($zombies as $bie)
    <tr>
        <td>{{$wut+1}}</td>
        <td><a href="Zombie/{{$bie['Artibut']}}"> 
{{ $bie['name'] }}
</a></td>
        <td>{{$bie['armortype']}}</td>
        <td>{{$bie['special']}}</td>
        <td>{{$bie['speed']}}</td>
        <td>
            <a  href="{{route('Zombie.show',$bie->id)}}" class="btn btn-warning">show</a>
            <a  href="{{route('Zombie.edit',$bie->id)}}" class="btn btn-primary">edit</a>
            <form action="{{route('Zombie.destroy',$bie->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
   @endsection