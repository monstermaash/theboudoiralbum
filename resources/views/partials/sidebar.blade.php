<div class="sidebar">
  <div class="sidebar-logo">
    <img src="{{ asset('images/logo.png') }}" alt="The Boudoir Album">
  </div>
  <ul class="sidebar-menu">
    <li>
      <a href="{{ route('dashboard') }}">
        <img src="{{ asset('icons/dashboard.png') }}" alt="Dashboard">Dashboard
      </a>
    </li>
    <li>
      <a href="{{ route('admin.orders') }}">
        <img src="{{ asset('icons/order-list.png') }}" alt="Order List">Order List
      </a>
    </li>
    <li>
      <a href="{{ route('admin.workstations') }}">
        <img src="{{ asset('icons/workstations.png') }}" alt="Workstations">Workstations
      </a>
    </li>
    <li>
      <a href="{{ route('admin.settings') }}">
        <img src="{{ asset('icons/settings.png') }}" alt="Settings">Settings
      </a>
    </li>
    <li>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
        <img src="{{ asset('icons/logout.png') }}" alt="Logout">Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>
</div>