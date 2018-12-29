@extends('layouts/default', ['title' => 'About'])

@section('content')
   <div class="container">
   	<h1>What is {{ config('app.name') }}?</h1>
   	<p>{{ config('app.name') }} is a clone app from <a href="https://laramap.com" target="_blank">Laramap.com</a></p>
   	<div class="row">
   		<div class="col-md-6">
   			<p class="alert alert-warning">
   				<strong><i class="fa fa-exclamation-triangle"></i>This app has been build by <a href="https://twitter.com/zoubinnaba">@zoubinnaba</a> for learning purposes.</strong>
   			</p>
   		</div>
   	</div>
   	<p>Feel free to help to improve the <a href="https://github.com/zoubinnaba/Laracate">Code source</a></p>

   	<hr>
   	<h2>What is laramap?</h2>
   	<p>Laramap is the websit which {{ config('app.name') }} was inspired :).</p>
   	<p>More info<a href="https://laramap.com">here</a></p>

   	<hr>

   	<h2>Which tools and services are used in {{ config('app.name') }}?</h2>
   	<p>Basicaly it's build on Laravel &amp; Bootstrap.But there's a buch of service used for email and other sections.</p>
   	<ul>
   		<li>Laravel</li>
   		<li>Bootstrap</li>
   		<li>Google Maps</li>
   		<li>Mandrill</li>
   		<li>Gravatar</li>
   		<li>Antony Martin's Markdown Package</li>
   		<li>Heroku</li>
   	</ul>	
   </div>
@stop