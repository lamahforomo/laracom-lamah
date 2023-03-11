@extends('layouts.defaults')
@section('content')
<div class="container">
    <h2>Qu'est-ce que Laracom</h2>
    <p>Laracom est une application clone de <a href="https://laramap.com" target="_blank">Laramap.com</a></p>
    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-success">
               <strong><i class="fa fa-code"></i>&nbsp;Cette application a été construite par <a href="https:://lamah.com">Lamah</a> à des fins d'apprentissage</strong>
            </p>
        </div>
    </div>
    <p>N'hésitez pas de m'aider à améliorer le <a href="https://github.com/lamahforomo/laracom-lamah.git"> code source.</a></p>

    <hr>
    <h2>Qu'est-ce que Laramap ?</h2>
    <p>Laramap est le site web dont Laracom s'est inspiré :).</p>
    <p>Plus d'infos <a href="https://laramap.com/p/about">ici</a></p>

    <hr>

    <h2>Quels outils et services sont utilisés dans Laracom ?</h2>

    <p>Fondamentalement, il est construit sur Laravel &amp; Bootstrap. Mais il existe un tas de services utilisés pour le courrier électronique et d'autres sections.</p>
    <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Antony Martin's Geolocation Package</li>
        <li>Michel Fortin's Markdown Parser Package</li>
        <li>Heroku</li>
    </ul>
</div>
@stop
