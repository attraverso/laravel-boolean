<header>
  <div class="header-left">
    <img src="http://boolean.careers/images/common/logo.png" alt="boolean logo">
  </div>
  <nav class="header-right">
    <ul>
      <li {{ Request::route()->getName() == 'homepage' ? 'active' : ''}}>
        <a href="#">Home</a>
      </li>
      <li {{ Request::route()->getName() == 'corso' ? 'active' : ''}}>
        <a href="#">Corso</a>
      </li>
      <li {{ Request::route()->getName() == 'corso-after' ? 'active' : ''}}>
        <a href="#">Dopo il corso</a>
      </li>
      <li {{ Request::route()->getName() == 'lezione-prova' ? 'active' : ''}}>
        <a href="#">Lezione gratuita</a>
      </li>
      <li {{ Request::route()->getName() == 'assumi' ? 'active' : ''}}>
        <a href="#">Assumi i nostri studenti</a>
      </li>
      <li class="btn btn-primary">
        <a href="#">Candidati ora</a>
      </li>
    </ul>
  </nav>
</header>