<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('pdf_model');
    }

    public function index() {
//        set other dir, or set as default
//        $this->html2pdf->setPath('./otro/');
//        set other file name, or set as default
//        the file name without extension
//        $this->html2pdf->setFilename('myFile');
        /**
         * check out, DomPdf docuemntation for more details
         */
//        by default the paper is portrait
//        $this->html2pdf->setOrientation('landscape');
//        by default the paper is A4
//        $this->html2pdf->setPaper_size('legal');
        
//        content to print 
        $data["title"] = "Your Title.......";
//        establish content
        $this->pdf->setHtml($this->load->view('test', $data, true));
        
        //save document
        if($this->pdf->createPdf('save')) 
        {
//            show pdf
            $this->pdf->showPdf();
        }
    }
    public function elecciones() {
        $data["title"] = "Eleciones 2016";
//        establish content
        $this->pdf->setOrientation('landscape');
//        by default the paper is A4
//        $this->pdf->setPaper_size('legal');
        $this->pdf->setHtml($this->load->view('eleciones', $data, true));
        
        //save document
        if($this->pdf->createPdf('save')) 
        {
//            show pdf
            $this->pdf->showPdf();
        }
        
        
    }
}
