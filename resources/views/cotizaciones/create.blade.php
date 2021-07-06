@extends('asistencia.master')
@section('content')
<div class="col">
    <div class="card">
      <div class="card-body">
        <div class="invoice-wrapper">
          <div class="invoice-header border-bottom">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <h1>PRESUPUESTO</h1>
              </div>
              <div class="col-sm-12 col-md-6 text-right">
                <div class="logo-wrapper">
                 <img src="{{asset('images/logounico.png')}}" style="width: 100px">
                  <span class="brand-text">Macrobyte</span>
                </div>
                <address class="address m-t-10">
                  Tarija, <br>
                  Telefono: 75140175<br>
                </address>
              </div>
            </div>
              <div class="invoice-summary">
            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <div class="sub-title">CONTACTO</div>
                    <address class="address">
                      Macrobyte Inc.<br>
                      c/Luis Campero y Enrique Pantoja<br>
                      contacto@macrobyte.site<br>
                      +591-63793823<br>
                    </address>
                </div>
                    <div class="col-sm-12 col-md-6 text-right">
                      <ul class="summary">
                        <li><span class="f-w-500">Presupuesto #:</span> 306</li>
                        <li><span class="f-w-500">Fecha de Presupuesto:</span> 02/07/2021</li>
                          <li><span class="f-w-500">Valido hasta:</span> 02/08/2021</li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="invoice-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Item#</th>
                    <th>Descripcion</th>
                    <th class="text-right">Cantidad</th>
                    <th class="text-right">Precio Unitario</th>
                    <th class="text-right">Sub Total</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sistema web de gestion ecommerce
                        </td>
                        <td class="text-right">1</td>
                        <td class="text-right">1500 Bs</td>
                        <td class="text-right">1500 Bs</td>
                      </tr>
                 
                  <tr>
                    <th scope="row">2</th>
                    <td>Tiempo de desarrollo(semanas)
                    </td>
                    <td class="text-right">3</td>
                    <td class="text-right">150 Bs</td>
                    <td class="text-right">450 Bs</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Desarrollo con framework Laravel v8
                    </td>
                    <td class="text-right">1</td>
                    <td class="text-right">1000 Bs</td>
                    <td class="text-right">1000 Bs</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Diseño UI/UX
                    </td>
                    <td class="text-right">1</td>
                    <td class="text-right">300 Bs</td>
                    <td class="text-right">300 Bs</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Implementacion Pasarela de pagos
                    </td>
                    <td class="text-right">1</td>
                    <td class="text-right">500 Bs</td>
                    <td class="text-right">500 Bs</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Alquiler de servidor para pruebas
                    </td>
                    <td class="text-right">1</td>
                    <td class="text-right">50 Bs</td>
                    <td class="text-right">50 Bs</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="invoice-footer">
            <div class="invoice-total">
              <div class="row">
                <div class="col-12">
                  <p>Sub Total: 3800 Bs</p>
                  <p>0% Descuento: 3800 Bs</p>
                  <p class="total">Total: <span class="text-danger">3800 Bs</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer bg-light">
       
      </div>
    </div>
  </div>
@endsection