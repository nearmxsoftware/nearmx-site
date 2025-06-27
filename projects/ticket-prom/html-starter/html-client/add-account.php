<?php include("header.php"); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y ">
              <div class="row justify-content-center">

                <!-- User Content -->
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-center h-px-500">
                        <form class="w-px-400 border rounded p-3 p-md-5">
                          <h3 class="mb-4">Registro</h3>

                          <div class="mb-6">
                            <label class="form-label" for="">Nombre</label>
                            <input type="text" id="" class="form-control" />
                          </div>
                          <div class="mb-6">
                            <label class="form-label" for="">Apellido</label>
                            <input type="text" id="" class="form-control" />
                          </div>
                          <div class="mb-6">
                            <label class="form-label" for="">Teléfono</label>
                            <input type="phone" id="" class="form-control" maxlength="10" />
                          </div>
                          <div class="mb-6">
                            <label class="form-label" for="">Email</label>
                            <input type="text" id="" class="form-control" placeholder="john.doe" />
                          </div>

                          <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="">Contraseña</label>
                            <div class="input-group input-group-merge">
                              <input type="password" id="" class="form-control" />
                              <span class="input-group-text cursor-pointer" id=""><i class="ti ti-eye-off"></i></span> </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-check m-0">
                              <input type="checkbox" class="form-check-input" />
                              <span class="form-check-label">No soy un robot</span>
                            </label>
                          </div>
                          <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ User Content -->
              </div>


            </div>
            <!-- / Content -->

            <?php include("footer.php"); ?>