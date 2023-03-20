<?php
  include('dotenv.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frieght</title>
    <link rel="stylesheet" href="">
    <link rel="icon" href="<?php echo "$url/assets/img/logo.png" ?>" sizes="16x16">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

     <script>
        tailwind.config = {
          darkMode: "class",
          theme: {
            fontFamily: {
              sans: ["Roboto", "sans-serif"],
              body: ["Roboto", "sans-serif"],
              mono: ["ui-monospace", "monospace"],
            },
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          },
          corePlugins: {
            preflight: false,
          }
        }
      </script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Anek+Gurmukhi:wght@100;200;400&family=Bebas+Neue&family=Pathway+Gothic+One&family=Plus+Jakarta+Sans:wght@200&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <style>
      .transparent {
  background-color: rgba(255,255,255,0.5);
}

    </style>
</head>
    <body class>
 <nav id="header" class="z-[100] bg-gradient-to-r from-[#8E629D] to-[#d489f0] fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <p class='text-white no-underline hover:no-underline font-bold text-xl lg:text-2xl'>Freight</p>
        </div>
        <div class="block lg:hidden pr-4">
          <!-- <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button> -->
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <!--  <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 lg:text-white font-bold no-underline md:hover:text-gray-100 hover:text-underline py-2 px-4" href="<?php echo $url?>">Home</a>
            </li>
            <li class="mr-3">
              <a class="inline-block lg:text-white no-underline md:hover:text-gray-100 hover:text-gray-400 hover:text-underline py-2 px-4" href="<?php echo $url."/visitor.php"?>">Visitor</a>
            </li>
            <li class="mr-3">
              <a class="inline-block lg:text-white no-underline md:hover:text-gray-100 hover:text-gray-400 hover:text-underline py-2 px-4" href="<?php echo $url."/admin"?>">Employeer</a>
            </li>
            <li class="mr-3">
              <a  class="inline-block lg:text-white no-underline md:hover:text-gray-100 hover:text-gray-400 hover:text-underline py-2 px-4"  href="<?php echo $url."/contact-us.php"?>">Contact us</a>
            </li>
          </ul>-->
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav> 
        <div class="lg:flex ">
            <div class="lg:w-1/2 xl:max-w-screen-sm">
                <div class="py-12 bg-indigo-100 lg:bg-white flex justify-center lg:justify-start lg:px-12">
                    <div class="cursor-pointer flex items-center mt-16">
                        <div>
                          <img src="<?php  echo "$url/assets/img/logo.png" ?>" alt="logo" class="cursor-pointer w-16 h-16 rounded-full">
                        </div>
                        <div class="text-2xl text-indigo-800 tracking-wide ml-2 font-semibold">FREIGHT</div>
                    </div>
                </div>
                <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                    <h2 class=" text-4xl text-indigo-900 font-display font-semibold text-left xl:text-5xl
                    xl:text-bold">Log in as Employee</h2>
                    <div class="mt-10">
                        <form id="login-admin-form">
                          <div >
                            </div>
                              <div class="relative mb-3">
                                  <input type="text" id="employee_id" name="employee_id" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                  <label for="employee_id"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Employee ID</label>
                                </div>
                            <div class="mt-4">
                                <div class="flex justify-end items-center">
                                    <div>
                                        <a class="text-xs font-display font-semibold text-indigo-600 hover:text-indigo-800
                                        cursor-pointer">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                                <div class="relative">
                                      <input type="password" id="password" name="password" required class="focus:shadow-md shadow-sm block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-sm border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                      <label for="password"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                                </div>                           
                            </div>
                            <div class="mt-10">
                                <button 
                                data-te-ripple-init
                                data-te-ripple-color="light"
                                class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                                shadow-lg">
                                    Log In
                                </button>
                            </div>
                        </form>
                            <!--<div class="mt-3 text-center">
                                <a
                                href=""
                                class="bg-indigo-400 text-gray-100 p-3 rounded-2xl tracking-wide
                                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-500
                                shadow-lg">
                                    Login Customer
                                </a>
                            </div> -->
                      
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex items-center justify-center bg-indigo-100 flex-1 h-screen">
                <div class="max-w-xs transform duration-200 hover:scale-110 cursor-pointer">
                    <svg class="w-5/6 mx-auto" xmlns="http://www.w3.org/2000/svg" id="f080dbb7-9b2b-439b-a118-60b91c514f72" data-name="Layer 1" viewBox="0 0 528.71721 699.76785">
                        <title>Login</title>
                        <rect y="17.06342" width="444" height="657" fill="#535461"/>
                        <polygon points="323 691.063 0 674.063 0 17.063 323 0.063 323 691.063" fill="#7f9cf5"/>
                        <circle cx="296" cy="377.06342" r="4" fill="#535461"/>
                        <polygon points="296 377.66 298.773 382.463 301.545 387.265 296 387.265 290.455 387.265 293.227 382.463 296 377.66" fill="#535461"/>
                        <polygon points="337 691.063 317.217 691 318 0.063 337 0.063 337 691.063" fill="#7f9cf5"/>
                        <g opacity="0.1">
                        <polygon points="337.217 691 317.217 691 318.217 0 337.217 0 337.217 691" fill="#fff"/>
                        </g>
                        <circle cx="296" cy="348.06342" r="13" opacity="0.1"/>
                        <circle cx="296" cy="346.06342" r="13" fill="#535461"/>
                        <line x1="52.81943" y1="16.10799" x2="52.81943" y2="677.15616" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1"/>
                        <line x1="109.81943" y1="12.10799" x2="109.81943" y2="679.15616" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1"/>
                        <line x1="166.81943" y1="9.10799" x2="166.81943" y2="683" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1"/>
                        <line x1="223.81943" y1="6.10799" x2="223.81943" y2="687.15616" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1"/>
                        <line x1="280.81943" y1="3.10799" x2="280.81943" y2="688" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.1"/>
                        <ellipse cx="463.21721" cy="95.32341" rx="39.5" ry="37" fill="#2f2e41"/>
                        <path d="M683.8586,425.93948l-10,14s-48,10-30,25,44-14,44-14l14-18Z" transform="translate(-335.6414 -100.11607)" fill="#ffb8b8"/>
                        <path d="M735.8586,266.93948s-13,0-16,18-6,78-6,78-42,55-35,62,15,20,20,18,48-61,48-61Z" transform="translate(-335.6414 -100.11607)" fill="#7f9cf5"/>
                        <path d="M735.8586,266.93948s-13,0-16,18-6,78-6,78-42,55-35,62,15,20,20,18,48-61,48-61Z" transform="translate(-335.6414 -100.11607)" opacity="0.1"/>
                        <path d="M775.8586,215.93948s-1,39-13,41-8,15-8,15,39,23,65,0l5-12s-18-13-10-31Z" transform="translate(-335.6414 -100.11607)" fill="#ffb8b8"/>
                        <path d="M708.8586,455.93948s-59,110-37,144,55,104,60,104,33-14,31-23-32-76-40-82-4-22-3-23,34-54,34-54-1,84,3,97-1,106,4,110,28,11,32,5,16-97,8-118l15-144Z" transform="translate(-335.6414 -100.11607)" fill="#2f2e41"/>
                        <path d="M762.8586,722.93948l-25,46s-36,26-11,30,40-6,40-6l22-16v-46Z" transform="translate(-335.6414 -100.11607)" fill="#2f2e41"/>
                        <path d="M728.8586,696.93948l13,31s5,13,0,16-19,21-10,23a29.29979,29.29979,0,0,0,5.49538.5463,55.56592,55.56592,0,0,0,40.39768-16.43936l8.10694-8.10694s-27.77007-63.94827-27.385-63.47414S728.8586,696.93948,728.8586,696.93948Z" transform="translate(-335.6414 -100.11607)" fill="#2f2e41"/>
                        <circle cx="465.21721" cy="105.82341" r="34" fill="#ffb8b8"/>
                        <path d="M820.3586,253.43948l-10.5,10.5s-32,12-47,0c0,0,5.5-11.5,5.5-10.5s-43.5,7.5-47.5,25.5,3,49,3,49-28,132-17,135,114,28,113,9,8-97,8-97l35-67s-5-22-17-29S820.3586,253.43948,820.3586,253.43948Z" transform="translate(-335.6414 -100.11607)" fill="#7f9cf5"/>
                        <path d="M775.8586,448.93948l-13,8s-50,34-24,40,41-24,41-24l10-12Z" transform="translate(-335.6414 -100.11607)" fill="#ffb8b8"/>
                        <path d="M849.8586,301.93948l9,9s6,84-6,101-67,63-70,60-22-18-18-20,57.18287-57.56942,57.18287-57.56942l-4.18287-77.43058Z" transform="translate(-335.6414 -100.11607)" opacity="0.1"/>
                        <path d="M853.8586,298.93948l9,9s6,84-6,101-67,63-70,60-22-18-18-20,57.18287-57.56942,57.18287-57.56942l-4.18287-77.43058Z" transform="translate(-335.6414 -100.11607)" fill="#7f9cf5"/>
                        <path d="M786.797,157.64461s-11.5575-4.20273-27.31774,4.72807l8.40546,2.10136s-12.60819,1.05068-14.18421,17.8616h5.77875s-3.67739,14.70955,0,18.91228l2.364-4.4654,6.82943,13.65887,1.576-6.82944,3.15205,1.05069,2.10137-11.03217s5.25341,7.88012,9.45614,8.40546V195.2065s11.5575,13.13352,15.23489,12.60818l-5.25341-7.35477,7.35477,1.576-3.152-5.25341,18.91228,5.25341-4.20273-5.25341,13.13352,4.20273,6.3041,2.6267s8.9308-20.4883-3.67739-34.67251S798.61712,151.60318,786.797,157.64461Z" transform="translate(-335.6414 -100.11607)" fill="#2f2e41"/>
                    </svg>
                </div>
              <div class="relative space-y-2 text-center">
                 <h2 class=" mb-3 text-2xl text-indigo-900 font-display font-semibold text-center xl:text-2xl
                      xl:text-bold">Customer</h2>
                <!-- Button trigger modal -->
                <div>
                <button
                  type="button"
                  class="inline-block rounded bg-primary px-10 pt-2.5 pb-2 text-s font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                  data-te-toggle="modal"
                  data-te-target="#exampleModal"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  Login
                </button>

                <!-- Modal Login -->
                <div
                  data-te-modal-init
                  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div
                    data-te-modal-dialog-ref
                    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                    <div
                      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                      <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <h5
                          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                          id="exampleModalLabel">
                          Login As Customer
                        </h5>
                        <button
                          type="button"
                          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                          data-te-modal-dismiss
                          aria-label="Close">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6">
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                      <div class="relative flex-auto p-4 outline-none" data-te-modal-body-ref>
                                <form>
                                  <!-- Email input -->
                                  <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input
                                      type="text"
                                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                      id="exampleFormControlInput2"
                                      placeholder="Email address" />
                                    <label
                                      for="exampleFormControlInput2"
                                      class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                      >Email address
                                    </label>
                                  </div>

                                  <!-- Password input -->
                                  <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input
                                      type="password"
                                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                      id="exampleFormControlInput22"
                                      placeholder="Password" />
                                    <label
                                      for="exampleFormControlInput22"
                                      class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                      >Password
                                    </label>
                                  </div>

                                  <div class="mb-6 flex items-center justify-between">
                                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                      <input
                                        class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary dark:checked:border-primary checked:bg-primary dark:checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                                        type="checkbox"
                                        value=""
                                        id="exampleCheck2" />
                                      <label
                                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                                        for="exampleCheck2">
                                        Remember me
                                      </label>
                                    </div>
                                    <a href="#!">Forgot password?</a>
                                  </div>

                                  <div class="text-center ">
                                    <button
                                      type="button"
                                      class="inline-block  rounded bg-primary px-7 pt-3 pb-2.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                      data-te-ripple-init
                                      data-te-ripple-color="light">
                                      Login
                                    </button>
                                    <p class="mt-2 mb-0 pt-1 text-sm font-semibold">
                                      Don't have an account?
                                      <a
                                        href="#!"
                                        class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                                        >Register</a
                                      >
                                    </p>
                                  </div>
                                </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div>
               <button
                  type="button"
                  class="inline-block rounded bg-primary px-10 pt-2.5 pb-2 text-s font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                  data-te-toggle="modal"
                  data-te-target="#exampleModals"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  Sign up
                </button>

                <!-- Modal Login -->
                <div
                  data-te-modal-init
                  class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                  id="exampleModals"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div
                    data-te-modal-dialog-ref
                    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                    <div
                      class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                      <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <h5
                          class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                          id="exampleModalLabel">
                          Sign Up As Customer
                        </h5>
                        <button
                          type="button"
                          class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                          data-te-modal-dismiss
                          aria-label="Close">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6">
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>

                      <div class="relative flex-auto p-4 outline-none" data-te-modal-body-ref>
                                <form class="p-3">
                                  <div class="flex space-x-20">
                                    <!-- First Name input -->
                                    <div class="relative mb-6" data-te-input-wrapper-init>
                                      <input
                                        type="text"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="exampleFormControlInput2"
                                        placeholder="First Name" />
                                      <label
                                        for="exampleFormControlInput2"
                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                        >First Name
                                      </label>
                                    </div>

                                    <!-- Last Name input -->
                                    <div class="relative mb-6" data-te-input-wrapper-init>
                                      <input
                                        type="text"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        id="exampleFormControlInput2"
                                        placeholder="Last Name" />
                                      <label
                                        for="exampleFormControlInput2"
                                        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                        >Last Name
                                      </label>
                                    </div>
                                  </div>

                                  <!-- Gender input -->
                                  <div class="flex  space-x-3 p-2 pb-4">
                                    <h2 class="text-m pr-7">Gender</h2>
                                      <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                        <input
                                          class="relative float-left mt-0.5 mr-1 -ml-[1.5rem] h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 dark:border-neutral-600 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary dark:checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary dark:checked:after:border-primary dark:checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary dark:checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
                                          type="radio"
                                          name="inlineRadioOptions"
                                          id="inlineRadio1"
                                          value="option1" />
                                        <label
                                          class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                          for="inlineRadio1"
                                          >Male</label
                                        >
                                      </div>
                                      <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                                        <input
                                          class="relative float-left mt-0.5 mr-1 -ml-[1.5rem] h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 dark:border-neutral-600 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary dark:checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary dark:checked:after:border-primary dark:checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary dark:checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s]"
                                          type="radio"
                                          name="inlineRadioOptions"
                                          id="inlineRadio2"
                                          value="option2" />
                                        <label
                                          class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                          for="inlineRadio2"
                                          >Female</label
                                        >
                                      </div>
                                    </div>

                                  <!-- Email input -->
                                  <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input
                                      type="email"
                                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                      id="exampleFormControlInput2"
                                      placeholder="Email address" />
                                    <label
                                      for="exampleFormControlInput2"
                                      class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                      >Email
                                    </label>
                                  </div>

                                  <!-- Address input -->
                                  <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input
                                      type="text"
                                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                      id="exampleFormControlInput2"
                                      placeholder="Address" />
                                    <label
                                      for="exampleFormControlInput2"
                                      class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                      >Address
                                    </label>
                                  </div>

                                  <div class="flex space-x-5 px-5">
                                  <!-- Password input -->
                                  <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input
                                      type="password"
                                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                      id="exampleFormControlInput22"
                                      placeholder="Password" />
                                    <label
                                      for="exampleFormControlInput22"
                                      class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                      >Password
                                    </label>
                                  </div>
                                  <!-- Password input -->
                                  <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input
                                      type="password"
                                      class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                      id="exampleFormControlInput22"
                                      placeholder="Confirm Password" />
                                    <label
                                      for="exampleFormControlInput22"
                                      class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
                                      >Confirm Password
                                    </label>
                                  </div>
                                  </div>
                                  <div class="text-center ">
                                    <button
                                      type="button"
                                      class="inline-block  rounded bg-primary px-7 pt-3 pb-2.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                      data-te-ripple-init
                                      data-te-ripple-color="light">
                                      Sign Up
                                    </button>
                                    <p class="mt-2 mb-0 pt-1 text-sm font-semibold">
                                      Do you want login?
                                      <a
                                        href="#!"
                                        class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                                        >Login</a
                                      >
                                    </p>
                                  </div>
                                </form>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              </div>







            </div>
        </div>

    
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    </body>


    <script>
      $("#login-admin-form").submit(function(e){
        e.preventDefault()
        const formData = new FormData(e.currentTarget)
        $.ajax({
          type:"POST",
          processData: false,
          contentType: false,
          url:"<?php  echo $url."/controller/integ/admin-shared.php/loginAdmin"?>",
          data:formData,
          success:function(res){
            const data = JSON.parse(res)
                 if(data.success){
                   return Swal.fire({
                    icon: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 1500
                  }).then(()=>{
                    window.location.href = "<?php echo $url."/admin/human-resource-one/" ?>"
                  })
                 }
              Swal.fire({
                icon: 'error',
                title: data.message,
                showConfirmButton: false,
                timer: 1500
              })
          }
        })
      })
    </script>



    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        const header = document.getElementById("header");

        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add('shadow-xl')
        } else {
          header.classList.remove('shadow-xl')
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;

      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>




    <?php
    include("$dir/layout/footer.php");
?>


