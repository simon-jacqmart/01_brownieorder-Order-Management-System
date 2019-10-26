


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
      
        Brownie Commande &middot; 
      
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

    #tableProductsList tbody tr:hover {

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

    #addProductInList {

      
      margin-right:20px;
      margin-top:5px;
      margin-bottom:5px;
      
    }

    #titleproducts {
      margin-top:5px;
      margin-bottom:5px;

    }

    #newProduct {
      width: 50%;
    }

    #labelcategory {
      margin-left: 7px;
      
    }

    #addProductInListOK {

      margin-left: 428px;
    }

    #formNewProduct {

      
    }

    #newProduct{

      display: none;
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
        <h6 class="dashhead-subtitle">Accueil</h6>
        <h3 class="dashhead-title">Brownie Commande</h3>
      </div>


    </div>

    <ul class="nav nav-bordered mt-4 mt-md-2 mb-0 clearfix" role="tablist">
      <li class="nav-item" role="presentation">
        <a href="#newOrder" class="nav-link active" role="tab" data-toggle="tab" aria-controls="traffic">Liste de Produits</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#sales" class="nav-link" role="tab" data-toggle="tab" aria-controls="sales">Autre</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#support" class="nav-link" role="tab" data-toggle="tab" aria-controls="support">Autre</a>
      </li>
    </ul>
    <!--<hr class="my-4">-->

 <hr id=titleproducts class="mt-0 mb-5">








<!--try to insert table here-->
<div id="savedOrders" class="tab-content">
  <div role="tabpanel" class="tab-pane active" >
        
  <small class="form-text text-muted">Consulter la liste de produits/ ajouter/ supprimer</small>
  <button class="btn btn-primary" type="button" id="addProductInList">Ajouter</button>
  <div id="newProduct" class="form-row">
 
    <h4>Nouveau Produit</h4>
    <div class="col">
      <input type="text" id="nouveauProductName" class="form-control" placeholder="Produit">
    </div>
    <p></p>
    <div class="col">
      <input type="text" id="nouveauProductCode" class="form-control" placeholder="Code">
    </div>
    <p></p>
    <div id="formNewProduct" class="col">
    <label id="labelcategory" for="listCategories">  Categorie</label>
    <select class="form-control" id="listCategories">
        <option>0-DIVERS</option>
        <option>1-BOEUF</option>
        <option>2-PORC</option>
        <option>3-CHARCUTERIE</option>
        <option>4-VEAU</option>
        <option>5-AGNEAU</option>
        <option>6-VOLAILLES</option>
        <option>7-PLATS PREPARES</option>
        <option>8-PREP BOUCH CRUES</option>
        <option>9-ABATS</option>

      </select>
     
      
    
    </div>

      
      
      <p></p>
      <button class="btn btn-primary" type="button" id="buttonAddProductInListOK">OK</button>
      <p></p>

                      
                   

  </div>
  

        
        <table id="tableProductsList" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>#
      </th>
      <th>CODE
      </th>
      <th>Produit
      </th>
      <th>Categorie
      </th>
    </tr>
  </thead>
  <tbody>
  </tbody>
  <tfoot>
    <tr>
      <th>#
      </th>
      <th>CODE
      </th>
      <th>Produit
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

<script>
// Basic example
$(document).ready(function () {
//$('#tableProductsList').DataTable();
$('#tableProductsList').DataTable({
"ordering": false// false to disable sorting (or any other option)
});
$('.dataTables_length').addClass('bs-select');

});




</script>



    <hr class="my-4">



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


      



     






<script>


/*
$(document).ready(function () {





      // var myfunction = function() { //function-type 2
      //alert('hi');
        $('#tableProductsList').DataTable().clear();
        var mytable = $('#tableProductsList').DataTable();
            $.ajax({
                type:'POST',
                url:'php_scripts/getJSONarrayAllProducts.php',
                success:function(response){
                //alert(response);
                response = $.parseJSON(response);

                $.each(response, function (i, item) {
                  //alert(response[i].product_id);
                         var mytableAllProducts = '<tr>' +
                                                   '<td>' + response[i].product_id + '</td>' +
                                                   '<td>' + response[i].product_id + '</td>' +
                                                   '<td>' + response[i].product_name + '</td>' +
                                                   '<td>' + response[i].category_id + '</td>' +
                                                   '</tr>';
                                                   $("#tableProductsList").append(mytableAllProducts);
                    
                }); //endof each

                
                
                } //end of success
            }); //end ajax



});


*/

</script>

<script>
function loadContent() { //function-type 1
      // var myfunction = function() { //function-type 2
        $('#tableProductsList').DataTable().clear();
        var mytable = $('#tableProductsList').DataTable();
            $.ajax({
                type:'POST',
                url:'php_scripts/getJSONarrayAllProducts.php',
                success:function(response){
                response = $.parseJSON(response);

                $.each(response, function (i, item) {
                                        mytable.row.add($(
                                                    '<tr>' +
                                                    "<td id='oneProductRow'><input type='checkbox' id='oneProductRow' name='oneProductRow' ></td>" +
                                                    '<td>'+response[i].product_id+'</td>' +
                                                    '<td>'+response[i].product_name+'</td>' +
                                                    '<td>'+response[i].category_id+'</td>' +
                                                    '</tr>'
                                    )).draw(true);
                    
                });

                
                
                } //end of success
            }); //end ajax

    //setTimeout(loadContent, 3000);
    } //end of function-type 1
     //}; //end of function-type 2
//});//end of document ready

$(document).ready(function () {
loadContent();

});

</script>

<script>
$( "#buttonAddProductInListOK" ).click(function() {
product_id=$("#nouveauProductCode").val();
product_name=$("#nouveauProductName").val();
category_id=$("#listCategories").val();
//alert (category_id);
//alert ("hi");
$.ajax({
                  url:"php_scripts/addOneProduct.php",
                  method:"POST",
                  data:{product_id: product_id,
                        product_name : product_name,
                        category_id : category_id
                        },
                  success:function(data)
                  {
                    alert (data);
                  }
          })
$('#newProduct').css("display","none");
loadContent();          
});


</script>

<script>
$( "#addProductInList" ).click(function() {
  $('#newProduct').css("display","block");
});
</script>

   
  </body>
</html>

