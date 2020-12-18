
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Indicateur Motivation</title>
    


    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script type="text/javascript">
        <?php 
          $JSONFile = file_get_contents("results.json");
          $JSONObject =json_decode($JSONFile,true);
        ?>
        <?php echo "var JSONResult = ".(json_encode($JSONFile)).";\n";?>
        JSONResult = JSON.parse(JSONResult);
    </script>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Trace CMC</a>
      <h2 class="text-center text-light">Indicateur 1 : Motivation</h2>
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
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Indicateur 1 : Motivation <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Indicateur 2 : Relation
                </a>
              </li>

            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Utilisateurs</span>
             
            </h6>
            <ul class="nav flex-column mb-2">
              <?php 
                foreach($JSONObject as $key => $val) {
                  echo '<li class="nav-item">';
                  echo '<a class="nav-link" href="./detail_page?user='.$key.'">'.$key;
  
                  echo '</a></li>';
                }
              ?>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Indicateur 1 : Motivation</h1>
            
          </div>
          <figure class="highcharts-figure">
            <div class="my-4" id="myChart" width="900" height="380"></div>
          <figure class="highcharts-figure">
          <p class="text-center">Graphique montrant la motivation de chaque personne en fonction du temps.</p>
          

          
          
          
          
          <h2>Détails  </h2>
          <form action="" method="post">
            <select class="form-control form-control-sm col-sm-2"  name="taskOption" onchange="this.form.submit();">
              <option value="0" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 0) {echo "selected=selected";}} ?>>01/02/2009 - 15/02/2009</option>
              <option value="1" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 1) {echo "selected=selected";}} ?>>15/02/2009 - 29/02/2009</option>
              <option value="2" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 2) {echo "selected=selected";}} ?>>01/03/2009 - 15/03/2009</option>
              <option value="3" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 3) {echo "selected=selected";}} ?>>15/03/2009 - 31/03/2009</option>
              <option value="4" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 4) {echo "selected=selected";}} ?>>01/04/2009 - 15/04/2009</option>
              <option value="5" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 5) {echo "selected=selected";}} ?>>15/04/2009 - 31/04/2009</option>
              <option value="6" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 6) {echo "selected=selected";}} ?>>01/05/2009 - 15/05/2009</option>
              <option value="7" <?php if (isset($_POST['taskOption'])){if ($_POST['taskOption'] == 7) {echo "selected=selected";}} ?>>15/05/2009 - 31/05/2009</option>
            </select>
          </form>
          
          <div class="table-responsive">
            <table class="table table-striped table-sm tableResult">
              <thead>
                <tr>
                  <th>Login</th>
                  <th>Messages Postés</th>
                  <th>Messages Lus</th>
                  <th>Documents</th>
                  <th>Connexion</th>
                  <th>Score Motivation</th>
                </tr>
              </thead>
              <tbody>

              <?php
                if (isset($_POST['taskOption'])){
                   $selectOption = $_POST['taskOption'];
                }else{
                  $selectOption = 0;
                }
               
                foreach($JSONObject as $key => $val) { 
                  echo '<tr>';
                  echo '<td>';
                  echo '<a class="nav-link" href="./detail_page?user='.$key.'">'.$key;
                  echo'</td>';
                  echo '<td>'.$JSONObject[$key]['MessagePeriode'][$selectOption].'</td>';
                  echo '<td>'.$JSONObject[$key]['LecturePeriode'][$selectOption].'</td>';
                  echo '<td>'.$JSONObject[$key]['DocumentPeriode'][$selectOption].'</td>';
                  echo '<td>'.$JSONObject[$key]['ConnexionPeriode'][$selectOption].'</td>';
                  echo '<td>'.$JSONObject[$key]['MotivationPeriode'][$selectOption].'</td>';
                  echo '</tr>';
                }
              ?>
            
              </tbody>
            </table>
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
    <script src="https://code.highcharts.com/modules/streamgraph.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="js/chartMotivation.js"></script>

  </body>
</html>
