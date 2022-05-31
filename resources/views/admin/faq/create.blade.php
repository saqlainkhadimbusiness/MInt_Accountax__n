@extends('layouts.admin.form')

@section('content')
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-border-color card-border-color-primary">
                    <div class="card-header card-header-divider">FAQ</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.faq.store') }}">
                            @csrf
                         
                                <div class="form-group pt-2">
                                    <label for="name">Question</label>
                                    <textarea class="form-control" id="name" type="text" name="Question" placeholder="Enter Services"
                                        required></textarea>

                                </div>
                                <div class="form-group pt-2">
                                    <label for="name">Answer</label>
                                    <textarea class="form-control" id="name" type="text" rows="5" cols="50" name="Answer" placeholder="Enter Services"
                                        required></textarea>
                                </div>
                                <button class="btn btn-space btn-primary btn-lg" type="submit">Save</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
