@extends('app')

@section('content')
<div class="col-md-10 col-md-offset-1 containerAdmin">
    <div class="col-md-2  levoAdmin">
        <div class="row">
            <div class="col-sm-12">

                <div class="card hovercard">
                    <div class="cardheader">

                    </div>
                    <div class="avatar">
                        <img alt="" src="css/img/admin.png">
                    </div>
                    <div class="info">
                        <div class="title">
                            <h2 style="color:snow;">ADMIN</h2>
                        </div>
                        <div class="desc">Admin panel</div>

                    </div>

                    </div>
                </div>

            </div>
        </div>



        <div class="col-md-10" style="padding: 0px">
            <div class="col-md-12 hederAdmin"><h1>Lista porudzbina</h1></div>






	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr class="kategorijeAdmin">
                    <th>ID</th>
					<th>Pizza vrsta</th>

                    <th>Napomena</th>
					<th>Vreme porudzbine</th>
                    <th>Velicina</th>
                    <th>Ime i prezime</th>
                    <th>Adresa</th>
                    <th>Telefon</th>
                    <th style="text-align: right">Kolicina</th>
                    <th style="text-align: right">Ukupna cena</th>
                    <th>Status</th>
                    <th>INFO</th>

				</tr>
				@foreach($orders as $order)
                    <tr class="rezultati">
                        <td id="idValue" data-id="{{$order->id}}">{{$order->id}}</td>
					<td>{{$order->pizza->ime}}</td>
                    <td>{{$order->napomena}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->velicina_id}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->adresa}}</td>
                    <td>{{$order->telefon}}</td>
                    <td style="text-align: right">{{$order->kolicina}}</td>
                    <td style="text-align: right">25 euro</td>
                    <td style="font-weight: 500;font-size: 17px;font-family: Roboto;color:black;opacity:0.26;">

                        <div class="control-group">
                            <div class="controls">
                                <select id="statusValue" name="status" class="input-xlarge" style="font-size:14px;" >
                                    <option value="priprema">U pripremi</option>
                                    <option value="kraj">Gotovo</option>
                                </select>
                            </div>
                        </div>
                    </td>
                        <td><a href="{{url('admin/panel',[$order->id])}}">INFO</td>




                    </tr>
				@endforeach

			</table>

		</div>
	</div>
</div>


</div>
@endsection