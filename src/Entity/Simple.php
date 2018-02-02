<?php

namespace App\Entity;


use Olla\Flow\Annotation\Resource;
use Olla\Flow\Annotation\Property;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @Resource(
 *     operations={
 *          "search"={"method"="GET"},
 *          "collection"={"method"="GET"},
 *          "item"={"method"="GET"},
 *          "create"={"method"="POST"},
 *          "update"={"method"="PUT"},
 *          "delete"={"method"="DELETE"}
 *     },
 *     translation={
 *         "class"="App\Entity\CategoryTranslation",
 *         "property"="translations"
 *     }, 
 *     access={"public"},
 *     serializer={
 *         "read" = "read",
 *         "write" = "write",
 *     },
 *     attributes={
 *         "item_identifier" = "id"
 *     }
 * )
 * @ORM\Table(name="simple")
 * @ORM\Entity
 */
class Simple
{
   

   /**
	 * @ORM\Id
	 * @ORM\Column(name="id", type="guid")
	 * @ORM\GeneratedValue(strategy="UUID")
     * @Property(identifier=true, serializer={"save", "read"})
	 */
    public $id;

   
    /**
     * @ORM\Column(name="title", type="string")
     * @Groups({"save","read"})
     * @Property(search="partial")
     */
    public $title;
    
    /**
     * @ORM\Column(name="content", type="text")
     * @Property(serializer={"save", "read"})
     */
    public $content;



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
