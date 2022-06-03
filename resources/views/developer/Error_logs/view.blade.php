@extends('developer.master')
@section("content")

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="invoice-title">
                                    <h2><div class="badge  @if($error->status=="fix") badge-success @endif  @if($error->status=="new") badge-danger @endif  @if($error->status=="ignore")  badge-warning @endif badge-shadow">Error #{{$error->id}}</div></h2>
                                    <div class="invoice-number">
                                        <div class="badge  @if($error->status=="fix") badge-success @endif  @if($error->status=="new") badge-danger @endif  @if($error->status=="ignore")  badge-warning @endif badge-shadow">{{$error->status}}</div> {{$error->created_at->DiffforHumans()}}
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-3">
                                        <form method="POST" action="/developer/change_status">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$error->id}}">
                                            <strong>Change Status</strong>
                                            <select  onchange="this.form.submit()" class="form-control  error-status" name="status" data-link="/developer/change_status/{{$error->id}}"style="width: 100px;">
                                                <option value=""   >Select Status</option>
                                                <option {{$error->status=="new"?"selected":''}} value="new" >New</option>
                                                <option {{$error->status=="fix"?"selected":''}} value="fix" >Fix</option>
                                                <option {{$error->status=="ignore"?"selected":''}} value="ignore"  >Ignore</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Error type:</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->error_type}}:<br>
                                        </address>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Error code</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->error_code}}:<br>
                                        </address>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Current url:</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->current_url}}<br>
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Previous url:</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->previous_url}}<br>
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Request Parameters:</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->request_params}}:<br>
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Browser</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->browser}}:<br>
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Device </strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->device}}:<br>
                                        </address>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-3">
                                        <address>
                                            <strong>Platform</strong><br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 ">
                                        <address>
                                            {{$error->platform}}:<br>
                                        </address>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <address>
                                           {{$error->user_agent}}<br>
                                        </address>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <strong>Error Message:</strong><br>
                                            {{$error->error_msg}}:<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <strong>Error Trace:</strong><br>
                                            {{$error->error_trace}}:<br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                       id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                       id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
