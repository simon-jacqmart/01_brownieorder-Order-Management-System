<?php
    session_start();

    
    if(array_key_exists("id",$_COOKIE)) {

        $_SESSION['id'] = $_COOKIE['id'];
    }

    if(array_key_exists("id",$_SESSION)) {

        
      echo "hi";


    } else {

        header ("Location: login/login.php");


    }


?>


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

      <!--TO ACTIVATE<div class="dashhead-toolbar">
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
      </div>-->
    </div>

    <ul class="nav nav-bordered mt-4 mt-md-2 mb-0 clearfix" role="tablist">
      <li class="nav-item" role="presentation">
        <a href="#newOrder" class="nav-link active" role="tab" data-toggle="tab" aria-controls="traffic">Nouvelle commande</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#sales" class="nav-link" role="tab" data-toggle="tab" aria-controls="sales">Gestion 1</a>
      </li>
      <li class="nav-item" role="presentation">
        <a href="#support" class="nav-link" role="tab" data-toggle="tab" aria-controls="support">Gestion 2</a>
      </li>
    </ul>
    <!--<hr class="my-4">-->

    <hr class="mt-0 mb-5">


    <div class="tab-content" id="mainViewNewOrder">
      <div role="tabpanel" class="tab-pane active" id="newOrder">
          <div id="newOrderStep1" class="col-lg-6 mb-5">
              <form> <!-- BOOTSTRAP FORM with typehead-->
                <div class="form-group ">
                  <span class ="icon icon-user"> Selectionnez le client</span> <input type="checkbox" id="checkboxNouveauClient" name="checkboxNouveauClient" value="checkboxNouveauClient"> Nouveau Client<br>
                  <input type="text" name="clientNouvelleCommande" id="clientNouvelleCommande" class="form-control"  autocomplete="off" aria-describedby="clientNouvelleCommandeHelp" placeholder="Telephone ou Nom">
                                  
                  <small id="clientNouvelleCommandeHelp" class="form-text text-muted">Si non trouve, un formulaire apparaitra pour enregistrer le nouveau client.</small>
                </div>



                    <div id="nouveauClient" class="form-row">
                      <h4>Nouveau Client</h4>
                      <div class="col">
                        <input type="text" id="nouveauClientNom" class="form-control" placeholder="Nom">
                      </div>
                      <div class="col">
                        <input type="text" id="nouveauClientPrenom" class="form-control" placeholder="Prenom">
                      </div>
                      <div class="col">
                          <input type="text" id="nouveauClientTel" class="form-control" placeholder="Numero tel.">
                      </div>
                      
                    </div>
  

                  <div class="form-group">
                      <span class="icon icon-calendar"> Date </span>
                      <input id="dateNouvelleCommande" type="text" placeholder="Pour quand est la commande"  class="form-control" data-provide="datepicker" data-date-language="fr" data-date-format="yyyy/mm/dd" data-date-today-highlight="true">   
                    
                </div>
      
                </form>
            
              <button id="buttonClientNouvelleCommande" class="btn btn-primary">Suivant</button>
          </div>

          <div id="newOrderSummary" >
              <span>Commande en cours</span>
              <span id="newOrderSummaryName" class="card-text"></span> <span id="newOrderSummaryDate" class="card-text"></span>          
          </div>
          <div id="newOrderStep2" class="col-lg-12 mb-5">
              <form> <!-- BOOTSTRAP FORM with typehead-->
                <div class="form-group ">
                  <span class ="icon icon-user"> Selectionnez un produit - code ou description</span> 
                  <input type="text" name="produitNouvelleCommande" id="produitNouvelleCommande" style="width: 50%" class="form-control"  autocomplete="off" aria-describedby="produitNouvelleCommandeHelp" placeholder="Produit ou code">
                                  
                  <small id="produitNouvelleCommandeHelp" class="form-text text-muted">Si non trouve, verifiez et demandez si le produit existe. Commencez par 999 puis espace pour une Saisie Manuelle   </small>

                </div>

                <div class="row">
                  <div class="col-lg-2">
                    <label for="produitNouvelleCommandeQuantite">Nombre</label>
                    <input type="number" style="width: 80%" class="form-control mb-2" id="produitNouvelleCommandeQuantite" placeholder="Nbre">
                  </div>
                  <div class="col-lg-2">
                    <label for="produitNouvelleCommandePoids">Poids (kg)</label>
                    <input type="number" style="width: 80%" class="form-control mb-2" id="produitNouvelleCommandePoids" placeholder="Poids">
                  </div>
                  <div class="col-lg-2">
                    <label for="produitNouvelleCommandeNbrePers">Nb.Pers.</label>
                    <input id="produitNouvelleCommandeNbrePers" type="number" style="width: 80%" class="form-control mb-2" id="produitNouvelleCommandeNbrePers" placeholder="Pers.">
                  </div>
                  <div class="col-lg-2">
                        <label for="produitNouvelleCommandeSousVideCheck">Sous Vide</label>
                        <input type="checkbox" class="form-control mb-2" id="produitNouvelleCommandeSousVideCheck" style="width: 30%" >
                  </div>

                </div>
                <div class="form-group ">
                  <span class ="icon icon-pencil"> Commentaires</span> 
                  <input type="text" name="produitNouvelleCommandeCommentaire" style="width: 50%" id="produitNouvelleCommandeCommentaire" class="form-control"  autocomplete="off"  placeholder="Precisions">                          
                </div>

              </form>
              <button class="btn btn-primary" type="button" id="addProductNewOrder">Ajouter</button>
              <p></p>

            <table id=newOrderSummaryTableForCSS class="table table-hover table-dark" >
              <thead>
                  <tr>
                      <th style="width: 50px" scope="col">Sel</th>
                      <th style="width: 30px" scope="col">#</th>
                      <th style="width: 60px" scope="col">Code</th>
                      <th style="width: 180px" scope="col">Produit</th>
                      <th style="width: 60px" scope="col">Nbre</th>
                      <th style="width: 100px" scope="col">Poids (kg)</th>
                      <th style="width: 60px" scope="col">SV</th>
                      <th style="width: 60px" scope="col">Nb.Pers</th>
                      <th style="width: 150px" scope="col">Commentaires</th>
                  </tr>
              </thead>
              <tbody id="newOrderSummaryTable">

              </tbody>
          </table>
          <button type="button" class="delete-row">Supprimer</button>
         

          <textarea id="newOrderGlobalComment"class="form-control" rows="3" placeholder="Commentaire Global?" ></textarea>

          <button id="saveNewOrderTable" type="button" class= "btn btn-primary">Enregistrer</button>

          <div id=myresut></div>



          </div>
          
      </div>


      <div role="tabpanel" class="tab-pane" id="sales">
      <p>Exemple de suivi de commande possible-non fonctionnel pour le moment</p>
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
      <p>Exemple de suivi de commande possible-non fonctionnel pour le moment</p>
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

    <div class="hr-divider my-4" id="nombreCommandesChartTitle" >
      <h3  class="hr-divider-content hr-divider-heading">Nombre de commandes cette semaine</h3>
    </div>
    <div id="statCard">
    <div class="row statcards mt-3 mb-3 text-xs-center text-md-left ">
      <div class="col-6 col-md-2 statcard mb-4">
        <h3 class="statcard-number text-success">
          10
          <small class="delta-indicator delta-positive">5%</small>
        </h3>
        <span class="statcard-desc">Mardi</span>
      </div>
      <div class="col-6 col-md-2 statcard mb-4">
        <h3 class="statcard-number text-danger">
          15
          <small class="delta-indicator delta-negative">1.3%</small>
        </h3>
        <span class="statcard-desc">Mercredi</span>
      </div>
      <div class="col-6 col-md-2 statcard mb-4">
        <h3 class="statcard-number text-success">
          20
          <small class="delta-indicator delta-positive">6.75%</small>
        </h3>
        <span class="statcard-desc">Jeudi</span>
      </div>
      <div class="col-6 col-md-2 statcard mb-4">
        <h3 class="statcard-number text-danger">
          30
          <small class="delta-indicator delta-negative">1.3%</small>
        </h3>
        <span class="statcard-desc">Vendredi</span>
      </div>
      <div class="col-6 col-md-2 statcard mb-4">
        <h3 class="statcard-number text-danger">
          40
          <small class="delta-indicator delta-negative">1.3%</small>
        </h3>
        <span class="statcard-desc">Samedi</span>
      </div>
    </div>
    </div>
    <hr class="my-4">
