<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<style>
		div {
			font-size: 22px;
		}
	</style>
</head>
<body>
	<div>
		<?php
			if(DB::connection()->getPdo())
			{
				echo "Connexion réussie à la base de données"
				
