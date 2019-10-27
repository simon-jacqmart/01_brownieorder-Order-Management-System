


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
      Brownie commande &middot; 
      
    </title>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> <!--appently OK to use this jquery version-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  

    <!-- including it makes everything unzoomed-->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
     <!-- <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">-->
    
      <link href="docs/assets/css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="docs/assets/css/application.css" rel="stylesheet">


  <!-- MDBootstrap Datatables  -->
  <link href="css/addons/datatables.min.css" rel="stylesheet">
  <link href="css/onoffswitch.css" rel="stylesheet">




    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
      <link href="docs/assets/css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="docs/assets/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        width: 100%;
      }

      #recapOneDayTableOccurenceNombre{

        width: 300px;
        float: left;
        margin-right: 100px;
        font-size: 12px;

        

      }

      #recapOneDayTableOccurenceWeight{

        width: 300px;
        font-size: 12px;
        


      }

      #recapOneDay p {

        position: relative;
        margin-left: 0px;
        margin-top: 20px;
      }

      #buttonDisplayRecapOneDay {
          margin-top:5px;

      }
    </style>
  </head>


<body>
  



<div class="with-iconav">

<nav class="iconav">
    <a class="iconav-brand" href="index.php">
      <span class="icon icon-leaf iconav-brand-icon"></span>
    </a>
    <div class="iconav-slider">
      <ul class="nav nav-pills iconav-nav flex-md-column">
        <li class="nav-item">
          <a class="nav-link active" href="index.php" title="Accueil Prise de Commandes" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-home"></span>
            <small class="iconav-nav-label hidden-md-up">Accueil Prise de Commandes</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recap2.php" title="Recap" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-text-document"></span>
            <small class="iconav-nav-label hidden-md-up">Recap</small>
          </a>
        </li>
        <!--TOACTIVATE<li class="nav-item">
          <a class="nav-link" href="../fluid/index.html" title="Fluid layout" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-globe"></span>
            <small class="iconav-nav-label hidden-md-up">Fluid layout</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../icon-nav/index.html" title="Icon-nav" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-area-graph"></span>
            <small class="iconav-nav-label hidden-md-up">Icon nav</small>
          </a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="productlist2.php" title="Liste Produits" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-list"></span>
            <small class="iconav-nav-label hidden-md-up">Liste Produits</small>
          </a>
        </li>
        <!--TOACTIVATE<li class="nav-item">
          <a class="nav-link" href="../index-light/index.html" title="Light UI" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-flash"></span>
            <small class="iconav-nav-label hidden-md-up">Light UI</small>
          </a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="index.php" title="Signed in as Brownie Wolf" data-toggle="tooltip" data-placement="right" data-container="body">
            <img src="docs/assets/img/browniesmall.JPG" alt="" class="rounded-circle">
            <small class="iconav-nav-label hidden-md-up">@mdo</small>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="dashhead">
      <div class="dashhead-titles">
        <h6 class="dashhead-subtitle">RECAPITULATION</h6>
        <h3 class="dashhead-title">Brownie commande</h3>
        <p>Veuillez selectionner une date a droite-(par exemple plusieurs commandes le 11 decembre 2018)</p>
      </div>

      <div class="dashhead-toolbar">
        <div class="input-with-icon dashhead-toolbar-item">
          <input id="recapDate" type="text"  class="form-control" data-provide="datepicker"  data-date-language="fr" data-date-format="yyyy-mm-dd" data-date-today-highlight="true"placeholder="Date RECAP">
          <span class="icon icon-calendar"></span>
        </div>
        <span class="dashhead-toolbar-divider hidden-sm-down"></span>
        <!--TOACTIVATE<div class="btn-group dashhead-toolbar-item btn-group-thirds">
          <button type="button" class="btn btn-outline-primary active">Day</button>
          <button type="button" class="btn btn-outline-primary">Week</button>
          <button type="button" class="btn btn-outline-primary">Month</button>
        </div>-->
        <div>
            <button id="buttonDisplayRecapOneDay" class="btn btn-primary">RECAP</button>
        </div>
      </div>
    </div>

    <ul class="nav nav-bordered mt-4 mt-md-2 mb-0 clearfix" role="tablist">
      <li class="nav-item" role="presentation">
        <a href="#traffic" class="nav-link active" role="tab" data-toggle="tab" aria-controls="traffic">Recap Produits</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#sales" class="nav-link" role="tab" data-toggle="tab" aria-controls="sales">Gestion1</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#support" class="nav-link" role="tab" data-toggle="tab" aria-controls="support">Gestion2</a>
      </li>
    </ul>
    <p id=pmyjsontable></p>

    <hr class="mt-0 mb-5">

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="traffic">
        <div class="row text-center m-t-md">
            <div class="col-md-4 mb-5">
              <div class="w-3 mx-auto">
                  <table id="tableRecapOneDay" class="table table-hover table-dark" >
                          <thead>
                              <tr>
                                  <th style="width: 300px" scope="col">RECAP Produits</th>
                              </tr>
                          </thead>
                          <tbody id ="tableRecapOneDayBody">
                          </tbody>
                  </table>
                </div>  
            </div>  

          <div class="col-md-4 mb-5">
            <div class="w-3 mx-auto">

            </div>

          </div>
          <div class="col-md-4 mb-4">
            <div class="w-3 mx-auto">
             <!-- <canvas id="myCanvas"
                class="ex-graph"
                width="200" height="200"
                data-chart="doughnut"
                data-dataset="[1,5, 1, 13, 1]"
                data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e','#1ca8dd','#1bc98e','#1ca8dd' ] }"
                data-labels="['ASSAISONNEMENT', 'FILET FUME', 'PETIT SALE', 'PUR PORC A L AIL', 'SAUCISSON JAMBON', ]">
              </canvas>-->
                
              <canvas id="myChart" width="400" height="400"></canvas>

             <div id="chartContainer" style="height: 370px; width: 100%;"></div>
     

            </div>
             <h4>Representation des differents produits- scroll right</h4>
          </div>
          <div class="col-md-4 mb-5">
            <div class="w-3 mx-auto">

            </div>

          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="sales">
      <p>Illustration des resumes possibles, pas encore fonctionnel</p>
        <div class="ex-line-graphs mb-5">
          <canvas
            class="ex-line-graph"
            width="600" height="400"
            data-chart="line"
            data-dataset="[[2500, 3300, 2512, 2775, 2498, 3512, 2925, 4275, 3507, 3825, 3445, 3985]]"
            data-labels="['','Aug 29','','','Sept 5','','','Sept 12','','','Sept 19','']"
            data-dark="true">
          </canvas>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="support">
      <p>Illustration des resumes possibles, pas encore fonctionnel</p>
        <div class="ex-line-graphs mb-5">
          <canvas
            class="ex-line-graph"
            width="600" height="400"
            data-chart="bar"
            data-dark="true"
            data-labels="['August','September','October','November','December','January','February']"
            data-dataset="[[65, 59, 80, 81, 56, 55, 40], [28, 48, 40, 19, 86, 27, 90]]"
            data-dataset-options="[{label: 'First dataset'}, {label: 'Second dataset'}]">
          </canvas>
        </div>
      </div>
    </div>


    <div class="hr-divider my-4">
        <h1  class="hr-divider-content hr-divider-heading">Recapitulatif Produits Commandes</h1>
            <p id="jsonchart1"> </p>
            <p id="jsonprint"> </p>
    </div>
    <div id="recapOneDay" tabindex="-1" >



    </div>   






    <hr class="my-4">

    <!--TOACTIVATE<div class="row">
      <div class="col-lg-4 mb-5">
        <div class="list-group mb-3">
          <h6 class="list-group-header">
            Countries
          </h6>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 62.4%;"></span>
              <span>United States</span>
              <span class="text-muted">62.4%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 15.0%;"></span>
              <span>India</span>
              <span class="text-muted">15.0%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 5.0%;"></span>
              <span>United Kingdom</span>
              <span class="text-muted">5.0%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 5.0%;"></span>
              <span>Canada</span>
              <span class="text-muted">5.0%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 4.5%;"></span>
              <span>Russia</span>
              <span class="text-muted">4.5%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 2.3%;"></span>
              <span>Mexico</span>
              <span class="text-muted">2.3%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 1.7%;"></span>
              <span>Spain</span>
              <span class="text-muted">1.7%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 1.5%;"></span>
              <span>France</span>
              <span class="text-muted">1.5%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 1.4%;"></span>
              <span>South Africa</span>
              <span class="text-muted">1.4%</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span class="list-group-progress" style="width: 1.2%;"></span>
              <span>Japan</span>
              <span class="text-muted">1.2%</span>
            </a>
          
        </div>
        <a href="#" class="btn btn-outline-primary px-3">All countries</a>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="list-group mb-3">
          <h6 class="list-group-header">
            Most visited pages
          </h6>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/ (Logged out)</span>
              <span class="text-muted">3,929,481</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/ (Logged in)</span>
              <span class="text-muted">1,143,393</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/tour</span>
              <span class="text-muted">938,287</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/features/something</span>
              <span class="text-muted">749,393</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/features/another-thing</span>
              <span class="text-muted">695,912</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/users/username</span>
              <span class="text-muted">501,938</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/page-title</span>
              <span class="text-muted">392,842</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/some/page-slug</span>
              <span class="text-muted">298,183</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/another/directory/and/page-title</span>
              <span class="text-muted">193,129</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>/one-more/page/directory/file-name</span>
              <span class="text-muted">93,382</span>
            </a>
          
        </div>
        <a href="#" class="btn btn-outline-primary px-3">View all pages</a>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="list-group mb-3">
          <h6 class="list-group-header">
            Devices and resolutions
          </h6>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Desktop (1920x1080)</span>
              <span class="text-muted">3,929,481</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Desktop (1366x768)</span>
              <span class="text-muted">1,143,393</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Desktop (1440x900)</span>
              <span class="text-muted">938,287</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Desktop (1280x800)</span>
              <span class="text-muted">749,393</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Tablet (1024x768)</span>
              <span class="text-muted">695,912</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Tablet (768x1024)</span>
              <span class="text-muted">501,938</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Phone (320x480)</span>
              <span class="text-muted">392,842</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Phone (720x450)</span>
              <span class="text-muted">298,183</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Desktop (2560x1080)</span>
              <span class="text-muted">193,129</span>
            </a>
          
            <a class="list-group-item list-group-item-action justify-content-between" href="#">
              <span>Desktop (2560x1600)</span>
              <span class="text-muted">93,382</span>
            </a>
          
        </div>
        <a href="#" class="btn btn-outline-primary px-3">View all pages</a>
      </div>
    </div>-->

  </div>
