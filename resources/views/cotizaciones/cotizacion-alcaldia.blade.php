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
                        <li><span class="f-w-500">Fecha de Presupuesto:</span> 12/07/2022</li>
                          <li><span class="f-w-500">Valido hasta:</span> 01/08/2022</li>
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
                        <th>Plantilla Premium con animaciones y diseño renovado</th>
                        <td class="text-right">3</td>
                        <td class="text-right">1500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <th>Implementacion de toda la informacion en la nueva pagina(textos,imagenes,logos, etc)</th>
                        <td class="text-right">5</td>
                        <td class="text-right">2500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <th>Optimizacion de la pagina para fluidez y seguridad</th>
                        <td class="text-right">2</td>
                        <td class="text-right">500 Bs</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <th>Adaptacion de diseño eficaz para cualquier tipo de dispositivo(tablet, escritorio, movil, tv)</th>
                        <td class="text-right">5</td>
                        <td class="text-right">1000 Bs</td>
                      </tr>
                      
                      
                      
                      
                      
                    
                      
                </tbody>
              </table>
            </div>
          </div>
          <div class="invoice-footer">
            <div class="invoice-total">
              <div class="row">
                <div class="col-12">
                  
                  <p>Tiempo de desarrollo Final: 15 dias</p>
                  <p class="total">Total: <span class="text-danger">5500 Bs</span></p>
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