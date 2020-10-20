<?php
class MyCircle
{
    public $radius;

    
    function __construct($radius)
    {
        $this->radius = $radius;
    }
    function __desctuct ()
    {
    }
    function get_Radius()
    {
        return $this->radius;
    }
    function set_Radius ($radius)
    {
        $this->radius = $radius;
    }
    function get_Area()
    {
        return $area = 3.1416*(2*$this->radius);
    }
}
$Circle1 = new MyCircle(4);
$Circle2 = new MyCircle(2);
$Circle2->set_Radius(5);
echo "First Circle : ".$Circle1->get_Area();
echo "<br>";
echo "Second Circle : ".$Circle2->get_Area();

?>
