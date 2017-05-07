<?php

class ClienteModel extends CI_Model
{

    public function listaCliente()
    {

        $sql = "Select nome from ci_sistema_cadastro.clientes;";

        $resultado = $this->db->query($sql); //executa a query
        $clientes = $resultado->result_array(); // Busca o resultado
        
        
        
        
        
        
        
        if(!$clientes){
          return $this->db->error();
        } else {

        return $clientes;
        }
    }

}
