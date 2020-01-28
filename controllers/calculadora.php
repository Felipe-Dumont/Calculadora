<?php


global $results;

switch ($_POST['sinal']) {
	case '+':
	$results = $_POST['num1'] + $_POST['num2'];
	break;

	case '-':
	$results = $_POST['num1'] - $_POST['num2'];
	break;

	case '*':
	$results = $_POST['num1'] * $_POST['num2'];
	break;

	case '/':
	$results = $_POST['num1'] / $_POST['num2'];
	break;

	default:
	$results = "";
	break;
}

require_once '../views/resultsCalc.html';