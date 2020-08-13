<?php

namespace App\src\model;

class Comment 
{
    //*************************Attributs*******************/

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $createdAt;

      /**
     * @var bool
     */
    private $flag;

    //*************************Constructeur****************/

    /**
     * Comment constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->hydrate($data);
    }

    //*************************Getters*********************/

    public function getId()
    {
        return $this->id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function isFlag()
    {
        return $this->flag;
    }


    //*************************Setters*********************/
  
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    /**
     * @param $data
     */
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
           
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}