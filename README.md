# Library-DomPdf-to-CodeIgniter
library DomPdf to CodeIgniter

Generate pdf in CodeIgnaiter using library DomPdf

Installation

============

1.- copy the Pdf.php library into your libraries directory.
2.- Download domPDF from https://github.com/dompdf/dompdf
3.- copy the dompdf directory into your libraries directory alongside the pdf.php

Usage

=====

//action into controller

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
        $this->Pdf->setHtml($this->load->view('test', $data, true));
        
        //save document
        if($this->Pdf->createPdf('save')) 
        {
//            show pdf
            $this->Pdf->showPdf();
        }
    }

Help

====

For more information on how to use domPDF then please visit: [http://code.google.com/p/dompdf/wiki/Usage](http://code.google.com/p/dompdf/wiki/Usage)


License

=======

* CodeIgniter PDF Library - MIT License

* domPDF - GNU Lesser GPL


Credits

=======

* CodeIngiter Conversion - [Chris Harvey](http://www.chrisnharvey.com)

* domPDF - [The domPDF Team](http://code.google.com/p/dompdf/)
