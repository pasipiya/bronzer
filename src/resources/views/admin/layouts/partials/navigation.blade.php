<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('dashboard') }}">
                <i class="text-primary fas fa-tachometer-alt"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>
      
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('inquiry') }}">
                <i class="text-primary far fa-comments"></i>
                <span class="nav-link-text">Inquiry</span>
              </a>
            </li>
          </ul>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('itinerary') }}">
                <i class="text-primary fas fa-file-invoice"></i>
                <span class="nav-link-text">Itinerary</span>
              </a>
            </li>
          </ul>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('quotation') }}">
                <i class="text-primary fas fa-business-time"></i>
                <span class="nav-link-text">Quotation</span>
              </a>
            </li>
          </ul>

          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('customers') }}">
                <i class="text-primary fas fa-users"></i>
                <span class="nav-link-text">Customers</span>
              </a>
            </li>
          </ul>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('invoices') }}">
                    <i class="text-primary fas fa-file-invoice-dollar"></i>
                    <span class="nav-link-text">Invoices</span>
                  </a>
                </li>
              </ul>

                <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('bookings') }}">
                <i class="text-primary fas fa-bookmark"></i>
                <span class="nav-link-text">Bookings</span>
              </a>
            </li>
          </ul>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('accounts') }}">
                    <i class="text-primary fas fa-money-bill-alt"></i>
                    <span class="nav-link-text">Accounts</span>
                  </a>
                </li>
              </ul>

              <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('reconciliation') }}">
                    <i class="text-primary fas fa-check"></i>
                    <span class="nav-link-text">Reconciliation</span>
                  </a>
                </li>
              </ul>

              <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('reports') }}">
                    <i class="text-primary fas fa-file-pdf"></i>
                    <span class="nav-link-text">Reports</span>
                  </a>
                </li>
              </ul>

              <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('settings') }}">
                    <i class="text-primary fas fa-cog"></i>
                    <span class="nav-link-text">Settings</span>
                  </a>
                </li>
              </ul>


          
        </div>
      </div>
    </div>
  </nav>