<!--try to insert table here-->
<div id="savedOrders" class="tab-content">
      <div role="tabpanel" class="tab-pane active" >
        <h3>Commandes Enregistrees</h3>
        <small class="form-text text-muted">Veuillez cliquer une ligne pour details/ modification/ suppression</small>
        
        <table id="tableFullOrders" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Commande
      </th>
      <th>Nom
      </th>
      <th>Prenom
      </th>
      <th>Tel
      </th>
      <th>Prise le
      </th>
      <th>Pour le
      </th>
      <th class="th-sm">Commentaires
      </th>
    </tr>
  </thead>
  <tbody>
  </tbody>
  <tfoot>
    <tr>
      <th>Commande
      </th>
      <th>Nom
      </th>
      <th>Prenom
      </th>
      <th>Tel
      </th>
      <th>Prise le
      </th>
      <th>Pour le
      </th>
      <th>Commentaires
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
//$('#tableFullOrders').DataTable();
$('#tableFullOrders').DataTable({
"ordering": false// false to disable sorting (or any other option)
});
$('.dataTables_length').addClass('bs-select');

});




</script>
<div class="hr-divider my-4">
    <h3  class="hr-divider-content hr-divider-heading">Details Commande Selectionee</h3>
</div>
<div id="orderDetails" tabindex="-1" >

  <h5 id="oneOrderName" class="card-text"></h5> 
  <div id="divDeleteOrder">
    <button class="btn btn-primary" type="button" id="buttonDeleteOrder">Supprimer Commande</button>
  </div>
  <h6><span class="card-text"> Commande numero:   </span><span id="oneOrderID" class="card-text"></span></h6> 
  <h6><span class="card-text"> Pour le: </span><span id="oneOrderDate" class="card-text"></span></h6>
  <span  class="card-text">Commentaire Global: </span>       
  <p id="oneOrderComment" ></p>

  <div id="modifyOrderAddProductForm" class="col-lg-12 mb-5">
                <form> <!-- BOOTSTRAP FORM with typehead-->
                  <div class="form-group ">
                    <span class ="icon icon-user"> Selectionnez un produit - code ou description</span> 
                    <input type="text" name="produitModifyCommande" id="produitModifyCommande" style="width: 50%" class="form-control"  autocomplete="off" aria-describedby="produitNouvelleCommandeHelp" placeholder="Produit ou code">
                                    
                    <small id="produitNouvelleCommandeHelp" class="form-text text-muted">Si non trouve, verifiez et demandez si le produit existe. Commencez par 999 puis espace pour une Saisie Manuelle   </small>

                  </div>

                  <div class="row">
                    <div class="col-lg-2">
                      <label for="produitModifyCommandeQuantite">Nombre</label>
                      <input type="number" style="width: 80%" class="form-control mb-2" id="produitModifyCommandeQuantite" placeholder="Nbre">
                    </div>
                    <div class="col-lg-2">
                      <label for="produitModifyCommandePoids">Poids (kg)</label>
                      <input type="number" style="width: 80%" class="form-control mb-2" id="produitModifyCommandePoids" placeholder="Poids">
                    </div>
                    <div class="col-lg-2">
                      <label for="produitModifyCommandeNbrePers">Nb.Pers.</label>
                      <input id="produitModifyCommandeNbrePers" type="number" style="width: 80%" class="form-control mb-2" id="produitModifyCommandeNbrePers" placeholder="Pers.">
                    </div>
                    <div class="col-lg-2">
                          <label for="produitModifyCommandeSousVideCheck">Sous Vide</label>
                          <input type="checkbox" class="form-control mb-2" id="produitModifyCommandeSousVideCheck" style="width: 30%" >
                    </div>

                  </div>
                  <div class="form-group ">
                    <span class ="icon icon-pencil"> Commentaires Produit</span> 
                    <input type="text" name="produitModifyCommandeCommentaire" style="width: 50%" id="produitModifyCommandeCommentaire" class="form-control"  autocomplete="off"  placeholder="Precisions">                          
                  </div>

                </form>
                <button class="btn btn-primary" type="button" id="addProductModifyOrder">Ajouter</button>
                <p></p>
  </div>

  <table id="orderDetailsTable" class="table table-hover table-dark" >
                <thead>
                    <tr>
                        <th style="width: 40px" scope="col">Sel</th>
                        <th style="width: 40px" scope="col">#</th>
                        <th style="width: 80px" scope="col">Code</th>
                        <th style="width: 300px" scope="col">Produit</th>
                        <th style="width: 60px" scope="col">Nbre</th>
                        <th style="width: 80px" scope="col">Poids (kg)</th>
                        <th style="width: 80px" scope="col">SV</th>
                        <th style="width: 80px" scope="col">Nb.Pers</th>
                        <th style="width: auto" scope="col">Commentaires</th>
                    </tr>
                </thead>
                <tbody id="orderDetailsTableBody">

                </tbody>
      </table>
      <span style="display: inline;"><button type="button" class="delete-row-one-order">Supprimer</button>
      <button type="button" class="buttonModifyOrderAddProducts">Ajouter des produits</button></span>
      

      <p style="color:#1CA8DD"> Modification</p>

      <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
        <label class="onoffswitch-label" for="myonoffswitch">
          <span class="onoffswitch-inner"></span>
          <span class="onoffswitch-switch"></span>
        </label>
      </div>
  <button class="btn btn-primary" type="button" id="saveModifyOrderTable">Enregistrer les modifications</button>






      
