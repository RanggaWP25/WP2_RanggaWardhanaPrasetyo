<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view("view_form_matakuliah");
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required'   => "Kode Matakuliah Harus diisi!",
            'min_length' => "Tuliskan minimal 3 karakter!"
        ]);

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required'   => "Nama Matakuliah Harus diisi!",
            'min_length' => "Tuliskan minimal 3 karakter!"
        ]);

        $this->form_validation->set_rules('sks', 'SKS Matakuliah', 'required', [
            'required'   => "SKS Matakuliah Harus diisi!",
        ]);

        $data =
            [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks'  => $this->input->post('sks')
            ];

        if ($this->form_validation->run() != false) {
            $this->load->view('view_data_matakuliah', $data);
        } else {
            $this->load->view('view_form_matakuliah');
        }
    }
}
