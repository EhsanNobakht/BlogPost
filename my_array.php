php 

class My_array{

    $my_array = [];

    

    
      Get the value of my_array
      
    public function getMy_array()
    {
        return $this-my_array;
    }

    
      Set the value of my_array
     
      @return  self
      
    public function setMy_array($my_array , $i)
    {
        $this-my_array[$i] = $my_array;

        return $this;
    }
}