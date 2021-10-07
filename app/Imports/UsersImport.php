<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithHeadingRow, WithValidation
{
    use Importable, SkipsErrors;

    public function model(array $row)
    {
        return new User([
            'name' => $row['nama_karyawan'],
            'email' => $row['email'],
            'password' => Hash::make('admedika321'),
            'nik_telkom' => $row['nik_telkom'],
            'nik_company' => $row['nik_perusahaan'],
            'date_in' => Date::excelToDateTimeObject($row['tanggal_bergabung']),
            'band_position_id' => $row['band_posisi'],
            'job_grade_id' => $row['job_grade'],
            'job_family_id' => $row['job_family'],
            'job_function_id' => $row['job_fungsi'],
            'city_recuite_id' => $row['kota_rekrutasi'],
            'status_employee_id' => $row['status_karyawan'],
            'company_home_id' => $row['nama_perusahaan_home'],
            'date_sk' => Date::excelToDateTimeObject($row['tanggal_sk_menjabat']),
            'company_host_id' => $row['nama_perusahaan_host'],
            'sub_status_id' => $row['sub_status_karyawan'],
            'unit_id' => $row['unit_kerja'],
            'place_of_birth' => $row['tempat_lahir'],
            'division_id' => $row['nama_divisi'],
            'date_of_birth' => Date::excelToDateTimeObject($row['tanggal_lahir']),
            'work_location_id' => $row['lokasi_kerja'],
            'age' => $row['usia'],
            'job_title_id' => $row['nama_jabatan'],
            'edu_id' => $row['pendidikan_terakhir'],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.nama_karyawan' => ['name' => 'required'],
            '*.nama_perusahaan_home' => ['company_home_id' => 'required', 'numeric'],
            '*.nama_perusahaan_host' => ['nama_perusahaan_host' => 'required', 'numeric'],
            '*.nik_telkom' => ['nik_telkom' => 'required', 'unique:users,nik_telkom'],
            '*.nik_perusahaan' => ['nik_company' => 'required', 'unique:users,nik_company'],
            '*.tanggal_bergabung' => ['date_in' => 'required'],
            '*.status_karyawan' => ['status_employee_id' => 'required', 'numeric'],
            '*.band_posisi' => ['band_position_id' => 'required', 'numeric'],
            '*.job_grade' => ['job_grade_id' => 'nullable', 'numeric'],
            '*.job_family' => ['job_family_id' => 'nullable', 'numeric'],
            '*.job_fungsi' => ['job_function_id' => 'nullable', 'numeric'],
            '*.lokasi_kerja' => ['work_location_id' => 'required', 'numeric'],
            '*.nama_jabatan' => ['job_title_id' => 'required', 'numeric'],
            '*.tanggal_sk_menjabat' => ['date_sk' => 'required'],
            '*.nama_divisi' => ['division_id' => 'required', 'numeric'],
            '*.sub_status_karyawan' => ['sub_status_id' => 'required', 'numeric'],
            '*.unit_kerja' => ['unit_id' => 'required', 'numeric'],
            '*.pendidikan_terakhir' => ['edu_id' => 'required', 'numeric'],
            '*.tempat_lahir' => ['place_of_birth' => 'required'],
            '*.tanggal_lahir' => ['date_of_birth' => 'required'],
            '*.usia' => ['age' => 'required'],
            '*.email' => ['email' => 'required', 'unique:users,email'],
        ];
    }

    public function headingRow(): int
    {
        return 1;
    }
}
