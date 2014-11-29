<?php
/************************************************************************************************/
/**
 * @Controlador: Reportes PDF
 * @Fecha Creacion: 20-11-2014
 * @Autor: Cristian Vidal
 */
/************************************************************************************************/

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reportes extends CI_Controller
{
    public function __construct()
      {
        parent::__construct();   
        //cargamos libreria html2pdf
        $this->load->library('html2pdf');
        //cargamos modelo datos_profesionales
        $this->load->model('profesional_model');
        //cargamos modelo resportes
        $this->load->model('reportes_model');
        //cargamos libreria de sesion
        $this->load->library(array('session','form_validation'));
        //cargamos funciones para uso de funciones especificas
        $this->load->helper(array('url','form','mihelpers'));
      }
      
    /************************************************************************************************/
    /* Funcion Index Reportes */
    /************************************************************************************************/
    public function index()
    {
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
        {
         
            /************************************************************************************************/
            /* Cargamos los datos de session                                                                */
            /************************************************************************************************/
            $idusername                = $this->session->userdata('idusuario');
            $data['perfil']            = $this->session->userdata('perfil');
            $data['username']          = $this->session->userdata('username');
            $data['institucion']       = $this->session->userdata('institucion');
            /************************************************************************************************/
            /* Cargamos los datos del profesional                                                                */
            /************************************************************************************************/
            $data['datos_profesional'] = $this->profesional_model->datosProfesional($idusername);
            $data['titulo']            = 'Historia Clinica';
            $data["profesional"]       = ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof']       = $data['datos_profesional']->imagen;
            /************************************************************************************************/
            /* Cargamos interfaz grafica                                                                */
            /************************************************************************************************/
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/reportes.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
        }
        else
        {
            redirect(base_url() . 'login/logout');
        }
    }
    
    
    /************************************************************************************************/
    /* @Funcion que permite crear una carpeta / folder donde se guardara el pdf creado                                                                */
    /************************************************************************************************/
    function createFolder()
    {
        if(!is_dir("./files"))
        {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }
    
    
    /************************************************************************************************/
    /* @Funcion que permite crear reporte listado pacientes                                         */
    /************************************************************************************************/
    function ReportlistadoPacientes()
    {
    
        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        $ins            = $this->reportes_model->datosInstitucion($this->session->userdata('idinstitucion'));
        $nombre         = $ins->nom_institucion;
        $rut            = $ins->rut;
        $razon_social   = $ins->razon_social;
        $direccion      = $ins->direccion;
        $telefono       = $ins->telefono1;
        $correo         = $ins->correo;
        
        //obtener fecha-hora segun zona horaria
        date_default_timezone_set('America/Santiago');
        $fecha_creacion = date("d-m-Y H:i:s");
        $fecha          = date("d-m-Y");
        //creamos arreglos con la informacion del reporte
        $data = array(
            'titulo'        => 'Reporte Listado Pacientes',
            'nombre'        => $nombre,
            'rut'           => $rut,
            'razon'         => $razon_social,
            'direccion'     => $direccion,
            'telefono'      => $telefono,
            'correo'        => $correo,
            'fecha_creacion'=> $fecha_creacion,
            'fecha'         => $fecha,
            'cantidad'      => $this->reportes_model->cantidadPacientes($this->session->userdata('idinstitucion')),    
            'pacientes'     => $this->reportes_model->listadoPacientesInstitucion($this->session->userdata('idinstitucion'))
        );
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('reportes_views/reporte_pacientes', $data, true)));
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            $this->show();
        }
    } 
    
    
    /************************************************************************************************/
    /* @Funcion que permite crear reporte listado HCE                                               */
    /************************************************************************************************/
    function ReportlistadoHce()
    {
    
        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        $ins            = $this->reportes_model->datosInstitucion($this->session->userdata('idinstitucion'));
        $nombre         = $ins->nom_institucion;
        $rut            = $ins->rut;
        $razon_social   = $ins->razon_social;
        $direccion      = $ins->direccion;
        $telefono       = $ins->telefono1;
        $correo         = $ins->correo;
        
        //obtener fecha-hora segun zona horaria
        date_default_timezone_set('America/Santiago');
        $fecha_creacion = date("d-m-Y H:i:s");
        $fecha          = date("d-m-Y");
        //creamos arreglos con la informacion del reporte
        $data = array(
            'titulo'        => 'Reporte Listado HCE',
            'nombre'        => $nombre,
            'rut'           => $rut,
            'razon'         => $razon_social,
            'direccion'     => $direccion,
            'telefono'      => $telefono,
            'correo'        => $correo,
            'fecha_creacion'=> $fecha_creacion,
            'fecha'         => $fecha,
            'cantidad'      => $this->reportes_model->cantidadHce($this->session->userdata('idinstitucion')),    
            'lista_hce'     => $this->reportes_model->listadoHce($this->session->userdata('idinstitucion'))
        );
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('reportes_views/reporte_listado_hce', $data, true)));
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            $this->show();
        }
    }
    
        /************************************************************************************************/
    /* @Funcion que permite crear reporte listado HCE                                               */
    /************************************************************************************************/
    function ReportlistadoConsultasMedicas()
    {
    
        //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();
        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');
        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');
        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'portrait');
        
        //datos que queremos enviar a la vista, lo mismo de siempre
        $ins            = $this->reportes_model->datosInstitucion($this->session->userdata('idinstitucion'));
        $nombre         = $ins->nom_institucion;
        $rut            = $ins->rut;
        $razon_social   = $ins->razon_social;
        $direccion      = $ins->direccion;
        $telefono       = $ins->telefono1;
        $correo         = $ins->correo;
        
        //obtener fecha-hora segun zona horaria
        date_default_timezone_set('America/Santiago');
        $fecha_creacion = date("d-m-Y H:i:s");
        $fecha          = date("d-m-Y");
        //creamos arreglos con la informacion del reporte
        $data = array(
            'titulo'        => 'Reporte Listado HCE',
            'nombre'        => $nombre,
            'rut'           => $rut,
            'razon'         => $razon_social,
            'direccion'     => $direccion,
            'telefono'      => $telefono,
            'correo'        => $correo,
            'fecha_creacion'=> $fecha_creacion,
            'fecha'         => $fecha,
            'cantidad'      => $this->reportes_model->cantidadConsultasMedicas($this->session->userdata('idinstitucion')),    
            'List_CM'       => $this->reportes_model->listadoConsultasMedicas($this->session->userdata('idinstitucion'))
        );
        
        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('reportes_views/reporte_consultas_medicas', $data, true)));
        //si el pdf se guarda correctamente lo mostramos en pantalla
        if($this->html2pdf->create('save')) 
        {
            $this->show();
        }
    }
    
    /************************************************************************************************/
    /* @Funcion que permite generar reporte pdf - informacion completa paciente                     */
    /************************************************************************************************/ 
    function dataPaciente(){
      
       $this->form_validation->set_rules('txtRutPaciente','rut paciente','required|trim|');
        
        if ($this->form_validation->run() == FALSE) {
           
           echo "ERROR: Problemas al generar PDF - Información paciente";
           
        } else {
            
            //establecemos la carpeta en la que queremos guardar los pdfs,
            //si no existen las creamos y damos permisos
            $this->createFolder();
            //importante el slash del final o no funcionará correctamente
            $this->html2pdf->folder('./files/pdfs/');
            //establecemos el nombre del archivo
            $this->html2pdf->filename('test.pdf');
            //establecemos el tipo de papel
            $this->html2pdf->paper('a4', 'portrait');

            //datos que queremos enviar a la vista, lo mismo de siempre
            $ins            = $this->reportes_model->datosInstitucion($this->session->userdata('idinstitucion'));
            $nombre         = $ins->nom_institucion;
            $rut            = $ins->rut;
            $razon_social   = $ins->razon_social;
            $direccion      = $ins->direccion;
            $telefono       = $ins->telefono1;
            $correo         = $ins->correo;

            //obtener fecha-hora segun zona horaria
            date_default_timezone_set('America/Santiago');
            $fecha_creacion = date("d-m-Y H:i:s");
            $fecha          = date("d-m-Y");
            
            
            //Validar antecedentes Sociales
            $arr_ant_soc = $this->reportes_model->antSocialesPersonales($this->input->post('txtRutPaciente'));
            $arr_ant_soc = $arr_ant_soc!="false" ? $arr_ant_soc->ant_social : "Sin Información";
            //Validar Antecedentes Familiares
            $arr_ant_fam = $this->reportes_model->ant_familiares($this->input->post('txtRutPaciente'));
            $arr_ant_fam = $arr_ant_fam!="false" ? $arr_ant_fam->ant_familiar :"Sin Información";
            //Validar Personas de contacto
            $arr_per_cont = $this->reportes_model->ant_personas_contacto($this->input->post('txtRutPaciente'));
            $arr_per_cont = isset($arr_per_cont) ? $arr_per_cont : "0";
            
            //creamos arreglos con la informacion del reporte
            $data = array(
                'titulo'            => 'Reporte Informacion Paciente',
                'nombre'            => $nombre,
                'rut'               => $rut,
                'razon'             => $razon_social,
                'direccion'         => $direccion,
                'telefono'          => $telefono,
                'correo'            => $correo,
                'fecha_creacion'    => $fecha_creacion,
                'fecha'             => $fecha,   
                'paciente'          => $this->reportes_model->datosFiliatoriosPaciente($this->input->post('txtRutPaciente')),
                'antSocialesPersonales'=> $arr_ant_soc,
                'ant_familiares'    => $arr_ant_fam,
                'personas_contacto' => $arr_per_cont
            );
            //hacemos que coja la vista como datos a imprimir
            //importante utf8_decode para mostrar bien las tildes, ñ y demás
            $this->html2pdf->html(utf8_decode($this->load->view('reportes_views/reporte_datos_paciente', $data, true)));
            //si el pdf se guarda correctamente lo mostramos en pantalla
            if($this->html2pdf->create('save')) 
            {
                $this->show();
            }
        }
   }
    
    
    
    /************************************************************************************************/
    /* @Funcion que permite descargar el reporte pdf                                                                */
    /************************************************************************************************/
    public function downloadPdf()
    {
        //si existe el directorio
        if(is_dir("./files/pdfs"))
        {
            //ruta completa al archivo
            $route = base_url("files/pdfs/test.pdf"); 
            //nombre del archivo
            $filename = "test.pdf"; 
            //si existe el archivo empezamos la descarga del pdf
            if(file_exists("./files/pdfs/".$filename))
            {
                header("Cache-Control: public"); 
                header("Content-Description: File Transfer"); 
                header('Content-disposition: attachment; filename='.basename($route)); 
                header("Content-Type: application/pdf"); 
                header("Content-Transfer-Encoding: binary"); 
                header('Content-Length: '. filesize($route)); 
                readfile($route);
            }
        }    
    }
    
    function show()
    {
        if(is_dir("./files/pdfs"))
        {
            $filename = "test.pdf"; 
            $route = base_url("files/pdfs/test.pdf"); 
            if(file_exists("./files/pdfs/".$filename))
            {
                header('Content-type: application/pdf'); 
                readfile($route);
            }
        }
    }
    
   
    /*
    public function mail_pdf()
    {
        //Load the library
        $this->load->library('html2pdf');
        $this->html2pdf->folder('./assets/pdfs/');
        $this->html2pdf->filename('email_test.pdf');
        $this->html2pdf->paper('a4', 'portrait');
        $data = array(
        'title' => 'PDF Created',
        'message' => 'Hello World!'
        );
        //Load html view
        $this->html2pdf->html($this->load->view('pdf', $data, true));
        //Check that the PDF was created before we send it
        if($path = $this->html2pdf->create('save')) {
        $this->load->library('email');
        $this->email->from('your@example.com', 'Your Name');
        $this->email->to('someone@example.com');
        $this->email->subject('Email PDF Test');
        $this->email->message('Testing the email a freshly created PDF');
        $this->email->attach($path);
        $this->email->send();
        echo $this->email->print_debugger();
        }
    } */
    
  }
/************************************************************************************************/
/* Fin Controlador Reportes PDF */
/************************************************************************************************/
  
  