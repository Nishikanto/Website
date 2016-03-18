<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- dashboard -->

                 <li>
                      <a href="{{ URL::route('nurse_dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">

                         <a href="javascript:">
                             <i class="fa fa-tasks"></i>
                             <span>Patient Mangment</span>
                         </a>
                         <ul class="sub">
                             <li><a href="/view/patients_managment/search">Search Old Patient</a></li>
                             <li><a href="/view/patients_managment/create">Create New Patient</a></li>
                             <li><a href="/view/patients_managment/check_in">Check in Patient</a></li>
                         </ul>
                     </li>
                     

                     <li class="sub-menu">

                         <a href="javascript:">
                             <i class="fa fa-tasks"></i>
                             <span>Add Doctors/Nurse</span>
                         </a>
                         <ul class="sub">
                             <li><a href="/user/registration_form/doctors_form">Add New Doctors</a></li>
                             <li><a href="/user/registration_form/nurses_form">Add New Nurse</a></li>
                         </ul>
                     </li>

                     <!--<li class="sub-menu">

                         <a href="javascript:">
                             <i class="fa fa-tasks"></i>
                             <span>List of Doctors/Nurse</span>
                         </a>
                         <ul class="sub">
                             <li><a href="/user/doctors_list">Doctors</a></li>
                             <li><a href="/user/nurses_list">Nurses</a></li>
                         </ul>
                     </li>-->


                  <!--  
                  {{-- Task Manager --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-tasks"></i>
                          <span>Task Manager</span>
                      </a>
                  </li>

                  {{-- Carrier Accounts --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-plane"></i>
                          <span>Carrier Accounts</span>
                      </a>
                  </li>

                  {{-- Shipments --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-truck"></i>
                          <span>Shipments</span>
                      </a>
                  </li>

                  {{-- Salespersons --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-flash"></i>
                          <span>Sales persons</span>
                      </a>
                  </li>


                  {{-- Roles & Permissions --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-gears"></i>
                          <span>Roles & Permissions</span>
                      </a>
                  </li>


                  
-->








              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>