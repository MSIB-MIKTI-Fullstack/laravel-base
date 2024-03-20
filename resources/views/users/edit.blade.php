<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit DATA</title>
</head>

<body>
   <form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="name" value="{{ $user->name }}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="{{ $user->email }}"></td>
        </tr>
       <tr>
        <td></td>
        <td><button type="submit">Submit</button></td>
       </tr>
    </table>
   </form>
</body>

</html>