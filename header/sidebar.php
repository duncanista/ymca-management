<nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
            <ul class="nav flex-column">
                  <li class="nav-item">
                        <a class="nav-link <?php if ($home) echo "active"; ?>" href="./home">
                              <span data-feather="home"></span>
                              Inicio <span class="sr-only"><?php if ($home) echo "(current)"; ?></span>
                        </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link <?php if ($students) echo "active"; ?>" href="./students">
                              <span data-feather="book-open"><?php if ($students) echo "(current)"; ?></span>
                              Alumnos
                        </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="./socio-economic-study">
                              <span data-feather="file-text"></span>
                              E. Socioeconómico
                        </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#">
                              <span data-feather="bar-chart-2"></span>
                              Reportes
                        </a>
                  </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Accesos rápidos</span>
                  <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                  </a>
            </h6>
            <ul class="nav flex-column mb-2">
                  <h8 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Alumno</span>
                  </h8>
                  <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#addModal">
                              <span data-feather="file-text"></span>
                              Dar de alta alumno
                        </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#">
                              <span data-feather="file-text"></span>
                              Modificar datos alumno
                        </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#">
                              <span data-feather="file-text"></span>
                              Borrar registro alumno
                        </a>
                  </li>
                  <h8 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Estudio Socioeconómico</span>
                  </h8>
                  <li class="nav-item">
                        <a class="nav-link" href="#">
                              <span data-feather="file-text"></span>
                              Dar de alta estudio
                        </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#">
                              <span data-feather="file-text"></span>
                              Modificar estudio
                        </a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="#">
                              <span data-feather="file-text"></span>
                              Borrar registro de estudio
                        </a>
                  </li>
            </ul>

            
      </div>
     
</nav>
