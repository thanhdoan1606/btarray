<?php
class ArrayList
{
    private $array = [];

    public function size()
    {
        return count($this->array);
    }

    public function insert($index,$obj)
    {
       
        array_push($this->array,$index,$obj);
    }

    public function remove($index)
    {
        if(isset($this->array[$index]))
        {
            array_splice($this->array,$index,1);
        }
    }
    
    public function addAll($index,$obj)
    {
        $this->array[] = $index;
        $this->array[]= $obj;
        array_push($this->array,$index,$obj);
    }

    public function get($index)
    {
        if (isset($this->array[$index]))
        {
            return $this->array[$index];
        }
        return NULL ;
    }

    public function add($array)
    {
        $this->array[] = $array;
    }

    public function sort()
    {
        $arr = [];
        return sort($arr);
    }
}
$ar = new ArrayList();
$ar->add('1','2','3');
$ar->add(4,5,6);
$ar->add(6,6,7);

echo $ar->size(). '<br>';
$ar->addAll(2,'hello').'<br>';
echo $ar->get(1).'<br>';
$ar->sort($ar);


?>