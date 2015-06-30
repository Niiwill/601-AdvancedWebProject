@extends('app')

@section('content')
    <div class="containerProduction container" style="cursor: crosshair">
        <div class="box-with-text">
           <div class="text">Pizza <br> <span>APP</span></div>
        </div>

<div class="row" style="padding-top:70px; border-top: 1px solid rgba(255,255,255,0.2);">



    <a href="porudzbina">
        <div class="demo-2 effect col-xs-12 col-md-4">
            <li>
                <h2 class="zero">ONLINE PORUDZBINA</h2>
                <p class="zero">Narucite vasu omiljenu pizzu</p>
            </li>
            <li><img class="top" src="css/img/porudzbinaSlika.png" alt=""/></li>
        </div>
    </a>
    <div class="col-md-4 profil">

            <h2 style="font-size: 15px;">Dobrodošli</h2><h2>{{Auth::user()->name}}</h2>




        <p>Do isporuke vase porudzbine ostalo je jos </p><h1 id="countdown" style="text-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);"></h1>
    </div>
    <div class="demo-2 effect col-xs-12 col-md-4">
        <li>
            <h2 class="zero">MENI</h2>
            <p class="zero">Otrkijte nasu ponudu</p>
        </li>
        <li><img class="top" src="css/img/meniSlika.png" alt=""/></li>
    </div>


</div>


        <div class="row" style="padding-bottom:70px; border-bottom: 1px solid rgba(255,255,255,0.2);">


            <div class="col-md-4 bela">



                    <h3>Ukupna cena vase porudzbine </h3><div class="krug"><h1>25
                            {{--@foreach ( $iznos as $iznos)--}}



                            {{--{{$iznos->ime}}--}}

                            {{--@endforeach--}}
                                <br><span class="euro">euro</span></h1></div>




            </div>




            <div class="demo-2 effect col-xs-12 col-md-4">
                <li>
                    <h2 class="zero">PROBA 3</h2>
                    <p class="zero">Lorem ipsum dolor sit amet.</p>
                </li>
                <li><img class="top" src="css/img/probaSlika.png" alt=""/></li>
            </div>
            <a href="auth/logout">
                <div class="col-md-4 col-xs-12 logout" style="padding: 0px;">

                    <h1>LOG OUT</h1>

                </div>
            </a>





        </div>




    </div>
@endsection