</div>

    <hr class="my-4">

    <!--To ACTIVATE<div class="row">
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


    
    <script src="docs/assets/js/tether.min.js"></script>
    <script src="docs/assets/js/chart.js"></script>
    <script src="docs/assets/js/tablesorter.min.js"></script>
    <script src="docs/assets/js/toolkit.js"></script>
    <script src="docs/assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>

    <script>
    var boolEnregistrementModifications = 0;
        $(document).ready(function(){

          
              $("#checkboxNouveauClient").click(function () {
                  if ($(this).prop("checked")) {
                    $('#nouveauClient').css("display","block");
                  }
                  else {
                    $('#nouveauClient').css("display","none");
                  }
              });
        
              $('#clientNouvelleCommande').typeahead({

                      limit: 4,
                      templates: {
                        empty: [
                          "<div>No matching courses found!</div>"
                        ]
                      },
                      source: function(query, result)
                      {
                        var i=0;
                          $.ajax({
                            url:"php_scripts/fetch.php",
                            method:"POST",
                            data:{query:query},
                            dataType:"json",
                            success:function(data)
                                  {
                                      
                                    
                                      result($.map(data, function(item){




                                        if (query !="" && item =="" || $('#checkboxNouveauClient').prop("checked")){


                                          $('#nouveauClient').css("display","block");
                                        } else if  (query =="" &&  $('#checkboxNouveauClient').prop("checked")==false){
                                          $('#nouveauClient').css("display","none");
                                        } else {
                                          $('#nouveauClient').css("display","none");
                                        }
                                    
                                        return item;
                                        

                                      
                                      }));
                                    
                                  },
                                  error: function(){
                                    //alert("item");
                                  
                                  }
                          })
                      }
              });
        
        });
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


      
    <script type="text/javascript">

            var newOrderSummary= { 
                    firstName: "",
                    lastName: "",
                    phone:"",
                    date: "",
                    ID: ""};
            
            var modifyOrderSummary = { 
                    firstName: "",
                    lastName: "",
                    phone:"",
                    date: "",
                    ID: "",
                    customerID: "",
                    Date_TakenON: "",
                    comment: ""};
              
            
                
            
            $( "#buttonClientNouvelleCommande" ).click(function() {
              $( "#newOrderStep1" ).hide();
              $( "#newOrderStep2" ).show();
              $( "#newOrderSummary" ).show();
              //var mymessage =  document.getElementById("clientNouvelleCommande").value;
              if ($("#checkboxNouveauClient").prop('checked') == false){
                var firstNameLastName =$('#clientNouvelleCommande').val();
                firstNameLastName = jQuery.trim(firstNameLastName);
                var firstNameLastNameArray = firstNameLastName.split(" ");
                //alert (firstNameLastNameArray[3]);
                var identification = firstNameLastNameArray[3].split(":");
                //alert (identification[1]);

                newOrderSummary = { 
                    firstName: firstNameLastNameArray[0],
                    lastName: firstNameLastNameArray[1],
                    phone:firstNameLastNameArray[2],
                    date: $('#dateNouvelleCommande').val(),
                    ID: identification[1]};
              

                } else {

                

                var firstNameLastNameArray=[];

                firstNameLastNameArray[0] =$('#nouveauClientPrenom').val();
                firstNameLastNameArray[0] = jQuery.trim(firstNameLastNameArray[0]);

                //alert (firstNameLastNameArray[0] );

                firstNameLastNameArray[1] =$('#nouveauClientNom').val();
                firstNameLastNameArray[1] = jQuery.trim(firstNameLastNameArray[1]);

                firstNameLastNameArray[2] =$('#nouveauClientTel').val();
                firstNameLastNameArray[2] = jQuery.trim(firstNameLastNameArray[2]);
                
                var identification = [];
                identification[1]=0;
                newOrderSummary = { 
                    firstName: firstNameLastNameArray[0],
                    lastName: firstNameLastNameArray[1],
                    phone:firstNameLastNameArray[2],
                    date: $('#dateNouvelleCommande').val(),
                    ID: identification[1]};

              saveNewCustomer();
                
              };

              $("#newOrderSummaryName").html(newOrderSummary.firstName + " " + newOrderSummary.lastName +   " TEL: " + newOrderSummary.phone);
              $("#newOrderSummaryDate").html("Pour le " + newOrderSummary.date);
              
              function saveNewCustomer() {
                //alert ("This is my function to save new customer");
                //alert (newOrderSummary.firstName);

                $.ajax({
                  
                  type: "POST",
                  url: "php_scripts/processJSONarrayNewCustomer.php",
                  data: { newcustomerLN: newOrderSummary.lastName 
                        , newcustomerFN: newOrderSummary.firstName
                        , newcustomerPHONE: newOrderSummary.phone},
                  success: function(customersaved){
                      //alert ("it's ok");
                      //alert (customersaved); //this was to check the php file values
                      newOrderSummary.ID=customersaved;
                      //alert (newOrderSummary.ID);

                  }
                });
              };//end of function save New customer

            });

            $(document).ready(function(){
                $(".add-row").click(function(){
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
                    $("table tbody").append(markup);
                });
        
        // Find and remove selected table rows
                $(".delete-row").click(function(){
                    $("#newOrderSummaryTable").find('input[name="record"]').each(function(){
                      if($(this).is(":checked")){
                            $(this).parents("tr").remove();
                        }
                    });
                });
             });  




        </script>

        <script>
          //This script is for New Order-find the products
        $(document).ready(function(){
        
        $('#produitNouvelleCommande').typeahead({
          source: function(query, result)
          {
          $.ajax({
            url:"php_scripts/fetchproduit.php",
            method:"POST",
            data:{query:query},
            dataType:"json",
            success:function(data)
            {
            result($.map(data, function(item){
              return item;
            }));
            }
          })
          }
        });
        
        });

        $(document).ready(function(){
        
        $('#produitModifyCommande').typeahead({
          source: function(query, result)
          {
          $.ajax({
            url:"php_scripts/fetchproduit.php",
            method:"POST",
            data:{query:query},
            dataType:"json",
            success:function(data)
            {
            result($.map(data, function(item){
              return item;
            }));
            }
          })
          }
        });
        
        });
        </script>

      <script>

        //This script is to add a row in order table
         $(document).ready(function(){
            var numberProduct;
            numberProduct=0;
             $("#addProductNewOrder").click(function(){

               //alert (newOrderSummary.firstName);

                var nameProduct = $("#produitNouvelleCommande").val();
                nameProduct = jQuery.trim(nameProduct);
                var nameProductArray = nameProduct.split(/ (.*)/);
                var nombreProduct = $("#produitNouvelleCommandeQuantite").val();
                var poidsProduct= $("#produitNouvelleCommandePoids").val();
                if ((poidsProduct!="")&&(nombreProduct=="")){
                  nombreProduct=1;
                }
                var sousVideProduct ="Non"
                if($("#produitNouvelleCommandeSousVideCheck").is(":checked")){
                            sousVideProduct="Oui";
                        }
                var nbrePersProduct=$("#produitNouvelleCommandeNbrePers").val();
                var commentaire=$("#produitNouvelleCommandeCommentaire").val();

                 numberProduct++;

                 var addProduct = "<tr><td id='record'><input type='checkbox' id='record' name='record'/></td><td> " + numberProduct +
                  "</td><td>" + nameProductArray[0]+ 
                  "</td><td>" + nameProductArray[1] +
                  "</td><td id='tdEditNumber'>" + nombreProduct + 
                  "</td><td id='tdEditNumber'>" + poidsProduct + 
                  "</td><td id='tdEditText'>" + sousVideProduct +
                  "</td><td id='tdEditNumber'>" + nbrePersProduct +
                  "</td><td id='tdEditText'>" + commentaire +
                  "</td></tr>";
                 
                 $("#newOrderSummaryTable").append(addProduct);
                 
                 $("#produitNouvelleCommande").val("");
                 $("#produitNouvelleCommandeQuantite").val("");
                 $("#produitNouvelleCommandePoids").val("");
                 $("#produitNouvelleCommandeCommentaire").val("");
                 $("#produitNouvelleCommandeSousVideCheck").prop('checked', false); // Unchecks it
                 $("#produitNouvelleCommandeNbrePers").val("");
            
            
            });
    
         });  


            //This script is to add a row in order table-MODIFY ORDER
            $(document).ready(function(){
            var numberProduct;
            numberProduct=0;
             $("#addProductModifyOrder").click(function(){

               //alert (newOrderSummary.firstName);

                var nameProduct = $("#produitModifyCommande").val();
                nameProduct = jQuery.trim(nameProduct);
                var nameProductArray = nameProduct.split(/ (.*)/);
                var nombreProduct = $("#produitModifyCommandeQuantite").val();
                var poidsProduct= $("#produitModifyCommandePoids").val();
                if ((poidsProduct!="")&&(nombreProduct=="")){
                  nombreProduct=1;
                }
                var sousVideProduct ="Non"
                if($("#produitModifyCommandeSousVideCheck").is(":checked")){
                            sousVideProduct="Oui";
                        }
                var nbrePersProduct=$("#produitModifyCommandeNbrePers").val();
                var commentaire=$("#produitModifyCommandeCommentaire").val();

                 numberProduct++;

                 var addProductModify = "<tr><td id='record'><input type='checkbox' id='record' name='record'/></td><td> " + numberProduct +
                  "</td><td>" + nameProductArray[0]+ 
                  "</td><td>" + nameProductArray[1] +
                  "</td><td id='tdEditNumber'>" + nombreProduct + 
                  "</td><td id='tdEditNumber'>" + poidsProduct + 
                  "</td><td id='tdEditText'>" + sousVideProduct +
                  "</td><td id='tdEditNumber'>" + nbrePersProduct +
                  "</td><td id='tdEditText'>" + commentaire +
                  "</td></tr>";
                 
                 $("#orderDetailsTable").append(addProductModify);
                 
                 $("#produitModifyCommande").val("");
                 $("#produitModifyCommandeQuantite").val("");
                 $("#produitModifyCommandePoids").val("");
                 $("#produitModifyCommandeCommentaire").val("");
                 $("#produitModifyCommandeSousVideCheck").prop('checked', false); // Unchecks it
                 $("#produitModifyCommandeNbrePers").val("");
            
            
            });
    
         });  






      </script>

