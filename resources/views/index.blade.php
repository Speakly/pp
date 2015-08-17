@extends('layouts.default')

@section('css')
@stop



@section('content')
<div id="homepage-background">
    <div class="container">
        <div class="row">
            <div class="col-md-7 homepage-text">
                <h1>Bienvenue sur Profilplayers Basket.</h1>
                <p>Profilplayers Basket vous permet de <strong>suivre vos performances</strong> tout au long de vos compétitions.<br> Vous renseigner votre club, vos matchs, vos analyses de matchs et vos performances seront enregistrées tout au long des saisons.</p>
            </div>
            <div class="col-md-5">
                <div id="homepage-connexion">
                    {!! Form::open([
                        'method' => 'POST',
                        'action' => 'ConnexionController@connexion'
                        ])
                    !!}
                    <div class="form-group">
                        {!! Form::email('email', null, array('placeholder'=>'Email', 'class' => 'form-control')) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password', array('placeholder'=>'Mot de passe', 'class' => 'form-control')) !!}
                        {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="text-center">
                        <div>
                            {!! Form::submit('Connexion', ['class' => 'homepage-btn']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div id="homepage-inscription">
                    {!! Form::open([
                        'method' => 'POST',
                        'action' => 'ConnexionController@inscription'
                        ])
                    !!}
                    <div class="form-group">
                        {!! Form::text('name', null, array('placeholder'=>'Nom', 'class' => 'form-control')) !!}
                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('surname', null, array('placeholder'=>'Prénom', 'class' => 'form-control')) !!}
                        {!! $errors->first('surname', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::email('email', null, array('placeholder'=>'E-mail', 'class' => 'form-control')) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password', array('placeholder'=>'Mot de passe', 'class' => 'form-control')) !!}
                        {!! $errors->first('passwrord', '<small class="help-block">:message</small>') !!}
                    </div><br/>
                    <div class="text-center">
                        <div>
                            {!! Form::submit('S\'inscrire sur Profilplayers', ['class' => 'homepage-btn']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="text-center" id="homepage-footer">
        
    </div>
</div>
@stop

@section('scripts')
@stop



