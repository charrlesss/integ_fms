<?php
  include("../../../dotenv.php");

  include("$dir/layout/header.php");
  include("$dir/admin/not-authenticated_user.php");
  include("$dir/admin/visible_user.php");

?>

<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</head>
<body>
  <div class="min-h-screen flex">
      <?php include("$dir/layout/sidebar-nav.php") ?>
      <div class="bg-indigo-50 flex-grow  ">
          <?php include("$dir/layout/header-nav.php") ?>
          <!-- content start -->
          <div class="w-full min-h-[calc(100%-80px)] bg-gray-200">
             
             <h1 class="p-5 font-bold text-2xl">Project List</h1>

                    <div class=" pr-5 text-sm uppercase  text-right">
                        <a class="bg-blue-600 shadow-2xl text-white p-3 rounded-md font-semibold" href="<?php echo "$url/admin/logistic-one/project-management/add-project.php"?>">New Project</a>
                    </div>

                <div class="relative w-full p-4">      
                        <div class="relative p-5 border-2 border-gray-400 bg-gray-100 shadow-2xl rounded-md">
                              <table id="created-req-table" class=" text-xs text-left p-2">
                                        <thead>
                                            <tr class="bg-slate-300">
                                                <th>No.</th>
                                                <th>Project Name</th>
                                                <th>Started Date</th>
                                                <th>Ended Date</th>
                                                <th>Location</th>
                                                <th>Estimated Cost</th>
                                                <th>Status</th>
                                                <th>Time</th>
                                                <th>Created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-body" class="overflow-x-scroll ">
                                            <?php

                                            include("$dir/admin/logistic-one/project-management/condbproject.php");


                                             //Check connection
                                             if($connection -> connect_error){
                                                die("Connection failed:" . $connection -> error);
                                             }

                                             // read all row form database table
                                             $sql = "SELECT * FROM projectlist";
                                             $result = $connection->query($sql);
                                            

                                             if(!$result){
                                                die("Invalid query:" . $connection->error);
                                             }
                                             // read data of each row
                                             while($row = $result->fetch_assoc()){
                                                echo "
                                                <tr>
                                                <td class='text-center'>$row[id]</td>
                                                <td>$row[subject]</td>
                                                <td>$row[Starteddate]</td>
                                                <td>$row[targetdate]</td>
                                                <td>$row[stage]</td>
                                                <td>$row[budget]</td>
                                                <td>$row[status]</td>
                                                <td>$row[time]</td>
                                                <td>$row[created_at]</td>
                                                <td>
                                                    <div class='flex space-x-2 text-center font-semibold'>
                                                        <div class='p-2 pl-2 pr-2 border-2 border-gray-300 bg-purple-100 rounded-md'>
                                                            <button
                                                            type='button'
                                                            data-te-toggle='modal'
                                                            data-te-target='#exampleModalLg'
                                                            data-te-ripple-init
                                                            data-te-ripple-color='light'>
                                                            View
                                                            </button>

                                                            <div
                                                                data-te-modal-init
                                                                class='fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none'
                                                                id='exampleModalLg'
                                                                tabindex='-1'
                                                                aria-labelledby='exampleModalLgLabel'
                                                                aria-modal='true'
                                                                role='dialog'>
                                                            <div
                                                              data-te-modal-dialog-ref
                                                              class='pointer-events-none rounded-md relative bg-slate-100 w-auto translate-y-[-50px] opacity-0 transition-all duration-300 
                                                                      ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[892px]:max-w-[700px]'>
                                                              <div
                                                                class='relative  w-full  rounded-md border-none 
                                                                        bg-white bg-clip-padding text-current shadow-lg outline-none '>
                                                                <div
                                                                  class='flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 
                                                                          border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50'>
                                                                  <h5
                                                                    class='text-xl uppercase font-medium leading-normal text-neutral-800 '
                                                                    id='exampleModalLgLabel'>
                                                                    Project Details
                                                                  </h5>
                                                                  <button
                                                                    type='button'
                                                                    class='box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none'
                                                                    data-te-modal-dismiss
                                                                    aria-label='Close'>
                                                                    <svg
                                                                      xmlns='http://www.w3.org/2000/svg'
                                                                      fill='none'
                                                                      viewBox='0 0 24 24'
                                                                      stroke-width='1.5'
                                                                      stroke='currentColor'
                                                                      class='h-6 w-6'>
                                                                      <path
                                                                        stroke-linecap='round'
                                                                        stroke-linejoin='round'
                                                                        d='M6 18L18 6M6 6l12 12' />
                                                                    </svg>
                                                                  </button>
                                                                </div>
                      
                      
                                                                <div class=' text-left p-5'>
                                                                  <div class=' rounded-md  p-5 bg-purple-300'>
                      
                                                                    <div class='space-y-5'>
                      
                                                                      <div class='grid grid-cols-2 space-x-4'>
                                                                        <div class='relative space-y-2'>
                                                                          <h2 class='font-bold text-md uppercase'>Project Name</h2>
                                                                            <h1 class='font-semibold bg-slate-200 rounded-md text-sm p-1 pl-2'>$row[subject]</h2>
                                                                        </div>
                                                                        <div class='relative space-y-2'>
                                                                          <h2 class='font-bold text-md uppercase'>Location</h2>
                                                                            <h2 class='font-semibold bg-slate-200 rounded-md text-sm p-1 pl-2'>$row[stage]</h2>
                                                                        </div>
                                                                      </div>
                      
                                                                      <div class='grid grid-cols-4 space-x-4'>
                                                                        <div class='relative space-y-2'>
                                                                          <h2 class='font-bold text-md uppercase'>Started Date</h2>
                                                                            <h1 class='font-semibold bg-slate-200 rounded-md text-sm p-1 pl-2'>$row[Starteddate]</h2>
                                                                        </div>
                                                                        <div class='relative space-y-2'>
                                                                          <h2 class='font-bold text-md uppercase'>Ended Date</h2>
                                                                            <h2 class='font-semibold bg-slate-200 rounded-md text-sm p-1 pl-2'>$row[targetdate]</h2>
                                                                        </div>
                                                                        <div class='relative space-y-2'>
                                                                          <h2 class='font-bold text-md uppercase'>Estimated Cost</h2>
                                                                            <h2 class='font-semibold bg-slate-200 rounded-md text-sm p-1 pl-2'>$row[budget]</h2>
                                                                        </div>
                                                                        <div class='relative space-y-2'>
                                                                          <h2 class='font-bold text-md uppercase'>Created Date</h2>
                                                                            <h2 class='font-semibold bg-slate-200 rounded-md text-sm p-1 pl-2'>$row[created_at]</h2>
                                                                        </div>
                                                                      </div>

                                                                        <div class='grid grid-cols-2 pl-3 space-x-4'>
                                                                            <div class='relative'>
                                                                                <h2 class='font-bold text-md uppercase'>Description</h2>
                                                                                    <textarea class='font-semibold w-full h-20 bg-slate-200 rounded-md text-sm p-1 pl-2'>$row[description]</textarea>
                                                                            </div>
                                                                            <div class='relative space-y-2 pl-10 pr-20'>
                                                                                <h2 class='font-bold text-lg uppercase'>Status</h2>
                                                                                    <h1 class='font-semibold text-center bg-slate-100 rounded-md text-sm p-1 pl-2'>$row[status]</h1>
                                                                            </div>
                                                                        </div>
                        
                                                                    </div>
                      
                      
                                                                  </div>
                                                                </div>
                      
                      
                                                              </div>
                                                            </div>
                                                          </div>


                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                                ";
                                             }

                                            ?>
                                        </tbody>

                                </table>
                            </div>
                        </div>
          
              </div>
              <!-- content end -->
      </div>
  </div>

  <script>
       $('#created-req-table').DataTable();
  </script>
  
<?php
 include("$dir/layout/header.php")
?>