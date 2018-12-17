<?php
    /**
     * Created by PhpStorm.
     * User: carmigna
     * Date: 31/08/2018
     * Time: 16:49
     */

    class formulaire
    {
        // déclaration des données membre
        private  $_method = "POST";  // l'attribut method du formulaire
        private  $_action ;          // l'attribut action du formulaire
        private  $_name;             // l'attribut name du formulaire
        private  $_id ;              // l'attribut id du formulaire
        private  $_class;            // l'attribut class du formulaire
        private  $_enctype;          // l'attribut enctype du formulaire
        private  $_collectionObjet =  array(); // collection d'objet qui compose le formulaire

        // définition des méthodes
        public function __construct(string $method,string $action,string $enctype=null,string $name=null,string $id=null,string $class=null)
        {
            $this->_method=$method;
            $this->_action=$action;
            $this->_name=$name;
            $this->_id=$id;
            $this->_class=$class;
            $this->_enctype=$enctype;
        }

        public function addObjet(objetForm $Objet)   // permet d'ajouter un objet de formulaire à la collection
        {
            array_push($this->_collectionObjet, $Objet);
        }

        public function writeForm()     // renvoi une chaine contenant le code HTML5 du formulaire et de ces objets
        {
            $name = (is_null($this->_name)) ? '' : 'name="'.$this->_name.'"';
            $id = (is_null($this->_id)) ? '' : 'id="'.$this->_id.'"';
            $class = (is_null($this->_class)) ? '' : 'class="'.$this->_class.'"';
            $enctype = (is_null($this->_enctype)) ? '' : 'enctype="'.$this->_enctype.'"';

            $texte="<form method=\"$this->_method\" action=\"$this->_action\"  $enctype $name $id $class>";
            foreach ($this->_collectionObjet as $val)
            {
                $texte.=$val->returnHTML();
                $texte.="<br />";
            }
            $texte.="</form>";
            return $texte;
        }
    }

?>