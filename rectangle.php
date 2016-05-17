<?php 

class Rectangle
{
	protected $width;
	protected $height;

	public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height  = $height;
    }

	public function area()
	{
		
		$area = $this->width * $this->height;
		return $area; 

	}

	public function perimeter()
	{
		$perimeter = $this->height * 4;
		return $perimeter;
	}

}



