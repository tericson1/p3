@extends('layouts.master')

@push('head')
  
@endpush

@section('content')
<form >
  <div>
      <label for="numpeople">Split by # of People: <strong>REQUIRED</strong></label>
      <input type="text" id="numpeople" name="numpeople">
  </div>
  <br>
<br>
<br>
  <div>
      <label for="totalnum">Tab Total <strong>REQUIRED</strong></label>
      <input type="text" id="totalnum" name="totalnum">
</div>
<br>
  <div>
    <br>
  <label for='tip'>Tip Amount</label>
         <select name='tip' id='tip'>
             <option value='select'>Select</option>
             <option value='.10' >10%</option>
             <option value='.15' >15%</option>
             <option value='.18' >18%</option>
             <option value='.20' >20%</option>
             <option value='.25' >25%</option>
         </select>
  </div>

  <br>
  <div>
      <label for="roundup">Round Up?</label>
      <input type="checkbox" id="roundup" name="roundup" value="Yes" />
  </div>
  <br>

  <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Calculate'>

</form>
@endsection
