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
                
              </div>
            </div>
              <div class="invoice-summary">
            <div class="row">

                <div class="col-sm-12 col-md-6">
                    <div class="sub-title">CONTACTO</div>
                    <address class="address">
                      Macrobyte Inc.<br>
                
                      contacto@macrobyte.site<br>
                      +591-63793823<br>
                    </address>
                </div>
                    <div class="col-sm-12 col-md-6 text-right">
                      <ul class="summary">
                        <li><span class="f-w-500">Presupuesto #:</span> 36</li>
                        <li><span class="f-w-500">Fecha de Presupuesto:</span> 06/09/2021</li>
                          <li><span class="f-w-500">Valido hasta:</span> 06/10/2021</li>
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
                    <th>Requerimiento#</th>
                    <th>Descripcion</th>
                    <th class="text-right">Tiempo de desarrollo(dias)</th>
                   
                    <th class="text-right">Sub Total</th>
                  </tr>
                </thead>
                <tbody>
                       <tr>
                        <th scope="row">1</th>
                        <th>Modulo Productos(control, stock, vencimiento de productos, categorias, codigo de barras, descuentos, promociones)</th>
                        <td class="text-right">7</td>
                        <td class="text-right">500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <th>Modulo Cocina(pedidos, delivery, mesas, interaccion en tiempo real)</th>
                        <td class="text-right">7</td>
                        <td class="text-right">500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <th>Modulo Control de Usuarios(creacion de cuentas, roles, permisos, clientes)</th>
                        <td class="text-right">5</td>
                        <td class="text-right">500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <th>Modulo Delivery(control de despacho, estado de los pedidos en tiempo real, control de destinos e historial de cada delivery)</th>
                        <td class="text-right">5</td>
                        <td class="text-right">300 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <th>Modulo Ventas/Pedidos(control de ventas por sucursal, por usuario, creacion de mesas, control de stock, cierres-aperturas de caja)</th>
                        <td class="text-right">7</td>
                        <td class="text-right">500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <th>Modulo Clientes(puntos por compras, promociones, cumpleaños, descuentos, saldos y excedentes por usuario, generacion de QR para el acceso al cliente)</th>
                        <td class="text-right">7</td>
                        <td class="text-right">500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <th>Modulo Pensiones(Control de usuarios con pension, control de fechas, asignacion de almuerzos personalizados, actualizacion de los almuerzos en tiempo real)</th>
                        <td class="text-right">5</td>
                        <td class="text-right">300 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <th>Aplicacion de tecnologias en tiempo real, seguridad e integridad de datos, aplicativo para instalar desde navegador.</th>
                        <td class="text-right">Desde el inicio al final del desarrollo</td>
                        <td class="text-right">700 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <th>Alojamiento de la aplicacion en servidores de alta velocidad y pago del servicio por medio año(luego de este periodo se abona mensualmente 50 bs)</th>
                        <td class="text-right">0</td>
                        <td class="text-right">400 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">10</th>
                        <th>Instalacion y acoplamiento de 1 impresora termica para la realizacion de recibos para los clientes.</th>
                        <td class="text-right">1</td>
                        <td class="text-right">300 Bs</td>
                      </tr>
                      
                </tbody>
              </table>
            </div>
          </div>
          <div class="invoice-footer">
            <div class="invoice-total">
              <div class="row">
                <div class="col-12">
                  
                  <p>Tiempo de desarrollo Final: 44 dias</p>
                  <p class="total">Total: <span class="text-danger">4500 Bs</span></p>
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