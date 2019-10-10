<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $table    = '';
    protected $perPage  = 5;

    public function __construct()
    {
        parent::__construct();
        if (!$this->table) {
            $this->table = strtolower(
                str_replace('_model', '', get_class($this))
            );
        }
    }

    public function validate()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters(
            '<small class="form-text text-danger">',
            '</small>'
        );
        $validationRules = $this->getValidationRules();
        $this->form_validation->set_rules($validationRules);
        return $this->form_validation->run();
    }

    public function select($coloumns)
    {
        $this->db->select(coloumns);
        return $this;
    }

    public function where($coloumns, $condition)
    {
        $this->db->where($coloumns, $condition);
        return $this;
    }
    public function like($coloumns, $condition)
    {
        $this->db->like($coloumns, $condition);
        return $this;
    }
    public function orLike($coloumns, $condition)
    {
        $this->db->or_like($coloumns, $condition);
        return $this;
    }

    public function join($table, $type = 'left')
    {
        $this->db->join($table, "$this->table.id_ $table = $table.id", $type);
        return $this;
    }

    public function order_by($coloumn, $order = 'asc')
    {
        $this->db->order_by($coloumn, $order);
    }

    public function first()
    {
        return $this->db->get($this->table)->row();
    }

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function count()
    {
        return $this->db->count_all_results($this->table);
    }

    // CREATE
    public function create($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($data)
    {
        $this->db->update($this->table, $data);
    }

    public function delete()
    {
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function paginate($page)
    {
        $this->db->limit(
            $this->perPage,
            $this->calculateRealOffset($page)
        );

        return $this;
    }


    public function calculateRealOffset($page)
    {
        if (is_null($page) || empty($page)) {
            $offset = 0;
        } else {
            $offset = ($page * $this->perPage) - $this->perPage;
        }

        return $offset;
    }

    public function makePagination($baseUrl, $uriSegment, $totalRows = null)
    {
        $this->load->library('pagination');

        $config = [
            'base_url'          => $baseUrl,
            'uri_segment'       => $uriSegment,
            'perPage'           => $this->perPage,
            'total_rows'        => $totalRows,
            'use_page_number'   => true,

            'full_tag_open'     => '<ul class="pagination">',
            'full_tag_close'    => '</ul>',
            'attributes'        => ['class' => 'page-link'],
            'first_link'        => false,
            'last_link'         => false,
            'first_tag_open'    => '<li class="page-item">',
            'first_tag_close'   => '</li>',
            'prev_link'         => '$laquo',
            'prev_tag_open'     => '<li class="page-item">',
            'prev_tag_close'    => '</li>',
            'next_link'         => '$raquo',
            'next_tag_open'     => '<li class="page-item">',
            'next_tag_close'    => '</li>',
            'last_tag_open'     => '<li class="page-item">',
            'last_tag_close'    => '</li>',
            'cur_tag_open'      => '<li class="page-item active"><a href="#" class="page-link">',
            'cur_tag_close'     => '<span class="sr-only">(current)</span></a></li>',
            'num_tag_open'      => '<li class="page-item">',
            'num_tag_close'     => '</li>',
        ];

        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }
}



/* End of file MY_Model.php */
