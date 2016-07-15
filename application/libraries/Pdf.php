<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pdf {

    private $html = '';
    private $path = './files/pdfs/';
    private $filename = 'defaultFile.pdf';
    private $paper_size = 'a4';
    private $orientation = 'portrait';
    
    /**
     * Constructor
     *
     * @access	public
     * @param	array	initialization parameters
     */
    function Pdf($params = array()) {
        $this->CI = & get_instance();

        if (count($params) > 0) {
            $this->initialize($params);
        }

        log_message('debug', 'PDF Class Initialized');

//        create dir of the pdf
        $this->createFolder();
    }

    // --------------------------------------------------------------------

    /**
     * Initialize Preferences
     *
     * @access	public
     * @param	array	initialization parameters
     * @return	void
     */
    function initialize($params) {
        $this->clear();
        if (count($params) > 0) {
            foreach ($params as $key => $value) {
                if (isset($this->$key)) {
                    $this->$key = $value;
                }
            }
        }
    }

//    get concurrent path
    function getPath() {
        return $this->path;
    }

//    set custom path 
    function setPath($path) {
//        checks whether the directory
        $this->existDir($path);
    }

//    get concurrent content html
    function getHtml() {
        return $this->html;
    }

//    obtains the file name
    function getFilename() {
        return $this->filename;
    }

//    obtains the paper size
    function getPaper_size() {
        return $this->paper_size;
    }

//    obtains the paper orientation 
    function getOrientation() {
        return $this->orientation;
    }

    function setHtml($html = '') {
        $this->html = utf8_decode(stripslashes($html));
    }

    function setFilename($filename = '') {
        $this->filename = $filename . '.pdf';
    }

    function setPaper_size($paper_size = 'a4') {
        $this->paper_size = $paper_size;
    }

    function setOrientation($orientation = 'portrait') {
        $this->orientation = $orientation;
    }

    // --------------------------------------------------------------------

    /**
     * create dir
     * 
     * 
     */
    private function createFolder() {
//        crea una carpeta por defecto para los pdfs
//        verifica si la carpeta por defecto si no la crea
        if (!is_dir($this->path)) {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }

    /**
     * create dir
     * 
     * 
     */
    public function showPdf() {
        if ($this->existPdf()) {
            $route = $this->path . $this->filename;
            header('Content-type: application/pdf');
            readfile($route);
        } else {
            show_error('<a href="' . base_url() . '">El archivo PDF que quiere Mostar no existe.</a>');
        }
    }

    private function existPdf() {
        return file_exists($this->path . $this->filename);
    }

    private function existDir($customDir) {
//            asigna una carpeta personalizada para almacenas los pdfs
        if (is_dir($customDir)) {
            //                si el directorio existe asigna la ruta a la variable path
            //                para almacenar los pdfs
            $this->path = $customDir;
        }
    }

    /**
     * create dir
     * 
     * 
     */
    public function downloadPdf() {
//        print_r($this->path.$this->filename);
//        print_r(file_exists($this->path.$this->filename));
        //si existe el directorio
        if ($this->existPdf()) {
            //ruta completa al archivo
            $route = $this->path . $this->filename;
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header('Content-disposition: attachment; filename=' . basename($route));
            header("Content-Type: application/pdf");
            header("Content-Transfer-Encoding: binary");
            header('Content-Length: ' . filesize($route));
            readfile($route);
        } else {
            show_error('<a href="' . base_url() . '">El archivo PDF que quiere descargar no existe.</a>');
        }
    }


    // --------------------------------------------------------------------

    /**
     * Set html
     *
     * @access	public
     * @return	void
     */
    function html($html = "") {
        $this->html = utf8_decode(stripslashes($html));
    }

    // --------------------------------------------------------------------

    /**
     * Set path
     *
     * @access	public
     * @return	void
     */
    function folder($path) {
        $this->path = $path;
    }

    // --------------------------------------------------------------------

    /**
     * Set paper
     *
     * @access	public
     * @return	void
     */
    function paper($paper_size = NULL, $orientation = NULL) {
        $this->paper_size = $paper_size;
        $this->orientation = $orientation;
    }

    // --------------------------------------------------------------------

    /**
     * Create PDF
     *
     * @access	public
     * @return	void
     */
    function createPdf($mode = 'download') {

        if (is_null($this->html)) {
            show_error("HTML is not set");
        }

        if (is_null($this->path)) {
            show_error("Path is not set");
        }

        if (is_null($this->paper_size)) {
            show_error("Paper size not set");
        }

        if (is_null($this->orientation)) {
            show_error("Orientation not set");
        }

        //Load the DOMPDF libary
        require_once("dompdf/dompdf_config.inc.php");

        $dompdf = new DOMPDF();
        $dompdf->load_html($this->html);
        $dompdf->set_paper($this->paper_size, $this->orientation);
        $dompdf->render();

        if ($mode == 'save') {
            $this->CI->load->helper('file');
            if (write_file($this->path . $this->filename, $dompdf->output())) {
                return $this->path . $this->filename;
            } else {
                show_error("PDF could not be written to the path");
            }
        } else {

            if ($dompdf->stream($this->filename)) {
                return TRUE;
            } else {
                show_error("PDF could not be streamed");
            }
        }
    }

}

/* End of file Html2pdf.php */