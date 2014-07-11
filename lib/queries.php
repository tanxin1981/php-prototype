<?php

function get_catalogbyid($id) {
    $query = MySQL::getInstance()->prepare("select distinct c.sku, c.color from catalog_simple s join catalog_config c on s.fk_catalog_config = c.id_catalog_config where c.id_catalog_config = :id;");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

