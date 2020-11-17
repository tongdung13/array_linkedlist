<?php


class Mylist
{
   const DEFAULT_CAPACITY = 10;
   public $size;
   public $elements;

   public function __construct()
   {
        $this->size = 0;
        $this->elements = [];
   }

   public function ArrayList($arr = "")
   {
       if (is_array($arr) == true){
           $this->elements = $arr;
       }else {
           $this->elements = array();
       }
   }

   public function add($index, $element)
   {
       if ($this->isInteger($index)){
           $newArrayList = array();
           for($i = 0; $i < $this->size(); $i++){
               if ($index != $i){
                   array_push($newArrayList,$this->elements[$i]);
               } else {
                   array_push($newArrayList, $element);
                   array_push($newArrayList, $this->elements[$i]);
               }
           }
       }
   }
    public function remove($index)
    {
        if ($this->isInteger($index)){
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++){
                if ($index != $i) {
                    $newArrayList[] = $this->get($i);
                    $this->elements = $newArrayList;
                } else {
                    die("ERROR in <ArrayList class='remove'></ArrayList> <br> Interge value reqquired");
                }
            }
        }
    }

    public function size()
    {
        return count($this->elements);
    }

    public function isInteger($toCheck){
       return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function CloneArr()
    {
        $Mylist = $this->elements;
        return $Mylist;
    }

    public function contains($obj)
    {
        for ($i = 0; $i < count($this->elements); $i++) {
            if ($obj == $this->elements[$i]){
                echo "true";
                return true;
            } else {
                echo "false";
                return false;
            }
        }
    }

    public function indexOff($obj)
    {
        for ($i = 0; $i < count($this->elements); $i++){
            if ($obj == $this->elements[$i]){
                return $i;
            }
        }
        return -1;
    }

    public function addLast($element)
    {
        array_push($this->elements, $element);
    }

    public function clear()
    {
        $this->elements = array();
    }

}