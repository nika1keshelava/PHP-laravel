<table class="table table-hover">

    <thead>

    <th>Username</th>

    <th>Email</th>

    <th>First name</th>

    <th>Last name</th>

    <th>Level</th>

    </thead>

    <tbody>
    @foreach($users as $user)

        <tr>

            <td>{{$user->Username}} </td>

            <td>{{$user->Email}} </td>

            <td>{{$user->FirstName}} </td>

            <td>{{$user->LastName}} </td>

            <td>{{$user->AdminOrNot}} </td>


        </tr>
    @endforeach

    </tbody>

</table>