<script>



$("#newOrderSummaryTable").on("click", "#tdEditNumber", function(event){
    var $this = $(this);
    var $input = $('<input>', {
        value: $this.text(),
        type: 'number',
        blur: function() {
           $this.text(this.value);
        },
        keyup: function(e) {
           if (e.which === 13) $input.blur();
        }
    }).appendTo( $this.empty() ).focus();


});

$("#newOrderSummaryTable").on("click", "#tdEditText", function(event){
    var $this = $(this);
    var $input = $('<input>', {
        value: $this.text(),
        type: 'text',
        blur: function() {
           $this.text(this.value);
        },
        keyup: function(e) {
           if (e.which === 13) $input.blur();
        }
    }).appendTo( $this.empty() ).focus();


});




</script>

<script>
//$(document).ready(function(){
   // emptyorders();
   /*window.setInterval(function(){
       /// call your function here
       loadContent();
    }, 5000); // Change Interval here to test. For eg: 5000 for 5 sec*/

    //var timer = setTimeout(loadContent(), 2000);
    //loadContent();
    /*function emptyorders(){
        $('#tableFullOrders').find('tbody').empty();
        $('#tableFullOrders tbody').html('');
        $('#tableFullOrders tbody').remove();
    }*/
    //var refreshedDataFromTheServer = loadContent();

    //var myTable = $('#tableFullOrders').DataTable();
    //myTable.clear().rows.add(refreshedDataFromTheServer).draw();



    function loadContent() { //function-type 1
      // var myfunction = function() { //function-type 2
        $('#tableFullOrders').DataTable().clear();
        var mytable = $('#tableFullOrders').DataTable();
            $.ajax({
                type:'POST',
                url:'php_scripts/getJSONarrayAllOrders.php',
                success:function(response){
                response = $.parseJSON(response);

                $.each(response, function (i, item) {
                                        mytable.row.add($(
                                                    '<tr>' +
                                                    '<td>'+response[i].OrderID+'</td>' +
                                                    '<td>'+response[i].CustomerLN+'</td>' +
                                                    '<td>'+response[i].CustomerFN+'</td>' +
                                                    '<td>'+response[i].CustomerPHONE+'</td>' +
                                                    '<td>'+response[i].Date_TakenON+'</td>' +
                                                    '<td>'+response[i].Date_Forthe+'</td>' +
                                                    '<td>'+response[i].generalcomment+'</td>' +
                                                    '</tr>'
                                    )).draw(false);
                    
                });

                
                
                } //end of success
            }); //end ajax

    setTimeout(loadContent, 3000);
    } //end of function-type 1
     //}; //end of function-type 2
