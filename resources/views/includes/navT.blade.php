<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ request()->routeIs('adminTeachers') ? 'active' : '' }}"><a href="{{Route('adminTeachers')}}">Teachers</a></li>
      <li class="{{ request()->routeIs('addTeacher') ? 'active' : '' }}"><a href="{{Route ('addTeacher')}}">Add Teacher</a></li>
      <li class="{{ request()->routeIs('teacherTrashed') ? 'active' : '' }}"><a href="{{Route ('teacherTrashed')}}"> Trash</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>