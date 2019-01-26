@extends('Header.header')
@section('content')
  <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Share Files</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Files</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p>Find files with details</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">file Name</th>
                          <th>Size</th>
                          <th style="width: 20%">#Links</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($Files as $File)
                        <tr>
                          <td>#</td>
                          <td>
                            <a>{{$File->name}}</a>
                            <br />
                            <small>upload date is {{$File->created_at}}</small>
                          </td>
                       
                        
                          <td>
                            <button type="button" class="btn btn-success btn-xs">{{$File->size}}</button>
                          </td>
                          <td>
                            <a href="{{$File->DIR}}/{{$File->path}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> DownLoad </a>
                          </td>
                        </tr>
                        <tr>
              @endforeach
                      </tbody>
                    </table>
                    <!-- end project list -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection