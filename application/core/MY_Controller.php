<?php

/**
 * @Author: IanJayBronola
 * @Date:   2019-02-06 10:46:14
 * @Last Modified by:   IanJayBronola
 * @Last Modified time: 2019-02-06 14:51:17
 */
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH."reports\PIByPaymentModeChart.php";
require APPPATH."reports\PIByPaymentModeBarChart.php";
require APPPATH."reports\PIByLeadSourceLineChart.php";
require APPPATH."reports\PIByLeadSourceBarChart.php";

require APPPATH."reports\PIStatusPieChart.php";


class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
	}
	function put_contents($content,$contentHeader)
	{
		$vars = ['addStyles' => [],
				'addPlugins' => []];


		$content_vars = ['contentHeader' => $contentHeader,
							'content' => $content
						];



		$footer_vars = ['addScripts' => [],
						'right' => "Version 1",
						'left' => "<span class='text-blue'>Engtech Global Solutions Inc.</span> Copyright &copy; 2019"
						];
		$nav_vars 	= ['userPanel' => [],
						'searchBar' => false,
						'options' => ['Dashboard' => 
										['icon' => 'fa fa-dashboard', 
										'link' => base_url('dashboard')
											],
										'Reports' => 
										['icon' => 'fa fa-line-chart', 
										'link' => base_url('reports')
											]
									],
					];



		echo lte_load_view('header',$vars);
		echo lte_load_view('side_nav',$nav_vars);
		echo lte_load_view('content',$content_vars);
		echo lte_load_view('footer',$footer_vars);

		
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */