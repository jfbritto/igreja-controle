<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            1 => 
            array (
                'id' => 2,
                'nome' => 'Alta Floresta D\'Oeste',
                'idEstado' => 22,
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Ariquemes',
                'idEstado' => 22,
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Cabixi',
                'idEstado' => 22,
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Cacoal',
                'idEstado' => 22,
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Cerejeiras',
                'idEstado' => 22,
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Colorado do Oeste',
                'idEstado' => 22,
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Corumbiara',
                'idEstado' => 22,
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Costa Marques',
                'idEstado' => 22,
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Espigão D\'Oeste',
                'idEstado' => 22,
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Guajará-Mirim',
                'idEstado' => 22,
            ),
            11 => 
            array (
                'id' => 12,
                'nome' => 'Jaru',
                'idEstado' => 22,
            ),
            12 => 
            array (
                'id' => 13,
                'nome' => 'Ji-Paraná',
                'idEstado' => 22,
            ),
            13 => 
            array (
                'id' => 14,
                'nome' => 'Machadinho D\'Oeste',
                'idEstado' => 22,
            ),
            14 => 
            array (
                'id' => 15,
                'nome' => 'Nova Brasilândia D\'Oeste',
                'idEstado' => 22,
            ),
            15 => 
            array (
                'id' => 16,
                'nome' => 'Ouro Preto do Oeste',
                'idEstado' => 22,
            ),
            16 => 
            array (
                'id' => 17,
                'nome' => 'Pimenta Bueno',
                'idEstado' => 22,
            ),
            17 => 
            array (
                'id' => 18,
                'nome' => 'Porto Velho',
                'idEstado' => 22,
            ),
            18 => 
            array (
                'id' => 19,
                'nome' => 'Presidente Médici',
                'idEstado' => 22,
            ),
            19 => 
            array (
                'id' => 20,
                'nome' => 'Rio Crespo',
                'idEstado' => 22,
            ),
            20 => 
            array (
                'id' => 21,
                'nome' => 'Rolim de Moura',
                'idEstado' => 22,
            ),
            21 => 
            array (
                'id' => 22,
                'nome' => 'Santa Luzia D\'Oeste',
                'idEstado' => 22,
            ),
            22 => 
            array (
                'id' => 23,
                'nome' => 'Vilhena',
                'idEstado' => 22,
            ),
            23 => 
            array (
                'id' => 24,
                'nome' => 'São Miguel do Guaporé',
                'idEstado' => 22,
            ),
            24 => 
            array (
                'id' => 25,
                'nome' => 'Nova Mamoré',
                'idEstado' => 22,
            ),
            25 => 
            array (
                'id' => 26,
                'nome' => 'Alvorada D\'Oeste',
                'idEstado' => 22,
            ),
            26 => 
            array (
                'id' => 27,
                'nome' => 'Alto Alegre dos Parecis',
                'idEstado' => 22,
            ),
            27 => 
            array (
                'id' => 28,
                'nome' => 'Alto Paraíso',
                'idEstado' => 22,
            ),
            28 => 
            array (
                'id' => 29,
                'nome' => 'Buritis',
                'idEstado' => 22,
            ),
            29 => 
            array (
                'id' => 30,
                'nome' => 'Novo Horizonte do Oeste',
                'idEstado' => 22,
            ),
            30 => 
            array (
                'id' => 31,
                'nome' => 'Cacaulândia',
                'idEstado' => 22,
            ),
            31 => 
            array (
                'id' => 32,
                'nome' => 'Campo Novo de Rondônia',
                'idEstado' => 22,
            ),
            32 => 
            array (
                'id' => 33,
                'nome' => 'Candeias do Jamari',
                'idEstado' => 22,
            ),
            33 => 
            array (
                'id' => 34,
                'nome' => 'Castanheiras',
                'idEstado' => 22,
            ),
            34 => 
            array (
                'id' => 35,
                'nome' => 'Chupinguaia',
                'idEstado' => 22,
            ),
            35 => 
            array (
                'id' => 36,
                'nome' => 'Cujubim',
                'idEstado' => 22,
            ),
            36 => 
            array (
                'id' => 37,
                'nome' => 'Governador Jorge Teixeira',
                'idEstado' => 22,
            ),
            37 => 
            array (
                'id' => 38,
                'nome' => 'Itapuã do Oeste',
                'idEstado' => 22,
            ),
            38 => 
            array (
                'id' => 39,
                'nome' => 'Ministro Andreazza',
                'idEstado' => 22,
            ),
            39 => 
            array (
                'id' => 40,
                'nome' => 'Mirante da Serra',
                'idEstado' => 22,
            ),
            40 => 
            array (
                'id' => 41,
                'nome' => 'Monte Negro',
                'idEstado' => 22,
            ),
            41 => 
            array (
                'id' => 42,
                'nome' => 'Nova União',
                'idEstado' => 22,
            ),
            42 => 
            array (
                'id' => 43,
                'nome' => 'Parecis',
                'idEstado' => 22,
            ),
            43 => 
            array (
                'id' => 44,
                'nome' => 'Pimenteiras do Oeste',
                'idEstado' => 22,
            ),
            44 => 
            array (
                'id' => 45,
                'nome' => 'Primavera de Rondônia',
                'idEstado' => 22,
            ),
            45 => 
            array (
                'id' => 46,
                'nome' => 'São Felipe D\'Oeste',
                'idEstado' => 22,
            ),
            46 => 
            array (
                'id' => 47,
                'nome' => 'São Francisco do Guaporé',
                'idEstado' => 22,
            ),
            47 => 
            array (
                'id' => 48,
                'nome' => 'Seringueiras',
                'idEstado' => 22,
            ),
            48 => 
            array (
                'id' => 49,
                'nome' => 'Teixeirópolis',
                'idEstado' => 22,
            ),
            49 => 
            array (
                'id' => 50,
                'nome' => 'Theobroma',
                'idEstado' => 22,
            ),
            50 => 
            array (
                'id' => 51,
                'nome' => 'Urupá',
                'idEstado' => 22,
            ),
            51 => 
            array (
                'id' => 52,
                'nome' => 'Vale do Anari',
                'idEstado' => 22,
            ),
            52 => 
            array (
                'id' => 53,
                'nome' => 'Vale do Paraíso',
                'idEstado' => 22,
            ),
            53 => 
            array (
                'id' => 54,
                'nome' => 'Acrelândia',
                'idEstado' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'nome' => 'Assis Brasil',
                'idEstado' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'nome' => 'Brasiléia',
                'idEstado' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'nome' => 'Bujari',
                'idEstado' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'nome' => 'Capixaba',
                'idEstado' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'nome' => 'Cruzeiro do Sul',
                'idEstado' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'nome' => 'Epitaciolândia',
                'idEstado' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'nome' => 'Feijó',
                'idEstado' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'nome' => 'Jordão',
                'idEstado' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'nome' => 'Mâncio Lima',
                'idEstado' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'nome' => 'Manoel Urbano',
                'idEstado' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'nome' => 'Marechal Thaumaturgo',
                'idEstado' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'nome' => 'Plácido de Castro',
                'idEstado' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'nome' => 'Porto Walter',
                'idEstado' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'nome' => 'Rio Branco',
                'idEstado' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'nome' => 'Rodrigues Alves',
                'idEstado' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'nome' => 'Santa Rosa do Purus',
                'idEstado' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'nome' => 'Senador Guiomard',
                'idEstado' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'nome' => 'Sena Madureira',
                'idEstado' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'nome' => 'Tarauacá',
                'idEstado' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'nome' => 'Xapuri',
                'idEstado' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'nome' => 'Porto Acre',
                'idEstado' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'nome' => 'Alvarães',
                'idEstado' => 4,
            ),
            76 => 
            array (
                'id' => 77,
                'nome' => 'Amaturá',
                'idEstado' => 4,
            ),
            77 => 
            array (
                'id' => 78,
                'nome' => 'Anamã',
                'idEstado' => 4,
            ),
            78 => 
            array (
                'id' => 79,
                'nome' => 'Anori',
                'idEstado' => 4,
            ),
            79 => 
            array (
                'id' => 80,
                'nome' => 'Apuí',
                'idEstado' => 4,
            ),
            80 => 
            array (
                'id' => 81,
                'nome' => 'Atalaia do Norte',
                'idEstado' => 4,
            ),
            81 => 
            array (
                'id' => 82,
                'nome' => 'Autazes',
                'idEstado' => 4,
            ),
            82 => 
            array (
                'id' => 83,
                'nome' => 'Barcelos',
                'idEstado' => 4,
            ),
            83 => 
            array (
                'id' => 84,
                'nome' => 'Barreirinha',
                'idEstado' => 4,
            ),
            84 => 
            array (
                'id' => 85,
                'nome' => 'Benjamin Constant',
                'idEstado' => 4,
            ),
            85 => 
            array (
                'id' => 86,
                'nome' => 'Beruri',
                'idEstado' => 4,
            ),
            86 => 
            array (
                'id' => 87,
                'nome' => 'Boa Vista do Ramos',
                'idEstado' => 4,
            ),
            87 => 
            array (
                'id' => 88,
                'nome' => 'Boca do Acre',
                'idEstado' => 4,
            ),
            88 => 
            array (
                'id' => 89,
                'nome' => 'Borba',
                'idEstado' => 4,
            ),
            89 => 
            array (
                'id' => 90,
                'nome' => 'Caapiranga',
                'idEstado' => 4,
            ),
            90 => 
            array (
                'id' => 91,
                'nome' => 'Canutama',
                'idEstado' => 4,
            ),
            91 => 
            array (
                'id' => 92,
                'nome' => 'Carauari',
                'idEstado' => 4,
            ),
            92 => 
            array (
                'id' => 93,
                'nome' => 'Careiro',
                'idEstado' => 4,
            ),
            93 => 
            array (
                'id' => 94,
                'nome' => 'Careiro da Várzea',
                'idEstado' => 4,
            ),
            94 => 
            array (
                'id' => 95,
                'nome' => 'Coari',
                'idEstado' => 4,
            ),
            95 => 
            array (
                'id' => 96,
                'nome' => 'Codajás',
                'idEstado' => 4,
            ),
            96 => 
            array (
                'id' => 97,
                'nome' => 'Eirunepé',
                'idEstado' => 4,
            ),
            97 => 
            array (
                'id' => 98,
                'nome' => 'Envira',
                'idEstado' => 4,
            ),
            98 => 
            array (
                'id' => 99,
                'nome' => 'Fonte Boa',
                'idEstado' => 4,
            ),
            99 => 
            array (
                'id' => 100,
                'nome' => 'Guajará',
                'idEstado' => 4,
            ),
            100 => 
            array (
                'id' => 101,
                'nome' => 'Humaitá',
                'idEstado' => 4,
            ),
            101 => 
            array (
                'id' => 102,
                'nome' => 'Ipixuna',
                'idEstado' => 4,
            ),
            102 => 
            array (
                'id' => 103,
                'nome' => 'Iranduba',
                'idEstado' => 4,
            ),
            103 => 
            array (
                'id' => 104,
                'nome' => 'Itacoatiara',
                'idEstado' => 4,
            ),
            104 => 
            array (
                'id' => 105,
                'nome' => 'Itamarati',
                'idEstado' => 4,
            ),
            105 => 
            array (
                'id' => 106,
                'nome' => 'Itapiranga',
                'idEstado' => 4,
            ),
            106 => 
            array (
                'id' => 107,
                'nome' => 'Japurá',
                'idEstado' => 4,
            ),
            107 => 
            array (
                'id' => 108,
                'nome' => 'Juruá',
                'idEstado' => 4,
            ),
            108 => 
            array (
                'id' => 109,
                'nome' => 'Jutaí',
                'idEstado' => 4,
            ),
            109 => 
            array (
                'id' => 110,
                'nome' => 'Lábrea',
                'idEstado' => 4,
            ),
            110 => 
            array (
                'id' => 111,
                'nome' => 'Manacapuru',
                'idEstado' => 4,
            ),
            111 => 
            array (
                'id' => 112,
                'nome' => 'Manaquiri',
                'idEstado' => 4,
            ),
            112 => 
            array (
                'id' => 113,
                'nome' => 'Manaus',
                'idEstado' => 4,
            ),
            113 => 
            array (
                'id' => 114,
                'nome' => 'Manicoré',
                'idEstado' => 4,
            ),
            114 => 
            array (
                'id' => 115,
                'nome' => 'Maraã',
                'idEstado' => 4,
            ),
            115 => 
            array (
                'id' => 116,
                'nome' => 'Maués',
                'idEstado' => 4,
            ),
            116 => 
            array (
                'id' => 117,
                'nome' => 'Nhamundá',
                'idEstado' => 4,
            ),
            117 => 
            array (
                'id' => 118,
                'nome' => 'Nova Olinda do Norte',
                'idEstado' => 4,
            ),
            118 => 
            array (
                'id' => 119,
                'nome' => 'Novo Airão',
                'idEstado' => 4,
            ),
            119 => 
            array (
                'id' => 120,
                'nome' => 'Novo Aripuanã',
                'idEstado' => 4,
            ),
            120 => 
            array (
                'id' => 121,
                'nome' => 'Parintins',
                'idEstado' => 4,
            ),
            121 => 
            array (
                'id' => 122,
                'nome' => 'Pauini',
                'idEstado' => 4,
            ),
            122 => 
            array (
                'id' => 123,
                'nome' => 'Presidente Figueiredo',
                'idEstado' => 4,
            ),
            123 => 
            array (
                'id' => 124,
                'nome' => 'Rio Preto da Eva',
                'idEstado' => 4,
            ),
            124 => 
            array (
                'id' => 125,
                'nome' => 'Santa Isabel do Rio Negro',
                'idEstado' => 4,
            ),
            125 => 
            array (
                'id' => 126,
                'nome' => 'Santo Antônio do Içá',
                'idEstado' => 4,
            ),
            126 => 
            array (
                'id' => 127,
                'nome' => 'São Gabriel da Cachoeira',
                'idEstado' => 4,
            ),
            127 => 
            array (
                'id' => 128,
                'nome' => 'São Paulo de Olivença',
                'idEstado' => 4,
            ),
            128 => 
            array (
                'id' => 129,
                'nome' => 'São Sebastião do Uatumã',
                'idEstado' => 4,
            ),
            129 => 
            array (
                'id' => 130,
                'nome' => 'Silves',
                'idEstado' => 4,
            ),
            130 => 
            array (
                'id' => 131,
                'nome' => 'Tabatinga',
                'idEstado' => 4,
            ),
            131 => 
            array (
                'id' => 132,
                'nome' => 'Tapauá',
                'idEstado' => 4,
            ),
            132 => 
            array (
                'id' => 133,
                'nome' => 'Tefé',
                'idEstado' => 4,
            ),
            133 => 
            array (
                'id' => 134,
                'nome' => 'Tonantins',
                'idEstado' => 4,
            ),
            134 => 
            array (
                'id' => 135,
                'nome' => 'Uarini',
                'idEstado' => 4,
            ),
            135 => 
            array (
                'id' => 136,
                'nome' => 'Urucará',
                'idEstado' => 4,
            ),
            136 => 
            array (
                'id' => 137,
                'nome' => 'Urucurituba',
                'idEstado' => 4,
            ),
            137 => 
            array (
                'id' => 138,
                'nome' => 'Amajari',
                'idEstado' => 23,
            ),
            138 => 
            array (
                'id' => 139,
                'nome' => 'Alto Alegre',
                'idEstado' => 23,
            ),
            139 => 
            array (
                'id' => 140,
                'nome' => 'Boa Vista',
                'idEstado' => 23,
            ),
            140 => 
            array (
                'id' => 141,
                'nome' => 'Bonfim',
                'idEstado' => 23,
            ),
            141 => 
            array (
                'id' => 142,
                'nome' => 'Cantá',
                'idEstado' => 23,
            ),
            142 => 
            array (
                'id' => 143,
                'nome' => 'Caracaraí',
                'idEstado' => 23,
            ),
            143 => 
            array (
                'id' => 144,
                'nome' => 'Caroebe',
                'idEstado' => 23,
            ),
            144 => 
            array (
                'id' => 145,
                'nome' => 'Iracema',
                'idEstado' => 23,
            ),
            145 => 
            array (
                'id' => 146,
                'nome' => 'Mucajaí',
                'idEstado' => 23,
            ),
            146 => 
            array (
                'id' => 147,
                'nome' => 'Normandia',
                'idEstado' => 23,
            ),
            147 => 
            array (
                'id' => 148,
                'nome' => 'Pacaraima',
                'idEstado' => 23,
            ),
            148 => 
            array (
                'id' => 149,
                'nome' => 'Rorainópolis',
                'idEstado' => 23,
            ),
            149 => 
            array (
                'id' => 150,
                'nome' => 'São João da Baliza',
                'idEstado' => 23,
            ),
            150 => 
            array (
                'id' => 151,
                'nome' => 'São Luiz',
                'idEstado' => 23,
            ),
            151 => 
            array (
                'id' => 152,
                'nome' => 'Uiramutã',
                'idEstado' => 23,
            ),
            152 => 
            array (
                'id' => 153,
                'nome' => 'Abaetetuba',
                'idEstado' => 14,
            ),
            153 => 
            array (
                'id' => 154,
                'nome' => 'Abel Figueiredo',
                'idEstado' => 14,
            ),
            154 => 
            array (
                'id' => 155,
                'nome' => 'Acará',
                'idEstado' => 14,
            ),
            155 => 
            array (
                'id' => 156,
                'nome' => 'Afuá',
                'idEstado' => 14,
            ),
            156 => 
            array (
                'id' => 157,
                'nome' => 'Água Azul do Norte',
                'idEstado' => 14,
            ),
            157 => 
            array (
                'id' => 158,
                'nome' => 'Alenquer',
                'idEstado' => 14,
            ),
            158 => 
            array (
                'id' => 159,
                'nome' => 'Almeirim',
                'idEstado' => 14,
            ),
            159 => 
            array (
                'id' => 160,
                'nome' => 'Altamira',
                'idEstado' => 14,
            ),
            160 => 
            array (
                'id' => 161,
                'nome' => 'Anajás',
                'idEstado' => 14,
            ),
            161 => 
            array (
                'id' => 162,
                'nome' => 'Ananindeua',
                'idEstado' => 14,
            ),
            162 => 
            array (
                'id' => 163,
                'nome' => 'Anapu',
                'idEstado' => 14,
            ),
            163 => 
            array (
                'id' => 164,
                'nome' => 'Augusto Corrêa',
                'idEstado' => 14,
            ),
            164 => 
            array (
                'id' => 165,
                'nome' => 'Aurora do Pará',
                'idEstado' => 14,
            ),
            165 => 
            array (
                'id' => 166,
                'nome' => 'Aveiro',
                'idEstado' => 14,
            ),
            166 => 
            array (
                'id' => 167,
                'nome' => 'Bagre',
                'idEstado' => 14,
            ),
            167 => 
            array (
                'id' => 168,
                'nome' => 'Baião',
                'idEstado' => 14,
            ),
            168 => 
            array (
                'id' => 169,
                'nome' => 'Bannach',
                'idEstado' => 14,
            ),
            169 => 
            array (
                'id' => 170,
                'nome' => 'Barcarena',
                'idEstado' => 14,
            ),
            170 => 
            array (
                'id' => 171,
                'nome' => 'Belém',
                'idEstado' => 14,
            ),
            171 => 
            array (
                'id' => 172,
                'nome' => 'Belterra',
                'idEstado' => 14,
            ),
            172 => 
            array (
                'id' => 173,
                'nome' => 'Benevides',
                'idEstado' => 14,
            ),
            173 => 
            array (
                'id' => 174,
                'nome' => 'Bom Jesus do Tocantins',
                'idEstado' => 14,
            ),
            174 => 
            array (
                'id' => 175,
                'nome' => 'Bonito',
                'idEstado' => 14,
            ),
            175 => 
            array (
                'id' => 176,
                'nome' => 'Bragança',
                'idEstado' => 14,
            ),
            176 => 
            array (
                'id' => 177,
                'nome' => 'Brasil Novo',
                'idEstado' => 14,
            ),
            177 => 
            array (
                'id' => 178,
                'nome' => 'Brejo Grande do Araguaia',
                'idEstado' => 14,
            ),
            178 => 
            array (
                'id' => 179,
                'nome' => 'Breu Branco',
                'idEstado' => 14,
            ),
            179 => 
            array (
                'id' => 180,
                'nome' => 'Breves',
                'idEstado' => 14,
            ),
            180 => 
            array (
                'id' => 181,
                'nome' => 'Bujaru',
                'idEstado' => 14,
            ),
            181 => 
            array (
                'id' => 182,
                'nome' => 'Cachoeira do Piriá',
                'idEstado' => 14,
            ),
            182 => 
            array (
                'id' => 183,
                'nome' => 'Cachoeira do Arari',
                'idEstado' => 14,
            ),
            183 => 
            array (
                'id' => 184,
                'nome' => 'Cametá',
                'idEstado' => 14,
            ),
            184 => 
            array (
                'id' => 185,
                'nome' => 'Canaã dos Carajás',
                'idEstado' => 14,
            ),
            185 => 
            array (
                'id' => 186,
                'nome' => 'Capanema',
                'idEstado' => 14,
            ),
            186 => 
            array (
                'id' => 187,
                'nome' => 'Capitão Poço',
                'idEstado' => 14,
            ),
            187 => 
            array (
                'id' => 188,
                'nome' => 'Castanhal',
                'idEstado' => 14,
            ),
            188 => 
            array (
                'id' => 189,
                'nome' => 'Chaves',
                'idEstado' => 14,
            ),
            189 => 
            array (
                'id' => 190,
                'nome' => 'Colares',
                'idEstado' => 14,
            ),
            190 => 
            array (
                'id' => 191,
                'nome' => 'Conceição do Araguaia',
                'idEstado' => 14,
            ),
            191 => 
            array (
                'id' => 192,
                'nome' => 'Concórdia do Pará',
                'idEstado' => 14,
            ),
            192 => 
            array (
                'id' => 193,
                'nome' => 'Cumaru do Norte',
                'idEstado' => 14,
            ),
            193 => 
            array (
                'id' => 194,
                'nome' => 'Curionópolis',
                'idEstado' => 14,
            ),
            194 => 
            array (
                'id' => 195,
                'nome' => 'Curralinho',
                'idEstado' => 14,
            ),
            195 => 
            array (
                'id' => 196,
                'nome' => 'Curuá',
                'idEstado' => 14,
            ),
            196 => 
            array (
                'id' => 197,
                'nome' => 'Curuçá',
                'idEstado' => 14,
            ),
            197 => 
            array (
                'id' => 198,
                'nome' => 'Dom Eliseu',
                'idEstado' => 14,
            ),
            198 => 
            array (
                'id' => 199,
                'nome' => 'Eldorado dos Carajás',
                'idEstado' => 14,
            ),
            199 => 
            array (
                'id' => 200,
                'nome' => 'Faro',
                'idEstado' => 14,
            ),
            200 => 
            array (
                'id' => 201,
                'nome' => 'Floresta do Araguaia',
                'idEstado' => 14,
            ),
            201 => 
            array (
                'id' => 202,
                'nome' => 'Garrafão do Norte',
                'idEstado' => 14,
            ),
            202 => 
            array (
                'id' => 203,
                'nome' => 'Goianésia do Pará',
                'idEstado' => 14,
            ),
            203 => 
            array (
                'id' => 204,
                'nome' => 'Gurupá',
                'idEstado' => 14,
            ),
            204 => 
            array (
                'id' => 205,
                'nome' => 'Igarapé-Açu',
                'idEstado' => 14,
            ),
            205 => 
            array (
                'id' => 206,
                'nome' => 'Igarapé-Miri',
                'idEstado' => 14,
            ),
            206 => 
            array (
                'id' => 207,
                'nome' => 'Inhangapi',
                'idEstado' => 14,
            ),
            207 => 
            array (
                'id' => 208,
                'nome' => 'Ipixuna do Pará',
                'idEstado' => 14,
            ),
            208 => 
            array (
                'id' => 209,
                'nome' => 'Irituia',
                'idEstado' => 14,
            ),
            209 => 
            array (
                'id' => 210,
                'nome' => 'Itaituba',
                'idEstado' => 14,
            ),
            210 => 
            array (
                'id' => 211,
                'nome' => 'Itupiranga',
                'idEstado' => 14,
            ),
            211 => 
            array (
                'id' => 212,
                'nome' => 'Jacareacanga',
                'idEstado' => 14,
            ),
            212 => 
            array (
                'id' => 213,
                'nome' => 'Jacundá',
                'idEstado' => 14,
            ),
            213 => 
            array (
                'id' => 214,
                'nome' => 'Juruti',
                'idEstado' => 14,
            ),
            214 => 
            array (
                'id' => 215,
                'nome' => 'Limoeiro do Ajuru',
                'idEstado' => 14,
            ),
            215 => 
            array (
                'id' => 216,
                'nome' => 'Mãe do Rio',
                'idEstado' => 14,
            ),
            216 => 
            array (
                'id' => 217,
                'nome' => 'Magalhães Barata',
                'idEstado' => 14,
            ),
            217 => 
            array (
                'id' => 218,
                'nome' => 'Marabá',
                'idEstado' => 14,
            ),
            218 => 
            array (
                'id' => 219,
                'nome' => 'Maracanã',
                'idEstado' => 14,
            ),
            219 => 
            array (
                'id' => 220,
                'nome' => 'Marapanim',
                'idEstado' => 14,
            ),
            220 => 
            array (
                'id' => 221,
                'nome' => 'Marituba',
                'idEstado' => 14,
            ),
            221 => 
            array (
                'id' => 222,
                'nome' => 'Medicilândia',
                'idEstado' => 14,
            ),
            222 => 
            array (
                'id' => 223,
                'nome' => 'Melgaço',
                'idEstado' => 14,
            ),
            223 => 
            array (
                'id' => 224,
                'nome' => 'Mocajuba',
                'idEstado' => 14,
            ),
            224 => 
            array (
                'id' => 225,
                'nome' => 'Moju',
                'idEstado' => 14,
            ),
            225 => 
            array (
                'id' => 226,
                'nome' => 'Mojuí dos Campos',
                'idEstado' => 14,
            ),
            226 => 
            array (
                'id' => 227,
                'nome' => 'Monte Alegre',
                'idEstado' => 14,
            ),
            227 => 
            array (
                'id' => 228,
                'nome' => 'Muaná',
                'idEstado' => 14,
            ),
            228 => 
            array (
                'id' => 229,
                'nome' => 'Nova Esperança do Piriá',
                'idEstado' => 14,
            ),
            229 => 
            array (
                'id' => 230,
                'nome' => 'Nova Ipixuna',
                'idEstado' => 14,
            ),
            230 => 
            array (
                'id' => 231,
                'nome' => 'Nova Timboteua',
                'idEstado' => 14,
            ),
            231 => 
            array (
                'id' => 232,
                'nome' => 'Novo Progresso',
                'idEstado' => 14,
            ),
            232 => 
            array (
                'id' => 233,
                'nome' => 'Novo Repartimento',
                'idEstado' => 14,
            ),
            233 => 
            array (
                'id' => 234,
                'nome' => 'Óbidos',
                'idEstado' => 14,
            ),
            234 => 
            array (
                'id' => 235,
                'nome' => 'Oeiras do Pará',
                'idEstado' => 14,
            ),
            235 => 
            array (
                'id' => 236,
                'nome' => 'Oriximiná',
                'idEstado' => 14,
            ),
            236 => 
            array (
                'id' => 237,
                'nome' => 'Ourém',
                'idEstado' => 14,
            ),
            237 => 
            array (
                'id' => 238,
                'nome' => 'Ourilândia do Norte',
                'idEstado' => 14,
            ),
            238 => 
            array (
                'id' => 239,
                'nome' => 'Pacajá',
                'idEstado' => 14,
            ),
            239 => 
            array (
                'id' => 240,
                'nome' => 'Palestina do Pará',
                'idEstado' => 14,
            ),
            240 => 
            array (
                'id' => 241,
                'nome' => 'Paragominas',
                'idEstado' => 14,
            ),
            241 => 
            array (
                'id' => 242,
                'nome' => 'Parauapebas',
                'idEstado' => 14,
            ),
            242 => 
            array (
                'id' => 243,
                'nome' => 'Pau D\'Arco',
                'idEstado' => 14,
            ),
            243 => 
            array (
                'id' => 244,
                'nome' => 'Peixe-Boi',
                'idEstado' => 14,
            ),
            244 => 
            array (
                'id' => 245,
                'nome' => 'Piçarra',
                'idEstado' => 14,
            ),
            245 => 
            array (
                'id' => 246,
                'nome' => 'Placas',
                'idEstado' => 14,
            ),
            246 => 
            array (
                'id' => 247,
                'nome' => 'Ponta de Pedras',
                'idEstado' => 14,
            ),
            247 => 
            array (
                'id' => 248,
                'nome' => 'Portel',
                'idEstado' => 14,
            ),
            248 => 
            array (
                'id' => 249,
                'nome' => 'Porto de Moz',
                'idEstado' => 14,
            ),
            249 => 
            array (
                'id' => 250,
                'nome' => 'Prainha',
                'idEstado' => 14,
            ),
            250 => 
            array (
                'id' => 251,
                'nome' => 'Primavera',
                'idEstado' => 14,
            ),
            251 => 
            array (
                'id' => 252,
                'nome' => 'Quatipuru',
                'idEstado' => 14,
            ),
            252 => 
            array (
                'id' => 253,
                'nome' => 'Redenção',
                'idEstado' => 14,
            ),
            253 => 
            array (
                'id' => 254,
                'nome' => 'Rio Maria',
                'idEstado' => 14,
            ),
            254 => 
            array (
                'id' => 255,
                'nome' => 'Rondon do Pará',
                'idEstado' => 14,
            ),
            255 => 
            array (
                'id' => 256,
                'nome' => 'Rurópolis',
                'idEstado' => 14,
            ),
            256 => 
            array (
                'id' => 257,
                'nome' => 'Salinópolis',
                'idEstado' => 14,
            ),
            257 => 
            array (
                'id' => 258,
                'nome' => 'Salvaterra',
                'idEstado' => 14,
            ),
            258 => 
            array (
                'id' => 259,
                'nome' => 'Santa Bárbara do Pará',
                'idEstado' => 14,
            ),
            259 => 
            array (
                'id' => 260,
                'nome' => 'Santa Cruz do Arari',
                'idEstado' => 14,
            ),
            260 => 
            array (
                'id' => 261,
                'nome' => 'Santa Isabel do Pará',
                'idEstado' => 14,
            ),
            261 => 
            array (
                'id' => 262,
                'nome' => 'Santa Luzia do Pará',
                'idEstado' => 14,
            ),
            262 => 
            array (
                'id' => 263,
                'nome' => 'Santa Maria das Barreiras',
                'idEstado' => 14,
            ),
            263 => 
            array (
                'id' => 264,
                'nome' => 'Santa Maria do Pará',
                'idEstado' => 14,
            ),
            264 => 
            array (
                'id' => 265,
                'nome' => 'Santana do Araguaia',
                'idEstado' => 14,
            ),
            265 => 
            array (
                'id' => 266,
                'nome' => 'Santarém',
                'idEstado' => 14,
            ),
            266 => 
            array (
                'id' => 267,
                'nome' => 'Santarém Novo',
                'idEstado' => 14,
            ),
            267 => 
            array (
                'id' => 268,
                'nome' => 'Santo Antônio do Tauá',
                'idEstado' => 14,
            ),
            268 => 
            array (
                'id' => 269,
                'nome' => 'São Caetano de Odivelas',
                'idEstado' => 14,
            ),
            269 => 
            array (
                'id' => 270,
                'nome' => 'São Domingos do Araguaia',
                'idEstado' => 14,
            ),
            270 => 
            array (
                'id' => 271,
                'nome' => 'São Domingos do Capim',
                'idEstado' => 14,
            ),
            271 => 
            array (
                'id' => 272,
                'nome' => 'São Félix do Xingu',
                'idEstado' => 14,
            ),
            272 => 
            array (
                'id' => 273,
                'nome' => 'São Francisco do Pará',
                'idEstado' => 14,
            ),
            273 => 
            array (
                'id' => 274,
                'nome' => 'São Geraldo do Araguaia',
                'idEstado' => 14,
            ),
            274 => 
            array (
                'id' => 275,
                'nome' => 'São João da Ponta',
                'idEstado' => 14,
            ),
            275 => 
            array (
                'id' => 276,
                'nome' => 'São João de Pirabas',
                'idEstado' => 14,
            ),
            276 => 
            array (
                'id' => 277,
                'nome' => 'São João do Araguaia',
                'idEstado' => 14,
            ),
            277 => 
            array (
                'id' => 278,
                'nome' => 'São Miguel do Guamá',
                'idEstado' => 14,
            ),
            278 => 
            array (
                'id' => 279,
                'nome' => 'São Sebastião da Boa Vista',
                'idEstado' => 14,
            ),
            279 => 
            array (
                'id' => 280,
                'nome' => 'Sapucaia',
                'idEstado' => 14,
            ),
            280 => 
            array (
                'id' => 281,
                'nome' => 'Senador José Porfírio',
                'idEstado' => 14,
            ),
            281 => 
            array (
                'id' => 282,
                'nome' => 'Soure',
                'idEstado' => 14,
            ),
            282 => 
            array (
                'id' => 283,
                'nome' => 'Tailândia',
                'idEstado' => 14,
            ),
            283 => 
            array (
                'id' => 284,
                'nome' => 'Terra Alta',
                'idEstado' => 14,
            ),
            284 => 
            array (
                'id' => 285,
                'nome' => 'Terra Santa',
                'idEstado' => 14,
            ),
            285 => 
            array (
                'id' => 286,
                'nome' => 'Tomé-Açu',
                'idEstado' => 14,
            ),
            286 => 
            array (
                'id' => 287,
                'nome' => 'Tracuateua',
                'idEstado' => 14,
            ),
            287 => 
            array (
                'id' => 288,
                'nome' => 'Trairão',
                'idEstado' => 14,
            ),
            288 => 
            array (
                'id' => 289,
                'nome' => 'Tucumã',
                'idEstado' => 14,
            ),
            289 => 
            array (
                'id' => 290,
                'nome' => 'Tucuruí',
                'idEstado' => 14,
            ),
            290 => 
            array (
                'id' => 291,
                'nome' => 'Ulianópolis',
                'idEstado' => 14,
            ),
            291 => 
            array (
                'id' => 292,
                'nome' => 'Uruará',
                'idEstado' => 14,
            ),
            292 => 
            array (
                'id' => 293,
                'nome' => 'Vigia',
                'idEstado' => 14,
            ),
            293 => 
            array (
                'id' => 294,
                'nome' => 'Viseu',
                'idEstado' => 14,
            ),
            294 => 
            array (
                'id' => 295,
                'nome' => 'Vitória do Xingu',
                'idEstado' => 14,
            ),
            295 => 
            array (
                'id' => 296,
                'nome' => 'Xinguara',
                'idEstado' => 14,
            ),
            296 => 
            array (
                'id' => 297,
                'nome' => 'Serra do Navio',
                'idEstado' => 3,
            ),
            297 => 
            array (
                'id' => 298,
                'nome' => 'Amapá',
                'idEstado' => 3,
            ),
            298 => 
            array (
                'id' => 299,
                'nome' => 'Pedra Branca do Amapari',
                'idEstado' => 3,
            ),
            299 => 
            array (
                'id' => 300,
                'nome' => 'Calçoene',
                'idEstado' => 3,
            ),
            300 => 
            array (
                'id' => 301,
                'nome' => 'Cutias',
                'idEstado' => 3,
            ),
            301 => 
            array (
                'id' => 302,
                'nome' => 'Ferreira Gomes',
                'idEstado' => 3,
            ),
            302 => 
            array (
                'id' => 303,
                'nome' => 'Itaubal',
                'idEstado' => 3,
            ),
            303 => 
            array (
                'id' => 304,
                'nome' => 'Laranjal do Jari',
                'idEstado' => 3,
            ),
            304 => 
            array (
                'id' => 305,
                'nome' => 'Macapá',
                'idEstado' => 3,
            ),
            305 => 
            array (
                'id' => 306,
                'nome' => 'Mazagão',
                'idEstado' => 3,
            ),
            306 => 
            array (
                'id' => 307,
                'nome' => 'Oiapoque',
                'idEstado' => 3,
            ),
            307 => 
            array (
                'id' => 308,
                'nome' => 'Porto Grande',
                'idEstado' => 3,
            ),
            308 => 
            array (
                'id' => 309,
                'nome' => 'Pracuúba',
                'idEstado' => 3,
            ),
            309 => 
            array (
                'id' => 310,
                'nome' => 'Santana',
                'idEstado' => 3,
            ),
            310 => 
            array (
                'id' => 311,
                'nome' => 'Tartarugalzinho',
                'idEstado' => 3,
            ),
            311 => 
            array (
                'id' => 312,
                'nome' => 'Vitória do Jari',
                'idEstado' => 3,
            ),
            312 => 
            array (
                'id' => 313,
                'nome' => 'Abreulândia',
                'idEstado' => 27,
            ),
            313 => 
            array (
                'id' => 314,
                'nome' => 'Aguiarnópolis',
                'idEstado' => 27,
            ),
            314 => 
            array (
                'id' => 315,
                'nome' => 'Aliança do Tocantins',
                'idEstado' => 27,
            ),
            315 => 
            array (
                'id' => 316,
                'nome' => 'Almas',
                'idEstado' => 27,
            ),
            316 => 
            array (
                'id' => 317,
                'nome' => 'Alvorada',
                'idEstado' => 27,
            ),
            317 => 
            array (
                'id' => 318,
                'nome' => 'Ananás',
                'idEstado' => 27,
            ),
            318 => 
            array (
                'id' => 319,
                'nome' => 'Angico',
                'idEstado' => 27,
            ),
            319 => 
            array (
                'id' => 320,
                'nome' => 'Aparecida do Rio Negro',
                'idEstado' => 27,
            ),
            320 => 
            array (
                'id' => 321,
                'nome' => 'Aragominas',
                'idEstado' => 27,
            ),
            321 => 
            array (
                'id' => 322,
                'nome' => 'Araguacema',
                'idEstado' => 27,
            ),
            322 => 
            array (
                'id' => 323,
                'nome' => 'Araguaçu',
                'idEstado' => 27,
            ),
            323 => 
            array (
                'id' => 324,
                'nome' => 'Araguaína',
                'idEstado' => 27,
            ),
            324 => 
            array (
                'id' => 325,
                'nome' => 'Araguanã',
                'idEstado' => 27,
            ),
            325 => 
            array (
                'id' => 326,
                'nome' => 'Araguatins',
                'idEstado' => 27,
            ),
            326 => 
            array (
                'id' => 327,
                'nome' => 'Arapoema',
                'idEstado' => 27,
            ),
            327 => 
            array (
                'id' => 328,
                'nome' => 'Arraias',
                'idEstado' => 27,
            ),
            328 => 
            array (
                'id' => 329,
                'nome' => 'Augustinópolis',
                'idEstado' => 27,
            ),
            329 => 
            array (
                'id' => 330,
                'nome' => 'Aurora do Tocantins',
                'idEstado' => 27,
            ),
            330 => 
            array (
                'id' => 331,
                'nome' => 'Axixá do Tocantins',
                'idEstado' => 27,
            ),
            331 => 
            array (
                'id' => 332,
                'nome' => 'Babaçulândia',
                'idEstado' => 27,
            ),
            332 => 
            array (
                'id' => 333,
                'nome' => 'Bandeirantes do Tocantins',
                'idEstado' => 27,
            ),
            333 => 
            array (
                'id' => 334,
                'nome' => 'Barra do Ouro',
                'idEstado' => 27,
            ),
            334 => 
            array (
                'id' => 335,
                'nome' => 'Barrolândia',
                'idEstado' => 27,
            ),
            335 => 
            array (
                'id' => 336,
                'nome' => 'Bernardo Sayão',
                'idEstado' => 27,
            ),
            336 => 
            array (
                'id' => 337,
                'nome' => 'Bom Jesus do Tocantins',
                'idEstado' => 27,
            ),
            337 => 
            array (
                'id' => 338,
                'nome' => 'Brasilândia do Tocantins',
                'idEstado' => 27,
            ),
            338 => 
            array (
                'id' => 339,
                'nome' => 'Brejinho de Nazaré',
                'idEstado' => 27,
            ),
            339 => 
            array (
                'id' => 340,
                'nome' => 'Buriti do Tocantins',
                'idEstado' => 27,
            ),
            340 => 
            array (
                'id' => 341,
                'nome' => 'Cachoeirinha',
                'idEstado' => 27,
            ),
            341 => 
            array (
                'id' => 342,
                'nome' => 'Campos Lindos',
                'idEstado' => 27,
            ),
            342 => 
            array (
                'id' => 343,
                'nome' => 'Cariri do Tocantins',
                'idEstado' => 27,
            ),
            343 => 
            array (
                'id' => 344,
                'nome' => 'Carmolândia',
                'idEstado' => 27,
            ),
            344 => 
            array (
                'id' => 345,
                'nome' => 'Carrasco Bonito',
                'idEstado' => 27,
            ),
            345 => 
            array (
                'id' => 346,
                'nome' => 'Caseara',
                'idEstado' => 27,
            ),
            346 => 
            array (
                'id' => 347,
                'nome' => 'Centenário',
                'idEstado' => 27,
            ),
            347 => 
            array (
                'id' => 348,
                'nome' => 'Chapada de Areia',
                'idEstado' => 27,
            ),
            348 => 
            array (
                'id' => 349,
                'nome' => 'Chapada da Natividade',
                'idEstado' => 27,
            ),
            349 => 
            array (
                'id' => 350,
                'nome' => 'Colinas do Tocantins',
                'idEstado' => 27,
            ),
            350 => 
            array (
                'id' => 351,
                'nome' => 'Combinado',
                'idEstado' => 27,
            ),
            351 => 
            array (
                'id' => 352,
                'nome' => 'Conceição do Tocantins',
                'idEstado' => 27,
            ),
            352 => 
            array (
                'id' => 353,
                'nome' => 'Couto Magalhães',
                'idEstado' => 27,
            ),
            353 => 
            array (
                'id' => 354,
                'nome' => 'Cristalândia',
                'idEstado' => 27,
            ),
            354 => 
            array (
                'id' => 355,
                'nome' => 'Crixás do Tocantins',
                'idEstado' => 27,
            ),
            355 => 
            array (
                'id' => 356,
                'nome' => 'Darcinópolis',
                'idEstado' => 27,
            ),
            356 => 
            array (
                'id' => 357,
                'nome' => 'Dianópolis',
                'idEstado' => 27,
            ),
            357 => 
            array (
                'id' => 358,
                'nome' => 'Divinópolis do Tocantins',
                'idEstado' => 27,
            ),
            358 => 
            array (
                'id' => 359,
                'nome' => 'Dois Irmãos do Tocantins',
                'idEstado' => 27,
            ),
            359 => 
            array (
                'id' => 360,
                'nome' => 'Dueré',
                'idEstado' => 27,
            ),
            360 => 
            array (
                'id' => 361,
                'nome' => 'Esperantina',
                'idEstado' => 27,
            ),
            361 => 
            array (
                'id' => 362,
                'nome' => 'Fátima',
                'idEstado' => 27,
            ),
            362 => 
            array (
                'id' => 363,
                'nome' => 'Figueirópolis',
                'idEstado' => 27,
            ),
            363 => 
            array (
                'id' => 364,
                'nome' => 'Filadélfia',
                'idEstado' => 27,
            ),
            364 => 
            array (
                'id' => 365,
                'nome' => 'Formoso do Araguaia',
                'idEstado' => 27,
            ),
            365 => 
            array (
                'id' => 366,
                'nome' => 'Fortaleza do Tabocão',
                'idEstado' => 27,
            ),
            366 => 
            array (
                'id' => 367,
                'nome' => 'Goianorte',
                'idEstado' => 27,
            ),
            367 => 
            array (
                'id' => 368,
                'nome' => 'Goiatins',
                'idEstado' => 27,
            ),
            368 => 
            array (
                'id' => 369,
                'nome' => 'Guaraí',
                'idEstado' => 27,
            ),
            369 => 
            array (
                'id' => 370,
                'nome' => 'Gurupi',
                'idEstado' => 27,
            ),
            370 => 
            array (
                'id' => 371,
                'nome' => 'Ipueiras',
                'idEstado' => 27,
            ),
            371 => 
            array (
                'id' => 372,
                'nome' => 'Itacajá',
                'idEstado' => 27,
            ),
            372 => 
            array (
                'id' => 373,
                'nome' => 'Itaguatins',
                'idEstado' => 27,
            ),
            373 => 
            array (
                'id' => 374,
                'nome' => 'Itapiratins',
                'idEstado' => 27,
            ),
            374 => 
            array (
                'id' => 375,
                'nome' => 'Itaporã do Tocantins',
                'idEstado' => 27,
            ),
            375 => 
            array (
                'id' => 376,
                'nome' => 'Jaú do Tocantins',
                'idEstado' => 27,
            ),
            376 => 
            array (
                'id' => 377,
                'nome' => 'Juarina',
                'idEstado' => 27,
            ),
            377 => 
            array (
                'id' => 378,
                'nome' => 'Lagoa da Confusão',
                'idEstado' => 27,
            ),
            378 => 
            array (
                'id' => 379,
                'nome' => 'Lagoa do Tocantins',
                'idEstado' => 27,
            ),
            379 => 
            array (
                'id' => 380,
                'nome' => 'Lajeado',
                'idEstado' => 27,
            ),
            380 => 
            array (
                'id' => 381,
                'nome' => 'Lavandeira',
                'idEstado' => 27,
            ),
            381 => 
            array (
                'id' => 382,
                'nome' => 'Lizarda',
                'idEstado' => 27,
            ),
            382 => 
            array (
                'id' => 383,
                'nome' => 'Luzinópolis',
                'idEstado' => 27,
            ),
            383 => 
            array (
                'id' => 384,
                'nome' => 'Marianópolis do Tocantins',
                'idEstado' => 27,
            ),
            384 => 
            array (
                'id' => 385,
                'nome' => 'Mateiros',
                'idEstado' => 27,
            ),
            385 => 
            array (
                'id' => 386,
                'nome' => 'Maurilândia do Tocantins',
                'idEstado' => 27,
            ),
            386 => 
            array (
                'id' => 387,
                'nome' => 'Miracema do Tocantins',
                'idEstado' => 27,
            ),
            387 => 
            array (
                'id' => 388,
                'nome' => 'Miranorte',
                'idEstado' => 27,
            ),
            388 => 
            array (
                'id' => 389,
                'nome' => 'Monte do Carmo',
                'idEstado' => 27,
            ),
            389 => 
            array (
                'id' => 390,
                'nome' => 'Monte Santo do Tocantins',
                'idEstado' => 27,
            ),
            390 => 
            array (
                'id' => 391,
                'nome' => 'Palmeiras do Tocantins',
                'idEstado' => 27,
            ),
            391 => 
            array (
                'id' => 392,
                'nome' => 'Muricilândia',
                'idEstado' => 27,
            ),
            392 => 
            array (
                'id' => 393,
                'nome' => 'Natividade',
                'idEstado' => 27,
            ),
            393 => 
            array (
                'id' => 394,
                'nome' => 'Nazaré',
                'idEstado' => 27,
            ),
            394 => 
            array (
                'id' => 395,
                'nome' => 'Nova Olinda',
                'idEstado' => 27,
            ),
            395 => 
            array (
                'id' => 396,
                'nome' => 'Nova Rosalândia',
                'idEstado' => 27,
            ),
            396 => 
            array (
                'id' => 397,
                'nome' => 'Novo Acordo',
                'idEstado' => 27,
            ),
            397 => 
            array (
                'id' => 398,
                'nome' => 'Novo Alegre',
                'idEstado' => 27,
            ),
            398 => 
            array (
                'id' => 399,
                'nome' => 'Novo Jardim',
                'idEstado' => 27,
            ),
            399 => 
            array (
                'id' => 400,
                'nome' => 'Oliveira de Fátima',
                'idEstado' => 27,
            ),
            400 => 
            array (
                'id' => 401,
                'nome' => 'Palmeirante',
                'idEstado' => 27,
            ),
            401 => 
            array (
                'id' => 402,
                'nome' => 'Palmeirópolis',
                'idEstado' => 27,
            ),
            402 => 
            array (
                'id' => 403,
                'nome' => 'Paraíso do Tocantins',
                'idEstado' => 27,
            ),
            403 => 
            array (
                'id' => 404,
                'nome' => 'Paranã',
                'idEstado' => 27,
            ),
            404 => 
            array (
                'id' => 405,
                'nome' => 'Pau D\'Arco',
                'idEstado' => 27,
            ),
            405 => 
            array (
                'id' => 406,
                'nome' => 'Pedro Afonso',
                'idEstado' => 27,
            ),
            406 => 
            array (
                'id' => 407,
                'nome' => 'Peixe',
                'idEstado' => 27,
            ),
            407 => 
            array (
                'id' => 408,
                'nome' => 'Pequizeiro',
                'idEstado' => 27,
            ),
            408 => 
            array (
                'id' => 409,
                'nome' => 'Colméia',
                'idEstado' => 27,
            ),
            409 => 
            array (
                'id' => 410,
                'nome' => 'Pindorama do Tocantins',
                'idEstado' => 27,
            ),
            410 => 
            array (
                'id' => 411,
                'nome' => 'Piraquê',
                'idEstado' => 27,
            ),
            411 => 
            array (
                'id' => 412,
                'nome' => 'Pium',
                'idEstado' => 27,
            ),
            412 => 
            array (
                'id' => 413,
                'nome' => 'Ponte Alta do Bom Jesus',
                'idEstado' => 27,
            ),
            413 => 
            array (
                'id' => 414,
                'nome' => 'Ponte Alta do Tocantins',
                'idEstado' => 27,
            ),
            414 => 
            array (
                'id' => 415,
                'nome' => 'Porto Alegre do Tocantins',
                'idEstado' => 27,
            ),
            415 => 
            array (
                'id' => 416,
                'nome' => 'Porto Nacional',
                'idEstado' => 27,
            ),
            416 => 
            array (
                'id' => 417,
                'nome' => 'Praia Norte',
                'idEstado' => 27,
            ),
            417 => 
            array (
                'id' => 418,
                'nome' => 'Presidente Kennedy',
                'idEstado' => 27,
            ),
            418 => 
            array (
                'id' => 419,
                'nome' => 'Pugmil',
                'idEstado' => 27,
            ),
            419 => 
            array (
                'id' => 420,
                'nome' => 'Recursolândia',
                'idEstado' => 27,
            ),
            420 => 
            array (
                'id' => 421,
                'nome' => 'Riachinho',
                'idEstado' => 27,
            ),
            421 => 
            array (
                'id' => 422,
                'nome' => 'Rio da Conceição',
                'idEstado' => 27,
            ),
            422 => 
            array (
                'id' => 423,
                'nome' => 'Rio dos Bois',
                'idEstado' => 27,
            ),
            423 => 
            array (
                'id' => 424,
                'nome' => 'Rio Sono',
                'idEstado' => 27,
            ),
            424 => 
            array (
                'id' => 425,
                'nome' => 'Sampaio',
                'idEstado' => 27,
            ),
            425 => 
            array (
                'id' => 426,
                'nome' => 'Sandolândia',
                'idEstado' => 27,
            ),
            426 => 
            array (
                'id' => 427,
                'nome' => 'Santa Fé do Araguaia',
                'idEstado' => 27,
            ),
            427 => 
            array (
                'id' => 428,
                'nome' => 'Santa Maria do Tocantins',
                'idEstado' => 27,
            ),
            428 => 
            array (
                'id' => 429,
                'nome' => 'Santa Rita do Tocantins',
                'idEstado' => 27,
            ),
            429 => 
            array (
                'id' => 430,
                'nome' => 'Santa Rosa do Tocantins',
                'idEstado' => 27,
            ),
            430 => 
            array (
                'id' => 431,
                'nome' => 'Santa Tereza do Tocantins',
                'idEstado' => 27,
            ),
            431 => 
            array (
                'id' => 432,
                'nome' => 'Santa Terezinha do Tocantins',
                'idEstado' => 27,
            ),
            432 => 
            array (
                'id' => 433,
                'nome' => 'São Bento do Tocantins',
                'idEstado' => 27,
            ),
            433 => 
            array (
                'id' => 434,
                'nome' => 'São Félix do Tocantins',
                'idEstado' => 27,
            ),
            434 => 
            array (
                'id' => 435,
                'nome' => 'São Miguel do Tocantins',
                'idEstado' => 27,
            ),
            435 => 
            array (
                'id' => 436,
                'nome' => 'São Salvador do Tocantins',
                'idEstado' => 27,
            ),
            436 => 
            array (
                'id' => 437,
                'nome' => 'São Sebastião do Tocantins',
                'idEstado' => 27,
            ),
            437 => 
            array (
                'id' => 438,
                'nome' => 'São Valério',
                'idEstado' => 27,
            ),
            438 => 
            array (
                'id' => 439,
                'nome' => 'Silvanópolis',
                'idEstado' => 27,
            ),
            439 => 
            array (
                'id' => 440,
                'nome' => 'Sítio Novo do Tocantins',
                'idEstado' => 27,
            ),
            440 => 
            array (
                'id' => 441,
                'nome' => 'Sucupira',
                'idEstado' => 27,
            ),
            441 => 
            array (
                'id' => 442,
                'nome' => 'Taguatinga',
                'idEstado' => 27,
            ),
            442 => 
            array (
                'id' => 443,
                'nome' => 'Taipas do Tocantins',
                'idEstado' => 27,
            ),
            443 => 
            array (
                'id' => 444,
                'nome' => 'Talismã',
                'idEstado' => 27,
            ),
            444 => 
            array (
                'id' => 445,
                'nome' => 'Palmas',
                'idEstado' => 27,
            ),
            445 => 
            array (
                'id' => 446,
                'nome' => 'Tocantínia',
                'idEstado' => 27,
            ),
            446 => 
            array (
                'id' => 447,
                'nome' => 'Tocantinópolis',
                'idEstado' => 27,
            ),
            447 => 
            array (
                'id' => 448,
                'nome' => 'Tupirama',
                'idEstado' => 27,
            ),
            448 => 
            array (
                'id' => 449,
                'nome' => 'Tupiratins',
                'idEstado' => 27,
            ),
            449 => 
            array (
                'id' => 450,
                'nome' => 'Wanderlândia',
                'idEstado' => 27,
            ),
            450 => 
            array (
                'id' => 451,
                'nome' => 'Xambioá',
                'idEstado' => 27,
            ),
            451 => 
            array (
                'id' => 452,
                'nome' => 'Açailândia',
                'idEstado' => 10,
            ),
            452 => 
            array (
                'id' => 453,
                'nome' => 'Afonso Cunha',
                'idEstado' => 10,
            ),
            453 => 
            array (
                'id' => 454,
                'nome' => 'Água Doce do Maranhão',
                'idEstado' => 10,
            ),
            454 => 
            array (
                'id' => 455,
                'nome' => 'Alcântara',
                'idEstado' => 10,
            ),
            455 => 
            array (
                'id' => 456,
                'nome' => 'Aldeias Altas',
                'idEstado' => 10,
            ),
            456 => 
            array (
                'id' => 457,
                'nome' => 'Altamira do Maranhão',
                'idEstado' => 10,
            ),
            457 => 
            array (
                'id' => 458,
                'nome' => 'Alto Alegre do Maranhão',
                'idEstado' => 10,
            ),
            458 => 
            array (
                'id' => 459,
                'nome' => 'Alto Alegre do Pindaré',
                'idEstado' => 10,
            ),
            459 => 
            array (
                'id' => 460,
                'nome' => 'Alto Parnaíba',
                'idEstado' => 10,
            ),
            460 => 
            array (
                'id' => 461,
                'nome' => 'Amapá do Maranhão',
                'idEstado' => 10,
            ),
            461 => 
            array (
                'id' => 462,
                'nome' => 'Amarante do Maranhão',
                'idEstado' => 10,
            ),
            462 => 
            array (
                'id' => 463,
                'nome' => 'Anajatuba',
                'idEstado' => 10,
            ),
            463 => 
            array (
                'id' => 464,
                'nome' => 'Anapurus',
                'idEstado' => 10,
            ),
            464 => 
            array (
                'id' => 465,
                'nome' => 'Apicum-Açu',
                'idEstado' => 10,
            ),
            465 => 
            array (
                'id' => 466,
                'nome' => 'Araguanã',
                'idEstado' => 10,
            ),
            466 => 
            array (
                'id' => 467,
                'nome' => 'Araioses',
                'idEstado' => 10,
            ),
            467 => 
            array (
                'id' => 468,
                'nome' => 'Arame',
                'idEstado' => 10,
            ),
            468 => 
            array (
                'id' => 469,
                'nome' => 'Arari',
                'idEstado' => 10,
            ),
            469 => 
            array (
                'id' => 470,
                'nome' => 'Axixá',
                'idEstado' => 10,
            ),
            470 => 
            array (
                'id' => 471,
                'nome' => 'Bacabal',
                'idEstado' => 10,
            ),
            471 => 
            array (
                'id' => 472,
                'nome' => 'Bacabeira',
                'idEstado' => 10,
            ),
            472 => 
            array (
                'id' => 473,
                'nome' => 'Bacuri',
                'idEstado' => 10,
            ),
            473 => 
            array (
                'id' => 474,
                'nome' => 'Bacurituba',
                'idEstado' => 10,
            ),
            474 => 
            array (
                'id' => 475,
                'nome' => 'Balsas',
                'idEstado' => 10,
            ),
            475 => 
            array (
                'id' => 476,
                'nome' => 'Barão de Grajaú',
                'idEstado' => 10,
            ),
            476 => 
            array (
                'id' => 477,
                'nome' => 'Barra do Corda',
                'idEstado' => 10,
            ),
            477 => 
            array (
                'id' => 478,
                'nome' => 'Barreirinhas',
                'idEstado' => 10,
            ),
            478 => 
            array (
                'id' => 479,
                'nome' => 'Belágua',
                'idEstado' => 10,
            ),
            479 => 
            array (
                'id' => 480,
                'nome' => 'Bela Vista do Maranhão',
                'idEstado' => 10,
            ),
            480 => 
            array (
                'id' => 481,
                'nome' => 'Benedito Leite',
                'idEstado' => 10,
            ),
            481 => 
            array (
                'id' => 482,
                'nome' => 'Bequimão',
                'idEstado' => 10,
            ),
            482 => 
            array (
                'id' => 483,
                'nome' => 'Bernardo do Mearim',
                'idEstado' => 10,
            ),
            483 => 
            array (
                'id' => 484,
                'nome' => 'Boa Vista do Gurupi',
                'idEstado' => 10,
            ),
            484 => 
            array (
                'id' => 485,
                'nome' => 'Bom Jardim',
                'idEstado' => 10,
            ),
            485 => 
            array (
                'id' => 486,
                'nome' => 'Bom Jesus das Selvas',
                'idEstado' => 10,
            ),
            486 => 
            array (
                'id' => 487,
                'nome' => 'Bom Lugar',
                'idEstado' => 10,
            ),
            487 => 
            array (
                'id' => 488,
                'nome' => 'Brejo',
                'idEstado' => 10,
            ),
            488 => 
            array (
                'id' => 489,
                'nome' => 'Brejo de Areia',
                'idEstado' => 10,
            ),
            489 => 
            array (
                'id' => 490,
                'nome' => 'Buriti',
                'idEstado' => 10,
            ),
            490 => 
            array (
                'id' => 491,
                'nome' => 'Buriti Bravo',
                'idEstado' => 10,
            ),
            491 => 
            array (
                'id' => 492,
                'nome' => 'Buriticupu',
                'idEstado' => 10,
            ),
            492 => 
            array (
                'id' => 493,
                'nome' => 'Buritirana',
                'idEstado' => 10,
            ),
            493 => 
            array (
                'id' => 494,
                'nome' => 'Cachoeira Grande',
                'idEstado' => 10,
            ),
            494 => 
            array (
                'id' => 495,
                'nome' => 'Cajapió',
                'idEstado' => 10,
            ),
            495 => 
            array (
                'id' => 496,
                'nome' => 'Cajari',
                'idEstado' => 10,
            ),
            496 => 
            array (
                'id' => 497,
                'nome' => 'Campestre do Maranhão',
                'idEstado' => 10,
            ),
            497 => 
            array (
                'id' => 498,
                'nome' => 'Cândido Mendes',
                'idEstado' => 10,
            ),
            498 => 
            array (
                'id' => 499,
                'nome' => 'Cantanhede',
                'idEstado' => 10,
            ),
            499 => 
            array (
                'id' => 500,
                'nome' => 'Capinzal do Norte',
                'idEstado' => 10,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'nome' => 'Carolina',
                'idEstado' => 10,
            ),
            1 => 
            array (
                'id' => 502,
                'nome' => 'Carutapera',
                'idEstado' => 10,
            ),
            2 => 
            array (
                'id' => 503,
                'nome' => 'Caxias',
                'idEstado' => 10,
            ),
            3 => 
            array (
                'id' => 504,
                'nome' => 'Cedral',
                'idEstado' => 10,
            ),
            4 => 
            array (
                'id' => 505,
                'nome' => 'Central do Maranhão',
                'idEstado' => 10,
            ),
            5 => 
            array (
                'id' => 506,
                'nome' => 'Centro do Guilherme',
                'idEstado' => 10,
            ),
            6 => 
            array (
                'id' => 507,
                'nome' => 'Centro Novo do Maranhão',
                'idEstado' => 10,
            ),
            7 => 
            array (
                'id' => 508,
                'nome' => 'Chapadinha',
                'idEstado' => 10,
            ),
            8 => 
            array (
                'id' => 509,
                'nome' => 'Cidelândia',
                'idEstado' => 10,
            ),
            9 => 
            array (
                'id' => 510,
                'nome' => 'Codó',
                'idEstado' => 10,
            ),
            10 => 
            array (
                'id' => 511,
                'nome' => 'Coelho Neto',
                'idEstado' => 10,
            ),
            11 => 
            array (
                'id' => 512,
                'nome' => 'Colinas',
                'idEstado' => 10,
            ),
            12 => 
            array (
                'id' => 513,
                'nome' => 'Conceição do Lago-Açu',
                'idEstado' => 10,
            ),
            13 => 
            array (
                'id' => 514,
                'nome' => 'Coroatá',
                'idEstado' => 10,
            ),
            14 => 
            array (
                'id' => 515,
                'nome' => 'Cururupu',
                'idEstado' => 10,
            ),
            15 => 
            array (
                'id' => 516,
                'nome' => 'Davinópolis',
                'idEstado' => 10,
            ),
            16 => 
            array (
                'id' => 517,
                'nome' => 'Dom Pedro',
                'idEstado' => 10,
            ),
            17 => 
            array (
                'id' => 518,
                'nome' => 'Duque Bacelar',
                'idEstado' => 10,
            ),
            18 => 
            array (
                'id' => 519,
                'nome' => 'Esperantinópolis',
                'idEstado' => 10,
            ),
            19 => 
            array (
                'id' => 520,
                'nome' => 'Estreito',
                'idEstado' => 10,
            ),
            20 => 
            array (
                'id' => 521,
                'nome' => 'Feira Nova do Maranhão',
                'idEstado' => 10,
            ),
            21 => 
            array (
                'id' => 522,
                'nome' => 'Fernando Falcão',
                'idEstado' => 10,
            ),
            22 => 
            array (
                'id' => 523,
                'nome' => 'Formosa da Serra Negra',
                'idEstado' => 10,
            ),
            23 => 
            array (
                'id' => 524,
                'nome' => 'Fortaleza dos Nogueiras',
                'idEstado' => 10,
            ),
            24 => 
            array (
                'id' => 525,
                'nome' => 'Fortuna',
                'idEstado' => 10,
            ),
            25 => 
            array (
                'id' => 526,
                'nome' => 'Godofredo Viana',
                'idEstado' => 10,
            ),
            26 => 
            array (
                'id' => 527,
                'nome' => 'Gonçalves Dias',
                'idEstado' => 10,
            ),
            27 => 
            array (
                'id' => 528,
                'nome' => 'Governador Archer',
                'idEstado' => 10,
            ),
            28 => 
            array (
                'id' => 529,
                'nome' => 'Governador Edison Lobão',
                'idEstado' => 10,
            ),
            29 => 
            array (
                'id' => 530,
                'nome' => 'Governador Eugênio Barros',
                'idEstado' => 10,
            ),
            30 => 
            array (
                'id' => 531,
                'nome' => 'Governador Luiz Rocha',
                'idEstado' => 10,
            ),
            31 => 
            array (
                'id' => 532,
                'nome' => 'Governador Newton Bello',
                'idEstado' => 10,
            ),
            32 => 
            array (
                'id' => 533,
                'nome' => 'Governador Nunes Freire',
                'idEstado' => 10,
            ),
            33 => 
            array (
                'id' => 534,
                'nome' => 'Graça Aranha',
                'idEstado' => 10,
            ),
            34 => 
            array (
                'id' => 535,
                'nome' => 'Grajaú',
                'idEstado' => 10,
            ),
            35 => 
            array (
                'id' => 536,
                'nome' => 'Guimarães',
                'idEstado' => 10,
            ),
            36 => 
            array (
                'id' => 537,
                'nome' => 'Humberto de Campos',
                'idEstado' => 10,
            ),
            37 => 
            array (
                'id' => 538,
                'nome' => 'Icatu',
                'idEstado' => 10,
            ),
            38 => 
            array (
                'id' => 539,
                'nome' => 'Igarapé do Meio',
                'idEstado' => 10,
            ),
            39 => 
            array (
                'id' => 540,
                'nome' => 'Igarapé Grande',
                'idEstado' => 10,
            ),
            40 => 
            array (
                'id' => 541,
                'nome' => 'Imperatriz',
                'idEstado' => 10,
            ),
            41 => 
            array (
                'id' => 542,
                'nome' => 'Itaipava do Grajaú',
                'idEstado' => 10,
            ),
            42 => 
            array (
                'id' => 543,
                'nome' => 'Itapecuru Mirim',
                'idEstado' => 10,
            ),
            43 => 
            array (
                'id' => 544,
                'nome' => 'Itinga do Maranhão',
                'idEstado' => 10,
            ),
            44 => 
            array (
                'id' => 545,
                'nome' => 'Jatobá',
                'idEstado' => 10,
            ),
            45 => 
            array (
                'id' => 546,
                'nome' => 'Jenipapo dos Vieiras',
                'idEstado' => 10,
            ),
            46 => 
            array (
                'id' => 547,
                'nome' => 'João Lisboa',
                'idEstado' => 10,
            ),
            47 => 
            array (
                'id' => 548,
                'nome' => 'Joselândia',
                'idEstado' => 10,
            ),
            48 => 
            array (
                'id' => 549,
                'nome' => 'Junco do Maranhão',
                'idEstado' => 10,
            ),
            49 => 
            array (
                'id' => 550,
                'nome' => 'Lago da Pedra',
                'idEstado' => 10,
            ),
            50 => 
            array (
                'id' => 551,
                'nome' => 'Lago do Junco',
                'idEstado' => 10,
            ),
            51 => 
            array (
                'id' => 552,
                'nome' => 'Lago Verde',
                'idEstado' => 10,
            ),
            52 => 
            array (
                'id' => 553,
                'nome' => 'Lagoa do Mato',
                'idEstado' => 10,
            ),
            53 => 
            array (
                'id' => 554,
                'nome' => 'Lago dos Rodrigues',
                'idEstado' => 10,
            ),
            54 => 
            array (
                'id' => 555,
                'nome' => 'Lagoa Grande do Maranhão',
                'idEstado' => 10,
            ),
            55 => 
            array (
                'id' => 556,
                'nome' => 'Lajeado Novo',
                'idEstado' => 10,
            ),
            56 => 
            array (
                'id' => 557,
                'nome' => 'Lima Campos',
                'idEstado' => 10,
            ),
            57 => 
            array (
                'id' => 558,
                'nome' => 'Loreto',
                'idEstado' => 10,
            ),
            58 => 
            array (
                'id' => 559,
                'nome' => 'Luís Domingues',
                'idEstado' => 10,
            ),
            59 => 
            array (
                'id' => 560,
                'nome' => 'Magalhães de Almeida',
                'idEstado' => 10,
            ),
            60 => 
            array (
                'id' => 561,
                'nome' => 'Maracaçumé',
                'idEstado' => 10,
            ),
            61 => 
            array (
                'id' => 562,
                'nome' => 'Marajá do Sena',
                'idEstado' => 10,
            ),
            62 => 
            array (
                'id' => 563,
                'nome' => 'Maranhãozinho',
                'idEstado' => 10,
            ),
            63 => 
            array (
                'id' => 564,
                'nome' => 'Mata Roma',
                'idEstado' => 10,
            ),
            64 => 
            array (
                'id' => 565,
                'nome' => 'Matinha',
                'idEstado' => 10,
            ),
            65 => 
            array (
                'id' => 566,
                'nome' => 'Matões',
                'idEstado' => 10,
            ),
            66 => 
            array (
                'id' => 567,
                'nome' => 'Matões do Norte',
                'idEstado' => 10,
            ),
            67 => 
            array (
                'id' => 568,
                'nome' => 'Milagres do Maranhão',
                'idEstado' => 10,
            ),
            68 => 
            array (
                'id' => 569,
                'nome' => 'Mirador',
                'idEstado' => 10,
            ),
            69 => 
            array (
                'id' => 570,
                'nome' => 'Miranda do Norte',
                'idEstado' => 10,
            ),
            70 => 
            array (
                'id' => 571,
                'nome' => 'Mirinzal',
                'idEstado' => 10,
            ),
            71 => 
            array (
                'id' => 572,
                'nome' => 'Monção',
                'idEstado' => 10,
            ),
            72 => 
            array (
                'id' => 573,
                'nome' => 'Montes Altos',
                'idEstado' => 10,
            ),
            73 => 
            array (
                'id' => 574,
                'nome' => 'Morros',
                'idEstado' => 10,
            ),
            74 => 
            array (
                'id' => 575,
                'nome' => 'Nina Rodrigues',
                'idEstado' => 10,
            ),
            75 => 
            array (
                'id' => 576,
                'nome' => 'Nova Colinas',
                'idEstado' => 10,
            ),
            76 => 
            array (
                'id' => 577,
                'nome' => 'Nova Iorque',
                'idEstado' => 10,
            ),
            77 => 
            array (
                'id' => 578,
                'nome' => 'Nova Olinda do Maranhão',
                'idEstado' => 10,
            ),
            78 => 
            array (
                'id' => 579,
                'nome' => 'Olho D\'Água das Cunhãs',
                'idEstado' => 10,
            ),
            79 => 
            array (
                'id' => 580,
                'nome' => 'Olinda Nova do Maranhão',
                'idEstado' => 10,
            ),
            80 => 
            array (
                'id' => 581,
                'nome' => 'Paço do Lumiar',
                'idEstado' => 10,
            ),
            81 => 
            array (
                'id' => 582,
                'nome' => 'Palmeirândia',
                'idEstado' => 10,
            ),
            82 => 
            array (
                'id' => 583,
                'nome' => 'Paraibano',
                'idEstado' => 10,
            ),
            83 => 
            array (
                'id' => 584,
                'nome' => 'Parnarama',
                'idEstado' => 10,
            ),
            84 => 
            array (
                'id' => 585,
                'nome' => 'Passagem Franca',
                'idEstado' => 10,
            ),
            85 => 
            array (
                'id' => 586,
                'nome' => 'Pastos Bons',
                'idEstado' => 10,
            ),
            86 => 
            array (
                'id' => 587,
                'nome' => 'Paulino Neves',
                'idEstado' => 10,
            ),
            87 => 
            array (
                'id' => 588,
                'nome' => 'Paulo Ramos',
                'idEstado' => 10,
            ),
            88 => 
            array (
                'id' => 589,
                'nome' => 'Pedreiras',
                'idEstado' => 10,
            ),
            89 => 
            array (
                'id' => 590,
                'nome' => 'Pedro do Rosário',
                'idEstado' => 10,
            ),
            90 => 
            array (
                'id' => 591,
                'nome' => 'Penalva',
                'idEstado' => 10,
            ),
            91 => 
            array (
                'id' => 592,
                'nome' => 'Peri Mirim',
                'idEstado' => 10,
            ),
            92 => 
            array (
                'id' => 593,
                'nome' => 'Peritoró',
                'idEstado' => 10,
            ),
            93 => 
            array (
                'id' => 594,
                'nome' => 'Pindaré-Mirim',
                'idEstado' => 10,
            ),
            94 => 
            array (
                'id' => 595,
                'nome' => 'Pinheiro',
                'idEstado' => 10,
            ),
            95 => 
            array (
                'id' => 596,
                'nome' => 'Pio XII',
                'idEstado' => 10,
            ),
            96 => 
            array (
                'id' => 597,
                'nome' => 'Pirapemas',
                'idEstado' => 10,
            ),
            97 => 
            array (
                'id' => 598,
                'nome' => 'Poção de Pedras',
                'idEstado' => 10,
            ),
            98 => 
            array (
                'id' => 599,
                'nome' => 'Porto Franco',
                'idEstado' => 10,
            ),
            99 => 
            array (
                'id' => 600,
                'nome' => 'Porto Rico do Maranhão',
                'idEstado' => 10,
            ),
            100 => 
            array (
                'id' => 601,
                'nome' => 'Presidente Dutra',
                'idEstado' => 10,
            ),
            101 => 
            array (
                'id' => 602,
                'nome' => 'Presidente Juscelino',
                'idEstado' => 10,
            ),
            102 => 
            array (
                'id' => 603,
                'nome' => 'Presidente Médici',
                'idEstado' => 10,
            ),
            103 => 
            array (
                'id' => 604,
                'nome' => 'Presidente Sarney',
                'idEstado' => 10,
            ),
            104 => 
            array (
                'id' => 605,
                'nome' => 'Presidente Vargas',
                'idEstado' => 10,
            ),
            105 => 
            array (
                'id' => 606,
                'nome' => 'Primeira Cruz',
                'idEstado' => 10,
            ),
            106 => 
            array (
                'id' => 607,
                'nome' => 'Raposa',
                'idEstado' => 10,
            ),
            107 => 
            array (
                'id' => 608,
                'nome' => 'Riachão',
                'idEstado' => 10,
            ),
            108 => 
            array (
                'id' => 609,
                'nome' => 'Ribamar Fiquene',
                'idEstado' => 10,
            ),
            109 => 
            array (
                'id' => 610,
                'nome' => 'Rosário',
                'idEstado' => 10,
            ),
            110 => 
            array (
                'id' => 611,
                'nome' => 'Sambaíba',
                'idEstado' => 10,
            ),
            111 => 
            array (
                'id' => 612,
                'nome' => 'Santa Filomena do Maranhão',
                'idEstado' => 10,
            ),
            112 => 
            array (
                'id' => 613,
                'nome' => 'Santa Helena',
                'idEstado' => 10,
            ),
            113 => 
            array (
                'id' => 614,
                'nome' => 'Santa Inês',
                'idEstado' => 10,
            ),
            114 => 
            array (
                'id' => 615,
                'nome' => 'Santa Luzia',
                'idEstado' => 10,
            ),
            115 => 
            array (
                'id' => 616,
                'nome' => 'Santa Luzia do Paruá',
                'idEstado' => 10,
            ),
            116 => 
            array (
                'id' => 617,
                'nome' => 'Santa Quitéria do Maranhão',
                'idEstado' => 10,
            ),
            117 => 
            array (
                'id' => 618,
                'nome' => 'Santa Rita',
                'idEstado' => 10,
            ),
            118 => 
            array (
                'id' => 619,
                'nome' => 'Santana do Maranhão',
                'idEstado' => 10,
            ),
            119 => 
            array (
                'id' => 620,
                'nome' => 'Santo Amaro do Maranhão',
                'idEstado' => 10,
            ),
            120 => 
            array (
                'id' => 621,
                'nome' => 'Santo Antônio dos Lopes',
                'idEstado' => 10,
            ),
            121 => 
            array (
                'id' => 622,
                'nome' => 'São Benedito do Rio Preto',
                'idEstado' => 10,
            ),
            122 => 
            array (
                'id' => 623,
                'nome' => 'São Bento',
                'idEstado' => 10,
            ),
            123 => 
            array (
                'id' => 624,
                'nome' => 'São Bernardo',
                'idEstado' => 10,
            ),
            124 => 
            array (
                'id' => 625,
                'nome' => 'São Domingos do Azeitão',
                'idEstado' => 10,
            ),
            125 => 
            array (
                'id' => 626,
                'nome' => 'São Domingos do Maranhão',
                'idEstado' => 10,
            ),
            126 => 
            array (
                'id' => 627,
                'nome' => 'São Félix de Balsas',
                'idEstado' => 10,
            ),
            127 => 
            array (
                'id' => 628,
                'nome' => 'São Francisco do Brejão',
                'idEstado' => 10,
            ),
            128 => 
            array (
                'id' => 629,
                'nome' => 'São Francisco do Maranhão',
                'idEstado' => 10,
            ),
            129 => 
            array (
                'id' => 630,
                'nome' => 'São João Batista',
                'idEstado' => 10,
            ),
            130 => 
            array (
                'id' => 631,
                'nome' => 'São João do Carú',
                'idEstado' => 10,
            ),
            131 => 
            array (
                'id' => 632,
                'nome' => 'São João do Paraíso',
                'idEstado' => 10,
            ),
            132 => 
            array (
                'id' => 633,
                'nome' => 'São João do Soter',
                'idEstado' => 10,
            ),
            133 => 
            array (
                'id' => 634,
                'nome' => 'São João dos Patos',
                'idEstado' => 10,
            ),
            134 => 
            array (
                'id' => 635,
                'nome' => 'São José de Ribamar',
                'idEstado' => 10,
            ),
            135 => 
            array (
                'id' => 636,
                'nome' => 'São José dos Basílios',
                'idEstado' => 10,
            ),
            136 => 
            array (
                'id' => 637,
                'nome' => 'São Luís',
                'idEstado' => 10,
            ),
            137 => 
            array (
                'id' => 638,
                'nome' => 'São Luís Gonzaga do Maranhão',
                'idEstado' => 10,
            ),
            138 => 
            array (
                'id' => 639,
                'nome' => 'São Mateus do Maranhão',
                'idEstado' => 10,
            ),
            139 => 
            array (
                'id' => 640,
                'nome' => 'São Pedro da Água Branca',
                'idEstado' => 10,
            ),
            140 => 
            array (
                'id' => 641,
                'nome' => 'São Pedro dos Crentes',
                'idEstado' => 10,
            ),
            141 => 
            array (
                'id' => 642,
                'nome' => 'São Raimundo das Mangabeiras',
                'idEstado' => 10,
            ),
            142 => 
            array (
                'id' => 643,
                'nome' => 'São Raimundo do Doca Bezerra',
                'idEstado' => 10,
            ),
            143 => 
            array (
                'id' => 644,
                'nome' => 'São Roberto',
                'idEstado' => 10,
            ),
            144 => 
            array (
                'id' => 645,
                'nome' => 'São Vicente Ferrer',
                'idEstado' => 10,
            ),
            145 => 
            array (
                'id' => 646,
                'nome' => 'Satubinha',
                'idEstado' => 10,
            ),
            146 => 
            array (
                'id' => 647,
                'nome' => 'Senador Alexandre Costa',
                'idEstado' => 10,
            ),
            147 => 
            array (
                'id' => 648,
                'nome' => 'Senador La Rocque',
                'idEstado' => 10,
            ),
            148 => 
            array (
                'id' => 649,
                'nome' => 'Serrano do Maranhão',
                'idEstado' => 10,
            ),
            149 => 
            array (
                'id' => 650,
                'nome' => 'Sítio Novo',
                'idEstado' => 10,
            ),
            150 => 
            array (
                'id' => 651,
                'nome' => 'Sucupira do Norte',
                'idEstado' => 10,
            ),
            151 => 
            array (
                'id' => 652,
                'nome' => 'Sucupira do Riachão',
                'idEstado' => 10,
            ),
            152 => 
            array (
                'id' => 653,
                'nome' => 'Tasso Fragoso',
                'idEstado' => 10,
            ),
            153 => 
            array (
                'id' => 654,
                'nome' => 'Timbiras',
                'idEstado' => 10,
            ),
            154 => 
            array (
                'id' => 655,
                'nome' => 'Timon',
                'idEstado' => 10,
            ),
            155 => 
            array (
                'id' => 656,
                'nome' => 'Trizidela do Vale',
                'idEstado' => 10,
            ),
            156 => 
            array (
                'id' => 657,
                'nome' => 'Tufilândia',
                'idEstado' => 10,
            ),
            157 => 
            array (
                'id' => 658,
                'nome' => 'Tuntum',
                'idEstado' => 10,
            ),
            158 => 
            array (
                'id' => 659,
                'nome' => 'Turiaçu',
                'idEstado' => 10,
            ),
            159 => 
            array (
                'id' => 660,
                'nome' => 'Turilândia',
                'idEstado' => 10,
            ),
            160 => 
            array (
                'id' => 661,
                'nome' => 'Tutóia',
                'idEstado' => 10,
            ),
            161 => 
            array (
                'id' => 662,
                'nome' => 'Urbano Santos',
                'idEstado' => 10,
            ),
            162 => 
            array (
                'id' => 663,
                'nome' => 'Vargem Grande',
                'idEstado' => 10,
            ),
            163 => 
            array (
                'id' => 664,
                'nome' => 'Viana',
                'idEstado' => 10,
            ),
            164 => 
            array (
                'id' => 665,
                'nome' => 'Vila Nova dos Martírios',
                'idEstado' => 10,
            ),
            165 => 
            array (
                'id' => 666,
                'nome' => 'Vitória do Mearim',
                'idEstado' => 10,
            ),
            166 => 
            array (
                'id' => 667,
                'nome' => 'Vitorino Freire',
                'idEstado' => 10,
            ),
            167 => 
            array (
                'id' => 668,
                'nome' => 'Zé Doca',
                'idEstado' => 10,
            ),
            168 => 
            array (
                'id' => 669,
                'nome' => 'Acauã',
                'idEstado' => 18,
            ),
            169 => 
            array (
                'id' => 670,
                'nome' => 'Agricolândia',
                'idEstado' => 18,
            ),
            170 => 
            array (
                'id' => 671,
                'nome' => 'Água Branca',
                'idEstado' => 18,
            ),
            171 => 
            array (
                'id' => 672,
                'nome' => 'Alagoinha do Piauí',
                'idEstado' => 18,
            ),
            172 => 
            array (
                'id' => 673,
                'nome' => 'Alegrete do Piauí',
                'idEstado' => 18,
            ),
            173 => 
            array (
                'id' => 674,
                'nome' => 'Alto Longá',
                'idEstado' => 18,
            ),
            174 => 
            array (
                'id' => 675,
                'nome' => 'Altos',
                'idEstado' => 18,
            ),
            175 => 
            array (
                'id' => 676,
                'nome' => 'Alvorada do Gurguéia',
                'idEstado' => 18,
            ),
            176 => 
            array (
                'id' => 677,
                'nome' => 'Amarante',
                'idEstado' => 18,
            ),
            177 => 
            array (
                'id' => 678,
                'nome' => 'Angical do Piauí',
                'idEstado' => 18,
            ),
            178 => 
            array (
                'id' => 679,
                'nome' => 'Anísio de Abreu',
                'idEstado' => 18,
            ),
            179 => 
            array (
                'id' => 680,
                'nome' => 'Antônio Almeida',
                'idEstado' => 18,
            ),
            180 => 
            array (
                'id' => 681,
                'nome' => 'Aroazes',
                'idEstado' => 18,
            ),
            181 => 
            array (
                'id' => 682,
                'nome' => 'Aroeiras do Itaim',
                'idEstado' => 18,
            ),
            182 => 
            array (
                'id' => 683,
                'nome' => 'Arraial',
                'idEstado' => 18,
            ),
            183 => 
            array (
                'id' => 684,
                'nome' => 'Assunção do Piauí',
                'idEstado' => 18,
            ),
            184 => 
            array (
                'id' => 685,
                'nome' => 'Avelino Lopes',
                'idEstado' => 18,
            ),
            185 => 
            array (
                'id' => 686,
                'nome' => 'Baixa Grande do Ribeiro',
                'idEstado' => 18,
            ),
            186 => 
            array (
                'id' => 687,
                'nome' => 'Barra D\'Alcântara',
                'idEstado' => 18,
            ),
            187 => 
            array (
                'id' => 688,
                'nome' => 'Barras',
                'idEstado' => 18,
            ),
            188 => 
            array (
                'id' => 689,
                'nome' => 'Barreiras do Piauí',
                'idEstado' => 18,
            ),
            189 => 
            array (
                'id' => 690,
                'nome' => 'Barro Duro',
                'idEstado' => 18,
            ),
            190 => 
            array (
                'id' => 691,
                'nome' => 'Batalha',
                'idEstado' => 18,
            ),
            191 => 
            array (
                'id' => 692,
                'nome' => 'Bela Vista do Piauí',
                'idEstado' => 18,
            ),
            192 => 
            array (
                'id' => 693,
                'nome' => 'Belém do Piauí',
                'idEstado' => 18,
            ),
            193 => 
            array (
                'id' => 694,
                'nome' => 'Beneditinos',
                'idEstado' => 18,
            ),
            194 => 
            array (
                'id' => 695,
                'nome' => 'Bertolínia',
                'idEstado' => 18,
            ),
            195 => 
            array (
                'id' => 696,
                'nome' => 'Betânia do Piauí',
                'idEstado' => 18,
            ),
            196 => 
            array (
                'id' => 697,
                'nome' => 'Boa Hora',
                'idEstado' => 18,
            ),
            197 => 
            array (
                'id' => 698,
                'nome' => 'Bocaina',
                'idEstado' => 18,
            ),
            198 => 
            array (
                'id' => 699,
                'nome' => 'Bom Jesus',
                'idEstado' => 18,
            ),
            199 => 
            array (
                'id' => 700,
                'nome' => 'Bom Princípio do Piauí',
                'idEstado' => 18,
            ),
            200 => 
            array (
                'id' => 701,
                'nome' => 'Bonfim do Piauí',
                'idEstado' => 18,
            ),
            201 => 
            array (
                'id' => 702,
                'nome' => 'Boqueirão do Piauí',
                'idEstado' => 18,
            ),
            202 => 
            array (
                'id' => 703,
                'nome' => 'Brasileira',
                'idEstado' => 18,
            ),
            203 => 
            array (
                'id' => 704,
                'nome' => 'Brejo do Piauí',
                'idEstado' => 18,
            ),
            204 => 
            array (
                'id' => 705,
                'nome' => 'Buriti dos Lopes',
                'idEstado' => 18,
            ),
            205 => 
            array (
                'id' => 706,
                'nome' => 'Buriti dos Montes',
                'idEstado' => 18,
            ),
            206 => 
            array (
                'id' => 707,
                'nome' => 'Cabeceiras do Piauí',
                'idEstado' => 18,
            ),
            207 => 
            array (
                'id' => 708,
                'nome' => 'Cajazeiras do Piauí',
                'idEstado' => 18,
            ),
            208 => 
            array (
                'id' => 709,
                'nome' => 'Cajueiro da Praia',
                'idEstado' => 18,
            ),
            209 => 
            array (
                'id' => 710,
                'nome' => 'Caldeirão Grande do Piauí',
                'idEstado' => 18,
            ),
            210 => 
            array (
                'id' => 711,
                'nome' => 'Campinas do Piauí',
                'idEstado' => 18,
            ),
            211 => 
            array (
                'id' => 712,
                'nome' => 'Campo Alegre do Fidalgo',
                'idEstado' => 18,
            ),
            212 => 
            array (
                'id' => 713,
                'nome' => 'Campo Grande do Piauí',
                'idEstado' => 18,
            ),
            213 => 
            array (
                'id' => 714,
                'nome' => 'Campo Largo do Piauí',
                'idEstado' => 18,
            ),
            214 => 
            array (
                'id' => 715,
                'nome' => 'Campo Maior',
                'idEstado' => 18,
            ),
            215 => 
            array (
                'id' => 716,
                'nome' => 'Canavieira',
                'idEstado' => 18,
            ),
            216 => 
            array (
                'id' => 717,
                'nome' => 'Canto do Buriti',
                'idEstado' => 18,
            ),
            217 => 
            array (
                'id' => 718,
                'nome' => 'Capitão de Campos',
                'idEstado' => 18,
            ),
            218 => 
            array (
                'id' => 719,
                'nome' => 'Capitão Gervásio Oliveira',
                'idEstado' => 18,
            ),
            219 => 
            array (
                'id' => 720,
                'nome' => 'Caracol',
                'idEstado' => 18,
            ),
            220 => 
            array (
                'id' => 721,
                'nome' => 'Caraúbas do Piauí',
                'idEstado' => 18,
            ),
            221 => 
            array (
                'id' => 722,
                'nome' => 'Caridade do Piauí',
                'idEstado' => 18,
            ),
            222 => 
            array (
                'id' => 723,
                'nome' => 'Castelo do Piauí',
                'idEstado' => 18,
            ),
            223 => 
            array (
                'id' => 724,
                'nome' => 'Caxingó',
                'idEstado' => 18,
            ),
            224 => 
            array (
                'id' => 725,
                'nome' => 'Cocal',
                'idEstado' => 18,
            ),
            225 => 
            array (
                'id' => 726,
                'nome' => 'Cocal de Telha',
                'idEstado' => 18,
            ),
            226 => 
            array (
                'id' => 727,
                'nome' => 'Cocal dos Alves',
                'idEstado' => 18,
            ),
            227 => 
            array (
                'id' => 728,
                'nome' => 'Coivaras',
                'idEstado' => 18,
            ),
            228 => 
            array (
                'id' => 729,
                'nome' => 'Colônia do Gurguéia',
                'idEstado' => 18,
            ),
            229 => 
            array (
                'id' => 730,
                'nome' => 'Colônia do Piauí',
                'idEstado' => 18,
            ),
            230 => 
            array (
                'id' => 731,
                'nome' => 'Conceição do Canindé',
                'idEstado' => 18,
            ),
            231 => 
            array (
                'id' => 732,
                'nome' => 'Coronel José Dias',
                'idEstado' => 18,
            ),
            232 => 
            array (
                'id' => 733,
                'nome' => 'Corrente',
                'idEstado' => 18,
            ),
            233 => 
            array (
                'id' => 734,
                'nome' => 'Cristalândia do Piauí',
                'idEstado' => 18,
            ),
            234 => 
            array (
                'id' => 735,
                'nome' => 'Cristino Castro',
                'idEstado' => 18,
            ),
            235 => 
            array (
                'id' => 736,
                'nome' => 'Curimatá',
                'idEstado' => 18,
            ),
            236 => 
            array (
                'id' => 737,
                'nome' => 'Currais',
                'idEstado' => 18,
            ),
            237 => 
            array (
                'id' => 738,
                'nome' => 'Curralinhos',
                'idEstado' => 18,
            ),
            238 => 
            array (
                'id' => 739,
                'nome' => 'Curral Novo do Piauí',
                'idEstado' => 18,
            ),
            239 => 
            array (
                'id' => 740,
                'nome' => 'Demerval Lobão',
                'idEstado' => 18,
            ),
            240 => 
            array (
                'id' => 741,
                'nome' => 'Dirceu Arcoverde',
                'idEstado' => 18,
            ),
            241 => 
            array (
                'id' => 742,
                'nome' => 'Dom Expedito Lopes',
                'idEstado' => 18,
            ),
            242 => 
            array (
                'id' => 743,
                'nome' => 'Domingos Mourão',
                'idEstado' => 18,
            ),
            243 => 
            array (
                'id' => 744,
                'nome' => 'Dom Inocêncio',
                'idEstado' => 18,
            ),
            244 => 
            array (
                'id' => 745,
                'nome' => 'Elesbão Veloso',
                'idEstado' => 18,
            ),
            245 => 
            array (
                'id' => 746,
                'nome' => 'Eliseu Martins',
                'idEstado' => 18,
            ),
            246 => 
            array (
                'id' => 747,
                'nome' => 'Esperantina',
                'idEstado' => 18,
            ),
            247 => 
            array (
                'id' => 748,
                'nome' => 'Fartura do Piauí',
                'idEstado' => 18,
            ),
            248 => 
            array (
                'id' => 749,
                'nome' => 'Flores do Piauí',
                'idEstado' => 18,
            ),
            249 => 
            array (
                'id' => 750,
                'nome' => 'Floresta do Piauí',
                'idEstado' => 18,
            ),
            250 => 
            array (
                'id' => 751,
                'nome' => 'Floriano',
                'idEstado' => 18,
            ),
            251 => 
            array (
                'id' => 752,
                'nome' => 'Francinópolis',
                'idEstado' => 18,
            ),
            252 => 
            array (
                'id' => 753,
                'nome' => 'Francisco Ayres',
                'idEstado' => 18,
            ),
            253 => 
            array (
                'id' => 754,
                'nome' => 'Francisco Macedo',
                'idEstado' => 18,
            ),
            254 => 
            array (
                'id' => 755,
                'nome' => 'Francisco Santos',
                'idEstado' => 18,
            ),
            255 => 
            array (
                'id' => 756,
                'nome' => 'Fronteiras',
                'idEstado' => 18,
            ),
            256 => 
            array (
                'id' => 757,
                'nome' => 'Geminiano',
                'idEstado' => 18,
            ),
            257 => 
            array (
                'id' => 758,
                'nome' => 'Gilbués',
                'idEstado' => 18,
            ),
            258 => 
            array (
                'id' => 759,
                'nome' => 'Guadalupe',
                'idEstado' => 18,
            ),
            259 => 
            array (
                'id' => 760,
                'nome' => 'Guaribas',
                'idEstado' => 18,
            ),
            260 => 
            array (
                'id' => 761,
                'nome' => 'Hugo Napoleão',
                'idEstado' => 18,
            ),
            261 => 
            array (
                'id' => 762,
                'nome' => 'Ilha Grande',
                'idEstado' => 18,
            ),
            262 => 
            array (
                'id' => 763,
                'nome' => 'Inhuma',
                'idEstado' => 18,
            ),
            263 => 
            array (
                'id' => 764,
                'nome' => 'Ipiranga do Piauí',
                'idEstado' => 18,
            ),
            264 => 
            array (
                'id' => 765,
                'nome' => 'Isaías Coelho',
                'idEstado' => 18,
            ),
            265 => 
            array (
                'id' => 766,
                'nome' => 'Itainópolis',
                'idEstado' => 18,
            ),
            266 => 
            array (
                'id' => 767,
                'nome' => 'Itaueira',
                'idEstado' => 18,
            ),
            267 => 
            array (
                'id' => 768,
                'nome' => 'Jacobina do Piauí',
                'idEstado' => 18,
            ),
            268 => 
            array (
                'id' => 769,
                'nome' => 'Jaicós',
                'idEstado' => 18,
            ),
            269 => 
            array (
                'id' => 770,
                'nome' => 'Jardim do Mulato',
                'idEstado' => 18,
            ),
            270 => 
            array (
                'id' => 771,
                'nome' => 'Jatobá do Piauí',
                'idEstado' => 18,
            ),
            271 => 
            array (
                'id' => 772,
                'nome' => 'Jerumenha',
                'idEstado' => 18,
            ),
            272 => 
            array (
                'id' => 773,
                'nome' => 'João Costa',
                'idEstado' => 18,
            ),
            273 => 
            array (
                'id' => 774,
                'nome' => 'Joaquim Pires',
                'idEstado' => 18,
            ),
            274 => 
            array (
                'id' => 775,
                'nome' => 'Joca Marques',
                'idEstado' => 18,
            ),
            275 => 
            array (
                'id' => 776,
                'nome' => 'José de Freitas',
                'idEstado' => 18,
            ),
            276 => 
            array (
                'id' => 777,
                'nome' => 'Juazeiro do Piauí',
                'idEstado' => 18,
            ),
            277 => 
            array (
                'id' => 778,
                'nome' => 'Júlio Borges',
                'idEstado' => 18,
            ),
            278 => 
            array (
                'id' => 779,
                'nome' => 'Jurema',
                'idEstado' => 18,
            ),
            279 => 
            array (
                'id' => 780,
                'nome' => 'Lagoinha do Piauí',
                'idEstado' => 18,
            ),
            280 => 
            array (
                'id' => 781,
                'nome' => 'Lagoa Alegre',
                'idEstado' => 18,
            ),
            281 => 
            array (
                'id' => 782,
                'nome' => 'Lagoa do Barro do Piauí',
                'idEstado' => 18,
            ),
            282 => 
            array (
                'id' => 783,
                'nome' => 'Lagoa de São Francisco',
                'idEstado' => 18,
            ),
            283 => 
            array (
                'id' => 784,
                'nome' => 'Lagoa do Piauí',
                'idEstado' => 18,
            ),
            284 => 
            array (
                'id' => 785,
                'nome' => 'Lagoa do Sítio',
                'idEstado' => 18,
            ),
            285 => 
            array (
                'id' => 786,
                'nome' => 'Landri Sales',
                'idEstado' => 18,
            ),
            286 => 
            array (
                'id' => 787,
                'nome' => 'Luís Correia',
                'idEstado' => 18,
            ),
            287 => 
            array (
                'id' => 788,
                'nome' => 'Luzilândia',
                'idEstado' => 18,
            ),
            288 => 
            array (
                'id' => 789,
                'nome' => 'Madeiro',
                'idEstado' => 18,
            ),
            289 => 
            array (
                'id' => 790,
                'nome' => 'Manoel Emídio',
                'idEstado' => 18,
            ),
            290 => 
            array (
                'id' => 791,
                'nome' => 'Marcolândia',
                'idEstado' => 18,
            ),
            291 => 
            array (
                'id' => 792,
                'nome' => 'Marcos Parente',
                'idEstado' => 18,
            ),
            292 => 
            array (
                'id' => 793,
                'nome' => 'Massapê do Piauí',
                'idEstado' => 18,
            ),
            293 => 
            array (
                'id' => 794,
                'nome' => 'Matias Olímpio',
                'idEstado' => 18,
            ),
            294 => 
            array (
                'id' => 795,
                'nome' => 'Miguel Alves',
                'idEstado' => 18,
            ),
            295 => 
            array (
                'id' => 796,
                'nome' => 'Miguel Leão',
                'idEstado' => 18,
            ),
            296 => 
            array (
                'id' => 797,
                'nome' => 'Milton Brandão',
                'idEstado' => 18,
            ),
            297 => 
            array (
                'id' => 798,
                'nome' => 'Monsenhor Gil',
                'idEstado' => 18,
            ),
            298 => 
            array (
                'id' => 799,
                'nome' => 'Monsenhor Hipólito',
                'idEstado' => 18,
            ),
            299 => 
            array (
                'id' => 800,
                'nome' => 'Monte Alegre do Piauí',
                'idEstado' => 18,
            ),
            300 => 
            array (
                'id' => 801,
                'nome' => 'Morro Cabeça no Tempo',
                'idEstado' => 18,
            ),
            301 => 
            array (
                'id' => 802,
                'nome' => 'Morro do Chapéu do Piauí',
                'idEstado' => 18,
            ),
            302 => 
            array (
                'id' => 803,
                'nome' => 'Murici dos Portelas',
                'idEstado' => 18,
            ),
            303 => 
            array (
                'id' => 804,
                'nome' => 'Nazaré do Piauí',
                'idEstado' => 18,
            ),
            304 => 
            array (
                'id' => 805,
                'nome' => 'Nazária',
                'idEstado' => 18,
            ),
            305 => 
            array (
                'id' => 806,
                'nome' => 'Nossa Senhora de Nazaré',
                'idEstado' => 18,
            ),
            306 => 
            array (
                'id' => 807,
                'nome' => 'Nossa Senhora dos Remédios',
                'idEstado' => 18,
            ),
            307 => 
            array (
                'id' => 808,
                'nome' => 'Novo Oriente do Piauí',
                'idEstado' => 18,
            ),
            308 => 
            array (
                'id' => 809,
                'nome' => 'Novo Santo Antônio',
                'idEstado' => 18,
            ),
            309 => 
            array (
                'id' => 810,
                'nome' => 'Oeiras',
                'idEstado' => 18,
            ),
            310 => 
            array (
                'id' => 811,
                'nome' => 'Olho D\'Água do Piauí',
                'idEstado' => 18,
            ),
            311 => 
            array (
                'id' => 812,
                'nome' => 'Padre Marcos',
                'idEstado' => 18,
            ),
            312 => 
            array (
                'id' => 813,
                'nome' => 'Paes Landim',
                'idEstado' => 18,
            ),
            313 => 
            array (
                'id' => 814,
                'nome' => 'Pajeú do Piauí',
                'idEstado' => 18,
            ),
            314 => 
            array (
                'id' => 815,
                'nome' => 'Palmeira do Piauí',
                'idEstado' => 18,
            ),
            315 => 
            array (
                'id' => 816,
                'nome' => 'Palmeirais',
                'idEstado' => 18,
            ),
            316 => 
            array (
                'id' => 817,
                'nome' => 'Paquetá',
                'idEstado' => 18,
            ),
            317 => 
            array (
                'id' => 818,
                'nome' => 'Parnaguá',
                'idEstado' => 18,
            ),
            318 => 
            array (
                'id' => 819,
                'nome' => 'Parnaíba',
                'idEstado' => 18,
            ),
            319 => 
            array (
                'id' => 820,
                'nome' => 'Passagem Franca do Piauí',
                'idEstado' => 18,
            ),
            320 => 
            array (
                'id' => 821,
                'nome' => 'Patos do Piauí',
                'idEstado' => 18,
            ),
            321 => 
            array (
                'id' => 822,
                'nome' => 'Pau D\'Arco do Piauí',
                'idEstado' => 18,
            ),
            322 => 
            array (
                'id' => 823,
                'nome' => 'Paulistana',
                'idEstado' => 18,
            ),
            323 => 
            array (
                'id' => 824,
                'nome' => 'Pavussu',
                'idEstado' => 18,
            ),
            324 => 
            array (
                'id' => 825,
                'nome' => 'Pedro II',
                'idEstado' => 18,
            ),
            325 => 
            array (
                'id' => 826,
                'nome' => 'Pedro Laurentino',
                'idEstado' => 18,
            ),
            326 => 
            array (
                'id' => 827,
                'nome' => 'Nova Santa Rita',
                'idEstado' => 18,
            ),
            327 => 
            array (
                'id' => 828,
                'nome' => 'Picos',
                'idEstado' => 18,
            ),
            328 => 
            array (
                'id' => 829,
                'nome' => 'Pimenteiras',
                'idEstado' => 18,
            ),
            329 => 
            array (
                'id' => 830,
                'nome' => 'Pio IX',
                'idEstado' => 18,
            ),
            330 => 
            array (
                'id' => 831,
                'nome' => 'Piracuruca',
                'idEstado' => 18,
            ),
            331 => 
            array (
                'id' => 832,
                'nome' => 'Piripiri',
                'idEstado' => 18,
            ),
            332 => 
            array (
                'id' => 833,
                'nome' => 'Porto',
                'idEstado' => 18,
            ),
            333 => 
            array (
                'id' => 834,
                'nome' => 'Porto Alegre do Piauí',
                'idEstado' => 18,
            ),
            334 => 
            array (
                'id' => 835,
                'nome' => 'Prata do Piauí',
                'idEstado' => 18,
            ),
            335 => 
            array (
                'id' => 836,
                'nome' => 'Queimada Nova',
                'idEstado' => 18,
            ),
            336 => 
            array (
                'id' => 837,
                'nome' => 'Redenção do Gurguéia',
                'idEstado' => 18,
            ),
            337 => 
            array (
                'id' => 838,
                'nome' => 'Regeneração',
                'idEstado' => 18,
            ),
            338 => 
            array (
                'id' => 839,
                'nome' => 'Riacho Frio',
                'idEstado' => 18,
            ),
            339 => 
            array (
                'id' => 840,
                'nome' => 'Ribeira do Piauí',
                'idEstado' => 18,
            ),
            340 => 
            array (
                'id' => 841,
                'nome' => 'Ribeiro Gonçalves',
                'idEstado' => 18,
            ),
            341 => 
            array (
                'id' => 842,
                'nome' => 'Rio Grande do Piauí',
                'idEstado' => 18,
            ),
            342 => 
            array (
                'id' => 843,
                'nome' => 'Santa Cruz do Piauí',
                'idEstado' => 18,
            ),
            343 => 
            array (
                'id' => 844,
                'nome' => 'Santa Cruz dos Milagres',
                'idEstado' => 18,
            ),
            344 => 
            array (
                'id' => 845,
                'nome' => 'Santa Filomena',
                'idEstado' => 18,
            ),
            345 => 
            array (
                'id' => 846,
                'nome' => 'Santa Luz',
                'idEstado' => 18,
            ),
            346 => 
            array (
                'id' => 847,
                'nome' => 'Santana do Piauí',
                'idEstado' => 18,
            ),
            347 => 
            array (
                'id' => 848,
                'nome' => 'Santa Rosa do Piauí',
                'idEstado' => 18,
            ),
            348 => 
            array (
                'id' => 849,
                'nome' => 'Santo Antônio de Lisboa',
                'idEstado' => 18,
            ),
            349 => 
            array (
                'id' => 850,
                'nome' => 'Santo Antônio dos Milagres',
                'idEstado' => 18,
            ),
            350 => 
            array (
                'id' => 851,
                'nome' => 'Santo Inácio do Piauí',
                'idEstado' => 18,
            ),
            351 => 
            array (
                'id' => 852,
                'nome' => 'São Braz do Piauí',
                'idEstado' => 18,
            ),
            352 => 
            array (
                'id' => 853,
                'nome' => 'São Félix do Piauí',
                'idEstado' => 18,
            ),
            353 => 
            array (
                'id' => 854,
                'nome' => 'São Francisco de Assis do Piauí',
                'idEstado' => 18,
            ),
            354 => 
            array (
                'id' => 855,
                'nome' => 'São Francisco do Piauí',
                'idEstado' => 18,
            ),
            355 => 
            array (
                'id' => 856,
                'nome' => 'São Gonçalo do Gurguéia',
                'idEstado' => 18,
            ),
            356 => 
            array (
                'id' => 857,
                'nome' => 'São Gonçalo do Piauí',
                'idEstado' => 18,
            ),
            357 => 
            array (
                'id' => 858,
                'nome' => 'São João da Canabrava',
                'idEstado' => 18,
            ),
            358 => 
            array (
                'id' => 859,
                'nome' => 'São João da Fronteira',
                'idEstado' => 18,
            ),
            359 => 
            array (
                'id' => 860,
                'nome' => 'São João da Serra',
                'idEstado' => 18,
            ),
            360 => 
            array (
                'id' => 861,
                'nome' => 'São João da Varjota',
                'idEstado' => 18,
            ),
            361 => 
            array (
                'id' => 862,
                'nome' => 'São João do Arraial',
                'idEstado' => 18,
            ),
            362 => 
            array (
                'id' => 863,
                'nome' => 'São João do Piauí',
                'idEstado' => 18,
            ),
            363 => 
            array (
                'id' => 864,
                'nome' => 'São José do Divino',
                'idEstado' => 18,
            ),
            364 => 
            array (
                'id' => 865,
                'nome' => 'São José do Peixe',
                'idEstado' => 18,
            ),
            365 => 
            array (
                'id' => 866,
                'nome' => 'São José do Piauí',
                'idEstado' => 18,
            ),
            366 => 
            array (
                'id' => 867,
                'nome' => 'São Julião',
                'idEstado' => 18,
            ),
            367 => 
            array (
                'id' => 868,
                'nome' => 'São Lourenço do Piauí',
                'idEstado' => 18,
            ),
            368 => 
            array (
                'id' => 869,
                'nome' => 'São Luis do Piauí',
                'idEstado' => 18,
            ),
            369 => 
            array (
                'id' => 870,
                'nome' => 'São Miguel da Baixa Grande',
                'idEstado' => 18,
            ),
            370 => 
            array (
                'id' => 871,
                'nome' => 'São Miguel do Fidalgo',
                'idEstado' => 18,
            ),
            371 => 
            array (
                'id' => 872,
                'nome' => 'São Miguel do Tapuio',
                'idEstado' => 18,
            ),
            372 => 
            array (
                'id' => 873,
                'nome' => 'São Pedro do Piauí',
                'idEstado' => 18,
            ),
            373 => 
            array (
                'id' => 874,
                'nome' => 'São Raimundo Nonato',
                'idEstado' => 18,
            ),
            374 => 
            array (
                'id' => 875,
                'nome' => 'Sebastião Barros',
                'idEstado' => 18,
            ),
            375 => 
            array (
                'id' => 876,
                'nome' => 'Sebastião Leal',
                'idEstado' => 18,
            ),
            376 => 
            array (
                'id' => 877,
                'nome' => 'Sigefredo Pacheco',
                'idEstado' => 18,
            ),
            377 => 
            array (
                'id' => 878,
                'nome' => 'Simões',
                'idEstado' => 18,
            ),
            378 => 
            array (
                'id' => 879,
                'nome' => 'Simplício Mendes',
                'idEstado' => 18,
            ),
            379 => 
            array (
                'id' => 880,
                'nome' => 'Socorro do Piauí',
                'idEstado' => 18,
            ),
            380 => 
            array (
                'id' => 881,
                'nome' => 'Sussuapara',
                'idEstado' => 18,
            ),
            381 => 
            array (
                'id' => 882,
                'nome' => 'Tamboril do Piauí',
                'idEstado' => 18,
            ),
            382 => 
            array (
                'id' => 883,
                'nome' => 'Tanque do Piauí',
                'idEstado' => 18,
            ),
            383 => 
            array (
                'id' => 884,
                'nome' => 'Teresina',
                'idEstado' => 18,
            ),
            384 => 
            array (
                'id' => 885,
                'nome' => 'União',
                'idEstado' => 18,
            ),
            385 => 
            array (
                'id' => 886,
                'nome' => 'Uruçuí',
                'idEstado' => 18,
            ),
            386 => 
            array (
                'id' => 887,
                'nome' => 'Valença do Piauí',
                'idEstado' => 18,
            ),
            387 => 
            array (
                'id' => 888,
                'nome' => 'Várzea Branca',
                'idEstado' => 18,
            ),
            388 => 
            array (
                'id' => 889,
                'nome' => 'Várzea Grande',
                'idEstado' => 18,
            ),
            389 => 
            array (
                'id' => 890,
                'nome' => 'Vera Mendes',
                'idEstado' => 18,
            ),
            390 => 
            array (
                'id' => 891,
                'nome' => 'Vila Nova do Piauí',
                'idEstado' => 18,
            ),
            391 => 
            array (
                'id' => 892,
                'nome' => 'Wall Ferraz',
                'idEstado' => 18,
            ),
            392 => 
            array (
                'id' => 893,
                'nome' => 'Abaiara',
                'idEstado' => 6,
            ),
            393 => 
            array (
                'id' => 894,
                'nome' => 'Acarape',
                'idEstado' => 6,
            ),
            394 => 
            array (
                'id' => 895,
                'nome' => 'Acaraú',
                'idEstado' => 6,
            ),
            395 => 
            array (
                'id' => 896,
                'nome' => 'Acopiara',
                'idEstado' => 6,
            ),
            396 => 
            array (
                'id' => 897,
                'nome' => 'Aiuaba',
                'idEstado' => 6,
            ),
            397 => 
            array (
                'id' => 898,
                'nome' => 'Alcântaras',
                'idEstado' => 6,
            ),
            398 => 
            array (
                'id' => 899,
                'nome' => 'Altaneira',
                'idEstado' => 6,
            ),
            399 => 
            array (
                'id' => 900,
                'nome' => 'Alto Santo',
                'idEstado' => 6,
            ),
            400 => 
            array (
                'id' => 901,
                'nome' => 'Amontada',
                'idEstado' => 6,
            ),
            401 => 
            array (
                'id' => 902,
                'nome' => 'Antonina do Norte',
                'idEstado' => 6,
            ),
            402 => 
            array (
                'id' => 903,
                'nome' => 'Apuiarés',
                'idEstado' => 6,
            ),
            403 => 
            array (
                'id' => 904,
                'nome' => 'Aquiraz',
                'idEstado' => 6,
            ),
            404 => 
            array (
                'id' => 905,
                'nome' => 'Aracati',
                'idEstado' => 6,
            ),
            405 => 
            array (
                'id' => 906,
                'nome' => 'Aracoiaba',
                'idEstado' => 6,
            ),
            406 => 
            array (
                'id' => 907,
                'nome' => 'Ararendá',
                'idEstado' => 6,
            ),
            407 => 
            array (
                'id' => 908,
                'nome' => 'Araripe',
                'idEstado' => 6,
            ),
            408 => 
            array (
                'id' => 909,
                'nome' => 'Aratuba',
                'idEstado' => 6,
            ),
            409 => 
            array (
                'id' => 910,
                'nome' => 'Arneiroz',
                'idEstado' => 6,
            ),
            410 => 
            array (
                'id' => 911,
                'nome' => 'Assaré',
                'idEstado' => 6,
            ),
            411 => 
            array (
                'id' => 912,
                'nome' => 'Aurora',
                'idEstado' => 6,
            ),
            412 => 
            array (
                'id' => 913,
                'nome' => 'Baixio',
                'idEstado' => 6,
            ),
            413 => 
            array (
                'id' => 914,
                'nome' => 'Banabuiú',
                'idEstado' => 6,
            ),
            414 => 
            array (
                'id' => 915,
                'nome' => 'Barbalha',
                'idEstado' => 6,
            ),
            415 => 
            array (
                'id' => 916,
                'nome' => 'Barreira',
                'idEstado' => 6,
            ),
            416 => 
            array (
                'id' => 917,
                'nome' => 'Barro',
                'idEstado' => 6,
            ),
            417 => 
            array (
                'id' => 918,
                'nome' => 'Barroquinha',
                'idEstado' => 6,
            ),
            418 => 
            array (
                'id' => 919,
                'nome' => 'Baturité',
                'idEstado' => 6,
            ),
            419 => 
            array (
                'id' => 920,
                'nome' => 'Beberibe',
                'idEstado' => 6,
            ),
            420 => 
            array (
                'id' => 921,
                'nome' => 'Bela Cruz',
                'idEstado' => 6,
            ),
            421 => 
            array (
                'id' => 922,
                'nome' => 'Boa Viagem',
                'idEstado' => 6,
            ),
            422 => 
            array (
                'id' => 923,
                'nome' => 'Brejo Santo',
                'idEstado' => 6,
            ),
            423 => 
            array (
                'id' => 924,
                'nome' => 'Camocim',
                'idEstado' => 6,
            ),
            424 => 
            array (
                'id' => 925,
                'nome' => 'Campos Sales',
                'idEstado' => 6,
            ),
            425 => 
            array (
                'id' => 926,
                'nome' => 'Canindé',
                'idEstado' => 6,
            ),
            426 => 
            array (
                'id' => 927,
                'nome' => 'Capistrano',
                'idEstado' => 6,
            ),
            427 => 
            array (
                'id' => 928,
                'nome' => 'Caridade',
                'idEstado' => 6,
            ),
            428 => 
            array (
                'id' => 929,
                'nome' => 'Cariré',
                'idEstado' => 6,
            ),
            429 => 
            array (
                'id' => 930,
                'nome' => 'Caririaçu',
                'idEstado' => 6,
            ),
            430 => 
            array (
                'id' => 931,
                'nome' => 'Cariús',
                'idEstado' => 6,
            ),
            431 => 
            array (
                'id' => 932,
                'nome' => 'Carnaubal',
                'idEstado' => 6,
            ),
            432 => 
            array (
                'id' => 933,
                'nome' => 'Cascavel',
                'idEstado' => 6,
            ),
            433 => 
            array (
                'id' => 934,
                'nome' => 'Catarina',
                'idEstado' => 6,
            ),
            434 => 
            array (
                'id' => 935,
                'nome' => 'Catunda',
                'idEstado' => 6,
            ),
            435 => 
            array (
                'id' => 936,
                'nome' => 'Caucaia',
                'idEstado' => 6,
            ),
            436 => 
            array (
                'id' => 937,
                'nome' => 'Cedro',
                'idEstado' => 6,
            ),
            437 => 
            array (
                'id' => 938,
                'nome' => 'Chaval',
                'idEstado' => 6,
            ),
            438 => 
            array (
                'id' => 939,
                'nome' => 'Choró',
                'idEstado' => 6,
            ),
            439 => 
            array (
                'id' => 940,
                'nome' => 'Chorozinho',
                'idEstado' => 6,
            ),
            440 => 
            array (
                'id' => 941,
                'nome' => 'Coreaú',
                'idEstado' => 6,
            ),
            441 => 
            array (
                'id' => 942,
                'nome' => 'Crateús',
                'idEstado' => 6,
            ),
            442 => 
            array (
                'id' => 943,
                'nome' => 'Crato',
                'idEstado' => 6,
            ),
            443 => 
            array (
                'id' => 944,
                'nome' => 'Croatá',
                'idEstado' => 6,
            ),
            444 => 
            array (
                'id' => 945,
                'nome' => 'Cruz',
                'idEstado' => 6,
            ),
            445 => 
            array (
                'id' => 946,
                'nome' => 'Deputado Irapuan Pinheiro',
                'idEstado' => 6,
            ),
            446 => 
            array (
                'id' => 947,
                'nome' => 'Ererê',
                'idEstado' => 6,
            ),
            447 => 
            array (
                'id' => 948,
                'nome' => 'Eusébio',
                'idEstado' => 6,
            ),
            448 => 
            array (
                'id' => 949,
                'nome' => 'Farias Brito',
                'idEstado' => 6,
            ),
            449 => 
            array (
                'id' => 950,
                'nome' => 'Forquilha',
                'idEstado' => 6,
            ),
            450 => 
            array (
                'id' => 951,
                'nome' => 'Fortaleza',
                'idEstado' => 6,
            ),
            451 => 
            array (
                'id' => 952,
                'nome' => 'Fortim',
                'idEstado' => 6,
            ),
            452 => 
            array (
                'id' => 953,
                'nome' => 'Frecheirinha',
                'idEstado' => 6,
            ),
            453 => 
            array (
                'id' => 954,
                'nome' => 'General Sampaio',
                'idEstado' => 6,
            ),
            454 => 
            array (
                'id' => 955,
                'nome' => 'Graça',
                'idEstado' => 6,
            ),
            455 => 
            array (
                'id' => 956,
                'nome' => 'Granja',
                'idEstado' => 6,
            ),
            456 => 
            array (
                'id' => 957,
                'nome' => 'Granjeiro',
                'idEstado' => 6,
            ),
            457 => 
            array (
                'id' => 958,
                'nome' => 'Groaíras',
                'idEstado' => 6,
            ),
            458 => 
            array (
                'id' => 959,
                'nome' => 'Guaiúba',
                'idEstado' => 6,
            ),
            459 => 
            array (
                'id' => 960,
                'nome' => 'Guaraciaba do Norte',
                'idEstado' => 6,
            ),
            460 => 
            array (
                'id' => 961,
                'nome' => 'Guaramiranga',
                'idEstado' => 6,
            ),
            461 => 
            array (
                'id' => 962,
                'nome' => 'Hidrolândia',
                'idEstado' => 6,
            ),
            462 => 
            array (
                'id' => 963,
                'nome' => 'Horizonte',
                'idEstado' => 6,
            ),
            463 => 
            array (
                'id' => 964,
                'nome' => 'Ibaretama',
                'idEstado' => 6,
            ),
            464 => 
            array (
                'id' => 965,
                'nome' => 'Ibiapina',
                'idEstado' => 6,
            ),
            465 => 
            array (
                'id' => 966,
                'nome' => 'Ibicuitinga',
                'idEstado' => 6,
            ),
            466 => 
            array (
                'id' => 967,
                'nome' => 'Icapuí',
                'idEstado' => 6,
            ),
            467 => 
            array (
                'id' => 968,
                'nome' => 'Icó',
                'idEstado' => 6,
            ),
            468 => 
            array (
                'id' => 969,
                'nome' => 'Iguatu',
                'idEstado' => 6,
            ),
            469 => 
            array (
                'id' => 970,
                'nome' => 'Independência',
                'idEstado' => 6,
            ),
            470 => 
            array (
                'id' => 971,
                'nome' => 'Ipaporanga',
                'idEstado' => 6,
            ),
            471 => 
            array (
                'id' => 972,
                'nome' => 'Ipaumirim',
                'idEstado' => 6,
            ),
            472 => 
            array (
                'id' => 973,
                'nome' => 'Ipu',
                'idEstado' => 6,
            ),
            473 => 
            array (
                'id' => 974,
                'nome' => 'Ipueiras',
                'idEstado' => 6,
            ),
            474 => 
            array (
                'id' => 975,
                'nome' => 'Iracema',
                'idEstado' => 6,
            ),
            475 => 
            array (
                'id' => 976,
                'nome' => 'Irauçuba',
                'idEstado' => 6,
            ),
            476 => 
            array (
                'id' => 977,
                'nome' => 'Itaiçaba',
                'idEstado' => 6,
            ),
            477 => 
            array (
                'id' => 978,
                'nome' => 'Itaitinga',
                'idEstado' => 6,
            ),
            478 => 
            array (
                'id' => 979,
                'nome' => 'Itapagé',
                'idEstado' => 6,
            ),
            479 => 
            array (
                'id' => 980,
                'nome' => 'Itapipoca',
                'idEstado' => 6,
            ),
            480 => 
            array (
                'id' => 981,
                'nome' => 'Itapiúna',
                'idEstado' => 6,
            ),
            481 => 
            array (
                'id' => 982,
                'nome' => 'Itarema',
                'idEstado' => 6,
            ),
            482 => 
            array (
                'id' => 983,
                'nome' => 'Itatira',
                'idEstado' => 6,
            ),
            483 => 
            array (
                'id' => 984,
                'nome' => 'Jaguaretama',
                'idEstado' => 6,
            ),
            484 => 
            array (
                'id' => 985,
                'nome' => 'Jaguaribara',
                'idEstado' => 6,
            ),
            485 => 
            array (
                'id' => 986,
                'nome' => 'Jaguaribe',
                'idEstado' => 6,
            ),
            486 => 
            array (
                'id' => 987,
                'nome' => 'Jaguaruana',
                'idEstado' => 6,
            ),
            487 => 
            array (
                'id' => 988,
                'nome' => 'Jardim',
                'idEstado' => 6,
            ),
            488 => 
            array (
                'id' => 989,
                'nome' => 'Jati',
                'idEstado' => 6,
            ),
            489 => 
            array (
                'id' => 990,
                'nome' => 'Jijoca de Jericoacoara',
                'idEstado' => 6,
            ),
            490 => 
            array (
                'id' => 991,
                'nome' => 'Juazeiro do Norte',
                'idEstado' => 6,
            ),
            491 => 
            array (
                'id' => 992,
                'nome' => 'Jucás',
                'idEstado' => 6,
            ),
            492 => 
            array (
                'id' => 993,
                'nome' => 'Lavras da Mangabeira',
                'idEstado' => 6,
            ),
            493 => 
            array (
                'id' => 994,
                'nome' => 'Limoeiro do Norte',
                'idEstado' => 6,
            ),
            494 => 
            array (
                'id' => 995,
                'nome' => 'Madalena',
                'idEstado' => 6,
            ),
            495 => 
            array (
                'id' => 996,
                'nome' => 'Maracanaú',
                'idEstado' => 6,
            ),
            496 => 
            array (
                'id' => 997,
                'nome' => 'Maranguape',
                'idEstado' => 6,
            ),
            497 => 
            array (
                'id' => 998,
                'nome' => 'Marco',
                'idEstado' => 6,
            ),
            498 => 
            array (
                'id' => 999,
                'nome' => 'Martinópole',
                'idEstado' => 6,
            ),
            499 => 
            array (
                'id' => 1000,
                'nome' => 'Massapê',
                'idEstado' => 6,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'nome' => 'Mauriti',
                'idEstado' => 6,
            ),
            1 => 
            array (
                'id' => 1002,
                'nome' => 'Meruoca',
                'idEstado' => 6,
            ),
            2 => 
            array (
                'id' => 1003,
                'nome' => 'Milagres',
                'idEstado' => 6,
            ),
            3 => 
            array (
                'id' => 1004,
                'nome' => 'Milhã',
                'idEstado' => 6,
            ),
            4 => 
            array (
                'id' => 1005,
                'nome' => 'Miraíma',
                'idEstado' => 6,
            ),
            5 => 
            array (
                'id' => 1006,
                'nome' => 'Missão Velha',
                'idEstado' => 6,
            ),
            6 => 
            array (
                'id' => 1007,
                'nome' => 'Mombaça',
                'idEstado' => 6,
            ),
            7 => 
            array (
                'id' => 1008,
                'nome' => 'Monsenhor Tabosa',
                'idEstado' => 6,
            ),
            8 => 
            array (
                'id' => 1009,
                'nome' => 'Morada Nova',
                'idEstado' => 6,
            ),
            9 => 
            array (
                'id' => 1010,
                'nome' => 'Moraújo',
                'idEstado' => 6,
            ),
            10 => 
            array (
                'id' => 1011,
                'nome' => 'Morrinhos',
                'idEstado' => 6,
            ),
            11 => 
            array (
                'id' => 1012,
                'nome' => 'Mucambo',
                'idEstado' => 6,
            ),
            12 => 
            array (
                'id' => 1013,
                'nome' => 'Mulungu',
                'idEstado' => 6,
            ),
            13 => 
            array (
                'id' => 1014,
                'nome' => 'Nova Olinda',
                'idEstado' => 6,
            ),
            14 => 
            array (
                'id' => 1015,
                'nome' => 'Nova Russas',
                'idEstado' => 6,
            ),
            15 => 
            array (
                'id' => 1016,
                'nome' => 'Novo Oriente',
                'idEstado' => 6,
            ),
            16 => 
            array (
                'id' => 1017,
                'nome' => 'Ocara',
                'idEstado' => 6,
            ),
            17 => 
            array (
                'id' => 1018,
                'nome' => 'Orós',
                'idEstado' => 6,
            ),
            18 => 
            array (
                'id' => 1019,
                'nome' => 'Pacajus',
                'idEstado' => 6,
            ),
            19 => 
            array (
                'id' => 1020,
                'nome' => 'Pacatuba',
                'idEstado' => 6,
            ),
            20 => 
            array (
                'id' => 1021,
                'nome' => 'Pacoti',
                'idEstado' => 6,
            ),
            21 => 
            array (
                'id' => 1022,
                'nome' => 'Pacujá',
                'idEstado' => 6,
            ),
            22 => 
            array (
                'id' => 1023,
                'nome' => 'Palhano',
                'idEstado' => 6,
            ),
            23 => 
            array (
                'id' => 1024,
                'nome' => 'Palmácia',
                'idEstado' => 6,
            ),
            24 => 
            array (
                'id' => 1025,
                'nome' => 'Paracuru',
                'idEstado' => 6,
            ),
            25 => 
            array (
                'id' => 1026,
                'nome' => 'Paraipaba',
                'idEstado' => 6,
            ),
            26 => 
            array (
                'id' => 1027,
                'nome' => 'Parambu',
                'idEstado' => 6,
            ),
            27 => 
            array (
                'id' => 1028,
                'nome' => 'Paramoti',
                'idEstado' => 6,
            ),
            28 => 
            array (
                'id' => 1029,
                'nome' => 'Pedra Branca',
                'idEstado' => 6,
            ),
            29 => 
            array (
                'id' => 1030,
                'nome' => 'Penaforte',
                'idEstado' => 6,
            ),
            30 => 
            array (
                'id' => 1031,
                'nome' => 'Pentecoste',
                'idEstado' => 6,
            ),
            31 => 
            array (
                'id' => 1032,
                'nome' => 'Pereiro',
                'idEstado' => 6,
            ),
            32 => 
            array (
                'id' => 1033,
                'nome' => 'Pindoretama',
                'idEstado' => 6,
            ),
            33 => 
            array (
                'id' => 1034,
                'nome' => 'Piquet Carneiro',
                'idEstado' => 6,
            ),
            34 => 
            array (
                'id' => 1035,
                'nome' => 'Pires Ferreira',
                'idEstado' => 6,
            ),
            35 => 
            array (
                'id' => 1036,
                'nome' => 'Poranga',
                'idEstado' => 6,
            ),
            36 => 
            array (
                'id' => 1037,
                'nome' => 'Porteiras',
                'idEstado' => 6,
            ),
            37 => 
            array (
                'id' => 1038,
                'nome' => 'Potengi',
                'idEstado' => 6,
            ),
            38 => 
            array (
                'id' => 1039,
                'nome' => 'Potiretama',
                'idEstado' => 6,
            ),
            39 => 
            array (
                'id' => 1040,
                'nome' => 'Quiterianópolis',
                'idEstado' => 6,
            ),
            40 => 
            array (
                'id' => 1041,
                'nome' => 'Quixadá',
                'idEstado' => 6,
            ),
            41 => 
            array (
                'id' => 1042,
                'nome' => 'Quixelô',
                'idEstado' => 6,
            ),
            42 => 
            array (
                'id' => 1043,
                'nome' => 'Quixeramobim',
                'idEstado' => 6,
            ),
            43 => 
            array (
                'id' => 1044,
                'nome' => 'Quixeré',
                'idEstado' => 6,
            ),
            44 => 
            array (
                'id' => 1045,
                'nome' => 'Redenção',
                'idEstado' => 6,
            ),
            45 => 
            array (
                'id' => 1046,
                'nome' => 'Reriutaba',
                'idEstado' => 6,
            ),
            46 => 
            array (
                'id' => 1047,
                'nome' => 'Russas',
                'idEstado' => 6,
            ),
            47 => 
            array (
                'id' => 1048,
                'nome' => 'Saboeiro',
                'idEstado' => 6,
            ),
            48 => 
            array (
                'id' => 1049,
                'nome' => 'Salitre',
                'idEstado' => 6,
            ),
            49 => 
            array (
                'id' => 1050,
                'nome' => 'Santana do Acaraú',
                'idEstado' => 6,
            ),
            50 => 
            array (
                'id' => 1051,
                'nome' => 'Santana do Cariri',
                'idEstado' => 6,
            ),
            51 => 
            array (
                'id' => 1052,
                'nome' => 'Santa Quitéria',
                'idEstado' => 6,
            ),
            52 => 
            array (
                'id' => 1053,
                'nome' => 'São Benedito',
                'idEstado' => 6,
            ),
            53 => 
            array (
                'id' => 1054,
                'nome' => 'São Gonçalo do Amarante',
                'idEstado' => 6,
            ),
            54 => 
            array (
                'id' => 1055,
                'nome' => 'São João do Jaguaribe',
                'idEstado' => 6,
            ),
            55 => 
            array (
                'id' => 1056,
                'nome' => 'São Luís do Curu',
                'idEstado' => 6,
            ),
            56 => 
            array (
                'id' => 1057,
                'nome' => 'Senador Pompeu',
                'idEstado' => 6,
            ),
            57 => 
            array (
                'id' => 1058,
                'nome' => 'Senador Sá',
                'idEstado' => 6,
            ),
            58 => 
            array (
                'id' => 1059,
                'nome' => 'Sobral',
                'idEstado' => 6,
            ),
            59 => 
            array (
                'id' => 1060,
                'nome' => 'Solonópole',
                'idEstado' => 6,
            ),
            60 => 
            array (
                'id' => 1061,
                'nome' => 'Tabuleiro do Norte',
                'idEstado' => 6,
            ),
            61 => 
            array (
                'id' => 1062,
                'nome' => 'Tamboril',
                'idEstado' => 6,
            ),
            62 => 
            array (
                'id' => 1063,
                'nome' => 'Tarrafas',
                'idEstado' => 6,
            ),
            63 => 
            array (
                'id' => 1064,
                'nome' => 'Tauá',
                'idEstado' => 6,
            ),
            64 => 
            array (
                'id' => 1065,
                'nome' => 'Tejuçuoca',
                'idEstado' => 6,
            ),
            65 => 
            array (
                'id' => 1066,
                'nome' => 'Tianguá',
                'idEstado' => 6,
            ),
            66 => 
            array (
                'id' => 1067,
                'nome' => 'Trairi',
                'idEstado' => 6,
            ),
            67 => 
            array (
                'id' => 1068,
                'nome' => 'Tururu',
                'idEstado' => 6,
            ),
            68 => 
            array (
                'id' => 1069,
                'nome' => 'Ubajara',
                'idEstado' => 6,
            ),
            69 => 
            array (
                'id' => 1070,
                'nome' => 'Umari',
                'idEstado' => 6,
            ),
            70 => 
            array (
                'id' => 1071,
                'nome' => 'Umirim',
                'idEstado' => 6,
            ),
            71 => 
            array (
                'id' => 1072,
                'nome' => 'Uruburetama',
                'idEstado' => 6,
            ),
            72 => 
            array (
                'id' => 1073,
                'nome' => 'Uruoca',
                'idEstado' => 6,
            ),
            73 => 
            array (
                'id' => 1074,
                'nome' => 'Varjota',
                'idEstado' => 6,
            ),
            74 => 
            array (
                'id' => 1075,
                'nome' => 'Várzea Alegre',
                'idEstado' => 6,
            ),
            75 => 
            array (
                'id' => 1076,
                'nome' => 'Viçosa do Ceará',
                'idEstado' => 6,
            ),
            76 => 
            array (
                'id' => 1077,
                'nome' => 'Acari',
                'idEstado' => 20,
            ),
            77 => 
            array (
                'id' => 1078,
                'nome' => 'Açu',
                'idEstado' => 20,
            ),
            78 => 
            array (
                'id' => 1079,
                'nome' => 'Afonso Bezerra',
                'idEstado' => 20,
            ),
            79 => 
            array (
                'id' => 1080,
                'nome' => 'Água Nova',
                'idEstado' => 20,
            ),
            80 => 
            array (
                'id' => 1081,
                'nome' => 'Alexandria',
                'idEstado' => 20,
            ),
            81 => 
            array (
                'id' => 1082,
                'nome' => 'Almino Afonso',
                'idEstado' => 20,
            ),
            82 => 
            array (
                'id' => 1083,
                'nome' => 'Alto do Rodrigues',
                'idEstado' => 20,
            ),
            83 => 
            array (
                'id' => 1084,
                'nome' => 'Angicos',
                'idEstado' => 20,
            ),
            84 => 
            array (
                'id' => 1085,
                'nome' => 'Antônio Martins',
                'idEstado' => 20,
            ),
            85 => 
            array (
                'id' => 1086,
                'nome' => 'Apodi',
                'idEstado' => 20,
            ),
            86 => 
            array (
                'id' => 1087,
                'nome' => 'Areia Branca',
                'idEstado' => 20,
            ),
            87 => 
            array (
                'id' => 1088,
                'nome' => 'Arês',
                'idEstado' => 20,
            ),
            88 => 
            array (
                'id' => 1089,
                'nome' => 'Augusto Severo',
                'idEstado' => 20,
            ),
            89 => 
            array (
                'id' => 1090,
                'nome' => 'Baía Formosa',
                'idEstado' => 20,
            ),
            90 => 
            array (
                'id' => 1091,
                'nome' => 'Baraúna',
                'idEstado' => 20,
            ),
            91 => 
            array (
                'id' => 1092,
                'nome' => 'Barcelona',
                'idEstado' => 20,
            ),
            92 => 
            array (
                'id' => 1093,
                'nome' => 'Bento Fernandes',
                'idEstado' => 20,
            ),
            93 => 
            array (
                'id' => 1094,
                'nome' => 'Bodó',
                'idEstado' => 20,
            ),
            94 => 
            array (
                'id' => 1095,
                'nome' => 'Bom Jesus',
                'idEstado' => 20,
            ),
            95 => 
            array (
                'id' => 1096,
                'nome' => 'Brejinho',
                'idEstado' => 20,
            ),
            96 => 
            array (
                'id' => 1097,
                'nome' => 'Caiçara do Norte',
                'idEstado' => 20,
            ),
            97 => 
            array (
                'id' => 1098,
                'nome' => 'Caiçara do Rio do Vento',
                'idEstado' => 20,
            ),
            98 => 
            array (
                'id' => 1099,
                'nome' => 'Caicó',
                'idEstado' => 20,
            ),
            99 => 
            array (
                'id' => 1100,
                'nome' => 'Campo Redondo',
                'idEstado' => 20,
            ),
            100 => 
            array (
                'id' => 1101,
                'nome' => 'Canguaretama',
                'idEstado' => 20,
            ),
            101 => 
            array (
                'id' => 1102,
                'nome' => 'Caraúbas',
                'idEstado' => 20,
            ),
            102 => 
            array (
                'id' => 1103,
                'nome' => 'Carnaúba dos Dantas',
                'idEstado' => 20,
            ),
            103 => 
            array (
                'id' => 1104,
                'nome' => 'Carnaubais',
                'idEstado' => 20,
            ),
            104 => 
            array (
                'id' => 1105,
                'nome' => 'Ceará-Mirim',
                'idEstado' => 20,
            ),
            105 => 
            array (
                'id' => 1106,
                'nome' => 'Cerro Corá',
                'idEstado' => 20,
            ),
            106 => 
            array (
                'id' => 1107,
                'nome' => 'Coronel Ezequiel',
                'idEstado' => 20,
            ),
            107 => 
            array (
                'id' => 1108,
                'nome' => 'Coronel João Pessoa',
                'idEstado' => 20,
            ),
            108 => 
            array (
                'id' => 1109,
                'nome' => 'Cruzeta',
                'idEstado' => 20,
            ),
            109 => 
            array (
                'id' => 1110,
                'nome' => 'Currais Novos',
                'idEstado' => 20,
            ),
            110 => 
            array (
                'id' => 1111,
                'nome' => 'Doutor Severiano',
                'idEstado' => 20,
            ),
            111 => 
            array (
                'id' => 1112,
                'nome' => 'Parnamirim',
                'idEstado' => 20,
            ),
            112 => 
            array (
                'id' => 1113,
                'nome' => 'Encanto',
                'idEstado' => 20,
            ),
            113 => 
            array (
                'id' => 1114,
                'nome' => 'Equador',
                'idEstado' => 20,
            ),
            114 => 
            array (
                'id' => 1115,
                'nome' => 'Espírito Santo',
                'idEstado' => 20,
            ),
            115 => 
            array (
                'id' => 1116,
                'nome' => 'Extremoz',
                'idEstado' => 20,
            ),
            116 => 
            array (
                'id' => 1117,
                'nome' => 'Felipe Guerra',
                'idEstado' => 20,
            ),
            117 => 
            array (
                'id' => 1118,
                'nome' => 'Fernando Pedroza',
                'idEstado' => 20,
            ),
            118 => 
            array (
                'id' => 1119,
                'nome' => 'Florânia',
                'idEstado' => 20,
            ),
            119 => 
            array (
                'id' => 1120,
                'nome' => 'Francisco Dantas',
                'idEstado' => 20,
            ),
            120 => 
            array (
                'id' => 1121,
                'nome' => 'Frutuoso Gomes',
                'idEstado' => 20,
            ),
            121 => 
            array (
                'id' => 1122,
                'nome' => 'Galinhos',
                'idEstado' => 20,
            ),
            122 => 
            array (
                'id' => 1123,
                'nome' => 'Goianinha',
                'idEstado' => 20,
            ),
            123 => 
            array (
                'id' => 1124,
                'nome' => 'Governador Dix-Sept Rosado',
                'idEstado' => 20,
            ),
            124 => 
            array (
                'id' => 1125,
                'nome' => 'Grossos',
                'idEstado' => 20,
            ),
            125 => 
            array (
                'id' => 1126,
                'nome' => 'Guamaré',
                'idEstado' => 20,
            ),
            126 => 
            array (
                'id' => 1127,
                'nome' => 'Ielmo Marinho',
                'idEstado' => 20,
            ),
            127 => 
            array (
                'id' => 1128,
                'nome' => 'Ipanguaçu',
                'idEstado' => 20,
            ),
            128 => 
            array (
                'id' => 1129,
                'nome' => 'Ipueira',
                'idEstado' => 20,
            ),
            129 => 
            array (
                'id' => 1130,
                'nome' => 'Itajá',
                'idEstado' => 20,
            ),
            130 => 
            array (
                'id' => 1131,
                'nome' => 'Itaú',
                'idEstado' => 20,
            ),
            131 => 
            array (
                'id' => 1132,
                'nome' => 'Jaçanã',
                'idEstado' => 20,
            ),
            132 => 
            array (
                'id' => 1133,
                'nome' => 'Jandaíra',
                'idEstado' => 20,
            ),
            133 => 
            array (
                'id' => 1134,
                'nome' => 'Janduís',
                'idEstado' => 20,
            ),
            134 => 
            array (
                'id' => 1135,
                'nome' => 'Januário Cicco',
                'idEstado' => 20,
            ),
            135 => 
            array (
                'id' => 1136,
                'nome' => 'Japi',
                'idEstado' => 20,
            ),
            136 => 
            array (
                'id' => 1137,
                'nome' => 'Jardim de Angicos',
                'idEstado' => 20,
            ),
            137 => 
            array (
                'id' => 1138,
                'nome' => 'Jardim de Piranhas',
                'idEstado' => 20,
            ),
            138 => 
            array (
                'id' => 1139,
                'nome' => 'Jardim do Seridó',
                'idEstado' => 20,
            ),
            139 => 
            array (
                'id' => 1140,
                'nome' => 'João Câmara',
                'idEstado' => 20,
            ),
            140 => 
            array (
                'id' => 1141,
                'nome' => 'João Dias',
                'idEstado' => 20,
            ),
            141 => 
            array (
                'id' => 1142,
                'nome' => 'José da Penha',
                'idEstado' => 20,
            ),
            142 => 
            array (
                'id' => 1143,
                'nome' => 'Jucurutu',
                'idEstado' => 20,
            ),
            143 => 
            array (
                'id' => 1144,
                'nome' => 'Jundiá',
                'idEstado' => 20,
            ),
            144 => 
            array (
                'id' => 1145,
                'nome' => 'Lagoa D\'Anta',
                'idEstado' => 20,
            ),
            145 => 
            array (
                'id' => 1146,
                'nome' => 'Lagoa de Pedras',
                'idEstado' => 20,
            ),
            146 => 
            array (
                'id' => 1147,
                'nome' => 'Lagoa de Velhos',
                'idEstado' => 20,
            ),
            147 => 
            array (
                'id' => 1148,
                'nome' => 'Lagoa Nova',
                'idEstado' => 20,
            ),
            148 => 
            array (
                'id' => 1149,
                'nome' => 'Lagoa Salgada',
                'idEstado' => 20,
            ),
            149 => 
            array (
                'id' => 1150,
                'nome' => 'Lajes',
                'idEstado' => 20,
            ),
            150 => 
            array (
                'id' => 1151,
                'nome' => 'Lajes Pintadas',
                'idEstado' => 20,
            ),
            151 => 
            array (
                'id' => 1152,
                'nome' => 'Lucrécia',
                'idEstado' => 20,
            ),
            152 => 
            array (
                'id' => 1153,
                'nome' => 'Luís Gomes',
                'idEstado' => 20,
            ),
            153 => 
            array (
                'id' => 1154,
                'nome' => 'Macaíba',
                'idEstado' => 20,
            ),
            154 => 
            array (
                'id' => 1155,
                'nome' => 'Macau',
                'idEstado' => 20,
            ),
            155 => 
            array (
                'id' => 1156,
                'nome' => 'Major Sales',
                'idEstado' => 20,
            ),
            156 => 
            array (
                'id' => 1157,
                'nome' => 'Marcelino Vieira',
                'idEstado' => 20,
            ),
            157 => 
            array (
                'id' => 1158,
                'nome' => 'Martins',
                'idEstado' => 20,
            ),
            158 => 
            array (
                'id' => 1159,
                'nome' => 'Maxaranguape',
                'idEstado' => 20,
            ),
            159 => 
            array (
                'id' => 1160,
                'nome' => 'Messias Targino',
                'idEstado' => 20,
            ),
            160 => 
            array (
                'id' => 1161,
                'nome' => 'Montanhas',
                'idEstado' => 20,
            ),
            161 => 
            array (
                'id' => 1162,
                'nome' => 'Monte Alegre',
                'idEstado' => 20,
            ),
            162 => 
            array (
                'id' => 1163,
                'nome' => 'Monte das Gameleiras',
                'idEstado' => 20,
            ),
            163 => 
            array (
                'id' => 1164,
                'nome' => 'Mossoró',
                'idEstado' => 20,
            ),
            164 => 
            array (
                'id' => 1165,
                'nome' => 'Natal',
                'idEstado' => 20,
            ),
            165 => 
            array (
                'id' => 1166,
                'nome' => 'Nísia Floresta',
                'idEstado' => 20,
            ),
            166 => 
            array (
                'id' => 1167,
                'nome' => 'Nova Cruz',
                'idEstado' => 20,
            ),
            167 => 
            array (
                'id' => 1168,
                'nome' => 'Olho-D\'Água do Borges',
                'idEstado' => 20,
            ),
            168 => 
            array (
                'id' => 1169,
                'nome' => 'Ouro Branco',
                'idEstado' => 20,
            ),
            169 => 
            array (
                'id' => 1170,
                'nome' => 'Paraná',
                'idEstado' => 20,
            ),
            170 => 
            array (
                'id' => 1171,
                'nome' => 'Paraú',
                'idEstado' => 20,
            ),
            171 => 
            array (
                'id' => 1172,
                'nome' => 'Parazinho',
                'idEstado' => 20,
            ),
            172 => 
            array (
                'id' => 1173,
                'nome' => 'Parelhas',
                'idEstado' => 20,
            ),
            173 => 
            array (
                'id' => 1174,
                'nome' => 'Rio do Fogo',
                'idEstado' => 20,
            ),
            174 => 
            array (
                'id' => 1175,
                'nome' => 'Passa e Fica',
                'idEstado' => 20,
            ),
            175 => 
            array (
                'id' => 1176,
                'nome' => 'Passagem',
                'idEstado' => 20,
            ),
            176 => 
            array (
                'id' => 1177,
                'nome' => 'Patu',
                'idEstado' => 20,
            ),
            177 => 
            array (
                'id' => 1178,
                'nome' => 'Santa Maria',
                'idEstado' => 20,
            ),
            178 => 
            array (
                'id' => 1179,
                'nome' => 'Pau dos Ferros',
                'idEstado' => 20,
            ),
            179 => 
            array (
                'id' => 1180,
                'nome' => 'Pedra Grande',
                'idEstado' => 20,
            ),
            180 => 
            array (
                'id' => 1181,
                'nome' => 'Pedra Preta',
                'idEstado' => 20,
            ),
            181 => 
            array (
                'id' => 1182,
                'nome' => 'Pedro Avelino',
                'idEstado' => 20,
            ),
            182 => 
            array (
                'id' => 1183,
                'nome' => 'Pedro Velho',
                'idEstado' => 20,
            ),
            183 => 
            array (
                'id' => 1184,
                'nome' => 'Pendências',
                'idEstado' => 20,
            ),
            184 => 
            array (
                'id' => 1185,
                'nome' => 'Pilões',
                'idEstado' => 20,
            ),
            185 => 
            array (
                'id' => 1186,
                'nome' => 'Poço Branco',
                'idEstado' => 20,
            ),
            186 => 
            array (
                'id' => 1187,
                'nome' => 'Portalegre',
                'idEstado' => 20,
            ),
            187 => 
            array (
                'id' => 1188,
                'nome' => 'Porto do Mangue',
                'idEstado' => 20,
            ),
            188 => 
            array (
                'id' => 1189,
                'nome' => 'Presidente Juscelino',
                'idEstado' => 20,
            ),
            189 => 
            array (
                'id' => 1190,
                'nome' => 'Pureza',
                'idEstado' => 20,
            ),
            190 => 
            array (
                'id' => 1191,
                'nome' => 'Rafael Fernandes',
                'idEstado' => 20,
            ),
            191 => 
            array (
                'id' => 1192,
                'nome' => 'Rafael Godeiro',
                'idEstado' => 20,
            ),
            192 => 
            array (
                'id' => 1193,
                'nome' => 'Riacho da Cruz',
                'idEstado' => 20,
            ),
            193 => 
            array (
                'id' => 1194,
                'nome' => 'Riacho de Santana',
                'idEstado' => 20,
            ),
            194 => 
            array (
                'id' => 1195,
                'nome' => 'Riachuelo',
                'idEstado' => 20,
            ),
            195 => 
            array (
                'id' => 1196,
                'nome' => 'Rodolfo Fernandes',
                'idEstado' => 20,
            ),
            196 => 
            array (
                'id' => 1197,
                'nome' => 'Tibau',
                'idEstado' => 20,
            ),
            197 => 
            array (
                'id' => 1198,
                'nome' => 'Ruy Barbosa',
                'idEstado' => 20,
            ),
            198 => 
            array (
                'id' => 1199,
                'nome' => 'Santa Cruz',
                'idEstado' => 20,
            ),
            199 => 
            array (
                'id' => 1200,
                'nome' => 'Santana do Matos',
                'idEstado' => 20,
            ),
            200 => 
            array (
                'id' => 1201,
                'nome' => 'Santana do Seridó',
                'idEstado' => 20,
            ),
            201 => 
            array (
                'id' => 1202,
                'nome' => 'Santo Antônio',
                'idEstado' => 20,
            ),
            202 => 
            array (
                'id' => 1203,
                'nome' => 'São Bento do Norte',
                'idEstado' => 20,
            ),
            203 => 
            array (
                'id' => 1204,
                'nome' => 'São Bento do Trairí',
                'idEstado' => 20,
            ),
            204 => 
            array (
                'id' => 1205,
                'nome' => 'São Fernando',
                'idEstado' => 20,
            ),
            205 => 
            array (
                'id' => 1206,
                'nome' => 'São Francisco do Oeste',
                'idEstado' => 20,
            ),
            206 => 
            array (
                'id' => 1207,
                'nome' => 'São Gonçalo do Amarante',
                'idEstado' => 20,
            ),
            207 => 
            array (
                'id' => 1208,
                'nome' => 'São João do Sabugi',
                'idEstado' => 20,
            ),
            208 => 
            array (
                'id' => 1209,
                'nome' => 'São José de Mipibu',
                'idEstado' => 20,
            ),
            209 => 
            array (
                'id' => 1210,
                'nome' => 'São José do Campestre',
                'idEstado' => 20,
            ),
            210 => 
            array (
                'id' => 1211,
                'nome' => 'São José do Seridó',
                'idEstado' => 20,
            ),
            211 => 
            array (
                'id' => 1212,
                'nome' => 'São Miguel',
                'idEstado' => 20,
            ),
            212 => 
            array (
                'id' => 1213,
                'nome' => 'São Miguel do Gostoso',
                'idEstado' => 20,
            ),
            213 => 
            array (
                'id' => 1214,
                'nome' => 'São Paulo do Potengi',
                'idEstado' => 20,
            ),
            214 => 
            array (
                'id' => 1215,
                'nome' => 'São Pedro',
                'idEstado' => 20,
            ),
            215 => 
            array (
                'id' => 1216,
                'nome' => 'São Rafael',
                'idEstado' => 20,
            ),
            216 => 
            array (
                'id' => 1217,
                'nome' => 'São Tomé',
                'idEstado' => 20,
            ),
            217 => 
            array (
                'id' => 1218,
                'nome' => 'São Vicente',
                'idEstado' => 20,
            ),
            218 => 
            array (
                'id' => 1219,
                'nome' => 'Senador Elói de Souza',
                'idEstado' => 20,
            ),
            219 => 
            array (
                'id' => 1220,
                'nome' => 'Senador Georgino Avelino',
                'idEstado' => 20,
            ),
            220 => 
            array (
                'id' => 1221,
                'nome' => 'Serra de São Bento',
                'idEstado' => 20,
            ),
            221 => 
            array (
                'id' => 1222,
                'nome' => 'Serra do Mel',
                'idEstado' => 20,
            ),
            222 => 
            array (
                'id' => 1223,
                'nome' => 'Serra Negra do Norte',
                'idEstado' => 20,
            ),
            223 => 
            array (
                'id' => 1224,
                'nome' => 'Serrinha',
                'idEstado' => 20,
            ),
            224 => 
            array (
                'id' => 1225,
                'nome' => 'Serrinha dos Pintos',
                'idEstado' => 20,
            ),
            225 => 
            array (
                'id' => 1226,
                'nome' => 'Severiano Melo',
                'idEstado' => 20,
            ),
            226 => 
            array (
                'id' => 1227,
                'nome' => 'Sítio Novo',
                'idEstado' => 20,
            ),
            227 => 
            array (
                'id' => 1228,
                'nome' => 'Taboleiro Grande',
                'idEstado' => 20,
            ),
            228 => 
            array (
                'id' => 1229,
                'nome' => 'Taipu',
                'idEstado' => 20,
            ),
            229 => 
            array (
                'id' => 1230,
                'nome' => 'Tangará',
                'idEstado' => 20,
            ),
            230 => 
            array (
                'id' => 1231,
                'nome' => 'Tenente Ananias',
                'idEstado' => 20,
            ),
            231 => 
            array (
                'id' => 1232,
                'nome' => 'Tenente Laurentino Cruz',
                'idEstado' => 20,
            ),
            232 => 
            array (
                'id' => 1233,
                'nome' => 'Tibau do Sul',
                'idEstado' => 20,
            ),
            233 => 
            array (
                'id' => 1234,
                'nome' => 'Timbaúba dos Batistas',
                'idEstado' => 20,
            ),
            234 => 
            array (
                'id' => 1235,
                'nome' => 'Touros',
                'idEstado' => 20,
            ),
            235 => 
            array (
                'id' => 1236,
                'nome' => 'Triunfo Potiguar',
                'idEstado' => 20,
            ),
            236 => 
            array (
                'id' => 1237,
                'nome' => 'Umarizal',
                'idEstado' => 20,
            ),
            237 => 
            array (
                'id' => 1238,
                'nome' => 'Upanema',
                'idEstado' => 20,
            ),
            238 => 
            array (
                'id' => 1239,
                'nome' => 'Várzea',
                'idEstado' => 20,
            ),
            239 => 
            array (
                'id' => 1240,
                'nome' => 'Venha-Ver',
                'idEstado' => 20,
            ),
            240 => 
            array (
                'id' => 1241,
                'nome' => 'Vera Cruz',
                'idEstado' => 20,
            ),
            241 => 
            array (
                'id' => 1242,
                'nome' => 'Viçosa',
                'idEstado' => 20,
            ),
            242 => 
            array (
                'id' => 1243,
                'nome' => 'Vila Flor',
                'idEstado' => 20,
            ),
            243 => 
            array (
                'id' => 1244,
                'nome' => 'Água Branca',
                'idEstado' => 15,
            ),
            244 => 
            array (
                'id' => 1245,
                'nome' => 'Aguiar',
                'idEstado' => 15,
            ),
            245 => 
            array (
                'id' => 1246,
                'nome' => 'Alagoa Grande',
                'idEstado' => 15,
            ),
            246 => 
            array (
                'id' => 1247,
                'nome' => 'Alagoa Nova',
                'idEstado' => 15,
            ),
            247 => 
            array (
                'id' => 1248,
                'nome' => 'Alagoinha',
                'idEstado' => 15,
            ),
            248 => 
            array (
                'id' => 1249,
                'nome' => 'Alcantil',
                'idEstado' => 15,
            ),
            249 => 
            array (
                'id' => 1250,
                'nome' => 'Algodão de Jandaíra',
                'idEstado' => 15,
            ),
            250 => 
            array (
                'id' => 1251,
                'nome' => 'Alhandra',
                'idEstado' => 15,
            ),
            251 => 
            array (
                'id' => 1252,
                'nome' => 'São João do Rio do Peixe',
                'idEstado' => 15,
            ),
            252 => 
            array (
                'id' => 1253,
                'nome' => 'Amparo',
                'idEstado' => 15,
            ),
            253 => 
            array (
                'id' => 1254,
                'nome' => 'Aparecida',
                'idEstado' => 15,
            ),
            254 => 
            array (
                'id' => 1255,
                'nome' => 'Araçagi',
                'idEstado' => 15,
            ),
            255 => 
            array (
                'id' => 1256,
                'nome' => 'Arara',
                'idEstado' => 15,
            ),
            256 => 
            array (
                'id' => 1257,
                'nome' => 'Araruna',
                'idEstado' => 15,
            ),
            257 => 
            array (
                'id' => 1258,
                'nome' => 'Areia',
                'idEstado' => 15,
            ),
            258 => 
            array (
                'id' => 1259,
                'nome' => 'Areia de Baraúnas',
                'idEstado' => 15,
            ),
            259 => 
            array (
                'id' => 1260,
                'nome' => 'Areial',
                'idEstado' => 15,
            ),
            260 => 
            array (
                'id' => 1261,
                'nome' => 'Aroeiras',
                'idEstado' => 15,
            ),
            261 => 
            array (
                'id' => 1262,
                'nome' => 'Assunção',
                'idEstado' => 15,
            ),
            262 => 
            array (
                'id' => 1263,
                'nome' => 'Baía da Traição',
                'idEstado' => 15,
            ),
            263 => 
            array (
                'id' => 1264,
                'nome' => 'Bananeiras',
                'idEstado' => 15,
            ),
            264 => 
            array (
                'id' => 1265,
                'nome' => 'Baraúna',
                'idEstado' => 15,
            ),
            265 => 
            array (
                'id' => 1266,
                'nome' => 'Barra de Santana',
                'idEstado' => 15,
            ),
            266 => 
            array (
                'id' => 1267,
                'nome' => 'Barra de Santa Rosa',
                'idEstado' => 15,
            ),
            267 => 
            array (
                'id' => 1268,
                'nome' => 'Barra de São Miguel',
                'idEstado' => 15,
            ),
            268 => 
            array (
                'id' => 1269,
                'nome' => 'Bayeux',
                'idEstado' => 15,
            ),
            269 => 
            array (
                'id' => 1270,
                'nome' => 'Belém',
                'idEstado' => 15,
            ),
            270 => 
            array (
                'id' => 1271,
                'nome' => 'Belém do Brejo do Cruz',
                'idEstado' => 15,
            ),
            271 => 
            array (
                'id' => 1272,
                'nome' => 'Bernardino Batista',
                'idEstado' => 15,
            ),
            272 => 
            array (
                'id' => 1273,
                'nome' => 'Boa Ventura',
                'idEstado' => 15,
            ),
            273 => 
            array (
                'id' => 1274,
                'nome' => 'Boa Vista',
                'idEstado' => 15,
            ),
            274 => 
            array (
                'id' => 1275,
                'nome' => 'Bom Jesus',
                'idEstado' => 15,
            ),
            275 => 
            array (
                'id' => 1276,
                'nome' => 'Bom Sucesso',
                'idEstado' => 15,
            ),
            276 => 
            array (
                'id' => 1277,
                'nome' => 'Bonito de Santa Fé',
                'idEstado' => 15,
            ),
            277 => 
            array (
                'id' => 1278,
                'nome' => 'Boqueirão',
                'idEstado' => 15,
            ),
            278 => 
            array (
                'id' => 1279,
                'nome' => 'Igaracy',
                'idEstado' => 15,
            ),
            279 => 
            array (
                'id' => 1280,
                'nome' => 'Borborema',
                'idEstado' => 15,
            ),
            280 => 
            array (
                'id' => 1281,
                'nome' => 'Brejo do Cruz',
                'idEstado' => 15,
            ),
            281 => 
            array (
                'id' => 1282,
                'nome' => 'Brejo dos Santos',
                'idEstado' => 15,
            ),
            282 => 
            array (
                'id' => 1283,
                'nome' => 'Caaporã',
                'idEstado' => 15,
            ),
            283 => 
            array (
                'id' => 1284,
                'nome' => 'Cabaceiras',
                'idEstado' => 15,
            ),
            284 => 
            array (
                'id' => 1285,
                'nome' => 'Cabedelo',
                'idEstado' => 15,
            ),
            285 => 
            array (
                'id' => 1286,
                'nome' => 'Cachoeira dos Índios',
                'idEstado' => 15,
            ),
            286 => 
            array (
                'id' => 1287,
                'nome' => 'Cacimba de Areia',
                'idEstado' => 15,
            ),
            287 => 
            array (
                'id' => 1288,
                'nome' => 'Cacimba de Dentro',
                'idEstado' => 15,
            ),
            288 => 
            array (
                'id' => 1289,
                'nome' => 'Cacimbas',
                'idEstado' => 15,
            ),
            289 => 
            array (
                'id' => 1290,
                'nome' => 'Caiçara',
                'idEstado' => 15,
            ),
            290 => 
            array (
                'id' => 1291,
                'nome' => 'Cajazeiras',
                'idEstado' => 15,
            ),
            291 => 
            array (
                'id' => 1292,
                'nome' => 'Cajazeirinhas',
                'idEstado' => 15,
            ),
            292 => 
            array (
                'id' => 1293,
                'nome' => 'Caldas Brandão',
                'idEstado' => 15,
            ),
            293 => 
            array (
                'id' => 1294,
                'nome' => 'Camalaú',
                'idEstado' => 15,
            ),
            294 => 
            array (
                'id' => 1295,
                'nome' => 'Campina Grande',
                'idEstado' => 15,
            ),
            295 => 
            array (
                'id' => 1296,
                'nome' => 'Capim',
                'idEstado' => 15,
            ),
            296 => 
            array (
                'id' => 1297,
                'nome' => 'Caraúbas',
                'idEstado' => 15,
            ),
            297 => 
            array (
                'id' => 1298,
                'nome' => 'Carrapateira',
                'idEstado' => 15,
            ),
            298 => 
            array (
                'id' => 1299,
                'nome' => 'Casserengue',
                'idEstado' => 15,
            ),
            299 => 
            array (
                'id' => 1300,
                'nome' => 'Catingueira',
                'idEstado' => 15,
            ),
            300 => 
            array (
                'id' => 1301,
                'nome' => 'Catolé do Rocha',
                'idEstado' => 15,
            ),
            301 => 
            array (
                'id' => 1302,
                'nome' => 'Caturité',
                'idEstado' => 15,
            ),
            302 => 
            array (
                'id' => 1303,
                'nome' => 'Conceição',
                'idEstado' => 15,
            ),
            303 => 
            array (
                'id' => 1304,
                'nome' => 'Condado',
                'idEstado' => 15,
            ),
            304 => 
            array (
                'id' => 1305,
                'nome' => 'Conde',
                'idEstado' => 15,
            ),
            305 => 
            array (
                'id' => 1306,
                'nome' => 'Congo',
                'idEstado' => 15,
            ),
            306 => 
            array (
                'id' => 1307,
                'nome' => 'Coremas',
                'idEstado' => 15,
            ),
            307 => 
            array (
                'id' => 1308,
                'nome' => 'Coxixola',
                'idEstado' => 15,
            ),
            308 => 
            array (
                'id' => 1309,
                'nome' => 'Cruz do Espírito Santo',
                'idEstado' => 15,
            ),
            309 => 
            array (
                'id' => 1310,
                'nome' => 'Cubati',
                'idEstado' => 15,
            ),
            310 => 
            array (
                'id' => 1311,
                'nome' => 'Cuité',
                'idEstado' => 15,
            ),
            311 => 
            array (
                'id' => 1312,
                'nome' => 'Cuitegi',
                'idEstado' => 15,
            ),
            312 => 
            array (
                'id' => 1313,
                'nome' => 'Cuité de Mamanguape',
                'idEstado' => 15,
            ),
            313 => 
            array (
                'id' => 1314,
                'nome' => 'Curral de Cima',
                'idEstado' => 15,
            ),
            314 => 
            array (
                'id' => 1315,
                'nome' => 'Curral Velho',
                'idEstado' => 15,
            ),
            315 => 
            array (
                'id' => 1316,
                'nome' => 'Damião',
                'idEstado' => 15,
            ),
            316 => 
            array (
                'id' => 1317,
                'nome' => 'Desterro',
                'idEstado' => 15,
            ),
            317 => 
            array (
                'id' => 1318,
                'nome' => 'Vista Serrana',
                'idEstado' => 15,
            ),
            318 => 
            array (
                'id' => 1319,
                'nome' => 'Diamante',
                'idEstado' => 15,
            ),
            319 => 
            array (
                'id' => 1320,
                'nome' => 'Dona Inês',
                'idEstado' => 15,
            ),
            320 => 
            array (
                'id' => 1321,
                'nome' => 'Duas Estradas',
                'idEstado' => 15,
            ),
            321 => 
            array (
                'id' => 1322,
                'nome' => 'Emas',
                'idEstado' => 15,
            ),
            322 => 
            array (
                'id' => 1323,
                'nome' => 'Esperança',
                'idEstado' => 15,
            ),
            323 => 
            array (
                'id' => 1324,
                'nome' => 'Fagundes',
                'idEstado' => 15,
            ),
            324 => 
            array (
                'id' => 1325,
                'nome' => 'Frei Martinho',
                'idEstado' => 15,
            ),
            325 => 
            array (
                'id' => 1326,
                'nome' => 'Gado Bravo',
                'idEstado' => 15,
            ),
            326 => 
            array (
                'id' => 1327,
                'nome' => 'Guarabira',
                'idEstado' => 15,
            ),
            327 => 
            array (
                'id' => 1328,
                'nome' => 'Gurinhém',
                'idEstado' => 15,
            ),
            328 => 
            array (
                'id' => 1329,
                'nome' => 'Gurjão',
                'idEstado' => 15,
            ),
            329 => 
            array (
                'id' => 1330,
                'nome' => 'Ibiara',
                'idEstado' => 15,
            ),
            330 => 
            array (
                'id' => 1331,
                'nome' => 'Imaculada',
                'idEstado' => 15,
            ),
            331 => 
            array (
                'id' => 1332,
                'nome' => 'Ingá',
                'idEstado' => 15,
            ),
            332 => 
            array (
                'id' => 1333,
                'nome' => 'Itabaiana',
                'idEstado' => 15,
            ),
            333 => 
            array (
                'id' => 1334,
                'nome' => 'Itaporanga',
                'idEstado' => 15,
            ),
            334 => 
            array (
                'id' => 1335,
                'nome' => 'Itapororoca',
                'idEstado' => 15,
            ),
            335 => 
            array (
                'id' => 1336,
                'nome' => 'Itatuba',
                'idEstado' => 15,
            ),
            336 => 
            array (
                'id' => 1337,
                'nome' => 'Jacaraú',
                'idEstado' => 15,
            ),
            337 => 
            array (
                'id' => 1338,
                'nome' => 'Jericó',
                'idEstado' => 15,
            ),
            338 => 
            array (
                'id' => 1339,
                'nome' => 'João Pessoa',
                'idEstado' => 15,
            ),
            339 => 
            array (
                'id' => 1340,
                'nome' => 'Juarez Távora',
                'idEstado' => 15,
            ),
            340 => 
            array (
                'id' => 1341,
                'nome' => 'Juazeirinho',
                'idEstado' => 15,
            ),
            341 => 
            array (
                'id' => 1342,
                'nome' => 'Junco do Seridó',
                'idEstado' => 15,
            ),
            342 => 
            array (
                'id' => 1343,
                'nome' => 'Juripiranga',
                'idEstado' => 15,
            ),
            343 => 
            array (
                'id' => 1344,
                'nome' => 'Juru',
                'idEstado' => 15,
            ),
            344 => 
            array (
                'id' => 1345,
                'nome' => 'Lagoa',
                'idEstado' => 15,
            ),
            345 => 
            array (
                'id' => 1346,
                'nome' => 'Lagoa de Dentro',
                'idEstado' => 15,
            ),
            346 => 
            array (
                'id' => 1347,
                'nome' => 'Lagoa Seca',
                'idEstado' => 15,
            ),
            347 => 
            array (
                'id' => 1348,
                'nome' => 'Lastro',
                'idEstado' => 15,
            ),
            348 => 
            array (
                'id' => 1349,
                'nome' => 'Livramento',
                'idEstado' => 15,
            ),
            349 => 
            array (
                'id' => 1350,
                'nome' => 'Logradouro',
                'idEstado' => 15,
            ),
            350 => 
            array (
                'id' => 1351,
                'nome' => 'Lucena',
                'idEstado' => 15,
            ),
            351 => 
            array (
                'id' => 1352,
                'nome' => 'Mãe D\'Água',
                'idEstado' => 15,
            ),
            352 => 
            array (
                'id' => 1353,
                'nome' => 'Malta',
                'idEstado' => 15,
            ),
            353 => 
            array (
                'id' => 1354,
                'nome' => 'Mamanguape',
                'idEstado' => 15,
            ),
            354 => 
            array (
                'id' => 1355,
                'nome' => 'Manaíra',
                'idEstado' => 15,
            ),
            355 => 
            array (
                'id' => 1356,
                'nome' => 'Marcação',
                'idEstado' => 15,
            ),
            356 => 
            array (
                'id' => 1357,
                'nome' => 'Mari',
                'idEstado' => 15,
            ),
            357 => 
            array (
                'id' => 1358,
                'nome' => 'Marizópolis',
                'idEstado' => 15,
            ),
            358 => 
            array (
                'id' => 1359,
                'nome' => 'Massaranduba',
                'idEstado' => 15,
            ),
            359 => 
            array (
                'id' => 1360,
                'nome' => 'Mataraca',
                'idEstado' => 15,
            ),
            360 => 
            array (
                'id' => 1361,
                'nome' => 'Matinhas',
                'idEstado' => 15,
            ),
            361 => 
            array (
                'id' => 1362,
                'nome' => 'Mato Grosso',
                'idEstado' => 15,
            ),
            362 => 
            array (
                'id' => 1363,
                'nome' => 'Maturéia',
                'idEstado' => 15,
            ),
            363 => 
            array (
                'id' => 1364,
                'nome' => 'Mogeiro',
                'idEstado' => 15,
            ),
            364 => 
            array (
                'id' => 1365,
                'nome' => 'Montadas',
                'idEstado' => 15,
            ),
            365 => 
            array (
                'id' => 1366,
                'nome' => 'Monte Horebe',
                'idEstado' => 15,
            ),
            366 => 
            array (
                'id' => 1367,
                'nome' => 'Monteiro',
                'idEstado' => 15,
            ),
            367 => 
            array (
                'id' => 1368,
                'nome' => 'Mulungu',
                'idEstado' => 15,
            ),
            368 => 
            array (
                'id' => 1369,
                'nome' => 'Natuba',
                'idEstado' => 15,
            ),
            369 => 
            array (
                'id' => 1370,
                'nome' => 'Nazarezinho',
                'idEstado' => 15,
            ),
            370 => 
            array (
                'id' => 1371,
                'nome' => 'Nova Floresta',
                'idEstado' => 15,
            ),
            371 => 
            array (
                'id' => 1372,
                'nome' => 'Nova Olinda',
                'idEstado' => 15,
            ),
            372 => 
            array (
                'id' => 1373,
                'nome' => 'Nova Palmeira',
                'idEstado' => 15,
            ),
            373 => 
            array (
                'id' => 1374,
                'nome' => 'Olho D\'Água',
                'idEstado' => 15,
            ),
            374 => 
            array (
                'id' => 1375,
                'nome' => 'Olivedos',
                'idEstado' => 15,
            ),
            375 => 
            array (
                'id' => 1376,
                'nome' => 'Ouro Velho',
                'idEstado' => 15,
            ),
            376 => 
            array (
                'id' => 1377,
                'nome' => 'Parari',
                'idEstado' => 15,
            ),
            377 => 
            array (
                'id' => 1378,
                'nome' => 'Passagem',
                'idEstado' => 15,
            ),
            378 => 
            array (
                'id' => 1379,
                'nome' => 'Patos',
                'idEstado' => 15,
            ),
            379 => 
            array (
                'id' => 1380,
                'nome' => 'Paulista',
                'idEstado' => 15,
            ),
            380 => 
            array (
                'id' => 1381,
                'nome' => 'Pedra Branca',
                'idEstado' => 15,
            ),
            381 => 
            array (
                'id' => 1382,
                'nome' => 'Pedra Lavrada',
                'idEstado' => 15,
            ),
            382 => 
            array (
                'id' => 1383,
                'nome' => 'Pedras de Fogo',
                'idEstado' => 15,
            ),
            383 => 
            array (
                'id' => 1384,
                'nome' => 'Piancó',
                'idEstado' => 15,
            ),
            384 => 
            array (
                'id' => 1385,
                'nome' => 'Picuí',
                'idEstado' => 15,
            ),
            385 => 
            array (
                'id' => 1386,
                'nome' => 'Pilar',
                'idEstado' => 15,
            ),
            386 => 
            array (
                'id' => 1387,
                'nome' => 'Pilões',
                'idEstado' => 15,
            ),
            387 => 
            array (
                'id' => 1388,
                'nome' => 'Pilõezinhos',
                'idEstado' => 15,
            ),
            388 => 
            array (
                'id' => 1389,
                'nome' => 'Pirpirituba',
                'idEstado' => 15,
            ),
            389 => 
            array (
                'id' => 1390,
                'nome' => 'Pitimbu',
                'idEstado' => 15,
            ),
            390 => 
            array (
                'id' => 1391,
                'nome' => 'Pocinhos',
                'idEstado' => 15,
            ),
            391 => 
            array (
                'id' => 1392,
                'nome' => 'Poço Dantas',
                'idEstado' => 15,
            ),
            392 => 
            array (
                'id' => 1393,
                'nome' => 'Poço de José de Moura',
                'idEstado' => 15,
            ),
            393 => 
            array (
                'id' => 1394,
                'nome' => 'Pombal',
                'idEstado' => 15,
            ),
            394 => 
            array (
                'id' => 1395,
                'nome' => 'Prata',
                'idEstado' => 15,
            ),
            395 => 
            array (
                'id' => 1396,
                'nome' => 'Princesa Isabel',
                'idEstado' => 15,
            ),
            396 => 
            array (
                'id' => 1397,
                'nome' => 'Puxinanã',
                'idEstado' => 15,
            ),
            397 => 
            array (
                'id' => 1398,
                'nome' => 'Queimadas',
                'idEstado' => 15,
            ),
            398 => 
            array (
                'id' => 1399,
                'nome' => 'Quixabá',
                'idEstado' => 15,
            ),
            399 => 
            array (
                'id' => 1400,
                'nome' => 'Remígio',
                'idEstado' => 15,
            ),
            400 => 
            array (
                'id' => 1401,
                'nome' => 'Pedro Régis',
                'idEstado' => 15,
            ),
            401 => 
            array (
                'id' => 1402,
                'nome' => 'Riachão',
                'idEstado' => 15,
            ),
            402 => 
            array (
                'id' => 1403,
                'nome' => 'Riachão do Bacamarte',
                'idEstado' => 15,
            ),
            403 => 
            array (
                'id' => 1404,
                'nome' => 'Riachão do Poço',
                'idEstado' => 15,
            ),
            404 => 
            array (
                'id' => 1405,
                'nome' => 'Riacho de Santo Antônio',
                'idEstado' => 15,
            ),
            405 => 
            array (
                'id' => 1406,
                'nome' => 'Riacho dos Cavalos',
                'idEstado' => 15,
            ),
            406 => 
            array (
                'id' => 1407,
                'nome' => 'Rio Tinto',
                'idEstado' => 15,
            ),
            407 => 
            array (
                'id' => 1408,
                'nome' => 'Salgadinho',
                'idEstado' => 15,
            ),
            408 => 
            array (
                'id' => 1409,
                'nome' => 'Salgado de São Félix',
                'idEstado' => 15,
            ),
            409 => 
            array (
                'id' => 1410,
                'nome' => 'Santa Cecília',
                'idEstado' => 15,
            ),
            410 => 
            array (
                'id' => 1411,
                'nome' => 'Santa Cruz',
                'idEstado' => 15,
            ),
            411 => 
            array (
                'id' => 1412,
                'nome' => 'Santa Helena',
                'idEstado' => 15,
            ),
            412 => 
            array (
                'id' => 1413,
                'nome' => 'Santa Inês',
                'idEstado' => 15,
            ),
            413 => 
            array (
                'id' => 1414,
                'nome' => 'Santa Luzia',
                'idEstado' => 15,
            ),
            414 => 
            array (
                'id' => 1415,
                'nome' => 'Santana de Mangueira',
                'idEstado' => 15,
            ),
            415 => 
            array (
                'id' => 1416,
                'nome' => 'Santana dos Garrotes',
                'idEstado' => 15,
            ),
            416 => 
            array (
                'id' => 1417,
                'nome' => 'Joca Claudino',
                'idEstado' => 15,
            ),
            417 => 
            array (
                'id' => 1418,
                'nome' => 'Santa Rita',
                'idEstado' => 15,
            ),
            418 => 
            array (
                'id' => 1419,
                'nome' => 'Santa Teresinha',
                'idEstado' => 15,
            ),
            419 => 
            array (
                'id' => 1420,
                'nome' => 'Santo André',
                'idEstado' => 15,
            ),
            420 => 
            array (
                'id' => 1421,
                'nome' => 'São Bento',
                'idEstado' => 15,
            ),
            421 => 
            array (
                'id' => 1422,
                'nome' => 'São Bentinho',
                'idEstado' => 15,
            ),
            422 => 
            array (
                'id' => 1423,
                'nome' => 'São Domingos do Cariri',
                'idEstado' => 15,
            ),
            423 => 
            array (
                'id' => 1424,
                'nome' => 'São Domingos',
                'idEstado' => 15,
            ),
            424 => 
            array (
                'id' => 1425,
                'nome' => 'São Francisco',
                'idEstado' => 15,
            ),
            425 => 
            array (
                'id' => 1426,
                'nome' => 'São João do Cariri',
                'idEstado' => 15,
            ),
            426 => 
            array (
                'id' => 1427,
                'nome' => 'São João do Tigre',
                'idEstado' => 15,
            ),
            427 => 
            array (
                'id' => 1428,
                'nome' => 'São José da Lagoa Tapada',
                'idEstado' => 15,
            ),
            428 => 
            array (
                'id' => 1429,
                'nome' => 'São José de Caiana',
                'idEstado' => 15,
            ),
            429 => 
            array (
                'id' => 1430,
                'nome' => 'São José de Espinharas',
                'idEstado' => 15,
            ),
            430 => 
            array (
                'id' => 1431,
                'nome' => 'São José dos Ramos',
                'idEstado' => 15,
            ),
            431 => 
            array (
                'id' => 1432,
                'nome' => 'São José de Piranhas',
                'idEstado' => 15,
            ),
            432 => 
            array (
                'id' => 1433,
                'nome' => 'São José de Princesa',
                'idEstado' => 15,
            ),
            433 => 
            array (
                'id' => 1434,
                'nome' => 'São José do Bonfim',
                'idEstado' => 15,
            ),
            434 => 
            array (
                'id' => 1435,
                'nome' => 'São José do Brejo do Cruz',
                'idEstado' => 15,
            ),
            435 => 
            array (
                'id' => 1436,
                'nome' => 'São José do Sabugi',
                'idEstado' => 15,
            ),
            436 => 
            array (
                'id' => 1437,
                'nome' => 'São José dos Cordeiros',
                'idEstado' => 15,
            ),
            437 => 
            array (
                'id' => 1438,
                'nome' => 'São Mamede',
                'idEstado' => 15,
            ),
            438 => 
            array (
                'id' => 1439,
                'nome' => 'São Miguel de Taipu',
                'idEstado' => 15,
            ),
            439 => 
            array (
                'id' => 1440,
                'nome' => 'São Sebastião de Lagoa de Roça',
                'idEstado' => 15,
            ),
            440 => 
            array (
                'id' => 1441,
                'nome' => 'São Sebastião do Umbuzeiro',
                'idEstado' => 15,
            ),
            441 => 
            array (
                'id' => 1442,
                'nome' => 'Sapé',
                'idEstado' => 15,
            ),
            442 => 
            array (
                'id' => 1443,
                'nome' => 'São Vicente do Seridó',
                'idEstado' => 15,
            ),
            443 => 
            array (
                'id' => 1444,
                'nome' => 'Serra Branca',
                'idEstado' => 15,
            ),
            444 => 
            array (
                'id' => 1445,
                'nome' => 'Serra da Raiz',
                'idEstado' => 15,
            ),
            445 => 
            array (
                'id' => 1446,
                'nome' => 'Serra Grande',
                'idEstado' => 15,
            ),
            446 => 
            array (
                'id' => 1447,
                'nome' => 'Serra Redonda',
                'idEstado' => 15,
            ),
            447 => 
            array (
                'id' => 1448,
                'nome' => 'Serraria',
                'idEstado' => 15,
            ),
            448 => 
            array (
                'id' => 1449,
                'nome' => 'Sertãozinho',
                'idEstado' => 15,
            ),
            449 => 
            array (
                'id' => 1450,
                'nome' => 'Sobrado',
                'idEstado' => 15,
            ),
            450 => 
            array (
                'id' => 1451,
                'nome' => 'Solânea',
                'idEstado' => 15,
            ),
            451 => 
            array (
                'id' => 1452,
                'nome' => 'Soledade',
                'idEstado' => 15,
            ),
            452 => 
            array (
                'id' => 1453,
                'nome' => 'Sossêgo',
                'idEstado' => 15,
            ),
            453 => 
            array (
                'id' => 1454,
                'nome' => 'Sousa',
                'idEstado' => 15,
            ),
            454 => 
            array (
                'id' => 1455,
                'nome' => 'Sumé',
                'idEstado' => 15,
            ),
            455 => 
            array (
                'id' => 1456,
                'nome' => 'Tacima',
                'idEstado' => 15,
            ),
            456 => 
            array (
                'id' => 1457,
                'nome' => 'Taperoá',
                'idEstado' => 15,
            ),
            457 => 
            array (
                'id' => 1458,
                'nome' => 'Tavares',
                'idEstado' => 15,
            ),
            458 => 
            array (
                'id' => 1459,
                'nome' => 'Teixeira',
                'idEstado' => 15,
            ),
            459 => 
            array (
                'id' => 1460,
                'nome' => 'Tenório',
                'idEstado' => 15,
            ),
            460 => 
            array (
                'id' => 1461,
                'nome' => 'Triunfo',
                'idEstado' => 15,
            ),
            461 => 
            array (
                'id' => 1462,
                'nome' => 'Uiraúna',
                'idEstado' => 15,
            ),
            462 => 
            array (
                'id' => 1463,
                'nome' => 'Umbuzeiro',
                'idEstado' => 15,
            ),
            463 => 
            array (
                'id' => 1464,
                'nome' => 'Várzea',
                'idEstado' => 15,
            ),
            464 => 
            array (
                'id' => 1465,
                'nome' => 'Vieirópolis',
                'idEstado' => 15,
            ),
            465 => 
            array (
                'id' => 1466,
                'nome' => 'Zabelê',
                'idEstado' => 15,
            ),
            466 => 
            array (
                'id' => 1467,
                'nome' => 'Abreu e Lima',
                'idEstado' => 17,
            ),
            467 => 
            array (
                'id' => 1468,
                'nome' => 'Afogados da Ingazeira',
                'idEstado' => 17,
            ),
            468 => 
            array (
                'id' => 1469,
                'nome' => 'Afrânio',
                'idEstado' => 17,
            ),
            469 => 
            array (
                'id' => 1470,
                'nome' => 'Agrestina',
                'idEstado' => 17,
            ),
            470 => 
            array (
                'id' => 1471,
                'nome' => 'Água Preta',
                'idEstado' => 17,
            ),
            471 => 
            array (
                'id' => 1472,
                'nome' => 'Águas Belas',
                'idEstado' => 17,
            ),
            472 => 
            array (
                'id' => 1473,
                'nome' => 'Alagoinha',
                'idEstado' => 17,
            ),
            473 => 
            array (
                'id' => 1474,
                'nome' => 'Aliança',
                'idEstado' => 17,
            ),
            474 => 
            array (
                'id' => 1475,
                'nome' => 'Altinho',
                'idEstado' => 17,
            ),
            475 => 
            array (
                'id' => 1476,
                'nome' => 'Amaraji',
                'idEstado' => 17,
            ),
            476 => 
            array (
                'id' => 1477,
                'nome' => 'Angelim',
                'idEstado' => 17,
            ),
            477 => 
            array (
                'id' => 1478,
                'nome' => 'Araçoiaba',
                'idEstado' => 17,
            ),
            478 => 
            array (
                'id' => 1479,
                'nome' => 'Araripina',
                'idEstado' => 17,
            ),
            479 => 
            array (
                'id' => 1480,
                'nome' => 'Arcoverde',
                'idEstado' => 17,
            ),
            480 => 
            array (
                'id' => 1481,
                'nome' => 'Barra de Guabiraba',
                'idEstado' => 17,
            ),
            481 => 
            array (
                'id' => 1482,
                'nome' => 'Barreiros',
                'idEstado' => 17,
            ),
            482 => 
            array (
                'id' => 1483,
                'nome' => 'Belém de Maria',
                'idEstado' => 17,
            ),
            483 => 
            array (
                'id' => 1484,
                'nome' => 'Belém do São Francisco',
                'idEstado' => 17,
            ),
            484 => 
            array (
                'id' => 1485,
                'nome' => 'Belo Jardim',
                'idEstado' => 17,
            ),
            485 => 
            array (
                'id' => 1486,
                'nome' => 'Betânia',
                'idEstado' => 17,
            ),
            486 => 
            array (
                'id' => 1487,
                'nome' => 'Bezerros',
                'idEstado' => 17,
            ),
            487 => 
            array (
                'id' => 1488,
                'nome' => 'Bodocó',
                'idEstado' => 17,
            ),
            488 => 
            array (
                'id' => 1489,
                'nome' => 'Bom Conselho',
                'idEstado' => 17,
            ),
            489 => 
            array (
                'id' => 1490,
                'nome' => 'Bom Jardim',
                'idEstado' => 17,
            ),
            490 => 
            array (
                'id' => 1491,
                'nome' => 'Bonito',
                'idEstado' => 17,
            ),
            491 => 
            array (
                'id' => 1492,
                'nome' => 'Brejão',
                'idEstado' => 17,
            ),
            492 => 
            array (
                'id' => 1493,
                'nome' => 'Brejinho',
                'idEstado' => 17,
            ),
            493 => 
            array (
                'id' => 1494,
                'nome' => 'Brejo da Madre de Deus',
                'idEstado' => 17,
            ),
            494 => 
            array (
                'id' => 1495,
                'nome' => 'Buenos Aires',
                'idEstado' => 17,
            ),
            495 => 
            array (
                'id' => 1496,
                'nome' => 'Buíque',
                'idEstado' => 17,
            ),
            496 => 
            array (
                'id' => 1497,
                'nome' => 'Cabo de Santo Agostinho',
                'idEstado' => 17,
            ),
            497 => 
            array (
                'id' => 1498,
                'nome' => 'Cabrobó',
                'idEstado' => 17,
            ),
            498 => 
            array (
                'id' => 1499,
                'nome' => 'Cachoeirinha',
                'idEstado' => 17,
            ),
            499 => 
            array (
                'id' => 1500,
                'nome' => 'Caetés',
                'idEstado' => 17,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'nome' => 'Calçado',
                'idEstado' => 17,
            ),
            1 => 
            array (
                'id' => 1502,
                'nome' => 'Calumbi',
                'idEstado' => 17,
            ),
            2 => 
            array (
                'id' => 1503,
                'nome' => 'Camaragibe',
                'idEstado' => 17,
            ),
            3 => 
            array (
                'id' => 1504,
                'nome' => 'Camocim de São Félix',
                'idEstado' => 17,
            ),
            4 => 
            array (
                'id' => 1505,
                'nome' => 'Camutanga',
                'idEstado' => 17,
            ),
            5 => 
            array (
                'id' => 1506,
                'nome' => 'Canhotinho',
                'idEstado' => 17,
            ),
            6 => 
            array (
                'id' => 1507,
                'nome' => 'Capoeiras',
                'idEstado' => 17,
            ),
            7 => 
            array (
                'id' => 1508,
                'nome' => 'Carnaíba',
                'idEstado' => 17,
            ),
            8 => 
            array (
                'id' => 1509,
                'nome' => 'Carnaubeira da Penha',
                'idEstado' => 17,
            ),
            9 => 
            array (
                'id' => 1510,
                'nome' => 'Carpina',
                'idEstado' => 17,
            ),
            10 => 
            array (
                'id' => 1511,
                'nome' => 'Caruaru',
                'idEstado' => 17,
            ),
            11 => 
            array (
                'id' => 1512,
                'nome' => 'Casinhas',
                'idEstado' => 17,
            ),
            12 => 
            array (
                'id' => 1513,
                'nome' => 'Catende',
                'idEstado' => 17,
            ),
            13 => 
            array (
                'id' => 1514,
                'nome' => 'Cedro',
                'idEstado' => 17,
            ),
            14 => 
            array (
                'id' => 1515,
                'nome' => 'Chã de Alegria',
                'idEstado' => 17,
            ),
            15 => 
            array (
                'id' => 1516,
                'nome' => 'Chã Grande',
                'idEstado' => 17,
            ),
            16 => 
            array (
                'id' => 1517,
                'nome' => 'Condado',
                'idEstado' => 17,
            ),
            17 => 
            array (
                'id' => 1518,
                'nome' => 'Correntes',
                'idEstado' => 17,
            ),
            18 => 
            array (
                'id' => 1519,
                'nome' => 'Cortês',
                'idEstado' => 17,
            ),
            19 => 
            array (
                'id' => 1520,
                'nome' => 'Cumaru',
                'idEstado' => 17,
            ),
            20 => 
            array (
                'id' => 1521,
                'nome' => 'Cupira',
                'idEstado' => 17,
            ),
            21 => 
            array (
                'id' => 1522,
                'nome' => 'Custódia',
                'idEstado' => 17,
            ),
            22 => 
            array (
                'id' => 1523,
                'nome' => 'Dormentes',
                'idEstado' => 17,
            ),
            23 => 
            array (
                'id' => 1524,
                'nome' => 'Escada',
                'idEstado' => 17,
            ),
            24 => 
            array (
                'id' => 1525,
                'nome' => 'Exu',
                'idEstado' => 17,
            ),
            25 => 
            array (
                'id' => 1526,
                'nome' => 'Feira Nova',
                'idEstado' => 17,
            ),
            26 => 
            array (
                'id' => 1527,
                'nome' => 'Fernando de Noronha',
                'idEstado' => 17,
            ),
            27 => 
            array (
                'id' => 1528,
                'nome' => 'Ferreiros',
                'idEstado' => 17,
            ),
            28 => 
            array (
                'id' => 1529,
                'nome' => 'Flores',
                'idEstado' => 17,
            ),
            29 => 
            array (
                'id' => 1530,
                'nome' => 'Floresta',
                'idEstado' => 17,
            ),
            30 => 
            array (
                'id' => 1531,
                'nome' => 'Frei Miguelinho',
                'idEstado' => 17,
            ),
            31 => 
            array (
                'id' => 1532,
                'nome' => 'Gameleira',
                'idEstado' => 17,
            ),
            32 => 
            array (
                'id' => 1533,
                'nome' => 'Garanhuns',
                'idEstado' => 17,
            ),
            33 => 
            array (
                'id' => 1534,
                'nome' => 'Glória do Goitá',
                'idEstado' => 17,
            ),
            34 => 
            array (
                'id' => 1535,
                'nome' => 'Goiana',
                'idEstado' => 17,
            ),
            35 => 
            array (
                'id' => 1536,
                'nome' => 'Granito',
                'idEstado' => 17,
            ),
            36 => 
            array (
                'id' => 1537,
                'nome' => 'Gravatá',
                'idEstado' => 17,
            ),
            37 => 
            array (
                'id' => 1538,
                'nome' => 'Iati',
                'idEstado' => 17,
            ),
            38 => 
            array (
                'id' => 1539,
                'nome' => 'Ibimirim',
                'idEstado' => 17,
            ),
            39 => 
            array (
                'id' => 1540,
                'nome' => 'Ibirajuba',
                'idEstado' => 17,
            ),
            40 => 
            array (
                'id' => 1541,
                'nome' => 'Igarassu',
                'idEstado' => 17,
            ),
            41 => 
            array (
                'id' => 1542,
                'nome' => 'Iguaraci',
                'idEstado' => 17,
            ),
            42 => 
            array (
                'id' => 1543,
                'nome' => 'Inajá',
                'idEstado' => 17,
            ),
            43 => 
            array (
                'id' => 1544,
                'nome' => 'Ingazeira',
                'idEstado' => 17,
            ),
            44 => 
            array (
                'id' => 1545,
                'nome' => 'Ipojuca',
                'idEstado' => 17,
            ),
            45 => 
            array (
                'id' => 1546,
                'nome' => 'Ipubi',
                'idEstado' => 17,
            ),
            46 => 
            array (
                'id' => 1547,
                'nome' => 'Itacuruba',
                'idEstado' => 17,
            ),
            47 => 
            array (
                'id' => 1548,
                'nome' => 'Itaíba',
                'idEstado' => 17,
            ),
            48 => 
            array (
                'id' => 1549,
                'nome' => 'Ilha de Itamaracá',
                'idEstado' => 17,
            ),
            49 => 
            array (
                'id' => 1550,
                'nome' => 'Itambé',
                'idEstado' => 17,
            ),
            50 => 
            array (
                'id' => 1551,
                'nome' => 'Itapetim',
                'idEstado' => 17,
            ),
            51 => 
            array (
                'id' => 1552,
                'nome' => 'Itapissuma',
                'idEstado' => 17,
            ),
            52 => 
            array (
                'id' => 1553,
                'nome' => 'Itaquitinga',
                'idEstado' => 17,
            ),
            53 => 
            array (
                'id' => 1554,
                'nome' => 'Jaboatão dos Guararapes',
                'idEstado' => 17,
            ),
            54 => 
            array (
                'id' => 1555,
                'nome' => 'Jaqueira',
                'idEstado' => 17,
            ),
            55 => 
            array (
                'id' => 1556,
                'nome' => 'Jataúba',
                'idEstado' => 17,
            ),
            56 => 
            array (
                'id' => 1557,
                'nome' => 'Jatobá',
                'idEstado' => 17,
            ),
            57 => 
            array (
                'id' => 1558,
                'nome' => 'João Alfredo',
                'idEstado' => 17,
            ),
            58 => 
            array (
                'id' => 1559,
                'nome' => 'Joaquim Nabuco',
                'idEstado' => 17,
            ),
            59 => 
            array (
                'id' => 1560,
                'nome' => 'Jucati',
                'idEstado' => 17,
            ),
            60 => 
            array (
                'id' => 1561,
                'nome' => 'Jupi',
                'idEstado' => 17,
            ),
            61 => 
            array (
                'id' => 1562,
                'nome' => 'Jurema',
                'idEstado' => 17,
            ),
            62 => 
            array (
                'id' => 1563,
                'nome' => 'Lagoa do Carro',
                'idEstado' => 17,
            ),
            63 => 
            array (
                'id' => 1564,
                'nome' => 'Lagoa de Itaenga',
                'idEstado' => 17,
            ),
            64 => 
            array (
                'id' => 1565,
                'nome' => 'Lagoa do Ouro',
                'idEstado' => 17,
            ),
            65 => 
            array (
                'id' => 1566,
                'nome' => 'Lagoa dos Gatos',
                'idEstado' => 17,
            ),
            66 => 
            array (
                'id' => 1567,
                'nome' => 'Lagoa Grande',
                'idEstado' => 17,
            ),
            67 => 
            array (
                'id' => 1568,
                'nome' => 'Lajedo',
                'idEstado' => 17,
            ),
            68 => 
            array (
                'id' => 1569,
                'nome' => 'Limoeiro',
                'idEstado' => 17,
            ),
            69 => 
            array (
                'id' => 1570,
                'nome' => 'Macaparana',
                'idEstado' => 17,
            ),
            70 => 
            array (
                'id' => 1571,
                'nome' => 'Machados',
                'idEstado' => 17,
            ),
            71 => 
            array (
                'id' => 1572,
                'nome' => 'Manari',
                'idEstado' => 17,
            ),
            72 => 
            array (
                'id' => 1573,
                'nome' => 'Maraial',
                'idEstado' => 17,
            ),
            73 => 
            array (
                'id' => 1574,
                'nome' => 'Mirandiba',
                'idEstado' => 17,
            ),
            74 => 
            array (
                'id' => 1575,
                'nome' => 'Moreno',
                'idEstado' => 17,
            ),
            75 => 
            array (
                'id' => 1576,
                'nome' => 'Nazaré da Mata',
                'idEstado' => 17,
            ),
            76 => 
            array (
                'id' => 1577,
                'nome' => 'Olinda',
                'idEstado' => 17,
            ),
            77 => 
            array (
                'id' => 1578,
                'nome' => 'Orobó',
                'idEstado' => 17,
            ),
            78 => 
            array (
                'id' => 1579,
                'nome' => 'Orocó',
                'idEstado' => 17,
            ),
            79 => 
            array (
                'id' => 1580,
                'nome' => 'Ouricuri',
                'idEstado' => 17,
            ),
            80 => 
            array (
                'id' => 1581,
                'nome' => 'Palmares',
                'idEstado' => 17,
            ),
            81 => 
            array (
                'id' => 1582,
                'nome' => 'Palmeirina',
                'idEstado' => 17,
            ),
            82 => 
            array (
                'id' => 1583,
                'nome' => 'Panelas',
                'idEstado' => 17,
            ),
            83 => 
            array (
                'id' => 1584,
                'nome' => 'Paranatama',
                'idEstado' => 17,
            ),
            84 => 
            array (
                'id' => 1585,
                'nome' => 'Parnamirim',
                'idEstado' => 17,
            ),
            85 => 
            array (
                'id' => 1586,
                'nome' => 'Passira',
                'idEstado' => 17,
            ),
            86 => 
            array (
                'id' => 1587,
                'nome' => 'Paudalho',
                'idEstado' => 17,
            ),
            87 => 
            array (
                'id' => 1588,
                'nome' => 'Paulista',
                'idEstado' => 17,
            ),
            88 => 
            array (
                'id' => 1589,
                'nome' => 'Pedra',
                'idEstado' => 17,
            ),
            89 => 
            array (
                'id' => 1590,
                'nome' => 'Pesqueira',
                'idEstado' => 17,
            ),
            90 => 
            array (
                'id' => 1591,
                'nome' => 'Petrolândia',
                'idEstado' => 17,
            ),
            91 => 
            array (
                'id' => 1592,
                'nome' => 'Petrolina',
                'idEstado' => 17,
            ),
            92 => 
            array (
                'id' => 1593,
                'nome' => 'Poção',
                'idEstado' => 17,
            ),
            93 => 
            array (
                'id' => 1594,
                'nome' => 'Pombos',
                'idEstado' => 17,
            ),
            94 => 
            array (
                'id' => 1595,
                'nome' => 'Primavera',
                'idEstado' => 17,
            ),
            95 => 
            array (
                'id' => 1596,
                'nome' => 'Quipapá',
                'idEstado' => 17,
            ),
            96 => 
            array (
                'id' => 1597,
                'nome' => 'Quixaba',
                'idEstado' => 17,
            ),
            97 => 
            array (
                'id' => 1598,
                'nome' => 'Recife',
                'idEstado' => 17,
            ),
            98 => 
            array (
                'id' => 1599,
                'nome' => 'Riacho das Almas',
                'idEstado' => 17,
            ),
            99 => 
            array (
                'id' => 1600,
                'nome' => 'Ribeirão',
                'idEstado' => 17,
            ),
            100 => 
            array (
                'id' => 1601,
                'nome' => 'Rio Formoso',
                'idEstado' => 17,
            ),
            101 => 
            array (
                'id' => 1602,
                'nome' => 'Sairé',
                'idEstado' => 17,
            ),
            102 => 
            array (
                'id' => 1603,
                'nome' => 'Salgadinho',
                'idEstado' => 17,
            ),
            103 => 
            array (
                'id' => 1604,
                'nome' => 'Salgueiro',
                'idEstado' => 17,
            ),
            104 => 
            array (
                'id' => 1605,
                'nome' => 'Saloá',
                'idEstado' => 17,
            ),
            105 => 
            array (
                'id' => 1606,
                'nome' => 'Sanharó',
                'idEstado' => 17,
            ),
            106 => 
            array (
                'id' => 1607,
                'nome' => 'Santa Cruz',
                'idEstado' => 17,
            ),
            107 => 
            array (
                'id' => 1608,
                'nome' => 'Santa Cruz da Baixa Verde',
                'idEstado' => 17,
            ),
            108 => 
            array (
                'id' => 1609,
                'nome' => 'Santa Cruz do Capibaribe',
                'idEstado' => 17,
            ),
            109 => 
            array (
                'id' => 1610,
                'nome' => 'Santa Filomena',
                'idEstado' => 17,
            ),
            110 => 
            array (
                'id' => 1611,
                'nome' => 'Santa Maria da Boa Vista',
                'idEstado' => 17,
            ),
            111 => 
            array (
                'id' => 1612,
                'nome' => 'Santa Maria do Cambucá',
                'idEstado' => 17,
            ),
            112 => 
            array (
                'id' => 1613,
                'nome' => 'Santa Terezinha',
                'idEstado' => 17,
            ),
            113 => 
            array (
                'id' => 1614,
                'nome' => 'São Benedito do Sul',
                'idEstado' => 17,
            ),
            114 => 
            array (
                'id' => 1615,
                'nome' => 'São Bento do Una',
                'idEstado' => 17,
            ),
            115 => 
            array (
                'id' => 1616,
                'nome' => 'São Caitano',
                'idEstado' => 17,
            ),
            116 => 
            array (
                'id' => 1617,
                'nome' => 'São João',
                'idEstado' => 17,
            ),
            117 => 
            array (
                'id' => 1618,
                'nome' => 'São Joaquim do Monte',
                'idEstado' => 17,
            ),
            118 => 
            array (
                'id' => 1619,
                'nome' => 'São José da Coroa Grande',
                'idEstado' => 17,
            ),
            119 => 
            array (
                'id' => 1620,
                'nome' => 'São José do Belmonte',
                'idEstado' => 17,
            ),
            120 => 
            array (
                'id' => 1621,
                'nome' => 'São José do Egito',
                'idEstado' => 17,
            ),
            121 => 
            array (
                'id' => 1622,
                'nome' => 'São Lourenço da Mata',
                'idEstado' => 17,
            ),
            122 => 
            array (
                'id' => 1623,
                'nome' => 'São Vicente Ferrer',
                'idEstado' => 17,
            ),
            123 => 
            array (
                'id' => 1624,
                'nome' => 'Serra Talhada',
                'idEstado' => 17,
            ),
            124 => 
            array (
                'id' => 1625,
                'nome' => 'Serrita',
                'idEstado' => 17,
            ),
            125 => 
            array (
                'id' => 1626,
                'nome' => 'Sertânia',
                'idEstado' => 17,
            ),
            126 => 
            array (
                'id' => 1627,
                'nome' => 'Sirinhaém',
                'idEstado' => 17,
            ),
            127 => 
            array (
                'id' => 1628,
                'nome' => 'Moreilândia',
                'idEstado' => 17,
            ),
            128 => 
            array (
                'id' => 1629,
                'nome' => 'Solidão',
                'idEstado' => 17,
            ),
            129 => 
            array (
                'id' => 1630,
                'nome' => 'Surubim',
                'idEstado' => 17,
            ),
            130 => 
            array (
                'id' => 1631,
                'nome' => 'Tabira',
                'idEstado' => 17,
            ),
            131 => 
            array (
                'id' => 1632,
                'nome' => 'Tacaimbó',
                'idEstado' => 17,
            ),
            132 => 
            array (
                'id' => 1633,
                'nome' => 'Tacaratu',
                'idEstado' => 17,
            ),
            133 => 
            array (
                'id' => 1634,
                'nome' => 'Tamandaré',
                'idEstado' => 17,
            ),
            134 => 
            array (
                'id' => 1635,
                'nome' => 'Taquaritinga do Norte',
                'idEstado' => 17,
            ),
            135 => 
            array (
                'id' => 1636,
                'nome' => 'Terezinha',
                'idEstado' => 17,
            ),
            136 => 
            array (
                'id' => 1637,
                'nome' => 'Terra Nova',
                'idEstado' => 17,
            ),
            137 => 
            array (
                'id' => 1638,
                'nome' => 'Timbaúba',
                'idEstado' => 17,
            ),
            138 => 
            array (
                'id' => 1639,
                'nome' => 'Toritama',
                'idEstado' => 17,
            ),
            139 => 
            array (
                'id' => 1640,
                'nome' => 'Tracunhaém',
                'idEstado' => 17,
            ),
            140 => 
            array (
                'id' => 1641,
                'nome' => 'Trindade',
                'idEstado' => 17,
            ),
            141 => 
            array (
                'id' => 1642,
                'nome' => 'Triunfo',
                'idEstado' => 17,
            ),
            142 => 
            array (
                'id' => 1643,
                'nome' => 'Tupanatinga',
                'idEstado' => 17,
            ),
            143 => 
            array (
                'id' => 1644,
                'nome' => 'Tuparetama',
                'idEstado' => 17,
            ),
            144 => 
            array (
                'id' => 1645,
                'nome' => 'Venturosa',
                'idEstado' => 17,
            ),
            145 => 
            array (
                'id' => 1646,
                'nome' => 'Verdejante',
                'idEstado' => 17,
            ),
            146 => 
            array (
                'id' => 1647,
                'nome' => 'Vertente do Lério',
                'idEstado' => 17,
            ),
            147 => 
            array (
                'id' => 1648,
                'nome' => 'Vertentes',
                'idEstado' => 17,
            ),
            148 => 
            array (
                'id' => 1649,
                'nome' => 'Vicência',
                'idEstado' => 17,
            ),
            149 => 
            array (
                'id' => 1650,
                'nome' => 'Vitória de Santo Antão',
                'idEstado' => 17,
            ),
            150 => 
            array (
                'id' => 1651,
                'nome' => 'Xexéu',
                'idEstado' => 17,
            ),
            151 => 
            array (
                'id' => 1652,
                'nome' => 'Água Branca',
                'idEstado' => 2,
            ),
            152 => 
            array (
                'id' => 1653,
                'nome' => 'Anadia',
                'idEstado' => 2,
            ),
            153 => 
            array (
                'id' => 1654,
                'nome' => 'Arapiraca',
                'idEstado' => 2,
            ),
            154 => 
            array (
                'id' => 1655,
                'nome' => 'Atalaia',
                'idEstado' => 2,
            ),
            155 => 
            array (
                'id' => 1656,
                'nome' => 'Barra de Santo Antônio',
                'idEstado' => 2,
            ),
            156 => 
            array (
                'id' => 1657,
                'nome' => 'Barra de São Miguel',
                'idEstado' => 2,
            ),
            157 => 
            array (
                'id' => 1658,
                'nome' => 'Batalha',
                'idEstado' => 2,
            ),
            158 => 
            array (
                'id' => 1659,
                'nome' => 'Belém',
                'idEstado' => 2,
            ),
            159 => 
            array (
                'id' => 1660,
                'nome' => 'Belo Monte',
                'idEstado' => 2,
            ),
            160 => 
            array (
                'id' => 1661,
                'nome' => 'Boca da Mata',
                'idEstado' => 2,
            ),
            161 => 
            array (
                'id' => 1662,
                'nome' => 'Branquinha',
                'idEstado' => 2,
            ),
            162 => 
            array (
                'id' => 1663,
                'nome' => 'Cacimbinhas',
                'idEstado' => 2,
            ),
            163 => 
            array (
                'id' => 1664,
                'nome' => 'Cajueiro',
                'idEstado' => 2,
            ),
            164 => 
            array (
                'id' => 1665,
                'nome' => 'Campestre',
                'idEstado' => 2,
            ),
            165 => 
            array (
                'id' => 1666,
                'nome' => 'Campo Alegre',
                'idEstado' => 2,
            ),
            166 => 
            array (
                'id' => 1667,
                'nome' => 'Campo Grande',
                'idEstado' => 2,
            ),
            167 => 
            array (
                'id' => 1668,
                'nome' => 'Canapi',
                'idEstado' => 2,
            ),
            168 => 
            array (
                'id' => 1669,
                'nome' => 'Capela',
                'idEstado' => 2,
            ),
            169 => 
            array (
                'id' => 1670,
                'nome' => 'Carneiros',
                'idEstado' => 2,
            ),
            170 => 
            array (
                'id' => 1671,
                'nome' => 'Chã Preta',
                'idEstado' => 2,
            ),
            171 => 
            array (
                'id' => 1672,
                'nome' => 'Coité do Nóia',
                'idEstado' => 2,
            ),
            172 => 
            array (
                'id' => 1673,
                'nome' => 'Colônia Leopoldina',
                'idEstado' => 2,
            ),
            173 => 
            array (
                'id' => 1674,
                'nome' => 'Coqueiro Seco',
                'idEstado' => 2,
            ),
            174 => 
            array (
                'id' => 1675,
                'nome' => 'Coruripe',
                'idEstado' => 2,
            ),
            175 => 
            array (
                'id' => 1676,
                'nome' => 'Craíbas',
                'idEstado' => 2,
            ),
            176 => 
            array (
                'id' => 1677,
                'nome' => 'Delmiro Gouveia',
                'idEstado' => 2,
            ),
            177 => 
            array (
                'id' => 1678,
                'nome' => 'Dois Riachos',
                'idEstado' => 2,
            ),
            178 => 
            array (
                'id' => 1679,
                'nome' => 'Estrela de Alagoas',
                'idEstado' => 2,
            ),
            179 => 
            array (
                'id' => 1680,
                'nome' => 'Feira Grande',
                'idEstado' => 2,
            ),
            180 => 
            array (
                'id' => 1681,
                'nome' => 'Feliz Deserto',
                'idEstado' => 2,
            ),
            181 => 
            array (
                'id' => 1682,
                'nome' => 'Flexeiras',
                'idEstado' => 2,
            ),
            182 => 
            array (
                'id' => 1683,
                'nome' => 'Girau do Ponciano',
                'idEstado' => 2,
            ),
            183 => 
            array (
                'id' => 1684,
                'nome' => 'Ibateguara',
                'idEstado' => 2,
            ),
            184 => 
            array (
                'id' => 1685,
                'nome' => 'Igaci',
                'idEstado' => 2,
            ),
            185 => 
            array (
                'id' => 1686,
                'nome' => 'Igreja Nova',
                'idEstado' => 2,
            ),
            186 => 
            array (
                'id' => 1687,
                'nome' => 'Inhapi',
                'idEstado' => 2,
            ),
            187 => 
            array (
                'id' => 1688,
                'nome' => 'Jacaré dos Homens',
                'idEstado' => 2,
            ),
            188 => 
            array (
                'id' => 1689,
                'nome' => 'Jacuípe',
                'idEstado' => 2,
            ),
            189 => 
            array (
                'id' => 1690,
                'nome' => 'Japaratinga',
                'idEstado' => 2,
            ),
            190 => 
            array (
                'id' => 1691,
                'nome' => 'Jaramataia',
                'idEstado' => 2,
            ),
            191 => 
            array (
                'id' => 1692,
                'nome' => 'Jequiá da Praia',
                'idEstado' => 2,
            ),
            192 => 
            array (
                'id' => 1693,
                'nome' => 'Joaquim Gomes',
                'idEstado' => 2,
            ),
            193 => 
            array (
                'id' => 1694,
                'nome' => 'Jundiá',
                'idEstado' => 2,
            ),
            194 => 
            array (
                'id' => 1695,
                'nome' => 'Junqueiro',
                'idEstado' => 2,
            ),
            195 => 
            array (
                'id' => 1696,
                'nome' => 'Lagoa da Canoa',
                'idEstado' => 2,
            ),
            196 => 
            array (
                'id' => 1697,
                'nome' => 'Limoeiro de Anadia',
                'idEstado' => 2,
            ),
            197 => 
            array (
                'id' => 1698,
                'nome' => 'Maceió',
                'idEstado' => 2,
            ),
            198 => 
            array (
                'id' => 1699,
                'nome' => 'Major Isidoro',
                'idEstado' => 2,
            ),
            199 => 
            array (
                'id' => 1700,
                'nome' => 'Maragogi',
                'idEstado' => 2,
            ),
            200 => 
            array (
                'id' => 1701,
                'nome' => 'Maravilha',
                'idEstado' => 2,
            ),
            201 => 
            array (
                'id' => 1702,
                'nome' => 'Marechal Deodoro',
                'idEstado' => 2,
            ),
            202 => 
            array (
                'id' => 1703,
                'nome' => 'Maribondo',
                'idEstado' => 2,
            ),
            203 => 
            array (
                'id' => 1704,
                'nome' => 'Mar Vermelho',
                'idEstado' => 2,
            ),
            204 => 
            array (
                'id' => 1705,
                'nome' => 'Mata Grande',
                'idEstado' => 2,
            ),
            205 => 
            array (
                'id' => 1706,
                'nome' => 'Matriz de Camaragibe',
                'idEstado' => 2,
            ),
            206 => 
            array (
                'id' => 1707,
                'nome' => 'Messias',
                'idEstado' => 2,
            ),
            207 => 
            array (
                'id' => 1708,
                'nome' => 'Minador do Negrão',
                'idEstado' => 2,
            ),
            208 => 
            array (
                'id' => 1709,
                'nome' => 'Monteirópolis',
                'idEstado' => 2,
            ),
            209 => 
            array (
                'id' => 1710,
                'nome' => 'Murici',
                'idEstado' => 2,
            ),
            210 => 
            array (
                'id' => 1711,
                'nome' => 'Novo Lino',
                'idEstado' => 2,
            ),
            211 => 
            array (
                'id' => 1712,
                'nome' => 'Olho D\'Água das Flores',
                'idEstado' => 2,
            ),
            212 => 
            array (
                'id' => 1713,
                'nome' => 'Olho D\'Água do Casado',
                'idEstado' => 2,
            ),
            213 => 
            array (
                'id' => 1714,
                'nome' => 'Olho D\'Água Grande',
                'idEstado' => 2,
            ),
            214 => 
            array (
                'id' => 1715,
                'nome' => 'Olivença',
                'idEstado' => 2,
            ),
            215 => 
            array (
                'id' => 1716,
                'nome' => 'Ouro Branco',
                'idEstado' => 2,
            ),
            216 => 
            array (
                'id' => 1717,
                'nome' => 'Palestina',
                'idEstado' => 2,
            ),
            217 => 
            array (
                'id' => 1718,
                'nome' => 'Palmeira dos Índios',
                'idEstado' => 2,
            ),
            218 => 
            array (
                'id' => 1719,
                'nome' => 'Pão de Açúcar',
                'idEstado' => 2,
            ),
            219 => 
            array (
                'id' => 1720,
                'nome' => 'Pariconha',
                'idEstado' => 2,
            ),
            220 => 
            array (
                'id' => 1721,
                'nome' => 'Paripueira',
                'idEstado' => 2,
            ),
            221 => 
            array (
                'id' => 1722,
                'nome' => 'Passo de Camaragibe',
                'idEstado' => 2,
            ),
            222 => 
            array (
                'id' => 1723,
                'nome' => 'Paulo Jacinto',
                'idEstado' => 2,
            ),
            223 => 
            array (
                'id' => 1724,
                'nome' => 'Penedo',
                'idEstado' => 2,
            ),
            224 => 
            array (
                'id' => 1725,
                'nome' => 'Piaçabuçu',
                'idEstado' => 2,
            ),
            225 => 
            array (
                'id' => 1726,
                'nome' => 'Pilar',
                'idEstado' => 2,
            ),
            226 => 
            array (
                'id' => 1727,
                'nome' => 'Pindoba',
                'idEstado' => 2,
            ),
            227 => 
            array (
                'id' => 1728,
                'nome' => 'Piranhas',
                'idEstado' => 2,
            ),
            228 => 
            array (
                'id' => 1729,
                'nome' => 'Poço das Trincheiras',
                'idEstado' => 2,
            ),
            229 => 
            array (
                'id' => 1730,
                'nome' => 'Porto Calvo',
                'idEstado' => 2,
            ),
            230 => 
            array (
                'id' => 1731,
                'nome' => 'Porto de Pedras',
                'idEstado' => 2,
            ),
            231 => 
            array (
                'id' => 1732,
                'nome' => 'Porto Real do Colégio',
                'idEstado' => 2,
            ),
            232 => 
            array (
                'id' => 1733,
                'nome' => 'Quebrangulo',
                'idEstado' => 2,
            ),
            233 => 
            array (
                'id' => 1734,
                'nome' => 'Rio Largo',
                'idEstado' => 2,
            ),
            234 => 
            array (
                'id' => 1735,
                'nome' => 'Roteiro',
                'idEstado' => 2,
            ),
            235 => 
            array (
                'id' => 1736,
                'nome' => 'Santa Luzia do Norte',
                'idEstado' => 2,
            ),
            236 => 
            array (
                'id' => 1737,
                'nome' => 'Santana do Ipanema',
                'idEstado' => 2,
            ),
            237 => 
            array (
                'id' => 1738,
                'nome' => 'Santana do Mundaú',
                'idEstado' => 2,
            ),
            238 => 
            array (
                'id' => 1739,
                'nome' => 'São Brás',
                'idEstado' => 2,
            ),
            239 => 
            array (
                'id' => 1740,
                'nome' => 'São José da Laje',
                'idEstado' => 2,
            ),
            240 => 
            array (
                'id' => 1741,
                'nome' => 'São José da Tapera',
                'idEstado' => 2,
            ),
            241 => 
            array (
                'id' => 1742,
                'nome' => 'São Luís do Quitunde',
                'idEstado' => 2,
            ),
            242 => 
            array (
                'id' => 1743,
                'nome' => 'São Miguel dos Campos',
                'idEstado' => 2,
            ),
            243 => 
            array (
                'id' => 1744,
                'nome' => 'São Miguel dos Milagres',
                'idEstado' => 2,
            ),
            244 => 
            array (
                'id' => 1745,
                'nome' => 'São Sebastião',
                'idEstado' => 2,
            ),
            245 => 
            array (
                'id' => 1746,
                'nome' => 'Satuba',
                'idEstado' => 2,
            ),
            246 => 
            array (
                'id' => 1747,
                'nome' => 'Senador Rui Palmeira',
                'idEstado' => 2,
            ),
            247 => 
            array (
                'id' => 1748,
                'nome' => 'Tanque D\'Arca',
                'idEstado' => 2,
            ),
            248 => 
            array (
                'id' => 1749,
                'nome' => 'Taquarana',
                'idEstado' => 2,
            ),
            249 => 
            array (
                'id' => 1750,
                'nome' => 'Teotônio Vilela',
                'idEstado' => 2,
            ),
            250 => 
            array (
                'id' => 1751,
                'nome' => 'Traipu',
                'idEstado' => 2,
            ),
            251 => 
            array (
                'id' => 1752,
                'nome' => 'União dos Palmares',
                'idEstado' => 2,
            ),
            252 => 
            array (
                'id' => 1753,
                'nome' => 'Viçosa',
                'idEstado' => 2,
            ),
            253 => 
            array (
                'id' => 1754,
                'nome' => 'Amparo de São Francisco',
                'idEstado' => 26,
            ),
            254 => 
            array (
                'id' => 1755,
                'nome' => 'Aquidabã',
                'idEstado' => 26,
            ),
            255 => 
            array (
                'id' => 1756,
                'nome' => 'Aracaju',
                'idEstado' => 26,
            ),
            256 => 
            array (
                'id' => 1757,
                'nome' => 'Arauá',
                'idEstado' => 26,
            ),
            257 => 
            array (
                'id' => 1758,
                'nome' => 'Areia Branca',
                'idEstado' => 26,
            ),
            258 => 
            array (
                'id' => 1759,
                'nome' => 'Barra dos Coqueiros',
                'idEstado' => 26,
            ),
            259 => 
            array (
                'id' => 1760,
                'nome' => 'Boquim',
                'idEstado' => 26,
            ),
            260 => 
            array (
                'id' => 1761,
                'nome' => 'Brejo Grande',
                'idEstado' => 26,
            ),
            261 => 
            array (
                'id' => 1762,
                'nome' => 'Campo do Brito',
                'idEstado' => 26,
            ),
            262 => 
            array (
                'id' => 1763,
                'nome' => 'Canhoba',
                'idEstado' => 26,
            ),
            263 => 
            array (
                'id' => 1764,
                'nome' => 'Canindé de São Francisco',
                'idEstado' => 26,
            ),
            264 => 
            array (
                'id' => 1765,
                'nome' => 'Capela',
                'idEstado' => 26,
            ),
            265 => 
            array (
                'id' => 1766,
                'nome' => 'Carira',
                'idEstado' => 26,
            ),
            266 => 
            array (
                'id' => 1767,
                'nome' => 'Carmópolis',
                'idEstado' => 26,
            ),
            267 => 
            array (
                'id' => 1768,
                'nome' => 'Cedro de São João',
                'idEstado' => 26,
            ),
            268 => 
            array (
                'id' => 1769,
                'nome' => 'Cristinápolis',
                'idEstado' => 26,
            ),
            269 => 
            array (
                'id' => 1770,
                'nome' => 'Cumbe',
                'idEstado' => 26,
            ),
            270 => 
            array (
                'id' => 1771,
                'nome' => 'Divina Pastora',
                'idEstado' => 26,
            ),
            271 => 
            array (
                'id' => 1772,
                'nome' => 'Estância',
                'idEstado' => 26,
            ),
            272 => 
            array (
                'id' => 1773,
                'nome' => 'Feira Nova',
                'idEstado' => 26,
            ),
            273 => 
            array (
                'id' => 1774,
                'nome' => 'Frei Paulo',
                'idEstado' => 26,
            ),
            274 => 
            array (
                'id' => 1775,
                'nome' => 'Gararu',
                'idEstado' => 26,
            ),
            275 => 
            array (
                'id' => 1776,
                'nome' => 'General Maynard',
                'idEstado' => 26,
            ),
            276 => 
            array (
                'id' => 1777,
                'nome' => 'Gracho Cardoso',
                'idEstado' => 26,
            ),
            277 => 
            array (
                'id' => 1778,
                'nome' => 'Ilha das Flores',
                'idEstado' => 26,
            ),
            278 => 
            array (
                'id' => 1779,
                'nome' => 'Indiaroba',
                'idEstado' => 26,
            ),
            279 => 
            array (
                'id' => 1780,
                'nome' => 'Itabaiana',
                'idEstado' => 26,
            ),
            280 => 
            array (
                'id' => 1781,
                'nome' => 'Itabaianinha',
                'idEstado' => 26,
            ),
            281 => 
            array (
                'id' => 1782,
                'nome' => 'Itabi',
                'idEstado' => 26,
            ),
            282 => 
            array (
                'id' => 1783,
                'nome' => 'Itaporanga D\'Ajuda',
                'idEstado' => 26,
            ),
            283 => 
            array (
                'id' => 1784,
                'nome' => 'Japaratuba',
                'idEstado' => 26,
            ),
            284 => 
            array (
                'id' => 1785,
                'nome' => 'Japoatã',
                'idEstado' => 26,
            ),
            285 => 
            array (
                'id' => 1786,
                'nome' => 'Lagarto',
                'idEstado' => 26,
            ),
            286 => 
            array (
                'id' => 1787,
                'nome' => 'Laranjeiras',
                'idEstado' => 26,
            ),
            287 => 
            array (
                'id' => 1788,
                'nome' => 'Macambira',
                'idEstado' => 26,
            ),
            288 => 
            array (
                'id' => 1789,
                'nome' => 'Malhada dos Bois',
                'idEstado' => 26,
            ),
            289 => 
            array (
                'id' => 1790,
                'nome' => 'Malhador',
                'idEstado' => 26,
            ),
            290 => 
            array (
                'id' => 1791,
                'nome' => 'Maruim',
                'idEstado' => 26,
            ),
            291 => 
            array (
                'id' => 1792,
                'nome' => 'Moita Bonita',
                'idEstado' => 26,
            ),
            292 => 
            array (
                'id' => 1793,
                'nome' => 'Monte Alegre de Sergipe',
                'idEstado' => 26,
            ),
            293 => 
            array (
                'id' => 1794,
                'nome' => 'Muribeca',
                'idEstado' => 26,
            ),
            294 => 
            array (
                'id' => 1795,
                'nome' => 'Neópolis',
                'idEstado' => 26,
            ),
            295 => 
            array (
                'id' => 1796,
                'nome' => 'Nossa Senhora Aparecida',
                'idEstado' => 26,
            ),
            296 => 
            array (
                'id' => 1797,
                'nome' => 'Nossa Senhora da Glória',
                'idEstado' => 26,
            ),
            297 => 
            array (
                'id' => 1798,
                'nome' => 'Nossa Senhora das Dores',
                'idEstado' => 26,
            ),
            298 => 
            array (
                'id' => 1799,
                'nome' => 'Nossa Senhora de Lourdes',
                'idEstado' => 26,
            ),
            299 => 
            array (
                'id' => 1800,
                'nome' => 'Nossa Senhora do Socorro',
                'idEstado' => 26,
            ),
            300 => 
            array (
                'id' => 1801,
                'nome' => 'Pacatuba',
                'idEstado' => 26,
            ),
            301 => 
            array (
                'id' => 1802,
                'nome' => 'Pedra Mole',
                'idEstado' => 26,
            ),
            302 => 
            array (
                'id' => 1803,
                'nome' => 'Pedrinhas',
                'idEstado' => 26,
            ),
            303 => 
            array (
                'id' => 1804,
                'nome' => 'Pinhão',
                'idEstado' => 26,
            ),
            304 => 
            array (
                'id' => 1805,
                'nome' => 'Pirambu',
                'idEstado' => 26,
            ),
            305 => 
            array (
                'id' => 1806,
                'nome' => 'Poço Redondo',
                'idEstado' => 26,
            ),
            306 => 
            array (
                'id' => 1807,
                'nome' => 'Poço Verde',
                'idEstado' => 26,
            ),
            307 => 
            array (
                'id' => 1808,
                'nome' => 'Porto da Folha',
                'idEstado' => 26,
            ),
            308 => 
            array (
                'id' => 1809,
                'nome' => 'Propriá',
                'idEstado' => 26,
            ),
            309 => 
            array (
                'id' => 1810,
                'nome' => 'Riachão do Dantas',
                'idEstado' => 26,
            ),
            310 => 
            array (
                'id' => 1811,
                'nome' => 'Riachuelo',
                'idEstado' => 26,
            ),
            311 => 
            array (
                'id' => 1812,
                'nome' => 'Ribeirópolis',
                'idEstado' => 26,
            ),
            312 => 
            array (
                'id' => 1813,
                'nome' => 'Rosário do Catete',
                'idEstado' => 26,
            ),
            313 => 
            array (
                'id' => 1814,
                'nome' => 'Salgado',
                'idEstado' => 26,
            ),
            314 => 
            array (
                'id' => 1815,
                'nome' => 'Santa Luzia do Itanhy',
                'idEstado' => 26,
            ),
            315 => 
            array (
                'id' => 1816,
                'nome' => 'Santana do São Francisco',
                'idEstado' => 26,
            ),
            316 => 
            array (
                'id' => 1817,
                'nome' => 'Santa Rosa de Lima',
                'idEstado' => 26,
            ),
            317 => 
            array (
                'id' => 1818,
                'nome' => 'Santo Amaro das Brotas',
                'idEstado' => 26,
            ),
            318 => 
            array (
                'id' => 1819,
                'nome' => 'São Cristóvão',
                'idEstado' => 26,
            ),
            319 => 
            array (
                'id' => 1820,
                'nome' => 'São Domingos',
                'idEstado' => 26,
            ),
            320 => 
            array (
                'id' => 1821,
                'nome' => 'São Francisco',
                'idEstado' => 26,
            ),
            321 => 
            array (
                'id' => 1822,
                'nome' => 'São Miguel do Aleixo',
                'idEstado' => 26,
            ),
            322 => 
            array (
                'id' => 1823,
                'nome' => 'Simão Dias',
                'idEstado' => 26,
            ),
            323 => 
            array (
                'id' => 1824,
                'nome' => 'Siriri',
                'idEstado' => 26,
            ),
            324 => 
            array (
                'id' => 1825,
                'nome' => 'Telha',
                'idEstado' => 26,
            ),
            325 => 
            array (
                'id' => 1826,
                'nome' => 'Tobias Barreto',
                'idEstado' => 26,
            ),
            326 => 
            array (
                'id' => 1827,
                'nome' => 'Tomar do Geru',
                'idEstado' => 26,
            ),
            327 => 
            array (
                'id' => 1828,
                'nome' => 'Umbaúba',
                'idEstado' => 26,
            ),
            328 => 
            array (
                'id' => 1829,
                'nome' => 'Abaíra',
                'idEstado' => 5,
            ),
            329 => 
            array (
                'id' => 1830,
                'nome' => 'Abaré',
                'idEstado' => 5,
            ),
            330 => 
            array (
                'id' => 1831,
                'nome' => 'Acajutiba',
                'idEstado' => 5,
            ),
            331 => 
            array (
                'id' => 1832,
                'nome' => 'Adustina',
                'idEstado' => 5,
            ),
            332 => 
            array (
                'id' => 1833,
                'nome' => 'Água Fria',
                'idEstado' => 5,
            ),
            333 => 
            array (
                'id' => 1834,
                'nome' => 'Érico Cardoso',
                'idEstado' => 5,
            ),
            334 => 
            array (
                'id' => 1835,
                'nome' => 'Aiquara',
                'idEstado' => 5,
            ),
            335 => 
            array (
                'id' => 1836,
                'nome' => 'Alagoinhas',
                'idEstado' => 5,
            ),
            336 => 
            array (
                'id' => 1837,
                'nome' => 'Alcobaça',
                'idEstado' => 5,
            ),
            337 => 
            array (
                'id' => 1838,
                'nome' => 'Almadina',
                'idEstado' => 5,
            ),
            338 => 
            array (
                'id' => 1839,
                'nome' => 'Amargosa',
                'idEstado' => 5,
            ),
            339 => 
            array (
                'id' => 1840,
                'nome' => 'Amélia Rodrigues',
                'idEstado' => 5,
            ),
            340 => 
            array (
                'id' => 1841,
                'nome' => 'América Dourada',
                'idEstado' => 5,
            ),
            341 => 
            array (
                'id' => 1842,
                'nome' => 'Anagé',
                'idEstado' => 5,
            ),
            342 => 
            array (
                'id' => 1843,
                'nome' => 'Andaraí',
                'idEstado' => 5,
            ),
            343 => 
            array (
                'id' => 1844,
                'nome' => 'Andorinha',
                'idEstado' => 5,
            ),
            344 => 
            array (
                'id' => 1845,
                'nome' => 'Angical',
                'idEstado' => 5,
            ),
            345 => 
            array (
                'id' => 1846,
                'nome' => 'Anguera',
                'idEstado' => 5,
            ),
            346 => 
            array (
                'id' => 1847,
                'nome' => 'Antas',
                'idEstado' => 5,
            ),
            347 => 
            array (
                'id' => 1848,
                'nome' => 'Antônio Cardoso',
                'idEstado' => 5,
            ),
            348 => 
            array (
                'id' => 1849,
                'nome' => 'Antônio Gonçalves',
                'idEstado' => 5,
            ),
            349 => 
            array (
                'id' => 1850,
                'nome' => 'Aporá',
                'idEstado' => 5,
            ),
            350 => 
            array (
                'id' => 1851,
                'nome' => 'Apuarema',
                'idEstado' => 5,
            ),
            351 => 
            array (
                'id' => 1852,
                'nome' => 'Aracatu',
                'idEstado' => 5,
            ),
            352 => 
            array (
                'id' => 1853,
                'nome' => 'Araças',
                'idEstado' => 5,
            ),
            353 => 
            array (
                'id' => 1854,
                'nome' => 'Araci',
                'idEstado' => 5,
            ),
            354 => 
            array (
                'id' => 1855,
                'nome' => 'Aramari',
                'idEstado' => 5,
            ),
            355 => 
            array (
                'id' => 1856,
                'nome' => 'Arataca',
                'idEstado' => 5,
            ),
            356 => 
            array (
                'id' => 1857,
                'nome' => 'Aratuípe',
                'idEstado' => 5,
            ),
            357 => 
            array (
                'id' => 1858,
                'nome' => 'Aurelino Leal',
                'idEstado' => 5,
            ),
            358 => 
            array (
                'id' => 1859,
                'nome' => 'Baianópolis',
                'idEstado' => 5,
            ),
            359 => 
            array (
                'id' => 1860,
                'nome' => 'Baixa Grande',
                'idEstado' => 5,
            ),
            360 => 
            array (
                'id' => 1861,
                'nome' => 'Banzaê',
                'idEstado' => 5,
            ),
            361 => 
            array (
                'id' => 1862,
                'nome' => 'Barra',
                'idEstado' => 5,
            ),
            362 => 
            array (
                'id' => 1863,
                'nome' => 'Barra da Estiva',
                'idEstado' => 5,
            ),
            363 => 
            array (
                'id' => 1864,
                'nome' => 'Barra do Choça',
                'idEstado' => 5,
            ),
            364 => 
            array (
                'id' => 1865,
                'nome' => 'Barra do Mendes',
                'idEstado' => 5,
            ),
            365 => 
            array (
                'id' => 1866,
                'nome' => 'Barra do Rocha',
                'idEstado' => 5,
            ),
            366 => 
            array (
                'id' => 1867,
                'nome' => 'Barreiras',
                'idEstado' => 5,
            ),
            367 => 
            array (
                'id' => 1868,
                'nome' => 'Barro Alto',
                'idEstado' => 5,
            ),
            368 => 
            array (
                'id' => 1869,
                'nome' => 'Barrocas',
                'idEstado' => 5,
            ),
            369 => 
            array (
                'id' => 1870,
                'nome' => 'Barro Preto',
                'idEstado' => 5,
            ),
            370 => 
            array (
                'id' => 1871,
                'nome' => 'Belmonte',
                'idEstado' => 5,
            ),
            371 => 
            array (
                'id' => 1872,
                'nome' => 'Belo Campo',
                'idEstado' => 5,
            ),
            372 => 
            array (
                'id' => 1873,
                'nome' => 'Biritinga',
                'idEstado' => 5,
            ),
            373 => 
            array (
                'id' => 1874,
                'nome' => 'Boa Nova',
                'idEstado' => 5,
            ),
            374 => 
            array (
                'id' => 1875,
                'nome' => 'Boa Vista do Tupim',
                'idEstado' => 5,
            ),
            375 => 
            array (
                'id' => 1876,
                'nome' => 'Bom Jesus da Lapa',
                'idEstado' => 5,
            ),
            376 => 
            array (
                'id' => 1877,
                'nome' => 'Bom Jesus da Serra',
                'idEstado' => 5,
            ),
            377 => 
            array (
                'id' => 1878,
                'nome' => 'Boninal',
                'idEstado' => 5,
            ),
            378 => 
            array (
                'id' => 1879,
                'nome' => 'Bonito',
                'idEstado' => 5,
            ),
            379 => 
            array (
                'id' => 1880,
                'nome' => 'Boquira',
                'idEstado' => 5,
            ),
            380 => 
            array (
                'id' => 1881,
                'nome' => 'Botuporã',
                'idEstado' => 5,
            ),
            381 => 
            array (
                'id' => 1882,
                'nome' => 'Brejões',
                'idEstado' => 5,
            ),
            382 => 
            array (
                'id' => 1883,
                'nome' => 'Brejolândia',
                'idEstado' => 5,
            ),
            383 => 
            array (
                'id' => 1884,
                'nome' => 'Brotas de Macaúbas',
                'idEstado' => 5,
            ),
            384 => 
            array (
                'id' => 1885,
                'nome' => 'Brumado',
                'idEstado' => 5,
            ),
            385 => 
            array (
                'id' => 1886,
                'nome' => 'Buerarema',
                'idEstado' => 5,
            ),
            386 => 
            array (
                'id' => 1887,
                'nome' => 'Buritirama',
                'idEstado' => 5,
            ),
            387 => 
            array (
                'id' => 1888,
                'nome' => 'Caatiba',
                'idEstado' => 5,
            ),
            388 => 
            array (
                'id' => 1889,
                'nome' => 'Cabaceiras do Paraguaçu',
                'idEstado' => 5,
            ),
            389 => 
            array (
                'id' => 1890,
                'nome' => 'Cachoeira',
                'idEstado' => 5,
            ),
            390 => 
            array (
                'id' => 1891,
                'nome' => 'Caculé',
                'idEstado' => 5,
            ),
            391 => 
            array (
                'id' => 1892,
                'nome' => 'Caém',
                'idEstado' => 5,
            ),
            392 => 
            array (
                'id' => 1893,
                'nome' => 'Caetanos',
                'idEstado' => 5,
            ),
            393 => 
            array (
                'id' => 1894,
                'nome' => 'Caetité',
                'idEstado' => 5,
            ),
            394 => 
            array (
                'id' => 1895,
                'nome' => 'Cafarnaum',
                'idEstado' => 5,
            ),
            395 => 
            array (
                'id' => 1896,
                'nome' => 'Cairu',
                'idEstado' => 5,
            ),
            396 => 
            array (
                'id' => 1897,
                'nome' => 'Caldeirão Grande',
                'idEstado' => 5,
            ),
            397 => 
            array (
                'id' => 1898,
                'nome' => 'Camacan',
                'idEstado' => 5,
            ),
            398 => 
            array (
                'id' => 1899,
                'nome' => 'Camaçari',
                'idEstado' => 5,
            ),
            399 => 
            array (
                'id' => 1900,
                'nome' => 'Camamu',
                'idEstado' => 5,
            ),
            400 => 
            array (
                'id' => 1901,
                'nome' => 'Campo Alegre de Lourdes',
                'idEstado' => 5,
            ),
            401 => 
            array (
                'id' => 1902,
                'nome' => 'Campo Formoso',
                'idEstado' => 5,
            ),
            402 => 
            array (
                'id' => 1903,
                'nome' => 'Canápolis',
                'idEstado' => 5,
            ),
            403 => 
            array (
                'id' => 1904,
                'nome' => 'Canarana',
                'idEstado' => 5,
            ),
            404 => 
            array (
                'id' => 1905,
                'nome' => 'Canavieiras',
                'idEstado' => 5,
            ),
            405 => 
            array (
                'id' => 1906,
                'nome' => 'Candeal',
                'idEstado' => 5,
            ),
            406 => 
            array (
                'id' => 1907,
                'nome' => 'Candeias',
                'idEstado' => 5,
            ),
            407 => 
            array (
                'id' => 1908,
                'nome' => 'Candiba',
                'idEstado' => 5,
            ),
            408 => 
            array (
                'id' => 1909,
                'nome' => 'Cândido Sales',
                'idEstado' => 5,
            ),
            409 => 
            array (
                'id' => 1910,
                'nome' => 'Cansanção',
                'idEstado' => 5,
            ),
            410 => 
            array (
                'id' => 1911,
                'nome' => 'Canudos',
                'idEstado' => 5,
            ),
            411 => 
            array (
                'id' => 1912,
                'nome' => 'Capela do Alto Alegre',
                'idEstado' => 5,
            ),
            412 => 
            array (
                'id' => 1913,
                'nome' => 'Capim Grosso',
                'idEstado' => 5,
            ),
            413 => 
            array (
                'id' => 1914,
                'nome' => 'Caraíbas',
                'idEstado' => 5,
            ),
            414 => 
            array (
                'id' => 1915,
                'nome' => 'Caravelas',
                'idEstado' => 5,
            ),
            415 => 
            array (
                'id' => 1916,
                'nome' => 'Cardeal da Silva',
                'idEstado' => 5,
            ),
            416 => 
            array (
                'id' => 1917,
                'nome' => 'Carinhanha',
                'idEstado' => 5,
            ),
            417 => 
            array (
                'id' => 1918,
                'nome' => 'Casa Nova',
                'idEstado' => 5,
            ),
            418 => 
            array (
                'id' => 1919,
                'nome' => 'Castro Alves',
                'idEstado' => 5,
            ),
            419 => 
            array (
                'id' => 1920,
                'nome' => 'Catolândia',
                'idEstado' => 5,
            ),
            420 => 
            array (
                'id' => 1921,
                'nome' => 'Catu',
                'idEstado' => 5,
            ),
            421 => 
            array (
                'id' => 1922,
                'nome' => 'Caturama',
                'idEstado' => 5,
            ),
            422 => 
            array (
                'id' => 1923,
                'nome' => 'Central',
                'idEstado' => 5,
            ),
            423 => 
            array (
                'id' => 1924,
                'nome' => 'Chorrochó',
                'idEstado' => 5,
            ),
            424 => 
            array (
                'id' => 1925,
                'nome' => 'Cícero Dantas',
                'idEstado' => 5,
            ),
            425 => 
            array (
                'id' => 1926,
                'nome' => 'Cipó',
                'idEstado' => 5,
            ),
            426 => 
            array (
                'id' => 1927,
                'nome' => 'Coaraci',
                'idEstado' => 5,
            ),
            427 => 
            array (
                'id' => 1928,
                'nome' => 'Cocos',
                'idEstado' => 5,
            ),
            428 => 
            array (
                'id' => 1929,
                'nome' => 'Conceição da Feira',
                'idEstado' => 5,
            ),
            429 => 
            array (
                'id' => 1930,
                'nome' => 'Conceição do Almeida',
                'idEstado' => 5,
            ),
            430 => 
            array (
                'id' => 1931,
                'nome' => 'Conceição do Coité',
                'idEstado' => 5,
            ),
            431 => 
            array (
                'id' => 1932,
                'nome' => 'Conceição do Jacuípe',
                'idEstado' => 5,
            ),
            432 => 
            array (
                'id' => 1933,
                'nome' => 'Conde',
                'idEstado' => 5,
            ),
            433 => 
            array (
                'id' => 1934,
                'nome' => 'Condeúba',
                'idEstado' => 5,
            ),
            434 => 
            array (
                'id' => 1935,
                'nome' => 'Contendas do Sincorá',
                'idEstado' => 5,
            ),
            435 => 
            array (
                'id' => 1936,
                'nome' => 'Coração de Maria',
                'idEstado' => 5,
            ),
            436 => 
            array (
                'id' => 1937,
                'nome' => 'Cordeiros',
                'idEstado' => 5,
            ),
            437 => 
            array (
                'id' => 1938,
                'nome' => 'Coribe',
                'idEstado' => 5,
            ),
            438 => 
            array (
                'id' => 1939,
                'nome' => 'Coronel João Sá',
                'idEstado' => 5,
            ),
            439 => 
            array (
                'id' => 1940,
                'nome' => 'Correntina',
                'idEstado' => 5,
            ),
            440 => 
            array (
                'id' => 1941,
                'nome' => 'Cotegipe',
                'idEstado' => 5,
            ),
            441 => 
            array (
                'id' => 1942,
                'nome' => 'Cravolândia',
                'idEstado' => 5,
            ),
            442 => 
            array (
                'id' => 1943,
                'nome' => 'Crisópolis',
                'idEstado' => 5,
            ),
            443 => 
            array (
                'id' => 1944,
                'nome' => 'Cristópolis',
                'idEstado' => 5,
            ),
            444 => 
            array (
                'id' => 1945,
                'nome' => 'Cruz das Almas',
                'idEstado' => 5,
            ),
            445 => 
            array (
                'id' => 1946,
                'nome' => 'Curaçá',
                'idEstado' => 5,
            ),
            446 => 
            array (
                'id' => 1947,
                'nome' => 'Dário Meira',
                'idEstado' => 5,
            ),
            447 => 
            array (
                'id' => 1948,
                'nome' => 'Dias D\'Ávila',
                'idEstado' => 5,
            ),
            448 => 
            array (
                'id' => 1949,
                'nome' => 'Dom Basílio',
                'idEstado' => 5,
            ),
            449 => 
            array (
                'id' => 1950,
                'nome' => 'Dom Macedo Costa',
                'idEstado' => 5,
            ),
            450 => 
            array (
                'id' => 1951,
                'nome' => 'Elísio Medrado',
                'idEstado' => 5,
            ),
            451 => 
            array (
                'id' => 1952,
                'nome' => 'Encruzilhada',
                'idEstado' => 5,
            ),
            452 => 
            array (
                'id' => 1953,
                'nome' => 'Entre Rios',
                'idEstado' => 5,
            ),
            453 => 
            array (
                'id' => 1954,
                'nome' => 'Esplanada',
                'idEstado' => 5,
            ),
            454 => 
            array (
                'id' => 1955,
                'nome' => 'Euclides da Cunha',
                'idEstado' => 5,
            ),
            455 => 
            array (
                'id' => 1956,
                'nome' => 'Eunápolis',
                'idEstado' => 5,
            ),
            456 => 
            array (
                'id' => 1957,
                'nome' => 'Fátima',
                'idEstado' => 5,
            ),
            457 => 
            array (
                'id' => 1958,
                'nome' => 'Feira da Mata',
                'idEstado' => 5,
            ),
            458 => 
            array (
                'id' => 1959,
                'nome' => 'Feira de Santana',
                'idEstado' => 5,
            ),
            459 => 
            array (
                'id' => 1960,
                'nome' => 'Filadélfia',
                'idEstado' => 5,
            ),
            460 => 
            array (
                'id' => 1961,
                'nome' => 'Firmino Alves',
                'idEstado' => 5,
            ),
            461 => 
            array (
                'id' => 1962,
                'nome' => 'Floresta Azul',
                'idEstado' => 5,
            ),
            462 => 
            array (
                'id' => 1963,
                'nome' => 'Formosa do Rio Preto',
                'idEstado' => 5,
            ),
            463 => 
            array (
                'id' => 1964,
                'nome' => 'Gandu',
                'idEstado' => 5,
            ),
            464 => 
            array (
                'id' => 1965,
                'nome' => 'Gavião',
                'idEstado' => 5,
            ),
            465 => 
            array (
                'id' => 1966,
                'nome' => 'Gentio do Ouro',
                'idEstado' => 5,
            ),
            466 => 
            array (
                'id' => 1967,
                'nome' => 'Glória',
                'idEstado' => 5,
            ),
            467 => 
            array (
                'id' => 1968,
                'nome' => 'Gongogi',
                'idEstado' => 5,
            ),
            468 => 
            array (
                'id' => 1969,
                'nome' => 'Governador Mangabeira',
                'idEstado' => 5,
            ),
            469 => 
            array (
                'id' => 1970,
                'nome' => 'Guajeru',
                'idEstado' => 5,
            ),
            470 => 
            array (
                'id' => 1971,
                'nome' => 'Guanambi',
                'idEstado' => 5,
            ),
            471 => 
            array (
                'id' => 1972,
                'nome' => 'Guaratinga',
                'idEstado' => 5,
            ),
            472 => 
            array (
                'id' => 1973,
                'nome' => 'Heliópolis',
                'idEstado' => 5,
            ),
            473 => 
            array (
                'id' => 1974,
                'nome' => 'Iaçu',
                'idEstado' => 5,
            ),
            474 => 
            array (
                'id' => 1975,
                'nome' => 'Ibiassucê',
                'idEstado' => 5,
            ),
            475 => 
            array (
                'id' => 1976,
                'nome' => 'Ibicaraí',
                'idEstado' => 5,
            ),
            476 => 
            array (
                'id' => 1977,
                'nome' => 'Ibicoara',
                'idEstado' => 5,
            ),
            477 => 
            array (
                'id' => 1978,
                'nome' => 'Ibicuí',
                'idEstado' => 5,
            ),
            478 => 
            array (
                'id' => 1979,
                'nome' => 'Ibipeba',
                'idEstado' => 5,
            ),
            479 => 
            array (
                'id' => 1980,
                'nome' => 'Ibipitanga',
                'idEstado' => 5,
            ),
            480 => 
            array (
                'id' => 1981,
                'nome' => 'Ibiquera',
                'idEstado' => 5,
            ),
            481 => 
            array (
                'id' => 1982,
                'nome' => 'Ibirapitanga',
                'idEstado' => 5,
            ),
            482 => 
            array (
                'id' => 1983,
                'nome' => 'Ibirapuã',
                'idEstado' => 5,
            ),
            483 => 
            array (
                'id' => 1984,
                'nome' => 'Ibirataia',
                'idEstado' => 5,
            ),
            484 => 
            array (
                'id' => 1985,
                'nome' => 'Ibitiara',
                'idEstado' => 5,
            ),
            485 => 
            array (
                'id' => 1986,
                'nome' => 'Ibititá',
                'idEstado' => 5,
            ),
            486 => 
            array (
                'id' => 1987,
                'nome' => 'Ibotirama',
                'idEstado' => 5,
            ),
            487 => 
            array (
                'id' => 1988,
                'nome' => 'Ichu',
                'idEstado' => 5,
            ),
            488 => 
            array (
                'id' => 1989,
                'nome' => 'Igaporã',
                'idEstado' => 5,
            ),
            489 => 
            array (
                'id' => 1990,
                'nome' => 'Igrapiúna',
                'idEstado' => 5,
            ),
            490 => 
            array (
                'id' => 1991,
                'nome' => 'Iguaí',
                'idEstado' => 5,
            ),
            491 => 
            array (
                'id' => 1992,
                'nome' => 'Ilhéus',
                'idEstado' => 5,
            ),
            492 => 
            array (
                'id' => 1993,
                'nome' => 'Inhambupe',
                'idEstado' => 5,
            ),
            493 => 
            array (
                'id' => 1994,
                'nome' => 'Ipecaetá',
                'idEstado' => 5,
            ),
            494 => 
            array (
                'id' => 1995,
                'nome' => 'Ipiaú',
                'idEstado' => 5,
            ),
            495 => 
            array (
                'id' => 1996,
                'nome' => 'Ipirá',
                'idEstado' => 5,
            ),
            496 => 
            array (
                'id' => 1997,
                'nome' => 'Ipupiara',
                'idEstado' => 5,
            ),
            497 => 
            array (
                'id' => 1998,
                'nome' => 'Irajuba',
                'idEstado' => 5,
            ),
            498 => 
            array (
                'id' => 1999,
                'nome' => 'Iramaia',
                'idEstado' => 5,
            ),
            499 => 
            array (
                'id' => 2000,
                'nome' => 'Iraquara',
                'idEstado' => 5,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'nome' => 'Irará',
                'idEstado' => 5,
            ),
            1 => 
            array (
                'id' => 2002,
                'nome' => 'Irecê',
                'idEstado' => 5,
            ),
            2 => 
            array (
                'id' => 2003,
                'nome' => 'Itabela',
                'idEstado' => 5,
            ),
            3 => 
            array (
                'id' => 2004,
                'nome' => 'Itaberaba',
                'idEstado' => 5,
            ),
            4 => 
            array (
                'id' => 2005,
                'nome' => 'Itabuna',
                'idEstado' => 5,
            ),
            5 => 
            array (
                'id' => 2006,
                'nome' => 'Itacaré',
                'idEstado' => 5,
            ),
            6 => 
            array (
                'id' => 2007,
                'nome' => 'Itaeté',
                'idEstado' => 5,
            ),
            7 => 
            array (
                'id' => 2008,
                'nome' => 'Itagi',
                'idEstado' => 5,
            ),
            8 => 
            array (
                'id' => 2009,
                'nome' => 'Itagibá',
                'idEstado' => 5,
            ),
            9 => 
            array (
                'id' => 2010,
                'nome' => 'Itagimirim',
                'idEstado' => 5,
            ),
            10 => 
            array (
                'id' => 2011,
                'nome' => 'Itaguaçu da Bahia',
                'idEstado' => 5,
            ),
            11 => 
            array (
                'id' => 2012,
                'nome' => 'Itaju do Colônia',
                'idEstado' => 5,
            ),
            12 => 
            array (
                'id' => 2013,
                'nome' => 'Itajuípe',
                'idEstado' => 5,
            ),
            13 => 
            array (
                'id' => 2014,
                'nome' => 'Itamaraju',
                'idEstado' => 5,
            ),
            14 => 
            array (
                'id' => 2015,
                'nome' => 'Itamari',
                'idEstado' => 5,
            ),
            15 => 
            array (
                'id' => 2016,
                'nome' => 'Itambé',
                'idEstado' => 5,
            ),
            16 => 
            array (
                'id' => 2017,
                'nome' => 'Itanagra',
                'idEstado' => 5,
            ),
            17 => 
            array (
                'id' => 2018,
                'nome' => 'Itanhém',
                'idEstado' => 5,
            ),
            18 => 
            array (
                'id' => 2019,
                'nome' => 'Itaparica',
                'idEstado' => 5,
            ),
            19 => 
            array (
                'id' => 2020,
                'nome' => 'Itapé',
                'idEstado' => 5,
            ),
            20 => 
            array (
                'id' => 2021,
                'nome' => 'Itapebi',
                'idEstado' => 5,
            ),
            21 => 
            array (
                'id' => 2022,
                'nome' => 'Itapetinga',
                'idEstado' => 5,
            ),
            22 => 
            array (
                'id' => 2023,
                'nome' => 'Itapicuru',
                'idEstado' => 5,
            ),
            23 => 
            array (
                'id' => 2024,
                'nome' => 'Itapitanga',
                'idEstado' => 5,
            ),
            24 => 
            array (
                'id' => 2025,
                'nome' => 'Itaquara',
                'idEstado' => 5,
            ),
            25 => 
            array (
                'id' => 2026,
                'nome' => 'Itarantim',
                'idEstado' => 5,
            ),
            26 => 
            array (
                'id' => 2027,
                'nome' => 'Itatim',
                'idEstado' => 5,
            ),
            27 => 
            array (
                'id' => 2028,
                'nome' => 'Itiruçu',
                'idEstado' => 5,
            ),
            28 => 
            array (
                'id' => 2029,
                'nome' => 'Itiúba',
                'idEstado' => 5,
            ),
            29 => 
            array (
                'id' => 2030,
                'nome' => 'Itororó',
                'idEstado' => 5,
            ),
            30 => 
            array (
                'id' => 2031,
                'nome' => 'Ituaçu',
                'idEstado' => 5,
            ),
            31 => 
            array (
                'id' => 2032,
                'nome' => 'Ituberá',
                'idEstado' => 5,
            ),
            32 => 
            array (
                'id' => 2033,
                'nome' => 'Iuiú',
                'idEstado' => 5,
            ),
            33 => 
            array (
                'id' => 2034,
                'nome' => 'Jaborandi',
                'idEstado' => 5,
            ),
            34 => 
            array (
                'id' => 2035,
                'nome' => 'Jacaraci',
                'idEstado' => 5,
            ),
            35 => 
            array (
                'id' => 2036,
                'nome' => 'Jacobina',
                'idEstado' => 5,
            ),
            36 => 
            array (
                'id' => 2037,
                'nome' => 'Jaguaquara',
                'idEstado' => 5,
            ),
            37 => 
            array (
                'id' => 2038,
                'nome' => 'Jaguarari',
                'idEstado' => 5,
            ),
            38 => 
            array (
                'id' => 2039,
                'nome' => 'Jaguaripe',
                'idEstado' => 5,
            ),
            39 => 
            array (
                'id' => 2040,
                'nome' => 'Jandaíra',
                'idEstado' => 5,
            ),
            40 => 
            array (
                'id' => 2041,
                'nome' => 'Jequié',
                'idEstado' => 5,
            ),
            41 => 
            array (
                'id' => 2042,
                'nome' => 'Jeremoabo',
                'idEstado' => 5,
            ),
            42 => 
            array (
                'id' => 2043,
                'nome' => 'Jiquiriçá',
                'idEstado' => 5,
            ),
            43 => 
            array (
                'id' => 2044,
                'nome' => 'Jitaúna',
                'idEstado' => 5,
            ),
            44 => 
            array (
                'id' => 2045,
                'nome' => 'João Dourado',
                'idEstado' => 5,
            ),
            45 => 
            array (
                'id' => 2046,
                'nome' => 'Juazeiro',
                'idEstado' => 5,
            ),
            46 => 
            array (
                'id' => 2047,
                'nome' => 'Jucuruçu',
                'idEstado' => 5,
            ),
            47 => 
            array (
                'id' => 2048,
                'nome' => 'Jussara',
                'idEstado' => 5,
            ),
            48 => 
            array (
                'id' => 2049,
                'nome' => 'Jussari',
                'idEstado' => 5,
            ),
            49 => 
            array (
                'id' => 2050,
                'nome' => 'Jussiape',
                'idEstado' => 5,
            ),
            50 => 
            array (
                'id' => 2051,
                'nome' => 'Lafaiete Coutinho',
                'idEstado' => 5,
            ),
            51 => 
            array (
                'id' => 2052,
                'nome' => 'Lagoa Real',
                'idEstado' => 5,
            ),
            52 => 
            array (
                'id' => 2053,
                'nome' => 'Laje',
                'idEstado' => 5,
            ),
            53 => 
            array (
                'id' => 2054,
                'nome' => 'Lajedão',
                'idEstado' => 5,
            ),
            54 => 
            array (
                'id' => 2055,
                'nome' => 'Lajedinho',
                'idEstado' => 5,
            ),
            55 => 
            array (
                'id' => 2056,
                'nome' => 'Lajedo do Tabocal',
                'idEstado' => 5,
            ),
            56 => 
            array (
                'id' => 2057,
                'nome' => 'Lamarão',
                'idEstado' => 5,
            ),
            57 => 
            array (
                'id' => 2058,
                'nome' => 'Lapão',
                'idEstado' => 5,
            ),
            58 => 
            array (
                'id' => 2059,
                'nome' => 'Lauro de Freitas',
                'idEstado' => 5,
            ),
            59 => 
            array (
                'id' => 2060,
                'nome' => 'Lençóis',
                'idEstado' => 5,
            ),
            60 => 
            array (
                'id' => 2061,
                'nome' => 'Licínio de Almeida',
                'idEstado' => 5,
            ),
            61 => 
            array (
                'id' => 2062,
                'nome' => 'Livramento de Nossa Senhora',
                'idEstado' => 5,
            ),
            62 => 
            array (
                'id' => 2063,
                'nome' => 'Luís Eduardo Magalhães',
                'idEstado' => 5,
            ),
            63 => 
            array (
                'id' => 2064,
                'nome' => 'Macajuba',
                'idEstado' => 5,
            ),
            64 => 
            array (
                'id' => 2065,
                'nome' => 'Macarani',
                'idEstado' => 5,
            ),
            65 => 
            array (
                'id' => 2066,
                'nome' => 'Macaúbas',
                'idEstado' => 5,
            ),
            66 => 
            array (
                'id' => 2067,
                'nome' => 'Macururé',
                'idEstado' => 5,
            ),
            67 => 
            array (
                'id' => 2068,
                'nome' => 'Madre de Deus',
                'idEstado' => 5,
            ),
            68 => 
            array (
                'id' => 2069,
                'nome' => 'Maetinga',
                'idEstado' => 5,
            ),
            69 => 
            array (
                'id' => 2070,
                'nome' => 'Maiquinique',
                'idEstado' => 5,
            ),
            70 => 
            array (
                'id' => 2071,
                'nome' => 'Mairi',
                'idEstado' => 5,
            ),
            71 => 
            array (
                'id' => 2072,
                'nome' => 'Malhada',
                'idEstado' => 5,
            ),
            72 => 
            array (
                'id' => 2073,
                'nome' => 'Malhada de Pedras',
                'idEstado' => 5,
            ),
            73 => 
            array (
                'id' => 2074,
                'nome' => 'Manoel Vitorino',
                'idEstado' => 5,
            ),
            74 => 
            array (
                'id' => 2075,
                'nome' => 'Mansidão',
                'idEstado' => 5,
            ),
            75 => 
            array (
                'id' => 2076,
                'nome' => 'Maracás',
                'idEstado' => 5,
            ),
            76 => 
            array (
                'id' => 2077,
                'nome' => 'Maragogipe',
                'idEstado' => 5,
            ),
            77 => 
            array (
                'id' => 2078,
                'nome' => 'Maraú',
                'idEstado' => 5,
            ),
            78 => 
            array (
                'id' => 2079,
                'nome' => 'Marcionílio Souza',
                'idEstado' => 5,
            ),
            79 => 
            array (
                'id' => 2080,
                'nome' => 'Mascote',
                'idEstado' => 5,
            ),
            80 => 
            array (
                'id' => 2081,
                'nome' => 'Mata de São João',
                'idEstado' => 5,
            ),
            81 => 
            array (
                'id' => 2082,
                'nome' => 'Matina',
                'idEstado' => 5,
            ),
            82 => 
            array (
                'id' => 2083,
                'nome' => 'Medeiros Neto',
                'idEstado' => 5,
            ),
            83 => 
            array (
                'id' => 2084,
                'nome' => 'Miguel Calmon',
                'idEstado' => 5,
            ),
            84 => 
            array (
                'id' => 2085,
                'nome' => 'Milagres',
                'idEstado' => 5,
            ),
            85 => 
            array (
                'id' => 2086,
                'nome' => 'Mirangaba',
                'idEstado' => 5,
            ),
            86 => 
            array (
                'id' => 2087,
                'nome' => 'Mirante',
                'idEstado' => 5,
            ),
            87 => 
            array (
                'id' => 2088,
                'nome' => 'Monte Santo',
                'idEstado' => 5,
            ),
            88 => 
            array (
                'id' => 2089,
                'nome' => 'Morpará',
                'idEstado' => 5,
            ),
            89 => 
            array (
                'id' => 2090,
                'nome' => 'Morro do Chapéu',
                'idEstado' => 5,
            ),
            90 => 
            array (
                'id' => 2091,
                'nome' => 'Mortugaba',
                'idEstado' => 5,
            ),
            91 => 
            array (
                'id' => 2092,
                'nome' => 'Mucugê',
                'idEstado' => 5,
            ),
            92 => 
            array (
                'id' => 2093,
                'nome' => 'Mucuri',
                'idEstado' => 5,
            ),
            93 => 
            array (
                'id' => 2094,
                'nome' => 'Mulungu do Morro',
                'idEstado' => 5,
            ),
            94 => 
            array (
                'id' => 2095,
                'nome' => 'Mundo Novo',
                'idEstado' => 5,
            ),
            95 => 
            array (
                'id' => 2096,
                'nome' => 'Muniz Ferreira',
                'idEstado' => 5,
            ),
            96 => 
            array (
                'id' => 2097,
                'nome' => 'Muquém de São Francisco',
                'idEstado' => 5,
            ),
            97 => 
            array (
                'id' => 2098,
                'nome' => 'Muritiba',
                'idEstado' => 5,
            ),
            98 => 
            array (
                'id' => 2099,
                'nome' => 'Mutuípe',
                'idEstado' => 5,
            ),
            99 => 
            array (
                'id' => 2100,
                'nome' => 'Nazaré',
                'idEstado' => 5,
            ),
            100 => 
            array (
                'id' => 2101,
                'nome' => 'Nilo Peçanha',
                'idEstado' => 5,
            ),
            101 => 
            array (
                'id' => 2102,
                'nome' => 'Nordestina',
                'idEstado' => 5,
            ),
            102 => 
            array (
                'id' => 2103,
                'nome' => 'Nova Canaã',
                'idEstado' => 5,
            ),
            103 => 
            array (
                'id' => 2104,
                'nome' => 'Nova Fátima',
                'idEstado' => 5,
            ),
            104 => 
            array (
                'id' => 2105,
                'nome' => 'Nova Ibiá',
                'idEstado' => 5,
            ),
            105 => 
            array (
                'id' => 2106,
                'nome' => 'Nova Itarana',
                'idEstado' => 5,
            ),
            106 => 
            array (
                'id' => 2107,
                'nome' => 'Nova Redenção',
                'idEstado' => 5,
            ),
            107 => 
            array (
                'id' => 2108,
                'nome' => 'Nova Soure',
                'idEstado' => 5,
            ),
            108 => 
            array (
                'id' => 2109,
                'nome' => 'Nova Viçosa',
                'idEstado' => 5,
            ),
            109 => 
            array (
                'id' => 2110,
                'nome' => 'Novo Horizonte',
                'idEstado' => 5,
            ),
            110 => 
            array (
                'id' => 2111,
                'nome' => 'Novo Triunfo',
                'idEstado' => 5,
            ),
            111 => 
            array (
                'id' => 2112,
                'nome' => 'Olindina',
                'idEstado' => 5,
            ),
            112 => 
            array (
                'id' => 2113,
                'nome' => 'Oliveira dos Brejinhos',
                'idEstado' => 5,
            ),
            113 => 
            array (
                'id' => 2114,
                'nome' => 'Ouriçangas',
                'idEstado' => 5,
            ),
            114 => 
            array (
                'id' => 2115,
                'nome' => 'Ourolândia',
                'idEstado' => 5,
            ),
            115 => 
            array (
                'id' => 2116,
                'nome' => 'Palmas de Monte Alto',
                'idEstado' => 5,
            ),
            116 => 
            array (
                'id' => 2117,
                'nome' => 'Palmeiras',
                'idEstado' => 5,
            ),
            117 => 
            array (
                'id' => 2118,
                'nome' => 'Paramirim',
                'idEstado' => 5,
            ),
            118 => 
            array (
                'id' => 2119,
                'nome' => 'Paratinga',
                'idEstado' => 5,
            ),
            119 => 
            array (
                'id' => 2120,
                'nome' => 'Paripiranga',
                'idEstado' => 5,
            ),
            120 => 
            array (
                'id' => 2121,
                'nome' => 'Pau Brasil',
                'idEstado' => 5,
            ),
            121 => 
            array (
                'id' => 2122,
                'nome' => 'Paulo Afonso',
                'idEstado' => 5,
            ),
            122 => 
            array (
                'id' => 2123,
                'nome' => 'Pé de Serra',
                'idEstado' => 5,
            ),
            123 => 
            array (
                'id' => 2124,
                'nome' => 'Pedrão',
                'idEstado' => 5,
            ),
            124 => 
            array (
                'id' => 2125,
                'nome' => 'Pedro Alexandre',
                'idEstado' => 5,
            ),
            125 => 
            array (
                'id' => 2126,
                'nome' => 'Piatã',
                'idEstado' => 5,
            ),
            126 => 
            array (
                'id' => 2127,
                'nome' => 'Pilão Arcado',
                'idEstado' => 5,
            ),
            127 => 
            array (
                'id' => 2128,
                'nome' => 'Pindaí',
                'idEstado' => 5,
            ),
            128 => 
            array (
                'id' => 2129,
                'nome' => 'Pindobaçu',
                'idEstado' => 5,
            ),
            129 => 
            array (
                'id' => 2130,
                'nome' => 'Pintadas',
                'idEstado' => 5,
            ),
            130 => 
            array (
                'id' => 2131,
                'nome' => 'Piraí do Norte',
                'idEstado' => 5,
            ),
            131 => 
            array (
                'id' => 2132,
                'nome' => 'Piripá',
                'idEstado' => 5,
            ),
            132 => 
            array (
                'id' => 2133,
                'nome' => 'Piritiba',
                'idEstado' => 5,
            ),
            133 => 
            array (
                'id' => 2134,
                'nome' => 'Planaltino',
                'idEstado' => 5,
            ),
            134 => 
            array (
                'id' => 2135,
                'nome' => 'Planalto',
                'idEstado' => 5,
            ),
            135 => 
            array (
                'id' => 2136,
                'nome' => 'Poções',
                'idEstado' => 5,
            ),
            136 => 
            array (
                'id' => 2137,
                'nome' => 'Pojuca',
                'idEstado' => 5,
            ),
            137 => 
            array (
                'id' => 2138,
                'nome' => 'Ponto Novo',
                'idEstado' => 5,
            ),
            138 => 
            array (
                'id' => 2139,
                'nome' => 'Porto Seguro',
                'idEstado' => 5,
            ),
            139 => 
            array (
                'id' => 2140,
                'nome' => 'Potiraguá',
                'idEstado' => 5,
            ),
            140 => 
            array (
                'id' => 2141,
                'nome' => 'Prado',
                'idEstado' => 5,
            ),
            141 => 
            array (
                'id' => 2142,
                'nome' => 'Presidente Dutra',
                'idEstado' => 5,
            ),
            142 => 
            array (
                'id' => 2143,
                'nome' => 'Presidente Jânio Quadros',
                'idEstado' => 5,
            ),
            143 => 
            array (
                'id' => 2144,
                'nome' => 'Presidente Tancredo Neves',
                'idEstado' => 5,
            ),
            144 => 
            array (
                'id' => 2145,
                'nome' => 'Queimadas',
                'idEstado' => 5,
            ),
            145 => 
            array (
                'id' => 2146,
                'nome' => 'Quijingue',
                'idEstado' => 5,
            ),
            146 => 
            array (
                'id' => 2147,
                'nome' => 'Quixabeira',
                'idEstado' => 5,
            ),
            147 => 
            array (
                'id' => 2148,
                'nome' => 'Rafael Jambeiro',
                'idEstado' => 5,
            ),
            148 => 
            array (
                'id' => 2149,
                'nome' => 'Remanso',
                'idEstado' => 5,
            ),
            149 => 
            array (
                'id' => 2150,
                'nome' => 'Retirolândia',
                'idEstado' => 5,
            ),
            150 => 
            array (
                'id' => 2151,
                'nome' => 'Riachão das Neves',
                'idEstado' => 5,
            ),
            151 => 
            array (
                'id' => 2152,
                'nome' => 'Riachão do Jacuípe',
                'idEstado' => 5,
            ),
            152 => 
            array (
                'id' => 2153,
                'nome' => 'Riacho de Santana',
                'idEstado' => 5,
            ),
            153 => 
            array (
                'id' => 2154,
                'nome' => 'Ribeira do Amparo',
                'idEstado' => 5,
            ),
            154 => 
            array (
                'id' => 2155,
                'nome' => 'Ribeira do Pombal',
                'idEstado' => 5,
            ),
            155 => 
            array (
                'id' => 2156,
                'nome' => 'Ribeirão do Largo',
                'idEstado' => 5,
            ),
            156 => 
            array (
                'id' => 2157,
                'nome' => 'Rio de Contas',
                'idEstado' => 5,
            ),
            157 => 
            array (
                'id' => 2158,
                'nome' => 'Rio do Antônio',
                'idEstado' => 5,
            ),
            158 => 
            array (
                'id' => 2159,
                'nome' => 'Rio do Pires',
                'idEstado' => 5,
            ),
            159 => 
            array (
                'id' => 2160,
                'nome' => 'Rio Real',
                'idEstado' => 5,
            ),
            160 => 
            array (
                'id' => 2161,
                'nome' => 'Rodelas',
                'idEstado' => 5,
            ),
            161 => 
            array (
                'id' => 2162,
                'nome' => 'Ruy Barbosa',
                'idEstado' => 5,
            ),
            162 => 
            array (
                'id' => 2163,
                'nome' => 'Salinas da Margarida',
                'idEstado' => 5,
            ),
            163 => 
            array (
                'id' => 2164,
                'nome' => 'Salvador',
                'idEstado' => 5,
            ),
            164 => 
            array (
                'id' => 2165,
                'nome' => 'Santa Bárbara',
                'idEstado' => 5,
            ),
            165 => 
            array (
                'id' => 2166,
                'nome' => 'Santa Brígida',
                'idEstado' => 5,
            ),
            166 => 
            array (
                'id' => 2167,
                'nome' => 'Santa Cruz Cabrália',
                'idEstado' => 5,
            ),
            167 => 
            array (
                'id' => 2168,
                'nome' => 'Santa Cruz da Vitória',
                'idEstado' => 5,
            ),
            168 => 
            array (
                'id' => 2169,
                'nome' => 'Santa Inês',
                'idEstado' => 5,
            ),
            169 => 
            array (
                'id' => 2170,
                'nome' => 'Santaluz',
                'idEstado' => 5,
            ),
            170 => 
            array (
                'id' => 2171,
                'nome' => 'Santa Luzia',
                'idEstado' => 5,
            ),
            171 => 
            array (
                'id' => 2172,
                'nome' => 'Santa Maria da Vitória',
                'idEstado' => 5,
            ),
            172 => 
            array (
                'id' => 2173,
                'nome' => 'Santana',
                'idEstado' => 5,
            ),
            173 => 
            array (
                'id' => 2174,
                'nome' => 'Santanópolis',
                'idEstado' => 5,
            ),
            174 => 
            array (
                'id' => 2175,
                'nome' => 'Santa Rita de Cássia',
                'idEstado' => 5,
            ),
            175 => 
            array (
                'id' => 2176,
                'nome' => 'Santa Teresinha',
                'idEstado' => 5,
            ),
            176 => 
            array (
                'id' => 2177,
                'nome' => 'Santo Amaro',
                'idEstado' => 5,
            ),
            177 => 
            array (
                'id' => 2178,
                'nome' => 'Santo Antônio de Jesus',
                'idEstado' => 5,
            ),
            178 => 
            array (
                'id' => 2179,
                'nome' => 'Santo Estêvão',
                'idEstado' => 5,
            ),
            179 => 
            array (
                'id' => 2180,
                'nome' => 'São Desidério',
                'idEstado' => 5,
            ),
            180 => 
            array (
                'id' => 2181,
                'nome' => 'São Domingos',
                'idEstado' => 5,
            ),
            181 => 
            array (
                'id' => 2182,
                'nome' => 'São Félix',
                'idEstado' => 5,
            ),
            182 => 
            array (
                'id' => 2183,
                'nome' => 'São Félix do Coribe',
                'idEstado' => 5,
            ),
            183 => 
            array (
                'id' => 2184,
                'nome' => 'São Felipe',
                'idEstado' => 5,
            ),
            184 => 
            array (
                'id' => 2185,
                'nome' => 'São Francisco do Conde',
                'idEstado' => 5,
            ),
            185 => 
            array (
                'id' => 2186,
                'nome' => 'São Gabriel',
                'idEstado' => 5,
            ),
            186 => 
            array (
                'id' => 2187,
                'nome' => 'São Gonçalo dos Campos',
                'idEstado' => 5,
            ),
            187 => 
            array (
                'id' => 2188,
                'nome' => 'São José da Vitória',
                'idEstado' => 5,
            ),
            188 => 
            array (
                'id' => 2189,
                'nome' => 'São José do Jacuípe',
                'idEstado' => 5,
            ),
            189 => 
            array (
                'id' => 2190,
                'nome' => 'São Miguel das Matas',
                'idEstado' => 5,
            ),
            190 => 
            array (
                'id' => 2191,
                'nome' => 'São Sebastião do Passé',
                'idEstado' => 5,
            ),
            191 => 
            array (
                'id' => 2192,
                'nome' => 'Sapeaçu',
                'idEstado' => 5,
            ),
            192 => 
            array (
                'id' => 2193,
                'nome' => 'Sátiro Dias',
                'idEstado' => 5,
            ),
            193 => 
            array (
                'id' => 2194,
                'nome' => 'Saubara',
                'idEstado' => 5,
            ),
            194 => 
            array (
                'id' => 2195,
                'nome' => 'Saúde',
                'idEstado' => 5,
            ),
            195 => 
            array (
                'id' => 2196,
                'nome' => 'Seabra',
                'idEstado' => 5,
            ),
            196 => 
            array (
                'id' => 2197,
                'nome' => 'Sebastião Laranjeiras',
                'idEstado' => 5,
            ),
            197 => 
            array (
                'id' => 2198,
                'nome' => 'Senhor do Bonfim',
                'idEstado' => 5,
            ),
            198 => 
            array (
                'id' => 2199,
                'nome' => 'Serra do Ramalho',
                'idEstado' => 5,
            ),
            199 => 
            array (
                'id' => 2200,
                'nome' => 'Sento Sé',
                'idEstado' => 5,
            ),
            200 => 
            array (
                'id' => 2201,
                'nome' => 'Serra Dourada',
                'idEstado' => 5,
            ),
            201 => 
            array (
                'id' => 2202,
                'nome' => 'Serra Preta',
                'idEstado' => 5,
            ),
            202 => 
            array (
                'id' => 2203,
                'nome' => 'Serrinha',
                'idEstado' => 5,
            ),
            203 => 
            array (
                'id' => 2204,
                'nome' => 'Serrolândia',
                'idEstado' => 5,
            ),
            204 => 
            array (
                'id' => 2205,
                'nome' => 'Simões Filho',
                'idEstado' => 5,
            ),
            205 => 
            array (
                'id' => 2206,
                'nome' => 'Sítio do Mato',
                'idEstado' => 5,
            ),
            206 => 
            array (
                'id' => 2207,
                'nome' => 'Sítio do Quinto',
                'idEstado' => 5,
            ),
            207 => 
            array (
                'id' => 2208,
                'nome' => 'Sobradinho',
                'idEstado' => 5,
            ),
            208 => 
            array (
                'id' => 2209,
                'nome' => 'Souto Soares',
                'idEstado' => 5,
            ),
            209 => 
            array (
                'id' => 2210,
                'nome' => 'Tabocas do Brejo Velho',
                'idEstado' => 5,
            ),
            210 => 
            array (
                'id' => 2211,
                'nome' => 'Tanhaçu',
                'idEstado' => 5,
            ),
            211 => 
            array (
                'id' => 2212,
                'nome' => 'Tanque Novo',
                'idEstado' => 5,
            ),
            212 => 
            array (
                'id' => 2213,
                'nome' => 'Tanquinho',
                'idEstado' => 5,
            ),
            213 => 
            array (
                'id' => 2214,
                'nome' => 'Taperoá',
                'idEstado' => 5,
            ),
            214 => 
            array (
                'id' => 2215,
                'nome' => 'Tapiramutá',
                'idEstado' => 5,
            ),
            215 => 
            array (
                'id' => 2216,
                'nome' => 'Teixeira de Freitas',
                'idEstado' => 5,
            ),
            216 => 
            array (
                'id' => 2217,
                'nome' => 'Teodoro Sampaio',
                'idEstado' => 5,
            ),
            217 => 
            array (
                'id' => 2218,
                'nome' => 'Teofilândia',
                'idEstado' => 5,
            ),
            218 => 
            array (
                'id' => 2219,
                'nome' => 'Teolândia',
                'idEstado' => 5,
            ),
            219 => 
            array (
                'id' => 2220,
                'nome' => 'Terra Nova',
                'idEstado' => 5,
            ),
            220 => 
            array (
                'id' => 2221,
                'nome' => 'Tremedal',
                'idEstado' => 5,
            ),
            221 => 
            array (
                'id' => 2222,
                'nome' => 'Tucano',
                'idEstado' => 5,
            ),
            222 => 
            array (
                'id' => 2223,
                'nome' => 'Uauá',
                'idEstado' => 5,
            ),
            223 => 
            array (
                'id' => 2224,
                'nome' => 'Ubaíra',
                'idEstado' => 5,
            ),
            224 => 
            array (
                'id' => 2225,
                'nome' => 'Ubaitaba',
                'idEstado' => 5,
            ),
            225 => 
            array (
                'id' => 2226,
                'nome' => 'Ubatã',
                'idEstado' => 5,
            ),
            226 => 
            array (
                'id' => 2227,
                'nome' => 'Uibaí',
                'idEstado' => 5,
            ),
            227 => 
            array (
                'id' => 2228,
                'nome' => 'Umburanas',
                'idEstado' => 5,
            ),
            228 => 
            array (
                'id' => 2229,
                'nome' => 'Una',
                'idEstado' => 5,
            ),
            229 => 
            array (
                'id' => 2230,
                'nome' => 'Urandi',
                'idEstado' => 5,
            ),
            230 => 
            array (
                'id' => 2231,
                'nome' => 'Uruçuca',
                'idEstado' => 5,
            ),
            231 => 
            array (
                'id' => 2232,
                'nome' => 'Utinga',
                'idEstado' => 5,
            ),
            232 => 
            array (
                'id' => 2233,
                'nome' => 'Valença',
                'idEstado' => 5,
            ),
            233 => 
            array (
                'id' => 2234,
                'nome' => 'Valente',
                'idEstado' => 5,
            ),
            234 => 
            array (
                'id' => 2235,
                'nome' => 'Várzea da Roça',
                'idEstado' => 5,
            ),
            235 => 
            array (
                'id' => 2236,
                'nome' => 'Várzea do Poço',
                'idEstado' => 5,
            ),
            236 => 
            array (
                'id' => 2237,
                'nome' => 'Várzea Nova',
                'idEstado' => 5,
            ),
            237 => 
            array (
                'id' => 2238,
                'nome' => 'Varzedo',
                'idEstado' => 5,
            ),
            238 => 
            array (
                'id' => 2239,
                'nome' => 'Vera Cruz',
                'idEstado' => 5,
            ),
            239 => 
            array (
                'id' => 2240,
                'nome' => 'Vereda',
                'idEstado' => 5,
            ),
            240 => 
            array (
                'id' => 2241,
                'nome' => 'Vitória da Conquista',
                'idEstado' => 5,
            ),
            241 => 
            array (
                'id' => 2242,
                'nome' => 'Wagner',
                'idEstado' => 5,
            ),
            242 => 
            array (
                'id' => 2243,
                'nome' => 'Wanderley',
                'idEstado' => 5,
            ),
            243 => 
            array (
                'id' => 2244,
                'nome' => 'Wenceslau Guimarães',
                'idEstado' => 5,
            ),
            244 => 
            array (
                'id' => 2245,
                'nome' => 'Xique-Xique',
                'idEstado' => 5,
            ),
            245 => 
            array (
                'id' => 2246,
                'nome' => 'Abadia dos Dourados',
                'idEstado' => 13,
            ),
            246 => 
            array (
                'id' => 2247,
                'nome' => 'Abaeté',
                'idEstado' => 13,
            ),
            247 => 
            array (
                'id' => 2248,
                'nome' => 'Abre Campo',
                'idEstado' => 13,
            ),
            248 => 
            array (
                'id' => 2249,
                'nome' => 'Acaiaca',
                'idEstado' => 13,
            ),
            249 => 
            array (
                'id' => 2250,
                'nome' => 'Açucena',
                'idEstado' => 13,
            ),
            250 => 
            array (
                'id' => 2251,
                'nome' => 'Água Boa',
                'idEstado' => 13,
            ),
            251 => 
            array (
                'id' => 2252,
                'nome' => 'Água Comprida',
                'idEstado' => 13,
            ),
            252 => 
            array (
                'id' => 2253,
                'nome' => 'Aguanil',
                'idEstado' => 13,
            ),
            253 => 
            array (
                'id' => 2254,
                'nome' => 'Águas Formosas',
                'idEstado' => 13,
            ),
            254 => 
            array (
                'id' => 2255,
                'nome' => 'Águas Vermelhas',
                'idEstado' => 13,
            ),
            255 => 
            array (
                'id' => 2256,
                'nome' => 'Aimorés',
                'idEstado' => 13,
            ),
            256 => 
            array (
                'id' => 2257,
                'nome' => 'Aiuruoca',
                'idEstado' => 13,
            ),
            257 => 
            array (
                'id' => 2258,
                'nome' => 'Alagoa',
                'idEstado' => 13,
            ),
            258 => 
            array (
                'id' => 2259,
                'nome' => 'Albertina',
                'idEstado' => 13,
            ),
            259 => 
            array (
                'id' => 2260,
                'nome' => 'Além Paraíba',
                'idEstado' => 13,
            ),
            260 => 
            array (
                'id' => 2261,
                'nome' => 'Alfenas',
                'idEstado' => 13,
            ),
            261 => 
            array (
                'id' => 2262,
                'nome' => 'Alfredo Vasconcelos',
                'idEstado' => 13,
            ),
            262 => 
            array (
                'id' => 2263,
                'nome' => 'Almenara',
                'idEstado' => 13,
            ),
            263 => 
            array (
                'id' => 2264,
                'nome' => 'Alpercata',
                'idEstado' => 13,
            ),
            264 => 
            array (
                'id' => 2265,
                'nome' => 'Alpinópolis',
                'idEstado' => 13,
            ),
            265 => 
            array (
                'id' => 2266,
                'nome' => 'Alterosa',
                'idEstado' => 13,
            ),
            266 => 
            array (
                'id' => 2267,
                'nome' => 'Alto Caparaó',
                'idEstado' => 13,
            ),
            267 => 
            array (
                'id' => 2268,
                'nome' => 'Alto Rio Doce',
                'idEstado' => 13,
            ),
            268 => 
            array (
                'id' => 2269,
                'nome' => 'Alvarenga',
                'idEstado' => 13,
            ),
            269 => 
            array (
                'id' => 2270,
                'nome' => 'Alvinópolis',
                'idEstado' => 13,
            ),
            270 => 
            array (
                'id' => 2271,
                'nome' => 'Alvorada de Minas',
                'idEstado' => 13,
            ),
            271 => 
            array (
                'id' => 2272,
                'nome' => 'Amparo do Serra',
                'idEstado' => 13,
            ),
            272 => 
            array (
                'id' => 2273,
                'nome' => 'Andradas',
                'idEstado' => 13,
            ),
            273 => 
            array (
                'id' => 2274,
                'nome' => 'Cachoeira de Pajeú',
                'idEstado' => 13,
            ),
            274 => 
            array (
                'id' => 2275,
                'nome' => 'Andrelândia',
                'idEstado' => 13,
            ),
            275 => 
            array (
                'id' => 2276,
                'nome' => 'Angelândia',
                'idEstado' => 13,
            ),
            276 => 
            array (
                'id' => 2277,
                'nome' => 'Antônio Carlos',
                'idEstado' => 13,
            ),
            277 => 
            array (
                'id' => 2278,
                'nome' => 'Antônio Dias',
                'idEstado' => 13,
            ),
            278 => 
            array (
                'id' => 2279,
                'nome' => 'Antônio Prado de Minas',
                'idEstado' => 13,
            ),
            279 => 
            array (
                'id' => 2280,
                'nome' => 'Araçaí',
                'idEstado' => 13,
            ),
            280 => 
            array (
                'id' => 2281,
                'nome' => 'Aracitaba',
                'idEstado' => 13,
            ),
            281 => 
            array (
                'id' => 2282,
                'nome' => 'Araçuaí',
                'idEstado' => 13,
            ),
            282 => 
            array (
                'id' => 2283,
                'nome' => 'Araguari',
                'idEstado' => 13,
            ),
            283 => 
            array (
                'id' => 2284,
                'nome' => 'Arantina',
                'idEstado' => 13,
            ),
            284 => 
            array (
                'id' => 2285,
                'nome' => 'Araponga',
                'idEstado' => 13,
            ),
            285 => 
            array (
                'id' => 2286,
                'nome' => 'Araporã',
                'idEstado' => 13,
            ),
            286 => 
            array (
                'id' => 2287,
                'nome' => 'Arapuá',
                'idEstado' => 13,
            ),
            287 => 
            array (
                'id' => 2288,
                'nome' => 'Araújos',
                'idEstado' => 13,
            ),
            288 => 
            array (
                'id' => 2289,
                'nome' => 'Araxá',
                'idEstado' => 13,
            ),
            289 => 
            array (
                'id' => 2290,
                'nome' => 'Arceburgo',
                'idEstado' => 13,
            ),
            290 => 
            array (
                'id' => 2291,
                'nome' => 'Arcos',
                'idEstado' => 13,
            ),
            291 => 
            array (
                'id' => 2292,
                'nome' => 'Areado',
                'idEstado' => 13,
            ),
            292 => 
            array (
                'id' => 2293,
                'nome' => 'Argirita',
                'idEstado' => 13,
            ),
            293 => 
            array (
                'id' => 2294,
                'nome' => 'Aricanduva',
                'idEstado' => 13,
            ),
            294 => 
            array (
                'id' => 2295,
                'nome' => 'Arinos',
                'idEstado' => 13,
            ),
            295 => 
            array (
                'id' => 2296,
                'nome' => 'Astolfo Dutra',
                'idEstado' => 13,
            ),
            296 => 
            array (
                'id' => 2297,
                'nome' => 'Ataléia',
                'idEstado' => 13,
            ),
            297 => 
            array (
                'id' => 2298,
                'nome' => 'Augusto de Lima',
                'idEstado' => 13,
            ),
            298 => 
            array (
                'id' => 2299,
                'nome' => 'Baependi',
                'idEstado' => 13,
            ),
            299 => 
            array (
                'id' => 2300,
                'nome' => 'Baldim',
                'idEstado' => 13,
            ),
            300 => 
            array (
                'id' => 2301,
                'nome' => 'Bambuí',
                'idEstado' => 13,
            ),
            301 => 
            array (
                'id' => 2302,
                'nome' => 'Bandeira',
                'idEstado' => 13,
            ),
            302 => 
            array (
                'id' => 2303,
                'nome' => 'Bandeira do Sul',
                'idEstado' => 13,
            ),
            303 => 
            array (
                'id' => 2304,
                'nome' => 'Barão de Cocais',
                'idEstado' => 13,
            ),
            304 => 
            array (
                'id' => 2305,
                'nome' => 'Barão de Monte Alto',
                'idEstado' => 13,
            ),
            305 => 
            array (
                'id' => 2306,
                'nome' => 'Barbacena',
                'idEstado' => 13,
            ),
            306 => 
            array (
                'id' => 2307,
                'nome' => 'Barra Longa',
                'idEstado' => 13,
            ),
            307 => 
            array (
                'id' => 2308,
                'nome' => 'Barroso',
                'idEstado' => 13,
            ),
            308 => 
            array (
                'id' => 2309,
                'nome' => 'Bela Vista de Minas',
                'idEstado' => 13,
            ),
            309 => 
            array (
                'id' => 2310,
                'nome' => 'Belmiro Braga',
                'idEstado' => 13,
            ),
            310 => 
            array (
                'id' => 2311,
                'nome' => 'Belo Horizonte',
                'idEstado' => 13,
            ),
            311 => 
            array (
                'id' => 2312,
                'nome' => 'Belo Oriente',
                'idEstado' => 13,
            ),
            312 => 
            array (
                'id' => 2313,
                'nome' => 'Belo Vale',
                'idEstado' => 13,
            ),
            313 => 
            array (
                'id' => 2314,
                'nome' => 'Berilo',
                'idEstado' => 13,
            ),
            314 => 
            array (
                'id' => 2315,
                'nome' => 'Bertópolis',
                'idEstado' => 13,
            ),
            315 => 
            array (
                'id' => 2316,
                'nome' => 'Berizal',
                'idEstado' => 13,
            ),
            316 => 
            array (
                'id' => 2317,
                'nome' => 'Betim',
                'idEstado' => 13,
            ),
            317 => 
            array (
                'id' => 2318,
                'nome' => 'Bias Fortes',
                'idEstado' => 13,
            ),
            318 => 
            array (
                'id' => 2319,
                'nome' => 'Bicas',
                'idEstado' => 13,
            ),
            319 => 
            array (
                'id' => 2320,
                'nome' => 'Biquinhas',
                'idEstado' => 13,
            ),
            320 => 
            array (
                'id' => 2321,
                'nome' => 'Boa Esperança',
                'idEstado' => 13,
            ),
            321 => 
            array (
                'id' => 2322,
                'nome' => 'Bocaina de Minas',
                'idEstado' => 13,
            ),
            322 => 
            array (
                'id' => 2323,
                'nome' => 'Bocaiúva',
                'idEstado' => 13,
            ),
            323 => 
            array (
                'id' => 2324,
                'nome' => 'Bom Despacho',
                'idEstado' => 13,
            ),
            324 => 
            array (
                'id' => 2325,
                'nome' => 'Bom Jardim de Minas',
                'idEstado' => 13,
            ),
            325 => 
            array (
                'id' => 2326,
                'nome' => 'Bom Jesus da Penha',
                'idEstado' => 13,
            ),
            326 => 
            array (
                'id' => 2327,
                'nome' => 'Bom Jesus do Amparo',
                'idEstado' => 13,
            ),
            327 => 
            array (
                'id' => 2328,
                'nome' => 'Bom Jesus do Galho',
                'idEstado' => 13,
            ),
            328 => 
            array (
                'id' => 2329,
                'nome' => 'Bom Repouso',
                'idEstado' => 13,
            ),
            329 => 
            array (
                'id' => 2330,
                'nome' => 'Bom Sucesso',
                'idEstado' => 13,
            ),
            330 => 
            array (
                'id' => 2331,
                'nome' => 'Bonfim',
                'idEstado' => 13,
            ),
            331 => 
            array (
                'id' => 2332,
                'nome' => 'Bonfinópolis de Minas',
                'idEstado' => 13,
            ),
            332 => 
            array (
                'id' => 2333,
                'nome' => 'Bonito de Minas',
                'idEstado' => 13,
            ),
            333 => 
            array (
                'id' => 2334,
                'nome' => 'Borda da Mata',
                'idEstado' => 13,
            ),
            334 => 
            array (
                'id' => 2335,
                'nome' => 'Botelhos',
                'idEstado' => 13,
            ),
            335 => 
            array (
                'id' => 2336,
                'nome' => 'Botumirim',
                'idEstado' => 13,
            ),
            336 => 
            array (
                'id' => 2337,
                'nome' => 'Brasilândia de Minas',
                'idEstado' => 13,
            ),
            337 => 
            array (
                'id' => 2338,
                'nome' => 'Brasília de Minas',
                'idEstado' => 13,
            ),
            338 => 
            array (
                'id' => 2339,
                'nome' => 'Brás Pires',
                'idEstado' => 13,
            ),
            339 => 
            array (
                'id' => 2340,
                'nome' => 'Braúnas',
                'idEstado' => 13,
            ),
            340 => 
            array (
                'id' => 2341,
                'nome' => 'Brazópolis',
                'idEstado' => 13,
            ),
            341 => 
            array (
                'id' => 2342,
                'nome' => 'Brumadinho',
                'idEstado' => 13,
            ),
            342 => 
            array (
                'id' => 2343,
                'nome' => 'Bueno Brandão',
                'idEstado' => 13,
            ),
            343 => 
            array (
                'id' => 2344,
                'nome' => 'Buenópolis',
                'idEstado' => 13,
            ),
            344 => 
            array (
                'id' => 2345,
                'nome' => 'Bugre',
                'idEstado' => 13,
            ),
            345 => 
            array (
                'id' => 2346,
                'nome' => 'Buritis',
                'idEstado' => 13,
            ),
            346 => 
            array (
                'id' => 2347,
                'nome' => 'Buritizeiro',
                'idEstado' => 13,
            ),
            347 => 
            array (
                'id' => 2348,
                'nome' => 'Cabeceira Grande',
                'idEstado' => 13,
            ),
            348 => 
            array (
                'id' => 2349,
                'nome' => 'Cabo Verde',
                'idEstado' => 13,
            ),
            349 => 
            array (
                'id' => 2350,
                'nome' => 'Cachoeira da Prata',
                'idEstado' => 13,
            ),
            350 => 
            array (
                'id' => 2351,
                'nome' => 'Cachoeira de Minas',
                'idEstado' => 13,
            ),
            351 => 
            array (
                'id' => 2352,
                'nome' => 'Cachoeira Dourada',
                'idEstado' => 13,
            ),
            352 => 
            array (
                'id' => 2353,
                'nome' => 'Caetanópolis',
                'idEstado' => 13,
            ),
            353 => 
            array (
                'id' => 2354,
                'nome' => 'Caeté',
                'idEstado' => 13,
            ),
            354 => 
            array (
                'id' => 2355,
                'nome' => 'Caiana',
                'idEstado' => 13,
            ),
            355 => 
            array (
                'id' => 2356,
                'nome' => 'Cajuri',
                'idEstado' => 13,
            ),
            356 => 
            array (
                'id' => 2357,
                'nome' => 'Caldas',
                'idEstado' => 13,
            ),
            357 => 
            array (
                'id' => 2358,
                'nome' => 'Camacho',
                'idEstado' => 13,
            ),
            358 => 
            array (
                'id' => 2359,
                'nome' => 'Camanducaia',
                'idEstado' => 13,
            ),
            359 => 
            array (
                'id' => 2360,
                'nome' => 'Cambuí',
                'idEstado' => 13,
            ),
            360 => 
            array (
                'id' => 2361,
                'nome' => 'Cambuquira',
                'idEstado' => 13,
            ),
            361 => 
            array (
                'id' => 2362,
                'nome' => 'Campanário',
                'idEstado' => 13,
            ),
            362 => 
            array (
                'id' => 2363,
                'nome' => 'Campanha',
                'idEstado' => 13,
            ),
            363 => 
            array (
                'id' => 2364,
                'nome' => 'Campestre',
                'idEstado' => 13,
            ),
            364 => 
            array (
                'id' => 2365,
                'nome' => 'Campina Verde',
                'idEstado' => 13,
            ),
            365 => 
            array (
                'id' => 2366,
                'nome' => 'Campo Azul',
                'idEstado' => 13,
            ),
            366 => 
            array (
                'id' => 2367,
                'nome' => 'Campo Belo',
                'idEstado' => 13,
            ),
            367 => 
            array (
                'id' => 2368,
                'nome' => 'Campo do Meio',
                'idEstado' => 13,
            ),
            368 => 
            array (
                'id' => 2369,
                'nome' => 'Campo Florido',
                'idEstado' => 13,
            ),
            369 => 
            array (
                'id' => 2370,
                'nome' => 'Campos Altos',
                'idEstado' => 13,
            ),
            370 => 
            array (
                'id' => 2371,
                'nome' => 'Campos Gerais',
                'idEstado' => 13,
            ),
            371 => 
            array (
                'id' => 2372,
                'nome' => 'Canaã',
                'idEstado' => 13,
            ),
            372 => 
            array (
                'id' => 2373,
                'nome' => 'Canápolis',
                'idEstado' => 13,
            ),
            373 => 
            array (
                'id' => 2374,
                'nome' => 'Cana Verde',
                'idEstado' => 13,
            ),
            374 => 
            array (
                'id' => 2375,
                'nome' => 'Candeias',
                'idEstado' => 13,
            ),
            375 => 
            array (
                'id' => 2376,
                'nome' => 'Cantagalo',
                'idEstado' => 13,
            ),
            376 => 
            array (
                'id' => 2377,
                'nome' => 'Caparaó',
                'idEstado' => 13,
            ),
            377 => 
            array (
                'id' => 2378,
                'nome' => 'Capela Nova',
                'idEstado' => 13,
            ),
            378 => 
            array (
                'id' => 2379,
                'nome' => 'Capelinha',
                'idEstado' => 13,
            ),
            379 => 
            array (
                'id' => 2380,
                'nome' => 'Capetinga',
                'idEstado' => 13,
            ),
            380 => 
            array (
                'id' => 2381,
                'nome' => 'Capim Branco',
                'idEstado' => 13,
            ),
            381 => 
            array (
                'id' => 2382,
                'nome' => 'Capinópolis',
                'idEstado' => 13,
            ),
            382 => 
            array (
                'id' => 2383,
                'nome' => 'Capitão Andrade',
                'idEstado' => 13,
            ),
            383 => 
            array (
                'id' => 2384,
                'nome' => 'Capitão Enéas',
                'idEstado' => 13,
            ),
            384 => 
            array (
                'id' => 2385,
                'nome' => 'Capitólio',
                'idEstado' => 13,
            ),
            385 => 
            array (
                'id' => 2386,
                'nome' => 'Caputira',
                'idEstado' => 13,
            ),
            386 => 
            array (
                'id' => 2387,
                'nome' => 'Caraí',
                'idEstado' => 13,
            ),
            387 => 
            array (
                'id' => 2388,
                'nome' => 'Caranaíba',
                'idEstado' => 13,
            ),
            388 => 
            array (
                'id' => 2389,
                'nome' => 'Carandaí',
                'idEstado' => 13,
            ),
            389 => 
            array (
                'id' => 2390,
                'nome' => 'Carangola',
                'idEstado' => 13,
            ),
            390 => 
            array (
                'id' => 2391,
                'nome' => 'Caratinga',
                'idEstado' => 13,
            ),
            391 => 
            array (
                'id' => 2392,
                'nome' => 'Carbonita',
                'idEstado' => 13,
            ),
            392 => 
            array (
                'id' => 2393,
                'nome' => 'Careaçu',
                'idEstado' => 13,
            ),
            393 => 
            array (
                'id' => 2394,
                'nome' => 'Carlos Chagas',
                'idEstado' => 13,
            ),
            394 => 
            array (
                'id' => 2395,
                'nome' => 'Carmésia',
                'idEstado' => 13,
            ),
            395 => 
            array (
                'id' => 2396,
                'nome' => 'Carmo da Cachoeira',
                'idEstado' => 13,
            ),
            396 => 
            array (
                'id' => 2397,
                'nome' => 'Carmo da Mata',
                'idEstado' => 13,
            ),
            397 => 
            array (
                'id' => 2398,
                'nome' => 'Carmo de Minas',
                'idEstado' => 13,
            ),
            398 => 
            array (
                'id' => 2399,
                'nome' => 'Carmo do Cajuru',
                'idEstado' => 13,
            ),
            399 => 
            array (
                'id' => 2400,
                'nome' => 'Carmo do Paranaíba',
                'idEstado' => 13,
            ),
            400 => 
            array (
                'id' => 2401,
                'nome' => 'Carmo do Rio Claro',
                'idEstado' => 13,
            ),
            401 => 
            array (
                'id' => 2402,
                'nome' => 'Carmópolis de Minas',
                'idEstado' => 13,
            ),
            402 => 
            array (
                'id' => 2403,
                'nome' => 'Carneirinho',
                'idEstado' => 13,
            ),
            403 => 
            array (
                'id' => 2404,
                'nome' => 'Carrancas',
                'idEstado' => 13,
            ),
            404 => 
            array (
                'id' => 2405,
                'nome' => 'Carvalhópolis',
                'idEstado' => 13,
            ),
            405 => 
            array (
                'id' => 2406,
                'nome' => 'Carvalhos',
                'idEstado' => 13,
            ),
            406 => 
            array (
                'id' => 2407,
                'nome' => 'Casa Grande',
                'idEstado' => 13,
            ),
            407 => 
            array (
                'id' => 2408,
                'nome' => 'Cascalho Rico',
                'idEstado' => 13,
            ),
            408 => 
            array (
                'id' => 2409,
                'nome' => 'Cássia',
                'idEstado' => 13,
            ),
            409 => 
            array (
                'id' => 2410,
                'nome' => 'Conceição da Barra de Minas',
                'idEstado' => 13,
            ),
            410 => 
            array (
                'id' => 2411,
                'nome' => 'Cataguases',
                'idEstado' => 13,
            ),
            411 => 
            array (
                'id' => 2412,
                'nome' => 'Catas Altas',
                'idEstado' => 13,
            ),
            412 => 
            array (
                'id' => 2413,
                'nome' => 'Catas Altas da Noruega',
                'idEstado' => 13,
            ),
            413 => 
            array (
                'id' => 2414,
                'nome' => 'Catuji',
                'idEstado' => 13,
            ),
            414 => 
            array (
                'id' => 2415,
                'nome' => 'Catuti',
                'idEstado' => 13,
            ),
            415 => 
            array (
                'id' => 2416,
                'nome' => 'Caxambu',
                'idEstado' => 13,
            ),
            416 => 
            array (
                'id' => 2417,
                'nome' => 'Cedro do Abaeté',
                'idEstado' => 13,
            ),
            417 => 
            array (
                'id' => 2418,
                'nome' => 'Central de Minas',
                'idEstado' => 13,
            ),
            418 => 
            array (
                'id' => 2419,
                'nome' => 'Centralina',
                'idEstado' => 13,
            ),
            419 => 
            array (
                'id' => 2420,
                'nome' => 'Chácara',
                'idEstado' => 13,
            ),
            420 => 
            array (
                'id' => 2421,
                'nome' => 'Chalé',
                'idEstado' => 13,
            ),
            421 => 
            array (
                'id' => 2422,
                'nome' => 'Chapada do Norte',
                'idEstado' => 13,
            ),
            422 => 
            array (
                'id' => 2423,
                'nome' => 'Chapada Gaúcha',
                'idEstado' => 13,
            ),
            423 => 
            array (
                'id' => 2424,
                'nome' => 'Chiador',
                'idEstado' => 13,
            ),
            424 => 
            array (
                'id' => 2425,
                'nome' => 'Cipotânea',
                'idEstado' => 13,
            ),
            425 => 
            array (
                'id' => 2426,
                'nome' => 'Claraval',
                'idEstado' => 13,
            ),
            426 => 
            array (
                'id' => 2427,
                'nome' => 'Claro dos Poções',
                'idEstado' => 13,
            ),
            427 => 
            array (
                'id' => 2428,
                'nome' => 'Cláudio',
                'idEstado' => 13,
            ),
            428 => 
            array (
                'id' => 2429,
                'nome' => 'Coimbra',
                'idEstado' => 13,
            ),
            429 => 
            array (
                'id' => 2430,
                'nome' => 'Coluna',
                'idEstado' => 13,
            ),
            430 => 
            array (
                'id' => 2431,
                'nome' => 'Comendador Gomes',
                'idEstado' => 13,
            ),
            431 => 
            array (
                'id' => 2432,
                'nome' => 'Comercinho',
                'idEstado' => 13,
            ),
            432 => 
            array (
                'id' => 2433,
                'nome' => 'Conceição da Aparecida',
                'idEstado' => 13,
            ),
            433 => 
            array (
                'id' => 2434,
                'nome' => 'Conceição das Pedras',
                'idEstado' => 13,
            ),
            434 => 
            array (
                'id' => 2435,
                'nome' => 'Conceição das Alagoas',
                'idEstado' => 13,
            ),
            435 => 
            array (
                'id' => 2436,
                'nome' => 'Conceição de Ipanema',
                'idEstado' => 13,
            ),
            436 => 
            array (
                'id' => 2437,
                'nome' => 'Conceição do Mato Dentro',
                'idEstado' => 13,
            ),
            437 => 
            array (
                'id' => 2438,
                'nome' => 'Conceição do Pará',
                'idEstado' => 13,
            ),
            438 => 
            array (
                'id' => 2439,
                'nome' => 'Conceição do Rio Verde',
                'idEstado' => 13,
            ),
            439 => 
            array (
                'id' => 2440,
                'nome' => 'Conceição dos Ouros',
                'idEstado' => 13,
            ),
            440 => 
            array (
                'id' => 2441,
                'nome' => 'Cônego Marinho',
                'idEstado' => 13,
            ),
            441 => 
            array (
                'id' => 2442,
                'nome' => 'Confins',
                'idEstado' => 13,
            ),
            442 => 
            array (
                'id' => 2443,
                'nome' => 'Congonhal',
                'idEstado' => 13,
            ),
            443 => 
            array (
                'id' => 2444,
                'nome' => 'Congonhas',
                'idEstado' => 13,
            ),
            444 => 
            array (
                'id' => 2445,
                'nome' => 'Congonhas do Norte',
                'idEstado' => 13,
            ),
            445 => 
            array (
                'id' => 2446,
                'nome' => 'Conquista',
                'idEstado' => 13,
            ),
            446 => 
            array (
                'id' => 2447,
                'nome' => 'Conselheiro Lafaiete',
                'idEstado' => 13,
            ),
            447 => 
            array (
                'id' => 2448,
                'nome' => 'Conselheiro Pena',
                'idEstado' => 13,
            ),
            448 => 
            array (
                'id' => 2449,
                'nome' => 'Consolação',
                'idEstado' => 13,
            ),
            449 => 
            array (
                'id' => 2450,
                'nome' => 'Contagem',
                'idEstado' => 13,
            ),
            450 => 
            array (
                'id' => 2451,
                'nome' => 'Coqueiral',
                'idEstado' => 13,
            ),
            451 => 
            array (
                'id' => 2452,
                'nome' => 'Coração de Jesus',
                'idEstado' => 13,
            ),
            452 => 
            array (
                'id' => 2453,
                'nome' => 'Cordisburgo',
                'idEstado' => 13,
            ),
            453 => 
            array (
                'id' => 2454,
                'nome' => 'Cordislândia',
                'idEstado' => 13,
            ),
            454 => 
            array (
                'id' => 2455,
                'nome' => 'Corinto',
                'idEstado' => 13,
            ),
            455 => 
            array (
                'id' => 2456,
                'nome' => 'Coroaci',
                'idEstado' => 13,
            ),
            456 => 
            array (
                'id' => 2457,
                'nome' => 'Coromandel',
                'idEstado' => 13,
            ),
            457 => 
            array (
                'id' => 2458,
                'nome' => 'Coronel Fabriciano',
                'idEstado' => 13,
            ),
            458 => 
            array (
                'id' => 2459,
                'nome' => 'Coronel Murta',
                'idEstado' => 13,
            ),
            459 => 
            array (
                'id' => 2460,
                'nome' => 'Coronel Pacheco',
                'idEstado' => 13,
            ),
            460 => 
            array (
                'id' => 2461,
                'nome' => 'Coronel Xavier Chaves',
                'idEstado' => 13,
            ),
            461 => 
            array (
                'id' => 2462,
                'nome' => 'Córrego Danta',
                'idEstado' => 13,
            ),
            462 => 
            array (
                'id' => 2463,
                'nome' => 'Córrego do Bom Jesus',
                'idEstado' => 13,
            ),
            463 => 
            array (
                'id' => 2464,
                'nome' => 'Córrego Fundo',
                'idEstado' => 13,
            ),
            464 => 
            array (
                'id' => 2465,
                'nome' => 'Córrego Novo',
                'idEstado' => 13,
            ),
            465 => 
            array (
                'id' => 2466,
                'nome' => 'Couto de Magalhães de Minas',
                'idEstado' => 13,
            ),
            466 => 
            array (
                'id' => 2467,
                'nome' => 'Crisólita',
                'idEstado' => 13,
            ),
            467 => 
            array (
                'id' => 2468,
                'nome' => 'Cristais',
                'idEstado' => 13,
            ),
            468 => 
            array (
                'id' => 2469,
                'nome' => 'Cristália',
                'idEstado' => 13,
            ),
            469 => 
            array (
                'id' => 2470,
                'nome' => 'Cristiano Otoni',
                'idEstado' => 13,
            ),
            470 => 
            array (
                'id' => 2471,
                'nome' => 'Cristina',
                'idEstado' => 13,
            ),
            471 => 
            array (
                'id' => 2472,
                'nome' => 'Crucilândia',
                'idEstado' => 13,
            ),
            472 => 
            array (
                'id' => 2473,
                'nome' => 'Cruzeiro da Fortaleza',
                'idEstado' => 13,
            ),
            473 => 
            array (
                'id' => 2474,
                'nome' => 'Cruzília',
                'idEstado' => 13,
            ),
            474 => 
            array (
                'id' => 2475,
                'nome' => 'Cuparaque',
                'idEstado' => 13,
            ),
            475 => 
            array (
                'id' => 2476,
                'nome' => 'Curral de Dentro',
                'idEstado' => 13,
            ),
            476 => 
            array (
                'id' => 2477,
                'nome' => 'Curvelo',
                'idEstado' => 13,
            ),
            477 => 
            array (
                'id' => 2478,
                'nome' => 'Datas',
                'idEstado' => 13,
            ),
            478 => 
            array (
                'id' => 2479,
                'nome' => 'Delfim Moreira',
                'idEstado' => 13,
            ),
            479 => 
            array (
                'id' => 2480,
                'nome' => 'Delfinópolis',
                'idEstado' => 13,
            ),
            480 => 
            array (
                'id' => 2481,
                'nome' => 'Delta',
                'idEstado' => 13,
            ),
            481 => 
            array (
                'id' => 2482,
                'nome' => 'Descoberto',
                'idEstado' => 13,
            ),
            482 => 
            array (
                'id' => 2483,
                'nome' => 'Desterro de Entre Rios',
                'idEstado' => 13,
            ),
            483 => 
            array (
                'id' => 2484,
                'nome' => 'Desterro do Melo',
                'idEstado' => 13,
            ),
            484 => 
            array (
                'id' => 2485,
                'nome' => 'Diamantina',
                'idEstado' => 13,
            ),
            485 => 
            array (
                'id' => 2486,
                'nome' => 'Diogo de Vasconcelos',
                'idEstado' => 13,
            ),
            486 => 
            array (
                'id' => 2487,
                'nome' => 'Dionísio',
                'idEstado' => 13,
            ),
            487 => 
            array (
                'id' => 2488,
                'nome' => 'Divinésia',
                'idEstado' => 13,
            ),
            488 => 
            array (
                'id' => 2489,
                'nome' => 'Divino',
                'idEstado' => 13,
            ),
            489 => 
            array (
                'id' => 2490,
                'nome' => 'Divino das Laranjeiras',
                'idEstado' => 13,
            ),
            490 => 
            array (
                'id' => 2491,
                'nome' => 'Divinolândia de Minas',
                'idEstado' => 13,
            ),
            491 => 
            array (
                'id' => 2492,
                'nome' => 'Divinópolis',
                'idEstado' => 13,
            ),
            492 => 
            array (
                'id' => 2493,
                'nome' => 'Divisa Alegre',
                'idEstado' => 13,
            ),
            493 => 
            array (
                'id' => 2494,
                'nome' => 'Divisa Nova',
                'idEstado' => 13,
            ),
            494 => 
            array (
                'id' => 2495,
                'nome' => 'Divisópolis',
                'idEstado' => 13,
            ),
            495 => 
            array (
                'id' => 2496,
                'nome' => 'Dom Bosco',
                'idEstado' => 13,
            ),
            496 => 
            array (
                'id' => 2497,
                'nome' => 'Dom Cavati',
                'idEstado' => 13,
            ),
            497 => 
            array (
                'id' => 2498,
                'nome' => 'Dom Joaquim',
                'idEstado' => 13,
            ),
            498 => 
            array (
                'id' => 2499,
                'nome' => 'Dom Silvério',
                'idEstado' => 13,
            ),
            499 => 
            array (
                'id' => 2500,
                'nome' => 'Dom Viçoso',
                'idEstado' => 13,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'nome' => 'Dona Eusébia',
                'idEstado' => 13,
            ),
            1 => 
            array (
                'id' => 2502,
                'nome' => 'Dores de Campos',
                'idEstado' => 13,
            ),
            2 => 
            array (
                'id' => 2503,
                'nome' => 'Dores de Guanhães',
                'idEstado' => 13,
            ),
            3 => 
            array (
                'id' => 2504,
                'nome' => 'Dores do Indaiá',
                'idEstado' => 13,
            ),
            4 => 
            array (
                'id' => 2505,
                'nome' => 'Dores do Turvo',
                'idEstado' => 13,
            ),
            5 => 
            array (
                'id' => 2506,
                'nome' => 'Doresópolis',
                'idEstado' => 13,
            ),
            6 => 
            array (
                'id' => 2507,
                'nome' => 'Douradoquara',
                'idEstado' => 13,
            ),
            7 => 
            array (
                'id' => 2508,
                'nome' => 'Durandé',
                'idEstado' => 13,
            ),
            8 => 
            array (
                'id' => 2509,
                'nome' => 'Elói Mendes',
                'idEstado' => 13,
            ),
            9 => 
            array (
                'id' => 2510,
                'nome' => 'Engenheiro Caldas',
                'idEstado' => 13,
            ),
            10 => 
            array (
                'id' => 2511,
                'nome' => 'Engenheiro Navarro',
                'idEstado' => 13,
            ),
            11 => 
            array (
                'id' => 2512,
                'nome' => 'Entre Folhas',
                'idEstado' => 13,
            ),
            12 => 
            array (
                'id' => 2513,
                'nome' => 'Entre Rios de Minas',
                'idEstado' => 13,
            ),
            13 => 
            array (
                'id' => 2514,
                'nome' => 'Ervália',
                'idEstado' => 13,
            ),
            14 => 
            array (
                'id' => 2515,
                'nome' => 'Esmeraldas',
                'idEstado' => 13,
            ),
            15 => 
            array (
                'id' => 2516,
                'nome' => 'Espera Feliz',
                'idEstado' => 13,
            ),
            16 => 
            array (
                'id' => 2517,
                'nome' => 'Espinosa',
                'idEstado' => 13,
            ),
            17 => 
            array (
                'id' => 2518,
                'nome' => 'Espírito Santo do Dourado',
                'idEstado' => 13,
            ),
            18 => 
            array (
                'id' => 2519,
                'nome' => 'Estiva',
                'idEstado' => 13,
            ),
            19 => 
            array (
                'id' => 2520,
                'nome' => 'Estrela Dalva',
                'idEstado' => 13,
            ),
            20 => 
            array (
                'id' => 2521,
                'nome' => 'Estrela do Indaiá',
                'idEstado' => 13,
            ),
            21 => 
            array (
                'id' => 2522,
                'nome' => 'Estrela do Sul',
                'idEstado' => 13,
            ),
            22 => 
            array (
                'id' => 2523,
                'nome' => 'Eugenópolis',
                'idEstado' => 13,
            ),
            23 => 
            array (
                'id' => 2524,
                'nome' => 'Ewbank da Câmara',
                'idEstado' => 13,
            ),
            24 => 
            array (
                'id' => 2525,
                'nome' => 'Extrema',
                'idEstado' => 13,
            ),
            25 => 
            array (
                'id' => 2526,
                'nome' => 'Fama',
                'idEstado' => 13,
            ),
            26 => 
            array (
                'id' => 2527,
                'nome' => 'Faria Lemos',
                'idEstado' => 13,
            ),
            27 => 
            array (
                'id' => 2528,
                'nome' => 'Felício dos Santos',
                'idEstado' => 13,
            ),
            28 => 
            array (
                'id' => 2529,
                'nome' => 'São Gonçalo do Rio Preto',
                'idEstado' => 13,
            ),
            29 => 
            array (
                'id' => 2530,
                'nome' => 'Felisburgo',
                'idEstado' => 13,
            ),
            30 => 
            array (
                'id' => 2531,
                'nome' => 'Felixlândia',
                'idEstado' => 13,
            ),
            31 => 
            array (
                'id' => 2532,
                'nome' => 'Fernandes Tourinho',
                'idEstado' => 13,
            ),
            32 => 
            array (
                'id' => 2533,
                'nome' => 'Ferros',
                'idEstado' => 13,
            ),
            33 => 
            array (
                'id' => 2534,
                'nome' => 'Fervedouro',
                'idEstado' => 13,
            ),
            34 => 
            array (
                'id' => 2535,
                'nome' => 'Florestal',
                'idEstado' => 13,
            ),
            35 => 
            array (
                'id' => 2536,
                'nome' => 'Formiga',
                'idEstado' => 13,
            ),
            36 => 
            array (
                'id' => 2537,
                'nome' => 'Formoso',
                'idEstado' => 13,
            ),
            37 => 
            array (
                'id' => 2538,
                'nome' => 'Fortaleza de Minas',
                'idEstado' => 13,
            ),
            38 => 
            array (
                'id' => 2539,
                'nome' => 'Fortuna de Minas',
                'idEstado' => 13,
            ),
            39 => 
            array (
                'id' => 2540,
                'nome' => 'Francisco Badaró',
                'idEstado' => 13,
            ),
            40 => 
            array (
                'id' => 2541,
                'nome' => 'Francisco Dumont',
                'idEstado' => 13,
            ),
            41 => 
            array (
                'id' => 2542,
                'nome' => 'Francisco Sá',
                'idEstado' => 13,
            ),
            42 => 
            array (
                'id' => 2543,
                'nome' => 'Franciscópolis',
                'idEstado' => 13,
            ),
            43 => 
            array (
                'id' => 2544,
                'nome' => 'Frei Gaspar',
                'idEstado' => 13,
            ),
            44 => 
            array (
                'id' => 2545,
                'nome' => 'Frei Inocêncio',
                'idEstado' => 13,
            ),
            45 => 
            array (
                'id' => 2546,
                'nome' => 'Frei Lagonegro',
                'idEstado' => 13,
            ),
            46 => 
            array (
                'id' => 2547,
                'nome' => 'Fronteira',
                'idEstado' => 13,
            ),
            47 => 
            array (
                'id' => 2548,
                'nome' => 'Fronteira dos Vales',
                'idEstado' => 13,
            ),
            48 => 
            array (
                'id' => 2549,
                'nome' => 'Fruta de Leite',
                'idEstado' => 13,
            ),
            49 => 
            array (
                'id' => 2550,
                'nome' => 'Frutal',
                'idEstado' => 13,
            ),
            50 => 
            array (
                'id' => 2551,
                'nome' => 'Funilândia',
                'idEstado' => 13,
            ),
            51 => 
            array (
                'id' => 2552,
                'nome' => 'Galiléia',
                'idEstado' => 13,
            ),
            52 => 
            array (
                'id' => 2553,
                'nome' => 'Gameleiras',
                'idEstado' => 13,
            ),
            53 => 
            array (
                'id' => 2554,
                'nome' => 'Glaucilândia',
                'idEstado' => 13,
            ),
            54 => 
            array (
                'id' => 2555,
                'nome' => 'Goiabeira',
                'idEstado' => 13,
            ),
            55 => 
            array (
                'id' => 2556,
                'nome' => 'Goianá',
                'idEstado' => 13,
            ),
            56 => 
            array (
                'id' => 2557,
                'nome' => 'Gonçalves',
                'idEstado' => 13,
            ),
            57 => 
            array (
                'id' => 2558,
                'nome' => 'Gonzaga',
                'idEstado' => 13,
            ),
            58 => 
            array (
                'id' => 2559,
                'nome' => 'Gouveia',
                'idEstado' => 13,
            ),
            59 => 
            array (
                'id' => 2560,
                'nome' => 'Governador Valadares',
                'idEstado' => 13,
            ),
            60 => 
            array (
                'id' => 2561,
                'nome' => 'Grão Mogol',
                'idEstado' => 13,
            ),
            61 => 
            array (
                'id' => 2562,
                'nome' => 'Grupiara',
                'idEstado' => 13,
            ),
            62 => 
            array (
                'id' => 2563,
                'nome' => 'Guanhães',
                'idEstado' => 13,
            ),
            63 => 
            array (
                'id' => 2564,
                'nome' => 'Guapé',
                'idEstado' => 13,
            ),
            64 => 
            array (
                'id' => 2565,
                'nome' => 'Guaraciaba',
                'idEstado' => 13,
            ),
            65 => 
            array (
                'id' => 2566,
                'nome' => 'Guaraciama',
                'idEstado' => 13,
            ),
            66 => 
            array (
                'id' => 2567,
                'nome' => 'Guaranésia',
                'idEstado' => 13,
            ),
            67 => 
            array (
                'id' => 2568,
                'nome' => 'Guarani',
                'idEstado' => 13,
            ),
            68 => 
            array (
                'id' => 2569,
                'nome' => 'Guarará',
                'idEstado' => 13,
            ),
            69 => 
            array (
                'id' => 2570,
                'nome' => 'Guarda-Mor',
                'idEstado' => 13,
            ),
            70 => 
            array (
                'id' => 2571,
                'nome' => 'Guaxupé',
                'idEstado' => 13,
            ),
            71 => 
            array (
                'id' => 2572,
                'nome' => 'Guidoval',
                'idEstado' => 13,
            ),
            72 => 
            array (
                'id' => 2573,
                'nome' => 'Guimarânia',
                'idEstado' => 13,
            ),
            73 => 
            array (
                'id' => 2574,
                'nome' => 'Guiricema',
                'idEstado' => 13,
            ),
            74 => 
            array (
                'id' => 2575,
                'nome' => 'Gurinhatã',
                'idEstado' => 13,
            ),
            75 => 
            array (
                'id' => 2576,
                'nome' => 'Heliodora',
                'idEstado' => 13,
            ),
            76 => 
            array (
                'id' => 2577,
                'nome' => 'Iapu',
                'idEstado' => 13,
            ),
            77 => 
            array (
                'id' => 2578,
                'nome' => 'Ibertioga',
                'idEstado' => 13,
            ),
            78 => 
            array (
                'id' => 2579,
                'nome' => 'Ibiá',
                'idEstado' => 13,
            ),
            79 => 
            array (
                'id' => 2580,
                'nome' => 'Ibiaí',
                'idEstado' => 13,
            ),
            80 => 
            array (
                'id' => 2581,
                'nome' => 'Ibiracatu',
                'idEstado' => 13,
            ),
            81 => 
            array (
                'id' => 2582,
                'nome' => 'Ibiraci',
                'idEstado' => 13,
            ),
            82 => 
            array (
                'id' => 2583,
                'nome' => 'Ibirité',
                'idEstado' => 13,
            ),
            83 => 
            array (
                'id' => 2584,
                'nome' => 'Ibitiúra de Minas',
                'idEstado' => 13,
            ),
            84 => 
            array (
                'id' => 2585,
                'nome' => 'Ibituruna',
                'idEstado' => 13,
            ),
            85 => 
            array (
                'id' => 2586,
                'nome' => 'Icaraí de Minas',
                'idEstado' => 13,
            ),
            86 => 
            array (
                'id' => 2587,
                'nome' => 'Igarapé',
                'idEstado' => 13,
            ),
            87 => 
            array (
                'id' => 2588,
                'nome' => 'Igaratinga',
                'idEstado' => 13,
            ),
            88 => 
            array (
                'id' => 2589,
                'nome' => 'Iguatama',
                'idEstado' => 13,
            ),
            89 => 
            array (
                'id' => 2590,
                'nome' => 'Ijaci',
                'idEstado' => 13,
            ),
            90 => 
            array (
                'id' => 2591,
                'nome' => 'Ilicínea',
                'idEstado' => 13,
            ),
            91 => 
            array (
                'id' => 2592,
                'nome' => 'Imbé de Minas',
                'idEstado' => 13,
            ),
            92 => 
            array (
                'id' => 2593,
                'nome' => 'Inconfidentes',
                'idEstado' => 13,
            ),
            93 => 
            array (
                'id' => 2594,
                'nome' => 'Indaiabira',
                'idEstado' => 13,
            ),
            94 => 
            array (
                'id' => 2595,
                'nome' => 'Indianópolis',
                'idEstado' => 13,
            ),
            95 => 
            array (
                'id' => 2596,
                'nome' => 'Ingaí',
                'idEstado' => 13,
            ),
            96 => 
            array (
                'id' => 2597,
                'nome' => 'Inhapim',
                'idEstado' => 13,
            ),
            97 => 
            array (
                'id' => 2598,
                'nome' => 'Inhaúma',
                'idEstado' => 13,
            ),
            98 => 
            array (
                'id' => 2599,
                'nome' => 'Inimutaba',
                'idEstado' => 13,
            ),
            99 => 
            array (
                'id' => 2600,
                'nome' => 'Ipaba',
                'idEstado' => 13,
            ),
            100 => 
            array (
                'id' => 2601,
                'nome' => 'Ipanema',
                'idEstado' => 13,
            ),
            101 => 
            array (
                'id' => 2602,
                'nome' => 'Ipatinga',
                'idEstado' => 13,
            ),
            102 => 
            array (
                'id' => 2603,
                'nome' => 'Ipiaçu',
                'idEstado' => 13,
            ),
            103 => 
            array (
                'id' => 2604,
                'nome' => 'Ipuiúna',
                'idEstado' => 13,
            ),
            104 => 
            array (
                'id' => 2605,
                'nome' => 'Iraí de Minas',
                'idEstado' => 13,
            ),
            105 => 
            array (
                'id' => 2606,
                'nome' => 'Itabira',
                'idEstado' => 13,
            ),
            106 => 
            array (
                'id' => 2607,
                'nome' => 'Itabirinha',
                'idEstado' => 13,
            ),
            107 => 
            array (
                'id' => 2608,
                'nome' => 'Itabirito',
                'idEstado' => 13,
            ),
            108 => 
            array (
                'id' => 2609,
                'nome' => 'Itacambira',
                'idEstado' => 13,
            ),
            109 => 
            array (
                'id' => 2610,
                'nome' => 'Itacarambi',
                'idEstado' => 13,
            ),
            110 => 
            array (
                'id' => 2611,
                'nome' => 'Itaguara',
                'idEstado' => 13,
            ),
            111 => 
            array (
                'id' => 2612,
                'nome' => 'Itaipé',
                'idEstado' => 13,
            ),
            112 => 
            array (
                'id' => 2613,
                'nome' => 'Itajubá',
                'idEstado' => 13,
            ),
            113 => 
            array (
                'id' => 2614,
                'nome' => 'Itamarandiba',
                'idEstado' => 13,
            ),
            114 => 
            array (
                'id' => 2615,
                'nome' => 'Itamarati de Minas',
                'idEstado' => 13,
            ),
            115 => 
            array (
                'id' => 2616,
                'nome' => 'Itambacuri',
                'idEstado' => 13,
            ),
            116 => 
            array (
                'id' => 2617,
                'nome' => 'Itambé do Mato Dentro',
                'idEstado' => 13,
            ),
            117 => 
            array (
                'id' => 2618,
                'nome' => 'Itamogi',
                'idEstado' => 13,
            ),
            118 => 
            array (
                'id' => 2619,
                'nome' => 'Itamonte',
                'idEstado' => 13,
            ),
            119 => 
            array (
                'id' => 2620,
                'nome' => 'Itanhandu',
                'idEstado' => 13,
            ),
            120 => 
            array (
                'id' => 2621,
                'nome' => 'Itanhomi',
                'idEstado' => 13,
            ),
            121 => 
            array (
                'id' => 2622,
                'nome' => 'Itaobim',
                'idEstado' => 13,
            ),
            122 => 
            array (
                'id' => 2623,
                'nome' => 'Itapagipe',
                'idEstado' => 13,
            ),
            123 => 
            array (
                'id' => 2624,
                'nome' => 'Itapecerica',
                'idEstado' => 13,
            ),
            124 => 
            array (
                'id' => 2625,
                'nome' => 'Itapeva',
                'idEstado' => 13,
            ),
            125 => 
            array (
                'id' => 2626,
                'nome' => 'Itatiaiuçu',
                'idEstado' => 13,
            ),
            126 => 
            array (
                'id' => 2627,
                'nome' => 'Itaú de Minas',
                'idEstado' => 13,
            ),
            127 => 
            array (
                'id' => 2628,
                'nome' => 'Itaúna',
                'idEstado' => 13,
            ),
            128 => 
            array (
                'id' => 2629,
                'nome' => 'Itaverava',
                'idEstado' => 13,
            ),
            129 => 
            array (
                'id' => 2630,
                'nome' => 'Itinga',
                'idEstado' => 13,
            ),
            130 => 
            array (
                'id' => 2631,
                'nome' => 'Itueta',
                'idEstado' => 13,
            ),
            131 => 
            array (
                'id' => 2632,
                'nome' => 'Ituiutaba',
                'idEstado' => 13,
            ),
            132 => 
            array (
                'id' => 2633,
                'nome' => 'Itumirim',
                'idEstado' => 13,
            ),
            133 => 
            array (
                'id' => 2634,
                'nome' => 'Iturama',
                'idEstado' => 13,
            ),
            134 => 
            array (
                'id' => 2635,
                'nome' => 'Itutinga',
                'idEstado' => 13,
            ),
            135 => 
            array (
                'id' => 2636,
                'nome' => 'Jaboticatubas',
                'idEstado' => 13,
            ),
            136 => 
            array (
                'id' => 2637,
                'nome' => 'Jacinto',
                'idEstado' => 13,
            ),
            137 => 
            array (
                'id' => 2638,
                'nome' => 'Jacuí',
                'idEstado' => 13,
            ),
            138 => 
            array (
                'id' => 2639,
                'nome' => 'Jacutinga',
                'idEstado' => 13,
            ),
            139 => 
            array (
                'id' => 2640,
                'nome' => 'Jaguaraçu',
                'idEstado' => 13,
            ),
            140 => 
            array (
                'id' => 2641,
                'nome' => 'Jaíba',
                'idEstado' => 13,
            ),
            141 => 
            array (
                'id' => 2642,
                'nome' => 'Jampruca',
                'idEstado' => 13,
            ),
            142 => 
            array (
                'id' => 2643,
                'nome' => 'Janaúba',
                'idEstado' => 13,
            ),
            143 => 
            array (
                'id' => 2644,
                'nome' => 'Januária',
                'idEstado' => 13,
            ),
            144 => 
            array (
                'id' => 2645,
                'nome' => 'Japaraíba',
                'idEstado' => 13,
            ),
            145 => 
            array (
                'id' => 2646,
                'nome' => 'Japonvar',
                'idEstado' => 13,
            ),
            146 => 
            array (
                'id' => 2647,
                'nome' => 'Jeceaba',
                'idEstado' => 13,
            ),
            147 => 
            array (
                'id' => 2648,
                'nome' => 'Jenipapo de Minas',
                'idEstado' => 13,
            ),
            148 => 
            array (
                'id' => 2649,
                'nome' => 'Jequeri',
                'idEstado' => 13,
            ),
            149 => 
            array (
                'id' => 2650,
                'nome' => 'Jequitaí',
                'idEstado' => 13,
            ),
            150 => 
            array (
                'id' => 2651,
                'nome' => 'Jequitibá',
                'idEstado' => 13,
            ),
            151 => 
            array (
                'id' => 2652,
                'nome' => 'Jequitinhonha',
                'idEstado' => 13,
            ),
            152 => 
            array (
                'id' => 2653,
                'nome' => 'Jesuânia',
                'idEstado' => 13,
            ),
            153 => 
            array (
                'id' => 2654,
                'nome' => 'Joaíma',
                'idEstado' => 13,
            ),
            154 => 
            array (
                'id' => 2655,
                'nome' => 'Joanésia',
                'idEstado' => 13,
            ),
            155 => 
            array (
                'id' => 2656,
                'nome' => 'João Monlevade',
                'idEstado' => 13,
            ),
            156 => 
            array (
                'id' => 2657,
                'nome' => 'João Pinheiro',
                'idEstado' => 13,
            ),
            157 => 
            array (
                'id' => 2658,
                'nome' => 'Joaquim Felício',
                'idEstado' => 13,
            ),
            158 => 
            array (
                'id' => 2659,
                'nome' => 'Jordânia',
                'idEstado' => 13,
            ),
            159 => 
            array (
                'id' => 2660,
                'nome' => 'José Gonçalves de Minas',
                'idEstado' => 13,
            ),
            160 => 
            array (
                'id' => 2661,
                'nome' => 'José Raydan',
                'idEstado' => 13,
            ),
            161 => 
            array (
                'id' => 2662,
                'nome' => 'Josenópolis',
                'idEstado' => 13,
            ),
            162 => 
            array (
                'id' => 2663,
                'nome' => 'Nova União',
                'idEstado' => 13,
            ),
            163 => 
            array (
                'id' => 2664,
                'nome' => 'Juatuba',
                'idEstado' => 13,
            ),
            164 => 
            array (
                'id' => 2665,
                'nome' => 'Juiz de Fora',
                'idEstado' => 13,
            ),
            165 => 
            array (
                'id' => 2666,
                'nome' => 'Juramento',
                'idEstado' => 13,
            ),
            166 => 
            array (
                'id' => 2667,
                'nome' => 'Juruaia',
                'idEstado' => 13,
            ),
            167 => 
            array (
                'id' => 2668,
                'nome' => 'Juvenília',
                'idEstado' => 13,
            ),
            168 => 
            array (
                'id' => 2669,
                'nome' => 'Ladainha',
                'idEstado' => 13,
            ),
            169 => 
            array (
                'id' => 2670,
                'nome' => 'Lagamar',
                'idEstado' => 13,
            ),
            170 => 
            array (
                'id' => 2671,
                'nome' => 'Lagoa da Prata',
                'idEstado' => 13,
            ),
            171 => 
            array (
                'id' => 2672,
                'nome' => 'Lagoa dos Patos',
                'idEstado' => 13,
            ),
            172 => 
            array (
                'id' => 2673,
                'nome' => 'Lagoa Dourada',
                'idEstado' => 13,
            ),
            173 => 
            array (
                'id' => 2674,
                'nome' => 'Lagoa Formosa',
                'idEstado' => 13,
            ),
            174 => 
            array (
                'id' => 2675,
                'nome' => 'Lagoa Grande',
                'idEstado' => 13,
            ),
            175 => 
            array (
                'id' => 2676,
                'nome' => 'Lagoa Santa',
                'idEstado' => 13,
            ),
            176 => 
            array (
                'id' => 2677,
                'nome' => 'Lajinha',
                'idEstado' => 13,
            ),
            177 => 
            array (
                'id' => 2678,
                'nome' => 'Lambari',
                'idEstado' => 13,
            ),
            178 => 
            array (
                'id' => 2679,
                'nome' => 'Lamim',
                'idEstado' => 13,
            ),
            179 => 
            array (
                'id' => 2680,
                'nome' => 'Laranjal',
                'idEstado' => 13,
            ),
            180 => 
            array (
                'id' => 2681,
                'nome' => 'Lassance',
                'idEstado' => 13,
            ),
            181 => 
            array (
                'id' => 2682,
                'nome' => 'Lavras',
                'idEstado' => 13,
            ),
            182 => 
            array (
                'id' => 2683,
                'nome' => 'Leandro Ferreira',
                'idEstado' => 13,
            ),
            183 => 
            array (
                'id' => 2684,
                'nome' => 'Leme do Prado',
                'idEstado' => 13,
            ),
            184 => 
            array (
                'id' => 2685,
                'nome' => 'Leopoldina',
                'idEstado' => 13,
            ),
            185 => 
            array (
                'id' => 2686,
                'nome' => 'Liberdade',
                'idEstado' => 13,
            ),
            186 => 
            array (
                'id' => 2687,
                'nome' => 'Lima Duarte',
                'idEstado' => 13,
            ),
            187 => 
            array (
                'id' => 2688,
                'nome' => 'Limeira do Oeste',
                'idEstado' => 13,
            ),
            188 => 
            array (
                'id' => 2689,
                'nome' => 'Lontra',
                'idEstado' => 13,
            ),
            189 => 
            array (
                'id' => 2690,
                'nome' => 'Luisburgo',
                'idEstado' => 13,
            ),
            190 => 
            array (
                'id' => 2691,
                'nome' => 'Luislândia',
                'idEstado' => 13,
            ),
            191 => 
            array (
                'id' => 2692,
                'nome' => 'Luminárias',
                'idEstado' => 13,
            ),
            192 => 
            array (
                'id' => 2693,
                'nome' => 'Luz',
                'idEstado' => 13,
            ),
            193 => 
            array (
                'id' => 2694,
                'nome' => 'Machacalis',
                'idEstado' => 13,
            ),
            194 => 
            array (
                'id' => 2695,
                'nome' => 'Machado',
                'idEstado' => 13,
            ),
            195 => 
            array (
                'id' => 2696,
                'nome' => 'Madre de Deus de Minas',
                'idEstado' => 13,
            ),
            196 => 
            array (
                'id' => 2697,
                'nome' => 'Malacacheta',
                'idEstado' => 13,
            ),
            197 => 
            array (
                'id' => 2698,
                'nome' => 'Mamonas',
                'idEstado' => 13,
            ),
            198 => 
            array (
                'id' => 2699,
                'nome' => 'Manga',
                'idEstado' => 13,
            ),
            199 => 
            array (
                'id' => 2700,
                'nome' => 'Manhuaçu',
                'idEstado' => 13,
            ),
            200 => 
            array (
                'id' => 2701,
                'nome' => 'Manhumirim',
                'idEstado' => 13,
            ),
            201 => 
            array (
                'id' => 2702,
                'nome' => 'Mantena',
                'idEstado' => 13,
            ),
            202 => 
            array (
                'id' => 2703,
                'nome' => 'Maravilhas',
                'idEstado' => 13,
            ),
            203 => 
            array (
                'id' => 2704,
                'nome' => 'Mar de Espanha',
                'idEstado' => 13,
            ),
            204 => 
            array (
                'id' => 2705,
                'nome' => 'Maria da Fé',
                'idEstado' => 13,
            ),
            205 => 
            array (
                'id' => 2706,
                'nome' => 'Mariana',
                'idEstado' => 13,
            ),
            206 => 
            array (
                'id' => 2707,
                'nome' => 'Marilac',
                'idEstado' => 13,
            ),
            207 => 
            array (
                'id' => 2708,
                'nome' => 'Mário Campos',
                'idEstado' => 13,
            ),
            208 => 
            array (
                'id' => 2709,
                'nome' => 'Maripá de Minas',
                'idEstado' => 13,
            ),
            209 => 
            array (
                'id' => 2710,
                'nome' => 'Marliéria',
                'idEstado' => 13,
            ),
            210 => 
            array (
                'id' => 2711,
                'nome' => 'Marmelópolis',
                'idEstado' => 13,
            ),
            211 => 
            array (
                'id' => 2712,
                'nome' => 'Martinho Campos',
                'idEstado' => 13,
            ),
            212 => 
            array (
                'id' => 2713,
                'nome' => 'Martins Soares',
                'idEstado' => 13,
            ),
            213 => 
            array (
                'id' => 2714,
                'nome' => 'Mata Verde',
                'idEstado' => 13,
            ),
            214 => 
            array (
                'id' => 2715,
                'nome' => 'Materlândia',
                'idEstado' => 13,
            ),
            215 => 
            array (
                'id' => 2716,
                'nome' => 'Mateus Leme',
                'idEstado' => 13,
            ),
            216 => 
            array (
                'id' => 2717,
                'nome' => 'Matias Barbosa',
                'idEstado' => 13,
            ),
            217 => 
            array (
                'id' => 2718,
                'nome' => 'Matias Cardoso',
                'idEstado' => 13,
            ),
            218 => 
            array (
                'id' => 2719,
                'nome' => 'Matipó',
                'idEstado' => 13,
            ),
            219 => 
            array (
                'id' => 2720,
                'nome' => 'Mato Verde',
                'idEstado' => 13,
            ),
            220 => 
            array (
                'id' => 2721,
                'nome' => 'Matozinhos',
                'idEstado' => 13,
            ),
            221 => 
            array (
                'id' => 2722,
                'nome' => 'Matutina',
                'idEstado' => 13,
            ),
            222 => 
            array (
                'id' => 2723,
                'nome' => 'Medeiros',
                'idEstado' => 13,
            ),
            223 => 
            array (
                'id' => 2724,
                'nome' => 'Medina',
                'idEstado' => 13,
            ),
            224 => 
            array (
                'id' => 2725,
                'nome' => 'Mendes Pimentel',
                'idEstado' => 13,
            ),
            225 => 
            array (
                'id' => 2726,
                'nome' => 'Mercês',
                'idEstado' => 13,
            ),
            226 => 
            array (
                'id' => 2727,
                'nome' => 'Mesquita',
                'idEstado' => 13,
            ),
            227 => 
            array (
                'id' => 2728,
                'nome' => 'Minas Novas',
                'idEstado' => 13,
            ),
            228 => 
            array (
                'id' => 2729,
                'nome' => 'Minduri',
                'idEstado' => 13,
            ),
            229 => 
            array (
                'id' => 2730,
                'nome' => 'Mirabela',
                'idEstado' => 13,
            ),
            230 => 
            array (
                'id' => 2731,
                'nome' => 'Miradouro',
                'idEstado' => 13,
            ),
            231 => 
            array (
                'id' => 2732,
                'nome' => 'Miraí',
                'idEstado' => 13,
            ),
            232 => 
            array (
                'id' => 2733,
                'nome' => 'Miravânia',
                'idEstado' => 13,
            ),
            233 => 
            array (
                'id' => 2734,
                'nome' => 'Moeda',
                'idEstado' => 13,
            ),
            234 => 
            array (
                'id' => 2735,
                'nome' => 'Moema',
                'idEstado' => 13,
            ),
            235 => 
            array (
                'id' => 2736,
                'nome' => 'Monjolos',
                'idEstado' => 13,
            ),
            236 => 
            array (
                'id' => 2737,
                'nome' => 'Monsenhor Paulo',
                'idEstado' => 13,
            ),
            237 => 
            array (
                'id' => 2738,
                'nome' => 'Montalvânia',
                'idEstado' => 13,
            ),
            238 => 
            array (
                'id' => 2739,
                'nome' => 'Monte Alegre de Minas',
                'idEstado' => 13,
            ),
            239 => 
            array (
                'id' => 2740,
                'nome' => 'Monte Azul',
                'idEstado' => 13,
            ),
            240 => 
            array (
                'id' => 2741,
                'nome' => 'Monte Belo',
                'idEstado' => 13,
            ),
            241 => 
            array (
                'id' => 2742,
                'nome' => 'Monte Carmelo',
                'idEstado' => 13,
            ),
            242 => 
            array (
                'id' => 2743,
                'nome' => 'Monte Formoso',
                'idEstado' => 13,
            ),
            243 => 
            array (
                'id' => 2744,
                'nome' => 'Monte Santo de Minas',
                'idEstado' => 13,
            ),
            244 => 
            array (
                'id' => 2745,
                'nome' => 'Montes Claros',
                'idEstado' => 13,
            ),
            245 => 
            array (
                'id' => 2746,
                'nome' => 'Monte Sião',
                'idEstado' => 13,
            ),
            246 => 
            array (
                'id' => 2747,
                'nome' => 'Montezuma',
                'idEstado' => 13,
            ),
            247 => 
            array (
                'id' => 2748,
                'nome' => 'Morada Nova de Minas',
                'idEstado' => 13,
            ),
            248 => 
            array (
                'id' => 2749,
                'nome' => 'Morro da Garça',
                'idEstado' => 13,
            ),
            249 => 
            array (
                'id' => 2750,
                'nome' => 'Morro do Pilar',
                'idEstado' => 13,
            ),
            250 => 
            array (
                'id' => 2751,
                'nome' => 'Munhoz',
                'idEstado' => 13,
            ),
            251 => 
            array (
                'id' => 2752,
                'nome' => 'Muriaé',
                'idEstado' => 13,
            ),
            252 => 
            array (
                'id' => 2753,
                'nome' => 'Mutum',
                'idEstado' => 13,
            ),
            253 => 
            array (
                'id' => 2754,
                'nome' => 'Muzambinho',
                'idEstado' => 13,
            ),
            254 => 
            array (
                'id' => 2755,
                'nome' => 'Nacip Raydan',
                'idEstado' => 13,
            ),
            255 => 
            array (
                'id' => 2756,
                'nome' => 'Nanuque',
                'idEstado' => 13,
            ),
            256 => 
            array (
                'id' => 2757,
                'nome' => 'Naque',
                'idEstado' => 13,
            ),
            257 => 
            array (
                'id' => 2758,
                'nome' => 'Natalândia',
                'idEstado' => 13,
            ),
            258 => 
            array (
                'id' => 2759,
                'nome' => 'Natércia',
                'idEstado' => 13,
            ),
            259 => 
            array (
                'id' => 2760,
                'nome' => 'Nazareno',
                'idEstado' => 13,
            ),
            260 => 
            array (
                'id' => 2761,
                'nome' => 'Nepomuceno',
                'idEstado' => 13,
            ),
            261 => 
            array (
                'id' => 2762,
                'nome' => 'Ninheira',
                'idEstado' => 13,
            ),
            262 => 
            array (
                'id' => 2763,
                'nome' => 'Nova Belém',
                'idEstado' => 13,
            ),
            263 => 
            array (
                'id' => 2764,
                'nome' => 'Nova Era',
                'idEstado' => 13,
            ),
            264 => 
            array (
                'id' => 2765,
                'nome' => 'Nova Lima',
                'idEstado' => 13,
            ),
            265 => 
            array (
                'id' => 2766,
                'nome' => 'Nova Módica',
                'idEstado' => 13,
            ),
            266 => 
            array (
                'id' => 2767,
                'nome' => 'Nova Ponte',
                'idEstado' => 13,
            ),
            267 => 
            array (
                'id' => 2768,
                'nome' => 'Nova Porteirinha',
                'idEstado' => 13,
            ),
            268 => 
            array (
                'id' => 2769,
                'nome' => 'Nova Resende',
                'idEstado' => 13,
            ),
            269 => 
            array (
                'id' => 2770,
                'nome' => 'Nova Serrana',
                'idEstado' => 13,
            ),
            270 => 
            array (
                'id' => 2771,
                'nome' => 'Novo Cruzeiro',
                'idEstado' => 13,
            ),
            271 => 
            array (
                'id' => 2772,
                'nome' => 'Novo Oriente de Minas',
                'idEstado' => 13,
            ),
            272 => 
            array (
                'id' => 2773,
                'nome' => 'Novorizonte',
                'idEstado' => 13,
            ),
            273 => 
            array (
                'id' => 2774,
                'nome' => 'Olaria',
                'idEstado' => 13,
            ),
            274 => 
            array (
                'id' => 2775,
                'nome' => 'Olhos-D\'Água',
                'idEstado' => 13,
            ),
            275 => 
            array (
                'id' => 2776,
                'nome' => 'Olímpio Noronha',
                'idEstado' => 13,
            ),
            276 => 
            array (
                'id' => 2777,
                'nome' => 'Oliveira',
                'idEstado' => 13,
            ),
            277 => 
            array (
                'id' => 2778,
                'nome' => 'Oliveira Fortes',
                'idEstado' => 13,
            ),
            278 => 
            array (
                'id' => 2779,
                'nome' => 'Onça de Pitangui',
                'idEstado' => 13,
            ),
            279 => 
            array (
                'id' => 2780,
                'nome' => 'Oratórios',
                'idEstado' => 13,
            ),
            280 => 
            array (
                'id' => 2781,
                'nome' => 'Orizânia',
                'idEstado' => 13,
            ),
            281 => 
            array (
                'id' => 2782,
                'nome' => 'Ouro Branco',
                'idEstado' => 13,
            ),
            282 => 
            array (
                'id' => 2783,
                'nome' => 'Ouro Fino',
                'idEstado' => 13,
            ),
            283 => 
            array (
                'id' => 2784,
                'nome' => 'Ouro Preto',
                'idEstado' => 13,
            ),
            284 => 
            array (
                'id' => 2785,
                'nome' => 'Ouro Verde de Minas',
                'idEstado' => 13,
            ),
            285 => 
            array (
                'id' => 2786,
                'nome' => 'Padre Carvalho',
                'idEstado' => 13,
            ),
            286 => 
            array (
                'id' => 2787,
                'nome' => 'Padre Paraíso',
                'idEstado' => 13,
            ),
            287 => 
            array (
                'id' => 2788,
                'nome' => 'Paineiras',
                'idEstado' => 13,
            ),
            288 => 
            array (
                'id' => 2789,
                'nome' => 'Pains',
                'idEstado' => 13,
            ),
            289 => 
            array (
                'id' => 2790,
                'nome' => 'Pai Pedro',
                'idEstado' => 13,
            ),
            290 => 
            array (
                'id' => 2791,
                'nome' => 'Paiva',
                'idEstado' => 13,
            ),
            291 => 
            array (
                'id' => 2792,
                'nome' => 'Palma',
                'idEstado' => 13,
            ),
            292 => 
            array (
                'id' => 2793,
                'nome' => 'Palmópolis',
                'idEstado' => 13,
            ),
            293 => 
            array (
                'id' => 2794,
                'nome' => 'Papagaios',
                'idEstado' => 13,
            ),
            294 => 
            array (
                'id' => 2795,
                'nome' => 'Paracatu',
                'idEstado' => 13,
            ),
            295 => 
            array (
                'id' => 2796,
                'nome' => 'Pará de Minas',
                'idEstado' => 13,
            ),
            296 => 
            array (
                'id' => 2797,
                'nome' => 'Paraguaçu',
                'idEstado' => 13,
            ),
            297 => 
            array (
                'id' => 2798,
                'nome' => 'Paraisópolis',
                'idEstado' => 13,
            ),
            298 => 
            array (
                'id' => 2799,
                'nome' => 'Paraopeba',
                'idEstado' => 13,
            ),
            299 => 
            array (
                'id' => 2800,
                'nome' => 'Passabém',
                'idEstado' => 13,
            ),
            300 => 
            array (
                'id' => 2801,
                'nome' => 'Passa Quatro',
                'idEstado' => 13,
            ),
            301 => 
            array (
                'id' => 2802,
                'nome' => 'Passa Tempo',
                'idEstado' => 13,
            ),
            302 => 
            array (
                'id' => 2803,
                'nome' => 'Passa-Vinte',
                'idEstado' => 13,
            ),
            303 => 
            array (
                'id' => 2804,
                'nome' => 'Passos',
                'idEstado' => 13,
            ),
            304 => 
            array (
                'id' => 2805,
                'nome' => 'Patis',
                'idEstado' => 13,
            ),
            305 => 
            array (
                'id' => 2806,
                'nome' => 'Patos de Minas',
                'idEstado' => 13,
            ),
            306 => 
            array (
                'id' => 2807,
                'nome' => 'Patrocínio',
                'idEstado' => 13,
            ),
            307 => 
            array (
                'id' => 2808,
                'nome' => 'Patrocínio do Muriaé',
                'idEstado' => 13,
            ),
            308 => 
            array (
                'id' => 2809,
                'nome' => 'Paula Cândido',
                'idEstado' => 13,
            ),
            309 => 
            array (
                'id' => 2810,
                'nome' => 'Paulistas',
                'idEstado' => 13,
            ),
            310 => 
            array (
                'id' => 2811,
                'nome' => 'Pavão',
                'idEstado' => 13,
            ),
            311 => 
            array (
                'id' => 2812,
                'nome' => 'Peçanha',
                'idEstado' => 13,
            ),
            312 => 
            array (
                'id' => 2813,
                'nome' => 'Pedra Azul',
                'idEstado' => 13,
            ),
            313 => 
            array (
                'id' => 2814,
                'nome' => 'Pedra Bonita',
                'idEstado' => 13,
            ),
            314 => 
            array (
                'id' => 2815,
                'nome' => 'Pedra do Anta',
                'idEstado' => 13,
            ),
            315 => 
            array (
                'id' => 2816,
                'nome' => 'Pedra do Indaiá',
                'idEstado' => 13,
            ),
            316 => 
            array (
                'id' => 2817,
                'nome' => 'Pedra Dourada',
                'idEstado' => 13,
            ),
            317 => 
            array (
                'id' => 2818,
                'nome' => 'Pedralva',
                'idEstado' => 13,
            ),
            318 => 
            array (
                'id' => 2819,
                'nome' => 'Pedras de Maria da Cruz',
                'idEstado' => 13,
            ),
            319 => 
            array (
                'id' => 2820,
                'nome' => 'Pedrinópolis',
                'idEstado' => 13,
            ),
            320 => 
            array (
                'id' => 2821,
                'nome' => 'Pedro Leopoldo',
                'idEstado' => 13,
            ),
            321 => 
            array (
                'id' => 2822,
                'nome' => 'Pedro Teixeira',
                'idEstado' => 13,
            ),
            322 => 
            array (
                'id' => 2823,
                'nome' => 'Pequeri',
                'idEstado' => 13,
            ),
            323 => 
            array (
                'id' => 2824,
                'nome' => 'Pequi',
                'idEstado' => 13,
            ),
            324 => 
            array (
                'id' => 2825,
                'nome' => 'Perdigão',
                'idEstado' => 13,
            ),
            325 => 
            array (
                'id' => 2826,
                'nome' => 'Perdizes',
                'idEstado' => 13,
            ),
            326 => 
            array (
                'id' => 2827,
                'nome' => 'Perdões',
                'idEstado' => 13,
            ),
            327 => 
            array (
                'id' => 2828,
                'nome' => 'Periquito',
                'idEstado' => 13,
            ),
            328 => 
            array (
                'id' => 2829,
                'nome' => 'Pescador',
                'idEstado' => 13,
            ),
            329 => 
            array (
                'id' => 2830,
                'nome' => 'Piau',
                'idEstado' => 13,
            ),
            330 => 
            array (
                'id' => 2831,
                'nome' => 'Piedade de Caratinga',
                'idEstado' => 13,
            ),
            331 => 
            array (
                'id' => 2832,
                'nome' => 'Piedade de Ponte Nova',
                'idEstado' => 13,
            ),
            332 => 
            array (
                'id' => 2833,
                'nome' => 'Piedade do Rio Grande',
                'idEstado' => 13,
            ),
            333 => 
            array (
                'id' => 2834,
                'nome' => 'Piedade dos Gerais',
                'idEstado' => 13,
            ),
            334 => 
            array (
                'id' => 2835,
                'nome' => 'Pimenta',
                'idEstado' => 13,
            ),
            335 => 
            array (
                'id' => 2836,
                'nome' => 'Pingo-D\'Água',
                'idEstado' => 13,
            ),
            336 => 
            array (
                'id' => 2837,
                'nome' => 'Pintópolis',
                'idEstado' => 13,
            ),
            337 => 
            array (
                'id' => 2838,
                'nome' => 'Piracema',
                'idEstado' => 13,
            ),
            338 => 
            array (
                'id' => 2839,
                'nome' => 'Pirajuba',
                'idEstado' => 13,
            ),
            339 => 
            array (
                'id' => 2840,
                'nome' => 'Piranga',
                'idEstado' => 13,
            ),
            340 => 
            array (
                'id' => 2841,
                'nome' => 'Piranguçu',
                'idEstado' => 13,
            ),
            341 => 
            array (
                'id' => 2842,
                'nome' => 'Piranguinho',
                'idEstado' => 13,
            ),
            342 => 
            array (
                'id' => 2843,
                'nome' => 'Pirapetinga',
                'idEstado' => 13,
            ),
            343 => 
            array (
                'id' => 2844,
                'nome' => 'Pirapora',
                'idEstado' => 13,
            ),
            344 => 
            array (
                'id' => 2845,
                'nome' => 'Piraúba',
                'idEstado' => 13,
            ),
            345 => 
            array (
                'id' => 2846,
                'nome' => 'Pitangui',
                'idEstado' => 13,
            ),
            346 => 
            array (
                'id' => 2847,
                'nome' => 'Piumhi',
                'idEstado' => 13,
            ),
            347 => 
            array (
                'id' => 2848,
                'nome' => 'Planura',
                'idEstado' => 13,
            ),
            348 => 
            array (
                'id' => 2849,
                'nome' => 'Poço Fundo',
                'idEstado' => 13,
            ),
            349 => 
            array (
                'id' => 2850,
                'nome' => 'Poços de Caldas',
                'idEstado' => 13,
            ),
            350 => 
            array (
                'id' => 2851,
                'nome' => 'Pocrane',
                'idEstado' => 13,
            ),
            351 => 
            array (
                'id' => 2852,
                'nome' => 'Pompéu',
                'idEstado' => 13,
            ),
            352 => 
            array (
                'id' => 2853,
                'nome' => 'Ponte Nova',
                'idEstado' => 13,
            ),
            353 => 
            array (
                'id' => 2854,
                'nome' => 'Ponto Chique',
                'idEstado' => 13,
            ),
            354 => 
            array (
                'id' => 2855,
                'nome' => 'Ponto dos Volantes',
                'idEstado' => 13,
            ),
            355 => 
            array (
                'id' => 2856,
                'nome' => 'Porteirinha',
                'idEstado' => 13,
            ),
            356 => 
            array (
                'id' => 2857,
                'nome' => 'Porto Firme',
                'idEstado' => 13,
            ),
            357 => 
            array (
                'id' => 2858,
                'nome' => 'Poté',
                'idEstado' => 13,
            ),
            358 => 
            array (
                'id' => 2859,
                'nome' => 'Pouso Alegre',
                'idEstado' => 13,
            ),
            359 => 
            array (
                'id' => 2860,
                'nome' => 'Pouso Alto',
                'idEstado' => 13,
            ),
            360 => 
            array (
                'id' => 2861,
                'nome' => 'Prados',
                'idEstado' => 13,
            ),
            361 => 
            array (
                'id' => 2862,
                'nome' => 'Prata',
                'idEstado' => 13,
            ),
            362 => 
            array (
                'id' => 2863,
                'nome' => 'Pratápolis',
                'idEstado' => 13,
            ),
            363 => 
            array (
                'id' => 2864,
                'nome' => 'Pratinha',
                'idEstado' => 13,
            ),
            364 => 
            array (
                'id' => 2865,
                'nome' => 'Presidente Bernardes',
                'idEstado' => 13,
            ),
            365 => 
            array (
                'id' => 2866,
                'nome' => 'Presidente Juscelino',
                'idEstado' => 13,
            ),
            366 => 
            array (
                'id' => 2867,
                'nome' => 'Presidente Kubitschek',
                'idEstado' => 13,
            ),
            367 => 
            array (
                'id' => 2868,
                'nome' => 'Presidente Olegário',
                'idEstado' => 13,
            ),
            368 => 
            array (
                'id' => 2869,
                'nome' => 'Alto Jequitibá',
                'idEstado' => 13,
            ),
            369 => 
            array (
                'id' => 2870,
                'nome' => 'Prudente de Morais',
                'idEstado' => 13,
            ),
            370 => 
            array (
                'id' => 2871,
                'nome' => 'Quartel Geral',
                'idEstado' => 13,
            ),
            371 => 
            array (
                'id' => 2872,
                'nome' => 'Queluzito',
                'idEstado' => 13,
            ),
            372 => 
            array (
                'id' => 2873,
                'nome' => 'Raposos',
                'idEstado' => 13,
            ),
            373 => 
            array (
                'id' => 2874,
                'nome' => 'Raul Soares',
                'idEstado' => 13,
            ),
            374 => 
            array (
                'id' => 2875,
                'nome' => 'Recreio',
                'idEstado' => 13,
            ),
            375 => 
            array (
                'id' => 2876,
                'nome' => 'Reduto',
                'idEstado' => 13,
            ),
            376 => 
            array (
                'id' => 2877,
                'nome' => 'Resende Costa',
                'idEstado' => 13,
            ),
            377 => 
            array (
                'id' => 2878,
                'nome' => 'Resplendor',
                'idEstado' => 13,
            ),
            378 => 
            array (
                'id' => 2879,
                'nome' => 'Ressaquinha',
                'idEstado' => 13,
            ),
            379 => 
            array (
                'id' => 2880,
                'nome' => 'Riachinho',
                'idEstado' => 13,
            ),
            380 => 
            array (
                'id' => 2881,
                'nome' => 'Riacho dos Machados',
                'idEstado' => 13,
            ),
            381 => 
            array (
                'id' => 2882,
                'nome' => 'Ribeirão das Neves',
                'idEstado' => 13,
            ),
            382 => 
            array (
                'id' => 2883,
                'nome' => 'Ribeirão Vermelho',
                'idEstado' => 13,
            ),
            383 => 
            array (
                'id' => 2884,
                'nome' => 'Rio Acima',
                'idEstado' => 13,
            ),
            384 => 
            array (
                'id' => 2885,
                'nome' => 'Rio Casca',
                'idEstado' => 13,
            ),
            385 => 
            array (
                'id' => 2886,
                'nome' => 'Rio Doce',
                'idEstado' => 13,
            ),
            386 => 
            array (
                'id' => 2887,
                'nome' => 'Rio do Prado',
                'idEstado' => 13,
            ),
            387 => 
            array (
                'id' => 2888,
                'nome' => 'Rio Espera',
                'idEstado' => 13,
            ),
            388 => 
            array (
                'id' => 2889,
                'nome' => 'Rio Manso',
                'idEstado' => 13,
            ),
            389 => 
            array (
                'id' => 2890,
                'nome' => 'Rio Novo',
                'idEstado' => 13,
            ),
            390 => 
            array (
                'id' => 2891,
                'nome' => 'Rio Paranaíba',
                'idEstado' => 13,
            ),
            391 => 
            array (
                'id' => 2892,
                'nome' => 'Rio Pardo de Minas',
                'idEstado' => 13,
            ),
            392 => 
            array (
                'id' => 2893,
                'nome' => 'Rio Piracicaba',
                'idEstado' => 13,
            ),
            393 => 
            array (
                'id' => 2894,
                'nome' => 'Rio Pomba',
                'idEstado' => 13,
            ),
            394 => 
            array (
                'id' => 2895,
                'nome' => 'Rio Preto',
                'idEstado' => 13,
            ),
            395 => 
            array (
                'id' => 2896,
                'nome' => 'Rio Vermelho',
                'idEstado' => 13,
            ),
            396 => 
            array (
                'id' => 2897,
                'nome' => 'Ritápolis',
                'idEstado' => 13,
            ),
            397 => 
            array (
                'id' => 2898,
                'nome' => 'Rochedo de Minas',
                'idEstado' => 13,
            ),
            398 => 
            array (
                'id' => 2899,
                'nome' => 'Rodeiro',
                'idEstado' => 13,
            ),
            399 => 
            array (
                'id' => 2900,
                'nome' => 'Romaria',
                'idEstado' => 13,
            ),
            400 => 
            array (
                'id' => 2901,
                'nome' => 'Rosário da Limeira',
                'idEstado' => 13,
            ),
            401 => 
            array (
                'id' => 2902,
                'nome' => 'Rubelita',
                'idEstado' => 13,
            ),
            402 => 
            array (
                'id' => 2903,
                'nome' => 'Rubim',
                'idEstado' => 13,
            ),
            403 => 
            array (
                'id' => 2904,
                'nome' => 'Sabará',
                'idEstado' => 13,
            ),
            404 => 
            array (
                'id' => 2905,
                'nome' => 'Sabinópolis',
                'idEstado' => 13,
            ),
            405 => 
            array (
                'id' => 2906,
                'nome' => 'Sacramento',
                'idEstado' => 13,
            ),
            406 => 
            array (
                'id' => 2907,
                'nome' => 'Salinas',
                'idEstado' => 13,
            ),
            407 => 
            array (
                'id' => 2908,
                'nome' => 'Salto da Divisa',
                'idEstado' => 13,
            ),
            408 => 
            array (
                'id' => 2909,
                'nome' => 'Santa Bárbara',
                'idEstado' => 13,
            ),
            409 => 
            array (
                'id' => 2910,
                'nome' => 'Santa Bárbara do Leste',
                'idEstado' => 13,
            ),
            410 => 
            array (
                'id' => 2911,
                'nome' => 'Santa Bárbara do Monte Verde',
                'idEstado' => 13,
            ),
            411 => 
            array (
                'id' => 2912,
                'nome' => 'Santa Bárbara do Tugúrio',
                'idEstado' => 13,
            ),
            412 => 
            array (
                'id' => 2913,
                'nome' => 'Santa Cruz de Minas',
                'idEstado' => 13,
            ),
            413 => 
            array (
                'id' => 2914,
                'nome' => 'Santa Cruz de Salinas',
                'idEstado' => 13,
            ),
            414 => 
            array (
                'id' => 2915,
                'nome' => 'Santa Cruz do Escalvado',
                'idEstado' => 13,
            ),
            415 => 
            array (
                'id' => 2916,
                'nome' => 'Santa Efigênia de Minas',
                'idEstado' => 13,
            ),
            416 => 
            array (
                'id' => 2917,
                'nome' => 'Santa Fé de Minas',
                'idEstado' => 13,
            ),
            417 => 
            array (
                'id' => 2918,
                'nome' => 'Santa Helena de Minas',
                'idEstado' => 13,
            ),
            418 => 
            array (
                'id' => 2919,
                'nome' => 'Santa Juliana',
                'idEstado' => 13,
            ),
            419 => 
            array (
                'id' => 2920,
                'nome' => 'Santa Luzia',
                'idEstado' => 13,
            ),
            420 => 
            array (
                'id' => 2921,
                'nome' => 'Santa Margarida',
                'idEstado' => 13,
            ),
            421 => 
            array (
                'id' => 2922,
                'nome' => 'Santa Maria de Itabira',
                'idEstado' => 13,
            ),
            422 => 
            array (
                'id' => 2923,
                'nome' => 'Santa Maria do Salto',
                'idEstado' => 13,
            ),
            423 => 
            array (
                'id' => 2924,
                'nome' => 'Santa Maria do Suaçuí',
                'idEstado' => 13,
            ),
            424 => 
            array (
                'id' => 2925,
                'nome' => 'Santana da Vargem',
                'idEstado' => 13,
            ),
            425 => 
            array (
                'id' => 2926,
                'nome' => 'Santana de Cataguases',
                'idEstado' => 13,
            ),
            426 => 
            array (
                'id' => 2927,
                'nome' => 'Santana de Pirapama',
                'idEstado' => 13,
            ),
            427 => 
            array (
                'id' => 2928,
                'nome' => 'Santana do Deserto',
                'idEstado' => 13,
            ),
            428 => 
            array (
                'id' => 2929,
                'nome' => 'Santana do Garambéu',
                'idEstado' => 13,
            ),
            429 => 
            array (
                'id' => 2930,
                'nome' => 'Santana do Jacaré',
                'idEstado' => 13,
            ),
            430 => 
            array (
                'id' => 2931,
                'nome' => 'Santana do Manhuaçu',
                'idEstado' => 13,
            ),
            431 => 
            array (
                'id' => 2932,
                'nome' => 'Santana do Paraíso',
                'idEstado' => 13,
            ),
            432 => 
            array (
                'id' => 2933,
                'nome' => 'Santana do Riacho',
                'idEstado' => 13,
            ),
            433 => 
            array (
                'id' => 2934,
                'nome' => 'Santana dos Montes',
                'idEstado' => 13,
            ),
            434 => 
            array (
                'id' => 2935,
                'nome' => 'Santa Rita de Caldas',
                'idEstado' => 13,
            ),
            435 => 
            array (
                'id' => 2936,
                'nome' => 'Santa Rita de Jacutinga',
                'idEstado' => 13,
            ),
            436 => 
            array (
                'id' => 2937,
                'nome' => 'Santa Rita de Minas',
                'idEstado' => 13,
            ),
            437 => 
            array (
                'id' => 2938,
                'nome' => 'Santa Rita de Ibitipoca',
                'idEstado' => 13,
            ),
            438 => 
            array (
                'id' => 2939,
                'nome' => 'Santa Rita do Itueto',
                'idEstado' => 13,
            ),
            439 => 
            array (
                'id' => 2940,
                'nome' => 'Santa Rita do Sapucaí',
                'idEstado' => 13,
            ),
            440 => 
            array (
                'id' => 2941,
                'nome' => 'Santa Rosa da Serra',
                'idEstado' => 13,
            ),
            441 => 
            array (
                'id' => 2942,
                'nome' => 'Santa Vitória',
                'idEstado' => 13,
            ),
            442 => 
            array (
                'id' => 2943,
                'nome' => 'Santo Antônio do Amparo',
                'idEstado' => 13,
            ),
            443 => 
            array (
                'id' => 2944,
                'nome' => 'Santo Antônio do Aventureiro',
                'idEstado' => 13,
            ),
            444 => 
            array (
                'id' => 2945,
                'nome' => 'Santo Antônio do Grama',
                'idEstado' => 13,
            ),
            445 => 
            array (
                'id' => 2946,
                'nome' => 'Santo Antônio do Itambé',
                'idEstado' => 13,
            ),
            446 => 
            array (
                'id' => 2947,
                'nome' => 'Santo Antônio do Jacinto',
                'idEstado' => 13,
            ),
            447 => 
            array (
                'id' => 2948,
                'nome' => 'Santo Antônio do Monte',
                'idEstado' => 13,
            ),
            448 => 
            array (
                'id' => 2949,
                'nome' => 'Santo Antônio do Retiro',
                'idEstado' => 13,
            ),
            449 => 
            array (
                'id' => 2950,
                'nome' => 'Santo Antônio do Rio Abaixo',
                'idEstado' => 13,
            ),
            450 => 
            array (
                'id' => 2951,
                'nome' => 'Santo Hipólito',
                'idEstado' => 13,
            ),
            451 => 
            array (
                'id' => 2952,
                'nome' => 'Santos Dumont',
                'idEstado' => 13,
            ),
            452 => 
            array (
                'id' => 2953,
                'nome' => 'São Bento Abade',
                'idEstado' => 13,
            ),
            453 => 
            array (
                'id' => 2954,
                'nome' => 'São Brás do Suaçuí',
                'idEstado' => 13,
            ),
            454 => 
            array (
                'id' => 2955,
                'nome' => 'São Domingos das Dores',
                'idEstado' => 13,
            ),
            455 => 
            array (
                'id' => 2956,
                'nome' => 'São Domingos do Prata',
                'idEstado' => 13,
            ),
            456 => 
            array (
                'id' => 2957,
                'nome' => 'São Félix de Minas',
                'idEstado' => 13,
            ),
            457 => 
            array (
                'id' => 2958,
                'nome' => 'São Francisco',
                'idEstado' => 13,
            ),
            458 => 
            array (
                'id' => 2959,
                'nome' => 'São Francisco de Paula',
                'idEstado' => 13,
            ),
            459 => 
            array (
                'id' => 2960,
                'nome' => 'São Francisco de Sales',
                'idEstado' => 13,
            ),
            460 => 
            array (
                'id' => 2961,
                'nome' => 'São Francisco do Glória',
                'idEstado' => 13,
            ),
            461 => 
            array (
                'id' => 2962,
                'nome' => 'São Geraldo',
                'idEstado' => 13,
            ),
            462 => 
            array (
                'id' => 2963,
                'nome' => 'São Geraldo da Piedade',
                'idEstado' => 13,
            ),
            463 => 
            array (
                'id' => 2964,
                'nome' => 'São Geraldo do Baixio',
                'idEstado' => 13,
            ),
            464 => 
            array (
                'id' => 2965,
                'nome' => 'São Gonçalo do Abaeté',
                'idEstado' => 13,
            ),
            465 => 
            array (
                'id' => 2966,
                'nome' => 'São Gonçalo do Pará',
                'idEstado' => 13,
            ),
            466 => 
            array (
                'id' => 2967,
                'nome' => 'São Gonçalo do Rio Abaixo',
                'idEstado' => 13,
            ),
            467 => 
            array (
                'id' => 2968,
                'nome' => 'São Gonçalo do Sapucaí',
                'idEstado' => 13,
            ),
            468 => 
            array (
                'id' => 2969,
                'nome' => 'São Gotardo',
                'idEstado' => 13,
            ),
            469 => 
            array (
                'id' => 2970,
                'nome' => 'São João Batista do Glória',
                'idEstado' => 13,
            ),
            470 => 
            array (
                'id' => 2971,
                'nome' => 'São João da Lagoa',
                'idEstado' => 13,
            ),
            471 => 
            array (
                'id' => 2972,
                'nome' => 'São João da Mata',
                'idEstado' => 13,
            ),
            472 => 
            array (
                'id' => 2973,
                'nome' => 'São João da Ponte',
                'idEstado' => 13,
            ),
            473 => 
            array (
                'id' => 2974,
                'nome' => 'São João das Missões',
                'idEstado' => 13,
            ),
            474 => 
            array (
                'id' => 2975,
                'nome' => 'São João del Rei',
                'idEstado' => 13,
            ),
            475 => 
            array (
                'id' => 2976,
                'nome' => 'São João do Manhuaçu',
                'idEstado' => 13,
            ),
            476 => 
            array (
                'id' => 2977,
                'nome' => 'São João do Manteninha',
                'idEstado' => 13,
            ),
            477 => 
            array (
                'id' => 2978,
                'nome' => 'São João do Oriente',
                'idEstado' => 13,
            ),
            478 => 
            array (
                'id' => 2979,
                'nome' => 'São João do Pacuí',
                'idEstado' => 13,
            ),
            479 => 
            array (
                'id' => 2980,
                'nome' => 'São João do Paraíso',
                'idEstado' => 13,
            ),
            480 => 
            array (
                'id' => 2981,
                'nome' => 'São João Evangelista',
                'idEstado' => 13,
            ),
            481 => 
            array (
                'id' => 2982,
                'nome' => 'São João Nepomuceno',
                'idEstado' => 13,
            ),
            482 => 
            array (
                'id' => 2983,
                'nome' => 'São Joaquim de Bicas',
                'idEstado' => 13,
            ),
            483 => 
            array (
                'id' => 2984,
                'nome' => 'São José da Barra',
                'idEstado' => 13,
            ),
            484 => 
            array (
                'id' => 2985,
                'nome' => 'São José da Lapa',
                'idEstado' => 13,
            ),
            485 => 
            array (
                'id' => 2986,
                'nome' => 'São José da Safira',
                'idEstado' => 13,
            ),
            486 => 
            array (
                'id' => 2987,
                'nome' => 'São José da Varginha',
                'idEstado' => 13,
            ),
            487 => 
            array (
                'id' => 2988,
                'nome' => 'São José do Alegre',
                'idEstado' => 13,
            ),
            488 => 
            array (
                'id' => 2989,
                'nome' => 'São José do Divino',
                'idEstado' => 13,
            ),
            489 => 
            array (
                'id' => 2990,
                'nome' => 'São José do Goiabal',
                'idEstado' => 13,
            ),
            490 => 
            array (
                'id' => 2991,
                'nome' => 'São José do Jacuri',
                'idEstado' => 13,
            ),
            491 => 
            array (
                'id' => 2992,
                'nome' => 'São José do Mantimento',
                'idEstado' => 13,
            ),
            492 => 
            array (
                'id' => 2993,
                'nome' => 'São Lourenço',
                'idEstado' => 13,
            ),
            493 => 
            array (
                'id' => 2994,
                'nome' => 'São Miguel do Anta',
                'idEstado' => 13,
            ),
            494 => 
            array (
                'id' => 2995,
                'nome' => 'São Pedro da União',
                'idEstado' => 13,
            ),
            495 => 
            array (
                'id' => 2996,
                'nome' => 'São Pedro dos Ferros',
                'idEstado' => 13,
            ),
            496 => 
            array (
                'id' => 2997,
                'nome' => 'São Pedro do Suaçuí',
                'idEstado' => 13,
            ),
            497 => 
            array (
                'id' => 2998,
                'nome' => 'São Romão',
                'idEstado' => 13,
            ),
            498 => 
            array (
                'id' => 2999,
                'nome' => 'São Roque de Minas',
                'idEstado' => 13,
            ),
            499 => 
            array (
                'id' => 3000,
                'nome' => 'São Sebastião da Bela Vista',
                'idEstado' => 13,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'nome' => 'São Sebastião da Vargem Alegre',
                'idEstado' => 13,
            ),
            1 => 
            array (
                'id' => 3002,
                'nome' => 'São Sebastião do Anta',
                'idEstado' => 13,
            ),
            2 => 
            array (
                'id' => 3003,
                'nome' => 'São Sebastião do Maranhão',
                'idEstado' => 13,
            ),
            3 => 
            array (
                'id' => 3004,
                'nome' => 'São Sebastião do Oeste',
                'idEstado' => 13,
            ),
            4 => 
            array (
                'id' => 3005,
                'nome' => 'São Sebastião do Paraíso',
                'idEstado' => 13,
            ),
            5 => 
            array (
                'id' => 3006,
                'nome' => 'São Sebastião do Rio Preto',
                'idEstado' => 13,
            ),
            6 => 
            array (
                'id' => 3007,
                'nome' => 'São Sebastião do Rio Verde',
                'idEstado' => 13,
            ),
            7 => 
            array (
                'id' => 3008,
                'nome' => 'São Tiago',
                'idEstado' => 13,
            ),
            8 => 
            array (
                'id' => 3009,
                'nome' => 'São Tomás de Aquino',
                'idEstado' => 13,
            ),
            9 => 
            array (
                'id' => 3010,
                'nome' => 'São Thomé das Letras',
                'idEstado' => 13,
            ),
            10 => 
            array (
                'id' => 3011,
                'nome' => 'São Vicente de Minas',
                'idEstado' => 13,
            ),
            11 => 
            array (
                'id' => 3012,
                'nome' => 'Sapucaí-Mirim',
                'idEstado' => 13,
            ),
            12 => 
            array (
                'id' => 3013,
                'nome' => 'Sardoá',
                'idEstado' => 13,
            ),
            13 => 
            array (
                'id' => 3014,
                'nome' => 'Sarzedo',
                'idEstado' => 13,
            ),
            14 => 
            array (
                'id' => 3015,
                'nome' => 'Setubinha',
                'idEstado' => 13,
            ),
            15 => 
            array (
                'id' => 3016,
                'nome' => 'Sem-Peixe',
                'idEstado' => 13,
            ),
            16 => 
            array (
                'id' => 3017,
                'nome' => 'Senador Amaral',
                'idEstado' => 13,
            ),
            17 => 
            array (
                'id' => 3018,
                'nome' => 'Senador Cortes',
                'idEstado' => 13,
            ),
            18 => 
            array (
                'id' => 3019,
                'nome' => 'Senador Firmino',
                'idEstado' => 13,
            ),
            19 => 
            array (
                'id' => 3020,
                'nome' => 'Senador José Bento',
                'idEstado' => 13,
            ),
            20 => 
            array (
                'id' => 3021,
                'nome' => 'Senador Modestino Gonçalves',
                'idEstado' => 13,
            ),
            21 => 
            array (
                'id' => 3022,
                'nome' => 'Senhora de Oliveira',
                'idEstado' => 13,
            ),
            22 => 
            array (
                'id' => 3023,
                'nome' => 'Senhora do Porto',
                'idEstado' => 13,
            ),
            23 => 
            array (
                'id' => 3024,
                'nome' => 'Senhora dos Remédios',
                'idEstado' => 13,
            ),
            24 => 
            array (
                'id' => 3025,
                'nome' => 'Sericita',
                'idEstado' => 13,
            ),
            25 => 
            array (
                'id' => 3026,
                'nome' => 'Seritinga',
                'idEstado' => 13,
            ),
            26 => 
            array (
                'id' => 3027,
                'nome' => 'Serra Azul de Minas',
                'idEstado' => 13,
            ),
            27 => 
            array (
                'id' => 3028,
                'nome' => 'Serra da Saudade',
                'idEstado' => 13,
            ),
            28 => 
            array (
                'id' => 3029,
                'nome' => 'Serra dos Aimorés',
                'idEstado' => 13,
            ),
            29 => 
            array (
                'id' => 3030,
                'nome' => 'Serra do Salitre',
                'idEstado' => 13,
            ),
            30 => 
            array (
                'id' => 3031,
                'nome' => 'Serrania',
                'idEstado' => 13,
            ),
            31 => 
            array (
                'id' => 3032,
                'nome' => 'Serranópolis de Minas',
                'idEstado' => 13,
            ),
            32 => 
            array (
                'id' => 3033,
                'nome' => 'Serranos',
                'idEstado' => 13,
            ),
            33 => 
            array (
                'id' => 3034,
                'nome' => 'Serro',
                'idEstado' => 13,
            ),
            34 => 
            array (
                'id' => 3035,
                'nome' => 'Sete Lagoas',
                'idEstado' => 13,
            ),
            35 => 
            array (
                'id' => 3036,
                'nome' => 'Silveirânia',
                'idEstado' => 13,
            ),
            36 => 
            array (
                'id' => 3037,
                'nome' => 'Silvianópolis',
                'idEstado' => 13,
            ),
            37 => 
            array (
                'id' => 3038,
                'nome' => 'Simão Pereira',
                'idEstado' => 13,
            ),
            38 => 
            array (
                'id' => 3039,
                'nome' => 'Simonésia',
                'idEstado' => 13,
            ),
            39 => 
            array (
                'id' => 3040,
                'nome' => 'Sobrália',
                'idEstado' => 13,
            ),
            40 => 
            array (
                'id' => 3041,
                'nome' => 'Soledade de Minas',
                'idEstado' => 13,
            ),
            41 => 
            array (
                'id' => 3042,
                'nome' => 'Tabuleiro',
                'idEstado' => 13,
            ),
            42 => 
            array (
                'id' => 3043,
                'nome' => 'Taiobeiras',
                'idEstado' => 13,
            ),
            43 => 
            array (
                'id' => 3044,
                'nome' => 'Taparuba',
                'idEstado' => 13,
            ),
            44 => 
            array (
                'id' => 3045,
                'nome' => 'Tapira',
                'idEstado' => 13,
            ),
            45 => 
            array (
                'id' => 3046,
                'nome' => 'Tapiraí',
                'idEstado' => 13,
            ),
            46 => 
            array (
                'id' => 3047,
                'nome' => 'Taquaraçu de Minas',
                'idEstado' => 13,
            ),
            47 => 
            array (
                'id' => 3048,
                'nome' => 'Tarumirim',
                'idEstado' => 13,
            ),
            48 => 
            array (
                'id' => 3049,
                'nome' => 'Teixeiras',
                'idEstado' => 13,
            ),
            49 => 
            array (
                'id' => 3050,
                'nome' => 'Teófilo Otoni',
                'idEstado' => 13,
            ),
            50 => 
            array (
                'id' => 3051,
                'nome' => 'Timóteo',
                'idEstado' => 13,
            ),
            51 => 
            array (
                'id' => 3052,
                'nome' => 'Tiradentes',
                'idEstado' => 13,
            ),
            52 => 
            array (
                'id' => 3053,
                'nome' => 'Tiros',
                'idEstado' => 13,
            ),
            53 => 
            array (
                'id' => 3054,
                'nome' => 'Tocantins',
                'idEstado' => 13,
            ),
            54 => 
            array (
                'id' => 3055,
                'nome' => 'Tocos do Moji',
                'idEstado' => 13,
            ),
            55 => 
            array (
                'id' => 3056,
                'nome' => 'Toledo',
                'idEstado' => 13,
            ),
            56 => 
            array (
                'id' => 3057,
                'nome' => 'Tombos',
                'idEstado' => 13,
            ),
            57 => 
            array (
                'id' => 3058,
                'nome' => 'Três Corações',
                'idEstado' => 13,
            ),
            58 => 
            array (
                'id' => 3059,
                'nome' => 'Três Marias',
                'idEstado' => 13,
            ),
            59 => 
            array (
                'id' => 3060,
                'nome' => 'Três Pontas',
                'idEstado' => 13,
            ),
            60 => 
            array (
                'id' => 3061,
                'nome' => 'Tumiritinga',
                'idEstado' => 13,
            ),
            61 => 
            array (
                'id' => 3062,
                'nome' => 'Tupaciguara',
                'idEstado' => 13,
            ),
            62 => 
            array (
                'id' => 3063,
                'nome' => 'Turmalina',
                'idEstado' => 13,
            ),
            63 => 
            array (
                'id' => 3064,
                'nome' => 'Turvolândia',
                'idEstado' => 13,
            ),
            64 => 
            array (
                'id' => 3065,
                'nome' => 'Ubá',
                'idEstado' => 13,
            ),
            65 => 
            array (
                'id' => 3066,
                'nome' => 'Ubaí',
                'idEstado' => 13,
            ),
            66 => 
            array (
                'id' => 3067,
                'nome' => 'Ubaporanga',
                'idEstado' => 13,
            ),
            67 => 
            array (
                'id' => 3068,
                'nome' => 'Uberaba',
                'idEstado' => 13,
            ),
            68 => 
            array (
                'id' => 3069,
                'nome' => 'Uberlândia',
                'idEstado' => 13,
            ),
            69 => 
            array (
                'id' => 3070,
                'nome' => 'Umburatiba',
                'idEstado' => 13,
            ),
            70 => 
            array (
                'id' => 3071,
                'nome' => 'Unaí',
                'idEstado' => 13,
            ),
            71 => 
            array (
                'id' => 3072,
                'nome' => 'União de Minas',
                'idEstado' => 13,
            ),
            72 => 
            array (
                'id' => 3073,
                'nome' => 'Uruana de Minas',
                'idEstado' => 13,
            ),
            73 => 
            array (
                'id' => 3074,
                'nome' => 'Urucânia',
                'idEstado' => 13,
            ),
            74 => 
            array (
                'id' => 3075,
                'nome' => 'Urucuia',
                'idEstado' => 13,
            ),
            75 => 
            array (
                'id' => 3076,
                'nome' => 'Vargem Alegre',
                'idEstado' => 13,
            ),
            76 => 
            array (
                'id' => 3077,
                'nome' => 'Vargem Bonita',
                'idEstado' => 13,
            ),
            77 => 
            array (
                'id' => 3078,
                'nome' => 'Vargem Grande do Rio Pardo',
                'idEstado' => 13,
            ),
            78 => 
            array (
                'id' => 3079,
                'nome' => 'Varginha',
                'idEstado' => 13,
            ),
            79 => 
            array (
                'id' => 3080,
                'nome' => 'Varjão de Minas',
                'idEstado' => 13,
            ),
            80 => 
            array (
                'id' => 3081,
                'nome' => 'Várzea da Palma',
                'idEstado' => 13,
            ),
            81 => 
            array (
                'id' => 3082,
                'nome' => 'Varzelândia',
                'idEstado' => 13,
            ),
            82 => 
            array (
                'id' => 3083,
                'nome' => 'Vazante',
                'idEstado' => 13,
            ),
            83 => 
            array (
                'id' => 3084,
                'nome' => 'Verdelândia',
                'idEstado' => 13,
            ),
            84 => 
            array (
                'id' => 3085,
                'nome' => 'Veredinha',
                'idEstado' => 13,
            ),
            85 => 
            array (
                'id' => 3086,
                'nome' => 'Veríssimo',
                'idEstado' => 13,
            ),
            86 => 
            array (
                'id' => 3087,
                'nome' => 'Vermelho Novo',
                'idEstado' => 13,
            ),
            87 => 
            array (
                'id' => 3088,
                'nome' => 'Vespasiano',
                'idEstado' => 13,
            ),
            88 => 
            array (
                'id' => 3089,
                'nome' => 'Viçosa',
                'idEstado' => 13,
            ),
            89 => 
            array (
                'id' => 3090,
                'nome' => 'Vieiras',
                'idEstado' => 13,
            ),
            90 => 
            array (
                'id' => 3091,
                'nome' => 'Mathias Lobato',
                'idEstado' => 13,
            ),
            91 => 
            array (
                'id' => 3092,
                'nome' => 'Virgem da Lapa',
                'idEstado' => 13,
            ),
            92 => 
            array (
                'id' => 3093,
                'nome' => 'Virgínia',
                'idEstado' => 13,
            ),
            93 => 
            array (
                'id' => 3094,
                'nome' => 'Virginópolis',
                'idEstado' => 13,
            ),
            94 => 
            array (
                'id' => 3095,
                'nome' => 'Virgolândia',
                'idEstado' => 13,
            ),
            95 => 
            array (
                'id' => 3096,
                'nome' => 'Visconde do Rio Branco',
                'idEstado' => 13,
            ),
            96 => 
            array (
                'id' => 3097,
                'nome' => 'Volta Grande',
                'idEstado' => 13,
            ),
            97 => 
            array (
                'id' => 3098,
                'nome' => 'Wenceslau Braz',
                'idEstado' => 13,
            ),
            98 => 
            array (
                'id' => 3099,
                'nome' => 'Afonso Cláudio',
                'idEstado' => 8,
            ),
            99 => 
            array (
                'id' => 3100,
                'nome' => 'Águia Branca',
                'idEstado' => 8,
            ),
            100 => 
            array (
                'id' => 3101,
                'nome' => 'Água Doce do Norte',
                'idEstado' => 8,
            ),
            101 => 
            array (
                'id' => 3102,
                'nome' => 'Alegre',
                'idEstado' => 8,
            ),
            102 => 
            array (
                'id' => 3103,
                'nome' => 'Alfredo Chaves',
                'idEstado' => 8,
            ),
            103 => 
            array (
                'id' => 3104,
                'nome' => 'Alto Rio Novo',
                'idEstado' => 8,
            ),
            104 => 
            array (
                'id' => 3105,
                'nome' => 'Anchieta',
                'idEstado' => 8,
            ),
            105 => 
            array (
                'id' => 3106,
                'nome' => 'Apiacá',
                'idEstado' => 8,
            ),
            106 => 
            array (
                'id' => 3107,
                'nome' => 'Aracruz',
                'idEstado' => 8,
            ),
            107 => 
            array (
                'id' => 3108,
                'nome' => 'Atilio Vivacqua',
                'idEstado' => 8,
            ),
            108 => 
            array (
                'id' => 3109,
                'nome' => 'Baixo Guandu',
                'idEstado' => 8,
            ),
            109 => 
            array (
                'id' => 3110,
                'nome' => 'Barra de São Francisco',
                'idEstado' => 8,
            ),
            110 => 
            array (
                'id' => 3111,
                'nome' => 'Boa Esperança',
                'idEstado' => 8,
            ),
            111 => 
            array (
                'id' => 3112,
                'nome' => 'Bom Jesus do Norte',
                'idEstado' => 8,
            ),
            112 => 
            array (
                'id' => 3113,
                'nome' => 'Brejetuba',
                'idEstado' => 8,
            ),
            113 => 
            array (
                'id' => 3114,
                'nome' => 'Cachoeiro de Itapemirim',
                'idEstado' => 8,
            ),
            114 => 
            array (
                'id' => 3115,
                'nome' => 'Cariacica',
                'idEstado' => 8,
            ),
            115 => 
            array (
                'id' => 3116,
                'nome' => 'Castelo',
                'idEstado' => 8,
            ),
            116 => 
            array (
                'id' => 3117,
                'nome' => 'Colatina',
                'idEstado' => 8,
            ),
            117 => 
            array (
                'id' => 3118,
                'nome' => 'Conceição da Barra',
                'idEstado' => 8,
            ),
            118 => 
            array (
                'id' => 3119,
                'nome' => 'Conceição do Castelo',
                'idEstado' => 8,
            ),
            119 => 
            array (
                'id' => 3120,
                'nome' => 'Divino de São Lourenço',
                'idEstado' => 8,
            ),
            120 => 
            array (
                'id' => 3121,
                'nome' => 'Domingos Martins',
                'idEstado' => 8,
            ),
            121 => 
            array (
                'id' => 3122,
                'nome' => 'Dores do Rio Preto',
                'idEstado' => 8,
            ),
            122 => 
            array (
                'id' => 3123,
                'nome' => 'Ecoporanga',
                'idEstado' => 8,
            ),
            123 => 
            array (
                'id' => 3124,
                'nome' => 'Fundão',
                'idEstado' => 8,
            ),
            124 => 
            array (
                'id' => 3125,
                'nome' => 'Governador Lindenberg',
                'idEstado' => 8,
            ),
            125 => 
            array (
                'id' => 3126,
                'nome' => 'Guaçuí',
                'idEstado' => 8,
            ),
            126 => 
            array (
                'id' => 3127,
                'nome' => 'Guarapari',
                'idEstado' => 8,
            ),
            127 => 
            array (
                'id' => 3128,
                'nome' => 'Ibatiba',
                'idEstado' => 8,
            ),
            128 => 
            array (
                'id' => 3129,
                'nome' => 'Ibiraçu',
                'idEstado' => 8,
            ),
            129 => 
            array (
                'id' => 3130,
                'nome' => 'Ibitirama',
                'idEstado' => 8,
            ),
            130 => 
            array (
                'id' => 3131,
                'nome' => 'Iconha',
                'idEstado' => 8,
            ),
            131 => 
            array (
                'id' => 3132,
                'nome' => 'Irupi',
                'idEstado' => 8,
            ),
            132 => 
            array (
                'id' => 3133,
                'nome' => 'Itaguaçu',
                'idEstado' => 8,
            ),
            133 => 
            array (
                'id' => 3134,
                'nome' => 'Itapemirim',
                'idEstado' => 8,
            ),
            134 => 
            array (
                'id' => 3135,
                'nome' => 'Itarana',
                'idEstado' => 8,
            ),
            135 => 
            array (
                'id' => 3136,
                'nome' => 'Iúna',
                'idEstado' => 8,
            ),
            136 => 
            array (
                'id' => 3137,
                'nome' => 'Jaguaré',
                'idEstado' => 8,
            ),
            137 => 
            array (
                'id' => 3138,
                'nome' => 'Jerônimo Monteiro',
                'idEstado' => 8,
            ),
            138 => 
            array (
                'id' => 3139,
                'nome' => 'João Neiva',
                'idEstado' => 8,
            ),
            139 => 
            array (
                'id' => 3140,
                'nome' => 'Laranja da Terra',
                'idEstado' => 8,
            ),
            140 => 
            array (
                'id' => 3141,
                'nome' => 'Linhares',
                'idEstado' => 8,
            ),
            141 => 
            array (
                'id' => 3142,
                'nome' => 'Mantenópolis',
                'idEstado' => 8,
            ),
            142 => 
            array (
                'id' => 3143,
                'nome' => 'Marataízes',
                'idEstado' => 8,
            ),
            143 => 
            array (
                'id' => 3144,
                'nome' => 'Marechal Floriano',
                'idEstado' => 8,
            ),
            144 => 
            array (
                'id' => 3145,
                'nome' => 'Marilândia',
                'idEstado' => 8,
            ),
            145 => 
            array (
                'id' => 3146,
                'nome' => 'Mimoso do Sul',
                'idEstado' => 8,
            ),
            146 => 
            array (
                'id' => 3147,
                'nome' => 'Montanha',
                'idEstado' => 8,
            ),
            147 => 
            array (
                'id' => 3148,
                'nome' => 'Mucurici',
                'idEstado' => 8,
            ),
            148 => 
            array (
                'id' => 3149,
                'nome' => 'Muniz Freire',
                'idEstado' => 8,
            ),
            149 => 
            array (
                'id' => 3150,
                'nome' => 'Muqui',
                'idEstado' => 8,
            ),
            150 => 
            array (
                'id' => 3151,
                'nome' => 'Nova Venécia',
                'idEstado' => 8,
            ),
            151 => 
            array (
                'id' => 3152,
                'nome' => 'Pancas',
                'idEstado' => 8,
            ),
            152 => 
            array (
                'id' => 3153,
                'nome' => 'Pedro Canário',
                'idEstado' => 8,
            ),
            153 => 
            array (
                'id' => 3154,
                'nome' => 'Pinheiros',
                'idEstado' => 8,
            ),
            154 => 
            array (
                'id' => 3155,
                'nome' => 'Piúma',
                'idEstado' => 8,
            ),
            155 => 
            array (
                'id' => 3156,
                'nome' => 'Ponto Belo',
                'idEstado' => 8,
            ),
            156 => 
            array (
                'id' => 3157,
                'nome' => 'Presidente Kennedy',
                'idEstado' => 8,
            ),
            157 => 
            array (
                'id' => 3158,
                'nome' => 'Rio Bananal',
                'idEstado' => 8,
            ),
            158 => 
            array (
                'id' => 3159,
                'nome' => 'Rio Novo do Sul',
                'idEstado' => 8,
            ),
            159 => 
            array (
                'id' => 3160,
                'nome' => 'Santa Leopoldina',
                'idEstado' => 8,
            ),
            160 => 
            array (
                'id' => 3161,
                'nome' => 'Santa Maria de Jetibá',
                'idEstado' => 8,
            ),
            161 => 
            array (
                'id' => 3162,
                'nome' => 'Santa Teresa',
                'idEstado' => 8,
            ),
            162 => 
            array (
                'id' => 3163,
                'nome' => 'São Domingos do Norte',
                'idEstado' => 8,
            ),
            163 => 
            array (
                'id' => 3164,
                'nome' => 'São Gabriel da Palha',
                'idEstado' => 8,
            ),
            164 => 
            array (
                'id' => 3165,
                'nome' => 'São José do Calçado',
                'idEstado' => 8,
            ),
            165 => 
            array (
                'id' => 3166,
                'nome' => 'São Mateus',
                'idEstado' => 8,
            ),
            166 => 
            array (
                'id' => 3167,
                'nome' => 'São Roque do Canaã',
                'idEstado' => 8,
            ),
            167 => 
            array (
                'id' => 3168,
                'nome' => 'Serra',
                'idEstado' => 8,
            ),
            168 => 
            array (
                'id' => 3169,
                'nome' => 'Sooretama',
                'idEstado' => 8,
            ),
            169 => 
            array (
                'id' => 3170,
                'nome' => 'Vargem Alta',
                'idEstado' => 8,
            ),
            170 => 
            array (
                'id' => 3171,
                'nome' => 'Venda Nova do Imigrante',
                'idEstado' => 8,
            ),
            171 => 
            array (
                'id' => 3172,
                'nome' => 'Viana',
                'idEstado' => 8,
            ),
            172 => 
            array (
                'id' => 3173,
                'nome' => 'Vila Pavão',
                'idEstado' => 8,
            ),
            173 => 
            array (
                'id' => 3174,
                'nome' => 'Vila Valério',
                'idEstado' => 8,
            ),
            174 => 
            array (
                'id' => 3175,
                'nome' => 'Vila Velha',
                'idEstado' => 8,
            ),
            175 => 
            array (
                'id' => 3176,
                'nome' => 'Vitória',
                'idEstado' => 8,
            ),
            176 => 
            array (
                'id' => 3177,
                'nome' => 'Angra dos Reis',
                'idEstado' => 19,
            ),
            177 => 
            array (
                'id' => 3178,
                'nome' => 'Aperibé',
                'idEstado' => 19,
            ),
            178 => 
            array (
                'id' => 3179,
                'nome' => 'Araruama',
                'idEstado' => 19,
            ),
            179 => 
            array (
                'id' => 3180,
                'nome' => 'Areal',
                'idEstado' => 19,
            ),
            180 => 
            array (
                'id' => 3181,
                'nome' => 'Armação dos Búzios',
                'idEstado' => 19,
            ),
            181 => 
            array (
                'id' => 3182,
                'nome' => 'Arraial do Cabo',
                'idEstado' => 19,
            ),
            182 => 
            array (
                'id' => 3183,
                'nome' => 'Barra do Piraí',
                'idEstado' => 19,
            ),
            183 => 
            array (
                'id' => 3184,
                'nome' => 'Barra Mansa',
                'idEstado' => 19,
            ),
            184 => 
            array (
                'id' => 3185,
                'nome' => 'Belford Roxo',
                'idEstado' => 19,
            ),
            185 => 
            array (
                'id' => 3186,
                'nome' => 'Bom Jardim',
                'idEstado' => 19,
            ),
            186 => 
            array (
                'id' => 3187,
                'nome' => 'Bom Jesus do Itabapoana',
                'idEstado' => 19,
            ),
            187 => 
            array (
                'id' => 3188,
                'nome' => 'Cabo Frio',
                'idEstado' => 19,
            ),
            188 => 
            array (
                'id' => 3189,
                'nome' => 'Cachoeiras de Macacu',
                'idEstado' => 19,
            ),
            189 => 
            array (
                'id' => 3190,
                'nome' => 'Cambuci',
                'idEstado' => 19,
            ),
            190 => 
            array (
                'id' => 3191,
                'nome' => 'Carapebus',
                'idEstado' => 19,
            ),
            191 => 
            array (
                'id' => 3192,
                'nome' => 'Comendador Levy Gasparian',
                'idEstado' => 19,
            ),
            192 => 
            array (
                'id' => 3193,
                'nome' => 'Campos dos Goytacazes',
                'idEstado' => 19,
            ),
            193 => 
            array (
                'id' => 3194,
                'nome' => 'Cantagalo',
                'idEstado' => 19,
            ),
            194 => 
            array (
                'id' => 3195,
                'nome' => 'Cardoso Moreira',
                'idEstado' => 19,
            ),
            195 => 
            array (
                'id' => 3196,
                'nome' => 'Carmo',
                'idEstado' => 19,
            ),
            196 => 
            array (
                'id' => 3197,
                'nome' => 'Casimiro de Abreu',
                'idEstado' => 19,
            ),
            197 => 
            array (
                'id' => 3198,
                'nome' => 'Conceição de Macabu',
                'idEstado' => 19,
            ),
            198 => 
            array (
                'id' => 3199,
                'nome' => 'Cordeiro',
                'idEstado' => 19,
            ),
            199 => 
            array (
                'id' => 3200,
                'nome' => 'Duas Barras',
                'idEstado' => 19,
            ),
            200 => 
            array (
                'id' => 3201,
                'nome' => 'Duque de Caxias',
                'idEstado' => 19,
            ),
            201 => 
            array (
                'id' => 3202,
                'nome' => 'Engenheiro Paulo de Frontin',
                'idEstado' => 19,
            ),
            202 => 
            array (
                'id' => 3203,
                'nome' => 'Guapimirim',
                'idEstado' => 19,
            ),
            203 => 
            array (
                'id' => 3204,
                'nome' => 'Iguaba Grande',
                'idEstado' => 19,
            ),
            204 => 
            array (
                'id' => 3205,
                'nome' => 'Itaboraí',
                'idEstado' => 19,
            ),
            205 => 
            array (
                'id' => 3206,
                'nome' => 'Itaguaí',
                'idEstado' => 19,
            ),
            206 => 
            array (
                'id' => 3207,
                'nome' => 'Italva',
                'idEstado' => 19,
            ),
            207 => 
            array (
                'id' => 3208,
                'nome' => 'Itaocara',
                'idEstado' => 19,
            ),
            208 => 
            array (
                'id' => 3209,
                'nome' => 'Itaperuna',
                'idEstado' => 19,
            ),
            209 => 
            array (
                'id' => 3210,
                'nome' => 'Itatiaia',
                'idEstado' => 19,
            ),
            210 => 
            array (
                'id' => 3211,
                'nome' => 'Japeri',
                'idEstado' => 19,
            ),
            211 => 
            array (
                'id' => 3212,
                'nome' => 'Laje do Muriaé',
                'idEstado' => 19,
            ),
            212 => 
            array (
                'id' => 3213,
                'nome' => 'Macaé',
                'idEstado' => 19,
            ),
            213 => 
            array (
                'id' => 3214,
                'nome' => 'Macuco',
                'idEstado' => 19,
            ),
            214 => 
            array (
                'id' => 3215,
                'nome' => 'Magé',
                'idEstado' => 19,
            ),
            215 => 
            array (
                'id' => 3216,
                'nome' => 'Mangaratiba',
                'idEstado' => 19,
            ),
            216 => 
            array (
                'id' => 3217,
                'nome' => 'Maricá',
                'idEstado' => 19,
            ),
            217 => 
            array (
                'id' => 3218,
                'nome' => 'Mendes',
                'idEstado' => 19,
            ),
            218 => 
            array (
                'id' => 3219,
                'nome' => 'Mesquita',
                'idEstado' => 19,
            ),
            219 => 
            array (
                'id' => 3220,
                'nome' => 'Miguel Pereira',
                'idEstado' => 19,
            ),
            220 => 
            array (
                'id' => 3221,
                'nome' => 'Miracema',
                'idEstado' => 19,
            ),
            221 => 
            array (
                'id' => 3222,
                'nome' => 'Natividade',
                'idEstado' => 19,
            ),
            222 => 
            array (
                'id' => 3223,
                'nome' => 'Nilópolis',
                'idEstado' => 19,
            ),
            223 => 
            array (
                'id' => 3224,
                'nome' => 'Niterói',
                'idEstado' => 19,
            ),
            224 => 
            array (
                'id' => 3225,
                'nome' => 'Nova Friburgo',
                'idEstado' => 19,
            ),
            225 => 
            array (
                'id' => 3226,
                'nome' => 'Nova Iguaçu',
                'idEstado' => 19,
            ),
            226 => 
            array (
                'id' => 3227,
                'nome' => 'Paracambi',
                'idEstado' => 19,
            ),
            227 => 
            array (
                'id' => 3228,
                'nome' => 'Paraíba do Sul',
                'idEstado' => 19,
            ),
            228 => 
            array (
                'id' => 3229,
                'nome' => 'Paraty',
                'idEstado' => 19,
            ),
            229 => 
            array (
                'id' => 3230,
                'nome' => 'Paty do Alferes',
                'idEstado' => 19,
            ),
            230 => 
            array (
                'id' => 3231,
                'nome' => 'Petrópolis',
                'idEstado' => 19,
            ),
            231 => 
            array (
                'id' => 3232,
                'nome' => 'Pinheiral',
                'idEstado' => 19,
            ),
            232 => 
            array (
                'id' => 3233,
                'nome' => 'Piraí',
                'idEstado' => 19,
            ),
            233 => 
            array (
                'id' => 3234,
                'nome' => 'Porciúncula',
                'idEstado' => 19,
            ),
            234 => 
            array (
                'id' => 3235,
                'nome' => 'Porto Real',
                'idEstado' => 19,
            ),
            235 => 
            array (
                'id' => 3236,
                'nome' => 'Quatis',
                'idEstado' => 19,
            ),
            236 => 
            array (
                'id' => 3237,
                'nome' => 'Queimados',
                'idEstado' => 19,
            ),
            237 => 
            array (
                'id' => 3238,
                'nome' => 'Quissamã',
                'idEstado' => 19,
            ),
            238 => 
            array (
                'id' => 3239,
                'nome' => 'Resende',
                'idEstado' => 19,
            ),
            239 => 
            array (
                'id' => 3240,
                'nome' => 'Rio Bonito',
                'idEstado' => 19,
            ),
            240 => 
            array (
                'id' => 3241,
                'nome' => 'Rio Claro',
                'idEstado' => 19,
            ),
            241 => 
            array (
                'id' => 3242,
                'nome' => 'Rio das Flores',
                'idEstado' => 19,
            ),
            242 => 
            array (
                'id' => 3243,
                'nome' => 'Rio das Ostras',
                'idEstado' => 19,
            ),
            243 => 
            array (
                'id' => 3244,
                'nome' => 'Rio de Janeiro',
                'idEstado' => 19,
            ),
            244 => 
            array (
                'id' => 3245,
                'nome' => 'Santa Maria Madalena',
                'idEstado' => 19,
            ),
            245 => 
            array (
                'id' => 3246,
                'nome' => 'Santo Antônio de Pádua',
                'idEstado' => 19,
            ),
            246 => 
            array (
                'id' => 3247,
                'nome' => 'São Francisco de Itabapoana',
                'idEstado' => 19,
            ),
            247 => 
            array (
                'id' => 3248,
                'nome' => 'São Fidélis',
                'idEstado' => 19,
            ),
            248 => 
            array (
                'id' => 3249,
                'nome' => 'São Gonçalo',
                'idEstado' => 19,
            ),
            249 => 
            array (
                'id' => 3250,
                'nome' => 'São João da Barra',
                'idEstado' => 19,
            ),
            250 => 
            array (
                'id' => 3251,
                'nome' => 'São João de Meriti',
                'idEstado' => 19,
            ),
            251 => 
            array (
                'id' => 3252,
                'nome' => 'São José de Ubá',
                'idEstado' => 19,
            ),
            252 => 
            array (
                'id' => 3253,
                'nome' => 'São José do Vale do Rio Preto',
                'idEstado' => 19,
            ),
            253 => 
            array (
                'id' => 3254,
                'nome' => 'São Pedro da Aldeia',
                'idEstado' => 19,
            ),
            254 => 
            array (
                'id' => 3255,
                'nome' => 'São Sebastião do Alto',
                'idEstado' => 19,
            ),
            255 => 
            array (
                'id' => 3256,
                'nome' => 'Sapucaia',
                'idEstado' => 19,
            ),
            256 => 
            array (
                'id' => 3257,
                'nome' => 'Saquarema',
                'idEstado' => 19,
            ),
            257 => 
            array (
                'id' => 3258,
                'nome' => 'Seropédica',
                'idEstado' => 19,
            ),
            258 => 
            array (
                'id' => 3259,
                'nome' => 'Silva Jardim',
                'idEstado' => 19,
            ),
            259 => 
            array (
                'id' => 3260,
                'nome' => 'Sumidouro',
                'idEstado' => 19,
            ),
            260 => 
            array (
                'id' => 3261,
                'nome' => 'Tanguá',
                'idEstado' => 19,
            ),
            261 => 
            array (
                'id' => 3262,
                'nome' => 'Teresópolis',
                'idEstado' => 19,
            ),
            262 => 
            array (
                'id' => 3263,
                'nome' => 'Trajano de Moraes',
                'idEstado' => 19,
            ),
            263 => 
            array (
                'id' => 3264,
                'nome' => 'Três Rios',
                'idEstado' => 19,
            ),
            264 => 
            array (
                'id' => 3265,
                'nome' => 'Valença',
                'idEstado' => 19,
            ),
            265 => 
            array (
                'id' => 3266,
                'nome' => 'Varre-Sai',
                'idEstado' => 19,
            ),
            266 => 
            array (
                'id' => 3267,
                'nome' => 'Vassouras',
                'idEstado' => 19,
            ),
            267 => 
            array (
                'id' => 3268,
                'nome' => 'Volta Redonda',
                'idEstado' => 19,
            ),
            268 => 
            array (
                'id' => 3269,
                'nome' => 'Adamantina',
                'idEstado' => 25,
            ),
            269 => 
            array (
                'id' => 3270,
                'nome' => 'Adolfo',
                'idEstado' => 25,
            ),
            270 => 
            array (
                'id' => 3271,
                'nome' => 'Aguaí',
                'idEstado' => 25,
            ),
            271 => 
            array (
                'id' => 3272,
                'nome' => 'Águas da Prata',
                'idEstado' => 25,
            ),
            272 => 
            array (
                'id' => 3273,
                'nome' => 'Águas de Lindóia',
                'idEstado' => 25,
            ),
            273 => 
            array (
                'id' => 3274,
                'nome' => 'Águas de Santa Bárbara',
                'idEstado' => 25,
            ),
            274 => 
            array (
                'id' => 3275,
                'nome' => 'Águas de São Pedro',
                'idEstado' => 25,
            ),
            275 => 
            array (
                'id' => 3276,
                'nome' => 'Agudos',
                'idEstado' => 25,
            ),
            276 => 
            array (
                'id' => 3277,
                'nome' => 'Alambari',
                'idEstado' => 25,
            ),
            277 => 
            array (
                'id' => 3278,
                'nome' => 'Alfredo Marcondes',
                'idEstado' => 25,
            ),
            278 => 
            array (
                'id' => 3279,
                'nome' => 'Altair',
                'idEstado' => 25,
            ),
            279 => 
            array (
                'id' => 3280,
                'nome' => 'Altinópolis',
                'idEstado' => 25,
            ),
            280 => 
            array (
                'id' => 3281,
                'nome' => 'Alto Alegre',
                'idEstado' => 25,
            ),
            281 => 
            array (
                'id' => 3282,
                'nome' => 'Alumínio',
                'idEstado' => 25,
            ),
            282 => 
            array (
                'id' => 3283,
                'nome' => 'Álvares Florence',
                'idEstado' => 25,
            ),
            283 => 
            array (
                'id' => 3284,
                'nome' => 'Álvares Machado',
                'idEstado' => 25,
            ),
            284 => 
            array (
                'id' => 3285,
                'nome' => 'Álvaro de Carvalho',
                'idEstado' => 25,
            ),
            285 => 
            array (
                'id' => 3286,
                'nome' => 'Alvinlândia',
                'idEstado' => 25,
            ),
            286 => 
            array (
                'id' => 3287,
                'nome' => 'Americana',
                'idEstado' => 25,
            ),
            287 => 
            array (
                'id' => 3288,
                'nome' => 'Américo Brasiliense',
                'idEstado' => 25,
            ),
            288 => 
            array (
                'id' => 3289,
                'nome' => 'Américo de Campos',
                'idEstado' => 25,
            ),
            289 => 
            array (
                'id' => 3290,
                'nome' => 'Amparo',
                'idEstado' => 25,
            ),
            290 => 
            array (
                'id' => 3291,
                'nome' => 'Analândia',
                'idEstado' => 25,
            ),
            291 => 
            array (
                'id' => 3292,
                'nome' => 'Andradina',
                'idEstado' => 25,
            ),
            292 => 
            array (
                'id' => 3293,
                'nome' => 'Angatuba',
                'idEstado' => 25,
            ),
            293 => 
            array (
                'id' => 3294,
                'nome' => 'Anhembi',
                'idEstado' => 25,
            ),
            294 => 
            array (
                'id' => 3295,
                'nome' => 'Anhumas',
                'idEstado' => 25,
            ),
            295 => 
            array (
                'id' => 3296,
                'nome' => 'Aparecida',
                'idEstado' => 25,
            ),
            296 => 
            array (
                'id' => 3297,
                'nome' => 'Aparecida D\'Oeste',
                'idEstado' => 25,
            ),
            297 => 
            array (
                'id' => 3298,
                'nome' => 'Apiaí',
                'idEstado' => 25,
            ),
            298 => 
            array (
                'id' => 3299,
                'nome' => 'Araçariguama',
                'idEstado' => 25,
            ),
            299 => 
            array (
                'id' => 3300,
                'nome' => 'Araçatuba',
                'idEstado' => 25,
            ),
            300 => 
            array (
                'id' => 3301,
                'nome' => 'Araçoiaba da Serra',
                'idEstado' => 25,
            ),
            301 => 
            array (
                'id' => 3302,
                'nome' => 'Aramina',
                'idEstado' => 25,
            ),
            302 => 
            array (
                'id' => 3303,
                'nome' => 'Arandu',
                'idEstado' => 25,
            ),
            303 => 
            array (
                'id' => 3304,
                'nome' => 'Arapeí',
                'idEstado' => 25,
            ),
            304 => 
            array (
                'id' => 3305,
                'nome' => 'Araraquara',
                'idEstado' => 25,
            ),
            305 => 
            array (
                'id' => 3306,
                'nome' => 'Araras',
                'idEstado' => 25,
            ),
            306 => 
            array (
                'id' => 3307,
                'nome' => 'Arco-Íris',
                'idEstado' => 25,
            ),
            307 => 
            array (
                'id' => 3308,
                'nome' => 'Arealva',
                'idEstado' => 25,
            ),
            308 => 
            array (
                'id' => 3309,
                'nome' => 'Areias',
                'idEstado' => 25,
            ),
            309 => 
            array (
                'id' => 3310,
                'nome' => 'Areiópolis',
                'idEstado' => 25,
            ),
            310 => 
            array (
                'id' => 3311,
                'nome' => 'Ariranha',
                'idEstado' => 25,
            ),
            311 => 
            array (
                'id' => 3312,
                'nome' => 'Artur Nogueira',
                'idEstado' => 25,
            ),
            312 => 
            array (
                'id' => 3313,
                'nome' => 'Arujá',
                'idEstado' => 25,
            ),
            313 => 
            array (
                'id' => 3314,
                'nome' => 'Aspásia',
                'idEstado' => 25,
            ),
            314 => 
            array (
                'id' => 3315,
                'nome' => 'Assis',
                'idEstado' => 25,
            ),
            315 => 
            array (
                'id' => 3316,
                'nome' => 'Atibaia',
                'idEstado' => 25,
            ),
            316 => 
            array (
                'id' => 3317,
                'nome' => 'Auriflama',
                'idEstado' => 25,
            ),
            317 => 
            array (
                'id' => 3318,
                'nome' => 'Avaí',
                'idEstado' => 25,
            ),
            318 => 
            array (
                'id' => 3319,
                'nome' => 'Avanhandava',
                'idEstado' => 25,
            ),
            319 => 
            array (
                'id' => 3320,
                'nome' => 'Avaré',
                'idEstado' => 25,
            ),
            320 => 
            array (
                'id' => 3321,
                'nome' => 'Bady Bassitt',
                'idEstado' => 25,
            ),
            321 => 
            array (
                'id' => 3322,
                'nome' => 'Balbinos',
                'idEstado' => 25,
            ),
            322 => 
            array (
                'id' => 3323,
                'nome' => 'Bálsamo',
                'idEstado' => 25,
            ),
            323 => 
            array (
                'id' => 3324,
                'nome' => 'Bananal',
                'idEstado' => 25,
            ),
            324 => 
            array (
                'id' => 3325,
                'nome' => 'Barão de Antonina',
                'idEstado' => 25,
            ),
            325 => 
            array (
                'id' => 3326,
                'nome' => 'Barbosa',
                'idEstado' => 25,
            ),
            326 => 
            array (
                'id' => 3327,
                'nome' => 'Bariri',
                'idEstado' => 25,
            ),
            327 => 
            array (
                'id' => 3328,
                'nome' => 'Barra Bonita',
                'idEstado' => 25,
            ),
            328 => 
            array (
                'id' => 3329,
                'nome' => 'Barra do Chapéu',
                'idEstado' => 25,
            ),
            329 => 
            array (
                'id' => 3330,
                'nome' => 'Barra do Turvo',
                'idEstado' => 25,
            ),
            330 => 
            array (
                'id' => 3331,
                'nome' => 'Barretos',
                'idEstado' => 25,
            ),
            331 => 
            array (
                'id' => 3332,
                'nome' => 'Barrinha',
                'idEstado' => 25,
            ),
            332 => 
            array (
                'id' => 3333,
                'nome' => 'Barueri',
                'idEstado' => 25,
            ),
            333 => 
            array (
                'id' => 3334,
                'nome' => 'Bastos',
                'idEstado' => 25,
            ),
            334 => 
            array (
                'id' => 3335,
                'nome' => 'Batatais',
                'idEstado' => 25,
            ),
            335 => 
            array (
                'id' => 3336,
                'nome' => 'Bauru',
                'idEstado' => 25,
            ),
            336 => 
            array (
                'id' => 3337,
                'nome' => 'Bebedouro',
                'idEstado' => 25,
            ),
            337 => 
            array (
                'id' => 3338,
                'nome' => 'Bento de Abreu',
                'idEstado' => 25,
            ),
            338 => 
            array (
                'id' => 3339,
                'nome' => 'Bernardino de Campos',
                'idEstado' => 25,
            ),
            339 => 
            array (
                'id' => 3340,
                'nome' => 'Bertioga',
                'idEstado' => 25,
            ),
            340 => 
            array (
                'id' => 3341,
                'nome' => 'Bilac',
                'idEstado' => 25,
            ),
            341 => 
            array (
                'id' => 3342,
                'nome' => 'Birigui',
                'idEstado' => 25,
            ),
            342 => 
            array (
                'id' => 3343,
                'nome' => 'Biritiba-Mirim',
                'idEstado' => 25,
            ),
            343 => 
            array (
                'id' => 3344,
                'nome' => 'Boa Esperança do Sul',
                'idEstado' => 25,
            ),
            344 => 
            array (
                'id' => 3345,
                'nome' => 'Bocaina',
                'idEstado' => 25,
            ),
            345 => 
            array (
                'id' => 3346,
                'nome' => 'Bofete',
                'idEstado' => 25,
            ),
            346 => 
            array (
                'id' => 3347,
                'nome' => 'Boituva',
                'idEstado' => 25,
            ),
            347 => 
            array (
                'id' => 3348,
                'nome' => 'Bom Jesus dos Perdões',
                'idEstado' => 25,
            ),
            348 => 
            array (
                'id' => 3349,
                'nome' => 'Bom Sucesso de Itararé',
                'idEstado' => 25,
            ),
            349 => 
            array (
                'id' => 3350,
                'nome' => 'Borá',
                'idEstado' => 25,
            ),
            350 => 
            array (
                'id' => 3351,
                'nome' => 'Boracéia',
                'idEstado' => 25,
            ),
            351 => 
            array (
                'id' => 3352,
                'nome' => 'Borborema',
                'idEstado' => 25,
            ),
            352 => 
            array (
                'id' => 3353,
                'nome' => 'Borebi',
                'idEstado' => 25,
            ),
            353 => 
            array (
                'id' => 3354,
                'nome' => 'Botucatu',
                'idEstado' => 25,
            ),
            354 => 
            array (
                'id' => 3355,
                'nome' => 'Bragança Paulista',
                'idEstado' => 25,
            ),
            355 => 
            array (
                'id' => 3356,
                'nome' => 'Braúna',
                'idEstado' => 25,
            ),
            356 => 
            array (
                'id' => 3357,
                'nome' => 'Brejo Alegre',
                'idEstado' => 25,
            ),
            357 => 
            array (
                'id' => 3358,
                'nome' => 'Brodowski',
                'idEstado' => 25,
            ),
            358 => 
            array (
                'id' => 3359,
                'nome' => 'Brotas',
                'idEstado' => 25,
            ),
            359 => 
            array (
                'id' => 3360,
                'nome' => 'Buri',
                'idEstado' => 25,
            ),
            360 => 
            array (
                'id' => 3361,
                'nome' => 'Buritama',
                'idEstado' => 25,
            ),
            361 => 
            array (
                'id' => 3362,
                'nome' => 'Buritizal',
                'idEstado' => 25,
            ),
            362 => 
            array (
                'id' => 3363,
                'nome' => 'Cabrália Paulista',
                'idEstado' => 25,
            ),
            363 => 
            array (
                'id' => 3364,
                'nome' => 'Cabreúva',
                'idEstado' => 25,
            ),
            364 => 
            array (
                'id' => 3365,
                'nome' => 'Caçapava',
                'idEstado' => 25,
            ),
            365 => 
            array (
                'id' => 3366,
                'nome' => 'Cachoeira Paulista',
                'idEstado' => 25,
            ),
            366 => 
            array (
                'id' => 3367,
                'nome' => 'Caconde',
                'idEstado' => 25,
            ),
            367 => 
            array (
                'id' => 3368,
                'nome' => 'Cafelândia',
                'idEstado' => 25,
            ),
            368 => 
            array (
                'id' => 3369,
                'nome' => 'Caiabu',
                'idEstado' => 25,
            ),
            369 => 
            array (
                'id' => 3370,
                'nome' => 'Caieiras',
                'idEstado' => 25,
            ),
            370 => 
            array (
                'id' => 3371,
                'nome' => 'Caiuá',
                'idEstado' => 25,
            ),
            371 => 
            array (
                'id' => 3372,
                'nome' => 'Cajamar',
                'idEstado' => 25,
            ),
            372 => 
            array (
                'id' => 3373,
                'nome' => 'Cajati',
                'idEstado' => 25,
            ),
            373 => 
            array (
                'id' => 3374,
                'nome' => 'Cajobi',
                'idEstado' => 25,
            ),
            374 => 
            array (
                'id' => 3375,
                'nome' => 'Cajuru',
                'idEstado' => 25,
            ),
            375 => 
            array (
                'id' => 3376,
                'nome' => 'Campina do Monte Alegre',
                'idEstado' => 25,
            ),
            376 => 
            array (
                'id' => 3377,
                'nome' => 'Campinas',
                'idEstado' => 25,
            ),
            377 => 
            array (
                'id' => 3378,
                'nome' => 'Campo Limpo Paulista',
                'idEstado' => 25,
            ),
            378 => 
            array (
                'id' => 3379,
                'nome' => 'Campos do Jordão',
                'idEstado' => 25,
            ),
            379 => 
            array (
                'id' => 3380,
                'nome' => 'Campos Novos Paulista',
                'idEstado' => 25,
            ),
            380 => 
            array (
                'id' => 3381,
                'nome' => 'Cananéia',
                'idEstado' => 25,
            ),
            381 => 
            array (
                'id' => 3382,
                'nome' => 'Canas',
                'idEstado' => 25,
            ),
            382 => 
            array (
                'id' => 3383,
                'nome' => 'Cândido Mota',
                'idEstado' => 25,
            ),
            383 => 
            array (
                'id' => 3384,
                'nome' => 'Cândido Rodrigues',
                'idEstado' => 25,
            ),
            384 => 
            array (
                'id' => 3385,
                'nome' => 'Canitar',
                'idEstado' => 25,
            ),
            385 => 
            array (
                'id' => 3386,
                'nome' => 'Capão Bonito',
                'idEstado' => 25,
            ),
            386 => 
            array (
                'id' => 3387,
                'nome' => 'Capela do Alto',
                'idEstado' => 25,
            ),
            387 => 
            array (
                'id' => 3388,
                'nome' => 'Capivari',
                'idEstado' => 25,
            ),
            388 => 
            array (
                'id' => 3389,
                'nome' => 'Caraguatatuba',
                'idEstado' => 25,
            ),
            389 => 
            array (
                'id' => 3390,
                'nome' => 'Carapicuíba',
                'idEstado' => 25,
            ),
            390 => 
            array (
                'id' => 3391,
                'nome' => 'Cardoso',
                'idEstado' => 25,
            ),
            391 => 
            array (
                'id' => 3392,
                'nome' => 'Casa Branca',
                'idEstado' => 25,
            ),
            392 => 
            array (
                'id' => 3393,
                'nome' => 'Cássia dos Coqueiros',
                'idEstado' => 25,
            ),
            393 => 
            array (
                'id' => 3394,
                'nome' => 'Castilho',
                'idEstado' => 25,
            ),
            394 => 
            array (
                'id' => 3395,
                'nome' => 'Catanduva',
                'idEstado' => 25,
            ),
            395 => 
            array (
                'id' => 3396,
                'nome' => 'Catiguá',
                'idEstado' => 25,
            ),
            396 => 
            array (
                'id' => 3397,
                'nome' => 'Cedral',
                'idEstado' => 25,
            ),
            397 => 
            array (
                'id' => 3398,
                'nome' => 'Cerqueira César',
                'idEstado' => 25,
            ),
            398 => 
            array (
                'id' => 3399,
                'nome' => 'Cerquilho',
                'idEstado' => 25,
            ),
            399 => 
            array (
                'id' => 3400,
                'nome' => 'Cesário Lange',
                'idEstado' => 25,
            ),
            400 => 
            array (
                'id' => 3401,
                'nome' => 'Charqueada',
                'idEstado' => 25,
            ),
            401 => 
            array (
                'id' => 3402,
                'nome' => 'Clementina',
                'idEstado' => 25,
            ),
            402 => 
            array (
                'id' => 3403,
                'nome' => 'Colina',
                'idEstado' => 25,
            ),
            403 => 
            array (
                'id' => 3404,
                'nome' => 'Colômbia',
                'idEstado' => 25,
            ),
            404 => 
            array (
                'id' => 3405,
                'nome' => 'Conchal',
                'idEstado' => 25,
            ),
            405 => 
            array (
                'id' => 3406,
                'nome' => 'Conchas',
                'idEstado' => 25,
            ),
            406 => 
            array (
                'id' => 3407,
                'nome' => 'Cordeirópolis',
                'idEstado' => 25,
            ),
            407 => 
            array (
                'id' => 3408,
                'nome' => 'Coroados',
                'idEstado' => 25,
            ),
            408 => 
            array (
                'id' => 3409,
                'nome' => 'Coronel Macedo',
                'idEstado' => 25,
            ),
            409 => 
            array (
                'id' => 3410,
                'nome' => 'Corumbataí',
                'idEstado' => 25,
            ),
            410 => 
            array (
                'id' => 3411,
                'nome' => 'Cosmópolis',
                'idEstado' => 25,
            ),
            411 => 
            array (
                'id' => 3412,
                'nome' => 'Cosmorama',
                'idEstado' => 25,
            ),
            412 => 
            array (
                'id' => 3413,
                'nome' => 'Cotia',
                'idEstado' => 25,
            ),
            413 => 
            array (
                'id' => 3414,
                'nome' => 'Cravinhos',
                'idEstado' => 25,
            ),
            414 => 
            array (
                'id' => 3415,
                'nome' => 'Cristais Paulista',
                'idEstado' => 25,
            ),
            415 => 
            array (
                'id' => 3416,
                'nome' => 'Cruzália',
                'idEstado' => 25,
            ),
            416 => 
            array (
                'id' => 3417,
                'nome' => 'Cruzeiro',
                'idEstado' => 25,
            ),
            417 => 
            array (
                'id' => 3418,
                'nome' => 'Cubatão',
                'idEstado' => 25,
            ),
            418 => 
            array (
                'id' => 3419,
                'nome' => 'Cunha',
                'idEstado' => 25,
            ),
            419 => 
            array (
                'id' => 3420,
                'nome' => 'Descalvado',
                'idEstado' => 25,
            ),
            420 => 
            array (
                'id' => 3421,
                'nome' => 'Diadema',
                'idEstado' => 25,
            ),
            421 => 
            array (
                'id' => 3422,
                'nome' => 'Dirce Reis',
                'idEstado' => 25,
            ),
            422 => 
            array (
                'id' => 3423,
                'nome' => 'Divinolândia',
                'idEstado' => 25,
            ),
            423 => 
            array (
                'id' => 3424,
                'nome' => 'Dobrada',
                'idEstado' => 25,
            ),
            424 => 
            array (
                'id' => 3425,
                'nome' => 'Dois Córregos',
                'idEstado' => 25,
            ),
            425 => 
            array (
                'id' => 3426,
                'nome' => 'Dolcinópolis',
                'idEstado' => 25,
            ),
            426 => 
            array (
                'id' => 3427,
                'nome' => 'Dourado',
                'idEstado' => 25,
            ),
            427 => 
            array (
                'id' => 3428,
                'nome' => 'Dracena',
                'idEstado' => 25,
            ),
            428 => 
            array (
                'id' => 3429,
                'nome' => 'Duartina',
                'idEstado' => 25,
            ),
            429 => 
            array (
                'id' => 3430,
                'nome' => 'Dumont',
                'idEstado' => 25,
            ),
            430 => 
            array (
                'id' => 3431,
                'nome' => 'Echaporã',
                'idEstado' => 25,
            ),
            431 => 
            array (
                'id' => 3432,
                'nome' => 'Eldorado',
                'idEstado' => 25,
            ),
            432 => 
            array (
                'id' => 3433,
                'nome' => 'Elias Fausto',
                'idEstado' => 25,
            ),
            433 => 
            array (
                'id' => 3434,
                'nome' => 'Elisiário',
                'idEstado' => 25,
            ),
            434 => 
            array (
                'id' => 3435,
                'nome' => 'Embaúba',
                'idEstado' => 25,
            ),
            435 => 
            array (
                'id' => 3436,
                'nome' => 'Embu das Artes',
                'idEstado' => 25,
            ),
            436 => 
            array (
                'id' => 3437,
                'nome' => 'Embu-Guaçu',
                'idEstado' => 25,
            ),
            437 => 
            array (
                'id' => 3438,
                'nome' => 'Emilianópolis',
                'idEstado' => 25,
            ),
            438 => 
            array (
                'id' => 3439,
                'nome' => 'Engenheiro Coelho',
                'idEstado' => 25,
            ),
            439 => 
            array (
                'id' => 3440,
                'nome' => 'Espírito Santo do Pinhal',
                'idEstado' => 25,
            ),
            440 => 
            array (
                'id' => 3441,
                'nome' => 'Espírito Santo do Turvo',
                'idEstado' => 25,
            ),
            441 => 
            array (
                'id' => 3442,
                'nome' => 'Estrela D\'Oeste',
                'idEstado' => 25,
            ),
            442 => 
            array (
                'id' => 3443,
                'nome' => 'Estrela do Norte',
                'idEstado' => 25,
            ),
            443 => 
            array (
                'id' => 3444,
                'nome' => 'Euclides da Cunha Paulista',
                'idEstado' => 25,
            ),
            444 => 
            array (
                'id' => 3445,
                'nome' => 'Fartura',
                'idEstado' => 25,
            ),
            445 => 
            array (
                'id' => 3446,
                'nome' => 'Fernandópolis',
                'idEstado' => 25,
            ),
            446 => 
            array (
                'id' => 3447,
                'nome' => 'Fernando Prestes',
                'idEstado' => 25,
            ),
            447 => 
            array (
                'id' => 3448,
                'nome' => 'Fernão',
                'idEstado' => 25,
            ),
            448 => 
            array (
                'id' => 3449,
                'nome' => 'Ferraz de Vasconcelos',
                'idEstado' => 25,
            ),
            449 => 
            array (
                'id' => 3450,
                'nome' => 'Flora Rica',
                'idEstado' => 25,
            ),
            450 => 
            array (
                'id' => 3451,
                'nome' => 'Floreal',
                'idEstado' => 25,
            ),
            451 => 
            array (
                'id' => 3452,
                'nome' => 'Flórida Paulista',
                'idEstado' => 25,
            ),
            452 => 
            array (
                'id' => 3453,
                'nome' => 'Florínia',
                'idEstado' => 25,
            ),
            453 => 
            array (
                'id' => 3454,
                'nome' => 'Franca',
                'idEstado' => 25,
            ),
            454 => 
            array (
                'id' => 3455,
                'nome' => 'Francisco Morato',
                'idEstado' => 25,
            ),
            455 => 
            array (
                'id' => 3456,
                'nome' => 'Franco da Rocha',
                'idEstado' => 25,
            ),
            456 => 
            array (
                'id' => 3457,
                'nome' => 'Gabriel Monteiro',
                'idEstado' => 25,
            ),
            457 => 
            array (
                'id' => 3458,
                'nome' => 'Gália',
                'idEstado' => 25,
            ),
            458 => 
            array (
                'id' => 3459,
                'nome' => 'Garça',
                'idEstado' => 25,
            ),
            459 => 
            array (
                'id' => 3460,
                'nome' => 'Gastão Vidigal',
                'idEstado' => 25,
            ),
            460 => 
            array (
                'id' => 3461,
                'nome' => 'Gavião Peixoto',
                'idEstado' => 25,
            ),
            461 => 
            array (
                'id' => 3462,
                'nome' => 'General Salgado',
                'idEstado' => 25,
            ),
            462 => 
            array (
                'id' => 3463,
                'nome' => 'Getulina',
                'idEstado' => 25,
            ),
            463 => 
            array (
                'id' => 3464,
                'nome' => 'Glicério',
                'idEstado' => 25,
            ),
            464 => 
            array (
                'id' => 3465,
                'nome' => 'Guaiçara',
                'idEstado' => 25,
            ),
            465 => 
            array (
                'id' => 3466,
                'nome' => 'Guaimbê',
                'idEstado' => 25,
            ),
            466 => 
            array (
                'id' => 3467,
                'nome' => 'Guaíra',
                'idEstado' => 25,
            ),
            467 => 
            array (
                'id' => 3468,
                'nome' => 'Guapiaçu',
                'idEstado' => 25,
            ),
            468 => 
            array (
                'id' => 3469,
                'nome' => 'Guapiara',
                'idEstado' => 25,
            ),
            469 => 
            array (
                'id' => 3470,
                'nome' => 'Guará',
                'idEstado' => 25,
            ),
            470 => 
            array (
                'id' => 3471,
                'nome' => 'Guaraçaí',
                'idEstado' => 25,
            ),
            471 => 
            array (
                'id' => 3472,
                'nome' => 'Guaraci',
                'idEstado' => 25,
            ),
            472 => 
            array (
                'id' => 3473,
                'nome' => 'Guarani D\'Oeste',
                'idEstado' => 25,
            ),
            473 => 
            array (
                'id' => 3474,
                'nome' => 'Guarantã',
                'idEstado' => 25,
            ),
            474 => 
            array (
                'id' => 3475,
                'nome' => 'Guararapes',
                'idEstado' => 25,
            ),
            475 => 
            array (
                'id' => 3476,
                'nome' => 'Guararema',
                'idEstado' => 25,
            ),
            476 => 
            array (
                'id' => 3477,
                'nome' => 'Guaratinguetá',
                'idEstado' => 25,
            ),
            477 => 
            array (
                'id' => 3478,
                'nome' => 'Guareí',
                'idEstado' => 25,
            ),
            478 => 
            array (
                'id' => 3479,
                'nome' => 'Guariba',
                'idEstado' => 25,
            ),
            479 => 
            array (
                'id' => 3480,
                'nome' => 'Guarujá',
                'idEstado' => 25,
            ),
            480 => 
            array (
                'id' => 3481,
                'nome' => 'Guarulhos',
                'idEstado' => 25,
            ),
            481 => 
            array (
                'id' => 3482,
                'nome' => 'Guatapará',
                'idEstado' => 25,
            ),
            482 => 
            array (
                'id' => 3483,
                'nome' => 'Guzolândia',
                'idEstado' => 25,
            ),
            483 => 
            array (
                'id' => 3484,
                'nome' => 'Herculândia',
                'idEstado' => 25,
            ),
            484 => 
            array (
                'id' => 3485,
                'nome' => 'Holambra',
                'idEstado' => 25,
            ),
            485 => 
            array (
                'id' => 3486,
                'nome' => 'Hortolândia',
                'idEstado' => 25,
            ),
            486 => 
            array (
                'id' => 3487,
                'nome' => 'Iacanga',
                'idEstado' => 25,
            ),
            487 => 
            array (
                'id' => 3488,
                'nome' => 'Iacri',
                'idEstado' => 25,
            ),
            488 => 
            array (
                'id' => 3489,
                'nome' => 'Iaras',
                'idEstado' => 25,
            ),
            489 => 
            array (
                'id' => 3490,
                'nome' => 'Ibaté',
                'idEstado' => 25,
            ),
            490 => 
            array (
                'id' => 3491,
                'nome' => 'Ibirá',
                'idEstado' => 25,
            ),
            491 => 
            array (
                'id' => 3492,
                'nome' => 'Ibirarema',
                'idEstado' => 25,
            ),
            492 => 
            array (
                'id' => 3493,
                'nome' => 'Ibitinga',
                'idEstado' => 25,
            ),
            493 => 
            array (
                'id' => 3494,
                'nome' => 'Ibiúna',
                'idEstado' => 25,
            ),
            494 => 
            array (
                'id' => 3495,
                'nome' => 'Icém',
                'idEstado' => 25,
            ),
            495 => 
            array (
                'id' => 3496,
                'nome' => 'Iepê',
                'idEstado' => 25,
            ),
            496 => 
            array (
                'id' => 3497,
                'nome' => 'Igaraçu do Tietê',
                'idEstado' => 25,
            ),
            497 => 
            array (
                'id' => 3498,
                'nome' => 'Igarapava',
                'idEstado' => 25,
            ),
            498 => 
            array (
                'id' => 3499,
                'nome' => 'Igaratá',
                'idEstado' => 25,
            ),
            499 => 
            array (
                'id' => 3500,
                'nome' => 'Iguape',
                'idEstado' => 25,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'nome' => 'Ilhabela',
                'idEstado' => 25,
            ),
            1 => 
            array (
                'id' => 3502,
                'nome' => 'Ilha Comprida',
                'idEstado' => 25,
            ),
            2 => 
            array (
                'id' => 3503,
                'nome' => 'Ilha Solteira',
                'idEstado' => 25,
            ),
            3 => 
            array (
                'id' => 3504,
                'nome' => 'Indaiatuba',
                'idEstado' => 25,
            ),
            4 => 
            array (
                'id' => 3505,
                'nome' => 'Indiana',
                'idEstado' => 25,
            ),
            5 => 
            array (
                'id' => 3506,
                'nome' => 'Indiaporã',
                'idEstado' => 25,
            ),
            6 => 
            array (
                'id' => 3507,
                'nome' => 'Inúbia Paulista',
                'idEstado' => 25,
            ),
            7 => 
            array (
                'id' => 3508,
                'nome' => 'Ipaussu',
                'idEstado' => 25,
            ),
            8 => 
            array (
                'id' => 3509,
                'nome' => 'Iperó',
                'idEstado' => 25,
            ),
            9 => 
            array (
                'id' => 3510,
                'nome' => 'Ipeúna',
                'idEstado' => 25,
            ),
            10 => 
            array (
                'id' => 3511,
                'nome' => 'Ipiguá',
                'idEstado' => 25,
            ),
            11 => 
            array (
                'id' => 3512,
                'nome' => 'Iporanga',
                'idEstado' => 25,
            ),
            12 => 
            array (
                'id' => 3513,
                'nome' => 'Ipuã',
                'idEstado' => 25,
            ),
            13 => 
            array (
                'id' => 3514,
                'nome' => 'Iracemápolis',
                'idEstado' => 25,
            ),
            14 => 
            array (
                'id' => 3515,
                'nome' => 'Irapuã',
                'idEstado' => 25,
            ),
            15 => 
            array (
                'id' => 3516,
                'nome' => 'Irapuru',
                'idEstado' => 25,
            ),
            16 => 
            array (
                'id' => 3517,
                'nome' => 'Itaberá',
                'idEstado' => 25,
            ),
            17 => 
            array (
                'id' => 3518,
                'nome' => 'Itaí',
                'idEstado' => 25,
            ),
            18 => 
            array (
                'id' => 3519,
                'nome' => 'Itajobi',
                'idEstado' => 25,
            ),
            19 => 
            array (
                'id' => 3520,
                'nome' => 'Itaju',
                'idEstado' => 25,
            ),
            20 => 
            array (
                'id' => 3521,
                'nome' => 'Itanhaém',
                'idEstado' => 25,
            ),
            21 => 
            array (
                'id' => 3522,
                'nome' => 'Itaóca',
                'idEstado' => 25,
            ),
            22 => 
            array (
                'id' => 3523,
                'nome' => 'Itapecerica da Serra',
                'idEstado' => 25,
            ),
            23 => 
            array (
                'id' => 3524,
                'nome' => 'Itapetininga',
                'idEstado' => 25,
            ),
            24 => 
            array (
                'id' => 3525,
                'nome' => 'Itapeva',
                'idEstado' => 25,
            ),
            25 => 
            array (
                'id' => 3526,
                'nome' => 'Itapevi',
                'idEstado' => 25,
            ),
            26 => 
            array (
                'id' => 3527,
                'nome' => 'Itapira',
                'idEstado' => 25,
            ),
            27 => 
            array (
                'id' => 3528,
                'nome' => 'Itapirapuã Paulista',
                'idEstado' => 25,
            ),
            28 => 
            array (
                'id' => 3529,
                'nome' => 'Itápolis',
                'idEstado' => 25,
            ),
            29 => 
            array (
                'id' => 3530,
                'nome' => 'Itaporanga',
                'idEstado' => 25,
            ),
            30 => 
            array (
                'id' => 3531,
                'nome' => 'Itapuí',
                'idEstado' => 25,
            ),
            31 => 
            array (
                'id' => 3532,
                'nome' => 'Itapura',
                'idEstado' => 25,
            ),
            32 => 
            array (
                'id' => 3533,
                'nome' => 'Itaquaquecetuba',
                'idEstado' => 25,
            ),
            33 => 
            array (
                'id' => 3534,
                'nome' => 'Itararé',
                'idEstado' => 25,
            ),
            34 => 
            array (
                'id' => 3535,
                'nome' => 'Itariri',
                'idEstado' => 25,
            ),
            35 => 
            array (
                'id' => 3536,
                'nome' => 'Itatiba',
                'idEstado' => 25,
            ),
            36 => 
            array (
                'id' => 3537,
                'nome' => 'Itatinga',
                'idEstado' => 25,
            ),
            37 => 
            array (
                'id' => 3538,
                'nome' => 'Itirapina',
                'idEstado' => 25,
            ),
            38 => 
            array (
                'id' => 3539,
                'nome' => 'Itirapuã',
                'idEstado' => 25,
            ),
            39 => 
            array (
                'id' => 3540,
                'nome' => 'Itobi',
                'idEstado' => 25,
            ),
            40 => 
            array (
                'id' => 3541,
                'nome' => 'Itu',
                'idEstado' => 25,
            ),
            41 => 
            array (
                'id' => 3542,
                'nome' => 'Itupeva',
                'idEstado' => 25,
            ),
            42 => 
            array (
                'id' => 3543,
                'nome' => 'Ituverava',
                'idEstado' => 25,
            ),
            43 => 
            array (
                'id' => 3544,
                'nome' => 'Jaborandi',
                'idEstado' => 25,
            ),
            44 => 
            array (
                'id' => 3545,
                'nome' => 'Jaboticabal',
                'idEstado' => 25,
            ),
            45 => 
            array (
                'id' => 3546,
                'nome' => 'Jacareí',
                'idEstado' => 25,
            ),
            46 => 
            array (
                'id' => 3547,
                'nome' => 'Jaci',
                'idEstado' => 25,
            ),
            47 => 
            array (
                'id' => 3548,
                'nome' => 'Jacupiranga',
                'idEstado' => 25,
            ),
            48 => 
            array (
                'id' => 3549,
                'nome' => 'Jaguariúna',
                'idEstado' => 25,
            ),
            49 => 
            array (
                'id' => 3550,
                'nome' => 'Jales',
                'idEstado' => 25,
            ),
            50 => 
            array (
                'id' => 3551,
                'nome' => 'Jambeiro',
                'idEstado' => 25,
            ),
            51 => 
            array (
                'id' => 3552,
                'nome' => 'Jandira',
                'idEstado' => 25,
            ),
            52 => 
            array (
                'id' => 3553,
                'nome' => 'Jardinópolis',
                'idEstado' => 25,
            ),
            53 => 
            array (
                'id' => 3554,
                'nome' => 'Jarinu',
                'idEstado' => 25,
            ),
            54 => 
            array (
                'id' => 3555,
                'nome' => 'Jaú',
                'idEstado' => 25,
            ),
            55 => 
            array (
                'id' => 3556,
                'nome' => 'Jeriquara',
                'idEstado' => 25,
            ),
            56 => 
            array (
                'id' => 3557,
                'nome' => 'Joanópolis',
                'idEstado' => 25,
            ),
            57 => 
            array (
                'id' => 3558,
                'nome' => 'João Ramalho',
                'idEstado' => 25,
            ),
            58 => 
            array (
                'id' => 3559,
                'nome' => 'José Bonifácio',
                'idEstado' => 25,
            ),
            59 => 
            array (
                'id' => 3560,
                'nome' => 'Júlio Mesquita',
                'idEstado' => 25,
            ),
            60 => 
            array (
                'id' => 3561,
                'nome' => 'Jumirim',
                'idEstado' => 25,
            ),
            61 => 
            array (
                'id' => 3562,
                'nome' => 'Jundiaí',
                'idEstado' => 25,
            ),
            62 => 
            array (
                'id' => 3563,
                'nome' => 'Junqueirópolis',
                'idEstado' => 25,
            ),
            63 => 
            array (
                'id' => 3564,
                'nome' => 'Juquiá',
                'idEstado' => 25,
            ),
            64 => 
            array (
                'id' => 3565,
                'nome' => 'Juquitiba',
                'idEstado' => 25,
            ),
            65 => 
            array (
                'id' => 3566,
                'nome' => 'Lagoinha',
                'idEstado' => 25,
            ),
            66 => 
            array (
                'id' => 3567,
                'nome' => 'Laranjal Paulista',
                'idEstado' => 25,
            ),
            67 => 
            array (
                'id' => 3568,
                'nome' => 'Lavínia',
                'idEstado' => 25,
            ),
            68 => 
            array (
                'id' => 3569,
                'nome' => 'Lavrinhas',
                'idEstado' => 25,
            ),
            69 => 
            array (
                'id' => 3570,
                'nome' => 'Leme',
                'idEstado' => 25,
            ),
            70 => 
            array (
                'id' => 3571,
                'nome' => 'Lençóis Paulista',
                'idEstado' => 25,
            ),
            71 => 
            array (
                'id' => 3572,
                'nome' => 'Limeira',
                'idEstado' => 25,
            ),
            72 => 
            array (
                'id' => 3573,
                'nome' => 'Lindóia',
                'idEstado' => 25,
            ),
            73 => 
            array (
                'id' => 3574,
                'nome' => 'Lins',
                'idEstado' => 25,
            ),
            74 => 
            array (
                'id' => 3575,
                'nome' => 'Lorena',
                'idEstado' => 25,
            ),
            75 => 
            array (
                'id' => 3576,
                'nome' => 'Lourdes',
                'idEstado' => 25,
            ),
            76 => 
            array (
                'id' => 3577,
                'nome' => 'Louveira',
                'idEstado' => 25,
            ),
            77 => 
            array (
                'id' => 3578,
                'nome' => 'Lucélia',
                'idEstado' => 25,
            ),
            78 => 
            array (
                'id' => 3579,
                'nome' => 'Lucianópolis',
                'idEstado' => 25,
            ),
            79 => 
            array (
                'id' => 3580,
                'nome' => 'Luís Antônio',
                'idEstado' => 25,
            ),
            80 => 
            array (
                'id' => 3581,
                'nome' => 'Luiziânia',
                'idEstado' => 25,
            ),
            81 => 
            array (
                'id' => 3582,
                'nome' => 'Lupércio',
                'idEstado' => 25,
            ),
            82 => 
            array (
                'id' => 3583,
                'nome' => 'Lutécia',
                'idEstado' => 25,
            ),
            83 => 
            array (
                'id' => 3584,
                'nome' => 'Macatuba',
                'idEstado' => 25,
            ),
            84 => 
            array (
                'id' => 3585,
                'nome' => 'Macaubal',
                'idEstado' => 25,
            ),
            85 => 
            array (
                'id' => 3586,
                'nome' => 'Macedônia',
                'idEstado' => 25,
            ),
            86 => 
            array (
                'id' => 3587,
                'nome' => 'Magda',
                'idEstado' => 25,
            ),
            87 => 
            array (
                'id' => 3588,
                'nome' => 'Mairinque',
                'idEstado' => 25,
            ),
            88 => 
            array (
                'id' => 3589,
                'nome' => 'Mairiporã',
                'idEstado' => 25,
            ),
            89 => 
            array (
                'id' => 3590,
                'nome' => 'Manduri',
                'idEstado' => 25,
            ),
            90 => 
            array (
                'id' => 3591,
                'nome' => 'Marabá Paulista',
                'idEstado' => 25,
            ),
            91 => 
            array (
                'id' => 3592,
                'nome' => 'Maracaí',
                'idEstado' => 25,
            ),
            92 => 
            array (
                'id' => 3593,
                'nome' => 'Marapoama',
                'idEstado' => 25,
            ),
            93 => 
            array (
                'id' => 3594,
                'nome' => 'Mariápolis',
                'idEstado' => 25,
            ),
            94 => 
            array (
                'id' => 3595,
                'nome' => 'Marília',
                'idEstado' => 25,
            ),
            95 => 
            array (
                'id' => 3596,
                'nome' => 'Marinópolis',
                'idEstado' => 25,
            ),
            96 => 
            array (
                'id' => 3597,
                'nome' => 'Martinópolis',
                'idEstado' => 25,
            ),
            97 => 
            array (
                'id' => 3598,
                'nome' => 'Matão',
                'idEstado' => 25,
            ),
            98 => 
            array (
                'id' => 3599,
                'nome' => 'Mauá',
                'idEstado' => 25,
            ),
            99 => 
            array (
                'id' => 3600,
                'nome' => 'Mendonça',
                'idEstado' => 25,
            ),
            100 => 
            array (
                'id' => 3601,
                'nome' => 'Meridiano',
                'idEstado' => 25,
            ),
            101 => 
            array (
                'id' => 3602,
                'nome' => 'Mesópolis',
                'idEstado' => 25,
            ),
            102 => 
            array (
                'id' => 3603,
                'nome' => 'Miguelópolis',
                'idEstado' => 25,
            ),
            103 => 
            array (
                'id' => 3604,
                'nome' => 'Mineiros do Tietê',
                'idEstado' => 25,
            ),
            104 => 
            array (
                'id' => 3605,
                'nome' => 'Miracatu',
                'idEstado' => 25,
            ),
            105 => 
            array (
                'id' => 3606,
                'nome' => 'Mira Estrela',
                'idEstado' => 25,
            ),
            106 => 
            array (
                'id' => 3607,
                'nome' => 'Mirandópolis',
                'idEstado' => 25,
            ),
            107 => 
            array (
                'id' => 3608,
                'nome' => 'Mirante do Paranapanema',
                'idEstado' => 25,
            ),
            108 => 
            array (
                'id' => 3609,
                'nome' => 'Mirassol',
                'idEstado' => 25,
            ),
            109 => 
            array (
                'id' => 3610,
                'nome' => 'Mirassolândia',
                'idEstado' => 25,
            ),
            110 => 
            array (
                'id' => 3611,
                'nome' => 'Mococa',
                'idEstado' => 25,
            ),
            111 => 
            array (
                'id' => 3612,
                'nome' => 'Mogi das Cruzes',
                'idEstado' => 25,
            ),
            112 => 
            array (
                'id' => 3613,
                'nome' => 'Mogi Guaçu',
                'idEstado' => 25,
            ),
            113 => 
            array (
                'id' => 3614,
                'nome' => 'Moji Mirim',
                'idEstado' => 25,
            ),
            114 => 
            array (
                'id' => 3615,
                'nome' => 'Mombuca',
                'idEstado' => 25,
            ),
            115 => 
            array (
                'id' => 3616,
                'nome' => 'Monções',
                'idEstado' => 25,
            ),
            116 => 
            array (
                'id' => 3617,
                'nome' => 'Mongaguá',
                'idEstado' => 25,
            ),
            117 => 
            array (
                'id' => 3618,
                'nome' => 'Monte Alegre do Sul',
                'idEstado' => 25,
            ),
            118 => 
            array (
                'id' => 3619,
                'nome' => 'Monte Alto',
                'idEstado' => 25,
            ),
            119 => 
            array (
                'id' => 3620,
                'nome' => 'Monte Aprazível',
                'idEstado' => 25,
            ),
            120 => 
            array (
                'id' => 3621,
                'nome' => 'Monte Azul Paulista',
                'idEstado' => 25,
            ),
            121 => 
            array (
                'id' => 3622,
                'nome' => 'Monte Castelo',
                'idEstado' => 25,
            ),
            122 => 
            array (
                'id' => 3623,
                'nome' => 'Monteiro Lobato',
                'idEstado' => 25,
            ),
            123 => 
            array (
                'id' => 3624,
                'nome' => 'Monte Mor',
                'idEstado' => 25,
            ),
            124 => 
            array (
                'id' => 3625,
                'nome' => 'Morro Agudo',
                'idEstado' => 25,
            ),
            125 => 
            array (
                'id' => 3626,
                'nome' => 'Morungaba',
                'idEstado' => 25,
            ),
            126 => 
            array (
                'id' => 3627,
                'nome' => 'Motuca',
                'idEstado' => 25,
            ),
            127 => 
            array (
                'id' => 3628,
                'nome' => 'Murutinga do Sul',
                'idEstado' => 25,
            ),
            128 => 
            array (
                'id' => 3629,
                'nome' => 'Nantes',
                'idEstado' => 25,
            ),
            129 => 
            array (
                'id' => 3630,
                'nome' => 'Narandiba',
                'idEstado' => 25,
            ),
            130 => 
            array (
                'id' => 3631,
                'nome' => 'Natividade da Serra',
                'idEstado' => 25,
            ),
            131 => 
            array (
                'id' => 3632,
                'nome' => 'Nazaré Paulista',
                'idEstado' => 25,
            ),
            132 => 
            array (
                'id' => 3633,
                'nome' => 'Neves Paulista',
                'idEstado' => 25,
            ),
            133 => 
            array (
                'id' => 3634,
                'nome' => 'Nhandeara',
                'idEstado' => 25,
            ),
            134 => 
            array (
                'id' => 3635,
                'nome' => 'Nipoã',
                'idEstado' => 25,
            ),
            135 => 
            array (
                'id' => 3636,
                'nome' => 'Nova Aliança',
                'idEstado' => 25,
            ),
            136 => 
            array (
                'id' => 3637,
                'nome' => 'Nova Campina',
                'idEstado' => 25,
            ),
            137 => 
            array (
                'id' => 3638,
                'nome' => 'Nova Canaã Paulista',
                'idEstado' => 25,
            ),
            138 => 
            array (
                'id' => 3639,
                'nome' => 'Nova Castilho',
                'idEstado' => 25,
            ),
            139 => 
            array (
                'id' => 3640,
                'nome' => 'Nova Europa',
                'idEstado' => 25,
            ),
            140 => 
            array (
                'id' => 3641,
                'nome' => 'Nova Granada',
                'idEstado' => 25,
            ),
            141 => 
            array (
                'id' => 3642,
                'nome' => 'Nova Guataporanga',
                'idEstado' => 25,
            ),
            142 => 
            array (
                'id' => 3643,
                'nome' => 'Nova Independência',
                'idEstado' => 25,
            ),
            143 => 
            array (
                'id' => 3644,
                'nome' => 'Novais',
                'idEstado' => 25,
            ),
            144 => 
            array (
                'id' => 3645,
                'nome' => 'Nova Luzitânia',
                'idEstado' => 25,
            ),
            145 => 
            array (
                'id' => 3646,
                'nome' => 'Nova Odessa',
                'idEstado' => 25,
            ),
            146 => 
            array (
                'id' => 3647,
                'nome' => 'Novo Horizonte',
                'idEstado' => 25,
            ),
            147 => 
            array (
                'id' => 3648,
                'nome' => 'Nuporanga',
                'idEstado' => 25,
            ),
            148 => 
            array (
                'id' => 3649,
                'nome' => 'Ocauçu',
                'idEstado' => 25,
            ),
            149 => 
            array (
                'id' => 3650,
                'nome' => 'Óleo',
                'idEstado' => 25,
            ),
            150 => 
            array (
                'id' => 3651,
                'nome' => 'Olímpia',
                'idEstado' => 25,
            ),
            151 => 
            array (
                'id' => 3652,
                'nome' => 'Onda Verde',
                'idEstado' => 25,
            ),
            152 => 
            array (
                'id' => 3653,
                'nome' => 'Oriente',
                'idEstado' => 25,
            ),
            153 => 
            array (
                'id' => 3654,
                'nome' => 'Orindiúva',
                'idEstado' => 25,
            ),
            154 => 
            array (
                'id' => 3655,
                'nome' => 'Orlândia',
                'idEstado' => 25,
            ),
            155 => 
            array (
                'id' => 3656,
                'nome' => 'Osasco',
                'idEstado' => 25,
            ),
            156 => 
            array (
                'id' => 3657,
                'nome' => 'Oscar Bressane',
                'idEstado' => 25,
            ),
            157 => 
            array (
                'id' => 3658,
                'nome' => 'Osvaldo Cruz',
                'idEstado' => 25,
            ),
            158 => 
            array (
                'id' => 3659,
                'nome' => 'Ourinhos',
                'idEstado' => 25,
            ),
            159 => 
            array (
                'id' => 3660,
                'nome' => 'Ouroeste',
                'idEstado' => 25,
            ),
            160 => 
            array (
                'id' => 3661,
                'nome' => 'Ouro Verde',
                'idEstado' => 25,
            ),
            161 => 
            array (
                'id' => 3662,
                'nome' => 'Pacaembu',
                'idEstado' => 25,
            ),
            162 => 
            array (
                'id' => 3663,
                'nome' => 'Palestina',
                'idEstado' => 25,
            ),
            163 => 
            array (
                'id' => 3664,
                'nome' => 'Palmares Paulista',
                'idEstado' => 25,
            ),
            164 => 
            array (
                'id' => 3665,
                'nome' => 'Palmeira D\'Oeste',
                'idEstado' => 25,
            ),
            165 => 
            array (
                'id' => 3666,
                'nome' => 'Palmital',
                'idEstado' => 25,
            ),
            166 => 
            array (
                'id' => 3667,
                'nome' => 'Panorama',
                'idEstado' => 25,
            ),
            167 => 
            array (
                'id' => 3668,
                'nome' => 'Paraguaçu Paulista',
                'idEstado' => 25,
            ),
            168 => 
            array (
                'id' => 3669,
                'nome' => 'Paraibuna',
                'idEstado' => 25,
            ),
            169 => 
            array (
                'id' => 3670,
                'nome' => 'Paraíso',
                'idEstado' => 25,
            ),
            170 => 
            array (
                'id' => 3671,
                'nome' => 'Paranapanema',
                'idEstado' => 25,
            ),
            171 => 
            array (
                'id' => 3672,
                'nome' => 'Paranapuã',
                'idEstado' => 25,
            ),
            172 => 
            array (
                'id' => 3673,
                'nome' => 'Parapuã',
                'idEstado' => 25,
            ),
            173 => 
            array (
                'id' => 3674,
                'nome' => 'Pardinho',
                'idEstado' => 25,
            ),
            174 => 
            array (
                'id' => 3675,
                'nome' => 'Pariquera-Açu',
                'idEstado' => 25,
            ),
            175 => 
            array (
                'id' => 3676,
                'nome' => 'Parisi',
                'idEstado' => 25,
            ),
            176 => 
            array (
                'id' => 3677,
                'nome' => 'Patrocínio Paulista',
                'idEstado' => 25,
            ),
            177 => 
            array (
                'id' => 3678,
                'nome' => 'Paulicéia',
                'idEstado' => 25,
            ),
            178 => 
            array (
                'id' => 3679,
                'nome' => 'Paulínia',
                'idEstado' => 25,
            ),
            179 => 
            array (
                'id' => 3680,
                'nome' => 'Paulistânia',
                'idEstado' => 25,
            ),
            180 => 
            array (
                'id' => 3681,
                'nome' => 'Paulo de Faria',
                'idEstado' => 25,
            ),
            181 => 
            array (
                'id' => 3682,
                'nome' => 'Pederneiras',
                'idEstado' => 25,
            ),
            182 => 
            array (
                'id' => 3683,
                'nome' => 'Pedra Bela',
                'idEstado' => 25,
            ),
            183 => 
            array (
                'id' => 3684,
                'nome' => 'Pedranópolis',
                'idEstado' => 25,
            ),
            184 => 
            array (
                'id' => 3685,
                'nome' => 'Pedregulho',
                'idEstado' => 25,
            ),
            185 => 
            array (
                'id' => 3686,
                'nome' => 'Pedreira',
                'idEstado' => 25,
            ),
            186 => 
            array (
                'id' => 3687,
                'nome' => 'Pedrinhas Paulista',
                'idEstado' => 25,
            ),
            187 => 
            array (
                'id' => 3688,
                'nome' => 'Pedro de Toledo',
                'idEstado' => 25,
            ),
            188 => 
            array (
                'id' => 3689,
                'nome' => 'Penápolis',
                'idEstado' => 25,
            ),
            189 => 
            array (
                'id' => 3690,
                'nome' => 'Pereira Barreto',
                'idEstado' => 25,
            ),
            190 => 
            array (
                'id' => 3691,
                'nome' => 'Pereiras',
                'idEstado' => 25,
            ),
            191 => 
            array (
                'id' => 3692,
                'nome' => 'Peruíbe',
                'idEstado' => 25,
            ),
            192 => 
            array (
                'id' => 3693,
                'nome' => 'Piacatu',
                'idEstado' => 25,
            ),
            193 => 
            array (
                'id' => 3694,
                'nome' => 'Piedade',
                'idEstado' => 25,
            ),
            194 => 
            array (
                'id' => 3695,
                'nome' => 'Pilar do Sul',
                'idEstado' => 25,
            ),
            195 => 
            array (
                'id' => 3696,
                'nome' => 'Pindamonhangaba',
                'idEstado' => 25,
            ),
            196 => 
            array (
                'id' => 3697,
                'nome' => 'Pindorama',
                'idEstado' => 25,
            ),
            197 => 
            array (
                'id' => 3698,
                'nome' => 'Pinhalzinho',
                'idEstado' => 25,
            ),
            198 => 
            array (
                'id' => 3699,
                'nome' => 'Piquerobi',
                'idEstado' => 25,
            ),
            199 => 
            array (
                'id' => 3700,
                'nome' => 'Piquete',
                'idEstado' => 25,
            ),
            200 => 
            array (
                'id' => 3701,
                'nome' => 'Piracaia',
                'idEstado' => 25,
            ),
            201 => 
            array (
                'id' => 3702,
                'nome' => 'Piracicaba',
                'idEstado' => 25,
            ),
            202 => 
            array (
                'id' => 3703,
                'nome' => 'Piraju',
                'idEstado' => 25,
            ),
            203 => 
            array (
                'id' => 3704,
                'nome' => 'Pirajuí',
                'idEstado' => 25,
            ),
            204 => 
            array (
                'id' => 3705,
                'nome' => 'Pirangi',
                'idEstado' => 25,
            ),
            205 => 
            array (
                'id' => 3706,
                'nome' => 'Pirapora do Bom Jesus',
                'idEstado' => 25,
            ),
            206 => 
            array (
                'id' => 3707,
                'nome' => 'Pirapozinho',
                'idEstado' => 25,
            ),
            207 => 
            array (
                'id' => 3708,
                'nome' => 'Pirassununga',
                'idEstado' => 25,
            ),
            208 => 
            array (
                'id' => 3709,
                'nome' => 'Piratininga',
                'idEstado' => 25,
            ),
            209 => 
            array (
                'id' => 3710,
                'nome' => 'Pitangueiras',
                'idEstado' => 25,
            ),
            210 => 
            array (
                'id' => 3711,
                'nome' => 'Planalto',
                'idEstado' => 25,
            ),
            211 => 
            array (
                'id' => 3712,
                'nome' => 'Platina',
                'idEstado' => 25,
            ),
            212 => 
            array (
                'id' => 3713,
                'nome' => 'Poá',
                'idEstado' => 25,
            ),
            213 => 
            array (
                'id' => 3714,
                'nome' => 'Poloni',
                'idEstado' => 25,
            ),
            214 => 
            array (
                'id' => 3715,
                'nome' => 'Pompéia',
                'idEstado' => 25,
            ),
            215 => 
            array (
                'id' => 3716,
                'nome' => 'Pongaí',
                'idEstado' => 25,
            ),
            216 => 
            array (
                'id' => 3717,
                'nome' => 'Pontal',
                'idEstado' => 25,
            ),
            217 => 
            array (
                'id' => 3718,
                'nome' => 'Pontalinda',
                'idEstado' => 25,
            ),
            218 => 
            array (
                'id' => 3719,
                'nome' => 'Pontes Gestal',
                'idEstado' => 25,
            ),
            219 => 
            array (
                'id' => 3720,
                'nome' => 'Populina',
                'idEstado' => 25,
            ),
            220 => 
            array (
                'id' => 3721,
                'nome' => 'Porangaba',
                'idEstado' => 25,
            ),
            221 => 
            array (
                'id' => 3722,
                'nome' => 'Porto Feliz',
                'idEstado' => 25,
            ),
            222 => 
            array (
                'id' => 3723,
                'nome' => 'Porto Ferreira',
                'idEstado' => 25,
            ),
            223 => 
            array (
                'id' => 3724,
                'nome' => 'Potim',
                'idEstado' => 25,
            ),
            224 => 
            array (
                'id' => 3725,
                'nome' => 'Potirendaba',
                'idEstado' => 25,
            ),
            225 => 
            array (
                'id' => 3726,
                'nome' => 'Pracinha',
                'idEstado' => 25,
            ),
            226 => 
            array (
                'id' => 3727,
                'nome' => 'Pradópolis',
                'idEstado' => 25,
            ),
            227 => 
            array (
                'id' => 3728,
                'nome' => 'Praia Grande',
                'idEstado' => 25,
            ),
            228 => 
            array (
                'id' => 3729,
                'nome' => 'Pratânia',
                'idEstado' => 25,
            ),
            229 => 
            array (
                'id' => 3730,
                'nome' => 'Presidente Alves',
                'idEstado' => 25,
            ),
            230 => 
            array (
                'id' => 3731,
                'nome' => 'Presidente Bernardes',
                'idEstado' => 25,
            ),
            231 => 
            array (
                'id' => 3732,
                'nome' => 'Presidente Epitácio',
                'idEstado' => 25,
            ),
            232 => 
            array (
                'id' => 3733,
                'nome' => 'Presidente Prudente',
                'idEstado' => 25,
            ),
            233 => 
            array (
                'id' => 3734,
                'nome' => 'Presidente Venceslau',
                'idEstado' => 25,
            ),
            234 => 
            array (
                'id' => 3735,
                'nome' => 'Promissão',
                'idEstado' => 25,
            ),
            235 => 
            array (
                'id' => 3736,
                'nome' => 'Quadra',
                'idEstado' => 25,
            ),
            236 => 
            array (
                'id' => 3737,
                'nome' => 'Quatá',
                'idEstado' => 25,
            ),
            237 => 
            array (
                'id' => 3738,
                'nome' => 'Queiroz',
                'idEstado' => 25,
            ),
            238 => 
            array (
                'id' => 3739,
                'nome' => 'Queluz',
                'idEstado' => 25,
            ),
            239 => 
            array (
                'id' => 3740,
                'nome' => 'Quintana',
                'idEstado' => 25,
            ),
            240 => 
            array (
                'id' => 3741,
                'nome' => 'Rafard',
                'idEstado' => 25,
            ),
            241 => 
            array (
                'id' => 3742,
                'nome' => 'Rancharia',
                'idEstado' => 25,
            ),
            242 => 
            array (
                'id' => 3743,
                'nome' => 'Redenção da Serra',
                'idEstado' => 25,
            ),
            243 => 
            array (
                'id' => 3744,
                'nome' => 'Regente Feijó',
                'idEstado' => 25,
            ),
            244 => 
            array (
                'id' => 3745,
                'nome' => 'Reginópolis',
                'idEstado' => 25,
            ),
            245 => 
            array (
                'id' => 3746,
                'nome' => 'Registro',
                'idEstado' => 25,
            ),
            246 => 
            array (
                'id' => 3747,
                'nome' => 'Restinga',
                'idEstado' => 25,
            ),
            247 => 
            array (
                'id' => 3748,
                'nome' => 'Ribeira',
                'idEstado' => 25,
            ),
            248 => 
            array (
                'id' => 3749,
                'nome' => 'Ribeirão Bonito',
                'idEstado' => 25,
            ),
            249 => 
            array (
                'id' => 3750,
                'nome' => 'Ribeirão Branco',
                'idEstado' => 25,
            ),
            250 => 
            array (
                'id' => 3751,
                'nome' => 'Ribeirão Corrente',
                'idEstado' => 25,
            ),
            251 => 
            array (
                'id' => 3752,
                'nome' => 'Ribeirão do Sul',
                'idEstado' => 25,
            ),
            252 => 
            array (
                'id' => 3753,
                'nome' => 'Ribeirão dos Índios',
                'idEstado' => 25,
            ),
            253 => 
            array (
                'id' => 3754,
                'nome' => 'Ribeirão Grande',
                'idEstado' => 25,
            ),
            254 => 
            array (
                'id' => 3755,
                'nome' => 'Ribeirão Pires',
                'idEstado' => 25,
            ),
            255 => 
            array (
                'id' => 3756,
                'nome' => 'Ribeirão Preto',
                'idEstado' => 25,
            ),
            256 => 
            array (
                'id' => 3757,
                'nome' => 'Riversul',
                'idEstado' => 25,
            ),
            257 => 
            array (
                'id' => 3758,
                'nome' => 'Rifaina',
                'idEstado' => 25,
            ),
            258 => 
            array (
                'id' => 3759,
                'nome' => 'Rincão',
                'idEstado' => 25,
            ),
            259 => 
            array (
                'id' => 3760,
                'nome' => 'Rinópolis',
                'idEstado' => 25,
            ),
            260 => 
            array (
                'id' => 3761,
                'nome' => 'Rio Claro',
                'idEstado' => 25,
            ),
            261 => 
            array (
                'id' => 3762,
                'nome' => 'Rio das Pedras',
                'idEstado' => 25,
            ),
            262 => 
            array (
                'id' => 3763,
                'nome' => 'Rio Grande da Serra',
                'idEstado' => 25,
            ),
            263 => 
            array (
                'id' => 3764,
                'nome' => 'Riolândia',
                'idEstado' => 25,
            ),
            264 => 
            array (
                'id' => 3765,
                'nome' => 'Rosana',
                'idEstado' => 25,
            ),
            265 => 
            array (
                'id' => 3766,
                'nome' => 'Roseira',
                'idEstado' => 25,
            ),
            266 => 
            array (
                'id' => 3767,
                'nome' => 'Rubiácea',
                'idEstado' => 25,
            ),
            267 => 
            array (
                'id' => 3768,
                'nome' => 'Rubinéia',
                'idEstado' => 25,
            ),
            268 => 
            array (
                'id' => 3769,
                'nome' => 'Sabino',
                'idEstado' => 25,
            ),
            269 => 
            array (
                'id' => 3770,
                'nome' => 'Sagres',
                'idEstado' => 25,
            ),
            270 => 
            array (
                'id' => 3771,
                'nome' => 'Sales',
                'idEstado' => 25,
            ),
            271 => 
            array (
                'id' => 3772,
                'nome' => 'Sales Oliveira',
                'idEstado' => 25,
            ),
            272 => 
            array (
                'id' => 3773,
                'nome' => 'Salesópolis',
                'idEstado' => 25,
            ),
            273 => 
            array (
                'id' => 3774,
                'nome' => 'Salmourão',
                'idEstado' => 25,
            ),
            274 => 
            array (
                'id' => 3775,
                'nome' => 'Saltinho',
                'idEstado' => 25,
            ),
            275 => 
            array (
                'id' => 3776,
                'nome' => 'Salto',
                'idEstado' => 25,
            ),
            276 => 
            array (
                'id' => 3777,
                'nome' => 'Salto de Pirapora',
                'idEstado' => 25,
            ),
            277 => 
            array (
                'id' => 3778,
                'nome' => 'Salto Grande',
                'idEstado' => 25,
            ),
            278 => 
            array (
                'id' => 3779,
                'nome' => 'Sandovalina',
                'idEstado' => 25,
            ),
            279 => 
            array (
                'id' => 3780,
                'nome' => 'Santa Adélia',
                'idEstado' => 25,
            ),
            280 => 
            array (
                'id' => 3781,
                'nome' => 'Santa Albertina',
                'idEstado' => 25,
            ),
            281 => 
            array (
                'id' => 3782,
                'nome' => 'Santa Bárbara D\'Oeste',
                'idEstado' => 25,
            ),
            282 => 
            array (
                'id' => 3783,
                'nome' => 'Santa Branca',
                'idEstado' => 25,
            ),
            283 => 
            array (
                'id' => 3784,
                'nome' => 'Santa Clara D\'Oeste',
                'idEstado' => 25,
            ),
            284 => 
            array (
                'id' => 3785,
                'nome' => 'Santa Cruz da Conceição',
                'idEstado' => 25,
            ),
            285 => 
            array (
                'id' => 3786,
                'nome' => 'Santa Cruz da Esperança',
                'idEstado' => 25,
            ),
            286 => 
            array (
                'id' => 3787,
                'nome' => 'Santa Cruz das Palmeiras',
                'idEstado' => 25,
            ),
            287 => 
            array (
                'id' => 3788,
                'nome' => 'Santa Cruz do Rio Pardo',
                'idEstado' => 25,
            ),
            288 => 
            array (
                'id' => 3789,
                'nome' => 'Santa Ernestina',
                'idEstado' => 25,
            ),
            289 => 
            array (
                'id' => 3790,
                'nome' => 'Santa Fé do Sul',
                'idEstado' => 25,
            ),
            290 => 
            array (
                'id' => 3791,
                'nome' => 'Santa Gertrudes',
                'idEstado' => 25,
            ),
            291 => 
            array (
                'id' => 3792,
                'nome' => 'Santa Isabel',
                'idEstado' => 25,
            ),
            292 => 
            array (
                'id' => 3793,
                'nome' => 'Santa Lúcia',
                'idEstado' => 25,
            ),
            293 => 
            array (
                'id' => 3794,
                'nome' => 'Santa Maria da Serra',
                'idEstado' => 25,
            ),
            294 => 
            array (
                'id' => 3795,
                'nome' => 'Santa Mercedes',
                'idEstado' => 25,
            ),
            295 => 
            array (
                'id' => 3796,
                'nome' => 'Santana da Ponte Pensa',
                'idEstado' => 25,
            ),
            296 => 
            array (
                'id' => 3797,
                'nome' => 'Santana de Parnaíba',
                'idEstado' => 25,
            ),
            297 => 
            array (
                'id' => 3798,
                'nome' => 'Santa Rita D\'Oeste',
                'idEstado' => 25,
            ),
            298 => 
            array (
                'id' => 3799,
                'nome' => 'Santa Rita do Passa Quatro',
                'idEstado' => 25,
            ),
            299 => 
            array (
                'id' => 3800,
                'nome' => 'Santa Rosa de Viterbo',
                'idEstado' => 25,
            ),
            300 => 
            array (
                'id' => 3801,
                'nome' => 'Santa Salete',
                'idEstado' => 25,
            ),
            301 => 
            array (
                'id' => 3802,
                'nome' => 'Santo Anastácio',
                'idEstado' => 25,
            ),
            302 => 
            array (
                'id' => 3803,
                'nome' => 'Santo André',
                'idEstado' => 25,
            ),
            303 => 
            array (
                'id' => 3804,
                'nome' => 'Santo Antônio da Alegria',
                'idEstado' => 25,
            ),
            304 => 
            array (
                'id' => 3805,
                'nome' => 'Santo Antônio de Posse',
                'idEstado' => 25,
            ),
            305 => 
            array (
                'id' => 3806,
                'nome' => 'Santo Antônio do Aracanguá',
                'idEstado' => 25,
            ),
            306 => 
            array (
                'id' => 3807,
                'nome' => 'Santo Antônio do Jardim',
                'idEstado' => 25,
            ),
            307 => 
            array (
                'id' => 3808,
                'nome' => 'Santo Antônio do Pinhal',
                'idEstado' => 25,
            ),
            308 => 
            array (
                'id' => 3809,
                'nome' => 'Santo Expedito',
                'idEstado' => 25,
            ),
            309 => 
            array (
                'id' => 3810,
                'nome' => 'Santópolis do Aguapeí',
                'idEstado' => 25,
            ),
            310 => 
            array (
                'id' => 3811,
                'nome' => 'Santos',
                'idEstado' => 25,
            ),
            311 => 
            array (
                'id' => 3812,
                'nome' => 'São Bento do Sapucaí',
                'idEstado' => 25,
            ),
            312 => 
            array (
                'id' => 3813,
                'nome' => 'São Bernardo do Campo',
                'idEstado' => 25,
            ),
            313 => 
            array (
                'id' => 3814,
                'nome' => 'São Caetano do Sul',
                'idEstado' => 25,
            ),
            314 => 
            array (
                'id' => 3815,
                'nome' => 'São Carlos',
                'idEstado' => 25,
            ),
            315 => 
            array (
                'id' => 3816,
                'nome' => 'São Francisco',
                'idEstado' => 25,
            ),
            316 => 
            array (
                'id' => 3817,
                'nome' => 'São João da Boa Vista',
                'idEstado' => 25,
            ),
            317 => 
            array (
                'id' => 3818,
                'nome' => 'São João das Duas Pontes',
                'idEstado' => 25,
            ),
            318 => 
            array (
                'id' => 3819,
                'nome' => 'São João de Iracema',
                'idEstado' => 25,
            ),
            319 => 
            array (
                'id' => 3820,
                'nome' => 'São João do Pau D\'Alho',
                'idEstado' => 25,
            ),
            320 => 
            array (
                'id' => 3821,
                'nome' => 'São Joaquim da Barra',
                'idEstado' => 25,
            ),
            321 => 
            array (
                'id' => 3822,
                'nome' => 'São José da Bela Vista',
                'idEstado' => 25,
            ),
            322 => 
            array (
                'id' => 3823,
                'nome' => 'São José do Barreiro',
                'idEstado' => 25,
            ),
            323 => 
            array (
                'id' => 3824,
                'nome' => 'São José do Rio Pardo',
                'idEstado' => 25,
            ),
            324 => 
            array (
                'id' => 3825,
                'nome' => 'São José do Rio Preto',
                'idEstado' => 25,
            ),
            325 => 
            array (
                'id' => 3826,
                'nome' => 'São José dos Campos',
                'idEstado' => 25,
            ),
            326 => 
            array (
                'id' => 3827,
                'nome' => 'São Lourenço da Serra',
                'idEstado' => 25,
            ),
            327 => 
            array (
                'id' => 3828,
                'nome' => 'São Luís do Paraitinga',
                'idEstado' => 25,
            ),
            328 => 
            array (
                'id' => 3829,
                'nome' => 'São Manuel',
                'idEstado' => 25,
            ),
            329 => 
            array (
                'id' => 3830,
                'nome' => 'São Miguel Arcanjo',
                'idEstado' => 25,
            ),
            330 => 
            array (
                'id' => 3831,
                'nome' => 'São Paulo',
                'idEstado' => 25,
            ),
            331 => 
            array (
                'id' => 3832,
                'nome' => 'São Pedro',
                'idEstado' => 25,
            ),
            332 => 
            array (
                'id' => 3833,
                'nome' => 'São Pedro do Turvo',
                'idEstado' => 25,
            ),
            333 => 
            array (
                'id' => 3834,
                'nome' => 'São Roque',
                'idEstado' => 25,
            ),
            334 => 
            array (
                'id' => 3835,
                'nome' => 'São Sebastião',
                'idEstado' => 25,
            ),
            335 => 
            array (
                'id' => 3836,
                'nome' => 'São Sebastião da Grama',
                'idEstado' => 25,
            ),
            336 => 
            array (
                'id' => 3837,
                'nome' => 'São Simão',
                'idEstado' => 25,
            ),
            337 => 
            array (
                'id' => 3838,
                'nome' => 'São Vicente',
                'idEstado' => 25,
            ),
            338 => 
            array (
                'id' => 3839,
                'nome' => 'Sarapuí',
                'idEstado' => 25,
            ),
            339 => 
            array (
                'id' => 3840,
                'nome' => 'Sarutaiá',
                'idEstado' => 25,
            ),
            340 => 
            array (
                'id' => 3841,
                'nome' => 'Sebastianópolis do Sul',
                'idEstado' => 25,
            ),
            341 => 
            array (
                'id' => 3842,
                'nome' => 'Serra Azul',
                'idEstado' => 25,
            ),
            342 => 
            array (
                'id' => 3843,
                'nome' => 'Serrana',
                'idEstado' => 25,
            ),
            343 => 
            array (
                'id' => 3844,
                'nome' => 'Serra Negra',
                'idEstado' => 25,
            ),
            344 => 
            array (
                'id' => 3845,
                'nome' => 'Sertãozinho',
                'idEstado' => 25,
            ),
            345 => 
            array (
                'id' => 3846,
                'nome' => 'Sete Barras',
                'idEstado' => 25,
            ),
            346 => 
            array (
                'id' => 3847,
                'nome' => 'Severínia',
                'idEstado' => 25,
            ),
            347 => 
            array (
                'id' => 3848,
                'nome' => 'Silveiras',
                'idEstado' => 25,
            ),
            348 => 
            array (
                'id' => 3849,
                'nome' => 'Socorro',
                'idEstado' => 25,
            ),
            349 => 
            array (
                'id' => 3850,
                'nome' => 'Sorocaba',
                'idEstado' => 25,
            ),
            350 => 
            array (
                'id' => 3851,
                'nome' => 'Sud Mennucci',
                'idEstado' => 25,
            ),
            351 => 
            array (
                'id' => 3852,
                'nome' => 'Sumaré',
                'idEstado' => 25,
            ),
            352 => 
            array (
                'id' => 3853,
                'nome' => 'Suzano',
                'idEstado' => 25,
            ),
            353 => 
            array (
                'id' => 3854,
                'nome' => 'Suzanápolis',
                'idEstado' => 25,
            ),
            354 => 
            array (
                'id' => 3855,
                'nome' => 'Tabapuã',
                'idEstado' => 25,
            ),
            355 => 
            array (
                'id' => 3856,
                'nome' => 'Tabatinga',
                'idEstado' => 25,
            ),
            356 => 
            array (
                'id' => 3857,
                'nome' => 'Taboão da Serra',
                'idEstado' => 25,
            ),
            357 => 
            array (
                'id' => 3858,
                'nome' => 'Taciba',
                'idEstado' => 25,
            ),
            358 => 
            array (
                'id' => 3859,
                'nome' => 'Taguaí',
                'idEstado' => 25,
            ),
            359 => 
            array (
                'id' => 3860,
                'nome' => 'Taiaçu',
                'idEstado' => 25,
            ),
            360 => 
            array (
                'id' => 3861,
                'nome' => 'Taiúva',
                'idEstado' => 25,
            ),
            361 => 
            array (
                'id' => 3862,
                'nome' => 'Tambaú',
                'idEstado' => 25,
            ),
            362 => 
            array (
                'id' => 3863,
                'nome' => 'Tanabi',
                'idEstado' => 25,
            ),
            363 => 
            array (
                'id' => 3864,
                'nome' => 'Tapiraí',
                'idEstado' => 25,
            ),
            364 => 
            array (
                'id' => 3865,
                'nome' => 'Tapiratiba',
                'idEstado' => 25,
            ),
            365 => 
            array (
                'id' => 3866,
                'nome' => 'Taquaral',
                'idEstado' => 25,
            ),
            366 => 
            array (
                'id' => 3867,
                'nome' => 'Taquaritinga',
                'idEstado' => 25,
            ),
            367 => 
            array (
                'id' => 3868,
                'nome' => 'Taquarituba',
                'idEstado' => 25,
            ),
            368 => 
            array (
                'id' => 3869,
                'nome' => 'Taquarivaí',
                'idEstado' => 25,
            ),
            369 => 
            array (
                'id' => 3870,
                'nome' => 'Tarabai',
                'idEstado' => 25,
            ),
            370 => 
            array (
                'id' => 3871,
                'nome' => 'Tarumã',
                'idEstado' => 25,
            ),
            371 => 
            array (
                'id' => 3872,
                'nome' => 'Tatuí',
                'idEstado' => 25,
            ),
            372 => 
            array (
                'id' => 3873,
                'nome' => 'Taubaté',
                'idEstado' => 25,
            ),
            373 => 
            array (
                'id' => 3874,
                'nome' => 'Tejupá',
                'idEstado' => 25,
            ),
            374 => 
            array (
                'id' => 3875,
                'nome' => 'Teodoro Sampaio',
                'idEstado' => 25,
            ),
            375 => 
            array (
                'id' => 3876,
                'nome' => 'Terra Roxa',
                'idEstado' => 25,
            ),
            376 => 
            array (
                'id' => 3877,
                'nome' => 'Tietê',
                'idEstado' => 25,
            ),
            377 => 
            array (
                'id' => 3878,
                'nome' => 'Timburi',
                'idEstado' => 25,
            ),
            378 => 
            array (
                'id' => 3879,
                'nome' => 'Torre de Pedra',
                'idEstado' => 25,
            ),
            379 => 
            array (
                'id' => 3880,
                'nome' => 'Torrinha',
                'idEstado' => 25,
            ),
            380 => 
            array (
                'id' => 3881,
                'nome' => 'Trabiju',
                'idEstado' => 25,
            ),
            381 => 
            array (
                'id' => 3882,
                'nome' => 'Tremembé',
                'idEstado' => 25,
            ),
            382 => 
            array (
                'id' => 3883,
                'nome' => 'Três Fronteiras',
                'idEstado' => 25,
            ),
            383 => 
            array (
                'id' => 3884,
                'nome' => 'Tuiuti',
                'idEstado' => 25,
            ),
            384 => 
            array (
                'id' => 3885,
                'nome' => 'Tupã',
                'idEstado' => 25,
            ),
            385 => 
            array (
                'id' => 3886,
                'nome' => 'Tupi Paulista',
                'idEstado' => 25,
            ),
            386 => 
            array (
                'id' => 3887,
                'nome' => 'Turiúba',
                'idEstado' => 25,
            ),
            387 => 
            array (
                'id' => 3888,
                'nome' => 'Turmalina',
                'idEstado' => 25,
            ),
            388 => 
            array (
                'id' => 3889,
                'nome' => 'Ubarana',
                'idEstado' => 25,
            ),
            389 => 
            array (
                'id' => 3890,
                'nome' => 'Ubatuba',
                'idEstado' => 25,
            ),
            390 => 
            array (
                'id' => 3891,
                'nome' => 'Ubirajara',
                'idEstado' => 25,
            ),
            391 => 
            array (
                'id' => 3892,
                'nome' => 'Uchoa',
                'idEstado' => 25,
            ),
            392 => 
            array (
                'id' => 3893,
                'nome' => 'União Paulista',
                'idEstado' => 25,
            ),
            393 => 
            array (
                'id' => 3894,
                'nome' => 'Urânia',
                'idEstado' => 25,
            ),
            394 => 
            array (
                'id' => 3895,
                'nome' => 'Uru',
                'idEstado' => 25,
            ),
            395 => 
            array (
                'id' => 3896,
                'nome' => 'Urupês',
                'idEstado' => 25,
            ),
            396 => 
            array (
                'id' => 3897,
                'nome' => 'Valentim Gentil',
                'idEstado' => 25,
            ),
            397 => 
            array (
                'id' => 3898,
                'nome' => 'Valinhos',
                'idEstado' => 25,
            ),
            398 => 
            array (
                'id' => 3899,
                'nome' => 'Valparaíso',
                'idEstado' => 25,
            ),
            399 => 
            array (
                'id' => 3900,
                'nome' => 'Vargem',
                'idEstado' => 25,
            ),
            400 => 
            array (
                'id' => 3901,
                'nome' => 'Vargem Grande do Sul',
                'idEstado' => 25,
            ),
            401 => 
            array (
                'id' => 3902,
                'nome' => 'Vargem Grande Paulista',
                'idEstado' => 25,
            ),
            402 => 
            array (
                'id' => 3903,
                'nome' => 'Várzea Paulista',
                'idEstado' => 25,
            ),
            403 => 
            array (
                'id' => 3904,
                'nome' => 'Vera Cruz',
                'idEstado' => 25,
            ),
            404 => 
            array (
                'id' => 3905,
                'nome' => 'Vinhedo',
                'idEstado' => 25,
            ),
            405 => 
            array (
                'id' => 3906,
                'nome' => 'Viradouro',
                'idEstado' => 25,
            ),
            406 => 
            array (
                'id' => 3907,
                'nome' => 'Vista Alegre do Alto',
                'idEstado' => 25,
            ),
            407 => 
            array (
                'id' => 3908,
                'nome' => 'Vitória Brasil',
                'idEstado' => 25,
            ),
            408 => 
            array (
                'id' => 3909,
                'nome' => 'Votorantim',
                'idEstado' => 25,
            ),
            409 => 
            array (
                'id' => 3910,
                'nome' => 'Votuporanga',
                'idEstado' => 25,
            ),
            410 => 
            array (
                'id' => 3911,
                'nome' => 'Zacarias',
                'idEstado' => 25,
            ),
            411 => 
            array (
                'id' => 3912,
                'nome' => 'Chavantes',
                'idEstado' => 25,
            ),
            412 => 
            array (
                'id' => 3913,
                'nome' => 'Estiva Gerbi',
                'idEstado' => 25,
            ),
            413 => 
            array (
                'id' => 3914,
                'nome' => 'Abatiá',
                'idEstado' => 16,
            ),
            414 => 
            array (
                'id' => 3915,
                'nome' => 'Adrianópolis',
                'idEstado' => 16,
            ),
            415 => 
            array (
                'id' => 3916,
                'nome' => 'Agudos do Sul',
                'idEstado' => 16,
            ),
            416 => 
            array (
                'id' => 3917,
                'nome' => 'Almirante Tamandaré',
                'idEstado' => 16,
            ),
            417 => 
            array (
                'id' => 3918,
                'nome' => 'Altamira do Paraná',
                'idEstado' => 16,
            ),
            418 => 
            array (
                'id' => 3919,
                'nome' => 'Altônia',
                'idEstado' => 16,
            ),
            419 => 
            array (
                'id' => 3920,
                'nome' => 'Alto Paraná',
                'idEstado' => 16,
            ),
            420 => 
            array (
                'id' => 3921,
                'nome' => 'Alto Piquiri',
                'idEstado' => 16,
            ),
            421 => 
            array (
                'id' => 3922,
                'nome' => 'Alvorada do Sul',
                'idEstado' => 16,
            ),
            422 => 
            array (
                'id' => 3923,
                'nome' => 'Amaporã',
                'idEstado' => 16,
            ),
            423 => 
            array (
                'id' => 3924,
                'nome' => 'Ampére',
                'idEstado' => 16,
            ),
            424 => 
            array (
                'id' => 3925,
                'nome' => 'Anahy',
                'idEstado' => 16,
            ),
            425 => 
            array (
                'id' => 3926,
                'nome' => 'Andirá',
                'idEstado' => 16,
            ),
            426 => 
            array (
                'id' => 3927,
                'nome' => 'Ângulo',
                'idEstado' => 16,
            ),
            427 => 
            array (
                'id' => 3928,
                'nome' => 'Antonina',
                'idEstado' => 16,
            ),
            428 => 
            array (
                'id' => 3929,
                'nome' => 'Antônio Olinto',
                'idEstado' => 16,
            ),
            429 => 
            array (
                'id' => 3930,
                'nome' => 'Apucarana',
                'idEstado' => 16,
            ),
            430 => 
            array (
                'id' => 3931,
                'nome' => 'Arapongas',
                'idEstado' => 16,
            ),
            431 => 
            array (
                'id' => 3932,
                'nome' => 'Arapoti',
                'idEstado' => 16,
            ),
            432 => 
            array (
                'id' => 3933,
                'nome' => 'Arapuã',
                'idEstado' => 16,
            ),
            433 => 
            array (
                'id' => 3934,
                'nome' => 'Araruna',
                'idEstado' => 16,
            ),
            434 => 
            array (
                'id' => 3935,
                'nome' => 'Araucária',
                'idEstado' => 16,
            ),
            435 => 
            array (
                'id' => 3936,
                'nome' => 'Ariranha do Ivaí',
                'idEstado' => 16,
            ),
            436 => 
            array (
                'id' => 3937,
                'nome' => 'Assaí',
                'idEstado' => 16,
            ),
            437 => 
            array (
                'id' => 3938,
                'nome' => 'Assis Chateaubriand',
                'idEstado' => 16,
            ),
            438 => 
            array (
                'id' => 3939,
                'nome' => 'Astorga',
                'idEstado' => 16,
            ),
            439 => 
            array (
                'id' => 3940,
                'nome' => 'Atalaia',
                'idEstado' => 16,
            ),
            440 => 
            array (
                'id' => 3941,
                'nome' => 'Balsa Nova',
                'idEstado' => 16,
            ),
            441 => 
            array (
                'id' => 3942,
                'nome' => 'Bandeirantes',
                'idEstado' => 16,
            ),
            442 => 
            array (
                'id' => 3943,
                'nome' => 'Barbosa Ferraz',
                'idEstado' => 16,
            ),
            443 => 
            array (
                'id' => 3944,
                'nome' => 'Barracão',
                'idEstado' => 16,
            ),
            444 => 
            array (
                'id' => 3945,
                'nome' => 'Barra do Jacaré',
                'idEstado' => 16,
            ),
            445 => 
            array (
                'id' => 3946,
                'nome' => 'Bela Vista da Caroba',
                'idEstado' => 16,
            ),
            446 => 
            array (
                'id' => 3947,
                'nome' => 'Bela Vista do Paraíso',
                'idEstado' => 16,
            ),
            447 => 
            array (
                'id' => 3948,
                'nome' => 'Bituruna',
                'idEstado' => 16,
            ),
            448 => 
            array (
                'id' => 3949,
                'nome' => 'Boa Esperança',
                'idEstado' => 16,
            ),
            449 => 
            array (
                'id' => 3950,
                'nome' => 'Boa Esperança do Iguaçu',
                'idEstado' => 16,
            ),
            450 => 
            array (
                'id' => 3951,
                'nome' => 'Boa Ventura de São Roque',
                'idEstado' => 16,
            ),
            451 => 
            array (
                'id' => 3952,
                'nome' => 'Boa Vista da Aparecida',
                'idEstado' => 16,
            ),
            452 => 
            array (
                'id' => 3953,
                'nome' => 'Bocaiúva do Sul',
                'idEstado' => 16,
            ),
            453 => 
            array (
                'id' => 3954,
                'nome' => 'Bom Jesus do Sul',
                'idEstado' => 16,
            ),
            454 => 
            array (
                'id' => 3955,
                'nome' => 'Bom Sucesso',
                'idEstado' => 16,
            ),
            455 => 
            array (
                'id' => 3956,
                'nome' => 'Bom Sucesso do Sul',
                'idEstado' => 16,
            ),
            456 => 
            array (
                'id' => 3957,
                'nome' => 'Borrazópolis',
                'idEstado' => 16,
            ),
            457 => 
            array (
                'id' => 3958,
                'nome' => 'Braganey',
                'idEstado' => 16,
            ),
            458 => 
            array (
                'id' => 3959,
                'nome' => 'Brasilândia do Sul',
                'idEstado' => 16,
            ),
            459 => 
            array (
                'id' => 3960,
                'nome' => 'Cafeara',
                'idEstado' => 16,
            ),
            460 => 
            array (
                'id' => 3961,
                'nome' => 'Cafelândia',
                'idEstado' => 16,
            ),
            461 => 
            array (
                'id' => 3962,
                'nome' => 'Cafezal do Sul',
                'idEstado' => 16,
            ),
            462 => 
            array (
                'id' => 3963,
                'nome' => 'Califórnia',
                'idEstado' => 16,
            ),
            463 => 
            array (
                'id' => 3964,
                'nome' => 'Cambará',
                'idEstado' => 16,
            ),
            464 => 
            array (
                'id' => 3965,
                'nome' => 'Cambé',
                'idEstado' => 16,
            ),
            465 => 
            array (
                'id' => 3966,
                'nome' => 'Cambira',
                'idEstado' => 16,
            ),
            466 => 
            array (
                'id' => 3967,
                'nome' => 'Campina da Lagoa',
                'idEstado' => 16,
            ),
            467 => 
            array (
                'id' => 3968,
                'nome' => 'Campina do Simão',
                'idEstado' => 16,
            ),
            468 => 
            array (
                'id' => 3969,
                'nome' => 'Campina Grande do Sul',
                'idEstado' => 16,
            ),
            469 => 
            array (
                'id' => 3970,
                'nome' => 'Campo Bonito',
                'idEstado' => 16,
            ),
            470 => 
            array (
                'id' => 3971,
                'nome' => 'Campo do Tenente',
                'idEstado' => 16,
            ),
            471 => 
            array (
                'id' => 3972,
                'nome' => 'Campo Largo',
                'idEstado' => 16,
            ),
            472 => 
            array (
                'id' => 3973,
                'nome' => 'Campo Magro',
                'idEstado' => 16,
            ),
            473 => 
            array (
                'id' => 3974,
                'nome' => 'Campo Mourão',
                'idEstado' => 16,
            ),
            474 => 
            array (
                'id' => 3975,
                'nome' => 'Cândido de Abreu',
                'idEstado' => 16,
            ),
            475 => 
            array (
                'id' => 3976,
                'nome' => 'Candói',
                'idEstado' => 16,
            ),
            476 => 
            array (
                'id' => 3977,
                'nome' => 'Cantagalo',
                'idEstado' => 16,
            ),
            477 => 
            array (
                'id' => 3978,
                'nome' => 'Capanema',
                'idEstado' => 16,
            ),
            478 => 
            array (
                'id' => 3979,
                'nome' => 'Capitão Leônidas Marques',
                'idEstado' => 16,
            ),
            479 => 
            array (
                'id' => 3980,
                'nome' => 'Carambeí',
                'idEstado' => 16,
            ),
            480 => 
            array (
                'id' => 3981,
                'nome' => 'Carlópolis',
                'idEstado' => 16,
            ),
            481 => 
            array (
                'id' => 3982,
                'nome' => 'Cascavel',
                'idEstado' => 16,
            ),
            482 => 
            array (
                'id' => 3983,
                'nome' => 'Castro',
                'idEstado' => 16,
            ),
            483 => 
            array (
                'id' => 3984,
                'nome' => 'Catanduvas',
                'idEstado' => 16,
            ),
            484 => 
            array (
                'id' => 3985,
                'nome' => 'Centenário do Sul',
                'idEstado' => 16,
            ),
            485 => 
            array (
                'id' => 3986,
                'nome' => 'Cerro Azul',
                'idEstado' => 16,
            ),
            486 => 
            array (
                'id' => 3987,
                'nome' => 'Céu Azul',
                'idEstado' => 16,
            ),
            487 => 
            array (
                'id' => 3988,
                'nome' => 'Chopinzinho',
                'idEstado' => 16,
            ),
            488 => 
            array (
                'id' => 3989,
                'nome' => 'Cianorte',
                'idEstado' => 16,
            ),
            489 => 
            array (
                'id' => 3990,
                'nome' => 'Cidade Gaúcha',
                'idEstado' => 16,
            ),
            490 => 
            array (
                'id' => 3991,
                'nome' => 'Clevelândia',
                'idEstado' => 16,
            ),
            491 => 
            array (
                'id' => 3992,
                'nome' => 'Colombo',
                'idEstado' => 16,
            ),
            492 => 
            array (
                'id' => 3993,
                'nome' => 'Colorado',
                'idEstado' => 16,
            ),
            493 => 
            array (
                'id' => 3994,
                'nome' => 'Congonhinhas',
                'idEstado' => 16,
            ),
            494 => 
            array (
                'id' => 3995,
                'nome' => 'Conselheiro Mairinck',
                'idEstado' => 16,
            ),
            495 => 
            array (
                'id' => 3996,
                'nome' => 'Contenda',
                'idEstado' => 16,
            ),
            496 => 
            array (
                'id' => 3997,
                'nome' => 'Corbélia',
                'idEstado' => 16,
            ),
            497 => 
            array (
                'id' => 3998,
                'nome' => 'Cornélio Procópio',
                'idEstado' => 16,
            ),
            498 => 
            array (
                'id' => 3999,
                'nome' => 'Coronel Domingos Soares',
                'idEstado' => 16,
            ),
            499 => 
            array (
                'id' => 4000,
                'nome' => 'Coronel Vivida',
                'idEstado' => 16,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 4001,
                'nome' => 'Corumbataí do Sul',
                'idEstado' => 16,
            ),
            1 => 
            array (
                'id' => 4002,
                'nome' => 'Cruzeiro do Iguaçu',
                'idEstado' => 16,
            ),
            2 => 
            array (
                'id' => 4003,
                'nome' => 'Cruzeiro do Oeste',
                'idEstado' => 16,
            ),
            3 => 
            array (
                'id' => 4004,
                'nome' => 'Cruzeiro do Sul',
                'idEstado' => 16,
            ),
            4 => 
            array (
                'id' => 4005,
                'nome' => 'Cruz Machado',
                'idEstado' => 16,
            ),
            5 => 
            array (
                'id' => 4006,
                'nome' => 'Cruzmaltina',
                'idEstado' => 16,
            ),
            6 => 
            array (
                'id' => 4007,
                'nome' => 'Curitiba',
                'idEstado' => 16,
            ),
            7 => 
            array (
                'id' => 4008,
                'nome' => 'Curiúva',
                'idEstado' => 16,
            ),
            8 => 
            array (
                'id' => 4009,
                'nome' => 'Diamante do Norte',
                'idEstado' => 16,
            ),
            9 => 
            array (
                'id' => 4010,
                'nome' => 'Diamante do Sul',
                'idEstado' => 16,
            ),
            10 => 
            array (
                'id' => 4011,
                'nome' => 'Diamante D\'Oeste',
                'idEstado' => 16,
            ),
            11 => 
            array (
                'id' => 4012,
                'nome' => 'Dois Vizinhos',
                'idEstado' => 16,
            ),
            12 => 
            array (
                'id' => 4013,
                'nome' => 'Douradina',
                'idEstado' => 16,
            ),
            13 => 
            array (
                'id' => 4014,
                'nome' => 'Doutor Camargo',
                'idEstado' => 16,
            ),
            14 => 
            array (
                'id' => 4015,
                'nome' => 'Enéas Marques',
                'idEstado' => 16,
            ),
            15 => 
            array (
                'id' => 4016,
                'nome' => 'Engenheiro Beltrão',
                'idEstado' => 16,
            ),
            16 => 
            array (
                'id' => 4017,
                'nome' => 'Esperança Nova',
                'idEstado' => 16,
            ),
            17 => 
            array (
                'id' => 4018,
                'nome' => 'Entre Rios do Oeste',
                'idEstado' => 16,
            ),
            18 => 
            array (
                'id' => 4019,
                'nome' => 'Espigão Alto do Iguaçu',
                'idEstado' => 16,
            ),
            19 => 
            array (
                'id' => 4020,
                'nome' => 'Farol',
                'idEstado' => 16,
            ),
            20 => 
            array (
                'id' => 4021,
                'nome' => 'Faxinal',
                'idEstado' => 16,
            ),
            21 => 
            array (
                'id' => 4022,
                'nome' => 'Fazenda Rio Grande',
                'idEstado' => 16,
            ),
            22 => 
            array (
                'id' => 4023,
                'nome' => 'Fênix',
                'idEstado' => 16,
            ),
            23 => 
            array (
                'id' => 4024,
                'nome' => 'Fernandes Pinheiro',
                'idEstado' => 16,
            ),
            24 => 
            array (
                'id' => 4025,
                'nome' => 'Figueira',
                'idEstado' => 16,
            ),
            25 => 
            array (
                'id' => 4026,
                'nome' => 'Floraí',
                'idEstado' => 16,
            ),
            26 => 
            array (
                'id' => 4027,
                'nome' => 'Flor da Serra do Sul',
                'idEstado' => 16,
            ),
            27 => 
            array (
                'id' => 4028,
                'nome' => 'Floresta',
                'idEstado' => 16,
            ),
            28 => 
            array (
                'id' => 4029,
                'nome' => 'Florestópolis',
                'idEstado' => 16,
            ),
            29 => 
            array (
                'id' => 4030,
                'nome' => 'Flórida',
                'idEstado' => 16,
            ),
            30 => 
            array (
                'id' => 4031,
                'nome' => 'Formosa do Oeste',
                'idEstado' => 16,
            ),
            31 => 
            array (
                'id' => 4032,
                'nome' => 'Foz do Iguaçu',
                'idEstado' => 16,
            ),
            32 => 
            array (
                'id' => 4033,
                'nome' => 'Francisco Alves',
                'idEstado' => 16,
            ),
            33 => 
            array (
                'id' => 4034,
                'nome' => 'Francisco Beltrão',
                'idEstado' => 16,
            ),
            34 => 
            array (
                'id' => 4035,
                'nome' => 'Foz do Jordão',
                'idEstado' => 16,
            ),
            35 => 
            array (
                'id' => 4036,
                'nome' => 'General Carneiro',
                'idEstado' => 16,
            ),
            36 => 
            array (
                'id' => 4037,
                'nome' => 'Godoy Moreira',
                'idEstado' => 16,
            ),
            37 => 
            array (
                'id' => 4038,
                'nome' => 'Goioerê',
                'idEstado' => 16,
            ),
            38 => 
            array (
                'id' => 4039,
                'nome' => 'Goioxim',
                'idEstado' => 16,
            ),
            39 => 
            array (
                'id' => 4040,
                'nome' => 'Grandes Rios',
                'idEstado' => 16,
            ),
            40 => 
            array (
                'id' => 4041,
                'nome' => 'Guaíra',
                'idEstado' => 16,
            ),
            41 => 
            array (
                'id' => 4042,
                'nome' => 'Guairaçá',
                'idEstado' => 16,
            ),
            42 => 
            array (
                'id' => 4043,
                'nome' => 'Guamiranga',
                'idEstado' => 16,
            ),
            43 => 
            array (
                'id' => 4044,
                'nome' => 'Guapirama',
                'idEstado' => 16,
            ),
            44 => 
            array (
                'id' => 4045,
                'nome' => 'Guaporema',
                'idEstado' => 16,
            ),
            45 => 
            array (
                'id' => 4046,
                'nome' => 'Guaraci',
                'idEstado' => 16,
            ),
            46 => 
            array (
                'id' => 4047,
                'nome' => 'Guaraniaçu',
                'idEstado' => 16,
            ),
            47 => 
            array (
                'id' => 4048,
                'nome' => 'Guarapuava',
                'idEstado' => 16,
            ),
            48 => 
            array (
                'id' => 4049,
                'nome' => 'Guaraqueçaba',
                'idEstado' => 16,
            ),
            49 => 
            array (
                'id' => 4050,
                'nome' => 'Guaratuba',
                'idEstado' => 16,
            ),
            50 => 
            array (
                'id' => 4051,
                'nome' => 'Honório Serpa',
                'idEstado' => 16,
            ),
            51 => 
            array (
                'id' => 4052,
                'nome' => 'Ibaiti',
                'idEstado' => 16,
            ),
            52 => 
            array (
                'id' => 4053,
                'nome' => 'Ibema',
                'idEstado' => 16,
            ),
            53 => 
            array (
                'id' => 4054,
                'nome' => 'Ibiporã',
                'idEstado' => 16,
            ),
            54 => 
            array (
                'id' => 4055,
                'nome' => 'Icaraíma',
                'idEstado' => 16,
            ),
            55 => 
            array (
                'id' => 4056,
                'nome' => 'Iguaraçu',
                'idEstado' => 16,
            ),
            56 => 
            array (
                'id' => 4057,
                'nome' => 'Iguatu',
                'idEstado' => 16,
            ),
            57 => 
            array (
                'id' => 4058,
                'nome' => 'Imbaú',
                'idEstado' => 16,
            ),
            58 => 
            array (
                'id' => 4059,
                'nome' => 'Imbituva',
                'idEstado' => 16,
            ),
            59 => 
            array (
                'id' => 4060,
                'nome' => 'Inácio Martins',
                'idEstado' => 16,
            ),
            60 => 
            array (
                'id' => 4061,
                'nome' => 'Inajá',
                'idEstado' => 16,
            ),
            61 => 
            array (
                'id' => 4062,
                'nome' => 'Indianópolis',
                'idEstado' => 16,
            ),
            62 => 
            array (
                'id' => 4063,
                'nome' => 'Ipiranga',
                'idEstado' => 16,
            ),
            63 => 
            array (
                'id' => 4064,
                'nome' => 'Iporã',
                'idEstado' => 16,
            ),
            64 => 
            array (
                'id' => 4065,
                'nome' => 'Iracema do Oeste',
                'idEstado' => 16,
            ),
            65 => 
            array (
                'id' => 4066,
                'nome' => 'Irati',
                'idEstado' => 16,
            ),
            66 => 
            array (
                'id' => 4067,
                'nome' => 'Iretama',
                'idEstado' => 16,
            ),
            67 => 
            array (
                'id' => 4068,
                'nome' => 'Itaguajé',
                'idEstado' => 16,
            ),
            68 => 
            array (
                'id' => 4069,
                'nome' => 'Itaipulândia',
                'idEstado' => 16,
            ),
            69 => 
            array (
                'id' => 4070,
                'nome' => 'Itambaracá',
                'idEstado' => 16,
            ),
            70 => 
            array (
                'id' => 4071,
                'nome' => 'Itambé',
                'idEstado' => 16,
            ),
            71 => 
            array (
                'id' => 4072,
                'nome' => 'Itapejara D\'Oeste',
                'idEstado' => 16,
            ),
            72 => 
            array (
                'id' => 4073,
                'nome' => 'Itaperuçu',
                'idEstado' => 16,
            ),
            73 => 
            array (
                'id' => 4074,
                'nome' => 'Itaúna do Sul',
                'idEstado' => 16,
            ),
            74 => 
            array (
                'id' => 4075,
                'nome' => 'Ivaí',
                'idEstado' => 16,
            ),
            75 => 
            array (
                'id' => 4076,
                'nome' => 'Ivaiporã',
                'idEstado' => 16,
            ),
            76 => 
            array (
                'id' => 4077,
                'nome' => 'Ivaté',
                'idEstado' => 16,
            ),
            77 => 
            array (
                'id' => 4078,
                'nome' => 'Ivatuba',
                'idEstado' => 16,
            ),
            78 => 
            array (
                'id' => 4079,
                'nome' => 'Jaboti',
                'idEstado' => 16,
            ),
            79 => 
            array (
                'id' => 4080,
                'nome' => 'Jacarezinho',
                'idEstado' => 16,
            ),
            80 => 
            array (
                'id' => 4081,
                'nome' => 'Jaguapitã',
                'idEstado' => 16,
            ),
            81 => 
            array (
                'id' => 4082,
                'nome' => 'Jaguariaíva',
                'idEstado' => 16,
            ),
            82 => 
            array (
                'id' => 4083,
                'nome' => 'Jandaia do Sul',
                'idEstado' => 16,
            ),
            83 => 
            array (
                'id' => 4084,
                'nome' => 'Janiópolis',
                'idEstado' => 16,
            ),
            84 => 
            array (
                'id' => 4085,
                'nome' => 'Japira',
                'idEstado' => 16,
            ),
            85 => 
            array (
                'id' => 4086,
                'nome' => 'Japurá',
                'idEstado' => 16,
            ),
            86 => 
            array (
                'id' => 4087,
                'nome' => 'Jardim Alegre',
                'idEstado' => 16,
            ),
            87 => 
            array (
                'id' => 4088,
                'nome' => 'Jardim Olinda',
                'idEstado' => 16,
            ),
            88 => 
            array (
                'id' => 4089,
                'nome' => 'Jataizinho',
                'idEstado' => 16,
            ),
            89 => 
            array (
                'id' => 4090,
                'nome' => 'Jesuítas',
                'idEstado' => 16,
            ),
            90 => 
            array (
                'id' => 4091,
                'nome' => 'Joaquim Távora',
                'idEstado' => 16,
            ),
            91 => 
            array (
                'id' => 4092,
                'nome' => 'Jundiaí do Sul',
                'idEstado' => 16,
            ),
            92 => 
            array (
                'id' => 4093,
                'nome' => 'Juranda',
                'idEstado' => 16,
            ),
            93 => 
            array (
                'id' => 4094,
                'nome' => 'Jussara',
                'idEstado' => 16,
            ),
            94 => 
            array (
                'id' => 4095,
                'nome' => 'Kaloré',
                'idEstado' => 16,
            ),
            95 => 
            array (
                'id' => 4096,
                'nome' => 'Lapa',
                'idEstado' => 16,
            ),
            96 => 
            array (
                'id' => 4097,
                'nome' => 'Laranjal',
                'idEstado' => 16,
            ),
            97 => 
            array (
                'id' => 4098,
                'nome' => 'Laranjeiras do Sul',
                'idEstado' => 16,
            ),
            98 => 
            array (
                'id' => 4099,
                'nome' => 'Leópolis',
                'idEstado' => 16,
            ),
            99 => 
            array (
                'id' => 4100,
                'nome' => 'Lidianópolis',
                'idEstado' => 16,
            ),
            100 => 
            array (
                'id' => 4101,
                'nome' => 'Lindoeste',
                'idEstado' => 16,
            ),
            101 => 
            array (
                'id' => 4102,
                'nome' => 'Loanda',
                'idEstado' => 16,
            ),
            102 => 
            array (
                'id' => 4103,
                'nome' => 'Lobato',
                'idEstado' => 16,
            ),
            103 => 
            array (
                'id' => 4104,
                'nome' => 'Londrina',
                'idEstado' => 16,
            ),
            104 => 
            array (
                'id' => 4105,
                'nome' => 'Luiziana',
                'idEstado' => 16,
            ),
            105 => 
            array (
                'id' => 4106,
                'nome' => 'Lunardelli',
                'idEstado' => 16,
            ),
            106 => 
            array (
                'id' => 4107,
                'nome' => 'Lupionópolis',
                'idEstado' => 16,
            ),
            107 => 
            array (
                'id' => 4108,
                'nome' => 'Mallet',
                'idEstado' => 16,
            ),
            108 => 
            array (
                'id' => 4109,
                'nome' => 'Mamborê',
                'idEstado' => 16,
            ),
            109 => 
            array (
                'id' => 4110,
                'nome' => 'Mandaguaçu',
                'idEstado' => 16,
            ),
            110 => 
            array (
                'id' => 4111,
                'nome' => 'Mandaguari',
                'idEstado' => 16,
            ),
            111 => 
            array (
                'id' => 4112,
                'nome' => 'Mandirituba',
                'idEstado' => 16,
            ),
            112 => 
            array (
                'id' => 4113,
                'nome' => 'Manfrinópolis',
                'idEstado' => 16,
            ),
            113 => 
            array (
                'id' => 4114,
                'nome' => 'Mangueirinha',
                'idEstado' => 16,
            ),
            114 => 
            array (
                'id' => 4115,
                'nome' => 'Manoel Ribas',
                'idEstado' => 16,
            ),
            115 => 
            array (
                'id' => 4116,
                'nome' => 'Marechal Cândido Rondon',
                'idEstado' => 16,
            ),
            116 => 
            array (
                'id' => 4117,
                'nome' => 'Maria Helena',
                'idEstado' => 16,
            ),
            117 => 
            array (
                'id' => 4118,
                'nome' => 'Marialva',
                'idEstado' => 16,
            ),
            118 => 
            array (
                'id' => 4119,
                'nome' => 'Marilândia do Sul',
                'idEstado' => 16,
            ),
            119 => 
            array (
                'id' => 4120,
                'nome' => 'Marilena',
                'idEstado' => 16,
            ),
            120 => 
            array (
                'id' => 4121,
                'nome' => 'Mariluz',
                'idEstado' => 16,
            ),
            121 => 
            array (
                'id' => 4122,
                'nome' => 'Maringá',
                'idEstado' => 16,
            ),
            122 => 
            array (
                'id' => 4123,
                'nome' => 'Mariópolis',
                'idEstado' => 16,
            ),
            123 => 
            array (
                'id' => 4124,
                'nome' => 'Maripá',
                'idEstado' => 16,
            ),
            124 => 
            array (
                'id' => 4125,
                'nome' => 'Marmeleiro',
                'idEstado' => 16,
            ),
            125 => 
            array (
                'id' => 4126,
                'nome' => 'Marquinho',
                'idEstado' => 16,
            ),
            126 => 
            array (
                'id' => 4127,
                'nome' => 'Marumbi',
                'idEstado' => 16,
            ),
            127 => 
            array (
                'id' => 4128,
                'nome' => 'Matelândia',
                'idEstado' => 16,
            ),
            128 => 
            array (
                'id' => 4129,
                'nome' => 'Matinhos',
                'idEstado' => 16,
            ),
            129 => 
            array (
                'id' => 4130,
                'nome' => 'Mato Rico',
                'idEstado' => 16,
            ),
            130 => 
            array (
                'id' => 4131,
                'nome' => 'Mauá da Serra',
                'idEstado' => 16,
            ),
            131 => 
            array (
                'id' => 4132,
                'nome' => 'Medianeira',
                'idEstado' => 16,
            ),
            132 => 
            array (
                'id' => 4133,
                'nome' => 'Mercedes',
                'idEstado' => 16,
            ),
            133 => 
            array (
                'id' => 4134,
                'nome' => 'Mirador',
                'idEstado' => 16,
            ),
            134 => 
            array (
                'id' => 4135,
                'nome' => 'Miraselva',
                'idEstado' => 16,
            ),
            135 => 
            array (
                'id' => 4136,
                'nome' => 'Missal',
                'idEstado' => 16,
            ),
            136 => 
            array (
                'id' => 4137,
                'nome' => 'Moreira Sales',
                'idEstado' => 16,
            ),
            137 => 
            array (
                'id' => 4138,
                'nome' => 'Morretes',
                'idEstado' => 16,
            ),
            138 => 
            array (
                'id' => 4139,
                'nome' => 'Munhoz de Melo',
                'idEstado' => 16,
            ),
            139 => 
            array (
                'id' => 4140,
                'nome' => 'Nossa Senhora das Graças',
                'idEstado' => 16,
            ),
            140 => 
            array (
                'id' => 4141,
                'nome' => 'Nova Aliança do Ivaí',
                'idEstado' => 16,
            ),
            141 => 
            array (
                'id' => 4142,
                'nome' => 'Nova América da Colina',
                'idEstado' => 16,
            ),
            142 => 
            array (
                'id' => 4143,
                'nome' => 'Nova Aurora',
                'idEstado' => 16,
            ),
            143 => 
            array (
                'id' => 4144,
                'nome' => 'Nova Cantu',
                'idEstado' => 16,
            ),
            144 => 
            array (
                'id' => 4145,
                'nome' => 'Nova Esperança',
                'idEstado' => 16,
            ),
            145 => 
            array (
                'id' => 4146,
                'nome' => 'Nova Esperança do Sudoeste',
                'idEstado' => 16,
            ),
            146 => 
            array (
                'id' => 4147,
                'nome' => 'Nova Fátima',
                'idEstado' => 16,
            ),
            147 => 
            array (
                'id' => 4148,
                'nome' => 'Nova Laranjeiras',
                'idEstado' => 16,
            ),
            148 => 
            array (
                'id' => 4149,
                'nome' => 'Nova Londrina',
                'idEstado' => 16,
            ),
            149 => 
            array (
                'id' => 4150,
                'nome' => 'Nova Olímpia',
                'idEstado' => 16,
            ),
            150 => 
            array (
                'id' => 4151,
                'nome' => 'Nova Santa Bárbara',
                'idEstado' => 16,
            ),
            151 => 
            array (
                'id' => 4152,
                'nome' => 'Nova Santa Rosa',
                'idEstado' => 16,
            ),
            152 => 
            array (
                'id' => 4153,
                'nome' => 'Nova Prata do Iguaçu',
                'idEstado' => 16,
            ),
            153 => 
            array (
                'id' => 4154,
                'nome' => 'Nova Tebas',
                'idEstado' => 16,
            ),
            154 => 
            array (
                'id' => 4155,
                'nome' => 'Novo Itacolomi',
                'idEstado' => 16,
            ),
            155 => 
            array (
                'id' => 4156,
                'nome' => 'Ortigueira',
                'idEstado' => 16,
            ),
            156 => 
            array (
                'id' => 4157,
                'nome' => 'Ourizona',
                'idEstado' => 16,
            ),
            157 => 
            array (
                'id' => 4158,
                'nome' => 'Ouro Verde do Oeste',
                'idEstado' => 16,
            ),
            158 => 
            array (
                'id' => 4159,
                'nome' => 'Paiçandu',
                'idEstado' => 16,
            ),
            159 => 
            array (
                'id' => 4160,
                'nome' => 'Palmas',
                'idEstado' => 16,
            ),
            160 => 
            array (
                'id' => 4161,
                'nome' => 'Palmeira',
                'idEstado' => 16,
            ),
            161 => 
            array (
                'id' => 4162,
                'nome' => 'Palmital',
                'idEstado' => 16,
            ),
            162 => 
            array (
                'id' => 4163,
                'nome' => 'Palotina',
                'idEstado' => 16,
            ),
            163 => 
            array (
                'id' => 4164,
                'nome' => 'Paraíso do Norte',
                'idEstado' => 16,
            ),
            164 => 
            array (
                'id' => 4165,
                'nome' => 'Paranacity',
                'idEstado' => 16,
            ),
            165 => 
            array (
                'id' => 4166,
                'nome' => 'Paranaguá',
                'idEstado' => 16,
            ),
            166 => 
            array (
                'id' => 4167,
                'nome' => 'Paranapoema',
                'idEstado' => 16,
            ),
            167 => 
            array (
                'id' => 4168,
                'nome' => 'Paranavaí',
                'idEstado' => 16,
            ),
            168 => 
            array (
                'id' => 4169,
                'nome' => 'Pato Bragado',
                'idEstado' => 16,
            ),
            169 => 
            array (
                'id' => 4170,
                'nome' => 'Pato Branco',
                'idEstado' => 16,
            ),
            170 => 
            array (
                'id' => 4171,
                'nome' => 'Paula Freitas',
                'idEstado' => 16,
            ),
            171 => 
            array (
                'id' => 4172,
                'nome' => 'Paulo Frontin',
                'idEstado' => 16,
            ),
            172 => 
            array (
                'id' => 4173,
                'nome' => 'Peabiru',
                'idEstado' => 16,
            ),
            173 => 
            array (
                'id' => 4174,
                'nome' => 'Perobal',
                'idEstado' => 16,
            ),
            174 => 
            array (
                'id' => 4175,
                'nome' => 'Pérola',
                'idEstado' => 16,
            ),
            175 => 
            array (
                'id' => 4176,
                'nome' => 'Pérola D\'Oeste',
                'idEstado' => 16,
            ),
            176 => 
            array (
                'id' => 4177,
                'nome' => 'Piên',
                'idEstado' => 16,
            ),
            177 => 
            array (
                'id' => 4178,
                'nome' => 'Pinhais',
                'idEstado' => 16,
            ),
            178 => 
            array (
                'id' => 4179,
                'nome' => 'Pinhalão',
                'idEstado' => 16,
            ),
            179 => 
            array (
                'id' => 4180,
                'nome' => 'Pinhal de São Bento',
                'idEstado' => 16,
            ),
            180 => 
            array (
                'id' => 4181,
                'nome' => 'Pinhão',
                'idEstado' => 16,
            ),
            181 => 
            array (
                'id' => 4182,
                'nome' => 'Piraí do Sul',
                'idEstado' => 16,
            ),
            182 => 
            array (
                'id' => 4183,
                'nome' => 'Piraquara',
                'idEstado' => 16,
            ),
            183 => 
            array (
                'id' => 4184,
                'nome' => 'Pitanga',
                'idEstado' => 16,
            ),
            184 => 
            array (
                'id' => 4185,
                'nome' => 'Pitangueiras',
                'idEstado' => 16,
            ),
            185 => 
            array (
                'id' => 4186,
                'nome' => 'Planaltina do Paraná',
                'idEstado' => 16,
            ),
            186 => 
            array (
                'id' => 4187,
                'nome' => 'Planalto',
                'idEstado' => 16,
            ),
            187 => 
            array (
                'id' => 4188,
                'nome' => 'Ponta Grossa',
                'idEstado' => 16,
            ),
            188 => 
            array (
                'id' => 4189,
                'nome' => 'Pontal do Paraná',
                'idEstado' => 16,
            ),
            189 => 
            array (
                'id' => 4190,
                'nome' => 'Porecatu',
                'idEstado' => 16,
            ),
            190 => 
            array (
                'id' => 4191,
                'nome' => 'Porto Amazonas',
                'idEstado' => 16,
            ),
            191 => 
            array (
                'id' => 4192,
                'nome' => 'Porto Barreiro',
                'idEstado' => 16,
            ),
            192 => 
            array (
                'id' => 4193,
                'nome' => 'Porto Rico',
                'idEstado' => 16,
            ),
            193 => 
            array (
                'id' => 4194,
                'nome' => 'Porto Vitória',
                'idEstado' => 16,
            ),
            194 => 
            array (
                'id' => 4195,
                'nome' => 'Prado Ferreira',
                'idEstado' => 16,
            ),
            195 => 
            array (
                'id' => 4196,
                'nome' => 'Pranchita',
                'idEstado' => 16,
            ),
            196 => 
            array (
                'id' => 4197,
                'nome' => 'Presidente Castelo Branco',
                'idEstado' => 16,
            ),
            197 => 
            array (
                'id' => 4198,
                'nome' => 'Primeiro de Maio',
                'idEstado' => 16,
            ),
            198 => 
            array (
                'id' => 4199,
                'nome' => 'Prudentópolis',
                'idEstado' => 16,
            ),
            199 => 
            array (
                'id' => 4200,
                'nome' => 'Quarto Centenário',
                'idEstado' => 16,
            ),
            200 => 
            array (
                'id' => 4201,
                'nome' => 'Quatiguá',
                'idEstado' => 16,
            ),
            201 => 
            array (
                'id' => 4202,
                'nome' => 'Quatro Barras',
                'idEstado' => 16,
            ),
            202 => 
            array (
                'id' => 4203,
                'nome' => 'Quatro Pontes',
                'idEstado' => 16,
            ),
            203 => 
            array (
                'id' => 4204,
                'nome' => 'Quedas do Iguaçu',
                'idEstado' => 16,
            ),
            204 => 
            array (
                'id' => 4205,
                'nome' => 'Querência do Norte',
                'idEstado' => 16,
            ),
            205 => 
            array (
                'id' => 4206,
                'nome' => 'Quinta do Sol',
                'idEstado' => 16,
            ),
            206 => 
            array (
                'id' => 4207,
                'nome' => 'Quitandinha',
                'idEstado' => 16,
            ),
            207 => 
            array (
                'id' => 4208,
                'nome' => 'Ramilândia',
                'idEstado' => 16,
            ),
            208 => 
            array (
                'id' => 4209,
                'nome' => 'Rancho Alegre',
                'idEstado' => 16,
            ),
            209 => 
            array (
                'id' => 4210,
                'nome' => 'Rancho Alegre D\'Oeste',
                'idEstado' => 16,
            ),
            210 => 
            array (
                'id' => 4211,
                'nome' => 'Realeza',
                'idEstado' => 16,
            ),
            211 => 
            array (
                'id' => 4212,
                'nome' => 'Rebouças',
                'idEstado' => 16,
            ),
            212 => 
            array (
                'id' => 4213,
                'nome' => 'Renascença',
                'idEstado' => 16,
            ),
            213 => 
            array (
                'id' => 4214,
                'nome' => 'Reserva',
                'idEstado' => 16,
            ),
            214 => 
            array (
                'id' => 4215,
                'nome' => 'Reserva do Iguaçu',
                'idEstado' => 16,
            ),
            215 => 
            array (
                'id' => 4216,
                'nome' => 'Ribeirão Claro',
                'idEstado' => 16,
            ),
            216 => 
            array (
                'id' => 4217,
                'nome' => 'Ribeirão do Pinhal',
                'idEstado' => 16,
            ),
            217 => 
            array (
                'id' => 4218,
                'nome' => 'Rio Azul',
                'idEstado' => 16,
            ),
            218 => 
            array (
                'id' => 4219,
                'nome' => 'Rio Bom',
                'idEstado' => 16,
            ),
            219 => 
            array (
                'id' => 4220,
                'nome' => 'Rio Bonito do Iguaçu',
                'idEstado' => 16,
            ),
            220 => 
            array (
                'id' => 4221,
                'nome' => 'Rio Branco do Ivaí',
                'idEstado' => 16,
            ),
            221 => 
            array (
                'id' => 4222,
                'nome' => 'Rio Branco do Sul',
                'idEstado' => 16,
            ),
            222 => 
            array (
                'id' => 4223,
                'nome' => 'Rio Negro',
                'idEstado' => 16,
            ),
            223 => 
            array (
                'id' => 4224,
                'nome' => 'Rolândia',
                'idEstado' => 16,
            ),
            224 => 
            array (
                'id' => 4225,
                'nome' => 'Roncador',
                'idEstado' => 16,
            ),
            225 => 
            array (
                'id' => 4226,
                'nome' => 'Rondon',
                'idEstado' => 16,
            ),
            226 => 
            array (
                'id' => 4227,
                'nome' => 'Rosário do Ivaí',
                'idEstado' => 16,
            ),
            227 => 
            array (
                'id' => 4228,
                'nome' => 'Sabáudia',
                'idEstado' => 16,
            ),
            228 => 
            array (
                'id' => 4229,
                'nome' => 'Salgado Filho',
                'idEstado' => 16,
            ),
            229 => 
            array (
                'id' => 4230,
                'nome' => 'Salto do Itararé',
                'idEstado' => 16,
            ),
            230 => 
            array (
                'id' => 4231,
                'nome' => 'Salto do Lontra',
                'idEstado' => 16,
            ),
            231 => 
            array (
                'id' => 4232,
                'nome' => 'Santa Amélia',
                'idEstado' => 16,
            ),
            232 => 
            array (
                'id' => 4233,
                'nome' => 'Santa Cecília do Pavão',
                'idEstado' => 16,
            ),
            233 => 
            array (
                'id' => 4234,
                'nome' => 'Santa Cruz de Monte Castelo',
                'idEstado' => 16,
            ),
            234 => 
            array (
                'id' => 4235,
                'nome' => 'Santa Fé',
                'idEstado' => 16,
            ),
            235 => 
            array (
                'id' => 4236,
                'nome' => 'Santa Helena',
                'idEstado' => 16,
            ),
            236 => 
            array (
                'id' => 4237,
                'nome' => 'Santa Inês',
                'idEstado' => 16,
            ),
            237 => 
            array (
                'id' => 4238,
                'nome' => 'Santa Isabel do Ivaí',
                'idEstado' => 16,
            ),
            238 => 
            array (
                'id' => 4239,
                'nome' => 'Santa Izabel do Oeste',
                'idEstado' => 16,
            ),
            239 => 
            array (
                'id' => 4240,
                'nome' => 'Santa Lúcia',
                'idEstado' => 16,
            ),
            240 => 
            array (
                'id' => 4241,
                'nome' => 'Santa Maria do Oeste',
                'idEstado' => 16,
            ),
            241 => 
            array (
                'id' => 4242,
                'nome' => 'Santa Mariana',
                'idEstado' => 16,
            ),
            242 => 
            array (
                'id' => 4243,
                'nome' => 'Santa Mônica',
                'idEstado' => 16,
            ),
            243 => 
            array (
                'id' => 4244,
                'nome' => 'Santana do Itararé',
                'idEstado' => 16,
            ),
            244 => 
            array (
                'id' => 4245,
                'nome' => 'Santa Tereza do Oeste',
                'idEstado' => 16,
            ),
            245 => 
            array (
                'id' => 4246,
                'nome' => 'Santa Terezinha de Itaipu',
                'idEstado' => 16,
            ),
            246 => 
            array (
                'id' => 4247,
                'nome' => 'Santo Antônio da Platina',
                'idEstado' => 16,
            ),
            247 => 
            array (
                'id' => 4248,
                'nome' => 'Santo Antônio do Caiuá',
                'idEstado' => 16,
            ),
            248 => 
            array (
                'id' => 4249,
                'nome' => 'Santo Antônio do Paraíso',
                'idEstado' => 16,
            ),
            249 => 
            array (
                'id' => 4250,
                'nome' => 'Santo Antônio do Sudoeste',
                'idEstado' => 16,
            ),
            250 => 
            array (
                'id' => 4251,
                'nome' => 'Santo Inácio',
                'idEstado' => 16,
            ),
            251 => 
            array (
                'id' => 4252,
                'nome' => 'São Carlos do Ivaí',
                'idEstado' => 16,
            ),
            252 => 
            array (
                'id' => 4253,
                'nome' => 'São Jerônimo da Serra',
                'idEstado' => 16,
            ),
            253 => 
            array (
                'id' => 4254,
                'nome' => 'São João',
                'idEstado' => 16,
            ),
            254 => 
            array (
                'id' => 4255,
                'nome' => 'São João do Caiuá',
                'idEstado' => 16,
            ),
            255 => 
            array (
                'id' => 4256,
                'nome' => 'São João do Ivaí',
                'idEstado' => 16,
            ),
            256 => 
            array (
                'id' => 4257,
                'nome' => 'São João do Triunfo',
                'idEstado' => 16,
            ),
            257 => 
            array (
                'id' => 4258,
                'nome' => 'São Jorge D\'Oeste',
                'idEstado' => 16,
            ),
            258 => 
            array (
                'id' => 4259,
                'nome' => 'São Jorge do Ivaí',
                'idEstado' => 16,
            ),
            259 => 
            array (
                'id' => 4260,
                'nome' => 'São Jorge do Patrocínio',
                'idEstado' => 16,
            ),
            260 => 
            array (
                'id' => 4261,
                'nome' => 'São José da Boa Vista',
                'idEstado' => 16,
            ),
            261 => 
            array (
                'id' => 4262,
                'nome' => 'São José das Palmeiras',
                'idEstado' => 16,
            ),
            262 => 
            array (
                'id' => 4263,
                'nome' => 'São José dos Pinhais',
                'idEstado' => 16,
            ),
            263 => 
            array (
                'id' => 4264,
                'nome' => 'São Manoel do Paraná',
                'idEstado' => 16,
            ),
            264 => 
            array (
                'id' => 4265,
                'nome' => 'São Mateus do Sul',
                'idEstado' => 16,
            ),
            265 => 
            array (
                'id' => 4266,
                'nome' => 'São Miguel do Iguaçu',
                'idEstado' => 16,
            ),
            266 => 
            array (
                'id' => 4267,
                'nome' => 'São Pedro do Iguaçu',
                'idEstado' => 16,
            ),
            267 => 
            array (
                'id' => 4268,
                'nome' => 'São Pedro do Ivaí',
                'idEstado' => 16,
            ),
            268 => 
            array (
                'id' => 4269,
                'nome' => 'São Pedro do Paraná',
                'idEstado' => 16,
            ),
            269 => 
            array (
                'id' => 4270,
                'nome' => 'São Sebastião da Amoreira',
                'idEstado' => 16,
            ),
            270 => 
            array (
                'id' => 4271,
                'nome' => 'São Tomé',
                'idEstado' => 16,
            ),
            271 => 
            array (
                'id' => 4272,
                'nome' => 'Sapopema',
                'idEstado' => 16,
            ),
            272 => 
            array (
                'id' => 4273,
                'nome' => 'Sarandi',
                'idEstado' => 16,
            ),
            273 => 
            array (
                'id' => 4274,
                'nome' => 'Saudade do Iguaçu',
                'idEstado' => 16,
            ),
            274 => 
            array (
                'id' => 4275,
                'nome' => 'Sengés',
                'idEstado' => 16,
            ),
            275 => 
            array (
                'id' => 4276,
                'nome' => 'Serranópolis do Iguaçu',
                'idEstado' => 16,
            ),
            276 => 
            array (
                'id' => 4277,
                'nome' => 'Sertaneja',
                'idEstado' => 16,
            ),
            277 => 
            array (
                'id' => 4278,
                'nome' => 'Sertanópolis',
                'idEstado' => 16,
            ),
            278 => 
            array (
                'id' => 4279,
                'nome' => 'Siqueira Campos',
                'idEstado' => 16,
            ),
            279 => 
            array (
                'id' => 4280,
                'nome' => 'Sulina',
                'idEstado' => 16,
            ),
            280 => 
            array (
                'id' => 4281,
                'nome' => 'Tamarana',
                'idEstado' => 16,
            ),
            281 => 
            array (
                'id' => 4282,
                'nome' => 'Tamboara',
                'idEstado' => 16,
            ),
            282 => 
            array (
                'id' => 4283,
                'nome' => 'Tapejara',
                'idEstado' => 16,
            ),
            283 => 
            array (
                'id' => 4284,
                'nome' => 'Tapira',
                'idEstado' => 16,
            ),
            284 => 
            array (
                'id' => 4285,
                'nome' => 'Teixeira Soares',
                'idEstado' => 16,
            ),
            285 => 
            array (
                'id' => 4286,
                'nome' => 'Telêmaco Borba',
                'idEstado' => 16,
            ),
            286 => 
            array (
                'id' => 4287,
                'nome' => 'Terra Boa',
                'idEstado' => 16,
            ),
            287 => 
            array (
                'id' => 4288,
                'nome' => 'Terra Rica',
                'idEstado' => 16,
            ),
            288 => 
            array (
                'id' => 4289,
                'nome' => 'Terra Roxa',
                'idEstado' => 16,
            ),
            289 => 
            array (
                'id' => 4290,
                'nome' => 'Tibagi',
                'idEstado' => 16,
            ),
            290 => 
            array (
                'id' => 4291,
                'nome' => 'Tijucas do Sul',
                'idEstado' => 16,
            ),
            291 => 
            array (
                'id' => 4292,
                'nome' => 'Toledo',
                'idEstado' => 16,
            ),
            292 => 
            array (
                'id' => 4293,
                'nome' => 'Tomazina',
                'idEstado' => 16,
            ),
            293 => 
            array (
                'id' => 4294,
                'nome' => 'Três Barras do Paraná',
                'idEstado' => 16,
            ),
            294 => 
            array (
                'id' => 4295,
                'nome' => 'Tunas do Paraná',
                'idEstado' => 16,
            ),
            295 => 
            array (
                'id' => 4296,
                'nome' => 'Tuneiras do Oeste',
                'idEstado' => 16,
            ),
            296 => 
            array (
                'id' => 4297,
                'nome' => 'Tupãssi',
                'idEstado' => 16,
            ),
            297 => 
            array (
                'id' => 4298,
                'nome' => 'Turvo',
                'idEstado' => 16,
            ),
            298 => 
            array (
                'id' => 4299,
                'nome' => 'Ubiratã',
                'idEstado' => 16,
            ),
            299 => 
            array (
                'id' => 4300,
                'nome' => 'Umuarama',
                'idEstado' => 16,
            ),
            300 => 
            array (
                'id' => 4301,
                'nome' => 'União da Vitória',
                'idEstado' => 16,
            ),
            301 => 
            array (
                'id' => 4302,
                'nome' => 'Uniflor',
                'idEstado' => 16,
            ),
            302 => 
            array (
                'id' => 4303,
                'nome' => 'Uraí',
                'idEstado' => 16,
            ),
            303 => 
            array (
                'id' => 4304,
                'nome' => 'Wenceslau Braz',
                'idEstado' => 16,
            ),
            304 => 
            array (
                'id' => 4305,
                'nome' => 'Ventania',
                'idEstado' => 16,
            ),
            305 => 
            array (
                'id' => 4306,
                'nome' => 'Vera Cruz do Oeste',
                'idEstado' => 16,
            ),
            306 => 
            array (
                'id' => 4307,
                'nome' => 'Verê',
                'idEstado' => 16,
            ),
            307 => 
            array (
                'id' => 4308,
                'nome' => 'Alto Paraíso',
                'idEstado' => 16,
            ),
            308 => 
            array (
                'id' => 4309,
                'nome' => 'Doutor Ulysses',
                'idEstado' => 16,
            ),
            309 => 
            array (
                'id' => 4310,
                'nome' => 'Virmond',
                'idEstado' => 16,
            ),
            310 => 
            array (
                'id' => 4311,
                'nome' => 'Vitorino',
                'idEstado' => 16,
            ),
            311 => 
            array (
                'id' => 4312,
                'nome' => 'Xambrê',
                'idEstado' => 16,
            ),
            312 => 
            array (
                'id' => 4313,
                'nome' => 'Abdon Batista',
                'idEstado' => 24,
            ),
            313 => 
            array (
                'id' => 4314,
                'nome' => 'Abelardo Luz',
                'idEstado' => 24,
            ),
            314 => 
            array (
                'id' => 4315,
                'nome' => 'Agrolândia',
                'idEstado' => 24,
            ),
            315 => 
            array (
                'id' => 4316,
                'nome' => 'Agronômica',
                'idEstado' => 24,
            ),
            316 => 
            array (
                'id' => 4317,
                'nome' => 'Água Doce',
                'idEstado' => 24,
            ),
            317 => 
            array (
                'id' => 4318,
                'nome' => 'Águas de Chapecó',
                'idEstado' => 24,
            ),
            318 => 
            array (
                'id' => 4319,
                'nome' => 'Águas Frias',
                'idEstado' => 24,
            ),
            319 => 
            array (
                'id' => 4320,
                'nome' => 'Águas Mornas',
                'idEstado' => 24,
            ),
            320 => 
            array (
                'id' => 4321,
                'nome' => 'Alfredo Wagner',
                'idEstado' => 24,
            ),
            321 => 
            array (
                'id' => 4322,
                'nome' => 'Alto Bela Vista',
                'idEstado' => 24,
            ),
            322 => 
            array (
                'id' => 4323,
                'nome' => 'Anchieta',
                'idEstado' => 24,
            ),
            323 => 
            array (
                'id' => 4324,
                'nome' => 'Angelina',
                'idEstado' => 24,
            ),
            324 => 
            array (
                'id' => 4325,
                'nome' => 'Anita Garibaldi',
                'idEstado' => 24,
            ),
            325 => 
            array (
                'id' => 4326,
                'nome' => 'Anitápolis',
                'idEstado' => 24,
            ),
            326 => 
            array (
                'id' => 4327,
                'nome' => 'Antônio Carlos',
                'idEstado' => 24,
            ),
            327 => 
            array (
                'id' => 4328,
                'nome' => 'Apiúna',
                'idEstado' => 24,
            ),
            328 => 
            array (
                'id' => 4329,
                'nome' => 'Arabutã',
                'idEstado' => 24,
            ),
            329 => 
            array (
                'id' => 4330,
                'nome' => 'Araquari',
                'idEstado' => 24,
            ),
            330 => 
            array (
                'id' => 4331,
                'nome' => 'Araranguá',
                'idEstado' => 24,
            ),
            331 => 
            array (
                'id' => 4332,
                'nome' => 'Armazém',
                'idEstado' => 24,
            ),
            332 => 
            array (
                'id' => 4333,
                'nome' => 'Arroio Trinta',
                'idEstado' => 24,
            ),
            333 => 
            array (
                'id' => 4334,
                'nome' => 'Arvoredo',
                'idEstado' => 24,
            ),
            334 => 
            array (
                'id' => 4335,
                'nome' => 'Ascurra',
                'idEstado' => 24,
            ),
            335 => 
            array (
                'id' => 4336,
                'nome' => 'Atalanta',
                'idEstado' => 24,
            ),
            336 => 
            array (
                'id' => 4337,
                'nome' => 'Aurora',
                'idEstado' => 24,
            ),
            337 => 
            array (
                'id' => 4338,
                'nome' => 'Balneário Arroio do Silva',
                'idEstado' => 24,
            ),
            338 => 
            array (
                'id' => 4339,
                'nome' => 'Balneário Camboriú',
                'idEstado' => 24,
            ),
            339 => 
            array (
                'id' => 4340,
                'nome' => 'Balneário Barra do Sul',
                'idEstado' => 24,
            ),
            340 => 
            array (
                'id' => 4341,
                'nome' => 'Balneário Gaivota',
                'idEstado' => 24,
            ),
            341 => 
            array (
                'id' => 4342,
                'nome' => 'Bandeirante',
                'idEstado' => 24,
            ),
            342 => 
            array (
                'id' => 4343,
                'nome' => 'Barra Bonita',
                'idEstado' => 24,
            ),
            343 => 
            array (
                'id' => 4344,
                'nome' => 'Barra Velha',
                'idEstado' => 24,
            ),
            344 => 
            array (
                'id' => 4345,
                'nome' => 'Bela Vista do Toldo',
                'idEstado' => 24,
            ),
            345 => 
            array (
                'id' => 4346,
                'nome' => 'Belmonte',
                'idEstado' => 24,
            ),
            346 => 
            array (
                'id' => 4347,
                'nome' => 'Benedito Novo',
                'idEstado' => 24,
            ),
            347 => 
            array (
                'id' => 4348,
                'nome' => 'Biguaçu',
                'idEstado' => 24,
            ),
            348 => 
            array (
                'id' => 4349,
                'nome' => 'Blumenau',
                'idEstado' => 24,
            ),
            349 => 
            array (
                'id' => 4350,
                'nome' => 'Bocaina do Sul',
                'idEstado' => 24,
            ),
            350 => 
            array (
                'id' => 4351,
                'nome' => 'Bombinhas',
                'idEstado' => 24,
            ),
            351 => 
            array (
                'id' => 4352,
                'nome' => 'Bom Jardim da Serra',
                'idEstado' => 24,
            ),
            352 => 
            array (
                'id' => 4353,
                'nome' => 'Bom Jesus',
                'idEstado' => 24,
            ),
            353 => 
            array (
                'id' => 4354,
                'nome' => 'Bom Jesus do Oeste',
                'idEstado' => 24,
            ),
            354 => 
            array (
                'id' => 4355,
                'nome' => 'Bom Retiro',
                'idEstado' => 24,
            ),
            355 => 
            array (
                'id' => 4356,
                'nome' => 'Botuverá',
                'idEstado' => 24,
            ),
            356 => 
            array (
                'id' => 4357,
                'nome' => 'Braço do Norte',
                'idEstado' => 24,
            ),
            357 => 
            array (
                'id' => 4358,
                'nome' => 'Braço do Trombudo',
                'idEstado' => 24,
            ),
            358 => 
            array (
                'id' => 4359,
                'nome' => 'Brunópolis',
                'idEstado' => 24,
            ),
            359 => 
            array (
                'id' => 4360,
                'nome' => 'Brusque',
                'idEstado' => 24,
            ),
            360 => 
            array (
                'id' => 4361,
                'nome' => 'Caçador',
                'idEstado' => 24,
            ),
            361 => 
            array (
                'id' => 4362,
                'nome' => 'Caibi',
                'idEstado' => 24,
            ),
            362 => 
            array (
                'id' => 4363,
                'nome' => 'Calmon',
                'idEstado' => 24,
            ),
            363 => 
            array (
                'id' => 4364,
                'nome' => 'Camboriú',
                'idEstado' => 24,
            ),
            364 => 
            array (
                'id' => 4365,
                'nome' => 'Capão Alto',
                'idEstado' => 24,
            ),
            365 => 
            array (
                'id' => 4366,
                'nome' => 'Campo Alegre',
                'idEstado' => 24,
            ),
            366 => 
            array (
                'id' => 4367,
                'nome' => 'Campo Belo do Sul',
                'idEstado' => 24,
            ),
            367 => 
            array (
                'id' => 4368,
                'nome' => 'Campo Erê',
                'idEstado' => 24,
            ),
            368 => 
            array (
                'id' => 4369,
                'nome' => 'Campos Novos',
                'idEstado' => 24,
            ),
            369 => 
            array (
                'id' => 4370,
                'nome' => 'Canelinha',
                'idEstado' => 24,
            ),
            370 => 
            array (
                'id' => 4371,
                'nome' => 'Canoinhas',
                'idEstado' => 24,
            ),
            371 => 
            array (
                'id' => 4372,
                'nome' => 'Capinzal',
                'idEstado' => 24,
            ),
            372 => 
            array (
                'id' => 4373,
                'nome' => 'Capivari de Baixo',
                'idEstado' => 24,
            ),
            373 => 
            array (
                'id' => 4374,
                'nome' => 'Catanduvas',
                'idEstado' => 24,
            ),
            374 => 
            array (
                'id' => 4375,
                'nome' => 'Caxambu do Sul',
                'idEstado' => 24,
            ),
            375 => 
            array (
                'id' => 4376,
                'nome' => 'Celso Ramos',
                'idEstado' => 24,
            ),
            376 => 
            array (
                'id' => 4377,
                'nome' => 'Cerro Negro',
                'idEstado' => 24,
            ),
            377 => 
            array (
                'id' => 4378,
                'nome' => 'Chapadão do Lageado',
                'idEstado' => 24,
            ),
            378 => 
            array (
                'id' => 4379,
                'nome' => 'Chapecó',
                'idEstado' => 24,
            ),
            379 => 
            array (
                'id' => 4380,
                'nome' => 'Cocal do Sul',
                'idEstado' => 24,
            ),
            380 => 
            array (
                'id' => 4381,
                'nome' => 'Concórdia',
                'idEstado' => 24,
            ),
            381 => 
            array (
                'id' => 4382,
                'nome' => 'Cordilheira Alta',
                'idEstado' => 24,
            ),
            382 => 
            array (
                'id' => 4383,
                'nome' => 'Coronel Freitas',
                'idEstado' => 24,
            ),
            383 => 
            array (
                'id' => 4384,
                'nome' => 'Coronel Martins',
                'idEstado' => 24,
            ),
            384 => 
            array (
                'id' => 4385,
                'nome' => 'Corupá',
                'idEstado' => 24,
            ),
            385 => 
            array (
                'id' => 4386,
                'nome' => 'Correia Pinto',
                'idEstado' => 24,
            ),
            386 => 
            array (
                'id' => 4387,
                'nome' => 'Criciúma',
                'idEstado' => 24,
            ),
            387 => 
            array (
                'id' => 4388,
                'nome' => 'Cunha Porã',
                'idEstado' => 24,
            ),
            388 => 
            array (
                'id' => 4389,
                'nome' => 'Cunhataí',
                'idEstado' => 24,
            ),
            389 => 
            array (
                'id' => 4390,
                'nome' => 'Curitibanos',
                'idEstado' => 24,
            ),
            390 => 
            array (
                'id' => 4391,
                'nome' => 'Descanso',
                'idEstado' => 24,
            ),
            391 => 
            array (
                'id' => 4392,
                'nome' => 'Dionísio Cerqueira',
                'idEstado' => 24,
            ),
            392 => 
            array (
                'id' => 4393,
                'nome' => 'Dona Emma',
                'idEstado' => 24,
            ),
            393 => 
            array (
                'id' => 4394,
                'nome' => 'Doutor Pedrinho',
                'idEstado' => 24,
            ),
            394 => 
            array (
                'id' => 4395,
                'nome' => 'Entre Rios',
                'idEstado' => 24,
            ),
            395 => 
            array (
                'id' => 4396,
                'nome' => 'Ermo',
                'idEstado' => 24,
            ),
            396 => 
            array (
                'id' => 4397,
                'nome' => 'Erval Velho',
                'idEstado' => 24,
            ),
            397 => 
            array (
                'id' => 4398,
                'nome' => 'Faxinal dos Guedes',
                'idEstado' => 24,
            ),
            398 => 
            array (
                'id' => 4399,
                'nome' => 'Flor do Sertão',
                'idEstado' => 24,
            ),
            399 => 
            array (
                'id' => 4400,
                'nome' => 'Florianópolis',
                'idEstado' => 24,
            ),
            400 => 
            array (
                'id' => 4401,
                'nome' => 'Formosa do Sul',
                'idEstado' => 24,
            ),
            401 => 
            array (
                'id' => 4402,
                'nome' => 'Forquilhinha',
                'idEstado' => 24,
            ),
            402 => 
            array (
                'id' => 4403,
                'nome' => 'Fraiburgo',
                'idEstado' => 24,
            ),
            403 => 
            array (
                'id' => 4404,
                'nome' => 'Frei Rogério',
                'idEstado' => 24,
            ),
            404 => 
            array (
                'id' => 4405,
                'nome' => 'Galvão',
                'idEstado' => 24,
            ),
            405 => 
            array (
                'id' => 4406,
                'nome' => 'Garopaba',
                'idEstado' => 24,
            ),
            406 => 
            array (
                'id' => 4407,
                'nome' => 'Garuva',
                'idEstado' => 24,
            ),
            407 => 
            array (
                'id' => 4408,
                'nome' => 'Gaspar',
                'idEstado' => 24,
            ),
            408 => 
            array (
                'id' => 4409,
                'nome' => 'Governador Celso Ramos',
                'idEstado' => 24,
            ),
            409 => 
            array (
                'id' => 4410,
                'nome' => 'Grão Pará',
                'idEstado' => 24,
            ),
            410 => 
            array (
                'id' => 4411,
                'nome' => 'Gravatal',
                'idEstado' => 24,
            ),
            411 => 
            array (
                'id' => 4412,
                'nome' => 'Guabiruba',
                'idEstado' => 24,
            ),
            412 => 
            array (
                'id' => 4413,
                'nome' => 'Guaraciaba',
                'idEstado' => 24,
            ),
            413 => 
            array (
                'id' => 4414,
                'nome' => 'Guaramirim',
                'idEstado' => 24,
            ),
            414 => 
            array (
                'id' => 4415,
                'nome' => 'Guarujá do Sul',
                'idEstado' => 24,
            ),
            415 => 
            array (
                'id' => 4416,
                'nome' => 'Guatambú',
                'idEstado' => 24,
            ),
            416 => 
            array (
                'id' => 4417,
                'nome' => 'Herval D\'Oeste',
                'idEstado' => 24,
            ),
            417 => 
            array (
                'id' => 4418,
                'nome' => 'Ibiam',
                'idEstado' => 24,
            ),
            418 => 
            array (
                'id' => 4419,
                'nome' => 'Ibicaré',
                'idEstado' => 24,
            ),
            419 => 
            array (
                'id' => 4420,
                'nome' => 'Ibirama',
                'idEstado' => 24,
            ),
            420 => 
            array (
                'id' => 4421,
                'nome' => 'Içara',
                'idEstado' => 24,
            ),
            421 => 
            array (
                'id' => 4422,
                'nome' => 'Ilhota',
                'idEstado' => 24,
            ),
            422 => 
            array (
                'id' => 4423,
                'nome' => 'Imaruí',
                'idEstado' => 24,
            ),
            423 => 
            array (
                'id' => 4424,
                'nome' => 'Imbituba',
                'idEstado' => 24,
            ),
            424 => 
            array (
                'id' => 4425,
                'nome' => 'Imbuia',
                'idEstado' => 24,
            ),
            425 => 
            array (
                'id' => 4426,
                'nome' => 'Indaial',
                'idEstado' => 24,
            ),
            426 => 
            array (
                'id' => 4427,
                'nome' => 'Iomerê',
                'idEstado' => 24,
            ),
            427 => 
            array (
                'id' => 4428,
                'nome' => 'Ipira',
                'idEstado' => 24,
            ),
            428 => 
            array (
                'id' => 4429,
                'nome' => 'Iporã do Oeste',
                'idEstado' => 24,
            ),
            429 => 
            array (
                'id' => 4430,
                'nome' => 'Ipuaçu',
                'idEstado' => 24,
            ),
            430 => 
            array (
                'id' => 4431,
                'nome' => 'Ipumirim',
                'idEstado' => 24,
            ),
            431 => 
            array (
                'id' => 4432,
                'nome' => 'Iraceminha',
                'idEstado' => 24,
            ),
            432 => 
            array (
                'id' => 4433,
                'nome' => 'Irani',
                'idEstado' => 24,
            ),
            433 => 
            array (
                'id' => 4434,
                'nome' => 'Irati',
                'idEstado' => 24,
            ),
            434 => 
            array (
                'id' => 4435,
                'nome' => 'Irineópolis',
                'idEstado' => 24,
            ),
            435 => 
            array (
                'id' => 4436,
                'nome' => 'Itá',
                'idEstado' => 24,
            ),
            436 => 
            array (
                'id' => 4437,
                'nome' => 'Itaiópolis',
                'idEstado' => 24,
            ),
            437 => 
            array (
                'id' => 4438,
                'nome' => 'Itajaí',
                'idEstado' => 24,
            ),
            438 => 
            array (
                'id' => 4439,
                'nome' => 'Itapema',
                'idEstado' => 24,
            ),
            439 => 
            array (
                'id' => 4440,
                'nome' => 'Itapiranga',
                'idEstado' => 24,
            ),
            440 => 
            array (
                'id' => 4441,
                'nome' => 'Itapoá',
                'idEstado' => 24,
            ),
            441 => 
            array (
                'id' => 4442,
                'nome' => 'Ituporanga',
                'idEstado' => 24,
            ),
            442 => 
            array (
                'id' => 4443,
                'nome' => 'Jaborá',
                'idEstado' => 24,
            ),
            443 => 
            array (
                'id' => 4444,
                'nome' => 'Jacinto Machado',
                'idEstado' => 24,
            ),
            444 => 
            array (
                'id' => 4445,
                'nome' => 'Jaguaruna',
                'idEstado' => 24,
            ),
            445 => 
            array (
                'id' => 4446,
                'nome' => 'Jaraguá do Sul',
                'idEstado' => 24,
            ),
            446 => 
            array (
                'id' => 4447,
                'nome' => 'Jardinópolis',
                'idEstado' => 24,
            ),
            447 => 
            array (
                'id' => 4448,
                'nome' => 'Joaçaba',
                'idEstado' => 24,
            ),
            448 => 
            array (
                'id' => 4449,
                'nome' => 'Joinville',
                'idEstado' => 24,
            ),
            449 => 
            array (
                'id' => 4450,
                'nome' => 'José Boiteux',
                'idEstado' => 24,
            ),
            450 => 
            array (
                'id' => 4451,
                'nome' => 'Jupiá',
                'idEstado' => 24,
            ),
            451 => 
            array (
                'id' => 4452,
                'nome' => 'Lacerdópolis',
                'idEstado' => 24,
            ),
            452 => 
            array (
                'id' => 4453,
                'nome' => 'Lages',
                'idEstado' => 24,
            ),
            453 => 
            array (
                'id' => 4454,
                'nome' => 'Laguna',
                'idEstado' => 24,
            ),
            454 => 
            array (
                'id' => 4455,
                'nome' => 'Lajeado Grande',
                'idEstado' => 24,
            ),
            455 => 
            array (
                'id' => 4456,
                'nome' => 'Laurentino',
                'idEstado' => 24,
            ),
            456 => 
            array (
                'id' => 4457,
                'nome' => 'Lauro Muller',
                'idEstado' => 24,
            ),
            457 => 
            array (
                'id' => 4458,
                'nome' => 'Lebon Régis',
                'idEstado' => 24,
            ),
            458 => 
            array (
                'id' => 4459,
                'nome' => 'Leoberto Leal',
                'idEstado' => 24,
            ),
            459 => 
            array (
                'id' => 4460,
                'nome' => 'Lindóia do Sul',
                'idEstado' => 24,
            ),
            460 => 
            array (
                'id' => 4461,
                'nome' => 'Lontras',
                'idEstado' => 24,
            ),
            461 => 
            array (
                'id' => 4462,
                'nome' => 'Luiz Alves',
                'idEstado' => 24,
            ),
            462 => 
            array (
                'id' => 4463,
                'nome' => 'Luzerna',
                'idEstado' => 24,
            ),
            463 => 
            array (
                'id' => 4464,
                'nome' => 'Macieira',
                'idEstado' => 24,
            ),
            464 => 
            array (
                'id' => 4465,
                'nome' => 'Mafra',
                'idEstado' => 24,
            ),
            465 => 
            array (
                'id' => 4466,
                'nome' => 'Major Gercino',
                'idEstado' => 24,
            ),
            466 => 
            array (
                'id' => 4467,
                'nome' => 'Major Vieira',
                'idEstado' => 24,
            ),
            467 => 
            array (
                'id' => 4468,
                'nome' => 'Maracajá',
                'idEstado' => 24,
            ),
            468 => 
            array (
                'id' => 4469,
                'nome' => 'Maravilha',
                'idEstado' => 24,
            ),
            469 => 
            array (
                'id' => 4470,
                'nome' => 'Marema',
                'idEstado' => 24,
            ),
            470 => 
            array (
                'id' => 4471,
                'nome' => 'Massaranduba',
                'idEstado' => 24,
            ),
            471 => 
            array (
                'id' => 4472,
                'nome' => 'Matos Costa',
                'idEstado' => 24,
            ),
            472 => 
            array (
                'id' => 4473,
                'nome' => 'Meleiro',
                'idEstado' => 24,
            ),
            473 => 
            array (
                'id' => 4474,
                'nome' => 'Mirim Doce',
                'idEstado' => 24,
            ),
            474 => 
            array (
                'id' => 4475,
                'nome' => 'Modelo',
                'idEstado' => 24,
            ),
            475 => 
            array (
                'id' => 4476,
                'nome' => 'Mondaí',
                'idEstado' => 24,
            ),
            476 => 
            array (
                'id' => 4477,
                'nome' => 'Monte Carlo',
                'idEstado' => 24,
            ),
            477 => 
            array (
                'id' => 4478,
                'nome' => 'Monte Castelo',
                'idEstado' => 24,
            ),
            478 => 
            array (
                'id' => 4479,
                'nome' => 'Morro da Fumaça',
                'idEstado' => 24,
            ),
            479 => 
            array (
                'id' => 4480,
                'nome' => 'Morro Grande',
                'idEstado' => 24,
            ),
            480 => 
            array (
                'id' => 4481,
                'nome' => 'Navegantes',
                'idEstado' => 24,
            ),
            481 => 
            array (
                'id' => 4482,
                'nome' => 'Nova Erechim',
                'idEstado' => 24,
            ),
            482 => 
            array (
                'id' => 4483,
                'nome' => 'Nova Itaberaba',
                'idEstado' => 24,
            ),
            483 => 
            array (
                'id' => 4484,
                'nome' => 'Nova Trento',
                'idEstado' => 24,
            ),
            484 => 
            array (
                'id' => 4485,
                'nome' => 'Nova Veneza',
                'idEstado' => 24,
            ),
            485 => 
            array (
                'id' => 4486,
                'nome' => 'Novo Horizonte',
                'idEstado' => 24,
            ),
            486 => 
            array (
                'id' => 4487,
                'nome' => 'Orleans',
                'idEstado' => 24,
            ),
            487 => 
            array (
                'id' => 4488,
                'nome' => 'Otacílio Costa',
                'idEstado' => 24,
            ),
            488 => 
            array (
                'id' => 4489,
                'nome' => 'Ouro',
                'idEstado' => 24,
            ),
            489 => 
            array (
                'id' => 4490,
                'nome' => 'Ouro Verde',
                'idEstado' => 24,
            ),
            490 => 
            array (
                'id' => 4491,
                'nome' => 'Paial',
                'idEstado' => 24,
            ),
            491 => 
            array (
                'id' => 4492,
                'nome' => 'Painel',
                'idEstado' => 24,
            ),
            492 => 
            array (
                'id' => 4493,
                'nome' => 'Palhoça',
                'idEstado' => 24,
            ),
            493 => 
            array (
                'id' => 4494,
                'nome' => 'Palma Sola',
                'idEstado' => 24,
            ),
            494 => 
            array (
                'id' => 4495,
                'nome' => 'Palmeira',
                'idEstado' => 24,
            ),
            495 => 
            array (
                'id' => 4496,
                'nome' => 'Palmitos',
                'idEstado' => 24,
            ),
            496 => 
            array (
                'id' => 4497,
                'nome' => 'Papanduva',
                'idEstado' => 24,
            ),
            497 => 
            array (
                'id' => 4498,
                'nome' => 'Paraíso',
                'idEstado' => 24,
            ),
            498 => 
            array (
                'id' => 4499,
                'nome' => 'Passo de Torres',
                'idEstado' => 24,
            ),
            499 => 
            array (
                'id' => 4500,
                'nome' => 'Passos Maia',
                'idEstado' => 24,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 4501,
                'nome' => 'Paulo Lopes',
                'idEstado' => 24,
            ),
            1 => 
            array (
                'id' => 4502,
                'nome' => 'Pedras Grandes',
                'idEstado' => 24,
            ),
            2 => 
            array (
                'id' => 4503,
                'nome' => 'Penha',
                'idEstado' => 24,
            ),
            3 => 
            array (
                'id' => 4504,
                'nome' => 'Peritiba',
                'idEstado' => 24,
            ),
            4 => 
            array (
                'id' => 4505,
                'nome' => 'Pescaria Brava',
                'idEstado' => 24,
            ),
            5 => 
            array (
                'id' => 4506,
                'nome' => 'Petrolândia',
                'idEstado' => 24,
            ),
            6 => 
            array (
                'id' => 4507,
                'nome' => 'Balneário Piçarras',
                'idEstado' => 24,
            ),
            7 => 
            array (
                'id' => 4508,
                'nome' => 'Pinhalzinho',
                'idEstado' => 24,
            ),
            8 => 
            array (
                'id' => 4509,
                'nome' => 'Pinheiro Preto',
                'idEstado' => 24,
            ),
            9 => 
            array (
                'id' => 4510,
                'nome' => 'Piratuba',
                'idEstado' => 24,
            ),
            10 => 
            array (
                'id' => 4511,
                'nome' => 'Planalto Alegre',
                'idEstado' => 24,
            ),
            11 => 
            array (
                'id' => 4512,
                'nome' => 'Pomerode',
                'idEstado' => 24,
            ),
            12 => 
            array (
                'id' => 4513,
                'nome' => 'Ponte Alta',
                'idEstado' => 24,
            ),
            13 => 
            array (
                'id' => 4514,
                'nome' => 'Ponte Alta do Norte',
                'idEstado' => 24,
            ),
            14 => 
            array (
                'id' => 4515,
                'nome' => 'Ponte Serrada',
                'idEstado' => 24,
            ),
            15 => 
            array (
                'id' => 4516,
                'nome' => 'Porto Belo',
                'idEstado' => 24,
            ),
            16 => 
            array (
                'id' => 4517,
                'nome' => 'Porto União',
                'idEstado' => 24,
            ),
            17 => 
            array (
                'id' => 4518,
                'nome' => 'Pouso Redondo',
                'idEstado' => 24,
            ),
            18 => 
            array (
                'id' => 4519,
                'nome' => 'Praia Grande',
                'idEstado' => 24,
            ),
            19 => 
            array (
                'id' => 4520,
                'nome' => 'Presidente Castello Branco',
                'idEstado' => 24,
            ),
            20 => 
            array (
                'id' => 4521,
                'nome' => 'Presidente Getúlio',
                'idEstado' => 24,
            ),
            21 => 
            array (
                'id' => 4522,
                'nome' => 'Presidente Nereu',
                'idEstado' => 24,
            ),
            22 => 
            array (
                'id' => 4523,
                'nome' => 'Princesa',
                'idEstado' => 24,
            ),
            23 => 
            array (
                'id' => 4524,
                'nome' => 'Quilombo',
                'idEstado' => 24,
            ),
            24 => 
            array (
                'id' => 4525,
                'nome' => 'Rancho Queimado',
                'idEstado' => 24,
            ),
            25 => 
            array (
                'id' => 4526,
                'nome' => 'Rio das Antas',
                'idEstado' => 24,
            ),
            26 => 
            array (
                'id' => 4527,
                'nome' => 'Rio do Campo',
                'idEstado' => 24,
            ),
            27 => 
            array (
                'id' => 4528,
                'nome' => 'Rio do Oeste',
                'idEstado' => 24,
            ),
            28 => 
            array (
                'id' => 4529,
                'nome' => 'Rio dos Cedros',
                'idEstado' => 24,
            ),
            29 => 
            array (
                'id' => 4530,
                'nome' => 'Rio do Sul',
                'idEstado' => 24,
            ),
            30 => 
            array (
                'id' => 4531,
                'nome' => 'Rio Fortuna',
                'idEstado' => 24,
            ),
            31 => 
            array (
                'id' => 4532,
                'nome' => 'Rio Negrinho',
                'idEstado' => 24,
            ),
            32 => 
            array (
                'id' => 4533,
                'nome' => 'Rio Rufino',
                'idEstado' => 24,
            ),
            33 => 
            array (
                'id' => 4534,
                'nome' => 'Riqueza',
                'idEstado' => 24,
            ),
            34 => 
            array (
                'id' => 4535,
                'nome' => 'Rodeio',
                'idEstado' => 24,
            ),
            35 => 
            array (
                'id' => 4536,
                'nome' => 'Romelândia',
                'idEstado' => 24,
            ),
            36 => 
            array (
                'id' => 4537,
                'nome' => 'Salete',
                'idEstado' => 24,
            ),
            37 => 
            array (
                'id' => 4538,
                'nome' => 'Saltinho',
                'idEstado' => 24,
            ),
            38 => 
            array (
                'id' => 4539,
                'nome' => 'Salto Veloso',
                'idEstado' => 24,
            ),
            39 => 
            array (
                'id' => 4540,
                'nome' => 'Sangão',
                'idEstado' => 24,
            ),
            40 => 
            array (
                'id' => 4541,
                'nome' => 'Santa Cecília',
                'idEstado' => 24,
            ),
            41 => 
            array (
                'id' => 4542,
                'nome' => 'Santa Helena',
                'idEstado' => 24,
            ),
            42 => 
            array (
                'id' => 4543,
                'nome' => 'Santa Rosa de Lima',
                'idEstado' => 24,
            ),
            43 => 
            array (
                'id' => 4544,
                'nome' => 'Santa Rosa do Sul',
                'idEstado' => 24,
            ),
            44 => 
            array (
                'id' => 4545,
                'nome' => 'Santa Terezinha',
                'idEstado' => 24,
            ),
            45 => 
            array (
                'id' => 4546,
                'nome' => 'Santa Terezinha do Progresso',
                'idEstado' => 24,
            ),
            46 => 
            array (
                'id' => 4547,
                'nome' => 'Santiago do Sul',
                'idEstado' => 24,
            ),
            47 => 
            array (
                'id' => 4548,
                'nome' => 'Santo Amaro da Imperatriz',
                'idEstado' => 24,
            ),
            48 => 
            array (
                'id' => 4549,
                'nome' => 'São Bernardino',
                'idEstado' => 24,
            ),
            49 => 
            array (
                'id' => 4550,
                'nome' => 'São Bento do Sul',
                'idEstado' => 24,
            ),
            50 => 
            array (
                'id' => 4551,
                'nome' => 'São Bonifácio',
                'idEstado' => 24,
            ),
            51 => 
            array (
                'id' => 4552,
                'nome' => 'São Carlos',
                'idEstado' => 24,
            ),
            52 => 
            array (
                'id' => 4553,
                'nome' => 'São Cristovão do Sul',
                'idEstado' => 24,
            ),
            53 => 
            array (
                'id' => 4554,
                'nome' => 'São Domingos',
                'idEstado' => 24,
            ),
            54 => 
            array (
                'id' => 4555,
                'nome' => 'São Francisco do Sul',
                'idEstado' => 24,
            ),
            55 => 
            array (
                'id' => 4556,
                'nome' => 'São João do Oeste',
                'idEstado' => 24,
            ),
            56 => 
            array (
                'id' => 4557,
                'nome' => 'São João Batista',
                'idEstado' => 24,
            ),
            57 => 
            array (
                'id' => 4558,
                'nome' => 'São João do Itaperiú',
                'idEstado' => 24,
            ),
            58 => 
            array (
                'id' => 4559,
                'nome' => 'São João do Sul',
                'idEstado' => 24,
            ),
            59 => 
            array (
                'id' => 4560,
                'nome' => 'São Joaquim',
                'idEstado' => 24,
            ),
            60 => 
            array (
                'id' => 4561,
                'nome' => 'São José',
                'idEstado' => 24,
            ),
            61 => 
            array (
                'id' => 4562,
                'nome' => 'São José do Cedro',
                'idEstado' => 24,
            ),
            62 => 
            array (
                'id' => 4563,
                'nome' => 'São José do Cerrito',
                'idEstado' => 24,
            ),
            63 => 
            array (
                'id' => 4564,
                'nome' => 'São Lourenço do Oeste',
                'idEstado' => 24,
            ),
            64 => 
            array (
                'id' => 4565,
                'nome' => 'São Ludgero',
                'idEstado' => 24,
            ),
            65 => 
            array (
                'id' => 4566,
                'nome' => 'São Martinho',
                'idEstado' => 24,
            ),
            66 => 
            array (
                'id' => 4567,
                'nome' => 'São Miguel da Boa Vista',
                'idEstado' => 24,
            ),
            67 => 
            array (
                'id' => 4568,
                'nome' => 'São Miguel do Oeste',
                'idEstado' => 24,
            ),
            68 => 
            array (
                'id' => 4569,
                'nome' => 'São Pedro de Alcântara',
                'idEstado' => 24,
            ),
            69 => 
            array (
                'id' => 4570,
                'nome' => 'Saudades',
                'idEstado' => 24,
            ),
            70 => 
            array (
                'id' => 4571,
                'nome' => 'Schroeder',
                'idEstado' => 24,
            ),
            71 => 
            array (
                'id' => 4572,
                'nome' => 'Seara',
                'idEstado' => 24,
            ),
            72 => 
            array (
                'id' => 4573,
                'nome' => 'Serra Alta',
                'idEstado' => 24,
            ),
            73 => 
            array (
                'id' => 4574,
                'nome' => 'Siderópolis',
                'idEstado' => 24,
            ),
            74 => 
            array (
                'id' => 4575,
                'nome' => 'Sombrio',
                'idEstado' => 24,
            ),
            75 => 
            array (
                'id' => 4576,
                'nome' => 'Sul Brasil',
                'idEstado' => 24,
            ),
            76 => 
            array (
                'id' => 4577,
                'nome' => 'Taió',
                'idEstado' => 24,
            ),
            77 => 
            array (
                'id' => 4578,
                'nome' => 'Tangará',
                'idEstado' => 24,
            ),
            78 => 
            array (
                'id' => 4579,
                'nome' => 'Tigrinhos',
                'idEstado' => 24,
            ),
            79 => 
            array (
                'id' => 4580,
                'nome' => 'Tijucas',
                'idEstado' => 24,
            ),
            80 => 
            array (
                'id' => 4581,
                'nome' => 'Timbé do Sul',
                'idEstado' => 24,
            ),
            81 => 
            array (
                'id' => 4582,
                'nome' => 'Timbó',
                'idEstado' => 24,
            ),
            82 => 
            array (
                'id' => 4583,
                'nome' => 'Timbó Grande',
                'idEstado' => 24,
            ),
            83 => 
            array (
                'id' => 4584,
                'nome' => 'Três Barras',
                'idEstado' => 24,
            ),
            84 => 
            array (
                'id' => 4585,
                'nome' => 'Treviso',
                'idEstado' => 24,
            ),
            85 => 
            array (
                'id' => 4586,
                'nome' => 'Treze de Maio',
                'idEstado' => 24,
            ),
            86 => 
            array (
                'id' => 4587,
                'nome' => 'Treze Tílias',
                'idEstado' => 24,
            ),
            87 => 
            array (
                'id' => 4588,
                'nome' => 'Trombudo Central',
                'idEstado' => 24,
            ),
            88 => 
            array (
                'id' => 4589,
                'nome' => 'Tubarão',
                'idEstado' => 24,
            ),
            89 => 
            array (
                'id' => 4590,
                'nome' => 'Tunápolis',
                'idEstado' => 24,
            ),
            90 => 
            array (
                'id' => 4591,
                'nome' => 'Turvo',
                'idEstado' => 24,
            ),
            91 => 
            array (
                'id' => 4592,
                'nome' => 'União do Oeste',
                'idEstado' => 24,
            ),
            92 => 
            array (
                'id' => 4593,
                'nome' => 'Urubici',
                'idEstado' => 24,
            ),
            93 => 
            array (
                'id' => 4594,
                'nome' => 'Urupema',
                'idEstado' => 24,
            ),
            94 => 
            array (
                'id' => 4595,
                'nome' => 'Urussanga',
                'idEstado' => 24,
            ),
            95 => 
            array (
                'id' => 4596,
                'nome' => 'Vargeão',
                'idEstado' => 24,
            ),
            96 => 
            array (
                'id' => 4597,
                'nome' => 'Vargem',
                'idEstado' => 24,
            ),
            97 => 
            array (
                'id' => 4598,
                'nome' => 'Vargem Bonita',
                'idEstado' => 24,
            ),
            98 => 
            array (
                'id' => 4599,
                'nome' => 'Vidal Ramos',
                'idEstado' => 24,
            ),
            99 => 
            array (
                'id' => 4600,
                'nome' => 'Videira',
                'idEstado' => 24,
            ),
            100 => 
            array (
                'id' => 4601,
                'nome' => 'Vitor Meireles',
                'idEstado' => 24,
            ),
            101 => 
            array (
                'id' => 4602,
                'nome' => 'Witmarsum',
                'idEstado' => 24,
            ),
            102 => 
            array (
                'id' => 4603,
                'nome' => 'Xanxerê',
                'idEstado' => 24,
            ),
            103 => 
            array (
                'id' => 4604,
                'nome' => 'Xavantina',
                'idEstado' => 24,
            ),
            104 => 
            array (
                'id' => 4605,
                'nome' => 'Xaxim',
                'idEstado' => 24,
            ),
            105 => 
            array (
                'id' => 4606,
                'nome' => 'Zortéa',
                'idEstado' => 24,
            ),
            106 => 
            array (
                'id' => 4607,
                'nome' => 'Balneário Rincão',
                'idEstado' => 24,
            ),
            107 => 
            array (
                'id' => 4608,
                'nome' => 'Aceguá',
                'idEstado' => 21,
            ),
            108 => 
            array (
                'id' => 4609,
                'nome' => 'Água Santa',
                'idEstado' => 21,
            ),
            109 => 
            array (
                'id' => 4610,
                'nome' => 'Agudo',
                'idEstado' => 21,
            ),
            110 => 
            array (
                'id' => 4611,
                'nome' => 'Ajuricaba',
                'idEstado' => 21,
            ),
            111 => 
            array (
                'id' => 4612,
                'nome' => 'Alecrim',
                'idEstado' => 21,
            ),
            112 => 
            array (
                'id' => 4613,
                'nome' => 'Alegrete',
                'idEstado' => 21,
            ),
            113 => 
            array (
                'id' => 4614,
                'nome' => 'Alegria',
                'idEstado' => 21,
            ),
            114 => 
            array (
                'id' => 4615,
                'nome' => 'Almirante Tamandaré do Sul',
                'idEstado' => 21,
            ),
            115 => 
            array (
                'id' => 4616,
                'nome' => 'Alpestre',
                'idEstado' => 21,
            ),
            116 => 
            array (
                'id' => 4617,
                'nome' => 'Alto Alegre',
                'idEstado' => 21,
            ),
            117 => 
            array (
                'id' => 4618,
                'nome' => 'Alto Feliz',
                'idEstado' => 21,
            ),
            118 => 
            array (
                'id' => 4619,
                'nome' => 'Alvorada',
                'idEstado' => 21,
            ),
            119 => 
            array (
                'id' => 4620,
                'nome' => 'Amaral Ferrador',
                'idEstado' => 21,
            ),
            120 => 
            array (
                'id' => 4621,
                'nome' => 'Ametista do Sul',
                'idEstado' => 21,
            ),
            121 => 
            array (
                'id' => 4622,
                'nome' => 'André da Rocha',
                'idEstado' => 21,
            ),
            122 => 
            array (
                'id' => 4623,
                'nome' => 'Anta Gorda',
                'idEstado' => 21,
            ),
            123 => 
            array (
                'id' => 4624,
                'nome' => 'Antônio Prado',
                'idEstado' => 21,
            ),
            124 => 
            array (
                'id' => 4625,
                'nome' => 'Arambaré',
                'idEstado' => 21,
            ),
            125 => 
            array (
                'id' => 4626,
                'nome' => 'Araricá',
                'idEstado' => 21,
            ),
            126 => 
            array (
                'id' => 4627,
                'nome' => 'Aratiba',
                'idEstado' => 21,
            ),
            127 => 
            array (
                'id' => 4628,
                'nome' => 'Arroio do Meio',
                'idEstado' => 21,
            ),
            128 => 
            array (
                'id' => 4629,
                'nome' => 'Arroio do Sal',
                'idEstado' => 21,
            ),
            129 => 
            array (
                'id' => 4630,
                'nome' => 'Arroio do Padre',
                'idEstado' => 21,
            ),
            130 => 
            array (
                'id' => 4631,
                'nome' => 'Arroio dos Ratos',
                'idEstado' => 21,
            ),
            131 => 
            array (
                'id' => 4632,
                'nome' => 'Arroio do Tigre',
                'idEstado' => 21,
            ),
            132 => 
            array (
                'id' => 4633,
                'nome' => 'Arroio Grande',
                'idEstado' => 21,
            ),
            133 => 
            array (
                'id' => 4634,
                'nome' => 'Arvorezinha',
                'idEstado' => 21,
            ),
            134 => 
            array (
                'id' => 4635,
                'nome' => 'Augusto Pestana',
                'idEstado' => 21,
            ),
            135 => 
            array (
                'id' => 4636,
                'nome' => 'Áurea',
                'idEstado' => 21,
            ),
            136 => 
            array (
                'id' => 4637,
                'nome' => 'Bagé',
                'idEstado' => 21,
            ),
            137 => 
            array (
                'id' => 4638,
                'nome' => 'Balneário Pinhal',
                'idEstado' => 21,
            ),
            138 => 
            array (
                'id' => 4639,
                'nome' => 'Barão',
                'idEstado' => 21,
            ),
            139 => 
            array (
                'id' => 4640,
                'nome' => 'Barão de Cotegipe',
                'idEstado' => 21,
            ),
            140 => 
            array (
                'id' => 4641,
                'nome' => 'Barão do Triunfo',
                'idEstado' => 21,
            ),
            141 => 
            array (
                'id' => 4642,
                'nome' => 'Barracão',
                'idEstado' => 21,
            ),
            142 => 
            array (
                'id' => 4643,
                'nome' => 'Barra do Guarita',
                'idEstado' => 21,
            ),
            143 => 
            array (
                'id' => 4644,
                'nome' => 'Barra do Quaraí',
                'idEstado' => 21,
            ),
            144 => 
            array (
                'id' => 4645,
                'nome' => 'Barra do Ribeiro',
                'idEstado' => 21,
            ),
            145 => 
            array (
                'id' => 4646,
                'nome' => 'Barra do Rio Azul',
                'idEstado' => 21,
            ),
            146 => 
            array (
                'id' => 4647,
                'nome' => 'Barra Funda',
                'idEstado' => 21,
            ),
            147 => 
            array (
                'id' => 4648,
                'nome' => 'Barros Cassal',
                'idEstado' => 21,
            ),
            148 => 
            array (
                'id' => 4649,
                'nome' => 'Benjamin Constant do Sul',
                'idEstado' => 21,
            ),
            149 => 
            array (
                'id' => 4650,
                'nome' => 'Bento Gonçalves',
                'idEstado' => 21,
            ),
            150 => 
            array (
                'id' => 4651,
                'nome' => 'Boa Vista das Missões',
                'idEstado' => 21,
            ),
            151 => 
            array (
                'id' => 4652,
                'nome' => 'Boa Vista do Buricá',
                'idEstado' => 21,
            ),
            152 => 
            array (
                'id' => 4653,
                'nome' => 'Boa Vista do Cadeado',
                'idEstado' => 21,
            ),
            153 => 
            array (
                'id' => 4654,
                'nome' => 'Boa Vista do Incra',
                'idEstado' => 21,
            ),
            154 => 
            array (
                'id' => 4655,
                'nome' => 'Boa Vista do Sul',
                'idEstado' => 21,
            ),
            155 => 
            array (
                'id' => 4656,
                'nome' => 'Bom Jesus',
                'idEstado' => 21,
            ),
            156 => 
            array (
                'id' => 4657,
                'nome' => 'Bom Princípio',
                'idEstado' => 21,
            ),
            157 => 
            array (
                'id' => 4658,
                'nome' => 'Bom Progresso',
                'idEstado' => 21,
            ),
            158 => 
            array (
                'id' => 4659,
                'nome' => 'Bom Retiro do Sul',
                'idEstado' => 21,
            ),
            159 => 
            array (
                'id' => 4660,
                'nome' => 'Boqueirão do Leão',
                'idEstado' => 21,
            ),
            160 => 
            array (
                'id' => 4661,
                'nome' => 'Bossoroca',
                'idEstado' => 21,
            ),
            161 => 
            array (
                'id' => 4662,
                'nome' => 'Bozano',
                'idEstado' => 21,
            ),
            162 => 
            array (
                'id' => 4663,
                'nome' => 'Braga',
                'idEstado' => 21,
            ),
            163 => 
            array (
                'id' => 4664,
                'nome' => 'Brochier',
                'idEstado' => 21,
            ),
            164 => 
            array (
                'id' => 4665,
                'nome' => 'Butiá',
                'idEstado' => 21,
            ),
            165 => 
            array (
                'id' => 4666,
                'nome' => 'Caçapava do Sul',
                'idEstado' => 21,
            ),
            166 => 
            array (
                'id' => 4667,
                'nome' => 'Cacequi',
                'idEstado' => 21,
            ),
            167 => 
            array (
                'id' => 4668,
                'nome' => 'Cachoeira do Sul',
                'idEstado' => 21,
            ),
            168 => 
            array (
                'id' => 4669,
                'nome' => 'Cachoeirinha',
                'idEstado' => 21,
            ),
            169 => 
            array (
                'id' => 4670,
                'nome' => 'Cacique Doble',
                'idEstado' => 21,
            ),
            170 => 
            array (
                'id' => 4671,
                'nome' => 'Caibaté',
                'idEstado' => 21,
            ),
            171 => 
            array (
                'id' => 4672,
                'nome' => 'Caiçara',
                'idEstado' => 21,
            ),
            172 => 
            array (
                'id' => 4673,
                'nome' => 'Camaquã',
                'idEstado' => 21,
            ),
            173 => 
            array (
                'id' => 4674,
                'nome' => 'Camargo',
                'idEstado' => 21,
            ),
            174 => 
            array (
                'id' => 4675,
                'nome' => 'Cambará do Sul',
                'idEstado' => 21,
            ),
            175 => 
            array (
                'id' => 4676,
                'nome' => 'Campestre da Serra',
                'idEstado' => 21,
            ),
            176 => 
            array (
                'id' => 4677,
                'nome' => 'Campina das Missões',
                'idEstado' => 21,
            ),
            177 => 
            array (
                'id' => 4678,
                'nome' => 'Campinas do Sul',
                'idEstado' => 21,
            ),
            178 => 
            array (
                'id' => 4679,
                'nome' => 'Campo Bom',
                'idEstado' => 21,
            ),
            179 => 
            array (
                'id' => 4680,
                'nome' => 'Campo Novo',
                'idEstado' => 21,
            ),
            180 => 
            array (
                'id' => 4681,
                'nome' => 'Campos Borges',
                'idEstado' => 21,
            ),
            181 => 
            array (
                'id' => 4682,
                'nome' => 'Candelária',
                'idEstado' => 21,
            ),
            182 => 
            array (
                'id' => 4683,
                'nome' => 'Cândido Godói',
                'idEstado' => 21,
            ),
            183 => 
            array (
                'id' => 4684,
                'nome' => 'Candiota',
                'idEstado' => 21,
            ),
            184 => 
            array (
                'id' => 4685,
                'nome' => 'Canela',
                'idEstado' => 21,
            ),
            185 => 
            array (
                'id' => 4686,
                'nome' => 'Canguçu',
                'idEstado' => 21,
            ),
            186 => 
            array (
                'id' => 4687,
                'nome' => 'Canoas',
                'idEstado' => 21,
            ),
            187 => 
            array (
                'id' => 4688,
                'nome' => 'Canudos do Vale',
                'idEstado' => 21,
            ),
            188 => 
            array (
                'id' => 4689,
                'nome' => 'Capão Bonito do Sul',
                'idEstado' => 21,
            ),
            189 => 
            array (
                'id' => 4690,
                'nome' => 'Capão da Canoa',
                'idEstado' => 21,
            ),
            190 => 
            array (
                'id' => 4691,
                'nome' => 'Capão do Cipó',
                'idEstado' => 21,
            ),
            191 => 
            array (
                'id' => 4692,
                'nome' => 'Capão do Leão',
                'idEstado' => 21,
            ),
            192 => 
            array (
                'id' => 4693,
                'nome' => 'Capivari do Sul',
                'idEstado' => 21,
            ),
            193 => 
            array (
                'id' => 4694,
                'nome' => 'Capela de Santana',
                'idEstado' => 21,
            ),
            194 => 
            array (
                'id' => 4695,
                'nome' => 'Capitão',
                'idEstado' => 21,
            ),
            195 => 
            array (
                'id' => 4696,
                'nome' => 'Carazinho',
                'idEstado' => 21,
            ),
            196 => 
            array (
                'id' => 4697,
                'nome' => 'Caraá',
                'idEstado' => 21,
            ),
            197 => 
            array (
                'id' => 4698,
                'nome' => 'Carlos Barbosa',
                'idEstado' => 21,
            ),
            198 => 
            array (
                'id' => 4699,
                'nome' => 'Carlos Gomes',
                'idEstado' => 21,
            ),
            199 => 
            array (
                'id' => 4700,
                'nome' => 'Casca',
                'idEstado' => 21,
            ),
            200 => 
            array (
                'id' => 4701,
                'nome' => 'Caseiros',
                'idEstado' => 21,
            ),
            201 => 
            array (
                'id' => 4702,
                'nome' => 'Catuípe',
                'idEstado' => 21,
            ),
            202 => 
            array (
                'id' => 4703,
                'nome' => 'Caxias do Sul',
                'idEstado' => 21,
            ),
            203 => 
            array (
                'id' => 4704,
                'nome' => 'Centenário',
                'idEstado' => 21,
            ),
            204 => 
            array (
                'id' => 4705,
                'nome' => 'Cerrito',
                'idEstado' => 21,
            ),
            205 => 
            array (
                'id' => 4706,
                'nome' => 'Cerro Branco',
                'idEstado' => 21,
            ),
            206 => 
            array (
                'id' => 4707,
                'nome' => 'Cerro Grande',
                'idEstado' => 21,
            ),
            207 => 
            array (
                'id' => 4708,
                'nome' => 'Cerro Grande do Sul',
                'idEstado' => 21,
            ),
            208 => 
            array (
                'id' => 4709,
                'nome' => 'Cerro Largo',
                'idEstado' => 21,
            ),
            209 => 
            array (
                'id' => 4710,
                'nome' => 'Chapada',
                'idEstado' => 21,
            ),
            210 => 
            array (
                'id' => 4711,
                'nome' => 'Charqueadas',
                'idEstado' => 21,
            ),
            211 => 
            array (
                'id' => 4712,
                'nome' => 'Charrua',
                'idEstado' => 21,
            ),
            212 => 
            array (
                'id' => 4713,
                'nome' => 'Chiapetta',
                'idEstado' => 21,
            ),
            213 => 
            array (
                'id' => 4714,
                'nome' => 'Chuí',
                'idEstado' => 21,
            ),
            214 => 
            array (
                'id' => 4715,
                'nome' => 'Chuvisca',
                'idEstado' => 21,
            ),
            215 => 
            array (
                'id' => 4716,
                'nome' => 'Cidreira',
                'idEstado' => 21,
            ),
            216 => 
            array (
                'id' => 4717,
                'nome' => 'Ciríaco',
                'idEstado' => 21,
            ),
            217 => 
            array (
                'id' => 4718,
                'nome' => 'Colinas',
                'idEstado' => 21,
            ),
            218 => 
            array (
                'id' => 4719,
                'nome' => 'Colorado',
                'idEstado' => 21,
            ),
            219 => 
            array (
                'id' => 4720,
                'nome' => 'Condor',
                'idEstado' => 21,
            ),
            220 => 
            array (
                'id' => 4721,
                'nome' => 'Constantina',
                'idEstado' => 21,
            ),
            221 => 
            array (
                'id' => 4722,
                'nome' => 'Coqueiro Baixo',
                'idEstado' => 21,
            ),
            222 => 
            array (
                'id' => 4723,
                'nome' => 'Coqueiros do Sul',
                'idEstado' => 21,
            ),
            223 => 
            array (
                'id' => 4724,
                'nome' => 'Coronel Barros',
                'idEstado' => 21,
            ),
            224 => 
            array (
                'id' => 4725,
                'nome' => 'Coronel Bicaco',
                'idEstado' => 21,
            ),
            225 => 
            array (
                'id' => 4726,
                'nome' => 'Coronel Pilar',
                'idEstado' => 21,
            ),
            226 => 
            array (
                'id' => 4727,
                'nome' => 'Cotiporã',
                'idEstado' => 21,
            ),
            227 => 
            array (
                'id' => 4728,
                'nome' => 'Coxilha',
                'idEstado' => 21,
            ),
            228 => 
            array (
                'id' => 4729,
                'nome' => 'Crissiumal',
                'idEstado' => 21,
            ),
            229 => 
            array (
                'id' => 4730,
                'nome' => 'Cristal',
                'idEstado' => 21,
            ),
            230 => 
            array (
                'id' => 4731,
                'nome' => 'Cristal do Sul',
                'idEstado' => 21,
            ),
            231 => 
            array (
                'id' => 4732,
                'nome' => 'Cruz Alta',
                'idEstado' => 21,
            ),
            232 => 
            array (
                'id' => 4733,
                'nome' => 'Cruzaltense',
                'idEstado' => 21,
            ),
            233 => 
            array (
                'id' => 4734,
                'nome' => 'Cruzeiro do Sul',
                'idEstado' => 21,
            ),
            234 => 
            array (
                'id' => 4735,
                'nome' => 'David Canabarro',
                'idEstado' => 21,
            ),
            235 => 
            array (
                'id' => 4736,
                'nome' => 'Derrubadas',
                'idEstado' => 21,
            ),
            236 => 
            array (
                'id' => 4737,
                'nome' => 'Dezesseis de Novembro',
                'idEstado' => 21,
            ),
            237 => 
            array (
                'id' => 4738,
                'nome' => 'Dilermando de Aguiar',
                'idEstado' => 21,
            ),
            238 => 
            array (
                'id' => 4739,
                'nome' => 'Dois Irmãos',
                'idEstado' => 21,
            ),
            239 => 
            array (
                'id' => 4740,
                'nome' => 'Dois Irmãos das Missões',
                'idEstado' => 21,
            ),
            240 => 
            array (
                'id' => 4741,
                'nome' => 'Dois Lajeados',
                'idEstado' => 21,
            ),
            241 => 
            array (
                'id' => 4742,
                'nome' => 'Dom Feliciano',
                'idEstado' => 21,
            ),
            242 => 
            array (
                'id' => 4743,
                'nome' => 'Dom Pedro de Alcântara',
                'idEstado' => 21,
            ),
            243 => 
            array (
                'id' => 4744,
                'nome' => 'Dom Pedrito',
                'idEstado' => 21,
            ),
            244 => 
            array (
                'id' => 4745,
                'nome' => 'Dona Francisca',
                'idEstado' => 21,
            ),
            245 => 
            array (
                'id' => 4746,
                'nome' => 'Doutor Maurício Cardoso',
                'idEstado' => 21,
            ),
            246 => 
            array (
                'id' => 4747,
                'nome' => 'Doutor Ricardo',
                'idEstado' => 21,
            ),
            247 => 
            array (
                'id' => 4748,
                'nome' => 'Eldorado do Sul',
                'idEstado' => 21,
            ),
            248 => 
            array (
                'id' => 4749,
                'nome' => 'Encantado',
                'idEstado' => 21,
            ),
            249 => 
            array (
                'id' => 4750,
                'nome' => 'Encruzilhada do Sul',
                'idEstado' => 21,
            ),
            250 => 
            array (
                'id' => 4751,
                'nome' => 'Engenho Velho',
                'idEstado' => 21,
            ),
            251 => 
            array (
                'id' => 4752,
                'nome' => 'Entre-Ijuís',
                'idEstado' => 21,
            ),
            252 => 
            array (
                'id' => 4753,
                'nome' => 'Entre Rios do Sul',
                'idEstado' => 21,
            ),
            253 => 
            array (
                'id' => 4754,
                'nome' => 'Erebango',
                'idEstado' => 21,
            ),
            254 => 
            array (
                'id' => 4755,
                'nome' => 'Erechim',
                'idEstado' => 21,
            ),
            255 => 
            array (
                'id' => 4756,
                'nome' => 'Ernestina',
                'idEstado' => 21,
            ),
            256 => 
            array (
                'id' => 4757,
                'nome' => 'Herval',
                'idEstado' => 21,
            ),
            257 => 
            array (
                'id' => 4758,
                'nome' => 'Erval Grande',
                'idEstado' => 21,
            ),
            258 => 
            array (
                'id' => 4759,
                'nome' => 'Erval Seco',
                'idEstado' => 21,
            ),
            259 => 
            array (
                'id' => 4760,
                'nome' => 'Esmeralda',
                'idEstado' => 21,
            ),
            260 => 
            array (
                'id' => 4761,
                'nome' => 'Esperança do Sul',
                'idEstado' => 21,
            ),
            261 => 
            array (
                'id' => 4762,
                'nome' => 'Espumoso',
                'idEstado' => 21,
            ),
            262 => 
            array (
                'id' => 4763,
                'nome' => 'Estação',
                'idEstado' => 21,
            ),
            263 => 
            array (
                'id' => 4764,
                'nome' => 'Estância Velha',
                'idEstado' => 21,
            ),
            264 => 
            array (
                'id' => 4765,
                'nome' => 'Esteio',
                'idEstado' => 21,
            ),
            265 => 
            array (
                'id' => 4766,
                'nome' => 'Estrela',
                'idEstado' => 21,
            ),
            266 => 
            array (
                'id' => 4767,
                'nome' => 'Estrela Velha',
                'idEstado' => 21,
            ),
            267 => 
            array (
                'id' => 4768,
                'nome' => 'Eugênio de Castro',
                'idEstado' => 21,
            ),
            268 => 
            array (
                'id' => 4769,
                'nome' => 'Fagundes Varela',
                'idEstado' => 21,
            ),
            269 => 
            array (
                'id' => 4770,
                'nome' => 'Farroupilha',
                'idEstado' => 21,
            ),
            270 => 
            array (
                'id' => 4771,
                'nome' => 'Faxinal do Soturno',
                'idEstado' => 21,
            ),
            271 => 
            array (
                'id' => 4772,
                'nome' => 'Faxinalzinho',
                'idEstado' => 21,
            ),
            272 => 
            array (
                'id' => 4773,
                'nome' => 'Fazenda Vilanova',
                'idEstado' => 21,
            ),
            273 => 
            array (
                'id' => 4774,
                'nome' => 'Feliz',
                'idEstado' => 21,
            ),
            274 => 
            array (
                'id' => 4775,
                'nome' => 'Flores da Cunha',
                'idEstado' => 21,
            ),
            275 => 
            array (
                'id' => 4776,
                'nome' => 'Floriano Peixoto',
                'idEstado' => 21,
            ),
            276 => 
            array (
                'id' => 4777,
                'nome' => 'Fontoura Xavier',
                'idEstado' => 21,
            ),
            277 => 
            array (
                'id' => 4778,
                'nome' => 'Formigueiro',
                'idEstado' => 21,
            ),
            278 => 
            array (
                'id' => 4779,
                'nome' => 'Forquetinha',
                'idEstado' => 21,
            ),
            279 => 
            array (
                'id' => 4780,
                'nome' => 'Fortaleza dos Valos',
                'idEstado' => 21,
            ),
            280 => 
            array (
                'id' => 4781,
                'nome' => 'Frederico Westphalen',
                'idEstado' => 21,
            ),
            281 => 
            array (
                'id' => 4782,
                'nome' => 'Garibaldi',
                'idEstado' => 21,
            ),
            282 => 
            array (
                'id' => 4783,
                'nome' => 'Garruchos',
                'idEstado' => 21,
            ),
            283 => 
            array (
                'id' => 4784,
                'nome' => 'Gaurama',
                'idEstado' => 21,
            ),
            284 => 
            array (
                'id' => 4785,
                'nome' => 'General Câmara',
                'idEstado' => 21,
            ),
            285 => 
            array (
                'id' => 4786,
                'nome' => 'Gentil',
                'idEstado' => 21,
            ),
            286 => 
            array (
                'id' => 4787,
                'nome' => 'Getúlio Vargas',
                'idEstado' => 21,
            ),
            287 => 
            array (
                'id' => 4788,
                'nome' => 'Giruá',
                'idEstado' => 21,
            ),
            288 => 
            array (
                'id' => 4789,
                'nome' => 'Glorinha',
                'idEstado' => 21,
            ),
            289 => 
            array (
                'id' => 4790,
                'nome' => 'Gramado',
                'idEstado' => 21,
            ),
            290 => 
            array (
                'id' => 4791,
                'nome' => 'Gramado dos Loureiros',
                'idEstado' => 21,
            ),
            291 => 
            array (
                'id' => 4792,
                'nome' => 'Gramado Xavier',
                'idEstado' => 21,
            ),
            292 => 
            array (
                'id' => 4793,
                'nome' => 'Gravataí',
                'idEstado' => 21,
            ),
            293 => 
            array (
                'id' => 4794,
                'nome' => 'Guabiju',
                'idEstado' => 21,
            ),
            294 => 
            array (
                'id' => 4795,
                'nome' => 'Guaíba',
                'idEstado' => 21,
            ),
            295 => 
            array (
                'id' => 4796,
                'nome' => 'Guaporé',
                'idEstado' => 21,
            ),
            296 => 
            array (
                'id' => 4797,
                'nome' => 'Guarani das Missões',
                'idEstado' => 21,
            ),
            297 => 
            array (
                'id' => 4798,
                'nome' => 'Harmonia',
                'idEstado' => 21,
            ),
            298 => 
            array (
                'id' => 4799,
                'nome' => 'Herveiras',
                'idEstado' => 21,
            ),
            299 => 
            array (
                'id' => 4800,
                'nome' => 'Horizontina',
                'idEstado' => 21,
            ),
            300 => 
            array (
                'id' => 4801,
                'nome' => 'Hulha Negra',
                'idEstado' => 21,
            ),
            301 => 
            array (
                'id' => 4802,
                'nome' => 'Humaitá',
                'idEstado' => 21,
            ),
            302 => 
            array (
                'id' => 4803,
                'nome' => 'Ibarama',
                'idEstado' => 21,
            ),
            303 => 
            array (
                'id' => 4804,
                'nome' => 'Ibiaçá',
                'idEstado' => 21,
            ),
            304 => 
            array (
                'id' => 4805,
                'nome' => 'Ibiraiaras',
                'idEstado' => 21,
            ),
            305 => 
            array (
                'id' => 4806,
                'nome' => 'Ibirapuitã',
                'idEstado' => 21,
            ),
            306 => 
            array (
                'id' => 4807,
                'nome' => 'Ibirubá',
                'idEstado' => 21,
            ),
            307 => 
            array (
                'id' => 4808,
                'nome' => 'Igrejinha',
                'idEstado' => 21,
            ),
            308 => 
            array (
                'id' => 4809,
                'nome' => 'Ijuí',
                'idEstado' => 21,
            ),
            309 => 
            array (
                'id' => 4810,
                'nome' => 'Ilópolis',
                'idEstado' => 21,
            ),
            310 => 
            array (
                'id' => 4811,
                'nome' => 'Imbé',
                'idEstado' => 21,
            ),
            311 => 
            array (
                'id' => 4812,
                'nome' => 'Imigrante',
                'idEstado' => 21,
            ),
            312 => 
            array (
                'id' => 4813,
                'nome' => 'Independência',
                'idEstado' => 21,
            ),
            313 => 
            array (
                'id' => 4814,
                'nome' => 'Inhacorá',
                'idEstado' => 21,
            ),
            314 => 
            array (
                'id' => 4815,
                'nome' => 'Ipê',
                'idEstado' => 21,
            ),
            315 => 
            array (
                'id' => 4816,
                'nome' => 'Ipiranga do Sul',
                'idEstado' => 21,
            ),
            316 => 
            array (
                'id' => 4817,
                'nome' => 'Iraí',
                'idEstado' => 21,
            ),
            317 => 
            array (
                'id' => 4818,
                'nome' => 'Itaara',
                'idEstado' => 21,
            ),
            318 => 
            array (
                'id' => 4819,
                'nome' => 'Itacurubi',
                'idEstado' => 21,
            ),
            319 => 
            array (
                'id' => 4820,
                'nome' => 'Itapuca',
                'idEstado' => 21,
            ),
            320 => 
            array (
                'id' => 4821,
                'nome' => 'Itaqui',
                'idEstado' => 21,
            ),
            321 => 
            array (
                'id' => 4822,
                'nome' => 'Itati',
                'idEstado' => 21,
            ),
            322 => 
            array (
                'id' => 4823,
                'nome' => 'Itatiba do Sul',
                'idEstado' => 21,
            ),
            323 => 
            array (
                'id' => 4824,
                'nome' => 'Ivorá',
                'idEstado' => 21,
            ),
            324 => 
            array (
                'id' => 4825,
                'nome' => 'Ivoti',
                'idEstado' => 21,
            ),
            325 => 
            array (
                'id' => 4826,
                'nome' => 'Jaboticaba',
                'idEstado' => 21,
            ),
            326 => 
            array (
                'id' => 4827,
                'nome' => 'Jacuizinho',
                'idEstado' => 21,
            ),
            327 => 
            array (
                'id' => 4828,
                'nome' => 'Jacutinga',
                'idEstado' => 21,
            ),
            328 => 
            array (
                'id' => 4829,
                'nome' => 'Jaguarão',
                'idEstado' => 21,
            ),
            329 => 
            array (
                'id' => 4830,
                'nome' => 'Jaguari',
                'idEstado' => 21,
            ),
            330 => 
            array (
                'id' => 4831,
                'nome' => 'Jaquirana',
                'idEstado' => 21,
            ),
            331 => 
            array (
                'id' => 4832,
                'nome' => 'Jari',
                'idEstado' => 21,
            ),
            332 => 
            array (
                'id' => 4833,
                'nome' => 'Jóia',
                'idEstado' => 21,
            ),
            333 => 
            array (
                'id' => 4834,
                'nome' => 'Júlio de Castilhos',
                'idEstado' => 21,
            ),
            334 => 
            array (
                'id' => 4835,
                'nome' => 'Lagoa Bonita do Sul',
                'idEstado' => 21,
            ),
            335 => 
            array (
                'id' => 4836,
                'nome' => 'Lagoão',
                'idEstado' => 21,
            ),
            336 => 
            array (
                'id' => 4837,
                'nome' => 'Lagoa dos Três Cantos',
                'idEstado' => 21,
            ),
            337 => 
            array (
                'id' => 4838,
                'nome' => 'Lagoa Vermelha',
                'idEstado' => 21,
            ),
            338 => 
            array (
                'id' => 4839,
                'nome' => 'Lajeado',
                'idEstado' => 21,
            ),
            339 => 
            array (
                'id' => 4840,
                'nome' => 'Lajeado do Bugre',
                'idEstado' => 21,
            ),
            340 => 
            array (
                'id' => 4841,
                'nome' => 'Lavras do Sul',
                'idEstado' => 21,
            ),
            341 => 
            array (
                'id' => 4842,
                'nome' => 'Liberato Salzano',
                'idEstado' => 21,
            ),
            342 => 
            array (
                'id' => 4843,
                'nome' => 'Lindolfo Collor',
                'idEstado' => 21,
            ),
            343 => 
            array (
                'id' => 4844,
                'nome' => 'Linha Nova',
                'idEstado' => 21,
            ),
            344 => 
            array (
                'id' => 4845,
                'nome' => 'Machadinho',
                'idEstado' => 21,
            ),
            345 => 
            array (
                'id' => 4846,
                'nome' => 'Maçambará',
                'idEstado' => 21,
            ),
            346 => 
            array (
                'id' => 4847,
                'nome' => 'Mampituba',
                'idEstado' => 21,
            ),
            347 => 
            array (
                'id' => 4848,
                'nome' => 'Manoel Viana',
                'idEstado' => 21,
            ),
            348 => 
            array (
                'id' => 4849,
                'nome' => 'Maquiné',
                'idEstado' => 21,
            ),
            349 => 
            array (
                'id' => 4850,
                'nome' => 'Maratá',
                'idEstado' => 21,
            ),
            350 => 
            array (
                'id' => 4851,
                'nome' => 'Marau',
                'idEstado' => 21,
            ),
            351 => 
            array (
                'id' => 4852,
                'nome' => 'Marcelino Ramos',
                'idEstado' => 21,
            ),
            352 => 
            array (
                'id' => 4853,
                'nome' => 'Mariana Pimentel',
                'idEstado' => 21,
            ),
            353 => 
            array (
                'id' => 4854,
                'nome' => 'Mariano Moro',
                'idEstado' => 21,
            ),
            354 => 
            array (
                'id' => 4855,
                'nome' => 'Marques de Souza',
                'idEstado' => 21,
            ),
            355 => 
            array (
                'id' => 4856,
                'nome' => 'Mata',
                'idEstado' => 21,
            ),
            356 => 
            array (
                'id' => 4857,
                'nome' => 'Mato Castelhano',
                'idEstado' => 21,
            ),
            357 => 
            array (
                'id' => 4858,
                'nome' => 'Mato Leitão',
                'idEstado' => 21,
            ),
            358 => 
            array (
                'id' => 4859,
                'nome' => 'Mato Queimado',
                'idEstado' => 21,
            ),
            359 => 
            array (
                'id' => 4860,
                'nome' => 'Maximiliano de Almeida',
                'idEstado' => 21,
            ),
            360 => 
            array (
                'id' => 4861,
                'nome' => 'Minas do Leão',
                'idEstado' => 21,
            ),
            361 => 
            array (
                'id' => 4862,
                'nome' => 'Miraguaí',
                'idEstado' => 21,
            ),
            362 => 
            array (
                'id' => 4863,
                'nome' => 'Montauri',
                'idEstado' => 21,
            ),
            363 => 
            array (
                'id' => 4864,
                'nome' => 'Monte Alegre dos Campos',
                'idEstado' => 21,
            ),
            364 => 
            array (
                'id' => 4865,
                'nome' => 'Monte Belo do Sul',
                'idEstado' => 21,
            ),
            365 => 
            array (
                'id' => 4866,
                'nome' => 'Montenegro',
                'idEstado' => 21,
            ),
            366 => 
            array (
                'id' => 4867,
                'nome' => 'Mormaço',
                'idEstado' => 21,
            ),
            367 => 
            array (
                'id' => 4868,
                'nome' => 'Morrinhos do Sul',
                'idEstado' => 21,
            ),
            368 => 
            array (
                'id' => 4869,
                'nome' => 'Morro Redondo',
                'idEstado' => 21,
            ),
            369 => 
            array (
                'id' => 4870,
                'nome' => 'Morro Reuter',
                'idEstado' => 21,
            ),
            370 => 
            array (
                'id' => 4871,
                'nome' => 'Mostardas',
                'idEstado' => 21,
            ),
            371 => 
            array (
                'id' => 4872,
                'nome' => 'Muçum',
                'idEstado' => 21,
            ),
            372 => 
            array (
                'id' => 4873,
                'nome' => 'Muitos Capões',
                'idEstado' => 21,
            ),
            373 => 
            array (
                'id' => 4874,
                'nome' => 'Muliterno',
                'idEstado' => 21,
            ),
            374 => 
            array (
                'id' => 4875,
                'nome' => 'Não-Me-Toque',
                'idEstado' => 21,
            ),
            375 => 
            array (
                'id' => 4876,
                'nome' => 'Nicolau Vergueiro',
                'idEstado' => 21,
            ),
            376 => 
            array (
                'id' => 4877,
                'nome' => 'Nonoai',
                'idEstado' => 21,
            ),
            377 => 
            array (
                'id' => 4878,
                'nome' => 'Nova Alvorada',
                'idEstado' => 21,
            ),
            378 => 
            array (
                'id' => 4879,
                'nome' => 'Nova Araçá',
                'idEstado' => 21,
            ),
            379 => 
            array (
                'id' => 4880,
                'nome' => 'Nova Bassano',
                'idEstado' => 21,
            ),
            380 => 
            array (
                'id' => 4881,
                'nome' => 'Nova Boa Vista',
                'idEstado' => 21,
            ),
            381 => 
            array (
                'id' => 4882,
                'nome' => 'Nova Bréscia',
                'idEstado' => 21,
            ),
            382 => 
            array (
                'id' => 4883,
                'nome' => 'Nova Candelária',
                'idEstado' => 21,
            ),
            383 => 
            array (
                'id' => 4884,
                'nome' => 'Nova Esperança do Sul',
                'idEstado' => 21,
            ),
            384 => 
            array (
                'id' => 4885,
                'nome' => 'Nova Hartz',
                'idEstado' => 21,
            ),
            385 => 
            array (
                'id' => 4886,
                'nome' => 'Nova Pádua',
                'idEstado' => 21,
            ),
            386 => 
            array (
                'id' => 4887,
                'nome' => 'Nova Palma',
                'idEstado' => 21,
            ),
            387 => 
            array (
                'id' => 4888,
                'nome' => 'Nova Petrópolis',
                'idEstado' => 21,
            ),
            388 => 
            array (
                'id' => 4889,
                'nome' => 'Nova Prata',
                'idEstado' => 21,
            ),
            389 => 
            array (
                'id' => 4890,
                'nome' => 'Nova Ramada',
                'idEstado' => 21,
            ),
            390 => 
            array (
                'id' => 4891,
                'nome' => 'Nova Roma do Sul',
                'idEstado' => 21,
            ),
            391 => 
            array (
                'id' => 4892,
                'nome' => 'Nova Santa Rita',
                'idEstado' => 21,
            ),
            392 => 
            array (
                'id' => 4893,
                'nome' => 'Novo Cabrais',
                'idEstado' => 21,
            ),
            393 => 
            array (
                'id' => 4894,
                'nome' => 'Novo Hamburgo',
                'idEstado' => 21,
            ),
            394 => 
            array (
                'id' => 4895,
                'nome' => 'Novo Machado',
                'idEstado' => 21,
            ),
            395 => 
            array (
                'id' => 4896,
                'nome' => 'Novo Tiradentes',
                'idEstado' => 21,
            ),
            396 => 
            array (
                'id' => 4897,
                'nome' => 'Novo Xingu',
                'idEstado' => 21,
            ),
            397 => 
            array (
                'id' => 4898,
                'nome' => 'Novo Barreiro',
                'idEstado' => 21,
            ),
            398 => 
            array (
                'id' => 4899,
                'nome' => 'Osório',
                'idEstado' => 21,
            ),
            399 => 
            array (
                'id' => 4900,
                'nome' => 'Paim Filho',
                'idEstado' => 21,
            ),
            400 => 
            array (
                'id' => 4901,
                'nome' => 'Palmares do Sul',
                'idEstado' => 21,
            ),
            401 => 
            array (
                'id' => 4902,
                'nome' => 'Palmeira das Missões',
                'idEstado' => 21,
            ),
            402 => 
            array (
                'id' => 4903,
                'nome' => 'Palmitinho',
                'idEstado' => 21,
            ),
            403 => 
            array (
                'id' => 4904,
                'nome' => 'Panambi',
                'idEstado' => 21,
            ),
            404 => 
            array (
                'id' => 4905,
                'nome' => 'Pantano Grande',
                'idEstado' => 21,
            ),
            405 => 
            array (
                'id' => 4906,
                'nome' => 'Paraí',
                'idEstado' => 21,
            ),
            406 => 
            array (
                'id' => 4907,
                'nome' => 'Paraíso do Sul',
                'idEstado' => 21,
            ),
            407 => 
            array (
                'id' => 4908,
                'nome' => 'Pareci Novo',
                'idEstado' => 21,
            ),
            408 => 
            array (
                'id' => 4909,
                'nome' => 'Parobé',
                'idEstado' => 21,
            ),
            409 => 
            array (
                'id' => 4910,
                'nome' => 'Passa Sete',
                'idEstado' => 21,
            ),
            410 => 
            array (
                'id' => 4911,
                'nome' => 'Passo do Sobrado',
                'idEstado' => 21,
            ),
            411 => 
            array (
                'id' => 4912,
                'nome' => 'Passo Fundo',
                'idEstado' => 21,
            ),
            412 => 
            array (
                'id' => 4913,
                'nome' => 'Paulo Bento',
                'idEstado' => 21,
            ),
            413 => 
            array (
                'id' => 4914,
                'nome' => 'Paverama',
                'idEstado' => 21,
            ),
            414 => 
            array (
                'id' => 4915,
                'nome' => 'Pedras Altas',
                'idEstado' => 21,
            ),
            415 => 
            array (
                'id' => 4916,
                'nome' => 'Pedro Osório',
                'idEstado' => 21,
            ),
            416 => 
            array (
                'id' => 4917,
                'nome' => 'Pejuçara',
                'idEstado' => 21,
            ),
            417 => 
            array (
                'id' => 4918,
                'nome' => 'Pelotas',
                'idEstado' => 21,
            ),
            418 => 
            array (
                'id' => 4919,
                'nome' => 'Picada Café',
                'idEstado' => 21,
            ),
            419 => 
            array (
                'id' => 4920,
                'nome' => 'Pinhal',
                'idEstado' => 21,
            ),
            420 => 
            array (
                'id' => 4921,
                'nome' => 'Pinhal da Serra',
                'idEstado' => 21,
            ),
            421 => 
            array (
                'id' => 4922,
                'nome' => 'Pinhal Grande',
                'idEstado' => 21,
            ),
            422 => 
            array (
                'id' => 4923,
                'nome' => 'Pinheirinho do Vale',
                'idEstado' => 21,
            ),
            423 => 
            array (
                'id' => 4924,
                'nome' => 'Pinheiro Machado',
                'idEstado' => 21,
            ),
            424 => 
            array (
                'id' => 4925,
                'nome' => 'Pinto Bandeira',
                'idEstado' => 21,
            ),
            425 => 
            array (
                'id' => 4926,
                'nome' => 'Pirapó',
                'idEstado' => 21,
            ),
            426 => 
            array (
                'id' => 4927,
                'nome' => 'Piratini',
                'idEstado' => 21,
            ),
            427 => 
            array (
                'id' => 4928,
                'nome' => 'Planalto',
                'idEstado' => 21,
            ),
            428 => 
            array (
                'id' => 4929,
                'nome' => 'Poço das Antas',
                'idEstado' => 21,
            ),
            429 => 
            array (
                'id' => 4930,
                'nome' => 'Pontão',
                'idEstado' => 21,
            ),
            430 => 
            array (
                'id' => 4931,
                'nome' => 'Ponte Preta',
                'idEstado' => 21,
            ),
            431 => 
            array (
                'id' => 4932,
                'nome' => 'Portão',
                'idEstado' => 21,
            ),
            432 => 
            array (
                'id' => 4933,
                'nome' => 'Porto Alegre',
                'idEstado' => 21,
            ),
            433 => 
            array (
                'id' => 4934,
                'nome' => 'Porto Lucena',
                'idEstado' => 21,
            ),
            434 => 
            array (
                'id' => 4935,
                'nome' => 'Porto Mauá',
                'idEstado' => 21,
            ),
            435 => 
            array (
                'id' => 4936,
                'nome' => 'Porto Vera Cruz',
                'idEstado' => 21,
            ),
            436 => 
            array (
                'id' => 4937,
                'nome' => 'Porto Xavier',
                'idEstado' => 21,
            ),
            437 => 
            array (
                'id' => 4938,
                'nome' => 'Pouso Novo',
                'idEstado' => 21,
            ),
            438 => 
            array (
                'id' => 4939,
                'nome' => 'Presidente Lucena',
                'idEstado' => 21,
            ),
            439 => 
            array (
                'id' => 4940,
                'nome' => 'Progresso',
                'idEstado' => 21,
            ),
            440 => 
            array (
                'id' => 4941,
                'nome' => 'Protásio Alves',
                'idEstado' => 21,
            ),
            441 => 
            array (
                'id' => 4942,
                'nome' => 'Putinga',
                'idEstado' => 21,
            ),
            442 => 
            array (
                'id' => 4943,
                'nome' => 'Quaraí',
                'idEstado' => 21,
            ),
            443 => 
            array (
                'id' => 4944,
                'nome' => 'Quatro Irmãos',
                'idEstado' => 21,
            ),
            444 => 
            array (
                'id' => 4945,
                'nome' => 'Quevedos',
                'idEstado' => 21,
            ),
            445 => 
            array (
                'id' => 4946,
                'nome' => 'Quinze de Novembro',
                'idEstado' => 21,
            ),
            446 => 
            array (
                'id' => 4947,
                'nome' => 'Redentora',
                'idEstado' => 21,
            ),
            447 => 
            array (
                'id' => 4948,
                'nome' => 'Relvado',
                'idEstado' => 21,
            ),
            448 => 
            array (
                'id' => 4949,
                'nome' => 'Restinga Seca',
                'idEstado' => 21,
            ),
            449 => 
            array (
                'id' => 4950,
                'nome' => 'Rio dos Índios',
                'idEstado' => 21,
            ),
            450 => 
            array (
                'id' => 4951,
                'nome' => 'Rio Grande',
                'idEstado' => 21,
            ),
            451 => 
            array (
                'id' => 4952,
                'nome' => 'Rio Pardo',
                'idEstado' => 21,
            ),
            452 => 
            array (
                'id' => 4953,
                'nome' => 'Riozinho',
                'idEstado' => 21,
            ),
            453 => 
            array (
                'id' => 4954,
                'nome' => 'Roca Sales',
                'idEstado' => 21,
            ),
            454 => 
            array (
                'id' => 4955,
                'nome' => 'Rodeio Bonito',
                'idEstado' => 21,
            ),
            455 => 
            array (
                'id' => 4956,
                'nome' => 'Rolador',
                'idEstado' => 21,
            ),
            456 => 
            array (
                'id' => 4957,
                'nome' => 'Rolante',
                'idEstado' => 21,
            ),
            457 => 
            array (
                'id' => 4958,
                'nome' => 'Ronda Alta',
                'idEstado' => 21,
            ),
            458 => 
            array (
                'id' => 4959,
                'nome' => 'Rondinha',
                'idEstado' => 21,
            ),
            459 => 
            array (
                'id' => 4960,
                'nome' => 'Roque Gonzales',
                'idEstado' => 21,
            ),
            460 => 
            array (
                'id' => 4961,
                'nome' => 'Rosário do Sul',
                'idEstado' => 21,
            ),
            461 => 
            array (
                'id' => 4962,
                'nome' => 'Sagrada Família',
                'idEstado' => 21,
            ),
            462 => 
            array (
                'id' => 4963,
                'nome' => 'Saldanha Marinho',
                'idEstado' => 21,
            ),
            463 => 
            array (
                'id' => 4964,
                'nome' => 'Salto do Jacuí',
                'idEstado' => 21,
            ),
            464 => 
            array (
                'id' => 4965,
                'nome' => 'Salvador das Missões',
                'idEstado' => 21,
            ),
            465 => 
            array (
                'id' => 4966,
                'nome' => 'Salvador do Sul',
                'idEstado' => 21,
            ),
            466 => 
            array (
                'id' => 4967,
                'nome' => 'Sananduva',
                'idEstado' => 21,
            ),
            467 => 
            array (
                'id' => 4968,
                'nome' => 'Santa Bárbara do Sul',
                'idEstado' => 21,
            ),
            468 => 
            array (
                'id' => 4969,
                'nome' => 'Santa Cecília do Sul',
                'idEstado' => 21,
            ),
            469 => 
            array (
                'id' => 4970,
                'nome' => 'Santa Clara do Sul',
                'idEstado' => 21,
            ),
            470 => 
            array (
                'id' => 4971,
                'nome' => 'Santa Cruz do Sul',
                'idEstado' => 21,
            ),
            471 => 
            array (
                'id' => 4972,
                'nome' => 'Santa Maria',
                'idEstado' => 21,
            ),
            472 => 
            array (
                'id' => 4973,
                'nome' => 'Santa Maria do Herval',
                'idEstado' => 21,
            ),
            473 => 
            array (
                'id' => 4974,
                'nome' => 'Santa Margarida do Sul',
                'idEstado' => 21,
            ),
            474 => 
            array (
                'id' => 4975,
                'nome' => 'Santana da Boa Vista',
                'idEstado' => 21,
            ),
            475 => 
            array (
                'id' => 4976,
                'nome' => 'Sant\'Ana do Livramento',
                'idEstado' => 21,
            ),
            476 => 
            array (
                'id' => 4977,
                'nome' => 'Santa Rosa',
                'idEstado' => 21,
            ),
            477 => 
            array (
                'id' => 4978,
                'nome' => 'Santa Tereza',
                'idEstado' => 21,
            ),
            478 => 
            array (
                'id' => 4979,
                'nome' => 'Santa Vitória do Palmar',
                'idEstado' => 21,
            ),
            479 => 
            array (
                'id' => 4980,
                'nome' => 'Santiago',
                'idEstado' => 21,
            ),
            480 => 
            array (
                'id' => 4981,
                'nome' => 'Santo Ângelo',
                'idEstado' => 21,
            ),
            481 => 
            array (
                'id' => 4982,
                'nome' => 'Santo Antônio do Palma',
                'idEstado' => 21,
            ),
            482 => 
            array (
                'id' => 4983,
                'nome' => 'Santo Antônio da Patrulha',
                'idEstado' => 21,
            ),
            483 => 
            array (
                'id' => 4984,
                'nome' => 'Santo Antônio das Missões',
                'idEstado' => 21,
            ),
            484 => 
            array (
                'id' => 4985,
                'nome' => 'Santo Antônio do Planalto',
                'idEstado' => 21,
            ),
            485 => 
            array (
                'id' => 4986,
                'nome' => 'Santo Augusto',
                'idEstado' => 21,
            ),
            486 => 
            array (
                'id' => 4987,
                'nome' => 'Santo Cristo',
                'idEstado' => 21,
            ),
            487 => 
            array (
                'id' => 4988,
                'nome' => 'Santo Expedito do Sul',
                'idEstado' => 21,
            ),
            488 => 
            array (
                'id' => 4989,
                'nome' => 'São Borja',
                'idEstado' => 21,
            ),
            489 => 
            array (
                'id' => 4990,
                'nome' => 'São Domingos do Sul',
                'idEstado' => 21,
            ),
            490 => 
            array (
                'id' => 4991,
                'nome' => 'São Francisco de Assis',
                'idEstado' => 21,
            ),
            491 => 
            array (
                'id' => 4992,
                'nome' => 'São Francisco de Paula',
                'idEstado' => 21,
            ),
            492 => 
            array (
                'id' => 4993,
                'nome' => 'São Gabriel',
                'idEstado' => 21,
            ),
            493 => 
            array (
                'id' => 4994,
                'nome' => 'São Jerônimo',
                'idEstado' => 21,
            ),
            494 => 
            array (
                'id' => 4995,
                'nome' => 'São João da Urtiga',
                'idEstado' => 21,
            ),
            495 => 
            array (
                'id' => 4996,
                'nome' => 'São João do Polêsine',
                'idEstado' => 21,
            ),
            496 => 
            array (
                'id' => 4997,
                'nome' => 'São Jorge',
                'idEstado' => 21,
            ),
            497 => 
            array (
                'id' => 4998,
                'nome' => 'São José das Missões',
                'idEstado' => 21,
            ),
            498 => 
            array (
                'id' => 4999,
                'nome' => 'São José do Herval',
                'idEstado' => 21,
            ),
            499 => 
            array (
                'id' => 5000,
                'nome' => 'São José do Hortêncio',
                'idEstado' => 21,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 5001,
                'nome' => 'São José do Inhacorá',
                'idEstado' => 21,
            ),
            1 => 
            array (
                'id' => 5002,
                'nome' => 'São José do Norte',
                'idEstado' => 21,
            ),
            2 => 
            array (
                'id' => 5003,
                'nome' => 'São José do Ouro',
                'idEstado' => 21,
            ),
            3 => 
            array (
                'id' => 5004,
                'nome' => 'São José do Sul',
                'idEstado' => 21,
            ),
            4 => 
            array (
                'id' => 5005,
                'nome' => 'São José dos Ausentes',
                'idEstado' => 21,
            ),
            5 => 
            array (
                'id' => 5006,
                'nome' => 'São Leopoldo',
                'idEstado' => 21,
            ),
            6 => 
            array (
                'id' => 5007,
                'nome' => 'São Lourenço do Sul',
                'idEstado' => 21,
            ),
            7 => 
            array (
                'id' => 5008,
                'nome' => 'São Luiz Gonzaga',
                'idEstado' => 21,
            ),
            8 => 
            array (
                'id' => 5009,
                'nome' => 'São Marcos',
                'idEstado' => 21,
            ),
            9 => 
            array (
                'id' => 5010,
                'nome' => 'São Martinho',
                'idEstado' => 21,
            ),
            10 => 
            array (
                'id' => 5011,
                'nome' => 'São Martinho da Serra',
                'idEstado' => 21,
            ),
            11 => 
            array (
                'id' => 5012,
                'nome' => 'São Miguel das Missões',
                'idEstado' => 21,
            ),
            12 => 
            array (
                'id' => 5013,
                'nome' => 'São Nicolau',
                'idEstado' => 21,
            ),
            13 => 
            array (
                'id' => 5014,
                'nome' => 'São Paulo das Missões',
                'idEstado' => 21,
            ),
            14 => 
            array (
                'id' => 5015,
                'nome' => 'São Pedro da Serra',
                'idEstado' => 21,
            ),
            15 => 
            array (
                'id' => 5016,
                'nome' => 'São Pedro das Missões',
                'idEstado' => 21,
            ),
            16 => 
            array (
                'id' => 5017,
                'nome' => 'São Pedro do Butiá',
                'idEstado' => 21,
            ),
            17 => 
            array (
                'id' => 5018,
                'nome' => 'São Pedro do Sul',
                'idEstado' => 21,
            ),
            18 => 
            array (
                'id' => 5019,
                'nome' => 'São Sebastião do Caí',
                'idEstado' => 21,
            ),
            19 => 
            array (
                'id' => 5020,
                'nome' => 'São Sepé',
                'idEstado' => 21,
            ),
            20 => 
            array (
                'id' => 5021,
                'nome' => 'São Valentim',
                'idEstado' => 21,
            ),
            21 => 
            array (
                'id' => 5022,
                'nome' => 'São Valentim do Sul',
                'idEstado' => 21,
            ),
            22 => 
            array (
                'id' => 5023,
                'nome' => 'São Valério do Sul',
                'idEstado' => 21,
            ),
            23 => 
            array (
                'id' => 5024,
                'nome' => 'São Vendelino',
                'idEstado' => 21,
            ),
            24 => 
            array (
                'id' => 5025,
                'nome' => 'São Vicente do Sul',
                'idEstado' => 21,
            ),
            25 => 
            array (
                'id' => 5026,
                'nome' => 'Sapiranga',
                'idEstado' => 21,
            ),
            26 => 
            array (
                'id' => 5027,
                'nome' => 'Sapucaia do Sul',
                'idEstado' => 21,
            ),
            27 => 
            array (
                'id' => 5028,
                'nome' => 'Sarandi',
                'idEstado' => 21,
            ),
            28 => 
            array (
                'id' => 5029,
                'nome' => 'Seberi',
                'idEstado' => 21,
            ),
            29 => 
            array (
                'id' => 5030,
                'nome' => 'Sede Nova',
                'idEstado' => 21,
            ),
            30 => 
            array (
                'id' => 5031,
                'nome' => 'Segredo',
                'idEstado' => 21,
            ),
            31 => 
            array (
                'id' => 5032,
                'nome' => 'Selbach',
                'idEstado' => 21,
            ),
            32 => 
            array (
                'id' => 5033,
                'nome' => 'Senador Salgado Filho',
                'idEstado' => 21,
            ),
            33 => 
            array (
                'id' => 5034,
                'nome' => 'Sentinela do Sul',
                'idEstado' => 21,
            ),
            34 => 
            array (
                'id' => 5035,
                'nome' => 'Serafina Corrêa',
                'idEstado' => 21,
            ),
            35 => 
            array (
                'id' => 5036,
                'nome' => 'Sério',
                'idEstado' => 21,
            ),
            36 => 
            array (
                'id' => 5037,
                'nome' => 'Sertão',
                'idEstado' => 21,
            ),
            37 => 
            array (
                'id' => 5038,
                'nome' => 'Sertão Santana',
                'idEstado' => 21,
            ),
            38 => 
            array (
                'id' => 5039,
                'nome' => 'Sete de Setembro',
                'idEstado' => 21,
            ),
            39 => 
            array (
                'id' => 5040,
                'nome' => 'Severiano de Almeida',
                'idEstado' => 21,
            ),
            40 => 
            array (
                'id' => 5041,
                'nome' => 'Silveira Martins',
                'idEstado' => 21,
            ),
            41 => 
            array (
                'id' => 5042,
                'nome' => 'Sinimbu',
                'idEstado' => 21,
            ),
            42 => 
            array (
                'id' => 5043,
                'nome' => 'Sobradinho',
                'idEstado' => 21,
            ),
            43 => 
            array (
                'id' => 5044,
                'nome' => 'Soledade',
                'idEstado' => 21,
            ),
            44 => 
            array (
                'id' => 5045,
                'nome' => 'Tabaí',
                'idEstado' => 21,
            ),
            45 => 
            array (
                'id' => 5046,
                'nome' => 'Tapejara',
                'idEstado' => 21,
            ),
            46 => 
            array (
                'id' => 5047,
                'nome' => 'Tapera',
                'idEstado' => 21,
            ),
            47 => 
            array (
                'id' => 5048,
                'nome' => 'Tapes',
                'idEstado' => 21,
            ),
            48 => 
            array (
                'id' => 5049,
                'nome' => 'Taquara',
                'idEstado' => 21,
            ),
            49 => 
            array (
                'id' => 5050,
                'nome' => 'Taquari',
                'idEstado' => 21,
            ),
            50 => 
            array (
                'id' => 5051,
                'nome' => 'Taquaruçu do Sul',
                'idEstado' => 21,
            ),
            51 => 
            array (
                'id' => 5052,
                'nome' => 'Tavares',
                'idEstado' => 21,
            ),
            52 => 
            array (
                'id' => 5053,
                'nome' => 'Tenente Portela',
                'idEstado' => 21,
            ),
            53 => 
            array (
                'id' => 5054,
                'nome' => 'Terra de Areia',
                'idEstado' => 21,
            ),
            54 => 
            array (
                'id' => 5055,
                'nome' => 'Teutônia',
                'idEstado' => 21,
            ),
            55 => 
            array (
                'id' => 5056,
                'nome' => 'Tio Hugo',
                'idEstado' => 21,
            ),
            56 => 
            array (
                'id' => 5057,
                'nome' => 'Tiradentes do Sul',
                'idEstado' => 21,
            ),
            57 => 
            array (
                'id' => 5058,
                'nome' => 'Toropi',
                'idEstado' => 21,
            ),
            58 => 
            array (
                'id' => 5059,
                'nome' => 'Torres',
                'idEstado' => 21,
            ),
            59 => 
            array (
                'id' => 5060,
                'nome' => 'Tramandaí',
                'idEstado' => 21,
            ),
            60 => 
            array (
                'id' => 5061,
                'nome' => 'Travesseiro',
                'idEstado' => 21,
            ),
            61 => 
            array (
                'id' => 5062,
                'nome' => 'Três Arroios',
                'idEstado' => 21,
            ),
            62 => 
            array (
                'id' => 5063,
                'nome' => 'Três Cachoeiras',
                'idEstado' => 21,
            ),
            63 => 
            array (
                'id' => 5064,
                'nome' => 'Três Coroas',
                'idEstado' => 21,
            ),
            64 => 
            array (
                'id' => 5065,
                'nome' => 'Três de Maio',
                'idEstado' => 21,
            ),
            65 => 
            array (
                'id' => 5066,
                'nome' => 'Três Forquilhas',
                'idEstado' => 21,
            ),
            66 => 
            array (
                'id' => 5067,
                'nome' => 'Três Palmeiras',
                'idEstado' => 21,
            ),
            67 => 
            array (
                'id' => 5068,
                'nome' => 'Três Passos',
                'idEstado' => 21,
            ),
            68 => 
            array (
                'id' => 5069,
                'nome' => 'Trindade do Sul',
                'idEstado' => 21,
            ),
            69 => 
            array (
                'id' => 5070,
                'nome' => 'Triunfo',
                'idEstado' => 21,
            ),
            70 => 
            array (
                'id' => 5071,
                'nome' => 'Tucunduva',
                'idEstado' => 21,
            ),
            71 => 
            array (
                'id' => 5072,
                'nome' => 'Tunas',
                'idEstado' => 21,
            ),
            72 => 
            array (
                'id' => 5073,
                'nome' => 'Tupanci do Sul',
                'idEstado' => 21,
            ),
            73 => 
            array (
                'id' => 5074,
                'nome' => 'Tupanciretã',
                'idEstado' => 21,
            ),
            74 => 
            array (
                'id' => 5075,
                'nome' => 'Tupandi',
                'idEstado' => 21,
            ),
            75 => 
            array (
                'id' => 5076,
                'nome' => 'Tuparendi',
                'idEstado' => 21,
            ),
            76 => 
            array (
                'id' => 5077,
                'nome' => 'Turuçu',
                'idEstado' => 21,
            ),
            77 => 
            array (
                'id' => 5078,
                'nome' => 'Ubiretama',
                'idEstado' => 21,
            ),
            78 => 
            array (
                'id' => 5079,
                'nome' => 'União da Serra',
                'idEstado' => 21,
            ),
            79 => 
            array (
                'id' => 5080,
                'nome' => 'Unistalda',
                'idEstado' => 21,
            ),
            80 => 
            array (
                'id' => 5081,
                'nome' => 'Uruguaiana',
                'idEstado' => 21,
            ),
            81 => 
            array (
                'id' => 5082,
                'nome' => 'Vacaria',
                'idEstado' => 21,
            ),
            82 => 
            array (
                'id' => 5083,
                'nome' => 'Vale Verde',
                'idEstado' => 21,
            ),
            83 => 
            array (
                'id' => 5084,
                'nome' => 'Vale do Sol',
                'idEstado' => 21,
            ),
            84 => 
            array (
                'id' => 5085,
                'nome' => 'Vale Real',
                'idEstado' => 21,
            ),
            85 => 
            array (
                'id' => 5086,
                'nome' => 'Vanini',
                'idEstado' => 21,
            ),
            86 => 
            array (
                'id' => 5087,
                'nome' => 'Venâncio Aires',
                'idEstado' => 21,
            ),
            87 => 
            array (
                'id' => 5088,
                'nome' => 'Vera Cruz',
                'idEstado' => 21,
            ),
            88 => 
            array (
                'id' => 5089,
                'nome' => 'Veranópolis',
                'idEstado' => 21,
            ),
            89 => 
            array (
                'id' => 5090,
                'nome' => 'Vespasiano Correa',
                'idEstado' => 21,
            ),
            90 => 
            array (
                'id' => 5091,
                'nome' => 'Viadutos',
                'idEstado' => 21,
            ),
            91 => 
            array (
                'id' => 5092,
                'nome' => 'Viamão',
                'idEstado' => 21,
            ),
            92 => 
            array (
                'id' => 5093,
                'nome' => 'Vicente Dutra',
                'idEstado' => 21,
            ),
            93 => 
            array (
                'id' => 5094,
                'nome' => 'Victor Graeff',
                'idEstado' => 21,
            ),
            94 => 
            array (
                'id' => 5095,
                'nome' => 'Vila Flores',
                'idEstado' => 21,
            ),
            95 => 
            array (
                'id' => 5096,
                'nome' => 'Vila Lângaro',
                'idEstado' => 21,
            ),
            96 => 
            array (
                'id' => 5097,
                'nome' => 'Vila Maria',
                'idEstado' => 21,
            ),
            97 => 
            array (
                'id' => 5098,
                'nome' => 'Vila Nova do Sul',
                'idEstado' => 21,
            ),
            98 => 
            array (
                'id' => 5099,
                'nome' => 'Vista Alegre',
                'idEstado' => 21,
            ),
            99 => 
            array (
                'id' => 5100,
                'nome' => 'Vista Alegre do Prata',
                'idEstado' => 21,
            ),
            100 => 
            array (
                'id' => 5101,
                'nome' => 'Vista Gaúcha',
                'idEstado' => 21,
            ),
            101 => 
            array (
                'id' => 5102,
                'nome' => 'Vitória das Missões',
                'idEstado' => 21,
            ),
            102 => 
            array (
                'id' => 5103,
                'nome' => 'Westfalia',
                'idEstado' => 21,
            ),
            103 => 
            array (
                'id' => 5104,
                'nome' => 'Xangri-lá',
                'idEstado' => 21,
            ),
            104 => 
            array (
                'id' => 5105,
                'nome' => 'Água Clara',
                'idEstado' => 12,
            ),
            105 => 
            array (
                'id' => 5106,
                'nome' => 'Alcinópolis',
                'idEstado' => 12,
            ),
            106 => 
            array (
                'id' => 5107,
                'nome' => 'Amambai',
                'idEstado' => 12,
            ),
            107 => 
            array (
                'id' => 5108,
                'nome' => 'Anastácio',
                'idEstado' => 12,
            ),
            108 => 
            array (
                'id' => 5109,
                'nome' => 'Anaurilândia',
                'idEstado' => 12,
            ),
            109 => 
            array (
                'id' => 5110,
                'nome' => 'Angélica',
                'idEstado' => 12,
            ),
            110 => 
            array (
                'id' => 5111,
                'nome' => 'Antônio João',
                'idEstado' => 12,
            ),
            111 => 
            array (
                'id' => 5112,
                'nome' => 'Aparecida do Taboado',
                'idEstado' => 12,
            ),
            112 => 
            array (
                'id' => 5113,
                'nome' => 'Aquidauana',
                'idEstado' => 12,
            ),
            113 => 
            array (
                'id' => 5114,
                'nome' => 'Aral Moreira',
                'idEstado' => 12,
            ),
            114 => 
            array (
                'id' => 5115,
                'nome' => 'Bandeirantes',
                'idEstado' => 12,
            ),
            115 => 
            array (
                'id' => 5116,
                'nome' => 'Bataguassu',
                'idEstado' => 12,
            ),
            116 => 
            array (
                'id' => 5117,
                'nome' => 'Batayporã',
                'idEstado' => 12,
            ),
            117 => 
            array (
                'id' => 5118,
                'nome' => 'Bela Vista',
                'idEstado' => 12,
            ),
            118 => 
            array (
                'id' => 5119,
                'nome' => 'Bodoquena',
                'idEstado' => 12,
            ),
            119 => 
            array (
                'id' => 5120,
                'nome' => 'Bonito',
                'idEstado' => 12,
            ),
            120 => 
            array (
                'id' => 5121,
                'nome' => 'Brasilândia',
                'idEstado' => 12,
            ),
            121 => 
            array (
                'id' => 5122,
                'nome' => 'Caarapó',
                'idEstado' => 12,
            ),
            122 => 
            array (
                'id' => 5123,
                'nome' => 'Camapuã',
                'idEstado' => 12,
            ),
            123 => 
            array (
                'id' => 5124,
                'nome' => 'Campo Grande',
                'idEstado' => 12,
            ),
            124 => 
            array (
                'id' => 5125,
                'nome' => 'Caracol',
                'idEstado' => 12,
            ),
            125 => 
            array (
                'id' => 5126,
                'nome' => 'Cassilândia',
                'idEstado' => 12,
            ),
            126 => 
            array (
                'id' => 5127,
                'nome' => 'Chapadão do Sul',
                'idEstado' => 12,
            ),
            127 => 
            array (
                'id' => 5128,
                'nome' => 'Corguinho',
                'idEstado' => 12,
            ),
            128 => 
            array (
                'id' => 5129,
                'nome' => 'Coronel Sapucaia',
                'idEstado' => 12,
            ),
            129 => 
            array (
                'id' => 5130,
                'nome' => 'Corumbá',
                'idEstado' => 12,
            ),
            130 => 
            array (
                'id' => 5131,
                'nome' => 'Costa Rica',
                'idEstado' => 12,
            ),
            131 => 
            array (
                'id' => 5132,
                'nome' => 'Coxim',
                'idEstado' => 12,
            ),
            132 => 
            array (
                'id' => 5133,
                'nome' => 'Deodápolis',
                'idEstado' => 12,
            ),
            133 => 
            array (
                'id' => 5134,
                'nome' => 'Dois Irmãos do Buriti',
                'idEstado' => 12,
            ),
            134 => 
            array (
                'id' => 5135,
                'nome' => 'Douradina',
                'idEstado' => 12,
            ),
            135 => 
            array (
                'id' => 5136,
                'nome' => 'Dourados',
                'idEstado' => 12,
            ),
            136 => 
            array (
                'id' => 5137,
                'nome' => 'Eldorado',
                'idEstado' => 12,
            ),
            137 => 
            array (
                'id' => 5138,
                'nome' => 'Fátima do Sul',
                'idEstado' => 12,
            ),
            138 => 
            array (
                'id' => 5139,
                'nome' => 'Figueirão',
                'idEstado' => 12,
            ),
            139 => 
            array (
                'id' => 5140,
                'nome' => 'Glória de Dourados',
                'idEstado' => 12,
            ),
            140 => 
            array (
                'id' => 5141,
                'nome' => 'Guia Lopes da Laguna',
                'idEstado' => 12,
            ),
            141 => 
            array (
                'id' => 5142,
                'nome' => 'Iguatemi',
                'idEstado' => 12,
            ),
            142 => 
            array (
                'id' => 5143,
                'nome' => 'Inocência',
                'idEstado' => 12,
            ),
            143 => 
            array (
                'id' => 5144,
                'nome' => 'Itaporã',
                'idEstado' => 12,
            ),
            144 => 
            array (
                'id' => 5145,
                'nome' => 'Itaquiraí',
                'idEstado' => 12,
            ),
            145 => 
            array (
                'id' => 5146,
                'nome' => 'Ivinhema',
                'idEstado' => 12,
            ),
            146 => 
            array (
                'id' => 5147,
                'nome' => 'Japorã',
                'idEstado' => 12,
            ),
            147 => 
            array (
                'id' => 5148,
                'nome' => 'Jaraguari',
                'idEstado' => 12,
            ),
            148 => 
            array (
                'id' => 5149,
                'nome' => 'Jardim',
                'idEstado' => 12,
            ),
            149 => 
            array (
                'id' => 5150,
                'nome' => 'Jateí',
                'idEstado' => 12,
            ),
            150 => 
            array (
                'id' => 5151,
                'nome' => 'Juti',
                'idEstado' => 12,
            ),
            151 => 
            array (
                'id' => 5152,
                'nome' => 'Ladário',
                'idEstado' => 12,
            ),
            152 => 
            array (
                'id' => 5153,
                'nome' => 'Laguna Carapã',
                'idEstado' => 12,
            ),
            153 => 
            array (
                'id' => 5154,
                'nome' => 'Maracaju',
                'idEstado' => 12,
            ),
            154 => 
            array (
                'id' => 5155,
                'nome' => 'Miranda',
                'idEstado' => 12,
            ),
            155 => 
            array (
                'id' => 5156,
                'nome' => 'Mundo Novo',
                'idEstado' => 12,
            ),
            156 => 
            array (
                'id' => 5157,
                'nome' => 'Naviraí',
                'idEstado' => 12,
            ),
            157 => 
            array (
                'id' => 5158,
                'nome' => 'Nioaque',
                'idEstado' => 12,
            ),
            158 => 
            array (
                'id' => 5159,
                'nome' => 'Nova Alvorada do Sul',
                'idEstado' => 12,
            ),
            159 => 
            array (
                'id' => 5160,
                'nome' => 'Nova Andradina',
                'idEstado' => 12,
            ),
            160 => 
            array (
                'id' => 5161,
                'nome' => 'Novo Horizonte do Sul',
                'idEstado' => 12,
            ),
            161 => 
            array (
                'id' => 5162,
                'nome' => 'Paraíso das Águas',
                'idEstado' => 12,
            ),
            162 => 
            array (
                'id' => 5163,
                'nome' => 'Paranaíba',
                'idEstado' => 12,
            ),
            163 => 
            array (
                'id' => 5164,
                'nome' => 'Paranhos',
                'idEstado' => 12,
            ),
            164 => 
            array (
                'id' => 5165,
                'nome' => 'Pedro Gomes',
                'idEstado' => 12,
            ),
            165 => 
            array (
                'id' => 5166,
                'nome' => 'Ponta Porã',
                'idEstado' => 12,
            ),
            166 => 
            array (
                'id' => 5167,
                'nome' => 'Porto Murtinho',
                'idEstado' => 12,
            ),
            167 => 
            array (
                'id' => 5168,
                'nome' => 'Ribas do Rio Pardo',
                'idEstado' => 12,
            ),
            168 => 
            array (
                'id' => 5169,
                'nome' => 'Rio Brilhante',
                'idEstado' => 12,
            ),
            169 => 
            array (
                'id' => 5170,
                'nome' => 'Rio Negro',
                'idEstado' => 12,
            ),
            170 => 
            array (
                'id' => 5171,
                'nome' => 'Rio Verde de Mato Grosso',
                'idEstado' => 12,
            ),
            171 => 
            array (
                'id' => 5172,
                'nome' => 'Rochedo',
                'idEstado' => 12,
            ),
            172 => 
            array (
                'id' => 5173,
                'nome' => 'Santa Rita do Pardo',
                'idEstado' => 12,
            ),
            173 => 
            array (
                'id' => 5174,
                'nome' => 'São Gabriel do Oeste',
                'idEstado' => 12,
            ),
            174 => 
            array (
                'id' => 5175,
                'nome' => 'Sete Quedas',
                'idEstado' => 12,
            ),
            175 => 
            array (
                'id' => 5176,
                'nome' => 'Selvíria',
                'idEstado' => 12,
            ),
            176 => 
            array (
                'id' => 5177,
                'nome' => 'Sidrolândia',
                'idEstado' => 12,
            ),
            177 => 
            array (
                'id' => 5178,
                'nome' => 'Sonora',
                'idEstado' => 12,
            ),
            178 => 
            array (
                'id' => 5179,
                'nome' => 'Tacuru',
                'idEstado' => 12,
            ),
            179 => 
            array (
                'id' => 5180,
                'nome' => 'Taquarussu',
                'idEstado' => 12,
            ),
            180 => 
            array (
                'id' => 5181,
                'nome' => 'Terenos',
                'idEstado' => 12,
            ),
            181 => 
            array (
                'id' => 5182,
                'nome' => 'Três Lagoas',
                'idEstado' => 12,
            ),
            182 => 
            array (
                'id' => 5183,
                'nome' => 'Vicentina',
                'idEstado' => 12,
            ),
            183 => 
            array (
                'id' => 5184,
                'nome' => 'Acorizal',
                'idEstado' => 11,
            ),
            184 => 
            array (
                'id' => 5185,
                'nome' => 'Água Boa',
                'idEstado' => 11,
            ),
            185 => 
            array (
                'id' => 5186,
                'nome' => 'Alta Floresta',
                'idEstado' => 11,
            ),
            186 => 
            array (
                'id' => 5187,
                'nome' => 'Alto Araguaia',
                'idEstado' => 11,
            ),
            187 => 
            array (
                'id' => 5188,
                'nome' => 'Alto Boa Vista',
                'idEstado' => 11,
            ),
            188 => 
            array (
                'id' => 5189,
                'nome' => 'Alto Garças',
                'idEstado' => 11,
            ),
            189 => 
            array (
                'id' => 5190,
                'nome' => 'Alto Paraguai',
                'idEstado' => 11,
            ),
            190 => 
            array (
                'id' => 5191,
                'nome' => 'Alto Taquari',
                'idEstado' => 11,
            ),
            191 => 
            array (
                'id' => 5192,
                'nome' => 'Apiacás',
                'idEstado' => 11,
            ),
            192 => 
            array (
                'id' => 5193,
                'nome' => 'Araguaiana',
                'idEstado' => 11,
            ),
            193 => 
            array (
                'id' => 5194,
                'nome' => 'Araguainha',
                'idEstado' => 11,
            ),
            194 => 
            array (
                'id' => 5195,
                'nome' => 'Araputanga',
                'idEstado' => 11,
            ),
            195 => 
            array (
                'id' => 5196,
                'nome' => 'Arenápolis',
                'idEstado' => 11,
            ),
            196 => 
            array (
                'id' => 5197,
                'nome' => 'Aripuanã',
                'idEstado' => 11,
            ),
            197 => 
            array (
                'id' => 5198,
                'nome' => 'Barão de Melgaço',
                'idEstado' => 11,
            ),
            198 => 
            array (
                'id' => 5199,
                'nome' => 'Barra do Bugres',
                'idEstado' => 11,
            ),
            199 => 
            array (
                'id' => 5200,
                'nome' => 'Barra do Garças',
                'idEstado' => 11,
            ),
            200 => 
            array (
                'id' => 5201,
                'nome' => 'Bom Jesus do Araguaia',
                'idEstado' => 11,
            ),
            201 => 
            array (
                'id' => 5202,
                'nome' => 'Brasnorte',
                'idEstado' => 11,
            ),
            202 => 
            array (
                'id' => 5203,
                'nome' => 'Cáceres',
                'idEstado' => 11,
            ),
            203 => 
            array (
                'id' => 5204,
                'nome' => 'Campinápolis',
                'idEstado' => 11,
            ),
            204 => 
            array (
                'id' => 5205,
                'nome' => 'Campo Novo do Parecis',
                'idEstado' => 11,
            ),
            205 => 
            array (
                'id' => 5206,
                'nome' => 'Campo Verde',
                'idEstado' => 11,
            ),
            206 => 
            array (
                'id' => 5207,
                'nome' => 'Campos de Júlio',
                'idEstado' => 11,
            ),
            207 => 
            array (
                'id' => 5208,
                'nome' => 'Canabrava do Norte',
                'idEstado' => 11,
            ),
            208 => 
            array (
                'id' => 5209,
                'nome' => 'Canarana',
                'idEstado' => 11,
            ),
            209 => 
            array (
                'id' => 5210,
                'nome' => 'Carlinda',
                'idEstado' => 11,
            ),
            210 => 
            array (
                'id' => 5211,
                'nome' => 'Castanheira',
                'idEstado' => 11,
            ),
            211 => 
            array (
                'id' => 5212,
                'nome' => 'Chapada dos Guimarães',
                'idEstado' => 11,
            ),
            212 => 
            array (
                'id' => 5213,
                'nome' => 'Cláudia',
                'idEstado' => 11,
            ),
            213 => 
            array (
                'id' => 5214,
                'nome' => 'Cocalinho',
                'idEstado' => 11,
            ),
            214 => 
            array (
                'id' => 5215,
                'nome' => 'Colíder',
                'idEstado' => 11,
            ),
            215 => 
            array (
                'id' => 5216,
                'nome' => 'Colniza',
                'idEstado' => 11,
            ),
            216 => 
            array (
                'id' => 5217,
                'nome' => 'Comodoro',
                'idEstado' => 11,
            ),
            217 => 
            array (
                'id' => 5218,
                'nome' => 'Confresa',
                'idEstado' => 11,
            ),
            218 => 
            array (
                'id' => 5219,
                'nome' => 'Conquista D\'Oeste',
                'idEstado' => 11,
            ),
            219 => 
            array (
                'id' => 5220,
                'nome' => 'Cotriguaçu',
                'idEstado' => 11,
            ),
            220 => 
            array (
                'id' => 5221,
                'nome' => 'Cuiabá',
                'idEstado' => 11,
            ),
            221 => 
            array (
                'id' => 5222,
                'nome' => 'Curvelândia',
                'idEstado' => 11,
            ),
            222 => 
            array (
                'id' => 5223,
                'nome' => 'Denise',
                'idEstado' => 11,
            ),
            223 => 
            array (
                'id' => 5224,
                'nome' => 'Diamantino',
                'idEstado' => 11,
            ),
            224 => 
            array (
                'id' => 5225,
                'nome' => 'Dom Aquino',
                'idEstado' => 11,
            ),
            225 => 
            array (
                'id' => 5226,
                'nome' => 'Feliz Natal',
                'idEstado' => 11,
            ),
            226 => 
            array (
                'id' => 5227,
                'nome' => 'Figueirópolis D\'Oeste',
                'idEstado' => 11,
            ),
            227 => 
            array (
                'id' => 5228,
                'nome' => 'Gaúcha do Norte',
                'idEstado' => 11,
            ),
            228 => 
            array (
                'id' => 5229,
                'nome' => 'General Carneiro',
                'idEstado' => 11,
            ),
            229 => 
            array (
                'id' => 5230,
                'nome' => 'Glória D\'Oeste',
                'idEstado' => 11,
            ),
            230 => 
            array (
                'id' => 5231,
                'nome' => 'Guarantã do Norte',
                'idEstado' => 11,
            ),
            231 => 
            array (
                'id' => 5232,
                'nome' => 'Guiratinga',
                'idEstado' => 11,
            ),
            232 => 
            array (
                'id' => 5233,
                'nome' => 'Indiavaí',
                'idEstado' => 11,
            ),
            233 => 
            array (
                'id' => 5234,
                'nome' => 'Ipiranga do Norte',
                'idEstado' => 11,
            ),
            234 => 
            array (
                'id' => 5235,
                'nome' => 'Itanhangá',
                'idEstado' => 11,
            ),
            235 => 
            array (
                'id' => 5236,
                'nome' => 'Itaúba',
                'idEstado' => 11,
            ),
            236 => 
            array (
                'id' => 5237,
                'nome' => 'Itiquira',
                'idEstado' => 11,
            ),
            237 => 
            array (
                'id' => 5238,
                'nome' => 'Jaciara',
                'idEstado' => 11,
            ),
            238 => 
            array (
                'id' => 5239,
                'nome' => 'Jangada',
                'idEstado' => 11,
            ),
            239 => 
            array (
                'id' => 5240,
                'nome' => 'Jauru',
                'idEstado' => 11,
            ),
            240 => 
            array (
                'id' => 5241,
                'nome' => 'Juara',
                'idEstado' => 11,
            ),
            241 => 
            array (
                'id' => 5242,
                'nome' => 'Juína',
                'idEstado' => 11,
            ),
            242 => 
            array (
                'id' => 5243,
                'nome' => 'Juruena',
                'idEstado' => 11,
            ),
            243 => 
            array (
                'id' => 5244,
                'nome' => 'Juscimeira',
                'idEstado' => 11,
            ),
            244 => 
            array (
                'id' => 5245,
                'nome' => 'Lambari D\'Oeste',
                'idEstado' => 11,
            ),
            245 => 
            array (
                'id' => 5246,
                'nome' => 'Lucas do Rio Verde',
                'idEstado' => 11,
            ),
            246 => 
            array (
                'id' => 5247,
                'nome' => 'Luciara',
                'idEstado' => 11,
            ),
            247 => 
            array (
                'id' => 5248,
                'nome' => 'Vila Bela da Santíssima Trindade',
                'idEstado' => 11,
            ),
            248 => 
            array (
                'id' => 5249,
                'nome' => 'Marcelândia',
                'idEstado' => 11,
            ),
            249 => 
            array (
                'id' => 5250,
                'nome' => 'Matupá',
                'idEstado' => 11,
            ),
            250 => 
            array (
                'id' => 5251,
                'nome' => 'Mirassol D\'Oeste',
                'idEstado' => 11,
            ),
            251 => 
            array (
                'id' => 5252,
                'nome' => 'Nobres',
                'idEstado' => 11,
            ),
            252 => 
            array (
                'id' => 5253,
                'nome' => 'Nortelândia',
                'idEstado' => 11,
            ),
            253 => 
            array (
                'id' => 5254,
                'nome' => 'Nossa Senhora do Livramento',
                'idEstado' => 11,
            ),
            254 => 
            array (
                'id' => 5255,
                'nome' => 'Nova Bandeirantes',
                'idEstado' => 11,
            ),
            255 => 
            array (
                'id' => 5256,
                'nome' => 'Nova Nazaré',
                'idEstado' => 11,
            ),
            256 => 
            array (
                'id' => 5257,
                'nome' => 'Nova Lacerda',
                'idEstado' => 11,
            ),
            257 => 
            array (
                'id' => 5258,
                'nome' => 'Nova Santa Helena',
                'idEstado' => 11,
            ),
            258 => 
            array (
                'id' => 5259,
                'nome' => 'Nova Brasilândia',
                'idEstado' => 11,
            ),
            259 => 
            array (
                'id' => 5260,
                'nome' => 'Nova Canaã do Norte',
                'idEstado' => 11,
            ),
            260 => 
            array (
                'id' => 5261,
                'nome' => 'Nova Mutum',
                'idEstado' => 11,
            ),
            261 => 
            array (
                'id' => 5262,
                'nome' => 'Nova Olímpia',
                'idEstado' => 11,
            ),
            262 => 
            array (
                'id' => 5263,
                'nome' => 'Nova Ubiratã',
                'idEstado' => 11,
            ),
            263 => 
            array (
                'id' => 5264,
                'nome' => 'Nova Xavantina',
                'idEstado' => 11,
            ),
            264 => 
            array (
                'id' => 5265,
                'nome' => 'Novo Mundo',
                'idEstado' => 11,
            ),
            265 => 
            array (
                'id' => 5266,
                'nome' => 'Novo Horizonte do Norte',
                'idEstado' => 11,
            ),
            266 => 
            array (
                'id' => 5267,
                'nome' => 'Novo São Joaquim',
                'idEstado' => 11,
            ),
            267 => 
            array (
                'id' => 5268,
                'nome' => 'Paranaíta',
                'idEstado' => 11,
            ),
            268 => 
            array (
                'id' => 5269,
                'nome' => 'Paranatinga',
                'idEstado' => 11,
            ),
            269 => 
            array (
                'id' => 5270,
                'nome' => 'Novo Santo Antônio',
                'idEstado' => 11,
            ),
            270 => 
            array (
                'id' => 5271,
                'nome' => 'Pedra Preta',
                'idEstado' => 11,
            ),
            271 => 
            array (
                'id' => 5272,
                'nome' => 'Peixoto de Azevedo',
                'idEstado' => 11,
            ),
            272 => 
            array (
                'id' => 5273,
                'nome' => 'Planalto da Serra',
                'idEstado' => 11,
            ),
            273 => 
            array (
                'id' => 5274,
                'nome' => 'Poconé',
                'idEstado' => 11,
            ),
            274 => 
            array (
                'id' => 5275,
                'nome' => 'Pontal do Araguaia',
                'idEstado' => 11,
            ),
            275 => 
            array (
                'id' => 5276,
                'nome' => 'Ponte Branca',
                'idEstado' => 11,
            ),
            276 => 
            array (
                'id' => 5277,
                'nome' => 'Pontes e Lacerda',
                'idEstado' => 11,
            ),
            277 => 
            array (
                'id' => 5278,
                'nome' => 'Porto Alegre do Norte',
                'idEstado' => 11,
            ),
            278 => 
            array (
                'id' => 5279,
                'nome' => 'Porto dos Gaúchos',
                'idEstado' => 11,
            ),
            279 => 
            array (
                'id' => 5280,
                'nome' => 'Porto Esperidião',
                'idEstado' => 11,
            ),
            280 => 
            array (
                'id' => 5281,
                'nome' => 'Porto Estrela',
                'idEstado' => 11,
            ),
            281 => 
            array (
                'id' => 5282,
                'nome' => 'Poxoréo',
                'idEstado' => 11,
            ),
            282 => 
            array (
                'id' => 5283,
                'nome' => 'Primavera do Leste',
                'idEstado' => 11,
            ),
            283 => 
            array (
                'id' => 5284,
                'nome' => 'Querência',
                'idEstado' => 11,
            ),
            284 => 
            array (
                'id' => 5285,
                'nome' => 'São José dos Quatro Marcos',
                'idEstado' => 11,
            ),
            285 => 
            array (
                'id' => 5286,
                'nome' => 'Reserva do Cabaçal',
                'idEstado' => 11,
            ),
            286 => 
            array (
                'id' => 5287,
                'nome' => 'Ribeirão Cascalheira',
                'idEstado' => 11,
            ),
            287 => 
            array (
                'id' => 5288,
                'nome' => 'Ribeirãozinho',
                'idEstado' => 11,
            ),
            288 => 
            array (
                'id' => 5289,
                'nome' => 'Rio Branco',
                'idEstado' => 11,
            ),
            289 => 
            array (
                'id' => 5290,
                'nome' => 'Santa Carmem',
                'idEstado' => 11,
            ),
            290 => 
            array (
                'id' => 5291,
                'nome' => 'Santo Afonso',
                'idEstado' => 11,
            ),
            291 => 
            array (
                'id' => 5292,
                'nome' => 'São José do Povo',
                'idEstado' => 11,
            ),
            292 => 
            array (
                'id' => 5293,
                'nome' => 'São José do Rio Claro',
                'idEstado' => 11,
            ),
            293 => 
            array (
                'id' => 5294,
                'nome' => 'São José do Xingu',
                'idEstado' => 11,
            ),
            294 => 
            array (
                'id' => 5295,
                'nome' => 'São Pedro da Cipa',
                'idEstado' => 11,
            ),
            295 => 
            array (
                'id' => 5296,
                'nome' => 'Rondolândia',
                'idEstado' => 11,
            ),
            296 => 
            array (
                'id' => 5297,
                'nome' => 'Rondonópolis',
                'idEstado' => 11,
            ),
            297 => 
            array (
                'id' => 5298,
                'nome' => 'Rosário Oeste',
                'idEstado' => 11,
            ),
            298 => 
            array (
                'id' => 5299,
                'nome' => 'Santa Cruz do Xingu',
                'idEstado' => 11,
            ),
            299 => 
            array (
                'id' => 5300,
                'nome' => 'Salto do Céu',
                'idEstado' => 11,
            ),
            300 => 
            array (
                'id' => 5301,
                'nome' => 'Santa Rita do Trivelato',
                'idEstado' => 11,
            ),
            301 => 
            array (
                'id' => 5302,
                'nome' => 'Santa Terezinha',
                'idEstado' => 11,
            ),
            302 => 
            array (
                'id' => 5303,
                'nome' => 'Santo Antônio do Leste',
                'idEstado' => 11,
            ),
            303 => 
            array (
                'id' => 5304,
                'nome' => 'Santo Antônio do Leverger',
                'idEstado' => 11,
            ),
            304 => 
            array (
                'id' => 5305,
                'nome' => 'São Félix do Araguaia',
                'idEstado' => 11,
            ),
            305 => 
            array (
                'id' => 5306,
                'nome' => 'Sapezal',
                'idEstado' => 11,
            ),
            306 => 
            array (
                'id' => 5307,
                'nome' => 'Serra Nova Dourada',
                'idEstado' => 11,
            ),
            307 => 
            array (
                'id' => 5308,
                'nome' => 'Sinop',
                'idEstado' => 11,
            ),
            308 => 
            array (
                'id' => 5309,
                'nome' => 'Sorriso',
                'idEstado' => 11,
            ),
            309 => 
            array (
                'id' => 5310,
                'nome' => 'Tabaporã',
                'idEstado' => 11,
            ),
            310 => 
            array (
                'id' => 5311,
                'nome' => 'Tangará da Serra',
                'idEstado' => 11,
            ),
            311 => 
            array (
                'id' => 5312,
                'nome' => 'Tapurah',
                'idEstado' => 11,
            ),
            312 => 
            array (
                'id' => 5313,
                'nome' => 'Terra Nova do Norte',
                'idEstado' => 11,
            ),
            313 => 
            array (
                'id' => 5314,
                'nome' => 'Tesouro',
                'idEstado' => 11,
            ),
            314 => 
            array (
                'id' => 5315,
                'nome' => 'Torixoréu',
                'idEstado' => 11,
            ),
            315 => 
            array (
                'id' => 5316,
                'nome' => 'União do Sul',
                'idEstado' => 11,
            ),
            316 => 
            array (
                'id' => 5317,
                'nome' => 'Vale de São Domingos',
                'idEstado' => 11,
            ),
            317 => 
            array (
                'id' => 5318,
                'nome' => 'Várzea Grande',
                'idEstado' => 11,
            ),
            318 => 
            array (
                'id' => 5319,
                'nome' => 'Vera',
                'idEstado' => 11,
            ),
            319 => 
            array (
                'id' => 5320,
                'nome' => 'Vila Rica',
                'idEstado' => 11,
            ),
            320 => 
            array (
                'id' => 5321,
                'nome' => 'Nova Guarita',
                'idEstado' => 11,
            ),
            321 => 
            array (
                'id' => 5322,
                'nome' => 'Nova Marilândia',
                'idEstado' => 11,
            ),
            322 => 
            array (
                'id' => 5323,
                'nome' => 'Nova Maringá',
                'idEstado' => 11,
            ),
            323 => 
            array (
                'id' => 5324,
                'nome' => 'Nova Monte Verde',
                'idEstado' => 11,
            ),
            324 => 
            array (
                'id' => 5325,
                'nome' => 'Abadia de Goiás',
                'idEstado' => 9,
            ),
            325 => 
            array (
                'id' => 5326,
                'nome' => 'Abadiânia',
                'idEstado' => 9,
            ),
            326 => 
            array (
                'id' => 5327,
                'nome' => 'Acreúna',
                'idEstado' => 9,
            ),
            327 => 
            array (
                'id' => 5328,
                'nome' => 'Adelândia',
                'idEstado' => 9,
            ),
            328 => 
            array (
                'id' => 5329,
                'nome' => 'Água Fria de Goiás',
                'idEstado' => 9,
            ),
            329 => 
            array (
                'id' => 5330,
                'nome' => 'Água Limpa',
                'idEstado' => 9,
            ),
            330 => 
            array (
                'id' => 5331,
                'nome' => 'Águas Lindas de Goiás',
                'idEstado' => 9,
            ),
            331 => 
            array (
                'id' => 5332,
                'nome' => 'Alexânia',
                'idEstado' => 9,
            ),
            332 => 
            array (
                'id' => 5333,
                'nome' => 'Aloândia',
                'idEstado' => 9,
            ),
            333 => 
            array (
                'id' => 5334,
                'nome' => 'Alto Horizonte',
                'idEstado' => 9,
            ),
            334 => 
            array (
                'id' => 5335,
                'nome' => 'Alto Paraíso de Goiás',
                'idEstado' => 9,
            ),
            335 => 
            array (
                'id' => 5336,
                'nome' => 'Alvorada do Norte',
                'idEstado' => 9,
            ),
            336 => 
            array (
                'id' => 5337,
                'nome' => 'Amaralina',
                'idEstado' => 9,
            ),
            337 => 
            array (
                'id' => 5338,
                'nome' => 'Americano do Brasil',
                'idEstado' => 9,
            ),
            338 => 
            array (
                'id' => 5339,
                'nome' => 'Amorinópolis',
                'idEstado' => 9,
            ),
            339 => 
            array (
                'id' => 5340,
                'nome' => 'Anápolis',
                'idEstado' => 9,
            ),
            340 => 
            array (
                'id' => 5341,
                'nome' => 'Anhanguera',
                'idEstado' => 9,
            ),
            341 => 
            array (
                'id' => 5342,
                'nome' => 'Anicuns',
                'idEstado' => 9,
            ),
            342 => 
            array (
                'id' => 5343,
                'nome' => 'Aparecida de Goiânia',
                'idEstado' => 9,
            ),
            343 => 
            array (
                'id' => 5344,
                'nome' => 'Aparecida do Rio Doce',
                'idEstado' => 9,
            ),
            344 => 
            array (
                'id' => 5345,
                'nome' => 'Aporé',
                'idEstado' => 9,
            ),
            345 => 
            array (
                'id' => 5346,
                'nome' => 'Araçu',
                'idEstado' => 9,
            ),
            346 => 
            array (
                'id' => 5347,
                'nome' => 'Aragarças',
                'idEstado' => 9,
            ),
            347 => 
            array (
                'id' => 5348,
                'nome' => 'Aragoiânia',
                'idEstado' => 9,
            ),
            348 => 
            array (
                'id' => 5349,
                'nome' => 'Araguapaz',
                'idEstado' => 9,
            ),
            349 => 
            array (
                'id' => 5350,
                'nome' => 'Arenópolis',
                'idEstado' => 9,
            ),
            350 => 
            array (
                'id' => 5351,
                'nome' => 'Aruanã',
                'idEstado' => 9,
            ),
            351 => 
            array (
                'id' => 5352,
                'nome' => 'Aurilândia',
                'idEstado' => 9,
            ),
            352 => 
            array (
                'id' => 5353,
                'nome' => 'Avelinópolis',
                'idEstado' => 9,
            ),
            353 => 
            array (
                'id' => 5354,
                'nome' => 'Baliza',
                'idEstado' => 9,
            ),
            354 => 
            array (
                'id' => 5355,
                'nome' => 'Barro Alto',
                'idEstado' => 9,
            ),
            355 => 
            array (
                'id' => 5356,
                'nome' => 'Bela Vista de Goiás',
                'idEstado' => 9,
            ),
            356 => 
            array (
                'id' => 5357,
                'nome' => 'Bom Jardim de Goiás',
                'idEstado' => 9,
            ),
            357 => 
            array (
                'id' => 5358,
                'nome' => 'Bom Jesus de Goiás',
                'idEstado' => 9,
            ),
            358 => 
            array (
                'id' => 5359,
                'nome' => 'Bonfinópolis',
                'idEstado' => 9,
            ),
            359 => 
            array (
                'id' => 5360,
                'nome' => 'Bonópolis',
                'idEstado' => 9,
            ),
            360 => 
            array (
                'id' => 5361,
                'nome' => 'Brazabrantes',
                'idEstado' => 9,
            ),
            361 => 
            array (
                'id' => 5362,
                'nome' => 'Britânia',
                'idEstado' => 9,
            ),
            362 => 
            array (
                'id' => 5363,
                'nome' => 'Buriti Alegre',
                'idEstado' => 9,
            ),
            363 => 
            array (
                'id' => 5364,
                'nome' => 'Buriti de Goiás',
                'idEstado' => 9,
            ),
            364 => 
            array (
                'id' => 5365,
                'nome' => 'Buritinópolis',
                'idEstado' => 9,
            ),
            365 => 
            array (
                'id' => 5366,
                'nome' => 'Cabeceiras',
                'idEstado' => 9,
            ),
            366 => 
            array (
                'id' => 5367,
                'nome' => 'Cachoeira Alta',
                'idEstado' => 9,
            ),
            367 => 
            array (
                'id' => 5368,
                'nome' => 'Cachoeira de Goiás',
                'idEstado' => 9,
            ),
            368 => 
            array (
                'id' => 5369,
                'nome' => 'Cachoeira Dourada',
                'idEstado' => 9,
            ),
            369 => 
            array (
                'id' => 5370,
                'nome' => 'Caçu',
                'idEstado' => 9,
            ),
            370 => 
            array (
                'id' => 5371,
                'nome' => 'Caiapônia',
                'idEstado' => 9,
            ),
            371 => 
            array (
                'id' => 5372,
                'nome' => 'Caldas Novas',
                'idEstado' => 9,
            ),
            372 => 
            array (
                'id' => 5373,
                'nome' => 'Caldazinha',
                'idEstado' => 9,
            ),
            373 => 
            array (
                'id' => 5374,
                'nome' => 'Campestre de Goiás',
                'idEstado' => 9,
            ),
            374 => 
            array (
                'id' => 5375,
                'nome' => 'Campinaçu',
                'idEstado' => 9,
            ),
            375 => 
            array (
                'id' => 5376,
                'nome' => 'Campinorte',
                'idEstado' => 9,
            ),
            376 => 
            array (
                'id' => 5377,
                'nome' => 'Campo Alegre de Goiás',
                'idEstado' => 9,
            ),
            377 => 
            array (
                'id' => 5378,
                'nome' => 'Campo Limpo de Goiás',
                'idEstado' => 9,
            ),
            378 => 
            array (
                'id' => 5379,
                'nome' => 'Campos Belos',
                'idEstado' => 9,
            ),
            379 => 
            array (
                'id' => 5380,
                'nome' => 'Campos Verdes',
                'idEstado' => 9,
            ),
            380 => 
            array (
                'id' => 5381,
                'nome' => 'Carmo do Rio Verde',
                'idEstado' => 9,
            ),
            381 => 
            array (
                'id' => 5382,
                'nome' => 'Castelândia',
                'idEstado' => 9,
            ),
            382 => 
            array (
                'id' => 5383,
                'nome' => 'Catalão',
                'idEstado' => 9,
            ),
            383 => 
            array (
                'id' => 5384,
                'nome' => 'Caturaí',
                'idEstado' => 9,
            ),
            384 => 
            array (
                'id' => 5385,
                'nome' => 'Cavalcante',
                'idEstado' => 9,
            ),
            385 => 
            array (
                'id' => 5386,
                'nome' => 'Ceres',
                'idEstado' => 9,
            ),
            386 => 
            array (
                'id' => 5387,
                'nome' => 'Cezarina',
                'idEstado' => 9,
            ),
            387 => 
            array (
                'id' => 5388,
                'nome' => 'Chapadão do Céu',
                'idEstado' => 9,
            ),
            388 => 
            array (
                'id' => 5389,
                'nome' => 'Cidade Ocidental',
                'idEstado' => 9,
            ),
            389 => 
            array (
                'id' => 5390,
                'nome' => 'Cocalzinho de Goiás',
                'idEstado' => 9,
            ),
            390 => 
            array (
                'id' => 5391,
                'nome' => 'Colinas do Sul',
                'idEstado' => 9,
            ),
            391 => 
            array (
                'id' => 5392,
                'nome' => 'Córrego do Ouro',
                'idEstado' => 9,
            ),
            392 => 
            array (
                'id' => 5393,
                'nome' => 'Corumbá de Goiás',
                'idEstado' => 9,
            ),
            393 => 
            array (
                'id' => 5394,
                'nome' => 'Corumbaíba',
                'idEstado' => 9,
            ),
            394 => 
            array (
                'id' => 5395,
                'nome' => 'Cristalina',
                'idEstado' => 9,
            ),
            395 => 
            array (
                'id' => 5396,
                'nome' => 'Cristianópolis',
                'idEstado' => 9,
            ),
            396 => 
            array (
                'id' => 5397,
                'nome' => 'Crixás',
                'idEstado' => 9,
            ),
            397 => 
            array (
                'id' => 5398,
                'nome' => 'Cromínia',
                'idEstado' => 9,
            ),
            398 => 
            array (
                'id' => 5399,
                'nome' => 'Cumari',
                'idEstado' => 9,
            ),
            399 => 
            array (
                'id' => 5400,
                'nome' => 'Damianópolis',
                'idEstado' => 9,
            ),
            400 => 
            array (
                'id' => 5401,
                'nome' => 'Damolândia',
                'idEstado' => 9,
            ),
            401 => 
            array (
                'id' => 5402,
                'nome' => 'Davinópolis',
                'idEstado' => 9,
            ),
            402 => 
            array (
                'id' => 5403,
                'nome' => 'Diorama',
                'idEstado' => 9,
            ),
            403 => 
            array (
                'id' => 5404,
                'nome' => 'Doverlândia',
                'idEstado' => 9,
            ),
            404 => 
            array (
                'id' => 5405,
                'nome' => 'Edealina',
                'idEstado' => 9,
            ),
            405 => 
            array (
                'id' => 5406,
                'nome' => 'Edéia',
                'idEstado' => 9,
            ),
            406 => 
            array (
                'id' => 5407,
                'nome' => 'Estrela do Norte',
                'idEstado' => 9,
            ),
            407 => 
            array (
                'id' => 5408,
                'nome' => 'Faina',
                'idEstado' => 9,
            ),
            408 => 
            array (
                'id' => 5409,
                'nome' => 'Fazenda Nova',
                'idEstado' => 9,
            ),
            409 => 
            array (
                'id' => 5410,
                'nome' => 'Firminópolis',
                'idEstado' => 9,
            ),
            410 => 
            array (
                'id' => 5411,
                'nome' => 'Flores de Goiás',
                'idEstado' => 9,
            ),
            411 => 
            array (
                'id' => 5412,
                'nome' => 'Formosa',
                'idEstado' => 9,
            ),
            412 => 
            array (
                'id' => 5413,
                'nome' => 'Formoso',
                'idEstado' => 9,
            ),
            413 => 
            array (
                'id' => 5414,
                'nome' => 'Gameleira de Goiás',
                'idEstado' => 9,
            ),
            414 => 
            array (
                'id' => 5415,
                'nome' => 'Divinópolis de Goiás',
                'idEstado' => 9,
            ),
            415 => 
            array (
                'id' => 5416,
                'nome' => 'Goianápolis',
                'idEstado' => 9,
            ),
            416 => 
            array (
                'id' => 5417,
                'nome' => 'Goiandira',
                'idEstado' => 9,
            ),
            417 => 
            array (
                'id' => 5418,
                'nome' => 'Goianésia',
                'idEstado' => 9,
            ),
            418 => 
            array (
                'id' => 5419,
                'nome' => 'Goiânia',
                'idEstado' => 9,
            ),
            419 => 
            array (
                'id' => 5420,
                'nome' => 'Goianira',
                'idEstado' => 9,
            ),
            420 => 
            array (
                'id' => 5421,
                'nome' => 'Goiás',
                'idEstado' => 9,
            ),
            421 => 
            array (
                'id' => 5422,
                'nome' => 'Goiatuba',
                'idEstado' => 9,
            ),
            422 => 
            array (
                'id' => 5423,
                'nome' => 'Gouvelândia',
                'idEstado' => 9,
            ),
            423 => 
            array (
                'id' => 5424,
                'nome' => 'Guapó',
                'idEstado' => 9,
            ),
            424 => 
            array (
                'id' => 5425,
                'nome' => 'Guaraíta',
                'idEstado' => 9,
            ),
            425 => 
            array (
                'id' => 5426,
                'nome' => 'Guarani de Goiás',
                'idEstado' => 9,
            ),
            426 => 
            array (
                'id' => 5427,
                'nome' => 'Guarinos',
                'idEstado' => 9,
            ),
            427 => 
            array (
                'id' => 5428,
                'nome' => 'Heitoraí',
                'idEstado' => 9,
            ),
            428 => 
            array (
                'id' => 5429,
                'nome' => 'Hidrolândia',
                'idEstado' => 9,
            ),
            429 => 
            array (
                'id' => 5430,
                'nome' => 'Hidrolina',
                'idEstado' => 9,
            ),
            430 => 
            array (
                'id' => 5431,
                'nome' => 'Iaciara',
                'idEstado' => 9,
            ),
            431 => 
            array (
                'id' => 5432,
                'nome' => 'Inaciolândia',
                'idEstado' => 9,
            ),
            432 => 
            array (
                'id' => 5433,
                'nome' => 'Indiara',
                'idEstado' => 9,
            ),
            433 => 
            array (
                'id' => 5434,
                'nome' => 'Inhumas',
                'idEstado' => 9,
            ),
            434 => 
            array (
                'id' => 5435,
                'nome' => 'Ipameri',
                'idEstado' => 9,
            ),
            435 => 
            array (
                'id' => 5436,
                'nome' => 'Ipiranga de Goiás',
                'idEstado' => 9,
            ),
            436 => 
            array (
                'id' => 5437,
                'nome' => 'Iporá',
                'idEstado' => 9,
            ),
            437 => 
            array (
                'id' => 5438,
                'nome' => 'Israelândia',
                'idEstado' => 9,
            ),
            438 => 
            array (
                'id' => 5439,
                'nome' => 'Itaberaí',
                'idEstado' => 9,
            ),
            439 => 
            array (
                'id' => 5440,
                'nome' => 'Itaguari',
                'idEstado' => 9,
            ),
            440 => 
            array (
                'id' => 5441,
                'nome' => 'Itaguaru',
                'idEstado' => 9,
            ),
            441 => 
            array (
                'id' => 5442,
                'nome' => 'Itajá',
                'idEstado' => 9,
            ),
            442 => 
            array (
                'id' => 5443,
                'nome' => 'Itapaci',
                'idEstado' => 9,
            ),
            443 => 
            array (
                'id' => 5444,
                'nome' => 'Itapirapuã',
                'idEstado' => 9,
            ),
            444 => 
            array (
                'id' => 5445,
                'nome' => 'Itapuranga',
                'idEstado' => 9,
            ),
            445 => 
            array (
                'id' => 5446,
                'nome' => 'Itarumã',
                'idEstado' => 9,
            ),
            446 => 
            array (
                'id' => 5447,
                'nome' => 'Itauçu',
                'idEstado' => 9,
            ),
            447 => 
            array (
                'id' => 5448,
                'nome' => 'Itumbiara',
                'idEstado' => 9,
            ),
            448 => 
            array (
                'id' => 5449,
                'nome' => 'Ivolândia',
                'idEstado' => 9,
            ),
            449 => 
            array (
                'id' => 5450,
                'nome' => 'Jandaia',
                'idEstado' => 9,
            ),
            450 => 
            array (
                'id' => 5451,
                'nome' => 'Jaraguá',
                'idEstado' => 9,
            ),
            451 => 
            array (
                'id' => 5452,
                'nome' => 'Jataí',
                'idEstado' => 9,
            ),
            452 => 
            array (
                'id' => 5453,
                'nome' => 'Jaupaci',
                'idEstado' => 9,
            ),
            453 => 
            array (
                'id' => 5454,
                'nome' => 'Jesúpolis',
                'idEstado' => 9,
            ),
            454 => 
            array (
                'id' => 5455,
                'nome' => 'Joviânia',
                'idEstado' => 9,
            ),
            455 => 
            array (
                'id' => 5456,
                'nome' => 'Jussara',
                'idEstado' => 9,
            ),
            456 => 
            array (
                'id' => 5457,
                'nome' => 'Lagoa Santa',
                'idEstado' => 9,
            ),
            457 => 
            array (
                'id' => 5458,
                'nome' => 'Leopoldo de Bulhões',
                'idEstado' => 9,
            ),
            458 => 
            array (
                'id' => 5459,
                'nome' => 'Luziânia',
                'idEstado' => 9,
            ),
            459 => 
            array (
                'id' => 5460,
                'nome' => 'Mairipotaba',
                'idEstado' => 9,
            ),
            460 => 
            array (
                'id' => 5461,
                'nome' => 'Mambaí',
                'idEstado' => 9,
            ),
            461 => 
            array (
                'id' => 5462,
                'nome' => 'Mara Rosa',
                'idEstado' => 9,
            ),
            462 => 
            array (
                'id' => 5463,
                'nome' => 'Marzagão',
                'idEstado' => 9,
            ),
            463 => 
            array (
                'id' => 5464,
                'nome' => 'Matrinchã',
                'idEstado' => 9,
            ),
            464 => 
            array (
                'id' => 5465,
                'nome' => 'Maurilândia',
                'idEstado' => 9,
            ),
            465 => 
            array (
                'id' => 5466,
                'nome' => 'Mimoso de Goiás',
                'idEstado' => 9,
            ),
            466 => 
            array (
                'id' => 5467,
                'nome' => 'Minaçu',
                'idEstado' => 9,
            ),
            467 => 
            array (
                'id' => 5468,
                'nome' => 'Mineiros',
                'idEstado' => 9,
            ),
            468 => 
            array (
                'id' => 5469,
                'nome' => 'Moiporá',
                'idEstado' => 9,
            ),
            469 => 
            array (
                'id' => 5470,
                'nome' => 'Monte Alegre de Goiás',
                'idEstado' => 9,
            ),
            470 => 
            array (
                'id' => 5471,
                'nome' => 'Montes Claros de Goiás',
                'idEstado' => 9,
            ),
            471 => 
            array (
                'id' => 5472,
                'nome' => 'Montividiu',
                'idEstado' => 9,
            ),
            472 => 
            array (
                'id' => 5473,
                'nome' => 'Montividiu do Norte',
                'idEstado' => 9,
            ),
            473 => 
            array (
                'id' => 5474,
                'nome' => 'Morrinhos',
                'idEstado' => 9,
            ),
            474 => 
            array (
                'id' => 5475,
                'nome' => 'Morro Agudo de Goiás',
                'idEstado' => 9,
            ),
            475 => 
            array (
                'id' => 5476,
                'nome' => 'Mossâmedes',
                'idEstado' => 9,
            ),
            476 => 
            array (
                'id' => 5477,
                'nome' => 'Mozarlândia',
                'idEstado' => 9,
            ),
            477 => 
            array (
                'id' => 5478,
                'nome' => 'Mundo Novo',
                'idEstado' => 9,
            ),
            478 => 
            array (
                'id' => 5479,
                'nome' => 'Mutunópolis',
                'idEstado' => 9,
            ),
            479 => 
            array (
                'id' => 5480,
                'nome' => 'Nazário',
                'idEstado' => 9,
            ),
            480 => 
            array (
                'id' => 5481,
                'nome' => 'Nerópolis',
                'idEstado' => 9,
            ),
            481 => 
            array (
                'id' => 5482,
                'nome' => 'Niquelândia',
                'idEstado' => 9,
            ),
            482 => 
            array (
                'id' => 5483,
                'nome' => 'Nova América',
                'idEstado' => 9,
            ),
            483 => 
            array (
                'id' => 5484,
                'nome' => 'Nova Aurora',
                'idEstado' => 9,
            ),
            484 => 
            array (
                'id' => 5485,
                'nome' => 'Nova Crixás',
                'idEstado' => 9,
            ),
            485 => 
            array (
                'id' => 5486,
                'nome' => 'Nova Glória',
                'idEstado' => 9,
            ),
            486 => 
            array (
                'id' => 5487,
                'nome' => 'Nova Iguaçu de Goiás',
                'idEstado' => 9,
            ),
            487 => 
            array (
                'id' => 5488,
                'nome' => 'Nova Roma',
                'idEstado' => 9,
            ),
            488 => 
            array (
                'id' => 5489,
                'nome' => 'Nova Veneza',
                'idEstado' => 9,
            ),
            489 => 
            array (
                'id' => 5490,
                'nome' => 'Novo Brasil',
                'idEstado' => 9,
            ),
            490 => 
            array (
                'id' => 5491,
                'nome' => 'Novo Gama',
                'idEstado' => 9,
            ),
            491 => 
            array (
                'id' => 5492,
                'nome' => 'Novo Planalto',
                'idEstado' => 9,
            ),
            492 => 
            array (
                'id' => 5493,
                'nome' => 'Orizona',
                'idEstado' => 9,
            ),
            493 => 
            array (
                'id' => 5494,
                'nome' => 'Ouro Verde de Goiás',
                'idEstado' => 9,
            ),
            494 => 
            array (
                'id' => 5495,
                'nome' => 'Ouvidor',
                'idEstado' => 9,
            ),
            495 => 
            array (
                'id' => 5496,
                'nome' => 'Padre Bernardo',
                'idEstado' => 9,
            ),
            496 => 
            array (
                'id' => 5497,
                'nome' => 'Palestina de Goiás',
                'idEstado' => 9,
            ),
            497 => 
            array (
                'id' => 5498,
                'nome' => 'Palmeiras de Goiás',
                'idEstado' => 9,
            ),
            498 => 
            array (
                'id' => 5499,
                'nome' => 'Palmelo',
                'idEstado' => 9,
            ),
            499 => 
            array (
                'id' => 5500,
                'nome' => 'Palminópolis',
                'idEstado' => 9,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 5501,
                'nome' => 'Panamá',
                'idEstado' => 9,
            ),
            1 => 
            array (
                'id' => 5502,
                'nome' => 'Paranaiguara',
                'idEstado' => 9,
            ),
            2 => 
            array (
                'id' => 5503,
                'nome' => 'Paraúna',
                'idEstado' => 9,
            ),
            3 => 
            array (
                'id' => 5504,
                'nome' => 'Perolândia',
                'idEstado' => 9,
            ),
            4 => 
            array (
                'id' => 5505,
                'nome' => 'Petrolina de Goiás',
                'idEstado' => 9,
            ),
            5 => 
            array (
                'id' => 5506,
                'nome' => 'Pilar de Goiás',
                'idEstado' => 9,
            ),
            6 => 
            array (
                'id' => 5507,
                'nome' => 'Piracanjuba',
                'idEstado' => 9,
            ),
            7 => 
            array (
                'id' => 5508,
                'nome' => 'Piranhas',
                'idEstado' => 9,
            ),
            8 => 
            array (
                'id' => 5509,
                'nome' => 'Pirenópolis',
                'idEstado' => 9,
            ),
            9 => 
            array (
                'id' => 5510,
                'nome' => 'Pires do Rio',
                'idEstado' => 9,
            ),
            10 => 
            array (
                'id' => 5511,
                'nome' => 'Planaltina',
                'idEstado' => 9,
            ),
            11 => 
            array (
                'id' => 5512,
                'nome' => 'Pontalina',
                'idEstado' => 9,
            ),
            12 => 
            array (
                'id' => 5513,
                'nome' => 'Porangatu',
                'idEstado' => 9,
            ),
            13 => 
            array (
                'id' => 5514,
                'nome' => 'Porteirão',
                'idEstado' => 9,
            ),
            14 => 
            array (
                'id' => 5515,
                'nome' => 'Portelândia',
                'idEstado' => 9,
            ),
            15 => 
            array (
                'id' => 5516,
                'nome' => 'Posse',
                'idEstado' => 9,
            ),
            16 => 
            array (
                'id' => 5517,
                'nome' => 'Professor Jamil',
                'idEstado' => 9,
            ),
            17 => 
            array (
                'id' => 5518,
                'nome' => 'Quirinópolis',
                'idEstado' => 9,
            ),
            18 => 
            array (
                'id' => 5519,
                'nome' => 'Rialma',
                'idEstado' => 9,
            ),
            19 => 
            array (
                'id' => 5520,
                'nome' => 'Rianápolis',
                'idEstado' => 9,
            ),
            20 => 
            array (
                'id' => 5521,
                'nome' => 'Rio Quente',
                'idEstado' => 9,
            ),
            21 => 
            array (
                'id' => 5522,
                'nome' => 'Rio Verde',
                'idEstado' => 9,
            ),
            22 => 
            array (
                'id' => 5523,
                'nome' => 'Rubiataba',
                'idEstado' => 9,
            ),
            23 => 
            array (
                'id' => 5524,
                'nome' => 'Sanclerlândia',
                'idEstado' => 9,
            ),
            24 => 
            array (
                'id' => 5525,
                'nome' => 'Santa Bárbara de Goiás',
                'idEstado' => 9,
            ),
            25 => 
            array (
                'id' => 5526,
                'nome' => 'Santa Cruz de Goiás',
                'idEstado' => 9,
            ),
            26 => 
            array (
                'id' => 5527,
                'nome' => 'Santa Fé de Goiás',
                'idEstado' => 9,
            ),
            27 => 
            array (
                'id' => 5528,
                'nome' => 'Santa Helena de Goiás',
                'idEstado' => 9,
            ),
            28 => 
            array (
                'id' => 5529,
                'nome' => 'Santa Isabel',
                'idEstado' => 9,
            ),
            29 => 
            array (
                'id' => 5530,
                'nome' => 'Santa Rita do Araguaia',
                'idEstado' => 9,
            ),
            30 => 
            array (
                'id' => 5531,
                'nome' => 'Santa Rita do Novo Destino',
                'idEstado' => 9,
            ),
            31 => 
            array (
                'id' => 5532,
                'nome' => 'Santa Rosa de Goiás',
                'idEstado' => 9,
            ),
            32 => 
            array (
                'id' => 5533,
                'nome' => 'Santa Tereza de Goiás',
                'idEstado' => 9,
            ),
            33 => 
            array (
                'id' => 5534,
                'nome' => 'Santa Terezinha de Goiás',
                'idEstado' => 9,
            ),
            34 => 
            array (
                'id' => 5535,
                'nome' => 'Santo Antônio da Barra',
                'idEstado' => 9,
            ),
            35 => 
            array (
                'id' => 5536,
                'nome' => 'Santo Antônio de Goiás',
                'idEstado' => 9,
            ),
            36 => 
            array (
                'id' => 5537,
                'nome' => 'Santo Antônio do Descoberto',
                'idEstado' => 9,
            ),
            37 => 
            array (
                'id' => 5538,
                'nome' => 'São Domingos',
                'idEstado' => 9,
            ),
            38 => 
            array (
                'id' => 5539,
                'nome' => 'São Francisco de Goiás',
                'idEstado' => 9,
            ),
            39 => 
            array (
                'id' => 5540,
                'nome' => 'São João D\'Aliança',
                'idEstado' => 9,
            ),
            40 => 
            array (
                'id' => 5541,
                'nome' => 'São João da Paraúna',
                'idEstado' => 9,
            ),
            41 => 
            array (
                'id' => 5542,
                'nome' => 'São Luís de Montes Belos',
                'idEstado' => 9,
            ),
            42 => 
            array (
                'id' => 5543,
                'nome' => 'São Luíz do Norte',
                'idEstado' => 9,
            ),
            43 => 
            array (
                'id' => 5544,
                'nome' => 'São Miguel do Araguaia',
                'idEstado' => 9,
            ),
            44 => 
            array (
                'id' => 5545,
                'nome' => 'São Miguel do Passa Quatro',
                'idEstado' => 9,
            ),
            45 => 
            array (
                'id' => 5546,
                'nome' => 'São Patrício',
                'idEstado' => 9,
            ),
            46 => 
            array (
                'id' => 5547,
                'nome' => 'São Simão',
                'idEstado' => 9,
            ),
            47 => 
            array (
                'id' => 5548,
                'nome' => 'Senador Canedo',
                'idEstado' => 9,
            ),
            48 => 
            array (
                'id' => 5549,
                'nome' => 'Serranópolis',
                'idEstado' => 9,
            ),
            49 => 
            array (
                'id' => 5550,
                'nome' => 'Silvânia',
                'idEstado' => 9,
            ),
            50 => 
            array (
                'id' => 5551,
                'nome' => 'Simolândia',
                'idEstado' => 9,
            ),
            51 => 
            array (
                'id' => 5552,
                'nome' => 'Sítio D\'Abadia',
                'idEstado' => 9,
            ),
            52 => 
            array (
                'id' => 5553,
                'nome' => 'Taquaral de Goiás',
                'idEstado' => 9,
            ),
            53 => 
            array (
                'id' => 5554,
                'nome' => 'Teresina de Goiás',
                'idEstado' => 9,
            ),
            54 => 
            array (
                'id' => 5555,
                'nome' => 'Terezópolis de Goiás',
                'idEstado' => 9,
            ),
            55 => 
            array (
                'id' => 5556,
                'nome' => 'Três Ranchos',
                'idEstado' => 9,
            ),
            56 => 
            array (
                'id' => 5557,
                'nome' => 'Trindade',
                'idEstado' => 9,
            ),
            57 => 
            array (
                'id' => 5558,
                'nome' => 'Trombas',
                'idEstado' => 9,
            ),
            58 => 
            array (
                'id' => 5559,
                'nome' => 'Turvânia',
                'idEstado' => 9,
            ),
            59 => 
            array (
                'id' => 5560,
                'nome' => 'Turvelândia',
                'idEstado' => 9,
            ),
            60 => 
            array (
                'id' => 5561,
                'nome' => 'Uirapuru',
                'idEstado' => 9,
            ),
            61 => 
            array (
                'id' => 5562,
                'nome' => 'Uruaçu',
                'idEstado' => 9,
            ),
            62 => 
            array (
                'id' => 5563,
                'nome' => 'Uruana',
                'idEstado' => 9,
            ),
            63 => 
            array (
                'id' => 5564,
                'nome' => 'Urutaí',
                'idEstado' => 9,
            ),
            64 => 
            array (
                'id' => 5565,
                'nome' => 'Valparaíso de Goiás',
                'idEstado' => 9,
            ),
            65 => 
            array (
                'id' => 5566,
                'nome' => 'Varjão',
                'idEstado' => 9,
            ),
            66 => 
            array (
                'id' => 5567,
                'nome' => 'Vianópolis',
                'idEstado' => 9,
            ),
            67 => 
            array (
                'id' => 5568,
                'nome' => 'Vicentinópolis',
                'idEstado' => 9,
            ),
            68 => 
            array (
                'id' => 5569,
                'nome' => 'Vila Boa',
                'idEstado' => 9,
            ),
            69 => 
            array (
                'id' => 5570,
                'nome' => 'Vila Propício',
                'idEstado' => 9,
            ),
            70 => 
            array (
                'id' => 5571,
                'nome' => 'Brasília',
                'idEstado' => 7,
            ),
        ));
        
        
    }
}