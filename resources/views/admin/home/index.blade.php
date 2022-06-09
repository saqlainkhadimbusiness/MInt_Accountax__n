@extends('layouts.admin.form')

@section('content')
  <script src="{{ URL::asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-border-color card-border-color-primary">
            <div class="card-header card-header-divider">Home</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.home.store') }}"  enctype="multipart/form-data">
              	@csrf

                <div class="form-group pt-2">
                  <label for="meta_title">Meta Title</label>
                  <input class="form-control" id="meta_title" type="text" name="meta_title" placeholder="Enter Meta Title" value="{{isset($data->meta_title)?$data->meta_title:""}}" >
                </div>
                <div class="form-group pt-2">
                  <label for="home_title">Meta Title description</label>
                  <input class="form-control" id="meta_title_desc" type="text"  name="meta_title_desc" placeholder="Enter Meta Title description" value="{{isset($data->meta_title_desc)?$data->meta_title_desc:""}}" >
                </div>

                <div class="form-group pt-2">
                  <label for="slider_text_1">slider_text_1</label>
                  <textarea class="form-control ckeditor" id="slider_text_1" type="text" rows="5" cols="50"  name="slider_text_1" placeholder="Enter slider_text_1" > {{isset($data->slider_text_1)?$data->slider_text_1:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="slider_text_2">slider_text_2</label>
                  <textarea class="form-control ckeditor" id="slider_text_2" type="text" rows="5" cols="50" name="slider_text_2" placeholder="Enter slider_text_2" > {{isset($data->slider_text_2)?$data->slider_text_2:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="slider_text_3">slider_text_3</label>
                  <textarea class="form-control ckeditor" id="slider_text_3" type="text" rows="5" cols="50" name="slider_text_3" placeholder="Enter slider_text_3" > {{isset($data->slider_text_3)?$data->slider_text_3:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading">Our Services heading</label>
                  <input class="form-control" id="services_heading" type="text"  name="services_heading" placeholder="Enter Our Services heading"   value="{{isset($data->services_heading)?$data->services_heading:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc">services_desc</label>
                  <textarea class="form-control" id="services_desc" type="text" rows="3"  name="services_desc" placeholder="Enter services_desc" > {{isset($data->services_desc)?$data->services_desc:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="services_icon_1">services_icon_1</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_1" type="text"  name="services_icon_1" placeholder="Enter services_icon_1" value="{{isset($data->services_icon_1)?$data->services_icon_1:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_1">services_heading_1</label>
                  <input class="form-control" id="services_heading_1" type="text"  name="services_heading_1" placeholder="Enter services_heading_1" value="{{isset($data->services_heading_1)?$data->services_heading_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_1">services_slug_1</label>
                  <input class="form-control" id="services_slug_1" type="text"  name="services_slug_1" placeholder="Enter services_slug_1" value="{{isset($data->services_slug_1)?$data->services_slug_1:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_1">services_desc_1</label>
                  <input class="form-control" id="services_desc_1" type="text"  name="services_desc_1" placeholder="Enter services_desc_1" value=" {{isset($data->services_desc_1)?$data->services_desc_1:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_2">services_icon_2</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_2" type="text"  name="services_icon_2" placeholder="Enter services_icon_2" value="{{isset($data->services_icon_2)?$data->services_icon_2:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_2">services_heading_2</label>
                  <input class="form-control" id="services_heading_2" type="text"  name="services_heading_2" placeholder="Enter services_heading_2" value="{{isset($data->services_heading_2)?$data->services_heading_2:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_2">services_slug_2</label>
                  <input class="form-control" id="services_slug_2" type="text"  name="services_slug_2" placeholder="Enter services_slug_2" value="{{isset($data->services_slug_2)?$data->services_slug_2:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_2">services_desc_2</label>
                  <input class="form-control" id="services_desc_2" type="text"  name="services_desc_2" placeholder="Enter services_desc_2"  value="{{isset($data->services_desc_2)?$data->services_desc_2:""}}"  >
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_3">services_icon_3</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_3" type="text"  name="services_icon_3" placeholder="Enter services_icon_3" value=" {{isset($data->services_icon_3)?$data->services_icon_3:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_3">services_heading_3</label>
                  <input class="form-control" id="services_heading_3" type="text"  name="services_heading_3" placeholder="Enter services_heading_3" value=" {{isset($data->services_heading_3)?$data->services_heading_3:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_slug_3">services_slug_3</label>
                  <input class="form-control" id="services_slug_3" type="text"  name="services_slug_3" placeholder="Enter services_slug_3" value="{{isset($data->services_slug_3)?$data->services_slug_3:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_3">services_desc_3</label>
                  <input class="form-control" id="services_desc_3" type="text"  name="services_desc_3" placeholder="Enter services_desc_3" value="{{isset($data->services_desc_3)?$data->services_desc_3:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_4">services_icon_4</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_4" type="text"  name="services_icon_4" placeholder="Enter services_icon_4" value="{{isset($data->services_icon_4)?$data->services_icon_4:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_4">services_heading_4</label>
                  <input class="form-control" id="services_heading_4" type="text"  name="services_heading_4" placeholder="Enter services_heading_4" value=" {{isset($data->services_heading_4)?$data->services_heading_4:""}}">
                </div>

                 <div class="form-group pt-2">
                  <label for="services_slug_4">services_slug_4</label>
                  <input class="form-control" id="services_slug_4" type="text"  name="services_slug_4" placeholder="Enter services_slug_4" value="{{isset($data->services_slug_4)?$data->services_slug_4:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_4">services_desc_4</label>
                  <input class="form-control" id="services_desc_4" type="text"  name="services_desc_4" placeholder="Enter services_desc_4" value="{{isset($data->services_desc_4)?$data->services_desc_4:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_5">services_icon_5</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_5" type="text"  name="services_icon_5" placeholder="Enter services_icon_5" value="{{isset($data->services_icon_5)?$data->services_icon_5:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_5">services_heading_5</label>
                  <input class="form-control" id="services_heading_5" type="text"  name="services_heading_5" placeholder="Enter services_heading_5" value=" {{isset($data->services_heading_5)?$data->services_heading_5:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_5">services_slug_5</label>
                  <input class="form-control" id="services_slug_5" type="text"  name="services_slug_5" placeholder="Enter services_slug_5" value=" {{isset($data->services_slug_5)?$data->services_slug_5:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_5">services_desc_5</label>
                  <input class="form-control" id="services_desc_5" type="text"  name="services_desc_5" placeholder="Enter services_desc_5" value=" {{isset($data->services_desc_5)?$data->services_desc_5:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_6">services_icon_6</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_6" type="text"  name="services_icon_6" placeholder="Enter services_icon_6" value="{{isset($data->services_icon_6)?$data->services_icon_6:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_6">services_heading_6</label>
                  <input class="form-control" id="services_heading_6" type="text"  name="services_heading_6" placeholder="Enter services_heading_6" value=" {{isset($data->services_heading_6)?$data->services_heading_6:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_6">services_slug_6</label>
                  <input class="form-control" id="services_slug_6" type="text"  name="services_slug_6" placeholder="Enter services_slug_6" value=" {{isset($data->services_slug_6)?$data->services_slug_6:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_6">services_desc_6</label>
                  <input class="form-control" id="services_desc_6" type="text"  name="services_desc_6" placeholder="Enter services_desc_6" value="{{isset($data->services_desc_6)?$data->services_desc_6:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_heading">company_heading</label>
                  <input class="form-control" id="company_heading" type="text"  name="company_heading" placeholder="Enter company_heading" value="{{isset($data->company_heading)?$data->company_heading:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_heading_desc">company_heading_desc</label>
                  <input class="form-control" id="company_heading_desc" type="text"  name="company_heading_desc" placeholder="Enter company_heading_desc" value="{{isset($data->company_heading_desc)?$data->company_heading_desc:""}}">
                </div>
                <div class="form-group pt-2">
                  <input class="inputfile" id="file-2" type="file" name="image" accept="image/*">
                  <label class="btn-primary" for="file-2"> <i class="mdi mdi-upload"></i><span>Company Image</span></label>
                  <a  target="_blank" href='{{ url('uploaded/' . $data->company_image) }}'>old image here</a>
{{--                  <img title="Smiley face" src="{{ url('uploaded/' . $data->company_image) }}" width="150px" ></img>--}}
                </div>

                <div class="form-group pt-2">
                  <label for="company_image_alt">Company Image alt</label>
                  <input class="form-control" id="company_image_alt" type="text" name="company_image_alt" placeholder="Enter Alt Keywords"  value="{{isset($data->company_image_alt)?$data->company_image_alt:""}}" >
                </div>

                <div class="form-group pt-2">
                  <label for="company_desc">company_desc</label>
                  <input class="form-control" id="company_desc" type="text"  name="company_desc" placeholder="Enter company_desc" value="{{isset($data->company_desc)?$data->company_desc:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_1">company_item_1</label>
                  <input class="form-control" id="company_item_1" type="text"  name="company_item_1" placeholder="Enter company_item_1" value=" {{isset($data->company_item_1)?$data->company_item_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_per_1">company_item_per_1</label>
                  <input class="form-control" id="company_item_per_1" type="number" min="1"  max="100"  name="company_item_per_1" placeholder="Enter company_item_per_1" value="{{isset($data->company_item_per_1)?$data->company_item_per_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_2">company_item_2</label>
                  <input class="form-control" id="company_item_2" type="text"  name="company_item_2" placeholder="Enter company_item_2" value=" {{isset($data->company_item_2)?$data->company_item_2:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_per_2">company_item_per_2</label>
                  <input class="form-control" id="company_item_per_2" type="number"  min="1" max="100"   name="company_item_per_2" placeholder="Enter company_item_per_2" value="{{isset($data->company_item_per_2)?$data->company_item_per_2:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_heading">success_heading</label>
                  <input class="form-control" id="success_heading" type="text"  name="success_heading" placeholder="Enter success_heading" value=" {{isset($data->success_heading)?$data->success_heading:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_heading_desc">success_heading_desc</label>
                  <input class="form-control" id="success_heading_desc" type="text"  name="success_heading_desc" placeholder="Enter success_heading_desc" value="{{isset($data->success_heading_desc)?$data->success_heading_desc:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_1">success_head_1</label>
                  <input class="form-control" id="success_head_1" type="text"  name="success_head_1" placeholder="Enter success_head_1" value="{{isset($data->success_head_1)?$data->success_head_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_1">success_head_desc_1</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_1" type="text"  name="success_head_desc_1" placeholder="Enter success_head_desc_1" > {{isset($data->success_head_desc_1)?$data->success_head_desc_1:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_2">success_head_2</label>
                  <input class="form-control" id="success_head_2" type="text"  name="success_head_2" placeholder="Enter success_head_2" > {{isset($data->success_head_2)?$data->success_head_2:""}}
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_2">success_head_desc_2</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_2" type="text"  name="success_head_desc_2" placeholder="Enter success_head_desc_2" > {{isset($data->success_head_desc_2)?$data->success_head_desc_2:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_3">success_head_3</label>
                  <input class="form-control" id="success_head_3" type="text"  name="success_head_3" placeholder="Enter success_head_3" > {{isset($data->success_head_3)?$data->success_head_3:""}}
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_3">success_head_desc_3</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_3" type="text"  name="success_head_desc_3" placeholder="Enter success_head_desc_3" > {{isset($data->success_head_desc_3)?$data->success_head_desc_3:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="services">success_head_4</label>
                  <input class="form-control" id="success_head_4" type="text"  name="success_head_4" placeholder="Enter success_head_4" > {{isset($data->success_head_4)?$data->success_head_4:""}}
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_4">success_head_desc_4</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_4" type="text"  name="success_head_desc_4" placeholder="Enter success_head_desc_4" > {{isset($data->success_head_desc_4)?$data->success_head_desc_4:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_5">success_head_5</label>
                  <input class="form-control" id="success_head_5" type="text"  name="success_head_5" placeholder="Enter success_head_5" > {{isset($data->success_head_5)?$data->success_head_5:""}}
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_5">success_head_desc_5</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_5" type="text"  name="success_head_desc_5" placeholder="Enter success_head_desc_5" > {{isset($data->success_head_desc_5)?$data->success_head_desc_5:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="success_head_6">success_head_6</label>
                  <input class="form-control" id="success_head_6" type="text"  name="success_head_6" placeholder="Enter success_head_6" > {{isset($data->success_head_6)?$data->success_head_6:""}}
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_6">success_head_desc_6</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_6" type="text"  name="success_head_desc_6" placeholder="Enter success_head_desc_6" > {{isset($data->success_head_desc_6)?$data->success_head_desc_6:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="success_head_6">success_head_6</label>
                  <input class="form-control" id="success_head_6" type="text"  name="success_head_6" placeholder="Enter success_head_6" > {{isset($data->success_head_6)?$data->success_head_6:""}}
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_6">success_head_desc_6</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_6 ckeditor" type="text"  name="success_head_desc_6" placeholder="Enter success_head_desc_6" > {{isset($data->success_head_desc_6)?$data->success_head_desc_6:""}}</textarea>
                </div>
























               	<button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  	</div>
  <script src="{{ URL::asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
@endsection