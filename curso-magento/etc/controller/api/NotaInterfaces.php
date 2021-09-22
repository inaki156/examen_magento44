<?php
namespace Hiberus\Curso\api\Data;

interface NotaInterfaces extends \Magento\Framework\Api\ExtensibleDataInterface
{
    const TABLE_NAME="hiberus_curso";
    const COLUMNS_ID ="entity_id";
    public function getEntity();
    public function setEntityId($entityId);
    public function getNOmbre();
    public function  setNombre($nombre);
    public function  getApellido();
    public function  setApellido($apellido);

}
