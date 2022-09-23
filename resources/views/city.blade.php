<label>City</label>
<select name="city" id="city">
    <option value="0" selected="selected">Select city</option>
    @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
    @endforeach
</select>
