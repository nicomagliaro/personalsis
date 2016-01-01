<?php
class indexController extends reportesController
{
    private $_reportes;
    private $_data;
    public $_pdf;

    public function __construct()
    {
        parent::__construct();

        if(!Session::get('autenticado')){
            $this->redireccionar('error/access/5050');
        }

        $this->_reportes = $this->loadModel('index');
        $this->_data = array();
        $this->getLibrary('class.fpdf');
        $this->_pdf =& new FPDF( 'P', 'mm', 'A4' );

    }

    public function index(){}

    public function reportes() {
        $this->_view->setCss(array('reportes'));
        $this->_view->setJs(array('form', 'prueba'));
        $this->_view->assign('titulo', 'Reportes');
        $this->_view->assign('report_list', $this->_reportes->getReportList());
        $this->_view->renderizar('index', 'reportes');
    }

    public function pdfPorNumeroDeId() {

        $this->_data = $this->_reportes->getReportByNum(1);
        //print_r($this->_data);echo "<br>" .count($this->_data);exit;
        $htmlTable='<br><TABLE>
        <TR>
        <TD>FECHA</TD>
        <TD>RECIBIDO</TD>
        <TD>REMITIDO</TD>
        <TD>REF</TD>
        <TD>DETALLE</TD>
        </TR>';

        for($i=0; $i < count($this->_data); $i++)
        {
            $htmlTable.=  "<TR>"
                        . "<TD>" . $this->_data[$i]['fecha_mov'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['recibido'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['remitido'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['referente'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['detalle'] . "</TD>"
                        . "</TR>";
        }

        $htmlTable.='</TABLE>';
        $this->_pdf->AliasNbPages();
        $this->_pdf->AddPage();
        if($this->_data[0]['tipo'] == 'EXPEDIENTE')
        {
            $c = $this->_data[0]['exp_caracteristica']."-";
        }else{
            $c = '';
        }
        $this->WriteHTML( "<BR><BR><BR><BR>" . $this->_data[0]['tipo'] . "  "
                           . $c
                           . $this->_data[0]['tipo_num'] . "/"
                           . $this->_data[0]['year'] . "</p> "
                           .$htmlTable);
        $this->_pdf->Output();
    }

    public function getRemitoEntrada()
    {
        $this->_data = $this->_reportes->getEntradaByDate($this->getParam('fecha'));
        if(empty($this->_data))
        {
            $this->_view->assign('_mensaje','No hay datos disponibles para este reporte');
        }
        $htmlTable='<TABLE>
                        <TR>
                        <TD>DOCUMENTO</TD>
                        <TD>REFERENTE</TD>
                        <TD>INGRESO</TD>
                        <TD>CAUSANTE</TD>
                        <TD>DETALLE</TD>
                        </TR>';

        for($i=0; $i < count($this->_data); $i++)
        {
            $htmlTable.=  "<TR>"
                        . "<TD>" . $this->_data[$i]['tipo'] . "</TD>"
                        . "<TD>" . $this->getRef($this->_data, $i) . "</TD>"
                        . "<TD>" . $this->_data[$i]['fecha_mov'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['referente'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['detalle'] . "</TD>"
                        . "</TR>";
        }

        $htmlTable.='</TABLE>';

        $this->_pdf->AliasNbPages();
        $this->_pdf->AddPage();
        $this->WriteHTML("<BR><BR>" . $htmlTable);
        $this->_pdf->Output('reporte.pdf','D');
    }

    public function getRemitoSalida()
    {
        $this->_data = $this->_reportes->getEntradaByDate($this->getParam('fecha'));
        //print_r($this->_data);exit;
        if(empty($this->_data))
        {
            $this->_view->assign('_mensaje','No hay datos disponibles para este reporte');
        }
        $htmlTable='<TABLE>
                        <TR>
                        <TD>DOCUMENTO</TD>
                        <TD>REFERENTE</TD>
                        <TD>INGRESO</TD>
                        <TD>CAUSANTE</TD>
                        <TD>DETALLE</TD>
                        </TR>';

        for($i=0; $i < count($this->_data); $i++)
        {
            $htmlTable.=  "<TR>"
                        . "<TD>" . $this->_data[$i]['tipo'] . "</TD>"
                        . "<TD>" . $this->getRef($this->_data, $i) . "</TD>"
                        . "<TD>" . $this->_data[$i]['fecha_mov'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['referente'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['detalle'] . "</TD>"
                        . "</TR>";
        }

        $htmlTable.='</TABLE>';

        $this->_pdf->AliasNbPages();
        $this->_pdf->AddPage();
        $this->WriteHTML("<BR><BR>" . $htmlTable);
        $this->_pdf->Output('reporte.pdf','D');
    }

    public function remitoLegajos()
    {
        $this->_data = $this->_reportes->getRemitoLegajo(
                                            $this->getParam('from'),
                                            $this->getParam('to'),
                                            $this->getParam('estado')
                                        );

        if(empty($this->_data))
        {
            $this->_view->assign('_mensaje','No hay datos disponibles para este reporte');
        }
        $htmlTable='<TABLE>
                        <TR>
                        <TD>LEG.</TD>
                        <TD>NOMBRE</TD>
                        <TD>APELLIDO</TD>
                        </TR>';

        for($i=0; $i < count($this->_data); $i++)
        {
            $htmlTable.=  "<TR>"
                        . "<TD>" . $this->_data[$i]['legajo'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['apellido'] . "</TD>"
                        . "<TD>" . $this->_data[$i]['nombre'] . "</TD>"
                        . "</TR>";
        }

        $htmlTable.='</TABLE>';

        $this->_pdf->AliasNbPages();
        $this->_pdf->AddPage();
        $this->WriteHTML("<BR><BR>" . $htmlTable);
        $this->_pdf->Output('reporte.pdf','D');
    }

}

?>
