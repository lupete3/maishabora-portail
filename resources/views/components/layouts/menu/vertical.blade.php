<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{ url('/') }}" class="app-brand-link"><x-app-logo /></a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
      <a class="menu-link" href="{{ route('dashboard') }}" wire:navigate>{{ __('Dashboard') }}</a>
    </li>

    <!-- Page Management -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Gestion des Pages</span>
    </li>
    <li class="menu-item {{ request()->is('admin/features*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.features') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bx-star"></i>
            <div class="text-truncate">{{ __('Features') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/services*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.services') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bx-briefcase"></i>
            <div class="text-truncate">{{ __('Services') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/about*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.about') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bx-info-circle"></i>
            <div class="text-truncate">{{ __('About') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.testimonials') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bxs-comment-detail"></i>
            <div class="text-truncate">{{ __('Testimonials') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/faq*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.faq') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bx-question-mark"></i>
            <div class="text-truncate">{{ __('FAQ') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/contact*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.contact') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bxs-contact"></i>
            <div class="text-truncate">{{ __('Contact') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/how-it-works*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.how-it-works') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bx-sitemap"></i>
            <div class="text-truncate">{{ __('How It Works') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/hero*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.hero') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bxs-zap"></i>
            <div class="text-truncate">{{ __('Hero Section') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/pricing*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.pricing') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bxs-dollar-circle"></i>
            <div class="text-truncate">{{ __('Pricing') }}</div>
        </a>
    </li>
    <li class="menu-item {{ request()->is('admin/stats*') ? 'active' : '' }}">
        <a class="menu-link" href="{{ route('admin.stats') }}" wire:navigate>
            <i class="menu-icon tf-icons bx bx-line-chart"></i>
            <div class="text-truncate">{{ __('Stats') }}</div>
        </a>
    </li>

    <!-- Settings -->
    <li class="menu-item {{ request()->is('settings/*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cog"></i>
        <div class="text-truncate">{{ __('Settings') }}</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->routeIs('settings.profile') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.profile') }}" wire:navigate>{{ __('Profile') }}</a>
        </li>
        <li class="menu-item {{ request()->routeIs('settings.password') ? 'active' : '' }}">
          <a class="menu-link" href="{{ route('settings.password') }}" wire:navigate>{{ __('Password') }}</a>
        </li>
      </ul>
    </li>
  </ul>
</aside>
<!-- / Menu -->

<script>
  // Toggle the 'open' class when the menu-toggle is clicked
  document.querySelectorAll('.menu-toggle').forEach(function(menuToggle) {
    menuToggle.addEventListener('click', function() {
      const menuItem = menuToggle.closest('.menu-item');
      // Toggle the 'open' class on the clicked menu-item
      menuItem.classList.toggle('open');
    });
  });
</script>
