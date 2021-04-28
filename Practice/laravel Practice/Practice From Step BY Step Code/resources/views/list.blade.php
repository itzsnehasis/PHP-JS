<center>
    <table border="1">
        <tr>
            <td>Roll</td>
            <td>Name</td>
            <td>Marks</td>
        </tr>
        @foreach($records as $item)
            <tr>
                <td>{{$item->roll}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->marks}}</td>
            </tr>
        @endforeach
    </table>
</center>