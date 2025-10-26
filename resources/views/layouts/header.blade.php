<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
  <div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ph ph-list"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ph ph-list"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0 trig-drp-search"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph ph-magnifying-glass"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3 py-2">
          <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . ." />
        </form>
      </div>
    </li>
  </ul>
  </div>
   <!-- [Mobile Media Block end] -->
  <div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph ph-sun-dim"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i class="ph ph-moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i class="ph ph-sun"></i>
          <span>Light</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <i class="ph ph-cpu"></i>
          <span>Default</span>
        </a>
      </div>
    </li>


    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ph ph-bell"></i>
        <span class="badge bg-success pc-h-badge">5</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Notifications</h5>
          <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
        </div>
        <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <p class="text-span">Today</p>
          <div class="card bg-transparent mb-2 border-0">
            <div class="card-body p-3 rounded" style="background: rgba(var(--bs-light-rgb), 0.3); transition: all 0.2s ease;" onmouseover="this.style.background='rgba(var(--bs-primary-rgb), 0.05)'" onmouseout="this.style.background='rgba(var(--bs-light-rgb), 0.3)'">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="ph ph-credit-card text-success" style="font-size: 16px;"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">2 min ago</span>
                  <h5 class="text-body mb-2">Payment Received</h5>
                  <p class="mb-0">$2,499.00 payment received for Pro Plan subscription from Acme Corp</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent mb-2 border-0">
            <div class="card-body p-3 rounded" style="background: rgba(var(--bs-light-rgb), 0.3); transition: all 0.2s ease;" onmouseover="this.style.background='rgba(var(--bs-primary-rgb), 0.05)'" onmouseout="this.style.background='rgba(var(--bs-light-rgb), 0.3)'">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="ph ph-users text-primary" style="font-size: 16px;"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">1 hour ago</span>
                  <h5 class="text-body mb-2">New Team Member</h5>
                  <p class="mb-0">Sarah Johnson joined your workspace and was assigned to the Marketing team</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent mb-2 border-0">
            <div class="card-body p-3 rounded" style="background: rgba(var(--bs-light-rgb), 0.3); transition: all 0.2s ease;" onmouseover="this.style.background='rgba(var(--bs-primary-rgb), 0.05)'" onmouseout="this.style.background='rgba(var(--bs-light-rgb), 0.3)'">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="ph ph-chart-line text-warning" style="font-size: 16px;"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">3 hours ago</span>
                  <h5 class="text-body mb-2">Monthly Report Ready</h5>
                  <p class="mb-0">Your January 2025 analytics report is ready. Revenue up 24% vs last month</p>
                </div>
              </div>
            </div>
          </div>
          <p class="text-span">Yesterday</p>
          <div class="card bg-transparent mb-2 border-0">
            <div class="card-body p-3 rounded" style="background: rgba(var(--bs-light-rgb), 0.3); transition: all 0.2s ease;" onmouseover="this.style.background='rgba(var(--bs-primary-rgb), 0.05)'" onmouseout="this.style.background='rgba(var(--bs-light-rgb), 0.3)'">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="ph ph-shield-check text-danger" style="font-size: 16px;"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">18 hours ago</span>
                  <h5 class="text-body mb-2">Security Alert</h5>
                  <p class="mb-2">New login detected from San Francisco, CA. If this wasn't you, please secure your account</p>
                  <button class="btn btn-sm btn-outline-secondary me-2">Ignore</button>
                  <button class="btn btn-sm btn-danger">Secure Account</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent mb-2 border-0">
            <div class="card-body p-3 rounded" style="background: rgba(var(--bs-light-rgb), 0.3); transition: all 0.2s ease;" onmouseover="this.style.background='rgba(var(--bs-primary-rgb), 0.05)'" onmouseout="this.style.background='rgba(var(--bs-light-rgb), 0.3)'">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                    <i class="ph ph-rocket text-info" style="font-size: 16px;"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">1 day ago</span>
                  <h5 class="text-body mb-2">Feature Update</h5>
                  <p class="mb-0">New AI-powered insights are now available in your dashboard. Check out the enhanced analytics</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-transparent mb-2 border-0">
            <div class="card-body p-3 rounded" style="background: rgba(var(--bs-light-rgb), 0.3); transition: all 0.2s ease;" onmouseover="this.style.background='rgba(var(--bs-primary-rgb), 0.05)'" onmouseout="this.style.background='rgba(var(--bs-light-rgb), 0.3)'">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img class="img-radius avatar rounded-0" src="https://demo.dashboardpack.com/assets/images/user/avatar-5.svg" alt="Generic placeholder image" />
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">5 hour ago</span>
                  <h5 class="text-body mb-2">Security</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-2">
          <a href="#!" class="link-danger">Clear all Notifications</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <i class="ph ph-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <h6 class="mb-0">{{Auth::User()->name}}</h6>
          
          <span class="badge bg-success-subtle text-success mt-1">Storage</span>
        </div>
        <a href="{{route('profile.edit')}}" class="dropdown-item">
          <i class="ph ph-user-circle"></i>
          <span>Profile & Settings</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph ph-buildings"></i>
          <span>Workspace Settings</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#!" class="dropdown-item">
          <i class="ph ph-headset"></i>
          <span>Support Center</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ph ph-download"></i>
          <span>Download Mobile App</span>
        </a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
        <a href="{{route('logout')}}" class="dropdown-item text-danger" onclick="event.preventDefault(); this.closest('form').submit();">
          <i class="ph ph-sign-out"></i>
          <span>Sign Out</span>
        </a>
        </form>
      </div>
    </li>
  </ul>
 </div>
   </div>
</header>