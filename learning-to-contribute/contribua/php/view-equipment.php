<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
  <?php include('header.php');
  print_r($_POST);
		if(isset($_POST['addPost']) && $_POST['addPost']==1){
		$addName = $_POST['name'];
		$addStatus = 2;
		$addLocation = $_POST['location'];
		$addBarcode = $_POST['barcode'];
		
		insert("equipment", "name, status, location, barcode", "'$addName', '$addStatus', '$addLocation','$addBarcode'");
	}
	
		if(isset($_POST['edit-db']) && $_POST['edit-db']==1){
		$editID = $_POST['id'];
		$editName = $_POST['name'];
		$editStatus = $_POST['status'];
		$editLocation = $_POST['location'];
		if(isset($_POST['person'])) $editPerson = $_POST['person'];
		
		if(isset($_POST['person'])){
			update("equipment", "name='$editName', status='$editStatus', location='$editLocation', person='$editPerson'", "WHERE id='$editID'");
		}else{
			update("equipment", "name='$editName', status='$editStatus', location='$editLocation'", "WHERE id='$editID'");
		}
	}
	
	if(isset($_POST['return-db']) && $_POST['return-db']==1){
		$returnBarcode = $_POST['barcode'];
		$returnStatus = 2;

		update("equipment", "status='$returnStatus', person=''", "WHERE barcode='$returnBarcode'");
	}
	
	if(isset($_POST['lend-db']) && $_POST['lend-db']==1){
		$lendPerson = $_POST['person'];
		$lendBarcode = $_POST['barcode'];
		$lendStatus = 1;

		update("equipment", "status='$lendStatus', person='$lendPerson'", "WHERE barcode='$lendBarcode'");
	}
		
  
		include ('sidebar.php');
		$equipments = select("*", "equipment e", "order by id asc");
  ?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-table"></i> Equipment List</h3>
		<button id="printtable" class="btn btn-primary">Print this page</button>
		<button id="downloadtable" class="btn btn-theme04">Download this page</button>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Person lent to</th>
                    <th>Location</th>
					<th>Barcode</th>
					<th>Edit</th>
                  </tr>
                </thead>
                <tbody>
				 <?php
                    if(!empty($equipments)) {
                    for($i = 0; $i<count($equipments); $i++){
						
						$no = $i + 1;
						$name = $equipments[$i]['name'];
						$status = $equipments[$i]['status'];
						$person = $equipments[$i]['person'];
						$location = $equipments[$i]['location'];
						$barcode = $equipments[$i]['barcode'];
							
						if($status == 1) 
							$statusword = "Lent";
						if($status == 2)
							$statusword = "Not Lent";
					?>
					<tr class="gradeC">
					<td><?php echo $no; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $statusword; ?></td>
                    <td><?php echo $person; ?></td>
                    <td><?php echo $location; ?></td>
					<td><?php echo $barcode; ?></td>
					<td><form class="form-horizontal style-form" method="post" name="editForm" action="edit-equipment.php">
					<input type="hidden" class="form-control" name="barcode" id="barcode" value=<?php echo $barcode; ?>>
					<button type="submit" class="btn btn-primary">Edit</button>
					</form>
					</td>
					</tr>
					<?php 
						}
					}
					?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="barcode-generator/jquery/jquery-barcode.js"></script>
<script type="text/javascript">
/*$("#barcode-generator").barcode(
"<?php echo $barcode; ?>",// Value barcode (dependent on the type of barcode)
"ean8" // type (string)
);*/
</script>
  <!--script for this page-->
  <script type="text/javascript">
   function printData()
   {
	   var divToPrint=document.getElementById("hidden-table-info");
	   newWin=window.open("_blank");
	   newWin.document.write(divToPrint.outerHTML);
	   newWin.print();
	   newWin.close();
   }
   
   $('#printtable').on('click',function(){
	printData();
   });

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";


      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [0, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
     
    });
  </script>
</body>

</html>
