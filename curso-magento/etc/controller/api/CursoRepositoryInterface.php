<?php

namespace Hiberus\Curso\api\Data;

class CursoRepositoryInterface
{
    /**
     * @param \Hiberus\Curso\Api\Data\CursoInterface $curso
     */
public function save(\hiberus\curso\api\Data\CursoInterface $curso);
public function getById($entityId);

public function delete(\hiberus\curso\api\data\CursoInterface $curso);

    /**
     * @param $entityId
     * @return bool
     */
public  function deleteByID($entityId);

}
