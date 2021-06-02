<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>

{{auth()->user()-name}}
@if(isset($edit_user))
    <form action="/update-users" method="post">
        @else
            <form action="/add-users" method="post">
                @endif

                <label for="user">user</label>
                <input id="user" type="text" @isset($edit_user) value="{{$edit_user->user}}" @endisset name="user">
                <br>
                @csrf


                <label for="userCreatedAt">user created at</label>
                <input id="userCreatedAt" type="datetime-local" @isset($edit_user) value="{{$edit_user->userCreatedAt}}" @endisset name="post created at">
                <br>

                @if(isset($edit_user))
                    <input type="hidden" value="{{$edit_user->id}}" name="id">
                    <button>Update user</button>
                @else
                    <button>Save user</button>
                @endif

            </form>


            <hr>

            @foreach($users as $user1)
                <div style="border: 1px solid #3e0b0b; padding:20px;">
                    {{$user1->user}}
                    {{$user1->userCreatedAt}}

                    <br>
                    @if(auth()->user()-> AdminOrNot == 1)
                        <a href="/delete-user/{{$user->id}}">Delete user</a>
                        <a href="/edit-user/{{$user->id}}">Edit user</a>
                    @endif
                </div>
    @endforeach

</body>
</html>
