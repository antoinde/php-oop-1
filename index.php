<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
    <!-- BOOTSTRAP LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    /*
    Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
    metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    */
    class Movie {
        // Variabili d'istanza (o attributi)
        public $titolo;
        public $genere;
        public $anno;
        public $descrizione;
        public $regista;
        // Costruttore
        function __construct($_titolo,$_genere) {
            $this->titolo=$_titolo;
            $this->genere=$_genere;
        }
        // Metodi
        public function setAnno($anno){
            $this->anno=$anno;
        }
        public function setDescrizione($descrizione){
            $this->anno=$descrizione;
        }
        public function setRegista($regista){
            $this->anno=$regista;
        }
    }
    // Esegui costruttori
    $La_Matassa=new Movie('La Matassa','Comico');
    $Il7el8= new Movie("Il 7 e l'8 ",'Comico');
    $NeverBackDown= new Movie('Never Back Down','Azione, Sportivo');
    // Esegui metodi
    $La_Matassa->anno=2009;
    $La_Matassa->descrizione="Il duo comico siciliano Ficarra e Picone alle prese con una matassa da sbrogliare: i difficili rapporti tra due cugini.";
    $La_Matassa->regista='Gianbattista Avellino';
    ?>


    <div class="container">
        <h1>MOVIES:</h1>
        <div class="row">
            <div class="col border border-secondary rounded my-2">
                <?php
                    var_dump($La_Matassa);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col border border-secondary rounded my-2">
                <?php
                    var_dump($Il7el8);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col border border-secondary rounded my-2">
                <?php
                    var_dump($NeverBackDown);
                ?>
            </div>
        </div>
    </div>
</body>

</html>