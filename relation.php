<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Indicateur Relation</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script type="text/javascript">
        <?php
          $JSONFile = file_get_contents("resultJSON/resultRelation.json");
          $JSONObject = json_decode($JSONFile,true);
        ?>
        <?php echo "var JSONRelation = ".(json_encode($JSONFile)).";\n";?>
        JSONRelation = JSON.parse(JSONRelation);
    </script>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Trace CMC</a>
      <h2 class="text-center text-light">Indicateur 2 : Relations</h2>
      <h4 class="text-center text-light">📘</h4>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Pages</span>

            </h6>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span data-feather="home"></span>
                  Indicateur 1 : Motivation
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="relation.php">
                  <span data-feather="file"></span>
                  Indicateur 2 : Relation <span class="sr-only">(current)</span>
                </a>
              </li>

            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Indicateur 2 : Roue des relations du forum </h1>
          </div>
          <figure class="highcharts-figure ">
            <div id="container"></div>
          </figure>
          <div class="col d-flex justify-content-center my-4">
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary" onclick="newChartRelation(0)">01/02-15/02</button>
              <button type="button" class="btn btn-primary" onclick="newChartRelation(1)">15/02-29/02</button>
              <button type="button" class="btn btn-primary" onclick="newChartRelation(2)">01/03-15/03</button>
              <button type="button" class="btn btn-primary" onclick="newChartRelation(3)">15/03-31/03</button>
              <button type="button" class="btn btn-primary" onclick="newChartRelation(4)">01/04-15/04</button>
              <button type="button" class="btn btn-primary" onclick="newChartRelation(5)">15/04-31/04</button>
              <button type="button" class="btn btn-primary" onclick="newChartRelation(6)">01/05-15/05</button>
            </div>
          </div>

          <div class="col d-flex justify-content-center">
            <div class="card w-100">
              <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="highcharts-description card-text">
                  Ce graphique met en évidence les relations entre les utilisateurs du forum. Passez votre curseur sur un des membres pour voir plus clairement chacune de ses relations.
                  Plus le trait est épais, plus les relations entre les deux personnes ont été fortes (beaucoup de messages envoyés ou lus)
                  <br>
                  Le calcul du score de relation est le suivant : 8 x (nombre de réponse entre les deux personnes sur la période) + (nombre de lecture entre les deux personnes sur la période)
                </p>
              </div>
            </div>
          </div>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/sankey.js"></script>
    <script src="https://code.highcharts.com/modules/dependency-wheel.js"></script>
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="js/chartRelationship.js"></script>
    <script src="js/relationAdapter.js"></script>

  </body>
</html>
