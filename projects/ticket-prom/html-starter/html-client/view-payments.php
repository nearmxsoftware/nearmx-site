<?php include("header.php"); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4">Ver mis pagos</h4>
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected>Buscar cliente</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected>Buscar evento</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="col-md-4"></div>
                      </div>  

                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th>Evento</th>
                              <th>Lugar</th>
                              <th>Abonado</th>
                              <th>Estatus</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody class="table-border-bottom-0">
                            <tr>
                              <td><span class="fw-medium">#8</span></td>
                              <td>Graduación UACH Contabilidad</td>
                              <td>LAGO DI COMO</td>
                              <td>$6,000</td>
                              <td><span class="badge bg-label-warning me-1">Pendiente</span></td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add-payment.php"><i class="ti ti-pencil me-1"></i>Agregar pago</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td><span class="fw-medium">#8</span></td>
                              <td>Graduación ASDF </td>
                              <td>LAGO DI COMO</td>
                              <td>$10,000</td>
                              <td><span class="badge bg-label-success me-1">Pagado</span></td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add-payment.php"><i class="ti ti-pencil me-1"></i>Agregar pago</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <?php include("footer.php"); ?>