//});//end of document ready
setTimeout(loadContent, 3000);


$(document).ready(function(){
    

    $("#saveNewOrderTable").click(function(){
    var TableDataNeworder;
    TableDataNeworder = storeTblValues()
    TableDataNeworder = JSON.stringify(TableDataNeworder);


    var newOrderGlobalCommentIndex=$("#newOrderGlobalComment").val();



    $.ajax({
        
        type: "POST",
        url: "php_scripts/processJSONarrayNewOrder.php",
        data: { newOrderData: TableDataNeworder 
            , newOrderFirstName:newOrderSummary.firstName
            , newOrderLastName: newOrderSummary.lastName
            , newOrderPhone: newOrderSummary.phone
            , newOrderDate: newOrderSummary.date
            , newOrderCustomerID: newOrderSummary.ID,
                newOrderGlobalComment: newOrderGlobalCommentIndex},
        success: function(response){
            //alert ("it's ok");
            //alert (response); this was to check the php file values
            var r = confirm("Voulez vous imprimer?");
            if (r == true) {
            alert ("Vous avez imprime");
            $( "#newOrderStep1" ).show();
            $( "#newOrderStep2" ).hide();
            $( "#newOrderSummary" ).hide();
            $( "#clientNouvelleCommande" ).val("");
            $( "#dateNouvelleCommande" ).val("");
            $( "#nouveauClientNom" ).val("");
            $( "#nouveauClientPrenom" ).val("");
            $( "#nouveauClientTel" ).val("");
            $('#checkboxNouveauClient').prop('checked', false); // Unchecks it
            $('#nouveauClient').css("display","none");
            //emptyorders();
            //loadContent();

                //myTable.clear().rows.add(refreshedDataFromTheServer).draw();
            
            
            } else {
            $( "#newOrderStep1" ).show();
            $( "#newOrderStep2" ).hide();
            $( "#newOrderSummary" ).hide();
            $( "#clientNouvelleCommande" ).val("");
            $( "#dateNouvelleCommande" ).val("");
            $( "#nouveauClientNom" ).val("");
            $( "#nouveauClientPrenom" ).val("");
            $( "#nouveauClientTel" ).val("");
            $('#checkboxNouveauClient').prop('checked', false); // Unchecks it
            $('#nouveauClient').css("display","none");
            //emptyorders();
            //loadContent();
            //myTable.clear().rows.add(refreshedDataFromTheServer).draw();
            }


        }
    });

    function storeTblValues()
    {

        var TableDataNeworder = new Array();


        //This script is to read the neworder table
            $('#newOrderSummaryTable tr').each(function(row, tr){
            TableDataNeworder[row]={
                    "no" : $(tr).find('td:eq(1)').text()
                    , "code" :$(tr).find('td:eq(2)').text()
                    , "produit" : $(tr).find('td:eq(3)').text()
                    , "nbre" : $(tr).find('td:eq(4)').text()
                    , "poids" : $(tr).find('td:eq(5)').text()
                    , "SV" : $(tr).find('td:eq(6)').text()
                    , "pers" : $(tr).find('td:eq(7)').text()
                    , "comment" : $(tr).find('td:eq(8)').text()
                }
            }); 

            
            return TableDataNeworder;

    }

    
    });

});


