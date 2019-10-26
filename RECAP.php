


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




    <!--FRENCH DATE PICKER-->
   
    <!-- xx -->

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        width: 100%;
        position: relative;
      }

      .typeahead{
        background: #FFFFFF;
        min-width:94%;
        
      }

    .dropdown-menu>.active>a, .dropdown-menu>.active>a:hover, .dropdown-menu>.active>a:focus {
    background:#1CA8DD;
    min-width: 94%;
    }
    @media only screen and (min-width: 600px) {
        .datepicker,
        .table-condensed {
          width: 470px;
          height:300px;
          }

    }

    .datepicker table tr td.active:active, 
.datepicker table tr td.active.highlighted:active, 
.datepicker table tr td.active.active, 
.datepicker table tr td.active.highlighted.active {
  background-color: #1CA8DD;
}

.datepicker table tr td.active:active:hover, .datepicker table tr td.active.highlighted:active:hover, .datepicker table tr td.active.active:hover, .datepicker table tr td.active.highlighted.active:hover, .datepicker table tr td.active:active:focus, .datepicker table tr td.active.highlighted:active:focus, .datepicker table tr td.active.active:focus, .datepicker table tr td.active.highlighted.active:focus, .datepicker table tr td.active:active.focus, .datepicker table tr td.active.highlighted:active.focus, .datepicker table tr td.active.active.focus, .datepicker table tr td.active.highlighted.active.focus {
  background-color:#1CA8DD;
}

.datepicker table tr td.day:hover,
.datepicker table tr td.focused {
  background: #1CA8DD;
  cursor: pointer;
}


    #nouveauClient{

      display:none;
      margin-bottom: 10px;
    }

    #checkboxNouveauClient {

      margin-left:10px;
    }

    #statCard {

      text-align: center;
      margin:0 auto;
      margin-left: 10px;
      position: relative;
    }
    #newOrderStep2 {

      display: none;
      
      padding: 20px;
      position: relative;
      word-wrap: break-word; 
      word-break: break-all;
      overflow-x: visible;



      }
      #newOrderStep2.table {
        overflow-x: visible;

      }


      #newOrderSummary {

          display: none;
          color: white;
          background: none;
          position: relative;   
          font-size: 20px;
          word-wrap: break-word; 
          word-break: break-all;



}




    #newOrder {

      min-height:250px;
      position: relative;
      

      }



    #nombreCommandesChartTitle {
      
      position: relative;
      float: bottom;
      margin:100px;


    }

    #mainViewNewOrder {
      position: relative;
      overflow: visible;


    }

    #newOrderGlobalComment{

      margin-top:10px;
      margin-bottom:10px;
    }



    [contenteditable="true"]:focus {
        background-color: white;
    }

    #tableFullOrders tbody tr:hover {

      background-color:#1CA8DD;
    }

    .delete-row-one-order {

      display: none;
    }

    .buttonModifyOrderAddProducts {

      display: none;
      margin-left:10px;
    }

    #oneOrderDate {
      
      width:200px;
      

    }

    #newOrderSummaryTableForCSS {

      overflow: visible;
      table-layout: fixed;
    }

    #modifyOrderAddProductForm {

      display: none;

    }

    #saveModifyOrderTable {

      display: none;
    }

    #divDeleteOrder {


      position: absolute;
      right: 10px;
      width: 200px;
      padding: 10px;
      height: 50px ;
    
    }

    #orderDetails {

      display: none;

    }





    </style>
  </head>


<body>
  



<div class="with-iconav">

  <nav class="iconav">
    <a class="iconav-brand" href="/index.html">
      <span class="icon icon-leaf iconav-brand-icon"></span>
    </a>
    <div class="iconav-slider">
      <ul class="nav nav-pills iconav-nav flex-md-column">
        <li class="nav-item">
          <a class="nav-link active" href="/index.html" title="Overview" data-toggle="tooltip" data-placement="right" data-container="body">
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
          <a class="nav-link" href="../icon-nav/index.html" title="Icon-nav" data-toggle="tooltip" data-placement="right" data-container="body">
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
          <a class="nav-link" href="#" title="Signed in as Brownie Wolf" data-toggle="tooltip" data-placement="right" data-container="body">
            <img src="docs/assets/img/browniesmall.JPG" alt="" class="rounded-circle">
            <small class="iconav-nav-label hidden-md-up">@mdo</small>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
  <div class="container">
    <div class="dashhead">
      <div class="dashhead-titles">
        <h6 class="dashhead-subtitle">Accueil</h6>
        <h3 class="dashhead-title">Brownie Commande</h3>
      </div>

      <div class="dashhead-toolbar">
        <div class="input-with-icon dashhead-toolbar-item">
          <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
          <span class="icon icon-calendar"></span>
        </div>
        <span class="dashhead-toolbar-divider hidden-sm-down"></span>
        <div class="btn-group dashhead-toolbar-item btn-group-thirds">
          <button type="button" class="btn btn-outline-primary">Day</button>
          <button type="button" class="btn btn-outline-primary active">Week</button>
          <button type="button" class="btn btn-outline-primary">Month</button>
        </div>
      </div>
    </div>

    <ul class="nav nav-bordered mt-4 mt-md-2 mb-0 clearfix" role="tablist">
      <li class="nav-item" role="presentation">
        <a href="#newOrder" class="nav-link active" role="tab" data-toggle="tab" aria-controls="traffic">Nouvelle commande</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#sales" class="nav-link" role="tab" data-toggle="tab" aria-controls="sales">Modification</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#support" class="nav-link" role="tab" data-toggle="tab" aria-controls="support">Buffet</a>
      </li>
    </ul>
    <!--<hr class="my-4">-->

    <hr class="mt-0 mb-5">





        


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

<script>
// Basic example
$(document).ready(function () {
//$('#tableFullOrders').DataTable();
$('#tableFullOrders').DataTable({
"ordering": false// false to disable sorting (or any other option)
});
$('.dataTables_length').addClass('bs-select');

});




</script>









      
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
   
  </body>
</html>

