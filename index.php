<?php require_once 'App/Views/Header.php'; ?>
<div class="jumbotron text-center">
    <h1 class="display-3 text-white"><b> Selecciona tu pedido</b></h1>
    <p class="lead">Jumbo helper text</p>
    <hr class="my-2 bg-white">
    <p>More info</p>
    <p class="lead">
        <a href="ventas.php" class="btn btn-outline-light">Ver ventas</a>
    </p>
</div>
<div class="container">
    <main class="row justify-content-center">
        <section class="col-lg-4 ">
            <div class="card shadow-sm">
                <img class="card-img-top" src="Public/img/Hamburguesa.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Hamburguesa</h4>
                    <p class="card-text">Personaliza tu Hamburguesa</p>
                    <input type="button" value="Personaliza tu Hamburguesa" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalHamburguesa">
                </div>
            </div>
        </section>
        <section class="col-lg-4">
            <div class="card shadow-sm">
                <img class="card-img-top" src="Public/img/Pizza.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Pizza</h4>
                    <p class="card-text">Personaliza tu Pizza</p>
                    <input type="button" value="Personaliza tu pizza" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
                </div>
            </div>
        </section>
    </main>
</div>

<!-- Modal Pizza-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Personaliza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <section class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 class="card-title">Pizza</h4>
                                <form action="" id="frmPedido">
                                    <label for="">Seleccione</label>
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0" id="checkSalsa">
                                        <label class="form-check-label" for="defaultCheck1">Salsa barbecue <b class="text-danger">$1000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="checkTocino">
                                        <label class="form-check-label" for="defaultCheck1">Tocino  <b class="text-danger">$2000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="checkPeperoni">
                                        <label class="form-check-label" for="defaultCheck1">Peperoni  <b class="text-danger">$2000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="checkPollo">
                                        <label class="form-check-label" for="defaultCheck1">Pollo  <b class="text-danger">$2000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4" id="checkChampi">
                                        <label class="form-check-label" for="defaultCheck1">Champiñones  <b class="text-danger">$3000</b></label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3">
                                <img class="card-img-top shadow-sm" src="Public/img/Pizza.jpg" alt="">
                                <h2>Total</h2>
                                <h4>$<span id="totalPedido">12000</span></h4>
                                <input type="submit" id="btnEnviar" class="btn btn-outline-danger px-5 mt-2" value="Pedir">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!--modal hamburguesa-->
<div class="modal fade" id="exampleModalHamburguesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Personaliza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <section class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 class="card-title">Hamburguesa</h4>
                                <form action="" id="frmPedidoHamburguesa">
                                    <label for="">Seleccione</label>
                                    <hr>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="0" id="checkSalsa">
                                        <label class="form-check-label" for="defaultCheck1">Papas a la Francesa <b class="text-danger">$1000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="checkTocino">
                                        <label class="form-check-label" for="defaultCheck1">Pollo <b class="text-danger">$2000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2" id="checkPeperoni">
                                        <label class="form-check-label" for="defaultCheck1">Cocacola <b class="text-danger">$2000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="checkPollo">
                                        <label class="form-check-label" for="defaultCheck1">Carne asada <b class="text-danger">$2000</b></label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4" id="checkChampi">
                                        <label class="form-check-label" for="defaultCheck1">Champiñones <b class="text-danger">$3000</b></label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3">
                                <img class="card-img-top shadow-sm" src="Public/img/Hamburguesa.jpg" alt="">
                                <h2>Total</h2>
                                <h4>$<span id="totalPedidoHam">12000</span></h4>
                                <input type="submit" id="btnEnviarHam" class="btn btn-outline-danger px-5 mt-2" value="Pedir">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php require_once 'App/Views/Footer.php';?>
