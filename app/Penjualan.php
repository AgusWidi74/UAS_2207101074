<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = "tb_ikan";

    protected $primaryKey = 'id_ikan';

    protected $fillable = ['no_pnjl', 'nama_pmbl',
    'nama_ikan', 'harga', 'alamat'];

}
