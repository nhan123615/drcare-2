@extends('layouts.admin', ['pageHeader' => 'Disease Edit'])
@section('head-section')

<link rel="stylesheet" href="css/wmwysiwygeditor.css" type="text/css" media="screen" />
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
                            <div id="wmwysiwyg-basic-use"></div>
                          {{--   <textarea id="tinymce-editor" class="trumbowyg-textarea" tabindex="-1" style="height: 42px;">
                            </textarea> --}}
              </textarea>

                            <input type="text" class="form-control mob_no" data-mask="9999-999-999" autocomplete="off" maxlength="12">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Description</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control phone" data-mask="9999-9999" autocomplete="off" maxlength="9">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Statistics</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control telphone_with_code" data-mask="(99) 9999-9999" autocomplete="off" maxlength="14">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Causes</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control us_telephone" data-mask="(999) 999-9999" autocomplete="off" maxlength="14">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Symptoms</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control us_telephone" data-mask="(999) 999-9999" autocomplete="off" maxlength="14">
                        </div>
                    </div>

                    
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label class="col-form-label">Prevention</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control us_telephone" data-mask="(999) 999-9999" autocomplete="off" maxlength="14">
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

<script type="text/javascript" src="js/wmwysiwygeditor.js"></script>

<script>
$( document ).ready(function() {
    $('#wmwysiwyg-with-options').wmwysiwyg({
    toolbar_class: 'text-center bg-primary',
    toolbar_btn_size: 'sm',
    toolbar_btn_class: 'btn-primary',
    height: 300,
    btns: [
        'fullScreen',
        'formatting', 'fontSize',
        'bold', 'italic', 'underline', 
        'foreColor', 'backColor',
        'link', 'insertImage', 'createTable',
        'textAlignment',
        'indent', 'outdent', 
        'ul', 'ol', 'hr',
        'removeFormat',
    ],
});
});
</script>
@endsection