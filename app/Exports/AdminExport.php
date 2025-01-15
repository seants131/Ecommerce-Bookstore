<?php 

namespace App\Exports;

use App\Models\Sach;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdminExport implements FromCollection
{
    /**
     * Lấy dữ liệu từ model Book
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Sach::all(); // Lấy tất cả các bản ghi từ bảng sách
    }
}