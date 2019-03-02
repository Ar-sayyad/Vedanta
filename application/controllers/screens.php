<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class screens extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->model('balco_model');
        $this->balco_model->is_logged_in(); 
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');        
         
    }
    
        public function index(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "Plant Screen >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);		
           }
        
        public function overallPlant(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "Plant Screen >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);	
        }
        
         /******540MW Unit #1***********/
        
        public function onefftBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Boiler.bmp";
            $this->load->view('balco/Screen',$data);          
        }
        
         public function onefftTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Turbine.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function onefftCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Condenser.bmp";
            $this->load->view('balco/Screen',$data);           
        }
        
        public function onefftHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Heaters.bmp";
            $this->load->view('balco/Screen',$data);        
        }
        
         public function onefftPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        /******540MW Unit #2***********/
        
          public function twofftBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Boiler.bmp";
            $this->load->view('balco/Screen',$data);             
        }
        
         public function twofftTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Turbine.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function twofftCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Condenser.bmp";
            $this->load->view('balco/Screen',$data);         
        }
        
        public function twofftHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Heaters.bmp";
            $this->load->view('balco/Screen',$data);           
        }
        
         public function twofftPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);           
        }
       
        /******540MW Unit #3***********/
        
          public function threefftBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);         
        }
        
         public function threefftTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function threefftCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);        
        }
        
        public function threefftHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);       
        }
        
         public function threefftPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);     
        }
        
         /******540MW Unit #4***********/
        
          public function fourfftBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);        
        }
        
         public function fourfftTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function fourfftCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function fourfftHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);         
        }
        
         public function fourfftPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
      
        
        /********1200 MW START***********/
        
        
         /******1200MW Unit #1***********/
        
        public function onetwhBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);         
        }
        
         public function onetwhTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);           
        }
        
        public function onetwhCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function onetwhHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
         public function onetwhPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);           
        }
        
        /******540MW Unit #2***********/
        
          public function twotwhBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);          
        }
        
         public function twotwhTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function twotwhCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function twotwhHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
         public function twotwhPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);           
        }
       
        /******540MW Unit #3***********/
        
          public function threetwhBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
         public function threetwhTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function threetwhCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function threetwhHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
         public function threetwhPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);           
        }
        
         /******540MW Unit #4***********/
        
          public function fourtwhBoiler(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Boiler";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
         public function fourtwhTurbine(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Turbine";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);        
        }
        
        public function fourtwhCondenser(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Condenser";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Condenser";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);            
        }
        
        public function fourtwhHeater(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Heater";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Heater";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);           
        }
        
         public function fourtwhPerformance(){
            $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Performance";
            $data['icons'] = "bubble_chart";            
            $data['path'] = "piadmin/images/screens/Overview.bmp";
            $this->load->view('balco/Screen',$data);           
        }
}
