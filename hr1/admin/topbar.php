<style>
	/* .logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
} */
#header__{
  position: relative;
display: flex; 
padding-top: 0.5rem;
padding-bottom: 0.5rem; 
padding-left: 0.5rem; 
padding-right: 2.5rem; 
background-color: #ffffff; 
justify-content:end;
width: 100%; 
height: auto; 
border-bottom-width: 1px; 
box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); 
}
#header__ div{
  display: flex; 
align-items: center; 
column-gap: 1.25rem; 


}

#header__ div{
  position:relative;
}

</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Alata&family=Anek+Gurmukhi:wght@100;200;400&family=Barlow:ital,wght@1,200&family=Bebas+Neue&family=Pathway+Gothic+One&family=Plus+Jakarta+Sans:wght@200&family=Roboto&display=swap');

    .button__ {
    color: white;
    display: inline-block;
    position: relative; 
    padding: 2px 5px; 
    cursor: pointer; 
    }
    .button__badge {
    background-color: #fa3e3e;
    border-radius: 2px;
    color: white;
    padding: 1px 6px;
    font-size: 10px;
    position: absolute;
    top: -5px;
    left: 50%;
    border-radius:100%;

    }
    .button__ svg{
      color: #6366F1; 
      width: 1.25rem; 
      height: 1.25rem; 
      cursor: pointer; 
    }
    .font-font{
      font-family: 'Roboto', sans-serif;
    }
</style>

<style>

  #personal-btn{
    position: relative; 
cursor: pointer; 
  }

  #personal-btn img{
  width: 2.5rem; 
height: 2.5rem; 
border-radius: 9999px; 
cursor: pointer; 
}
</style>

<style>
 
  #profile-dropdown ul{
    position: absolute;  
    width: auto;
    height:auto;
    background-color: #ffffff; 
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); 
    left:-200px;
    top:10px;
    list-style: none;
    z-index: 1000;
    text-align:center;
    margin:0 !important;
    padding:0 !important;


  }
  #profile-dropdown ul li button{
    width: 100%; 
    list-style: none;
    width: 100%;
    border:none;
   
  }
  #profile-dropdown ul li button:hover {
    background-color: #F3F4F6; 
  }

  #profile-dropdown ul li button a{
  display: flex; 
  font-size: 0.875rem;
  line-height: 1.25rem; 
  font-weight: 600; 
  column-gap: 0.5rem; 
  text-align:left;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<header id="header__"  class="shadow-lg flex justify-between py-2 pl-2 pr-10 w-full h-auto  bg-white border-b ">
    
    <div class="flex gap-x-5 items-center ">
        <div class="relative">
                <div class="button__  cursor-pointer">
                    <svg id="notification" class=" cursor-pointer h-5 w-5 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />  <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                    <span class="button__badge">42</span>
                </div>
               
        </div>
       <div id="personal-btn" class="z-[100] relative cursor-pointer" >
        
            <img src="<?php echo "/fms/assets/profile/".$_SESSION['user']['profile']  ?>" alt="logo" class="cursor-pointer w-10 h-10 rounded-full">
             <div id="profile-dropdown">
                    <ul class="w-[150px] h-auto  ">
                        <li>
                             <button class="py-2 hover:bg-gray-100 w-full pl-5  ">
                                    <a href="<?php echo "$url/admin/administrative/personal/profile.php" ?>" class="flex gap-x-2 text-sm font-semibold">
                                        <svg width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        Profile  
                                    </a>
                             </button>   
                        </li>
                        <li >
                             <button class="py-2 hover:bg-gray-100  w-full pl-5 ">
                                    <a href="<?php echo "$url/admin/administrative/personal/setting.php" ?>" class="flex gap-x-2 text-sm font-semibold">
                                    <svg class="h-5 w-5 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />  <circle cx="12" cy="12" r="3" /></svg>
                                        Settings
                                    </a>
                             </button>   
                        </li>
                        <li >
                             <button id='logout-button' class="py-2 hover:bg-gray-100 w-full pl-5 flex gap-x-2 text-sm font-semibold">
                                    <svg class="h-5 w-5 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M7 6a7.75 7.75 0 1 0 10 0" />  <line x1="12" y1="4" x2="12" y2="12" /></svg>
                                    Logout
                             </button>   
                        </li>
                    </ul>
                </div>
        </div> 
    </div>
</header>


<script>
         $("#profile-dropdown").hide()
  $('body').click(function () {
        $("#notification-dropdown").hide()
         $("#profile-dropdown").hide()
    });

</script>


<script>
    $("#notification").click(function(e){
        e.stopPropagation();
        $("#notification-dropdown").toggle()
        $("#profile-dropdown").hide()
    })
    document.querySelectorAll("#notif-message").forEach((element,i) => {
       
        element.addEventListener("click" ,function(e){
                document.querySelectorAll("#notif-message")[i].children[1].classList.toggle('hidden')
        })
    });
    $("#personal-btn").click(function(e){
        e.stopPropagation()
        $("#profile-dropdown").toggle()
        $("#notification-dropdown").hide()
    })
    $("#close-notifcation-mobile").click(function(e){
        e.stopPropagation()
        $("#notification-dropdown").hide()
    })
</script>

<script>
     $("#logout-button").click(function(e){
        e.stopPropagation()
        $.ajax({
            url:"<?php echo "../controller/integ/admin-shared.php" ?>",
            type:"GET",
            success:function(res){
                const data = JSON.parse(res)
                return Swal.fire({
                    icon: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 1500
                  }).then(()=>{
                      window.location.href = "/fms/admin/" 
                })
            }
        })
    })
</script>