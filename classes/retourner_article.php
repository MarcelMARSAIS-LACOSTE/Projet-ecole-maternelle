<?php
class inputText 
{
    // déclaration des données membre
    private $_placeholder;
    private $_label;
    private $_required;
    private $_minlenght;
    private $_maxlenght;

    // définition des méthodes
    public function __construct($placeholder, $name,$id,$label=null,$class=null,$required=false,$min=null,$max=null)
    {
        parent::__construct("text", $name,$id,$class);
        $this->_placeholder=$placeholder;
        $this->_label=$label;
        $this->_required=$required;
        $this->_minlength=$min;
        $this->_maxlength=$min;
    }

    public function returnHTML() // return le code HTML5 de l'objet de formulaire
    {
        $minlength = (is_null($this->_minlenght)) ? '' : 'minlength="'.$this->_minlength.'"';
        $maxlength = (is_null($this->_maxlenght)) ? '' : 'maxlength="'.$this->_maxlength.'"';
        $class = (is_null($this->_tabAttrib['class'])) ? '' : 'class="'.$this->_tabAttrib['class'].'"';
        $required = ($this->_required) ? 'required' : '';

        $label = (is_null($this->_label)) ? '' : '<label for="'.$this->_tabAttrib['id'].'">'.$this->_label.'</label><br />';
        $type =$this->_tabAttrib["type"];
        $id=$this->_tabAttrib["id"];
        $name=$this->_tabAttrib["name"];

        $texte=<<<idtexte
                     $label
                    <input type="$type" name="$name" id="$id" $required  
                        $minlength $maxlength 
                        placeholder="$this->_placeholder" $class /><br />
idtexte;

        return $texte;
    }
}