//saving modify order in database
$(document).ready(function(){
    

      $("#saveModifyOrderTable").click(function(){

            
            alert ("enregistrement des modifications");
            var TableDataModifyorder;
            TableDataModifyorder = storeTblValuesModify()
            TableDataModifyorder = JSON.stringify(TableDataModifyorder);


        
          if ($("#myonoffswitch").prop("checked")) {

            modifyOrderSummary.comment =$('textarea#oneOrderComment').val();

          }else{
            
            modifyOrderSummary.comment=$("#oneOrderComment").text();

          };
          
          modifyOrderSummary.comment += " Mofication de la commande le : ";
          alert ( modifyOrderSummary.comment);
          var d = new Date();
          d=d.toDateString();
          alert (d);
          modifyOrderSummary.comment+=d;
          modifyOrderSummary.comment+=". "
          //modifyOrderSummary.date=$("#oneOrderDate").html($("#oneOrderDate").text());
          if   ($("#myonoffswitch").prop("checked")){

            modifyOrderSummary.date=$('input[id^="oneOrderDate"]').val();

          }else {
            
            modifyOrderSummary.date=$("#oneOrderDate").text();

          };
          //alert ( modifyOrderSummary.date);

          if (modifyOrderSummary.date!="") {

             
              $.ajax({
                  
                  type: "POST",
                  url: "php_scripts/processJSONarrayModifyOrder.php",
                  data: { newOrderData: TableDataModifyorder 
                      , newOrderFirstName:modifyOrderSummary.firstName
                      , newOrderLastName: modifyOrderSummary.lastName
                      , newOrderPhone: modifyOrderSummary.phone
                      , newOrderDate: modifyOrderSummary.date
                      , newOrderCustomerID: modifyOrderSummary.customerID
                      ,modifyOrderID: modifyOrderSummary.ID
                      ,newOrderGlobalComment: modifyOrderSummary.comment
                      ,modifyOrderDate_TakenON: modifyOrderSummary.Date_TakenON},
                  success: function(response){
                     //alert ("it's ok");
                      //alert (response); //this was to check the php file values
                      boolEnregistrementModifications = 1;
                      var r = confirm("Voulez vous imprimer?");
                      if (r == true) {
                      alert ("Vous avez imprime");
                      $( "#newOrderStep1" ).show();
                      $( "#newOrderStep2" ).hide();
                      $( "#newOrderSummary" ).hide();
                      $( "#clientNouvelleCommande" ).val("");
                      $( "#dateNouvelleCommande" ).val("");
                      $( "#nouveauClientNom" ).val("");
                      $( "#nouveauClientPrenom" ).val("");
                      $( "#nouveauClientTel" ).val("");
                      $('#checkboxNouveauClient').prop('checked', false); // Unchecks it
                      $('#nouveauClient').css("display","none");
                      //emptyorders();
                      //loadContent();

                          //myTable.clear().rows.add(refreshedDataFromTheServer).draw();
                      
                      
                      } else {
                      $( "#newOrderStep1" ).show();
                      $( "#newOrderStep2" ).hide();
                      $( "#newOrderSummary" ).hide();
                      $( "#clientNouvelleCommande" ).val("");
                      $( "#dateNouvelleCommande" ).val("");
                      $( "#nouveauClientNom" ).val("");
                      $( "#nouveauClientPrenom" ).val("");
                      $( "#nouveauClientTel" ).val("");
                      $('#checkboxNouveauClient').prop('checked', false); // Unchecks it
                      $('#nouveauClient').css("display","none");
                      //emptyorders();
                      //loadContent();
                      //myTable.clear().rows.add(refreshedDataFromTheServer).draw();
                      }


                  }
                 
              }); //END AJAX
              
          }else {
            alert ("Aucune commande selectionnee-pas de modification prise en compte");
          }

          function storeTblValuesModify()
          {

              var TableDataModifyorder = new Array();


              //This script is to read the neworder table
                  $('#orderDetailsTableBody tr').each(function(row, tr){
                    TableDataModifyorder[row]={
                          "no" : $(tr).find('td:eq(1)').text()
                          , "code" :$(tr).find('td:eq(2)').text()
                          , "produit" : $(tr).find('td:eq(3)').text()
                          , "nbre" : $(tr).find('td:eq(4)').text()
                          , "poids" : $(tr).find('td:eq(5)').text()
                          , "SV" : $(tr).find('td:eq(6)').text()
                          , "pers" : $(tr).find('td:eq(7)').text()
                          , "comment" : $(tr).find('td:eq(8)').text()
                      }
                  }); 

                  
                  return TableDataModifyorder;

          }

          $('#myonoffswitch').prop('checked', false);
      }); //end saveModifyOrderTable click funciton

});

