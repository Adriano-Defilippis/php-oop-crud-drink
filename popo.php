<?php

  class Prodotto {

    private $id;
    private $nome;
    private $marca;
    private $prezzo;

    public function __construct($row){

      $this -> setId($row['id']);
      $this -> setNome($row['nome']);
      $this -> setMarca($row['marca']);
      $this -> setPrezzo($row['prezzo']);
      $this -> setCategoryProd($row['category_prod']);
    }

    public function getId(){

      return $this -> id ;
    }

    public function setId($id){

      $this -> id = $id;
    }

    public function getNome(){

      return $this -> nome;
    }

    public function setNome($nome){

      $this -> nome = $nome;
    }

    public function getMarca(){

      return $this -> marca;
    }

    public function setMarca($marca){

      $this -> marca = $marca;
    }

    public function getPrezzo(){

      return $this -> prezzo;
    }

    public function setPrezzo($prezzo){

      $this -> prezzo = $prezzo;
    }

    public function getCategoryProd(){

      return $this -> category_prod;
    }

    public function setCategoryProd($category_prod){

      $this -> category_prod = $category_prod;
    }


    public function __toString(){

      return  "Id: "
             . $this -> getId() . " - "
             . "Nome: "
             . $this -> getNome() . " - "
             . "Marca: "
             . $this -> getMarca() . " - "
             . "Prezzo: "
             . $this -> getPrezzo() . " - "
             . "Categoria prod: "
             . $this -> getCategoryProd();

    }
  }

 ?>
