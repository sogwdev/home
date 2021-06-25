<html>
  <table>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->pwd}}</td>
        <td>{{$item->email}}</td>
      </tr>

    @endforeach
  </table>
</html>
