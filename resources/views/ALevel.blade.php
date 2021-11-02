@include('layoutPVZ.navbar')
   @extends('layoutPVZ.mainlayout')
   @section('Title',"Adventure Level List")
   @section('List')
    <div>
        <h1>Adventure level List</h1>
    </div>
    <table>
    <tr>
        <th>No</th>
        <th>Level</th>
        <th>Background</th>
        <th>Gimmick</th>
        <th>Flags</th>
        <th>Wave counts</th>
    </tr>
    @php ($huh=0)
    @foreach($adventure as $level)
    <tr>
        <td>{{$huh++}}</td>
        <td>{{$level['level']}}</td>
        <td>{{$level['background']}}</td>
        <td>{{$level['gimmick']}}</td>
        <td>{{$level['flag']}}</td>
        <td>{{$level['wave']}}</td>
    </tr>
    @endforeach
    </table>
   @endsection