$("#tableFullOrders").on("click", "tr", function(e) {
    //var rowNumber= $(e.currentTarget).index() + 1);
    var rowNumberSavedOrders = $(this).find('td:first').text();
    //alert ("hi");
    //alert (rowNumberSavedOrders);
    $('#orderDetails').css("display","block");
    loadOneOrderDetails(rowNumberSavedOrders);
    
    jQuery("#orderDetails").attr("tabindex",-1).focus();

});



  function loadOneOrderDetails(rowNumberSavedOrders) { //function-type 1
            //alert (rowNumberSavedOrders);
            $('#orderDetailsTable tbody').html('');
            //$('#orderDetailsTable').DataTable().clear();
            //var mytableOneOrder = $('#orderDetailsTable').DataTable();
            $.ajax({
                type:'POST',
                url:'php_scripts/getJSONarrayOneOrderDetails.php',
                data:{rowNumberSavedOrders:rowNumberSavedOrders},
                success:function(response2){
                //alert (response2);
                response2 = $.parseJSON(response2);
                //alert (response2);

                $.each(response2, function (i, item) {

                                  
                                    var mytableOneOrder=
                                                    '<tr>' +
                                                    "<td id='oneOrderRow'><input type='checkbox' id='oneOrderRow' name='oneOrderRow' ></td>" +
                                                    '<td>'+response2[i].ProductID+'</td>' +
                                                    '<td>'+response2[i].ProductID+'</td>' +
                                                    '<td>'+response2[i].Description+'</td>' +
                                                    '<td id="tdEditNumber">'+response2[i].Quantity+'</td>' +
                                                    '<td id="tdEditNumber">'+response2[i].Weight+'</td>' +
                                                    '<td id="tdEditText">'+response2[i].sous_vide+'</td>' +
                                                    '<td id="tdEditNumber">'+response2[i].nbre_pers+'</td>' +
                                                    '<td id="tdEditText">'+response2[i].autre_info+'</td>' +
                                                    '</tr>';
                                                    $("#orderDetailsTable").append(mytableOneOrder);


                    
                });

                
                
                } //end of success
            }); //end ajax

            $.ajax({
                type:'POST',
                url:'php_scripts/getJSONarrayOneOrderNameDate.php',
                data:{rowNumberSavedOrders:rowNumberSavedOrders},
                success:function(response2){
                    //alert (response2);
                    response2 = $.parseJSON(response2);
                    //alert (response2);
                                      

                    $("#oneOrderName").html(response2[0].CustomerFN+ " " + response2[0].CustomerLN+   " TEL: " +  response2[0].CustomerPHONE + " " + "  " + " " + "  " + " (IDENTIFICATION: " + response2[0].CustomerID + ") ");

                    $("#oneOrderID").html(response2[0].OrderID);
                    $("#oneOrderDate").html(response2[0].Date_Forthe);
                    modifyOrderSummary.date=response2[0].Date_Forthe;
                    
                    modifyOrderSummary.comment=response2[0].generalComment;
                    $("#oneOrderComment").html(response2[0].generalComment);

                    modifyOrderSummary.firstName=response2[0].CustomerFN;
                    modifyOrderSummary.lastName=response2[0].CustomerLN;
                    modifyOrderSummary.phone=response2[0].CustomerPHONE;
                    modifyOrderSummary.ID=response2[0].OrderID;
                    modifyOrderSummary.customerID=response2[0].CustomerID;
                    modifyOrderSummary.Date_TakenON=response2[0].Date_TakenON;

                    
             
                
                } //end of success
            }); //end ajax

    } //end of function-type 1

    //var oneOrderDate=modifyOrderSummary.date;

    $("#myonoffswitch").click(function () {
                  if ($(this).prop("checked")) {
                    boolEnregistrementModifications=0;
                    //alert (modifyOrderSummary.comment);
                    
                    $('.delete-row-one-order').css("display","inline-block");
                    $('.buttonModifyOrderAddProducts').css("display","inline-block");
                    $('#saveModifyOrderTable').css("display","block");
                    $( "#oneOrderDate" ).html("");
                    $( "#oneOrderDate" ).html("<input id='oneOrderDate' type='text' class='form-control' data-provide='datepicker' value=" + modifyOrderSummary.date + " data-date-language='fr' data-date-format='yyyy/mm/dd' >");
                    modifyOrderSummary.date = $('input[id^="oneOrderDate"]').val();
                    //alert (modifyOrderSummary.date);
                    $( "#oneOrderComment" ).html("");
                    $( "#oneOrderComment" ).html("<textarea id='oneOrderComment' class='form-control' rows='3' >"+ modifyOrderSummary.comment+ "</textarea>");
                    //$("#oneOrderComment").val( modifyOrderSummary.comment );
                    //modifyOrderSummary.comment = $('textarea [id^="oneOrderComment"]').val();
                    modifyOrderSummary.comment =$('textarea#oneOrderComment').val();
                    //alert (modifyOrderSummary.comment);
                  }
                  else {

                    if (boolEnregistrementModifications==0){
                      alert ("Attention vous n'avez pas enregistrer vos modifications");
                    }
                    modifyOrderSummary.date = $('input[id^="oneOrderDate"]').val();
                    modifyOrderSummary.comment = modifyOrderSummary.comment =$('textarea#oneOrderComment').val();
                    //alert (modifyOrderSummary.date);

                    $('.delete-row-one-order').css("display","none");
                    $('#modifyOrderAddProductForm').css("display","none");
                    $('.buttonModifyOrderAddProducts').css("display","none");
                    $('#saveModifyOrderTable').css("display","none");
                    $( "#oneOrderDate" ).html("");
                    $( "#oneOrderDate" ).html("<span id='oneOrderDate' class='card-text'>" + modifyOrderSummary.date + "</span>");
                    $( "#oneOrderComment" ).html("<p id='oneOrderComment' >"+modifyOrderSummary.comment +" </p>");


                  }
              });


    $("#orderDetailsTable").on("click", "#tdEditNumber", function(event){
      if ($("#myonoffswitch").prop("checked")){
          var $this = $(this);
          var $input = $('<input>', {
              value: $this.text(),
              type: 'number',
              blur: function() {
                $this.text(this.value);
              },
              keyup: function(e) {
                if (e.which === 13) $input.blur();
              }
          }).appendTo( $this.empty() ).focus();

      }
});

