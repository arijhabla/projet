<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 22/04/2018
 * Time: 00:20
 */
require_once '../core/commandeC.php';
$commande= new commandeC();
$dataPoints = array(
    array("label"=> "En Cours", "y"=> (int)$commande->CountCommandeDone()),
    array("label"=> "Valide", "y"=> (int)$commande->CountCommandeNotDone())
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashboard JTS</title>

    <!-- Favicons -->
    <link href="../img/favicon.png" rel="icon">
    <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet">
    <script src="../lib/chart-master/Chart.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->

        <!--logo end-->
        <div class="nav notify-row" id="top_menu">

        </div>

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Commmandes</span>
                    </a>
                    <ul class="sub">
                        <li><a href="commandes.html">Commandes</a></li>
                        <li><a href="factures.html">Factures</a></li>
                        <li><a href="panier.html">Panier</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span>Produits</span>
                    </a>
                    <ul class="sub">
                        <li><a href="stock.html">Stock</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="catalogue.html">Catalogue</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>SAV</span>
                    </a>
                    <ul class="sub">
                        <li><a href="sav.html">SAV</a></li>
                        <li><a href="reclamation.html">Reclamations</a></li>
                        <li><a href="rendezvous.html">Rendez-vous</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Clients</span>
                    </a>
                    <ul class="sub">
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="clientsf.html">Clients fidèles</a></li>
                        <li><a href="historique.html">Historique</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Livraisons</span>
                    </a>
                    <ul class="sub">
                        <li><a href="livdispo.html">Livraisons disponibles</a></li>
                        <li><a href="livreurs.html">Livreurs</a></li>
                        <li><a href="suivi.html">Suivi</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Paiement</span>
                    </a>
                    <ul class="sub">
                        <li><a href="commandes.html">Paiement par carte bancaire</a></li>
                        <li><a href="factures.html">Paiement par chèque</a></li>
                        <li><a href="panier.html">Paiement à la livraison</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Publicité</span>
                    </a>
                    <ul class="sub">
                        <li><a href="pub.html">Publicité</a></li>


                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-9 main-chart">
                    <!--CUSTOM CHART START -->
                    <div class="border-head">
                        <h3>Livraisons disponibles</h3>
                    </div>


                    <div class="content">

<script>
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
                text: "Count Commandes"
            },
            subtitles: [{
                text: "Number"
            }],
            data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <!-- /panel -->
            </div>
            <!--/ col-md-4 -->

            <!-- /col-lg-9 END SECTION MIDDLE -->
            <!-- **********************************************************************************************************************************************************
                RIGHT SIDEBAR CONTENT
                *********************************************************************************************************************************************************** -->
            <div class="col-lg-3 ds">
                <!--COMPLETED ACTIONS DONUTS CHART-->
                <div class="donut-main">

                    <!--NEW EARNING STATS -->

                    <!--new earning end-->
                    <!-- RECENT ACTIVITIES SECTION -->


        </section>
    </section>
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="../lib/jquery/jquery.min.js"></script>

<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="../lib/jquery.scrollTo.min.js"></script>
<script src="./lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="../lib/jquery.sparkline.js"></script>
<!--common script for all pages-->
<script src="../lib/common-scripts.js"></script>
<script type="text/javascript" src="../lib/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="../lib/gritter-conf.js"></script>
<!--script for this page-->
<script src="../lib/sparkline-chart.js"></script>
<script src="../lib/zabuto_calendar.js"></script>

<script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashio!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: 'img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
</body>

</html>