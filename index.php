<?php
   
    
    require_once 'model/routeoModel.php';
    require_once 'controller/routeoController.php';
    
    $routeoModel = new routeoModels();
    $routeoController = new routeoController();
    
    $link = isset($_GET['page']) ? $_GET['page'] : 'index';


    
    

    $routeoController->sessionController();
    

    $route = $routeoModel->routeoModel($link);
    

    include $route;
?>