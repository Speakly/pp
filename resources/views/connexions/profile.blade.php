@extends('layouts.inscription')

@section('css')
    <link href="{{ URL::asset('assets/css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/dropzone.css')}}" rel="stylesheet" type="text/css">
@stop

@section('content')

    <div class="st-pusher" id="content" style="margin-left:0px !important">

        <div class="st-content">
            <!-- extra div for emulating position:fixed of the menu -->
            <div class="st-content-inner">
                <h1 class="text-center">Bienvenue sur Profilplayers Basket</h1>
                <div class="container">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">
                            <!--<a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>-->
                            <i class="fa fa-fw fa-info-circle"></i> Profil
                        </div>
                        <br>
                        <p class="text-center inscription-txt">Veuillez remplir tous les champs vides afin de compléter votre profil. <br>Vous pourrez ensuite renseigner votre prochain match.</p>
                        <br>
                        <div class="panel-body">
                            {!! Form::open([
                                'method' => 'POST',
                                'action' => 'ConnexionController@updateProfile',
                                'enctype' => 'multipart/form-data'
                                ])
                            !!}
                                <div class='row inscription-avatar'>
                                    <div class="col-md-2">
                                         <div id="profile-picture" class="profile-picture dropzone text-center">
                                            <input name="logo" type="file">
                                            <div class="dz-default dz-message"><span>Cliquez ou déposez l'image ici</span></div>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            
                                            <!--<img src="{{ URL::asset('assets/images/plus.png') }}" >-->
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-4 text-center">
                                        <label>Votre date de naissance*</label>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    {!! Form::selectRange('number', 1, 31, 1, ['class' => 'form-control form-control-default']) !!}
                                                </div>
                                                <div class="col-md-4">
                                                    {!! Form::selectMonth('month', 1, ['class' => 'form-control form-control-default']) !!}
                                                </div>
                                                <div class="col-md-4">
                                                    {!! Form::selectYear('year', 1945, 2015, 2000, ['class' => 'form-control form-control-default']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::text('name', $user->name , array('placeholder' => 'Votre nom', 'class' => 'form-control form-control-default')) !!}
                                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::text('surname', $user->surname , array('placeholder' => 'Votre prénom', 'class' => 'form-control form-control-default')) !!}
                                            {!! $errors->first('surname', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::text('email', $user->email , array('placeholder' => 'Votre email', 'class' => 'form-control form-control-default')) !!}
                                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::text('taille', null, array('placeholder' => 'Votre taille (cm)*', 'class' => 'form-control form-control-default required')) !!}
                                            {!! $errors->first('taille', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::text('club', null, array('placeholder' => 'Votre club*', 'id' => 'q', 'class' => 'form-control form-control-default required')) !!}
                                            {!! Form::hidden('club_id', null, array('id' => 'i')) !!}
                                            {!! $errors->first('club', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::select('poste', ['' => 'Séléctionner votre poste*', 'Meneur' => 'Meneur', 'Arrière' => 'Arrière', 'Ailier' => 'Ailier', 'Ailier Fort' => 'Ailier Fort', 'Pivot' => 'Pivot'], null, ['class' => 'form-control-default form-control']) !!}
                                            {!! $errors->first('poste', '<small class="help-block">:message</small>') !!}
                                        </div>
                                    </div>
                                </div> 
                                <div class="text-center inscription-btn btn-submit-form">
                                    {!! Form::submit('Suivant', ['class' => 'btn btn-skin']) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    
                    <!--<div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">
                            <div class="pull-right">
                                <a href="#" class="btn btn-primary btn-xs">Add <i class="fa fa-plus"></i></a>
                            </div>
                            <i class="icon-user-1"></i> Friends
                        </div>
                        <div class="panel-body">
                            <ul class="img-grid">
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/guy-6.jpg" alt="image" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/dropzone.js')}}"></script>
    <script type="text/javascript">
        $(function()
        {
            $( "#q" ).autocomplete({
                source: "search/club",
                minLength: 3,
                select: function(event, ui) {
                    $('#q').val(ui.item.value);
                    $('#i').val(ui.item.id);
                }
            });
        });
        
        if( $('.dropzone').length > 0 ) {
        Dropzone.autoDiscover = false;
        //console.log($('[name=_token').val());
        Dropzone.options.profilePicture = {
            paramName: "logo", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            parallelUploads: 2, //limits number of files processed to reduce stress on server
            addRemoveLinks: true,
            acceptedFiles: 'image/png,image/jpeg',
            accept: function(file, done) {
                // TODO: Image upload validation
                done();
            },
            sending: function(file, xhr, formData) {
                //console.log($('input[name="_token"]').val());
                // Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.
                formData.append("_token", $('input[name="_token"]').val());
                formData.append("id", $('input[name="id"]').val()); // Laravel expect the token post value to be named _token by default
            },
            init: function() {
                this.on("success", function(file, response) {
                    // On successful upload do whatever :-)
                });
            }
        };
        $("#file-submit").dropzone({
            url: "upload",
            addRemoveLinks: true
        });

        $("#profile-picture").dropzone({
            url: "upload"
        });
    }



    </script>
@stop