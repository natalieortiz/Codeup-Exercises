<?php 

class Rectangle
{
	private $width;
	private $height;

	public function __construct($width, $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }
    
	public function setHeight($height)
	{
		$this->height = $height;
	}

	public function setWidth($width)
	{
		$this->width = $width;
	}

	public function getHeight()
	{
	    return $this->height;
	}

	public function getWidth()
	{
		return $this->width;
	}

	public function area()
	{
		echo 'from rectangle';
		$area = $this->width * $this->height;
		return $area; 

	}

	public function perimeter()
	{
		$perimeter = $this->height * 4;
		return $perimeter;
	}

}



