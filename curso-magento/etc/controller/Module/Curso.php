<?php
namespace Hiberus\curso\Model;
class Curso extends \Magento\Framework\Model\AbstractModel implements \hiberus\Curso\Api\Data\CursoInterface {
    /**
     * @inerhitDoc
     */
    protected  function  _construct()
    {
     $this->_init(\Hiberus\Curso\Module\ResoruceModel);
    }
    public function getEntityId(){

    }

    /**
     * @inerhitDoc
     * @return mixed
     */
    public function getEntity()
    {
        return null;
    }

    /**
     * @inerhitDoc
     * @return mixed
     */
    public function getNOmbre()
    {
        // TODO: Implement getNOmbre() method.
    }

    /**
     * @inerhitDoc
     * @param $nombre
     * @return mixed
     */
    public function setNombre($nombre)
    {
        // TODO: Implement setNombre() method.
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        // TODO: Implement getApellido() method.
    }

    /**
     * @param $apellido
     * @return mixed
     */
    public function setApellido($apellido)
    {
        // TODO: Implement setApellido() method.
    }
}
