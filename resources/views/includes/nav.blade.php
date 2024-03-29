<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ request()->routeIs('adminTestimonials') ? 'active' : '' }}"><a href="{{Route('adminTestimonials')}}">Testimonials</a></li>
      <li class="{{ request()->routeIs('addtest') ? 'active' : '' }}"><a href="{{Route ('addtest')}}">Add Testimonial</a></li>
      <li class="{{ request()->routeIs('trashed') ? 'active' : '' }}"><a href="{{Route ('trashed')}}">Testimonials Trash</a></li>
      <li class="{{ request()->routeIs('adminTeachers') ? 'active' : '' }}"><a href="{{Route('adminTeachers')}}">Teachers</a></li>
      <li class="{{ request()->routeIs('addTeacher') ? 'active' : '' }}"><a href="{{Route ('addTeacher')}}">Add Teacher</a></li>
      <li class="{{ request()->routeIs('teacherTrashed') ? 'active' : '' }}"><a href="{{Route ('teacherTrashed')}}"> Teachers Trash</a></li>
      <li class="{{ request()->routeIs('adminClasses') ? 'active' : '' }}"><a href="{{Route('adminClasses')}}">Classes</a></li>
      <li class="{{ request()->routeIs('addClass') ? 'active' : '' }}"><a href="{{Route ('addClass')}}">Add Class</a></li>
      <li class="{{ request()->routeIs('classesTrashed') ? 'active' : '' }}"><a href="{{Route ('classesTrashed')}}"> Classes Trash</a></li>
      <li class="{{ request()->routeIs('adminContacts') ? 'active' : '' }}"><a href="{{Route('adminContacts')}}">Contacts</a></li>
      <li class="{{ request()->routeIs('addContact') ? 'active' : '' }}"><a href="{{Route ('addContact')}}">Add Contact</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>