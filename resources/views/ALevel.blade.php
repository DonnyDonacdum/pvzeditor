@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Adventure Level List")
   @section('List')
    <div>
        <h1>Adventure level List</h1>
    </div class="text-left">
    <a href="{{route('adventure.create')}}"> Create a Level</a>
    <div>

    </div>
    <table class="table table-success table-stripped">
    <tr>
        <th>No</th>
        <th>Level</th>
        <th>Background</th>
        <th>Gimmick</th>
        <th>Flags</th>
        <th>Wave counts</th>
        <th>Manage</th>
    </tr>
    @php ($huh=0)
    @foreach($adventure as $level)
    <tr>
        <td>{{$huh++}}</td>
        <td><a href="Adventure/{{$level['level']}}"> 
{{ $pro['level'] }}
</a></td>
        <td>{{$level['background']}}</td>
        <td>{{$level['gimmick']}}</td>
        <td>{{$level['flag']}}</td>
        <td>{{$level['wave']}}</td>
        <td>
            <a  href="{{route('adventure.show',$level->id)}}">show</a>
            <a  href="{{route('adventure.edit',$level->id)}}">edit</a>
            <form action="{{route('adventure.destroy',$level->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
   @endsection