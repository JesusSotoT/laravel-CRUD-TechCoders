<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ROLE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        @foreach ($user->roles as $role)
                            {{ $role->title }}
                        @endforeach
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
