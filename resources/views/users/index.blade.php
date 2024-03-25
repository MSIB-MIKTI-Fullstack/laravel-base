<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto my-4">
    <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-400 text-white  font-bold py-2 px-4 shadow-md rounded">
        Add Data
    </a>
    <table class="table-auto mt-4 shadow-xl rounded">
        <tr>
            <th class="bg-slate-200 py-2 rounded-tl">Name</th>
            <th class="bg-slate-200 py-2">Email</th>
            <th class="bg-slate-200 py-2 rounded-tr">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr class="odd:bg-white even:bg-slate-50">
                <td class="px-2 py-2">{{ $user->name }}</td>
                <td class="px-2 py-2">{{ $user->email }}</td>
                <td class="px-2 py-2 flex">
                    <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:text-black font-bold px-2 py-1 mx-1">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-black font-bold px-2 py-1 mx-1">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>   
    </div>
</body>

</html>