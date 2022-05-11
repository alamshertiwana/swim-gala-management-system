<?php

require_once('class-db-manager.php');
require_once("class-validation-helper.php");
require_once('gateway\class-user-gateway.php');

class View_Squad_Members_Front {

    
    function get_users($squad_id){

        $user_gateway  = new User_Gateway();
        $users         = $user_gateway->get_users_in_squad($squad_id);

        return $users;        
    }

}

?>