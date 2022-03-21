# EHC-userinfo
Information de l'utilisateur


Pour commencer nous allons ajouter une Route
Direction : routes/web.php

Ajouter cette vue :

      ``    Route::view('/userinfo', 'pages.infouser');
      
Ajouter le dossier resources du github dans votre serveur web .

Maintenant dirigez-vous vers resources/views/layouts/sidenav.blade.php

Ajouter ce code : 

    ``         <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Mon Compte</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/userinfo">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Information du compte</span>
          </a>
          
        </li>
        
 En dessous de 

           ``              <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Support</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('tickets') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-support text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tickets</span>
          </a>
        </li>

