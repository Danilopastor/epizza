<?php
namespace App\Controller;
use App\Sistema\Sistema;
use App\Sistema\Restricted;
use App\Sistema\Date;
class Plans
{
	private $sys;
	private $data = array();
	private $plans;
	private $date;
	public function __construct()
	{
		
		$restricted = new Restricted;
		
		$this->sys = new Sistema;
		$this->sys->Token = $_SESSION['token'];
		
		$this->date = new Date;
		
		$this->setContent();
		$this->Render();
	}
	private function Listplans()
	{
		$this->plans = $this->sys->Request('admin/plans','GET');
		
		foreach($this->plans as $key => $plans){
			$return_plan[$key]['id']          = $plans->id;
			$return_plan[$key]['name']        = $plans->name;
			$return_plan[$key]['price']       = $plans->price;
			$return_plan[$key]['price_value'] = $plans->price_value;
			$return_plan[$key]['period']      = $plans->period;
		}
		return $return_plan;
		
	}
	private function setContent()
	{
		$this->sys->data['title'] = "Planos - Epizza Painel Adminstrativo";
		$this->sys->data['message_title'] = "Planos";
		$this->sys->data['active'] = "plan";
		$this->sys->data['plans'] = $this->Listplans();
	}
	private function Render(){		
		$this->sys->View(array('template_header','plans','template_footer'));
	}
}