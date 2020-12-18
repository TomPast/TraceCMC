<?php 
    if(isset($_GET['user'])){
        $user = $_GET['user'];
        
    }else{
        $user = "tdelille";

    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
    


    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <script type="text/javascript">
        <?php 
          $JSONFile = file_get_contents("results.json");
          $JSONObject = json_decode($JSONFile,true);
        ?>
        <?php echo "var JSONResult = ".(json_encode($JSONFile)).";\n";?>
        var user = <?php echo '"'.$user.'"';?>;
        JSONResult = JSON.parse(JSONResult);
    </script>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Trace CMC</a>
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
                <a class="nav-link active" href="index.php">
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
            <h1 class="h2">Indicateur 1 : Motivation de <?php echo $user;?></h1>
          </div>

          <figure class="highcharts-figure">
            <div class="my-4" id="containerColumnMotivation" style=""></div>
          <figure class="highcharts-figure">
          <div class="charts">
          <figure class="highcharts-figure">
            <div class="my-4" id="containerColumnMessage" style="width: 450px; float: left; margin: 0 50px;"></div>
          <figure class="highcharts-figure">

          <figure class="highcharts-figure">
            <div class="my-4" id="containerColumnLecture" style="width: 450px; float: left; margin: 0 50px;"></div>
          <figure class="highcharts-figure">
        
          <figure class="highcharts-figure">
            <div class="my-4" id="containerColumnDocument" style="width: 450px; float: left; margin: 0 50px;"></div>
          <figure class="highcharts-figure">

          <figure class="highcharts-figure">
            <div class="my-4" id="containerColumnConnexion" style="width: 450px; float: left; margin: 0 50px;"></div>
          <figure class="highcharts-figure">

          
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
    <script src="js/chartColumn.js"></script>

  </body>
</html>
