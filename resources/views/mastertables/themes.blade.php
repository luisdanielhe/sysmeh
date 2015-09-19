@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Themes Disponible</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-condensed">
                <tbody><tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Descrip</th>
                  <th>Active</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>skin-blue</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td><span class="label label-success">Active</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>skin-blue-light</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td><span class="label label-warning">Desactive</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>skin-yellow</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  <td><span class="label label-warning">Desactive</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>skin-yellow-light</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner. </td>
                  <td><span class="label label-warning">Desactive</span></td>
                </tr>
              </tbody></table>
            </div><!-- /.box-body -->
          </div>
    </div>
</div>
@stop