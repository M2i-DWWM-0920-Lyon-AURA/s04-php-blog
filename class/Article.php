<?php

// Classe
// Un "plan de construction" qui permet de définir une structure de données commune à tous les objets
// qui en sont dérivés. Cette classe définit les propriétés communes à tous les articles du blog,
// de sorte que chaque objet de classe Article soit une représentation fidèle d'un enregistrement
// contenu dans la table "articles" de la base de données
class Article
{
    // Propriétés
    // La liste des différentes propriétés communes à tous les objets issus de cette classe.
    // Elles sont toutes préfixées par "private" pour empêcher le code externe à la classe d'y accéder
    // directement (en lecture comme en écriture). On écrit des "getters" et des "setters" (des
    // méthodes qui permettent de récupérer ou de modifier la valeur d'une propriété, respectivement)
    // afin de contrôler la façon dont le reste de notre code y accède.
    private $id;
    private $title;
    private $summary;
    private $content;
    private $image;
    private $date;

    // Constructeur
    // Une méthode qui s'active automatiquement lorsqu'on crée un nouvel objet à partir de cette classe
    // Classiquement utilisé pour passer des propriétés au nouvel objet qu'on vient de créer,
    // auquel cas le constructeur permet de ranger les valeurs reçues dans les propriétés de l'objet
    public function __construct(
        int $id,
        string $title,
        string $summary,
        string $content,
        string $image,
        string $date
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->summary = $summary;
        $this->content = $content;
        $this->image = $image;
        $this->date = $date;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of summary
     */ 
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     *
     * @return  self
     */ 
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     * 
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}
