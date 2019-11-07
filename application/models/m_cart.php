<?php
class m_cart
{
    public $ID;
    public $Name;
    public $Img;
    public $Quantity;
    public $Price;
    public $Total_Price;

    public function __construct($ID = '', $Name = '', $Img = '', $Quantity = '', $Price = '', $Total_Price = '')
    {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Img = $Img;
        $this->Quantity = $Quantity;
        $this->Price = $Price;
        $this->Total_Price = $Total_Price;
    }

    /**
     * Get the value of ID
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of ID
     *
     * @return  self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Get the value of Name
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @return  self
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get the value of Img
     */
    public function getImg()
    {
        return $this->Img;
    }

    /**
     * Set the value of Img
     *
     * @return  self
     */
    public function setImg($Img)
    {
        $this->Img = $Img;

        return $this;
    }

    /**
     * Set the value of Quantity
     *
     * @return  self
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    /**
     * Get the value of Price
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Set the value of Price
     *
     * @return  self
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Get the value of Total_Price
     */
    public function getTotal_Price()
    {
        return $this->Total_Price;
    }

    /**
     * Set the value of Total_Price
     *
     * @return  self
     */
    public function setTotal_Price()
    {
        $this->Total_Price = $this->Quantity * $this->Price;

        return $this;
    }
}