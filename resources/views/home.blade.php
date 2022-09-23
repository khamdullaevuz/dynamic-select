<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/ajax.js')
</head>

<body>
    <form action="{{ route('value') }}" method="POST">
        @csrf
        <label>Country</label>
        <select name="country" id="country">
            <option value="0" selected="selected">Select country</option>
            @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <label>State</label>
        <select name="state" id="state">
            <option value="0" selected="selected">Select state</option>
        </select>
        <label>City</label>
        <select name="city" id="city">
            <option value="0" selected="selected">Select city</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
