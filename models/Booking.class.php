<?php
class Booking
{
	private $id;
	private $customer_name;
	private $customer_tel;
	private $date;
	private $comments;


	public function getId()
	{
		return $this->id;
	}

	public function getCustomerName()
	{
		return $this->customerName;
	}
	public function setCustomer_name($customer_name)
	{
		$this->customer_name = $customer_name;
	}	

	public function getCustomerTel()
	{
		return $this->customerTel;
	}
	public function setCustomer_tel($customer_tel)
	{
		$this->customer_tel = $customer_tel;
	}	

	public function getDate()
	{
		return $this->date;
	}

		public function getComments()
	{
		return $this->comments;
	}
	public function setComments($comments)
	{
		$this->comments = $comments;
	}
}
?>