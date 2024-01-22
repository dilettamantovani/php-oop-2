<?php class Giochi_Generici
{
    public $image;
    public $Name;
    public $Type;
    public $Material;
    public $Price;

    public function getgentoy()
    {
        $result = $this->image . "<img src='' alt=''>" . $this->Name . "<br>" . $this->Type . "<br>" .  $this->Material . "<br>" .  $this->Price;
        return $result;
    }

    public function __construct($immagine, $Nome, $Tipo, $Materiale, $Prezzo)
    {
        $this->image = $immagine;
        $this->Name = $Nome;
        $this->Type = $Tipo;
        $this->Material = $Materiale;
        $this->Price = $Prezzo;
    }
} ?>

<?php class Giochi_Per_Cani extends Giochi_Generici
{
    public $Suitable;
    public function __construct($immagine, $Nome, $Tipo, $Materiale, $Prezzo, $Adatto)
    {
        parent::__construct($immagine, $Nome, $Tipo, $Materiale, $Prezzo);
        $this->Suitable = $Adatto;
    }
    public function getgentoy()
    {
        $Fathertoyinfo = parent::getgentoy();
        $result = $Fathertoyinfo . $this->Suitable;
        return $result;
    }
} ?>
<?php class Giochi_Per_Gatti extends Giochi_Generici
{
    public $Suitable;
    public function __construct($immagine, $Nome, $Tipo, $Materiale, $Prezzo, $Adatto)
    {
        parent::__construct($immagine, $Nome, $Tipo, $Materiale, $Prezzo);
        $this->Suitable = $Adatto;
    }
    public function getgentoy()
    {
        $Fathertoyinfo = parent::getgentoy();
        $result = $Fathertoyinfo . $this->Suitable;
        return $result;
    }
} ?>


 <?php class Cibo_Per_Animali
    {
        public $Type;
        public $Company;
        public $Ingredients;
        public $Price;

        public function getfood()
        {
            $result = $this->Type . "<br>" . $this->Company . "<br>" .  $this->Ingredients . "<br>" .  $this->Price;
            return $result;
        }

        public function __construct($Nome, $Marca, $Ingredienti, $Prezzo)
        {
            $this->Type = $Nome;
            $this->Company = $Marca;
            $this->Ingredients = $Ingredienti;
            $this->Price = $Prezzo;
        }
    } ?>

<?php class Cibo_Per_Cani extends Cibo_Per_Animali
{
    public $For;
    public function __construct($Nome, $Marca, $Ingredienti, $Prezzo, $Adatto)
    {
        parent::__construct($Nome, $Marca, $Ingredienti, $Prezzo);
        $this->For = $Adatto;
    }
    public function getfood()
    {
        $Fatherfoodinfo = parent::getfood();
        $result = $Fatherfoodinfo . $this->For;
        return $result;
    }
} ?>

<?php class Cibo_Per_Gatti extends Cibo_Per_Animali
{
    public $For;
    public function __construct($Nome, $Marca, $Ingredienti, $Prezzo, $Adatto)
    {
        parent::__construct($Nome, $Marca, $Ingredienti, $Prezzo);
        $this->For = $Adatto;
    }
    public function getfood()
    {
        $Fatherfoodinfo = parent::getfood();
        $result = $Fatherfoodinfo . $this->For;
        return $result;
    }
} ?>
