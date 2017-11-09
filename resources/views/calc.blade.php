
@extends('layouts.master')

@push('head')
    <link href='/css/p3.css' rel='stylesheet'>

@endpush

@section('content')
@php ($test = 'test');

<form method='GET' action='/nums'>

    {{ csrf_field() }}
  <div>
      <label for="numpeople">Split by # of People: <strong>REQUIRED</strong></label>
      <input type="text" id="numpeople" name="numpeople" value='{{ old ('numpeople') or '' }}'>
  </div>
  <br>
<br>
<br>

  <div>
      <label for="totalnum">Tab Total <strong>REQUIRED</strong> </label>
      <input type="text" id="totalnum" name="totalnum">
</div>
<br>
  <div>
    <br>
  <label for='tip'>Tip Amount<br><strong>REQUIRED</strong></label>
         <select name='tip' id='tip'>
             <option value=''>Select</option>
             <option value='.10' >10%</option>
             <option value='.15' >15%</option>
             <option value='.18' >18%</option>
             <option value='.20' >20%</option>
             <option value='.25' >25%</option>
         </select>
  </div>
<br>
  <br>
  <div>
      <label for="roundup">Round Up?</label>
      <input type="checkbox" id="roundup" name="roundup" value="Yes" />
  </div>
  <br>

  <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Calculate'>
  <div>

  </div>
  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif

  <p>The total per person is:  </p> 
</form>









@endsection
