<?php

if(isset($dir) ||isset($url) ){
    checkVisible($url);
  }else{
    include('../../dotenv.php');
    checkVisible($url);
  }

  


  function checkVisible($url){
    if($_SESSION['user']['position_id'] != '3'){
        if($_SESSION['user']['department_id'] != '4' && $_SESSION['user']['position_id'] != '0'){
          echo '
    <script>
            console.log(document.querySelector("body"))
            document.querySelector("body").innerHTML = `
            <div class="d-flex position-fixed align-items-center justify-content-center w-100  vh-100" style=" z-index:999500">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                </p>
            </div>
        </div>
    `
    </script>
    
    ';
        exit ;
      
  }else if($_SESSION['user']['department_id'] != '4' && $_SESSION['user']['position_id'] != '2'){

    echo '
    <script>
            console.log(document.querySelector("body"))
            document.querySelector("body").innerHTML = `
            <div class="d-flex position-fixed align-items-center justify-content-center w-100  vh-100" style=" z-index:999500">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                </p>
            </div>
        </div>
    `
    </script>
    
    ';
        exit ;
      }
  }
}


?>