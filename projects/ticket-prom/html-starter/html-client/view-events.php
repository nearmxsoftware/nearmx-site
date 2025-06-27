<?php include("header.php"); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4">Graduación de Ingeniería 2024</h4>

                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <h5 class="card-header">Evento</h5>
                      <div class="card-body">
                        <ul class="list-unstyled mb-4 mt-3">
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-check text-heading"></i><span class="fw-medium mx-2 text-heading">Estatus:</span> <span class="badge bg-label-success me-1">Activo</span></li>
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading">Evento:</span> <span>GRADUACIÓN DE ING 2023</span></li>

                          <li class="d-flex align-items-center mb-3"><i class="ti ti-flag text-heading"></i><span class="fw-medium mx-2 text-heading">Lugar:</span> <span>LAGO DI COMO</span></li>
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-calendar-due text-heading"></i><span class="fw-medium mx-2 text-heading">Fecha:</span> <span>01/01/2023</span></li>
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-map-pin text-heading"></i><span class="fw-medium mx-2 text-heading">Ciudad:</span> <span>CHIHUAHUA</span></li>
                        </ul>
                        <small class="card-text text-uppercase">Contacto</small>
                        <ul class="list-unstyled mb-4 mt-3">
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-call"></i><span class="fw-medium mx-2 text-heading">Whatsapp:</span> <span>(614) 456-7890</span></li>
                        </ul>
                        <small class="card-text text-uppercase">Información</small>
                        <ul class="list-unstyled mb-0 mt-3">
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description text-success me-2"></i>
                            <div class="d-flex flex-wrap"><span class="fw-medium me-2 text-heading">Descripción del evento</span><p>Incluye .Termos (5 por mesa) .Cabina de fotos (2 hrs) • Grupo Versatil "Son de Rumba" .2,000 shots •Horario de 9 pm-2 am . Plato Fuerte de menú de pollo acompañado de 2 guarniciones • Ninos mayores a 3 años requieren pase</p></div>
                          </li>
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description text-success me-2"></i>
                            <div class="d-flex flex-wrap"><span class="fw-medium me-2 text-heading">Intinerario</span><p>Pendiente...</p></div>
                          </li>
                          <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description text-danger me-2"></i>
                            <div class="d-flex flex-wrap"><span class="fw-medium me-2 text-heading">Reglas del salón</span><p>COMIDA PARA INGRESAR EN GRADUACIONES Botanas secas Frituras Papas Nueces Cacahuates Frutos secos No se permiten embutidos o perecederos como: Cremas Quesos Alimentos preparados Reposterfa Embutidos</p>
                              <p>REGLAMENTO DE DESCORCHE POR MESA 3 LITROS LIBRES PERMITIDOS LITRO EXTRA $200 PESOS X LITRO DE LICOR SE PAGA EL DÍA QUE SE ENTREGA EL LICOR EN LAS OFICINAS DE VENTAS VINO $200 PESO JUGOSY MEZCLADORES LIBRES NO SE PERMITEN BEBIDAS ENERGIZANTES REFRESCOS VIENEN INCLUIDOS</p></div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <h5 class="card-header">Ocupación</h5>
                      <div class="card-body">
                        <canvas id="doughnutChart" class="chartjs" data-height="350"></canvas>
                        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 mt-4 pt-1">
                          <li class="ct-series-0 d-flex flex-column">
                            <h5 class="mb-0">Apartadas</h5>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(102, 110, 232);width:35px; height:6px;"></span>
                            <div class="text-muted">80 %</div>
                          </li>
                          <li class="ct-series-2 d-flex flex-column">
                            <h5 class="mb-0">Disponibles</h5>
                            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(253, 172, 52);width:35px; height:6px;"></span>
                            <div class="text-muted">20 %</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card mb-4">
                      <h5 class="card-header">Mesas disponibles</h5>
                      <div class="card-body">
                        <div class="col-md-12">
                          <select class="form-select" id="" aria-label="">
                            <option selected>Seleccionar mesa</option>
                            <option value="1">M - 1</option>
                            <option value="2">M - 2</option>
                            <option value="3">M - 3</option>
                          </select>
                        </div>
                        <br>
                        <li class="d-flex mb-3 pb-1 align-items-center">
                          <div class="badge bg-label-success rounded me-3 p-2">
                            <i class="ti ti-star ti-sm"></i>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">M - 1.8</h6>
                              <small class="text-muted d-block">Disponible</small>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0 text-success">+$10,480</h6>
                            </div>
                          </div>
                        </li>
                        <br>
                        <div>
                          <a href="add-payment.php" class="btn btn-primary d-grid w-100 waves-effect waves-light">Pagar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4">
                      <h5 class="card-header">Flyer</h5>
                      <div class="card-body">
                        <div class="col-md-12">
                          <span type="button" class="" data-bs-toggle="modal" data-bs-target="#flyer">
                            <img src="../../assets/img/elements/1.jpg" class="card-img-top" alt="">
                          </span>
                        </div>                       
                      </div>
                    </div>
                    <div class="card mb-4">
                      <h5 class="card-header">Diagrama</h5>
                      <div class="card-body">
                        <div class="col-md-12">
                          <span type="button" class="" data-bs-toggle="modal" data-bs-target="#diagrama">
                            <img src="../../assets/img/elements/4.jpg" class="card-img-top" alt="">
                          </span>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
            <!-- / Content -->

            <?php include("footer.php"); ?>