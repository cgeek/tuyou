<?php
class Config
{
	private $_data = null;
	
	public function __construct(array $data = array())
	{
		$this->_data = $data;
	}

	public function get($name) {
		if (null == $name) {
			return $this->_data;
		}
		


	}


	public function __get($name) {
		return get($name);
	}

	public function set($name,$value) {
		
	}
}
