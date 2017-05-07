<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 */
class Teste_jq_control extends CI_Controller
{

    public function formulario_cadastro()
    {
        //esse parse é para podermos usar o base_url ele pode trabalhar com varios parametros
        $this->parser->parse('testando_jq', array('base_url' => base_url()));
    }

    public function salvar()
    {
        //pego oque esta vindo na função

        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $dados = ['nome' => $nome,
            'email' => $email];
        //inseri no banco
        $resultado = $this->db->insert("clientes", $dados);
        if ($resultado) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function lista_clientes()
    {

        $this->load->model('ClienteModel');

        $result = $this->ClienteModel->listaCliente();
        $clientes = [];

        foreach ($result as $x => $valor) {
            // $clientes[$x] = new stdClass();

            $clientes[$x]['nome'] = $valor["nome"];
            // var_dump($clientes);
        }

        $dados = [
            'clientes' => $clientes,
            'base_url' => base_url()
        ];


        //var_dump($clientes);
        $this->parser->parse('lista_cliente_v', $dados);
    }

    public function calcula()
    {
        
    }

    public function teste()
    {
        $this->load->view('welcome_message');
    }

}
