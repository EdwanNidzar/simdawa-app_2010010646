<?php
class Pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('PendaftaranModel'));
    }

    public function index()
    {
        $data['title'] = "Data Beasiswa | SIMDAWA-APP";
        $data['pendaftaran'] = $this->PendaftaranModel->get_pendaftaran();
        $this->load->view('tamplate/header', $data);
        $this->load->view('tamplate/sidebar');
        $this->load->view('pendaftaran/daftar_read', $data);
        $this->load->view('tamplate/footer');
    }

    public function daftar()
    {
        if (isset($_POST['btn_daftar'])) {
            $cek_nopendaftaran = $this->PendaftaranModel->cek_nopendaftaran();
            if ($cek_nopendaftaran == true) {
                $this->session->set_flashdata('pesan', 'NO Pendaftaran sudah terdaftar di sistem!');
                redirect('pendaftaran/daftar');
            } else {
                $upload = $this->PendaftaranModel->upload_bukti('bukti_daftar');
                if ($upload['result'] == 'success') {
                    $this->PendaftaranModel->insert_pendaftaran($upload);
                    redirect('pendaftaran/daftar');
                } else {
                    $this->session->set_flashdata('pesan', $upload['error']);
                    redirect('pendaftaran/daftar');
                }
            }
        } else {
            $data['title'] = "Pendaftaran Pengguna | SIMDAWA-APP";
            $this->load->view('pendaftaran/daftar_create', $data);
        }
    }

    public function verifikasi($keterangan, $id)
    {
        if (isset($id)){
            $status = ($keterangan == "acc") ? "Sudah Diverifikasi" : "Akun Dibatalkan";
            $this->PendaftaranModel->verifikasi_akun($status, $id);
            redirect('pendaftaran');
        }
    }

}
