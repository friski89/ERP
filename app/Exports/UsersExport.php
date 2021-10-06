<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;


class UsersExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadingS, WithEvents, WithColumnFormatting
{

    use Exportable;
    private $no = 1;
    public function collection()
    {
        return User::with('bandPosition', 'jobGrade', 'jobFamily', 'jobFunction', 'cityRecuite', 'statusEmployee', 'companyHome', 'companyHost', 'subStatus', 'unit', 'division', 'workLocation', 'jobTitle', 'edu')->get();
    }

    public function map($user): array
    {

        return [
            $this->no++,
            $user->name,
            $user->companyHome->name ?? '-',
            $user->companyHost->name ?? '-',
            $user->nik_telkom ?? '-',
            $user->nik_company ?? '-',
            Date::dateTimeToExcel($user->date_in) ?? '-',
            $user->statusEmployee->name ?? '-',
            $user->subStatus->name ?? '-',
            $user->bandPosition->name ?? '-',
            $user->jobGrade->name ?? '-',
            $user->jobFamily->name ?? '-',
            $user->jobFunction->name ?? '-',
            $user->workLocation->name ?? '-',
            $user->jobTitle->name ?? '-',
            Date::dateTimeToExcel($user->date_sk) ?? '-',
            $user->division->name ?? '-',
            $user->unit->name ?? '-',
            $user->edu->name ?? '-',
            $user->place_of_birth ?? '-',
            Date::dateTimeToExcel($user->date_of_birth) ?? '-',
            $user->age ?? '-',
            $user->email ?? '-',
            $user->cityRecuite->name ?? '-',
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Karyawan',
            'Nama Perusahaan Home',
            'Nama Perusahaan Host',
            'Nik Telkom',
            'Nik Perusahaan',
            'Tanggal Bergabung',
            'Status Karyawan',
            'Sub Status Karyawan',
            'Band Posisi',
            'Job Grade',
            'Job Family',
            'Job Fungsi',
            'Lokasi Kerja',
            'Nama Jabatan',
            'Tanggal SK Menjabat',
            'Nama Divisi',
            'Unit Kerja',
            'Pendidikan Terakhir',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Usia',
            'Email',
            'Kota Rekrutasi',

        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:X1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
            }
        ];
    }

    public function columnFormats(): array
    {
        return [
            'G' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'P' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'U' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
