@extends('Header.header')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>uploader page</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form  id="form_upload" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data" action="/upf">
                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" id="name" name="name" placeholder="Name"  required="equired" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="cat" name="cat" class="form-control">
                            @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Discribtion<span class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea id="Discribtion" name="Discribtion"  placeholder="Discribtion"  required="required" class="form-control col-md-7 col-xs-12"></textarea>
                      </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">file<span >*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="file" name='file'  id="file"  placeholder="file"  class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>

                       {!! csrf_field() !!}
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                              <button type="submit" class="btn btn-primary">Cancel</button>
                              <button id="push" type="submit" class="btn btn-success">PUSH!</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

