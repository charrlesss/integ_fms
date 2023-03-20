<?php
if(isset($dir) ||isset($url) ){
    checkVisible();
  }else{
    include('../../dotenv.php');
    checkVisible();
  }
  function checkVisible(){
    if($_SESSION['user']['position_id'] != '3'){
        if($_SESSION['user']['department_id'] != '3' && $_SESSION['user']['department_id'] != '6' && $_SESSION['user']['position_id'] != '0'){
        echo '
                <div class="d-flex align-items-center justify-content-center vh-100">
                    <div class="text-center">
                        <h1 class="display-1 fw-bold">404</h1>
                        <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                        <p class="lead">
                            The page you’re looking for doesn’t exist.
                          </p>
                    </div>
                </div>
       ';
        exit ;
      
  }else if($_SESSION['user']['department_id'] != '3' && $_SESSION['user']['department_id'] != '6' && $_SESSION['user']['position_id'] != '2'){

        echo '    
         <div class="d-fixed align-items-center justify-content-center vh-100">
        <div class="text-center">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
            <p class="lead">
                The page you’re looking for doesn’t exist.
              </p>
        </div>
    </div>
    
    ';
        exit ;
      }
  }
}




?>