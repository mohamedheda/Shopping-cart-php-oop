<?php
class cart_Item {
    //propertis
    private Product $product;
    private int $quantity;

    //constructor
    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    //getter and setter
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct($product)
    {
        $this->product = $product;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    // function to increase quantity
    public function increaseQuantity($amount = 1){
        if($this->getQuantity()+$amount>$this->getProduct()->getAvailableQuantity()){
            throw new Exception("num of product can't be more than ".$this->getProduct()->getAvailableQuantity());
        }
        else {
            $this->quantity +=$amount;
        }
    }
    // function to decrease quantity
    public function decreaseQuantity($amount = 1)
    {
        if($this->getQuantity()-$amount<1){
            throw new Exception("num of product can't be less than one  ");
        }else {
            $this->quantity-=$amount;
        }

    }
}