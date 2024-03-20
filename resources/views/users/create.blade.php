<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREATE DATA</title>
</head>

<body>
   <form action="{{ route('users.store') }}" method="post">
    @csrf
    <table>
        <tr>
            <td class="">Nama</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password"></td>
        </tr>
       <tr>
        <td></td>
        <td><button type="submit">Submit</button></td>
       </tr>
    </table>
   </form>
</body>

</html>