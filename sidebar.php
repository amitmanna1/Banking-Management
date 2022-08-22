

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="./bank_img.png" alt="Not" width="80" height="80" class="mr-4 ml-4 rounded-circle img-thumbnail shadow-sm" >
      <div class="media-body">
        <h4 class="m-0">ABCD</h4>
        <p class="font-weight-normal text-muted mb-0">Bank</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 m-3">Dashboard</p>

  <ul class="nav flex-column bg-white mt-5">
    <li class="nav-item">
     <a href="emp_dashboard.php" class="nav-link text-dark "> <!--  bg-light -->
                <i class="fa fa-th-large mr-3 mt-2 text-primary fa-fw"></i>
                home
            </a>
    </li>
    <li class="nav-item">
      <a href="add_cus.php" class="nav-link text-dark">
                <i class='bx bx-plus-circle mr-3 text-primary mt-3 fa-fw'></i>
                Add Customer
            </a>
    </li>
    <li class="nav-item">
      <a href="all_cus.php" class="nav-link text-dark">
                <i class='bx bx-group mr-3 text-primary mt-3 fa-fw' ></i>
                All Customer
            </a>
    </li>
    <li class="nav-item">
      <a href="remove_cus.php" class="nav-link text-dark">
                <i class='bx bx-minus-circle mr-3 mt-3 text-primary fa-fw'></i>
                Remove Customer
            </a>
    </li>
    <li class="nav-item">
      <a href="credit_cus.php" class="nav-link text-dark">
                <i class='bx bx-money-withdraw mr-3 mt-3 text-primary fa-fw' ></i>
                Credit Funds
            </a>
    </li>
    <li class="nav-item">
      <a href="debit_cus.php" class="nav-link text-dark">
                <i class='bx bx-money mr-3 mt-3 text-primary fa-fw' ></i>
                Debit Funds
            </a>
    </li>
    <li class="nav-item">
      <a href="transfer_cus.php" class="nav-link text-dark ">
            <i class='bx bx-transfer  mr-3 mt-3 text-primary fa-fw' ></i>          
                Transfer Funds
            </a>
    </li>
  </ul>

  
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content  p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-3 mb-4"><i class="fa fa-bars mr-0"></i><small class="text-uppercase font-weight-bold"></small></button>

  <!-- Demo content -->
  <!-- <h2 class="display-4 text-white">Bootstrap vertical nav</h2>
  <p class="lead text-white mb-0">Build a fixed sidebar using Bootstrap 4 vertical navigation and media objects.</p> 
  <div class="separator"></div>
    <div class="row text-white">
    <div class="col-lg-7">
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p> 
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
    </div>
    <div class="col-lg-5">
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
    </div>
  </div> -->


<!-- End demo content -->


