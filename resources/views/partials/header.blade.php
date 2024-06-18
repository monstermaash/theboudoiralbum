<div class="header">
  <div class="header-search">
    <input type="text" placeholder="Search">
  </div>
  <div class="header-user">
    <img src="{{ asset('icons/notification.png') }}" alt="Notifications">
    <span>{{ Auth::user()->name }}</span>
    <span>{{ Auth::user()->role }}</span>
  </div>
</div>