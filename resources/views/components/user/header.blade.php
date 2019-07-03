<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <h4 "><a style="color: white;" href="{{Route('user.dashboard')}}">WebDemande</a></h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav mr-auto">
      
    </ul>
    
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">5</span>
          </i>
          Notifications
        </a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{auth()->user()->agent()->FullName}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{Route('user.mes-demandes')}}">Mes Demandes</a>
          <a class="dropdown-item" href="{{Route('logout')}}">Déconnexion</a>
          
        </div>
      </li>
    </ul>
    
  </div>
</nav>