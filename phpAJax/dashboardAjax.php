<?php

include("../controllers/getData.php");
// include("");


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['pieChartData'])) {

        $table_name = "receipt_details";
        $column_name = "status";
        $id = 28;
        // $searchColumn = "PO_number";

        $receipt_details = StatusAndValue("receipt_details",  "status");
        // $itemMasterRequets = StatusAndValue("item_master_temp",  "itemStatus");
        // $requisition_table = StatusAndValue("requisition_table",  "status");
        // $grnStatus = StatusAndValue("grn_sub_line_status",  "status");
        





                        





            $response['receipt_details'] =$receipt_details;
            // $response['requisition_table'] = $requisition_table;
            // $response['itemrequest'] = $itemMasterRequets;
            // $response['purchaseOrder']= $purchaseOrder;
            // $response['grnStatus']= $grnStatus;



        // echo print_r($data);
        echo json_encode($response);



    }



}




?>