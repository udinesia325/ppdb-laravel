<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $state = mt_rand(1, 2);
        return [
            // "tgl_daftar" => $this->faker->date(),
            "thn_ajaran" => mt_rand(2022, 2023),
            "jurusan" => $state == 1 ? "rpl" : "tb",
            "nm_peserta" => $this->faker->name(),
            "nik" => "572897548947528",
            "tmp_lahir" => $this->faker->city(),
            "tgl_lahir" => $this->faker->date(),
            "jk"=>$state == 1 ? "l" : "p",
            "agama" => "islam",
            "alm_lengkap"=>$this->faker->address(),
            "kelurahan" => $this->faker->address(),
            "desa" => $this->faker->city(), 
            "kecamatan" => $this->faker->city(), 
            "kode_pos" => mt_rand(6500,6800),
            "nm_ayah"=>$this->faker->name(),
            "nik_ayah"=>"94892472894728478",
            "pekerjaan_ayah" => $this->faker->jobTitle(),
            "pendidikan_ayah" =>"smp",
            "nm_ibu"=>$this->faker->name(),
            "nik_ibu"=>"94892472894728478",
            "pekerjaan_ibu" => $this->faker->jobTitle(),
            "pendidikan_ibu" =>"smp",

        ];

    }
}
