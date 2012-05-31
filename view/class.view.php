<?php

class vista {

    private $header;
    private $footer;

    public function __construct() {
        $this->header = file_get_contents(ROOT.'/view/header.php');
        $this->footer = file_get_contents(ROOT.'/view/footer.php');
    }

    public function get_content(){
        $output = $this->header;
        
        $db = new MySQL();
        
        $consulta = $db->consulta("SELECT * FROM users");
        
        //check if we have records
        if($db->num_rows($consulta)>0){
        	
        	$table = new HTML_Table(null, null, 1, 5, 5 );
        
        	while($resultados = $db->fetch_array($consulta)){
        	
        		//add row
        		$table ->addRow();     	
        		$table -> addCell($resultados ['id']);//add cell id
        		$table -> addCell($resultados ['nombre']);	//add cell nombre
        	}
        	
        	$output .=  $table->display();
        }
    
        $output .= $this->footer;
        return $output;
    }

}
?>
