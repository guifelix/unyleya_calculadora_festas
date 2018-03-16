<!doctype html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{!! asset('js/validate.js') !!}"></script>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculadora de festas!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
        @endif

        @if(!$festas)
        <div class="content">
            <div class="title m-b-md" id="titleFesta">
                Calculadora de festas
            </div>
            <form method="POST" action="/post" id="festaForm">
                @csrf
                <div class="row flex-container">
                    <div class="col-md-6 col-xs-12 ord one">
                        <div class="form-group">
                            <input type="number" class="form-control festa" name="adultos" id="adultos" placeholder="Digite a quantidade de adultos">
                        </div>
                    </div>
                    <div class="col-md-6  col-xs-12 ord two">
                        <label for="bebida"><b><strong>Deseja incluir bebida alcoólica?</strong></b></label>
                        <br>
                        <b><strong>
                            <label class="radio-inline"><input type="radio" name="bebida" value="s">  Sim</label>
                            &nbsp&nbsp&nbsp
                            <label class="radio-inline"><input type="radio" name="bebida" value="n" checked>  Não</label>
                        </strong></b>
                    </div>
                    <div class="col-md-6 col-xs-12 ord three">
                        <div class="form-group">
                            <input type="number" class="form-control festa" name="criancas" id="criancas" placeholder="Digite a quantidade de crianças">
                        </div>
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-primary calcular"><b>Calcular minha festa!</b></button>
            </form>
            @else
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h1 class="congrat"><b><strong>Boas festas!</strong></b></h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col tada">
                                @emojione(':tada:')
                                @emojione(':star_struck:')
                                @emojione(':confetti_ball:')
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary voltar" href="{{ url()->previous() }}"><b>Recalcular minha festa...</b></button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <table >
                            <thead>
                                <tr>
                                    <th>Sua festa tem <span style="color:red">{{$festas['geral']}}</span> convidado(s), sendo <span style="color:red">{{$festas['adultos']}}</span> adulto(s) e <span style="color:red">{{$festas['criancas']}}</span> criança(s)</th>
                                </tr>
                                <tr>
                                    <th>Agora só falta comprar os seguintes itens:</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($festas['alcool'] !== 'n')
                                <tr>
                                    <td>@emojione(':tumbler_glass:')<strong><b>Whisky (L): {{$festas['whisky']}}</b></strong></td>
                                </tr>
                                <tr>
                                    <td>@emojione(':beer:') <strong><b>Cerveja (Latas): {{$festas['cerveja']}}</b></strong></td>
                                </tr>
                                @endif
                                <tr>
                                    <td>@emojione(':cut_of_meat:') <strong><b>Carne (Kg): {{$festas['carne']}}</b></strong></td>
                                </tr>
                                <tr>
                                    <td>@emojione(':candy:') <strong><b>Doces: {{$festas['doce']}}</b></strong></td>
                                </tr>
                                <tr>
                                    <td>@emojione(':croissant:') <strong><b>Salgados: {{$festas['salgado']}}</b></strong></td>
                                </tr>
                                <tr>
                                    <td>@emojione(':cup_with_straw:') <strong><b>Refrigerante (L): {{$festas['refrigerante']}}</b></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif                
        </div>
    </div>
</body>
</html>
