<?php include("header.php"); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- User Sidebar -->
                <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                  <!-- User Card -->
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                          <img
                            class="img-fluid rounded mb-3 pt-1 mt-4"
                            src="../../assets/img/avatars/15.png"
                            height="100"
                            width="100"
                            alt="User avatar" />
                          <div class="user-info text-center">
                            <h4 class="mb-2">Violeta Mendoza</h4>
                            <span class="badge bg-label-secondary mt-1">Visitante</span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-around flex-wrap mt-3 pt-3 pb-4 border-bottom">
                        <div class="d-flex align-items-start me-4 mt-3 gap-2">
                          <span class="badge bg-label-primary p-2 rounded"><i class="ti ti-checkbox ti-sm"></i></span>
                          <div>
                            <p class="mb-0 fw-medium">2</p>
                            <small>Eventos</small>
                          </div>
                        </div>
                        <div class="d-flex align-items-start mt-3 gap-2">
                          <span class="badge bg-label-primary p-2 rounded"><i class="ti ti-briefcase ti-sm"></i></span>
                          <div>
                            <p class="mb-0 fw-medium">3</p>
                            <small>Mesas</small>
                          </div>
                        </div>
                      </div>
                      <p class="mt-4 small text-uppercase text-muted">Detalles</p>
                      <div class="info-container">
                        <ul class="list-unstyled">
                          <li class="mb-2">
                            <span class="fw-medium me-1">Usuario:</span>
                            <span>violet.dev</span>
                          </li>
                          <li class="mb-2 pt-1">
                            <span class="fw-medium me-1">Email:</span>
                            <span>vafgot@vultukir.org</span>
                          </li>
                          <li class="mb-2 pt-1">
                            <span class="fw-medium me-1">Estatus:</span>
                            <span class="badge bg-label-success">Activa</span>
                          </li>
                          <li class="mb-2 pt-1">
                            <span class="fw-medium me-1">Teléfono:</span>
                            <span>(614) 456-7890</span>
                          </li>
                          <li class="pt-1">
                            <span class="fw-medium me-1">Ciudad:</span>
                            <span>Chihuahua</span>
                          </li>
                        </ul>
                        <div class="d-flex justify-content-center">
                          <a
                            href="javascript:;"
                            class="btn btn-primary me-3"
                            data-bs-target="#editUser"
                            data-bs-toggle="modal"
                            >Editar</a
                          >
                          <a href="javascript:;" class="btn btn-label-danger suspend-user">Baja</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /User Card -->
                </div>
                <!--/ User Sidebar -->

                <!-- User Content -->
                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">


                  <!-- Change Password -->
                  <div class="card mb-4">
                    <h5 class="card-header">Cambiar contraseña </h5>
                    <div class="card-body">
                      <form id="formChangePassword" method="GET" onsubmit="return false">
                        <div class="alert alert-warning" role="alert">
                          <h5 class="alert-heading mb-2">Verificar los siguientes puntos</h5>
                          <span>Minimo 8 caracteres, mayuscula y un simbolo</span>
                        </div>
                        <div class="row">
                          <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                            <label class="form-label" for="newPassword">Nueva contraseña</label>
                            <div class="input-group input-group-merge">
                              <input
                                class="form-control"
                                type="password"
                                id="newPassword"
                                name="newPassword"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                          </div>

                          <div class="mb-3 col-12 col-sm-6 form-password-toggle">
                            <label class="form-label" for="confirmPassword">Confirmar nueva contraseña</label>
                            <div class="input-group input-group-merge">
                              <input
                                class="form-control"
                                type="password"
                                name="confirmPassword"
                                id="confirmPassword"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                          </div>
                          <div>
                            <button type="submit" class="btn btn-primary me-2">Cambiar contraseña</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!--/ Change Password -->
                </div>
                <!--/ User Content -->
              </div>


            </div>
            <!-- / Content -->

            <?php include("footer.php"); ?>