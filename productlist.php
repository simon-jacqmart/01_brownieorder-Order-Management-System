


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
      
        Icon nav &middot; 
      
    </title>

    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
      <link href="docs/assets/css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="docs/assets/css/application.css" rel="stylesheet">

      <!-- MDBootstrap Datatables  -->
  <link href="css/addons/datatables.min.css" rel="stylesheet">

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
    </style>
  </head>


<body>
  



<div class="with-iconav">

  <nav class="iconav">
    <a class="iconav-brand" href="../index.html">
      <span class="icon icon-leaf iconav-brand-icon"></span>
    </a>
    <div class="iconav-slider">
      <ul class="nav nav-pills iconav-nav flex-md-column">
        <li class="nav-item">
          <a class="nav-link" href="../index.html" title="Overview" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-home"></span>
            <small class="iconav-nav-label hidden-md-up">Overview</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../order-history/index.html" title="Order history" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-text-document"></span>
            <small class="iconav-nav-label hidden-md-up">History</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../fluid/index.html" title="Fluid layout" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-globe"></span>
            <small class="iconav-nav-label hidden-md-up">Fluid layout</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../icon-nav/index.html" title="Icon-nav" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-area-graph"></span>
            <small class="iconav-nav-label hidden-md-up">Icon nav</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../docs/index.html" title="Docs" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-list"></span>
            <small class="iconav-nav-label hidden-md-up">Docs</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index-light/index.html" title="Light UI" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-flash"></span>
            <small class="iconav-nav-label hidden-md-up">Light UI</small>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="Signed in as mdo" data-toggle="tooltip" data-placement="right" data-container="body">
            <img src="../assets/img/avatar-mdo.png" alt="" class="rounded-circle">
            <small class="iconav-nav-label hidden-md-up">@mdo</small>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="dashhead">
      <div class="dashhead-titles">
        <h6 class="dashhead-subtitle">Dashboards</h6>
        <h3 class="dashhead-title">Overview</h3>
      </div>

      <div class="dashhead-toolbar">
        <div class="input-with-icon dashhead-toolbar-item">
          <input id="recapDate" type="text"  class="form-control" data-provide="datepicker"  data-date-language="fr" data-date-format="yyyy-mm-dd" data-date-today-highlight="true"placeholder="Date RECAP">
          <span class="icon icon-calendar"></span>
        </div>
        <span class="dashhead-toolbar-divider hidden-sm-down"></span>
        <div class="btn-group dashhead-toolbar-item btn-group-thirds">
          <button type="button" class="btn btn-outline-primary active">Day</button>
          <button type="button" class="btn btn-outline-primary">Week</button>
          <button type="button" class="btn btn-outline-primary">Month</button>
        </div>
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
        <a href="#sales" class="nav-link" role="tab" data-toggle="tab" aria-controls="sales">Sales</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#support" class="nav-link" role="tab" data-toggle="tab" aria-controls="support">Support</a>
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
              <canvas
                class="ex-graph"
                width="200" height="200"
                data-chart="doughnut"
                data-dataset="[330,30]"
                data-dataset-options="{ borderColor: '#252830', backgroundColor: ['#1ca8dd', '#1bc98e'] }"
                data-labels="['Returning', 'New']">
              </canvas>
            </div>
            <strong class="text-muted">Revenue</strong>
            <h4>New vs Recurring</h4>
          </div>
          <div class="col-md-4 mb-5">
            <div class="w-3 mx-auto">

            </div>

          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="sales">
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



    <!--try to insert table here-->
<div id="savedOrders" class="tab-content">
      <div role="tabpanel" class="tab-pane active" >
        <h3>Liste des Produits</h3>
        
        
        <table id="tableProductList" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Produit
      </th>
      <th>CODE
      </th>
      <th>Categorie
      </th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>One</td>
    <td>Two</td>
    <td>Three</td>
    </tr>
    <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Produit
      </th>
      <th>CODE
      </th>
      <th>Categorie
      </th>
    </tr>
  </tfoot>
</table>
        


    </div>
  </div>


    <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>



    <div class="hr-divider my-4">
        <h1  class="hr-divider-content hr-divider-heading">Recapitulatif Produits Commandes</h1>
    </div>
    <div id="recapOneDay" tabindex="-1" >



    </div>   






    <hr class="my-4">

    <div class="row">
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
    </div>

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


                    } //success


                }); //ajx

            });//button click
        }); //ready
    </script>


    <script>


        // Basic example
$(document).ready(function () {
//$('#tableFullOrders').DataTable();
$('#tableProductList').DataTable();
$('.dataTables_length').addClass('bs-select');

});



        function loadContent() { //function-type 1
      // var myfunction = function() { //function-type 2
        $('#tableProductList').DataTable().clear();
        var mytable = $('#tableProductList').DataTable();
            $.ajax({
                type:'POST',
                url:'php_scripts/getJSONarrayAllOrders.php',
                success:function(response){
                response = $.parseJSON(response);

                $.each(response, function (i, item) {
                                        mytable.row.add($(
                                                    '<tr>' +
                                                    '<td>'+response[i].product_id+'</td>' +
                                                    '<td>'+response[i].product_name+'</td>' +
                                                    '<td>'+response[i].category_id+'</td>' +
                                                    '</tr>'
                                    )).draw(false);
                    
                });

                
                
                } //end of success
            }); //end ajax


    } //end of function-type 1
    </script>


  </body>
</html>

