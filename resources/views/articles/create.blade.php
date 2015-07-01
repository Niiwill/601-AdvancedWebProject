@extends('app')

@section('content')
<div class="containerProduction container container2">

<form  class="form-horizontal forma" method="POST" action="" >
	<input type="hidden" name="_token" value="{{ csrf_token()}}">
<fieldset>

<!-- Form Name -->
<legend class="text2">Porud/bina</legend>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pizza">Pizza</label>
        <div class="controls col-sm-10">
            <select id="pizza_id" name="pizza_id" class="input-xlarge form-control">
                <option value="1">Capriciossa</option>
                <option value="2">Margarita</option>
                <option value="3">Venezia</option>
            </select>
        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="velicina">Velicina</label>
        <div class="controls col-sm-10">
            <select id="velicina_id" name="velicina_id" class="input-xlarge form-control">
                <option value="1">M - 4 €</option>
                <option value="2">L - 6 €</option>
                <option value="3">XL - 12 €</option>
            </select>
        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="kolicina">Kolicina</label>
        <div class="controls col-sm-10">
            <select id="kolicina" name="kolicina" class="input-xlarge form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="napomena">Posebna napomena</label>
        <div class="controls col-sm-10">
            <textarea id="napomena" name="napomena" class="form-control "></textarea>
        </div>
    </div>

    <legend class="text2 bf">Lokacija</legend>


    <!-- Text input-->
    <div class="form-group">
        <label class="control-label col-sm-2" for="adresa">Adresa</label>
        <div class="controls col-sm-10">
            <input id="adresa" name="adresa" type="text" placeholder="ulica / broj" class="input-xlarge form-control" required="">

        </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
        <label class="control-label col-sm-2" for="telefon">Broj telefona</label>
        <div class="controls col-sm-10">
            <input id="telefon" name="telefon" type="text" placeholder="" class="input-xlarge form-control">

        </div>
    </div>

    <!-- Button -->
    <div class="form-group ">
        <label class="control-label col-sm-2" for="submit"></label>
        <div class="controls col-sm-offset-3 col-sm-4">
            <button id="submit" name="submit" class="btn btn-primary " onsubmit="lockoutSubmit(this)">Posalji</button>
        </div>
    </div>

</fieldset>



@if($errors->any())
@foreach($errors->all() as $error )
<ul class='alert alert-danger'>
<li>{{$error}}</li>
</ul>

@endforeach
@endif

</form>

</div>



@endsection