$("#orderDetailsTable").on("click", "#tdEditText", function(event){
      if ($("#myonoffswitch").prop("checked")){
          var $this = $(this);
          var $input = $('<input>', {
              value: $this.text(),
              type: 'number',
              blur: function() {
                $this.text(this.value);
              },
              keyup: function(e) {
                if (e.which === 13) $input.blur();
              }
          }).appendTo( $this.empty() ).focus();

      }
});

$(".delete-row-one-order").click(function(){
                    $("#orderDetailsTable tbody").find('input[name="oneOrderRow"]').each(function(){
                      if($(this).is(":checked")){
                            $(this).parents("tr").remove();
                        }
                    });
                });

$(".buttonModifyOrderAddProducts").click(function(){
  $('#modifyOrderAddProductForm').css("display","block");
});

$(document).ready(function(){
  $("#buttonDeleteOrder").click(function(){
      alert("delete");
      var definitiveDelete = confirm("Voulez vous supprimer cette commande definitivement?");
      if (definitiveDelete  == true) {
        $.ajax({
                  url:"php_scripts/deleteOneOrder.php",
                  method:"POST",
                  data:{modifyOrderID: modifyOrderSummary.ID},
                  success:function(data)
                  {
                    alert (data);
                  }
          })
      }
  $('#orderDetails').css("display","none");
  });
});



</script>







<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

   
  </body>
</html>

