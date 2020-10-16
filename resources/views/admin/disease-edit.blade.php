@extends('layouts.admin', ['pageHeader' => 'Disease Edit'])
@section('head-section')

<link rel="stylesheet" href="{{asset('trumbowyg/dist/ui/trumbowyg.min.css')}}">
@endsection

@section('content')
<div class="row">
    <!-- [ stiped-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Oral Diseases</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Name</label>
                        </div>
                        <div class="col-sm-9">                                       
                            <input type="text" class="form-control mob_no" data-mask="9999-999-999" autocomplete="off" maxlength="12">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Description</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea class="editor">
                                abc
                            </textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Statistics</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea class="editor">
                            </textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Causes</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea class="editor">
                            </textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Symptoms</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea class="editor">
                            </textarea>
                        </div>
                    </div>

                    
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Prevention</label>
                        </div>
                        <div class="col-sm-9">
                            <textarea class="editor">
                            </textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ stiped-table ] end -->
</div>
@endsection

@section('footer-section')

<script src="{{asset('trumbowyg/dist/trumbowyg.min.js')}}"></script>

<script>
$( document ).ready(function() {
    $('.editor').trumbowyg();
});
</script>
@endsection