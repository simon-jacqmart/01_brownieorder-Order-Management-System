


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
      border: solid 1px white ;
      padding: 20px;
      position: relative;
      word-wrap: break-word; 
      word-break: break-all;
      width: 100%;



      }
      #newOrderStep2.table {
        table-layout: fixed;
        position: fixed;
        
      }





    #newOrderSummary {

      display: none;
      color: white;
      background: none;
      position: relative;   
      overflow: hidden;
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
      overflow: hidden;


    }

    #newOrderGlobalComment{

      margin-top:10px;
      margin-bottom:10px;
    }



    [contenteditable="true"]:focus {
        background-color: white;
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
          <a class="nav-link" href="#" title="Signed in as mdo" data-toggle="tooltip" data-placement="right" data-container="body">
            <img src="docs/assets/img/avatar-mdo.png" alt="" class="rounded-circle">
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
                                  
                  <small id="produitNouvelleCommandeHelp" class="form-text text-muted">Si non trouve, verifiez et demandez si le produit existe. Commencez par 999 pour une Saisie Manuelle   </small>

                </div>

                <div class="row">
                  <div class="col-lg-2">
                    <label for="produitNouvelleCommandeQuantite">Nombre</label>
                    <input type="number" class="form-control mb-2" id="produitNouvelleCommandeQuantite" placeholder="Nbre">
                  </div>
                  <div class="col-lg-2">
                    <label for="produitNouvelleCommandePoids">Poids (kg)</label>
                    <input type="number" class="form-control mb-2" id="produitNouvelleCommandePoids" placeholder="Poids">
                  </div>
                  <div class="col-lg-2">
                    <label for="produitNouvelleCommandeNbrePers">Nb.Pers.</label>
                    <input type="number" style="width: 112%" class="form-control mb-2" id="produitNouvelleCommandeNbrePers" placeholder="Pers.">
                  </div>
                  <div class="col-lg-2">
                        <label for="produitNouvelleCommandeSousVideCheck">Sous Vide</label>
                        <input type="checkbox" class="form-control mb-2" id="produitNouvelleCommandeSousVideCheck" >
                  </div>

                </div>
                <div class="form-group ">
                  <span class ="icon icon-pencil"> Commentaires</span> 
                  <input type="text" name="produitNouvelleCommandeCommentaire" style="width: 50%" id="produitNouvelleCommandeCommentaire" class="form-control"  autocomplete="off"  placeholder="Precisions">                          
                </div>

              </form>
              <button class="btn btn-primary" type="button" id="addProductNewOrder">Ajouter</button>
              <p></p>

            <table class="table table-hover table-dark" >
              <thead>
                  <tr>
                      <th style="width: 5%" scope="col">Sel</th>
                      <th style="width: 5%" scope="col">#</th>
                      <th style="width: 10%" scope="col">Code</th>
                      <th style="width: 25%" scope="col">Produit</th>
                      <th style="width: 7%" scope="col">Nbre</th>
                      <th style="width: 10%" scope="col">Poids (kg)</th>
                      <th style="width: 7%" scope="col">SV</th>
                      <th style="width: 11%" scope="col">Nb.Pers</th>
                      <th style="width: 20%" scope="col">Commentaires</th>
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
<div class="tab-content">
      <div role="tabpanel" class="tab-pane active" >
      <button id="getOrders" class="btn btn-primary">Update</button>
        <h1>TABLE</h1>
        
        <table id="tableFullOrders" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Commande
      </th>
      <th class="th-sm">Nom
      </th>
      <th class="th-sm">Prenom
      </th>
      <th class="th-sm">Tel
      </th>
      <th class="th-sm">Prise le
      </th>
      <th class="th-sm">Pour le
      </th>
      <th class="th-sm">Commentaires
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>$86,000</td>
      <td>$320,800</td>
    </tr>
    
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>$112,000</td>
      <td>$320,800</td>
    </tr>
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
$('#tableFullOrders').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>

<!--END OF table here-->
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

    <script>
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
                                    alert("item");
                                  
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

            var newOrderSummary
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
                      alert ("it's ok");
                      //alert (customersaved); //this was to check the php file values
                      newOrderSummary.ID=customersaved;
                      alert (newOrderSummary.ID);

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
                    $("table tbody").find('input[name="record"]').each(function(){
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
        </script>

      <script>

        //This script is to add a row in order table
         $(document).ready(function(){
            var numberProduct;
            numberProduct=0;
             $("#addProductNewOrder").click(function(){

               alert (newOrderSummary.firstName);

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


    

         $(document).ready(function(){


             $("#saveNewOrderTable").click(function(){
              var TableDataNeworder;
              TableDataNeworder = storeTblValues()
              TableDataNeworder = JSON.stringify(TableDataNeworder);


              var newOrderGlobalCommentIndex=$("#newOrderGlobalComment").val();


             // TableData = JSON.stringify(storeTblValues());
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
                      alert ("it's ok");
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
                        loadContent();
                        
                        
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
                        loadContent();
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
$(document).ready(function(){
    $('#getOrders').on('click',function(){
      alert ("Update clicked");
      var table = $('#tableFullOrders').DataTable();
        $.ajax({
            type:'POST',
            url:'php_scripts/getJSONarrayAllOrders.php',


            success:function(response){
              alert (response);
              response = $.parseJSON(response);
              alert (response);
              var trHTLM='';
              $.each(response, function (i, item) {
                //trHTML += '<tr><td>' + item.OrderID + '</td><td>' + item.CustomerLN + '</td><td>' +  item.CustomerFN+ '</td></tr>';
                /*$('<tr>').html("<td>" + response[i].OrderID + 
                                "</td><td>" + response[i].CustomerLN + 
                                "</td><td>" + response[i].CustomerFN +
                                "</td><td>" + response[i].CustomerPHONE +
                                "</td><td>" + response[i].Date_TakenON +
                                "</td><td>" + response[i].Date_Forthe +
                                "</td><td>" + response[i].generalComment +

                                "</td>").appendTo('#tableFullOrders');*/


                                table.row.add($(
                                                '<tr>' +
                                                '<td>'+response[i].OrderID+'</td>' +
                                                '<td>'+response[i].CustomerLN+'</td>' +
                                                '<td>'+response[i].CustomerFN+'</td>' +
                                                '<td>'+response[i].CustomerPHONE+'</td>' +
                                                '<td>'+response[i].Date_TakenON+'</td>' +
                                                '<td>'+response[i].Date_Forthe+'</td>' +
                                                '<td>'+response[i].generalComment+'</td>' +
                                                '</tr>'
                                )).draw(false);
                
              });
              //alert (trHTML);
              $('#tableFullOrders').append(trHTML);
 
            }
        });
    });
});
</script>









   
  </body>
</html>

