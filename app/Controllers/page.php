<?php
namespace App\Controllers;
class Page extends BaseController
{
//  public function about()
//  {
//  echo "Ini halaman About";
//  }

public function about()
{
 return view('about', [
 'title' => 'Halaman Abot',
 'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
halaman ini.'
 ]);
}
public function artikel()
{
    return view('artikel', [
    'title' => 'Halaman artikel',
    'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
   halaman ini.'
    ]);
}
 public function contact()
 {
    // return view('contact');
    return view('contact', [
        'title' => 'Halaman contact',
        'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi 
       halaman ini.'
        ]);
 }
 public function faqs()
 {
 echo "Ini halaman FAQ";
 }
 public function tos()
{
 echo "ini halaman Term of Services";
}
}


