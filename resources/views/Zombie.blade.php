@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Adventure Level List")
   @section('List')
    <div>
        <h1>Zombie List</h1>
    </div class="text-left">
    <a href="{{route('Adventure.create')}}"> Create a zombie</a>
    <div>

    </div>
    <table class="table table-success table-stripped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>ArmorType</th>
        <th>Gimmick</th>
        <th>Flags</th>
        <th>Wave counts</th>
        <th>Manage</th>
    </tr>
    @php ($wut=0)
    @foreach($zombies as $bie)
    <tr>
        <td>{{$wut+1}}</td>
        <td><a href="Adventure/{{$level['level']}}"> 
{{ $bie['level'] }}
</a></td>
        <td>{{$bie['background']}}</td>
        <td>{{$bie['gimmick']}}</td>
        <td>{{$bie['flag']}}</td>
        <td>{{$bie['wave']}}</td>
        <td>
            <a  href="Zombie/{{$level['level']}}">show</a>
            <a  href="{{route('Adventure.edit',$level->id)}}">edit</a>
            <form action="{{route('Adventure.destroy',$level->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
   @endsection