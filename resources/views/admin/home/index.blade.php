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
                  <label for="slider_text_1">1st Slider text</label>
                  <textarea class="form-control ckeditor" id="slider_text_1" type="text" rows="5" cols="50"  name="slider_text_1" placeholder="Enter 1st Slider text" > {{isset($data->slider_text_1)?$data->slider_text_1:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="slider_text_2">2st Slider text</label>
                  <textarea class="form-control ckeditor" id="slider_text_2" type="text" rows="5" cols="50" name="slider_text_2" placeholder="Enter 2st Slider text" > {{isset($data->slider_text_2)?$data->slider_text_2:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="slider_text_3">3st Slider text</label>
                  <textarea class="form-control ckeditor" id="slider_text_3" type="text" rows="5" cols="50" name="slider_text_3" placeholder="Enter 3st Slider text" > {{isset($data->slider_text_3)?$data->slider_text_3:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading">Services Section heading</label>
                  <input class="form-control" id="services_heading" type="text"  name="services_heading" placeholder="Enter Service Section heading"   value="{{isset($data->services_heading)?$data->services_heading:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc">Services Section heading description</label>
                  <textarea class="form-control" id="services_desc" type="text" rows="3"  name="services_desc" placeholder="Enter Service Section heading description" > {{isset($data->services_desc)?$data->services_desc:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="services_icon_1">1st Service icon (Class only)</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_1" type="text"  name="services_icon_1" placeholder="Enter 1st Service icon (Class only)" value="{{isset($data->services_icon_1)?$data->services_icon_1:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_1">1st Service heading </label>
                  <input class="form-control" id="services_heading_1" type="text"  name="services_heading_1" placeholder="Enter 1st Service heading " value="{{isset($data->services_heading_1)?$data->services_heading_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_1">1st Service slug</label>
                  <input class="form-control" id="services_slug_1" type="text"  name="services_slug_1" placeholder="Enter services_slug_1" value="{{isset($data->services_slug_1)?$data->services_slug_1:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_1">1st Service description</label>
                  <input class="form-control" id="services_desc_1" type="text"  name="services_desc_1" placeholder="Enter services_desc_1" value=" {{isset($data->services_desc_1)?$data->services_desc_1:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_2">2nd Service icon (Class only)</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_2" type="text"  name="services_icon_2" placeholder="Enter 2nd Service icon (Class only)" value="{{isset($data->services_icon_2)?$data->services_icon_2:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_2">2nd Service heading</label>
                  <input class="form-control" id="services_heading_2" type="text"  name="services_heading_2" placeholder="Enter 2nd Service heading" value="{{isset($data->services_heading_2)?$data->services_heading_2:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_2">2nd Service slug</label>
                  <input class="form-control" id="services_slug_2" type="text"  name="services_slug_2" placeholder="Enter 2nd Service slug" value="{{isset($data->services_slug_2)?$data->services_slug_2:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_2">3rd Service description</label>
                  <input class="form-control" id="services_desc_2" type="text"  name="services_desc_2" placeholder="Enter 2nd Service description"  value="{{isset($data->services_desc_2)?$data->services_desc_2:""}}"  >
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_3">3rd Service icon (Class only)</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_3" type="text"  name="services_icon_3" placeholder="Enter 3rd Service icon (Class only)" value=" {{isset($data->services_icon_3)?$data->services_icon_3:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_3">3rd Service heading</label>
                  <input class="form-control" id="services_heading_3" type="text"  name="services_heading_3" placeholder="Enter 3rd Service heading" value=" {{isset($data->services_heading_3)?$data->services_heading_3:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_slug_3">3rd Service slug</label>
                  <input class="form-control" id="services_slug_3" type="text"  name="services_slug_3" placeholder="Enter 3rd Service slug" value="{{isset($data->services_slug_3)?$data->services_slug_3:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_3">3rd Service description</label>
                  <input class="form-control" id="services_desc_3" type="text"  name="services_desc_3" placeholder="Enter 3rd Service description" value="{{isset($data->services_desc_3)?$data->services_desc_3:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_4">4th Service icon (Class only)</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_4" type="text"  name="services_icon_4" placeholder="Enter 4th Service icon (Class only)" value="{{isset($data->services_icon_4)?$data->services_icon_4:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_4">4th Service heading</label>
                  <input class="form-control" id="services_heading_4" type="text"  name="services_heading_4" placeholder="Enter 4th Service heading" value=" {{isset($data->services_heading_4)?$data->services_heading_4:""}}">
                </div>

                 <div class="form-group pt-2">
                  <label for="services_slug_4">4th Service slug</label>
                  <input class="form-control" id="services_slug_4" type="text"  name="services_slug_4" placeholder="Enter 4th Service slug" value="{{isset($data->services_slug_4)?$data->services_slug_4:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_4">4th Service description</label>
                  <input class="form-control" id="services_desc_4" type="text"  name="services_desc_4" placeholder="Enter 4th Service description" value="{{isset($data->services_desc_4)?$data->services_desc_4:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_5">5th Service icon (Class only)</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_5" type="text"  name="services_icon_5" placeholder="Enter 5th Service icon (Class only)" value="{{isset($data->services_icon_5)?$data->services_icon_5:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_5">5th Service heading</label>
                  <input class="form-control" id="services_heading_5" type="text"  name="services_heading_5" placeholder="Enter 5th Service heading" value=" {{isset($data->services_heading_5)?$data->services_heading_5:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_5">5th Service slug</label>
                  <input class="form-control" id="services_slug_5" type="text"  name="services_slug_5" placeholder="Enter 4th Service slug" value=" {{isset($data->services_slug_5)?$data->services_slug_5:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_5">5th Service description</label>
                  <input class="form-control" id="services_desc_5" type="text"  name="services_desc_5" placeholder="Enter 5th Service description" value=" {{isset($data->services_desc_5)?$data->services_desc_5:""}}">
                </div>


                <div class="form-group pt-2">
                  <label for="services_icon_6">6th Service icon (Class only)</label><a  style="float:right" target="_blank" href="https://linearicons.com/free">Get Icon HTML Code From here</a>
                  <input class="form-control" id="services_icon_6" type="text"  name="services_icon_6" placeholder="Enter 6th Service icon (Class only)" value="{{isset($data->services_icon_6)?$data->services_icon_6:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_heading_6">6th Service heading</label>
                  <input class="form-control" id="services_heading_6" type="text"  name="services_heading_6" placeholder="Enter 6th Service heading" value=" {{isset($data->services_heading_6)?$data->services_heading_6:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="services_slug_6">6th Service slug</label>
                  <input class="form-control" id="services_slug_6" type="text"  name="services_slug_6" placeholder="Enter 6th Service slug" value=" {{isset($data->services_slug_6)?$data->services_slug_6:""}}">
                </div>

                <div class="form-group pt-2">
                  <label for="services_desc_6">6th Service description</label>
                  <input class="form-control" id="services_desc_6" type="text"  name="services_desc_6" placeholder="Enter 6th Service description" value="{{isset($data->services_desc_6)?$data->services_desc_6:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_heading">About Company heading</label>
                  <input class="form-control" id="company_heading" type="text"  name="company_heading" placeholder="Enter About Company heading" value="{{isset($data->company_heading)?$data->company_heading:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_heading_desc">About Company heading description</label>
                  <input class="form-control" id="company_heading_desc" type="text"  name="company_heading_desc" placeholder="Enter About Company heading description" value="{{isset($data->company_heading_desc)?$data->company_heading_desc:""}}">
                </div>
                <div class="form-group pt-2">
                  <input class="inputfile" id="file-2" type="file" name="image" accept="image/*">
                  <label class="btn-primary" for="file-2"> <i class="mdi mdi-upload"></i><span>About Company Image</span></label>
                  <a  target="_blank" href='{{ url('uploaded/' . $data->company_image) }}'>old image here</a>
{{--                  <img title="Smiley face" src="{{ url('uploaded/' . $data->company_image) }}" width="150px" ></img>--}}
                </div>

                <div class="form-group pt-2">
                  <label for="company_image_alt"> Image alt</label>
                  <input class="form-control" id="company_image_alt" type="text" name="company_image_alt" placeholder="Enter Alt Keywords"  value="{{isset($data->company_image_alt)?$data->company_image_alt:""}}" >
                </div>

                <div class="form-group pt-2">
                  <label for="company_desc">About Company description</label>
                  <input class="form-control" id="company_desc" type="text"  name="company_desc" placeholder="Enter About Company description" value="{{isset($data->company_desc)?$data->company_desc:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_1">Accounting item 1</label>
                  <input class="form-control" id="company_item_1" type="text"  name="company_item_1" placeholder="Enter Accounting item 1" value=" {{isset($data->company_item_1)?$data->company_item_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_per_1">Accounting item 1 Per(%)</label>
                  <input class="form-control" id="company_item_per_1" type="number" min="1"  max="100"  name="company_item_per_1" placeholder="Enter Accounting item 1 Per(%)" value="{{isset($data->company_item_per_1)?$data->company_item_per_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_2">Accounting item 2</label>
                  <input class="form-control" id="company_item_2" type="text"  name="company_item_2" placeholder="Enter Accounting item 2" value=" {{isset($data->company_item_2)?$data->company_item_2:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="company_item_per_2">Accounting item 2 Per(%)</label>
                  <input class="form-control" id="company_item_per_2" type="number"  min="1" max="100"   name="company_item_per_2" placeholder="Enter Accounting item 2 Per(%)" value="{{isset($data->company_item_per_2)?$data->company_item_per_2:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_heading">Success Section heading</label>
                  <input class="form-control" id="success_heading" type="text"  name="success_heading" placeholder="Enter Success Section heading" value=" {{isset($data->success_heading)?$data->success_heading:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_heading_desc">Success Section heading description</label>
                    <textarea class="form-control ckeditor" id="success_heading_desc" type="text"  name="success_heading_desc" placeholder="Enter 1st Success section heading description" > {{isset($data->success_heading_desc)?$data->success_heading_desc:""}}</textarea>
{{--                  <input class="form-control" id="success_heading_desc" type="text"  name="success_heading_desc" placeholder="Enter Success Section heading description" value="{{isset($data->success_heading_desc)?$data->success_heading_desc:""}}">--}}
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_1">1st Success section heading</label>
                  <input class="form-control" id="success_head_1" type="text"  name="success_head_1" placeholder="Enter 1st Success section heading" value="{{isset($data->success_head_1)?$data->success_head_1:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_1">1st Success section heading description</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_1" type="text"  name="success_head_desc_1" placeholder="Enter 1st Success section heading description" > {{isset($data->success_head_desc_1)?$data->success_head_desc_1:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_2">2nd Success section heading</label>
                  <input class="form-control" id="success_head_2" type="text"  name="success_head_2" placeholder="Enter 2nd Success section heading" value=" {{isset($data->success_head_2)?$data->success_head_2:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_2">2nd Success section heading description</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_2" type="text"  name="success_head_desc_2" placeholder="Enter 2nd Success section heading description" > {{isset($data->success_head_desc_2)?$data->success_head_desc_2:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_3">3rd Success section heading</label>
                  <input class="form-control" id="success_head_3" type="text"  name="success_head_3" placeholder="Enter 3rd Success section heading" value=" {{isset($data->success_head_3)?$data->success_head_3:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_3">3rd Success section heading description</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_3" type="text"  name="success_head_desc_3" placeholder="Enter 3rd Success section heading description" > {{isset($data->success_head_desc_3)?$data->success_head_desc_3:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="services">4th Success section heading</label>
                  <input class="form-control" id="success_head_4" type="text"  name="success_head_4" placeholder="Enter 4th Success section heading" value=" {{isset($data->success_head_4)?$data->success_head_4:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_4">4th Success section heading description</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_4" type="text"  name="success_head_desc_4" placeholder="Enter 4th Success section heading description" > {{isset($data->success_head_desc_4)?$data->success_head_desc_4:""}}</textarea>
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_5">5th Success section heading</label>
                  <input class="form-control" id="success_head_5" type="text"  name="success_head_5" placeholder="Enter 5th Success section heading" value="{{isset($data->success_head_5)?$data->success_head_5:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_5">5th Success section heading description</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_5" type="text"  name="success_head_desc_5" placeholder="Enter 5th Success section heading description" > {{isset($data->success_head_desc_5)?$data->success_head_desc_5:""}}</textarea>
                </div>

                <div class="form-group pt-2">
                  <label for="success_head_6">6th Success section heading</label>
                  <input class="form-control" id="success_head_6" type="text"  name="success_head_6" placeholder="Enter 6th Success section heading" value="{{isset($data->success_head_6)?$data->success_head_6:""}}">
                </div>
                <div class="form-group pt-2">
                  <label for="success_head_desc_6">6th Success section heading description</label>
                  <textarea class="form-control ckeditor" id="success_head_desc_6" type="text"  name="success_head_desc_6" placeholder="Enter 6th Success section heading description" > {{isset($data->success_head_desc_6)?$data->success_head_desc_6:""}}</textarea>
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