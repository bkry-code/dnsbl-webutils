@extends('layouts.default')
@section('content')

  @if (config('config.theme.jumbotron'))
    @include('includes.jumbotron')
  @endif

  <h1 class="page-header">Check</h1>


  <div class="alert alert-warning alert-dismissible alert-hint" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Enter the IP address or hostname of your mail server below and hit <strong>Check</strong>.
  </div><!--/.alert -->

  <form class="form-horizontal form-input">
    <div class="form-group">
      <label for="inputMailserverHost" class="col-sm-2 control-label">Mail server</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputMailserverHost" name="inputMailserverHost" placeholder="IP address/hostname">
      </div>
    </div><!-- /.form-group -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default btn-submit-check submit-spinner" id="spinner">Check</button>
        <a href="" class="btn btn-danger btn-cancel-check">Cancel</a>
      </div>
    </div><!-- /.form-group -->
  </form><!-- /.form-horizontal -->

  <div class="clearfix"></div>

  <div class="results">
    <hr/>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 0%;">
        <span></span>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th class="col-md-1">#</th>
          <th class="col-md-7">Blacklist</th>
          <th class="col-md-4">Status <span class="label label-listings"></span> <span class="label label-errors label-warning"></span></th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div><!-- /.results -->

  <div class="clearfix"></div>
@stop
