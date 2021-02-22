<div class="container mt-5">
    <form action="/destroyALL" method="POST" class="my-3">
        @csrf
        <button type="submit" class="btn btn-danger">DELETE ALL</button>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($people as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    <a href="/show-people/{{$item->id}}">SHOW</a>
                </td>
                <td>
                    <a href="/edit-people/{{$item->id}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    <form action="/destroy-people/{{$item->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>