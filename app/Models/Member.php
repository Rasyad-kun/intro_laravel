<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member
{
    private static $data_member = [
        [
            "nama"      => "Muhammad Akhtar Rasyad Fahmi",
            "link"      => "member-1",
            "jurusan"   => "11 RPL 2",
            "absensi"   => "19",
            "asal"      => "Kendal",
            "foto"      => ""
        ],
        [
            "nama"      => "Sarah Rizqi Firyal",
            "link"      => "member-2",
            "jurusan"   => "11 RPL 2",
            "absensi"   => "27",
            "asal"      => "-",
            "foto"      => ""
        ],
        [
            "nama"      => "Steffano Maruli Napitupulu",
            "link"      => "member-3",
            "jurusan"   => "11 RPL 2",
            "absensi"   => "29",
            "asal"      => "Jakarta timur",
            "foto"      => ""
        ],
        [
            "nama"      => "Sultan Rafi Alfarisi",
            "link"      => "member-4",
            "jurusan"   => "11 RPL 2",
            "absensi"   => "31",
            "asal"      => "Jakarta timur",
            "foto"      => ""
        ],
    ];

    public static function all()
    {
        //collect dibutuhkan untuk menggunakan function first / firstWhere
        return collect(self::$data_member);
    }

    public static function find($link)
    {
        //gunakan function firstWhere untuk medapatkan data yang pertama dalam kondisi...
        //tidak menggunakan function first dikarenakan first selalu mengambil data pertama / index pertama...
        $post = static::all();
        return $post -> firstWhere('link', $link);
    }
}
