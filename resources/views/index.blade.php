<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

    <a href="{{ route('person.create') }}" class="btn btn-primary">Add Person</a>

    <div class="container">
        <h2>Persons List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Street</th>
                    <th>Home Nr</th>
                    <th>Zipcode</th>
                    <th>City</th>
                    <th>Phone Nr</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                <tr>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->street }}</td>
                    <td>{{ $person->home_nr }}</td>
                    <td>{{ $person->zipcode }}</td>
                    <td>{{ $person->city }}</td>
                    <td>{{ $person->phone_nr }}</td>
                    <td>
                        <a href="{{ route('people.edit', $person->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('people.destroy', $person->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>