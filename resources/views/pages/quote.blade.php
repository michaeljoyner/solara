@extends('base')

@section('head')
  <meta property="CSRF-token" content="{{ Session::token() }}"/>
@stop
@section('content')
<script type="text/template" id="progressTemplate">
    <p class="fum_name_title">File: <span class="fum_filename"></span></p>
    <div class="fum_imagebox">
        <img class="fum_fileimg" src="images/document-icon.png" alt="" width="100px" height="100px">
    </div>
    <div class="fum_infobox">
        <p>Status: <span class="fum_status">uploading</span></p>
        <div class="fum_progressbar_outer"><div class="fum_progressbar_inner"></div></div>
        <div class="fum_cancelbtn btn btn-info btn-xs">cancel</div>
    </div>
</script>
    <script type="text/template" id="errorTemplate">
        <p class="fum_message"></p>
        <span class="fum_close-btn"><span class="glyphicon glyphicon-remove"></span></span>
    </script>
@include('partials.topheader')
<header class="main-header">
    <img src="images/drawing.png" alt="logo" class="logo-small">
    <h1 class="products-title">Get a Quote</h1>
</header>
{!! Form::open(['route' => 'quoterequest', 'id' => 'quote-form']) !!}
<div class="row">
    <div class="col-sm-5">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" name="contact_person" placeholder="Contact Person" class="form-control"/>
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-5">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email address" class="form-control"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-5">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
            <input type="text" name="country" placeholder="Country" class="form-control"/>
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-5">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input type="text" name="phone" placeholder="Skype contact/Phone number" class="form-control"/>
        </div>
    </div>
</div>
<!-- textarea for message_body -->
<div class="form-group">
    {!! Form::label('message_body', 'What kind of products would you like to source?') !!}
    {!! $errors->first('message_body', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('message_body', Input::old('message_body'), ['class' => 'form-control']) !!}
</div>
<div class="row">
    <div class="col-sm-offset-1 col-sm-9 file-select-area">
    @if(Session::has('quoteUploadErrors'))
        @foreach(Session::get('quoteUploadErrors') as $uploadError)
            <p class="text-danger">{{ $uploadError }}</p>
        @endforeach
    @endif
        <label for="quote_files">
            If you have an existing logo, or if you have any images you want to share with us, please upload them here.<span class="file-browse-btn">Browse files</span>
            <input type="file" multiple="true" name="quote_uploads[]" class="form-control" id="quote_files"/>
        </label>
    </div>
</div>
<div id="quote-files-upload-progress-box"></div>
<!-- submit form -->
<div class="form-group submit-group">
    {!! Form::submit('Request Quote', ['class' => 'form-control btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@include('partials.footer')
@stop

@section('bodyscripts')
<script src="{{ asset('js/uploadi.min.js') }}"></script>
<script>
    function showTitle() {
        var title = document.querySelector(".products-title");
        title.style.transform = "rotateX(0deg)";
        title.style.webkitTransform = "rotateX(0deg)";
    }
    window.addEventListener('load', showTitle, false);
</script>
<script>
var uploadManager = {
    form: document.getElementById('quote-form'),

    elems: {
        fileInput: document.getElementById('quote_files'),
        progressBox: document.getElementById('quote-files-upload-progress-box')
    },

    fileUploadManager: null,

    setFUMS: function() {
        uploadManager.fileUploadManager = new FileUploadManager(uploadManager.elems.fileInput, '/quoteuploads', uploadManager.elems.progressBox, 'progressTemplate', 'autouploads', false);
    },

    preSubmitHook: function() {
        if(uploadManager.fileUploadManager.supported) {
            uploadManager.form.onsubmit = function() {
                uploadManager.elems.fileInput.disabled = true;
                return true;
            }
        }
    },

    init: function() {
        uploadManager.setFUMS();
        uploadManager.preSubmitHook();
    }
}
uploadManager.init();
showTitle();
</script>
@stop