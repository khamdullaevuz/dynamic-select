<label>State</label>
<select name="state" id="state">
    <option value="0" selected="selected">Select state</option>
    @foreach ($states as $state)
        <option value="{{ $state->id }}">{{ $state->name }}</option>
    @endforeach
</select>
