<?php

class Curso extends AbstractDb implements \Hiberus\Curso\api\Data\CursoInterface
{
/**
 * @return mixed
 */
    public function getEntity()
    {
        // TODO: Implement getEntity() method.
    }

    /**
     * @param $entityId
     * @return mixed
     */
    public function setEntityId($entityId)
    {
        // TODO: Implement setEntityId() method.
    }

    /**
     * @return mixed
     */
    public function getNOmbre()
    {
        // TODO: Implement getNOmbre() method.
    }

    /**
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

protected function __construct(Context\Framework\Model\ResourceModel\Db\Context $context,\Magento\Framework\EntityManager\MetadataPool  $metadataPool,
                               Magento\Framework\EntityManager\EntityManager  $entityManager,
                                $connectionName=null){
                                $this->metadataPool=$metadataPool;
                                $this->entityManager=$entityManager;
                                parent::__construct($context,$connectionName);
                                }
}
protected function _construct(){
    return $this->_init(\Hiberus\Curso\api\Data\CursoInterface::TABLE_NAME,\Hiberus\Curso\api\Data\CursoInterface::COLUMNS_ID);

}
public function save(Magento\Catalog\Model\AbstractModel $object){
    $this->entitManager->save($object);
    return $this;
}
public function load(Magento\Catalog\Model\AbstractModel $object,$value,$field=null){
    return  $this->entityManager->load($object,$value);
}
public function delete(Magento\Catalog\Model\AbstractModel $object){
return    $this->entityManager->delete($object);
}
