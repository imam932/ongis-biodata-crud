<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BiodataController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BiodataModel');
    }

    /**
     * Create Function
     */
    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'nama'      => $this->input->post('nama'),
                'umur'      => $this->input->post('umur'),
                'create_at' => date("Y-m-d h:i:sa"),
                'update_at' => date("Y-m-d h:i:sa")
            );

            $this->load->view('biodata/create', $data);
        }
        else
        {
            $data = array(
                'nama'      => $this->input->post('nama'),
                'umur'      => $this->input->post('umur'),
                'create_at' => date("Y-m-d h:i:sa"),
                'update_at' => date("Y-m-d h:i:sa")
            );

            $this->BiodataModel->create($data);
            $this->session->set_flashdata('add_success','Biodata berhasil dibuat');
            redirect('/biodata');
        }
    }

    /**
     * Read Function
     */
    public function read($id)
    {
        $result = $this->BiodataModel->read($id)->row();

        $data = array(
            'data'   => $result
        );
        $this->load->view('biodata/read', $data);
    }

    /**
     * Update Function
     */
    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'id'        => $this->input->post('id'),
                'nama'      => $this->input->post('nama'),
                'umur'      => $this->input->post('umur'),
                'create_at' => date("Y-m-d h:i:sa"),
                'update_at' => date("Y-m-d h:i:sa")
            );

            $this->load->view('biodata/edit', $data);
        }
        else
        {
            $data = array(
                'id'        => $this->input->post('id'),
                'nama'      => $this->input->post('nama'),
                'umur'      => $this->input->post('umur'),
                'create_at' => date("Y-m-d h:i:sa"),
                'update_at' => date("Y-m-d h:i:sa")
            );

            $this->BiodataModel->update($id = $data['id'],$data);
            $this->session->set_flashdata('edit_success','Biodata berhasil diupdate');
            redirect('/biodata');
        }
    }

    /**
     * Delete Function
     */
    public function delete($id)
    {
        $this->BiodataModel->delete($id);
        $this->session->set_flashdata('delete_success','Biodata terpilih berhasil di hapus');
        redirect('/biodata');
    }

    /**
     * Index Function
     */
    public function index()
    {
        $data = array(
            'data'  => $this->BiodataModel->index()
        );
        $this->load->view('biodata/index', $data);
    }

    /**
     * Input Function
     */
    public function input()
    {
        $data = array(
            'nama'      => "",
            'umur'      => "",
            'create_at' => date("Y-m-d h:i:sa"),
            'update_at' => date("Y-m-d h:i:sa"),
        );

        $this->load->view('biodata/create', $data);
    }

    /**
     * Edit Function
     */
    public function edit($id)
    {
        $query = $this->BiodataModel->read($id)->row();

        $data = array(
            'id'        => $query->id,
            'nama'      => $query->nama,
            'umur'      => $query->umur,
            'create_at' => $query->create_at,
            'update_at' => $query->update_at
        );

        $this->load->view('biodata/edit', $data);
    }
}
