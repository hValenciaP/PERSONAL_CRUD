<?php

class Producto extends Conectar{

    public function get_producto(){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM TM_PRODUCTO where estado = 0 ";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function get_producto_x_id($prod_id){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM TM_PRODUCTO where prod_id = ? ";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$prod_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function delete_producto($prod_id){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="update TM_PRODUCTO set estado = 0, fecha_elim = now() where prod_id = ? ";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$prod_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function insert_producto($prod_nom){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="insert into tm_producto (prod_id, prod_nom, fecha_crea, fecha_modif, fecha,elim, estado) 
                values(null, ?, now(), 'null', null, 1)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$prod_nom);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }

    public function update_producto( $prod_id,$prod_nom){
        $conectar= parent::Conexion();
        parent::set_names();
        $sql="update TM_PRODUCTO set prod_nom = ?, fecha_modif = now() where prod_id = ? ";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$prod_nom);
        $sql->bindValue(2,$prod_id);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
}

?>