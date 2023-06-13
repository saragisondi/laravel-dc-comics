
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Route::currentRouteName() === 'comic.index' ? 'active' : ''}}" href="{{route('comic.index')}}">Fumetti</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">Nuovo Fumetto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contatti</a>
  </li>
</ul>
