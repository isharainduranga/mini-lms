   <!--  BEGIN SIDEBAR  -->
   <div class="sidebar-wrapper sidebar-theme">
            
    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu">
                <a href="/home" data-active="true"  class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                   
                </a>
            
            </li>

         


            <li class="menu">
                <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        <span>Catergories</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                    <li>
                        <a href="/category">Introduction  to Biology</a>
                    </li>
                    <li>
                        <a href="#">Evolution and diversity of organisms</a>
                    </li>
                    <li>
                        <a href="#">Plant form and function</a>
                    </li>
                  
                   
                </ul>
            </li>

            <li class="menu" style="margin-top: 30px;">
                <a  href="" aria-expanded="false" class="dropdown-toggle">

                    <form action="{{ route('logout')}}" method="POST">
                        @csrf
                        <div class="">
                            <button type="submit" class="btn btn-warning btn" style="padding-left: 80px; padding-right: 80px">Logout</button>
                        </div>
                    </form>

                </a>
            </li>
            
        </ul>
        <!-- <div class="shadow-bottom"></div> -->
        
    </nav>

</div>
<!--  END SIDEBAR  -->