@extends('layouts.user')


@section('page-title')

@endsection

@section('main-content')
<div class ="container-fluid bg" style="padding-top: 5em;">

<div class="card card-fluid col-10 mx-auto py-4" style="margin-top: 5em;">
              
                  <!-- .card-body -->
                  <div class="card-body">
                    @if(Session::get('role')[0] != 1)

                  	<h5 class="mb-4">Liste des demandes</h5>
                    <!-- .form-group -->
                    <div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">
                        <!-- .input-group-prepend -->
                        <div class="input-group-prepend">
                          <select id="filterBy" class="custom-select">
                            <option value='' selected>Filtrer Par </option>
                            <option value="1"> Date de sortie </option>
                            <option value="2"> Heure de sortie </option>
                            <option value="3"> Heure d'entrée </option>
                            <option value="4"> Status </option>
                          </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class="input-group has-clearable">
                          <button id="clear-search" type="button" class="close show" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                          </div><input id="table-search" type="text" class="form-control" placeholder="Chercher Demande">
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table -->
                    <table  id="myTable" class="table datatable" role="grid">
                      <!-- thead -->
                      <thead>
                        <tr>
                       	  <th>Agent</th>
                          <th>Date de sortie</th>
                          <th>Heure de sortie</th>
                          <th>Heure d'entrée</th>
                          <th>Status</th>
                          <th >Options</th>
                          <th style="width:50px; min-width:50px;"> &nbsp; </th>
                          

                          
                        </tr>
                      </thead><!-- /thead -->
                      <!-- tbody -->
                      <tbody>
                        <!-- create empty row to passing html validator -->
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                  </div><!-- /.card-body -->
                  @else
<div class="form-group">
                      <!-- .input-group -->
                      <div class="input-group input-group-alt">
                        <!-- .input-group-prepend -->
                        <div class="input-group-prepend">
                          <select id="filterBy" class="custom-select">
                            <option value='' selected>Filtrer Par </option>
                            <option value="1"> Date de sortie </option>
                            <option value="2"> Heure de sortie </option>
                            <option value="3"> Heure d'entrée </option>
                            <option value="4"> Status </option>
                          </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class="input-group has-clearable">
                          <button id="clear-search" type="button" class="close show" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                          </div><input id="table-search" type="text" class="form-control" placeholder="Chercher Demande">
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table -->
                    <table  id="myTable" class="table datatable" role="grid">
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th>Date de sortie</th>
                          <th>Heure de sortie</th>
                          <th>Heure d'entrée</th>
                          <th>Status</th>
                          <th >Options</th>
                          <th style="width:50px; min-width:50px;"> &nbsp; </th>
                          

                          
                        </tr>
                      </thead><!-- /thead -->
                      <!-- tbody -->
                      <tbody>
                        <!-- create empty row to passing html validator -->
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody><!-- /tbody -->
                    </table><!-- /.table -->
                  @endif
                </div><!-- /.card -->

</div>
@endsection

@section('page-script')
<script src="{{asset('theme/dist/assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('theme/dist/assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('theme/dist/assets/vendor/datatables/extensions/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('theme/dist/assets/vendor/datatables/extensions/buttons/buttons.print.min.js')}}"></script> 
    <script src="{{asset('theme/dist/assets/javascript/pages/dataTables.bootstrap.js')}}"></script>
    @if(Session::get('role')[0] == 1)

    <script src="{{asset('assets/js/mesDemandes-Datatables.js')}}"></script>

    @else
    <script src="{{asset('assets/js/Demandes-Datatables.js')}}"></script>
    @endif

@endsection