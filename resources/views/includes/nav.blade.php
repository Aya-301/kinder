<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ request()->routeIs('adminTestimonials') ? 'active' : '' }}"><a href="{{Route('adminTestimonials')}}">Testimonials</a></li>
      <li class="{{ request()->routeIs('addtest') ? 'active' : '' }}"><a href="{{Route ('addtest')}}">Insert Car</a></li>
      <li class="{{ request()->routeIs('trashed') ? 'active' : '' }}"><a href="{{Route ('trashed')}}"> Trash</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>