<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Model extends CI_Model {

    const ACCAO_INSERIR = 'CRIOU';
    const ACCAO_ACTUALIZAR = 'ACTUALIZOU';
    const ACCAO_APAGAR = 'APAGOU';

    protected $NOME_TABELA;
    protected $PK_TABELA;
    protected $ORDER_BY;
    protected $ORDER_TYPE;

    function get_total_registos($from, $wheres, $likes, $joins) {
        $this->db->from($from);

        foreach ($wheres as $where) {
            $this->db->where($where['coluna'], $where['valor']);
        }

        foreach ($likes as $like) {
            if (!empty($like['valor'])) {
                $this->db->like($like['coluna'], $like['valor']);
            }
        }

        foreach ($joins as $join) {
            $this->db->join($join['tabela'], $join['condicao']);
        }

        return $this->db->count_all_results();
    }

    function get_registos($from, $wheres, $likes, $joins, $order_by, $order_type, $start, $limit, $select = '*') {
        $this->db->select($select);

        $this->db->from($from);

        foreach ($wheres as $where) {
            $this->db->where($where['coluna'], $where['valor']);
        }

        foreach ($likes as $like) {
            if (!empty($like['valor'])) {
                $this->db->like($like['coluna'], $like['valor']);
            }
        }

        foreach ($joins as $join) {
            $this->db->join($join['tabela'], $join['condicao']);
        }

        if ($order_type == 'Crescente') {
            $order_type = 'ASC';
        } else if ($order_type == 'Decrescente') {
            $order_type = 'DESC';
        }
        $this->db->order_by($order_by, $order_type);

        if (!empty($limit)) {
            if ($start > 0) {
                $start = $start - 1;
            }

            $this->db->limit($limit, $start * $limit); // multiplicacao usada por causa da paginação de registos
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    function get_by_($wheres) {
        foreach ($wheres as $coluna => $valor) {
            $this->db->where($coluna, $valor);
        }

        $this->db->order_by($this->ORDER_BY, $this->ORDER_TYPE);

        $query = $this->db->get($this->NOME_TABELA);
        $resultados = $query->result_array();

        if (empty($resultados)) {
            return array($this->get_by_id(0));
        } else {
            return $resultados;
        }
    }

    function get_by_id($id) {
        $this->db->where($this->PK_TABELA, $id);
        $query = $this->db->get($this->NOME_TABELA);
        return $query->row_array();
    }

    function get_all() {
        $this->db->order_by($this->ORDER_BY, $this->ORDER_TYPE);
        $query = $this->db->get($this->NOME_TABELA);
        return $query->result_array();
    }

    function count_all() {
        $this->db->from($this->NOME_TABELA);
        return $this->db->count_all_results();
    }

    function insert($dados) {
        $this->db->trans_start();
        $this->db->insert($this->NOME_TABELA, $dados);
        $this->db->trans_complete();
    }

    function update($id, $dados) {
        $this->db->trans_start();
        $this->db->where($this->PK_TABELA, $id);
        $this->db->update($this->NOME_TABELA, $dados);
        $this->db->trans_complete();
    }

    function delete($id) {
        $this->db->trans_start();
        $this->db->where($this->PK_TABELA, $id);
        $this->db->delete($this->NOME_TABELA);
        $this->db->trans_complete();
    }
}