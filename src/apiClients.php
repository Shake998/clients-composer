<?php

include 'Client.php';

class ApiClients{

    function getInfo(){
        $client = new Client();
        $sales = array();
        $sales['sales'] = array();
        
        if (isset($_GET['name'])) {
            $result = $client->getSalesByClient($_GET['name']);
        } else if (isset($_GET['date'])){
            $result = $client->getSalesByDate($_GET['date']);
        } else {
            $result = $client->getAllSales();
        }

        if($result->rowCount()){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $data = array(
                    'Name' => $row['name'],
                    'Email' => $row['email'],
                    'City' => $row['city'],
                    'Company' => $row['company'],
                    'Date' => $row['date'],
                    'Sales' => $row['sales'],
                );
                array_push($sales['sales'], $data);
            }

            http_response_code(200);
            echo json_encode($sales);
        }else{
            http_response_code(404);
            echo json_encode(array('message' => 'Element not found'));
        }
    }
}

$api = new ApiClients();
$api->getInfo();

?>