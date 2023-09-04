<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fetch_Model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function fetchQuery($table)
  {
    return $this->db->order_by('created_date', 'DESC')->get($table);
  }

  public function fetchQueryOrder($table, $order)
  {
    return $this->db->order_by('created_date', $order)->get($table);
  }

  public function checkIsExist($table, $column, $value)
  {
    return $this->db->where($column, $value)->get($table);
  }
  public function fetchQueryWithCondition($table, $column, $status)
  {
    return $this->db->where($column, $status)->order_by('created_date', 'DESC')->get($table);
  }

  public function fetchQueryByLimit($table, $limit)
  {
    $this->db->order_by('pId', 'RANDOM');
    $this->db->limit($limit);
    return $this->db->get($table);
  }

  public function fetchQueryWithJoinCondition($table, $column, $status)
  {
    return $this->db->distinct()->select('feedback.fserverName,s.serverName,s.serverId')->join('server as s', 's.serverId=feedback.fserverName')->where($column, $status)->order_by('feedback.created_date', 'DESC')->get($table);
  }
  public function fetchQueryById($table, $column, $id)
  {
    return $this->db->where($column, $id)->get($table);
  }


  public function tablesLimit($table, $limit, $start)
  {
    $this->db->limit($limit, $start);
    return $this->db->get($table);
  }

  public function getMembersCounts()
  {
    $value = $this->input->get('resturant');
    if ($value) {
      return $this->db->where('resturant', $value)->count_all_results('members');
    } else {
      return $this->db->count_all_results('members');
    }
  }
  public function membersLimit($limit, $start)
  {
    $value = $this->input->get('resturant');
    $this->db->limit($limit, $start);
    if ($value) {
      return $this->db->where('resturant', $value)->join('resturant', 'resturant.rId=members.resturant')->order_by('card_no', "asc")->get('members');
    } else {
      return $this->db->join('resturant', 'resturant.rId=members.resturant')->order_by('card_no', "asc")->get('members');
    }
  }


  public function tablesCounts($table)
  {
    return $this->db->count_all_results($table);
  }

  public function get_count($table)
  {
    return $this->db->count_all($table);
  }
}