</div>



    <script src="docs/assets/js/jquery.min.js"></script>
    <script src="docs/assets/js/tether.min.js"></script>
    <script src="docs/assets/js/chart.js"></script>
    <script src="docs/assets/js/tablesorter.min.js"></script>
    <script src="docs/assets/js/toolkit.js"></script>
    <script src="docs/assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>


  
<!--FRENCh DATEPICKER-->

    <script>
            ;(function($){
            $.fn.datepicker.dates['fr'] = {
            days: ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"],
            daysShort: ["dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam."],
            daysMin: ["d", "l", "ma", "me", "j", "v", "s"],
            months: ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"],
            monthsShort: ["janv.", "févr.", "mars", "avril", "mai", "juin", "juil.", "août", "sept.", "oct.", "nov.", "déc."],
            today: "Aujourd'hui",
            monthsTitle: "Mois",
            clear: "Effacer",
            weekStart: 1,
            format: "yyyy/mm/dd"
            };
            }(jQuery));

            $('.datepicker').datepicker({
            language: 'fr',
            autoclose: true,
            todayHighlight: true
            })

            $('#datepicker')
            .datepicker({
                todayHighlight: true,
                
    })
    </script>

    <script>
        var chartData= new Array();
        var chartLabels = new Array();
        var chartBackgroundColor = new Array();
        var x ;
        var y;
        var z;
        z=0; //z is used to apply different colors between even and odd numbers
        $(document).ready(function(){
            
            
            $( "#buttonDisplayRecapOneDay" ).click(function() {
                var recapDate= $('#recapDate').val();
                //alert (recapDate);
                $('#tableRecapOneDayBody').html('');
                $.ajax({
                    type:'POST',
                    url:'php_scripts/listProductsOneDateOneCategory4.php',
                    data: { recapDate: recapDate},
                    success:function(response){
                        //alert (response);
                        //$('#pmyjsontable').html(response);
                       // $('#jsonprint').html(response); print json data
                        response = $.parseJSON(response);
                        
                        $.each(response.distinctProducts, function (i, item) {
                            var mytableRecapOneDayProducts=
                                                    '<tr>' +
                                                    '<td>'+response.distinctProducts[i]+'</td>' +
                                                    '</tr>';
                             //alert (response.distinctProducts[i])   ;                    
                            $("#tableRecapOneDayBody").append(mytableRecapOneDayProducts);
                        }); //each

                      $.each(response.recap, function (a, item) {
                            //var myp = response.recap[a];
                        //alert(response.recap.product[0]);//Working
                            //alert(response.recap.product.ASSAISONNEMENT[0].Description);//Working
                            //alert(response.recap[a].name); //good to display the product
                            //alert(response.recap[1].details[0].Date_Forthe);  //good to display detail date
                            /*var mytableRecapOneDayDetails= '<tr>' +
                                                    '<td>'+response.recap[a]+'</td>' +
                                                    '</tr>';
                            $("#tableRecapOneDayBody").append(mytableRecapOneDayDetails);*/
                            var mytableRecapOneDayDetails=
                                                    '<table id="recapOneDayTable" class="table table-hover table-dark" >'+
                                                    ' <thead>' +
                                                        '<tr>'+
                                                            '<th style="width: 300px" scope="col">Produit</th>'+
                                                            '<th style="width: 200px" scope="col">Pour le</th>' +
                                                            '<th style="width: 80px" scope="col">Commande</th>' +
                                                            '<th style="width: 80px" scope="col">Nombre</th>' +
                                                            '<th style="width: 80px" scope="col">Poids</th>' +
                                                            '<th style="width: 100px" scope="col">Nom</th>' +
                                                            '<th style="width: 80px" scope="col">sv</th>' +
                                                            '<th style="width: 200px" scope="col">Nbpers</th>' +
                                                            '<th style="width: 200px" scope="col">Autre Info</th>'+
                                                       ' </tr>'+
                                                    '</thead>' +
                                                    '<tbody>';
                                $.each(response.recap[a].details, function (b, item) {         
                                     mytableRecapOneDayDetails= mytableRecapOneDayDetails +
                                                    '<tr>' +
                                                    '<td>'+response.recap[a].details[b].Description+'</td>' +
                                                    '<td>'+response.recap[a].details[b].Date_Forthe+'</td>' +
                                                    '<td>'+response.recap[a].details[b].OrderID+'</td>' +
                                                    '<td>'+response.recap[a].details[b].Quantity+'</td>' +
                                                    '<td>'+response.recap[a].details[b].Weight+'</td>' +
                                                    '<td>'+response.recap[a].details[b].CustomerLN+'</td>' +
                                                    '<td>'+response.recap[a].details[b].sous_vide+'</td>' +
                                                    '<td>'+response.recap[a].details[b].nbre_pers+'</td>'+ 
                                                    '<td>'+response.recap[a].details[b].autre_info+'</td>' +
                                                    '</tr>';
                                });//each b
                            mytableRecapOneDayDetails = mytableRecapOneDayDetails + '</tbody></table>' ;                 
                            //$("#recapOneDay").append('<p>'+response.recap[a].name+'</p>');
                            $("#recapOneDay").append('<div class="hr-divider my-4">' +
                           '<h3  class="hr-divider-content hr-divider-heading">'+response.recap[a].name+ ' '  + '(' + response.recap[a].total2 + ')' + '</h3>' +
                            '</div>')
                            $("#recapOneDay").append(mytableRecapOneDayDetails);
                          //attempt to create an array for the chart
                          //create chartdata for the bar chart myChart size
                          chartData.push(response.recap[a].total2);
                          chartLabels.push(response.recap[a].name);

                          if ( z % 2 == 0) {
                            chartBackgroundColor.push('#1ca8dd');
                          }else{
                            chartBackgroundColor.push('#1bc98e');
                          }    
                          z=z+1;

                           x = chartData.toString();
                           y = chartLabels.toString();



                          $("#jsonchart1").append(response.recap[a].total2);
                          $("#jsonchart1").append(" ");
                          $("#jsonchart1").append(response.recap[a].name);
                          $("#jsonchart1").append(" ");

                         
                           //myChart.data = chartData;
                           //myChart.labels= chartLabels;
                            myChart.update();
                            //myChart.render(); 
                          //alert(x);
                          
                          //k=k+1;
                          
                            //$("#recapOneDay").append("<BR>");

                            var mytableRecapOneDayOccurenceNombre=
                                                    '<div id="divrecapOneDayTableOccurenceNombre">' +
                                                    '<table id="recapOneDayTableOccurenceNombre" class="table table-hover table-dark" >'+
                                                    ' <thead>' +
                                                        '<tr>'+
                                                            '<th style="width: 140px" scope="col">Produit</th>'+
                                                            '<th style="width: 80px" scope="col">Nombre Produit</th>'+
                                                            '<th style="width: 80px" scope="col">Occurence</th>' +
            
                                                       ' </tr>'+
                                                    '</thead>' +
                                                    '<tbody>';

                            $.each(response.recap[a].occurencenombre, function (c, item) {         
                                     mytableRecapOneDayOccurenceNombre= mytableRecapOneDayOccurenceNombre +
                                                    '<tr>' +
                                                    '<td>'+response.recap[a].name+'</td>' +
                                                    '<td>'+response.recap[a].occurencenombre[c].nombre+'</td>' +
                                                    '<td>'+response.recap[a].occurencenombre[c].count+'</td>' +
                                                    '</tr>';
                                });//each c

                            mytableRecapOneDayOccurenceNombre = mytableRecapOneDayOccurenceNombre+ '</tbody></table></div>' ;    
                            $("#recapOneDay").append(mytableRecapOneDayOccurenceNombre);

                            var mytableRecapOneDayOccurenceWeight=
                                                    
                                                    '<div id="divrecapOneDayTableOccurenceWeight">' +
                                                    '<table id="recapOneDayTableOccurenceWeight" class="table table-hover table-dark" >'+
                                                    ' <thead>' +
                                                        '<tr>'+
                                                            '<th style="width: 160px" scope="col">Produit</th>'+
                                                            '<th style="width: 80px" scope="col">Poids Produit</th>'+
                                                            '<th style="width: 80px" scope="col">Occurence</th>' +
            
                                                       ' </tr>'+
                                                    '</thead>' +
                                                    '<tbody>';

                            $.each(response.recap[a].occurenceweight, function (d, item) {         
                                     mytableRecapOneDayOccurenceWeight= mytableRecapOneDayOccurenceWeight +
                                                    '<tr>' +
                                                    '<td>'+response.recap[a].name+'</td>' +
                                                    '<td>'+response.recap[a].occurenceweight[d].weight+'</td>' +
                                                    '<td>'+response.recap[a].occurenceweight[d].count+'</td>' +
                                                    '</tr>';
                                });//each d

                            mytableRecapOneDayOccurenceWeight = mytableRecapOneDayOccurenceWeight+ '</tbody></table></div>' ;    
                            $("#recapOneDay").append(mytableRecapOneDayOccurenceWeight);

                            $("#recapOneDay").append("<BR>");



                       }); //each a

                        //print the json chart data
                        //alert (chartData); 
                        //$("#jsonchart").html(chartData);
                    } //success


                }); //ajx
                
                
             /*  if (typeof chartData!= "undefined") {
            var z = chartData.toString();
            alert(z);
            }*/
//var y =[1,1,3];       
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        //labels: ['Filet', 'Pate', 'Saucisson'],
        labels: chartLabels,
        datasets: [{
            label: 'Nbre de produits',
            data: chartData,
            backgroundColor: chartBackgroundColor,
            borderColor: [
                '#252830',
                '#252830',
                '#252830'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
    

            });//button click
    
        }); //ready

    </script>
            <script>
            window.onload = function () {
                

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                    text: "Email Categories",
                    horizontalAlign: "left"
                },
                data: [{
                    type: "doughnut",
                    startAngle: 60,
                    //innerRadius: 60,
                    indexLabelFontSize: 17,
                    indexLabel: "{label} - #percent%",
                    toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                    dataPoints: [
                        { y: 67, label: "Inbox" , color: "#1ca8dd"},
                        { y: 67, label: "Inbox" , color: "#1bc98e"},
                        { y: 28, label: "Archives" , color: "#1ca8dd"},
                        { y: 10, label: "Labels", color: "#1bc98e" },
                        { y: 7, label: "Drafts", color: "#1ca8dd"},
                        { y: 15, label: "Trash", color: "##1bc98e"},
                        { y: 6, label: "Spam", color: "#1ca8dd"}
                    ]
                }]
            });
           

            }
            </script>
    
    <script>
 

        });
            
            

            });

</script>
    
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>

