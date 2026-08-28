    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll w-100">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
               <li id="dashboardPageItem">
                <a href="{{ url('/dashboard/admin/index') }}">
                  <img src="{{ asset('admin/img/icons/dashboard.svg') }}" alt="img">
                  <span> Dashboard</span>
                </a>
              </li>
                <li id="LawlogicCasesPageItem">
                    <a href="{{ url('/dashboard/admin/lawlogic') }}">
                        <img src="{{ asset('admin/img/icons/transcation.svg') }}" alt="img">
                        <span>LawLogic</span>
                    </a>
                </li>
                <li id="DepoCasesPageItem">
                    <a href="{{ url('/dashboard/admin/depo-cases') }}">
                        <img src="{{ asset('admin/img/icons/transcation.svg') }}" alt="img">
                        <span> Depo Cases</span>
                    </a>
                </li>
              <li id="OtherServicesPageItem">
                <a href="{{ url('/dashboard/admin/other-services') }}">
                  <img src="{{ asset('admin/img/icons/transcation.svg') }}" alt="img">
                  <span>Other Cases</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
