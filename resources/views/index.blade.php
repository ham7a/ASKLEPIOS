<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ASKLEPIOS - Plateforme de gestion de pharmacie</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="fontawesome-5.10.1/css/all.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
	
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 60px;
            color: #004c00;
        }

        .subtitle {
            font-size: 36px;
        }

        .links > a {
            color: #004c00;;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
		
		.row {
			font-size: 16px;
		}
		
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    {{--
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Accueil</a>
            @else
                <a href="{{ route('login') }}">Connexion</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Inscription</a>
                @endif
            @endauth
        </div>
    @endif
    --}}
    <div class="content">
        <div class="title">
            <img src="img\ASKLEPIOS.png" height="100"/>
        </div>
        <div class="subtitle m-b-md">
            Plateforme de gestion de pharmacie
        </div>


        <div class="links">
            <a href="{{ url('/medicaments') }}">Inventaire</a>
            <a href="{{ url('/clients') }}">Clients</a>
            <a href="{{ url('/ventes') }}">Ventes</a>
            <a href="{{ url('/fournisseurs') }}">Fournisseurs</a>
            <a href="{{ url('/medecins') }}">Médecins</a>
            <a href="{{ url('/register') }}">Nouvel utilisateur</a>
            {{--<a href="{{ url('/home') }}">Paramètres</a>--}}
        </div>

		
		
		
		<!--
        <div style="padding-top: 40px" >
            <table style="color: black; font-size: 25px" class="table table-borderless">
                <thead>
                <tr>
                    <td class="table-dark" colspan="2">Statistiques générales</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="table-success">
                        <i class="fas fa-prescription-bottle-alt"></i> Stock total:
                        <?php
                        $medicaments = DB::table('medicaments')->sum('medicaments.qty');
                        echo $medicaments;
                        ?>
                    </td>
                    <td class="table-warning">
                        <i class="fas fa-users"></i> Nombre total de clients:
                        <?php
                        $clients = DB::table('clients')->count();
                        echo $clients;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="table-danger">
                        <i class="fas fa-wallet"></i> Chiffre d'affaires:
                        <?php
                        $ventes = DB::table('ventes')->sum('ventes.total');
                        echo $ventes;
                        ?>
                        DHs
                    </td>
                    <td class="table-primary">
                        <i class="fas fa-truck"></i> Nombre total de fournisseurs:
                        <?php
                        $fournisseurs = DB::table('fournisseurs')->count();
                        echo $fournisseurs;
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
		-->
		
		
		
		
		
		
		
		
		
		
		
		
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
				<div class="card-icon">
					<i class="material-icons">local_pharmacy</i>
				</div>
              <p class="card-category">Inventaire</p>
              <h3 class="card-title"><?php
                        $medicaments = DB::table('medicaments')->sum('medicaments.qty');
                        echo $medicaments;
                        ?>
              </h3>
            </div>
			<!--
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="#pablo">Get More Space...</a>
              </div>
            </div>
			-->
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Nombre de clients</p>
              <h3 class="card-title"><?php
                        $clients = DB::table('clients')->count();
                        echo $clients;
                        ?>
						</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">attach_money</i>
              </div>
              <p class="card-category">Total des ventes</p>
              <h3 class="card-title">
                  <?php
                  $ventes = DB::table('ventes')->sum('ventes.total');
                  echo $ventes;
                  ?>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">directions_bus</i>
              </div>
              <p class="card-category">Nombre de fournisseurs</p>
              <h3 class="card-title">
                  <?php
                  $fournisseurs = DB::table('fournisseurs')->count();
                  echo $fournisseurs;
                  ?>
              </h3>
            </div
          </div>
        </div>
      </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

    </div>
</div>
</body>
</html>
