<?php

interface Product{
    public function getOrder($product) :string;
    public function checkingIfProductExist($product) :void;
    public function deliverProduct($product) :string;
}