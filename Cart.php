<?php
class Cart {
    //properties
    private array $items = [];
    //getter and setter
    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }

    //function to add product 
    public function addProduct(Product $product,$quantity){
        $cart_item=$this->findCartItem($product->getId());
        if($cart_item==null){
            $cart_item=new cart_Item($product,$quantity);
            $this->items[$product->getId()]=$cart_item;
            return $cart_item;
        }else
        $cart_item->increaseQuantity($quantity);
    }
    //function to remove product 
    public function removeProduct(Product $product)
    {
        unset($this->items[$product->getId()]);
    }
    //function to find Cart Item  
    private function findCartItem(int $productId)
    {
        return $this->items[$productId] ?? null;
    }
    //function to get total quantity 
    public function getTotalQuantity(){
        $sum=0;
        foreach($this->items as $item){
            $sum+=$item->getQuantity();
        }
        return $sum;
    }
    //function to get total sum 
    public function getTotalSum(){
        $sum=0;
        foreach($this->items as $item){
        $sum+=$item->getQuantity()*$item->getProduct()->getPrice();
        }
        return $sum;
    }
}