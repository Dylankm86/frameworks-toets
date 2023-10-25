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
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            display: block;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-success {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-success:hover {
            background-color: #45a049;
        }
    </style>
    <div class="container">
        <h2>Edit Person</h2>
        <form method="POST" action="{{ route('person.update', $person->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $person->name }}" required>
            </div>
            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" name="street" class="form-control" value="{{ $person->street }}" required>
            </div>
            <div class="form-group">
                <label for="home_nr">Home Nr</label>
                <input type="text" name="home_nr" class="form-control" value="{{ $person->home_nr }}" required>
            </div>
            <div class="form-group">
                <label for="zipcode">Zipcode</label>
                <input type="text" name="zipcode" class="form-control" value="{{ $person->zipcode }}" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" value="{{ $person->city }}" required>
            </div>
            <div class="form-group">
                <label for="phone_nr">Phone Nr</label>
                <input type="text" name="phone_nr" class="form-control" value="{{ $person->phone_nr }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


</body>
</html>