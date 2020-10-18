<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;

function excelwriter($data)
{
    $spreadsheet = new Spreadsheet();
    // $sheet = $spreadsheet->getActiveSheet();
    // $spreadsheet->getProperties()->setCreator("GBA");
    // $spreadsheet->getProperties()->setTitle("Office 2007 XLSX Test Document");
    // $spreadsheet->getProperties()->setSubject("Office 2007 XLSX Test Document");

    $sheet = $spreadsheet->getActiveSheet();

    return $sheet->setCellValue('D1', 'KARTU KELUARGA');
    return $sheet->setCellValue('D2', 'No.');
    // $sheet->setCellValue('D2', $no_kk);

    return $sheet->setCellValue('C4', 'Nama Kepala Keluarga:');
    return $sheet->setCellValue('C5', 'Alamat:');
    return $sheet->setCellValue('C6', 'RT/RW:');
    return $sheet->setCellValue('C7', 'Desa/Kelurahan:');
    
    return $sheet->setCellValue('F4', 'Kecamatan:');
    return $sheet->setCellValue('F5', 'Kabupaten/Kota:');
    return $sheet->setCellValue('F6', 'Kode Pos:');
    return $sheet->setCellValue('F7', 'Provinsi:');
    // header end

    return $sheet->setCellValue('A9', 'No');
    return $sheet->setCellValue('B9', 'NIK');
    return $sheet->setCellValue('C9', 'Nama Lengkap');
    return $sheet->setCellValue('D9', 'Jenis Kelamin');
    return $sheet->setCellValue('E9', 'Tempat Lahir');
    return $sheet->setCellValue('F9', 'Tanggal Lahir');
    return $sheet->setCellValue('G9', 'Agama');
    return $sheet->setCellValue('H9', 'Pendidikan');
    return $sheet->setCellValue('I9', 'Jenis Pekerjaan');

    return $sheet->setCellValue('A19', 'No');
    return $sheet->setCellValue('B19', 'Status Perkawinan');
    return $sheet->setCellValue('C19', 'Hubungan dalam Keluarga');
    return $sheet->setCellValue('D19', 'Kewarganegaraan');
    return $sheet->setCellValue('E19', 'No. Paspor');
    return $sheet->setCellValue('F19', 'No. KITAS/KITAP');
    return $sheet->setCellValue('G19', 'Nama Ayah');
    return $sheet->setCellValue('H19', 'Nama Ibu');

    // end konten
    return $sheet->setCellValue('B28', 'Tanggal Keluar');
}

?>