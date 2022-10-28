<?php
class Product {
    //properites
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;
    //constructor
    public function __construct($id, $title, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }
    //setter and getter for properties
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }
    public function setAvailableQuantity($id)
    {
        $this->availableQuantity = $availableQuantity;
    }

    //function to add to cart need (cart object,quantity)
    public function addToCart(Cart $cart,int $quantity){
        return $cart->addProduct($this,$quantity);
    }
    //function to remove from cart need (cart object)
    public function removeFromCart(Cart $cart){
        return $cart->removeProduct($this);
    }
}
