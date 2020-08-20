<?php

namespace App\Controllers;

// require 'vendor/autoload.php';
require 'vendor/autoload.php';
// require APPATH.'PHPSpreadsheet/src/PhpSpreadsheet/Spreadsheet');

use App\Models\data_kk_model;
use App\Models\data_individu_model;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\Validation\Validation;
// use PhpOffice\PhpSpreadsheet\Spreadsheet as PhpSpreadsheetSpreadsheet;

class Export_kk extends BaseController
{
    protected $model_kk;
    protected $model_indv;

    public function __construct()
    {

        $this->model_kk = new data_kk_model();
        $this->model_indv = new data_individu_model();
    }

    public function index() //show kk di sini
    {
        $no_kk = $this->request->getpost('ex_pilih_kk');

        $data_kk = $this->model_kk->find($no_kk);
        $data_idv = $this->model_indv->find($no_kk);
        $get_kelg = $this->model_indv->get_keluarga(['no_kk' => $no_kk]);
        $get_kepala = $this->model_indv->get_kepala($no_kk);

        $data = [
            'title'    => 'Tampilan KK yang akan diexport',
            'heading' => 'Tampilan KK yang akan diexport',
            'no_kk' => $no_kk,
            'data_kk' => $data_kk,
            'data_idv' => $data_idv,
            'get_kelg' => $get_kelg,
            'get_kepala' => $get_kepala,
        ];

        echo view('data_kk/x_data_kk_detail', $data);
    }

    public function pilih_kk() //aka PICKER
    {
        $data_kk = $this->model_kk->findAll();
        // $data_idv = $this->model_indv->orderBy('nik', 'asc')
        //     ->findAll();

        $data = [
            'title'    => 'Pilih KK',
            'heading' => 'Memilih KK yang akan diexport',
            'data_kk' => $data_kk,
            // 'data_idv' => $data_idv
        ];

        // echo view('template/web_frame', $data);
        echo view('export_kk/ex_pilih_kk', $data);
    }

    public function excell()
    {
        // $no_kk = $this->request->getpost('no_kk');
        $uri = service('uri');
        $no_kk = $uri->getSegment(3);

        $data_kk = $this->model_kk->find($no_kk);
        $data_idv = $this->model_indv->find($no_kk);
        $get_kelga = $this->model_indv->get_kelg(['no_kk' => $no_kk]); //array
        // $get_kelg = $this->model_indv->get_keluarga(['no_kk' => $no_kk]); //obj
        $get_kpl = $this->model_indv->get_kpl($no_kk);

        $spreadsheet = new Spreadsheet();
        // $spreadsheet->getProperties()->setCreator("GBA");
        // $spreadsheet->getProperties()->setTitle("Office 2007 XLSX Test Document");
        // $spreadsheet->getProperties()->setSubject("Office 2007 XLSX Test Document");

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('D1', 'KARTU KELUARGA');
        $sheet->setCellValue('D2', 'No.');
        $sheet->setCellValue('E2', $data_kk['no_kartu_keluarga']);
        // //smth

        $sheet->setCellValue('C4', 'Nama Kepala Keluarga:');
        $sheet->setCellValue('D4', $get_kpl['nama_lengkap']);

        $sheet->setCellValue('C5', 'Alamat:');
        $sheet->setCellValue('D5', $data_kk['alamat']);

        $sheet->setCellValue('C6', 'RT/RW:');
        $sheet->setCellValue('D6', $data_kk['rt'] . "/" . $data_kk['rw']);

        $sheet->setCellValue('C7', 'Desa/Kelurahan:');
        $sheet->setCellValue('D7', $data_kk['desa_kelurahan']);

        $sheet->setCellValue('F4', 'Kecamatan:');
        $sheet->setCellValue('G4', $data_kk['kecamatan']);

        $sheet->setCellValue('F5', 'Kabupaten/Kota:');
        $sheet->setCellValue('G5', $data_kk['kabupaten_kota']);

        $sheet->setCellValue('F6', 'Kode Pos:');
        $sheet->setCellValue('G6', $data_kk['kode_pos']);

        $sheet->setCellValue('F7', 'Provinsi:');
        $sheet->setCellValue('G7', $data_kk['provinsi']);
        // // header end
        // //break

        $sheet->setCellValue('A9', 'No');
        $sheet->setCellValue('B9', 'NIK');
        $sheet->setCellValue('C9', 'Nama Lengkap');
        $sheet->setCellValue('D9', 'Jenis Kelamin');
        $sheet->setCellValue('E9', 'Tempat Lahir');
        $sheet->setCellValue('F9', 'Tanggal Lahir');
        $sheet->setCellValue('G9', 'Agama');
        $sheet->setCellValue('H9', 'Pendidikan');
        $sheet->setCellValue('I9', 'Jenis Pekerjaan');
        $sheet->setCellValue('J9', 'Status Perkawinan');
        $sheet->setCellValue('K9', 'Hubungan dalam Keluarga');
        $sheet->setCellValue('L9', 'Kewarganegaraan');
        $sheet->setCellValue('M9', 'No. Paspor');
        $sheet->setCellValue('N9', 'No. KITAS/KITAP');
        $sheet->setCellValue('O9', 'Nama Ayah');
        $sheet->setCellValue('P9', 'Nama Ibu');
        //header
        $no = 1;
        $k  = 10;

        foreach ($get_kelga as $g) {
            $sheet->setCellValue('A'.$k, $no++);
            $sheet->setCellValue('B'.$k, $g['nik']);
            $sheet->setCellValue('C'.$k, $g['nama_lengkap']);
            $sheet->setCellValue('D'.$k, $g['jenis_kelamin']);
            $sheet->setCellValue('E'.$k, $g['tempat_lahir']);
            $sheet->setCellValue('F'.$k, $g['tanggal_lahir']);
            $sheet->setCellValue('G'.$k, $g['agama']);
            $sheet->setCellValue('H'.$k, $g['pendidikan']);
            $sheet->setCellValue('I'.$k, $g['jenis_pekerjaan']);
            $sheet->setCellValue('J'.$k, $g['status_perkawinan']);
            $sheet->setCellValue('K'.$k, $g['hub_dlm_keluarga']);
            $sheet->setCellValue('L'.$k, $g['kewarganegaraan']);
            $sheet->setCellValue('M'.$k, $g['no_paspor']);
            $sheet->setCellValue('N'.$k, $g['no_kitas_kitap']);
            $sheet->setCellValue('O'.$k, $g['nama_ayah']);
            $sheet->setCellValue('P'.$k, $g['nama_ibu']);
            $k++;
        }
        // // end konten

        $sheet->setCellValue('B21', 'Tanggal Keluar');
        $sheet->setCellValue('C21', $data_kk['tanggal_keluar']);

        $filename = 'Kartu Keluarga ' . $no_kk;
        // $filename = 'Kartu Keluarga xx';

        // header('Content-Type: application/vnd.ms-excel');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachmgent; filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');

        // $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer = new Xlsx($spreadsheet);
        ob_end_clean();
        $writer->save('php://output');
        die();
    }
}
