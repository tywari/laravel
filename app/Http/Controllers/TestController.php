<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
    {
      $pdf = PDF::loadFile(public_path().'/tst.html');
      return $pdf->stream('invoice.pdf');
      // return view('pdf.invoice');
    }

public function convertCurrency($amount, $from, $to){

	$data = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=$from&to=$to");

	preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);

	$converted = preg_replace("/[^0-9.]/", "", $converted[1]);

	return number_format(round($converted, 3),2);

  }
}
