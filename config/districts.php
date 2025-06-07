<?php

use App\Enums\ProvinceType;

return [
    ProvinceType::EASTERN_CAPE->value => [
        'code'      => config('globalSettings.province_codes.Eastern_Cape'),
        'districts' => [
            [
                'name'         => 'Buffalo City',
                'code'         => 'BUF',
                'municipality' => [
                    [
                        'name'     => 'Buffalo City Metropolitan Municipality',
                        'code'     => 'BUF',
                        'province' => 'Eastern Cape',
                        'seat'     => 'East London',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'Nelson Mandela Bay',
                'code'         => 'NMA',
                'municipality' => [
                    [
                        'name'     => 'Nelson Mandela Bay Metropolitan Municipality',
                        'code'     => 'NMA',
                        'province' => 'Eastern Cape',
                        'seat'     => 'Gqeberha',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'Alfred Nzo',
                'code'         => 'DC44',
                'municipality' => [
                    [
                        'name'     => 'Alfred Nzo District Municipality',
                        'code'     => 'DC44',
                        'province' => 'Eastern Cape',
                        'seat'     => 'Mount Ayliff',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Umzimvubu Local Municipality', 'code' => 'EC442', 'province' => 'Eastern Cape', 'district' => 'Alfred Nzo', 'seat' => 'Mount Frere', 'type' => 'Local', ],
                            ['name' => 'Winnie Madikizela-Mandela Local Municipality', 'code' => 'EC443', 'province' => 'Eastern Cape', 'district' => 'Alfred Nzo', 'seat' => 'Bizana', 'type' => 'Local', ],
                            ['name' => 'Ntabankulu Local Municipality', 'code' => 'EC444', 'province' => 'Eastern Cape', 'district' => 'Alfred Nzo', 'seat' => 'Ntabankulu', 'type' => 'Local', ],
                            ['name' => 'Matatiele Local Municipality', 'code' => 'EC441', 'province' => 'Eastern Cape', 'district' => 'Alfred Nzo', 'seat' => 'Matatiele', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Amathole',
                'code'         => 'DC12',
                'municipality' => [
                    [
                        'name'     => 'Amathole District Municipality',
                        'code'     => 'DC12',
                        'province' => 'Eastern Cape',
                        'seat'     => 'East London',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Mbhashe Local Municipality', 'code' => 'EC121', 'province' => 'Eastern Cape', 'district' => 'Amathole', 'seat' => 'Dutywa', 'type' => 'Local', ],
                            ['name' => 'Mnquma Local Municipality', 'code' => 'EC122', 'province' => 'Eastern Cape', 'district' => 'Amathole', 'seat' => 'Gcuwa', 'type' => 'Local', ],
                            ['name' => 'Great Kei Local Municipality', 'code' => 'EC123', 'province' => 'Eastern Cape', 'district' => 'Amathole', 'seat' => 'Komga', 'type' => 'Local', ],
                            ['name' => 'Amahlathi Local Municipality', 'code' => 'EC124', 'province' => 'Eastern Cape', 'district' => 'Amathole', 'seat' => 'Stutterheim', 'type' => 'Local', ],
                            ['name' => 'Ngqushwa Local Municipality', 'code' => 'EC126', 'province' => 'Eastern Cape', 'district' => 'Amathole', 'seat' => 'Peddie', 'type' => 'Local', ],
                            ['name' => 'Raymond Mhlaba Local Municipality', 'code' => 'EC129', 'province' => 'Eastern Cape', 'district' => 'Amathole', 'seat' => 'Alice', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Chris Hani',
                'code'         => 'DC13',
                'municipality' => [
                    [
                        'name'     => 'Chris Hani District Municipality',
                        'code'     => 'DC13',
                        'province' => 'Eastern Cape',
                        'seat'     => 'Queenstown',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Emalahleni Local Municipality', 'code' => 'EC136', 'province' => 'Eastern Cape', 'district' => 'Chris Hani', 'seat' => 'Lady Frere', 'type' => 'Local', ],
                            ['name' => 'Enoch Mgijima Local Municipality', 'code' => 'EC139', 'province' => 'Eastern Cape', 'district' => 'Chris Hani', 'seat' => 'Queenstown', 'type' => 'Local', ],
                            ['name' => 'Intsika Yethu Local Municipality', 'code' => 'EC135', 'province' => 'Eastern Cape', 'district' => 'Chris Hani', 'seat' => 'Cofimvaba', 'type' => 'Local', ],
                            ['name' => 'Inxuba Yethemba Local Municipality', 'code' => 'EC131', 'province' => 'Eastern Cape', 'district' => 'Chris Hani', 'seat' => 'Cradock', 'type' => 'Local', ],
                            ['name' => 'Sakhisizwe Local Municipality', 'code' => 'EC138', 'province' => 'Eastern Cape', 'district' => 'Chris Hani', 'seat' => 'Cala', 'type' => 'Local', ],
                            ['name' => 'Dr AB Xuma Local Municipality', 'code' => 'EC137', 'province' => 'Eastern Cape', 'district' => 'Chris Hani', 'seat' => 'Ngcobo', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Joe Gqabi',
                'code'         => 'DC14',
                'municipality' => [
                    [
                        'name'     => 'Joe Gqabi District Municipality',
                        'code'     => 'DC14',
                        'province' => 'Eastern Cape',
                        'seat'     => 'Barkly East',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Elundini Local Municipality', 'code' => 'EC141', 'province' => 'Eastern Cape', 'district' => 'Joe Gqabi', 'seat' => 'Maclear', 'type' => 'Local', ],
                            ['name' => 'Senqu Local Municipality', 'code' => 'EC142', 'province' => 'Eastern Cape', 'district' => 'Joe Gqabi', 'seat' => 'Lady Grey', 'type' => 'Local', ],
                            ['name' => 'Walter Sisulu Local Municipality', 'code' => 'EC145', 'province' => 'Eastern Cape', 'district' => 'Joe Gqabi', 'seat' => 'Burgersdorp', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'OR Tambo',
                'code'         => 'DC15',
                'municipality' => [
                    [
                        'name'     => 'OR Tambo District Municipality',
                        'code'     => 'DC15',
                        'province' => 'Eastern Cape',
                        'seat'     => 'Mthatha',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Ingquza Hill Local Municipality', 'code' => 'EC153', 'province' => 'Eastern Cape', 'district' => 'OR Tambo', 'seat' => 'Flagstaff', 'type' => 'Local', ],
                            ['name' => 'King Sabata Dalindyebo Local Municipality', 'code' => 'EC157', 'province' => 'Eastern Cape', 'district' => 'OR Tambo', 'seat' => 'Mthatha', 'type' => 'Local', ],
                            ['name' => 'Kumkani Mhlontlo Local Municipality', 'code' => 'EC156', 'province' => 'Eastern Cape', 'district' => 'OR Tambo', 'seat' => 'Qumbu', 'type' => 'Local', ],
                            ['name' => 'Nyandeni Local Municipality', 'code' => 'EC155', 'province' => 'Eastern Cape', 'district' => 'OR Tambo', 'seat' => 'Libode', 'type' => 'Local', ],
                            ['name' => 'Port St Johns Local Municipality', 'code' => 'EC154', 'province' => 'Eastern Cape', 'district' => 'OR Tambo', 'seat' => 'Port St Johns', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Sarah Baartman',
                'code'         => 'DC10',
                'municipality' => [
                    [
                        'name'     => 'Sarah Baartman District Municipality',
                        'code'     => 'DC10',
                        'province' => 'Eastern Cape',
                        'seat'     => 'Port Elizabeth',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Dr Beyers Naudé Local Municipality', 'code' => 'EC101', 'province' => 'Eastern Cape', 'district' => 'Sarah Baartman', 'seat' => 'Graaff-Reinet', 'type' => 'Local', ],
                            ['name' => 'Blue Crane Route Local Municipality', 'code' => 'EC102', 'province' => 'Eastern Cape', 'district' => 'Sarah Baartman', 'seat' => 'Somerset East', 'type' => 'Local', ],
                            ['name' => 'Kou-Kamma Local Municipality', 'code' => 'EC109', 'province' => 'Eastern Cape', 'district' => 'Sarah Baartman', 'seat' => 'Kareedouw', 'type' => 'Local', ],
                            ['name' => 'Kouga Local Municipality', 'code' => 'EC108', 'province' => 'Eastern Cape', 'district' => 'Sarah Baartman', 'seat' => 'Jeffreys Bay', 'type' => 'Local', ],
                            ['name' => 'Makana Local Municipality', 'code' => 'EC104', 'province' => 'Eastern Cape', 'district' => 'Sarah Baartman', 'seat' => 'Grahamstown', 'type' => 'Local', ],
                            ['name' => 'Ndlambe Local Municipality', 'code' => 'EC105', 'province' => 'Eastern Cape', 'district' => 'Sarah Baartman', 'seat' => 'Port Alfred', 'type' => 'Local', ],
                            ['name' => 'Sundays River Valley Local Municipality', 'code' => 'EC106', 'province' => 'Eastern Cape', 'district' => 'Sarah Baartman', 'seat' => 'Kirkwood', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::FREE_STATE->value => [
        'code'      => config('globalSettings.province_codes.Free_State'),
        'districts' => [
            [
                'name'         => 'Mangaung',
                'code'         => 'MAN',
                'municipality' => [
                    [
                        'name'     => 'Mangaung Metropolitan Municipality',
                        'code'     => 'MAN',
                        'province' => 'Free State',
                        'seat'     => 'Bloemfontein',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'Fezile Dabi',
                'code'         => 'DC20',
                'municipality' => [
                    [
                        'name'     => 'Fezile Dabi District Municipality',
                        'code'     => 'DC20',
                        'province' => 'Free State',
                        'seat'     => 'Sasolburg',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Mafube Local Municipality', 'code' => 'FS205', 'province' => 'Free State', 'district' => 'Fezile Dabi', 'seat' => 'Frankfort', 'type' => 'Local', ],
                            ['name' => 'Metsimaholo Local Municipality', 'code' => 'FS204', 'province' => 'Free State', 'district' => 'Fezile Dabi', 'seat' => 'Sasolburg', 'type' => 'Local', ],
                            ['name' => 'Moqhaka Local Municipality', 'code' => 'FS201', 'province' => 'Free State', 'district' => 'Fezile Dabi', 'seat' => 'Kroonstad', 'type' => 'Local', ],
                            ['name' => 'Ngwathe Local Municipality', 'code' => 'FS203', 'province' => 'Free State', 'district' => 'Fezile Dabi', 'seat' => 'Parys', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Lejweleputswa',
                'code'         => 'DC18',
                'municipality' => [
                    [
                        'name'     => 'Lejweleputswa District Municipality',
                        'code'     => 'DC18',
                        'province' => 'Free State',
                        'seat'     => 'Welkom',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Masilonyana Local Municipality', 'code' => 'FS181', 'province' => 'Free State', 'district' => 'Lejweleputswa', 'seat' => 'Theunissen', 'type' => 'Local', ],
                            ['name' => 'Matjhabeng Local Municipality', 'code' => 'FS184', 'province' => 'Free State', 'district' => 'Lejweleputswa', 'seat' => 'Welkom', 'type' => 'Local', ],
                            ['name' => 'Nala Local Municipality', 'code' => 'FS185', 'province' => 'Free State', 'district' => 'Lejweleputswa', 'seat' => 'Bothaville', 'type' => 'Local', ],
                            ['name' => 'Tokologo Local Municipality', 'code' => 'FS182', 'province' => 'Free State', 'district' => 'Lejweleputswa', 'seat' => 'Boshof', 'type' => 'Local', ],
                            ['name' => 'Tswelopele Local Municipality', 'code' => 'FS183', 'province' => 'Free State', 'district' => 'Lejweleputswa', 'seat' => 'Bultfontein', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Thabo Mofutsanyana',
                'code'         => 'DC19',
                'municipality' => [
                    [
                        'name'     => 'Thabo Mofutsanyana District Municipality',
                        'code'     => 'DC19',
                        'province' => 'Free State',
                        'seat'     => 'Phuthaditjhaba',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Dihlabeng Local Municipality', 'code' => 'FS192', 'province' => 'Free State', 'district' => 'Thabo Mofutsanyana', 'seat' => 'Bethlehem', 'type' => 'Local', ],
                            ['name' => 'Maluti-a-Phofung Local Municipality', 'code' => 'FS194', 'province' => 'Free State', 'district' => 'Thabo Mofutsanyana', 'seat' => 'Phuthaditjhaba', 'type' => 'Local', ],
                            ['name' => 'Setsoto Local Municipality', 'code' => 'FS191', 'province' => 'Free State', 'district' => 'Thabo Mofutsanyana', 'seat' => 'Ficksburg', 'type' => 'Local', ],
                            ['name' => 'Mantsopa Local Municipality', 'code' => 'FS196', 'province' => 'Free State', 'district' => 'Thabo Mofutsanyana', 'seat' => 'Ladybrand', 'type' => 'Local', ],
                            ['name' => 'Nketoana Local Municipality', 'code' => 'FS193', 'province' => 'Free State', 'district' => 'Thabo Mofutsanyana', 'seat' => 'Reitz', 'type' => 'Local', ],
                            ['name' => 'Phumelela Local Municipality', 'code' => 'FS195', 'province' => 'Free State', 'district' => 'Thabo Mofutsanyana', 'seat' => 'Vrede', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Xhariep',
                'code'         => 'DC16',
                'municipality' => [
                    [
                        'name'     => 'Xhariep District Municipality',
                        'code'     => 'DC16',
                        'province' => 'Free State',
                        'seat'     => 'Trompsburg',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Kopanong Local Municipality', 'code' => 'FS162', 'province' => 'Free State', 'district' => 'Xhariep', 'seat' => 'Trompsburg', 'type' => 'Local', ],
                            ['name' => 'Letsemeng Local Municipality', 'code' => 'FS161', 'province' => 'Free State', 'district' => 'Xhariep', 'seat' => 'Koffiefontein', 'type' => 'Local', ],
                            ['name' => 'Mohokare Local Municipality', 'code' => 'FS163', 'province' => 'Free State', 'district' => 'Xhariep', 'seat' => 'Zastron', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::GAUTENG->value => [
        'code'      => config('globalSettings.province_codes.Gauteng'),
        'districts' => [
            [
                'name'         => 'City of Ekurhuleni',
                'code'         => 'EKU',
                'municipality' => [
                    [
                        'name'     => 'City of Ekurhuleni Metropolitan Municipality',
                        'code'     => 'EKU',
                        'province' => 'Gauteng',
                        'seat'     => 'Germiston',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'City of Johannesburg',
                'code'         => 'JHB',
                'municipality' => [
                    [
                        'name'     => 'City of Johannesburg Metropolitan Municipality',
                        'code'     => 'JHB',
                        'province' => 'Gauteng',
                        'seat'     => 'Johannesburg',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'City of Tshwane',
                'code'         => 'TSH',
                'municipality' => [
                    [
                        'name'     => 'City of Tshwane Metropolitan Municipality',
                        'code'     => 'TSH',
                        'province' => 'Gauteng',
                        'seat'     => 'Pretoria',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'Sedibeng',
                'code'         => 'DC42',
                'municipality' => [
                    [
                        'name'     => 'Sedibeng District Municipality',
                        'code'     => 'DC42',
                        'province' => 'Gauteng',
                        'seat'     => 'Vereeniging',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Emfuleni Local Municipality', 'code' => 'GT421', 'province' => 'Gauteng', 'district' => 'Sedibeng', 'seat' => 'Vanderbijlpark', 'type' => 'Local', ],
                            ['name' => 'Lesedi Local Municipality', 'code' => 'GT423', 'province' => 'Gauteng', 'district' => 'Sedibeng', 'seat' => 'Heidelberg', 'type' => 'Local', ],
                            ['name' => 'Midvaal Local Municipality', 'code' => 'GT422', 'province' => 'Gauteng', 'district' => 'Sedibeng', 'seat' => 'Meyerton', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'West Rand',
                'code'         => 'DC48',
                'municipality' => [
                    [
                        'name'     => 'West Rand District Municipality',
                        'code'     => 'DC48',
                        'province' => 'Gauteng',
                        'seat'     => 'Randfontein',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Merafong City Local Municipality', 'code' => 'GT484', 'province' => 'Gauteng', 'district' => 'West Rand', 'seat' => 'Carletonville', 'type' => 'Local', ],
                            ['name' => 'Mogale City Local Municipality', 'code' => 'GT481', 'province' => 'Gauteng', 'district' => 'West Rand', 'seat' => 'Krugersdorp', 'type' => 'Local', ],
                            ['name' => 'Rand West City Local Municipality', 'code' => 'GT485', 'province' => 'Gauteng', 'district' => 'West Rand', 'seat' => 'Randfontein', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::KWAZULU_NATAL->value => [
        'code'      => config('globalSettings.province_codes.KwaZulu_Natal'),
        'districts' => [
            [
                'name'         => 'eThekwini',
                'code'         => 'ETH',
                'municipality' => [
                    [
                        'name'     => 'eThekwini Metropolitan Municipality',
                        'code'     => 'ETH',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Durban',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'Amajuba',
                'code'         => 'DC25',
                'municipality' => [
                    [
                        'name'     => 'Amajuba District Municipality',
                        'code'     => 'DC25',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Newcastle',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Dannhauser Local Municipality', 'code' => 'KZN254', 'province' => 'KwaZulu-Natal', 'district' => 'Amajuba', 'seat' => 'Dannhauser', 'type' => 'Local', ],
                            ['name' => 'Newcastle Local Municipality', 'code' => 'KZN252', 'province' => 'KwaZulu-Natal', 'district' => 'Amajuba', 'seat' => 'Newcastle', 'type' => 'Local', ],
                            ['name' => 'eMadlangeni Local Municipality', 'code' => 'KZN253', 'province' => 'KwaZulu-Natal', 'district' => 'Amajuba', 'seat' => 'Utrecht', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Harry Gwala',
                'code'         => 'DC43',
                'municipality' => [
                    [
                        'name'     => 'Harry Gwala District Municipality',
                        'code'     => 'DC43',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Ixopo',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Ubuhlebezwe Local Municipality', 'code' => 'KZN434', 'province' => 'KwaZulu-Natal', 'district' => 'Harry Gwala', 'seat' => 'Ixopo', 'type' => 'Local', ],
                            ['name' => 'Umzimkhulu Local Municipality', 'code' => 'KZN435', 'province' => 'KwaZulu-Natal', 'district' => 'Harry Gwala', 'seat' => 'Umzimkhulu', 'type' => 'Local', ],
                            ['name' => 'Greater Kokstad Local Municipality', 'code' => 'KZN433', 'province' => 'KwaZulu-Natal', 'district' => 'Harry Gwala', 'seat' => 'Kokstad', 'type' => 'Local', ],
                            ['name' => 'Dr Nkosazana Dlamini Zuma Local Municipality', 'code' => 'KZN436', 'province' => 'KwaZulu-Natal', 'district' => 'Harry Gwala', 'seat' => 'Creighton', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'iLembe',
                'code'         => 'DC29',
                'municipality' => [
                    [
                        'name'     => 'iLembe District Municipality',
                        'code'     => 'DC29',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'KwaDukuza',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'KwaDukuza Local Municipality', 'code' => 'KZN292', 'province' => 'KwaZulu-Natal', 'district' => 'iLembe', 'seat' => 'KwaDukuza', 'type' => 'Local', ],
                            ['name' => 'Maphumulo Local Municipality', 'code' => 'KZN294', 'province' => 'KwaZulu-Natal', 'district' => 'iLembe', 'seat' => 'Maphumulo', 'type' => 'Local', ],
                            ['name' => 'Mandeni Local Municipality', 'code' => 'KZN291', 'province' => 'KwaZulu-Natal', 'district' => 'iLembe', 'seat' => 'Mandeni', 'type' => 'Local', ],
                            ['name' => 'Ndwedwe Local Municipality', 'code' => 'KZN293', 'province' => 'KwaZulu-Natal', 'district' => 'iLembe', 'seat' => 'Ndwedwe', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'King Cetshwayo',
                'code'         => 'DC28',
                'municipality' => [
                    [
                        'name'     => 'King Cetshwayo District Municipality',
                        'code'     => 'DC28',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Richards Bay',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Mthonjaneni Local Municipality', 'code' => 'KZN285', 'province' => 'KwaZulu-Natal', 'district' => 'King Cetshwayo', 'seat' => 'Melmoth', 'type' => 'Local', ],
                            ['name' => 'Nkandla Local Municipality', 'code' => 'KZN286', 'province' => 'KwaZulu-Natal', 'district' => 'King Cetshwayo', 'seat' => 'Nkandla', 'type' => 'Local', ],
                            ['name' => 'uMfolozi Local Municipality', 'code' => 'KZN281', 'province' => 'KwaZulu-Natal', 'district' => 'King Cetshwayo', 'seat' => 'KwaMbonambi', 'type' => 'Local', ],
                            ['name' => 'uMhlathuze Local Municipality', 'code' => 'KZN282', 'province' => 'KwaZulu-Natal', 'district' => 'King Cetshwayo', 'seat' => 'Richards Bay', 'type' => 'Local', ],
                            ['name' => 'uMlalazi Local Municipality', 'code' => 'KZN284', 'province' => 'KwaZulu-Natal', 'district' => 'King Cetshwayo', 'seat' => 'Eshowe', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Ugu',
                'code'         => 'DC21',
                'municipality' => [
                    [
                        'name'     => 'Ugu District Municipality',
                        'code'     => 'DC21',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Port Shepstone',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Ray Nkonyeni Local Municipality', 'code' => 'KZN216', 'province' => 'KwaZulu-Natal', 'district' => 'Ugu', 'seat' => 'Port Shepstone', 'type' => 'Local', ],
                            ['name' => 'Umdoni Local Municipality', 'code' => 'KZN212', 'province' => 'KwaZulu-Natal', 'district' => 'Ugu', 'seat' => 'Scottburgh', 'type' => 'Local', ],
                            ['name' => 'uMuziwabantu Local Municipality', 'code' => 'KZN214', 'province' => 'KwaZulu-Natal', 'district' => 'Ugu', 'seat' => 'Harding', 'type' => 'Local', ],
                            ['name' => 'Umzumbe Local Municipality', 'code' => 'KZN213', 'province' => 'KwaZulu-Natal', 'district' => 'Ugu', 'seat' => 'Mtwalume', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'uMgungundlovu',
                'code'         => 'DC22',
                'municipality' => [
                    [
                        'name'     => 'uMgungundlovu District Municipality',
                        'code'     => 'DC22',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Pietermaritzburg',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Impendle Local Municipality', 'code' => 'KZN224', 'province' => 'KwaZulu-Natal', 'district' => 'uMgungundlovu', 'seat' => 'Impendle', 'type' => 'Local', ],
                            ['name' => 'uMngeni Local Municipality', 'code' => 'KZN222', 'province' => 'KwaZulu-Natal', 'district' => 'uMgungundlovu', 'seat' => 'Howick', 'type' => 'Local', ],
                            ['name' => 'uMshwathi Local Municipality', 'code' => 'KZN221', 'province' => 'KwaZulu-Natal', 'district' => 'uMgungundlovu', 'seat' => 'Wartburg', 'type' => 'Local', ],
                            ['name' => 'Mpofana Local Municipality', 'code' => 'KZN223', 'province' => 'KwaZulu-Natal', 'district' => 'uMgungundlovu', 'seat' => 'Mooi River', 'type' => 'Local', ],
                            ['name' => 'Mkhambathini Local Municipality', 'code' => 'KZN226', 'province' => 'KwaZulu-Natal', 'district' => 'uMgungundlovu', 'seat' => 'Camperdown', 'type' => 'Local', ],
                            ['name' => 'Richmond Local Municipality', 'code' => 'KZN227', 'province' => 'KwaZulu-Natal', 'district' => 'uMgungundlovu', 'seat' => 'Richmond', 'type' => 'Local', ],
                            ['name' => 'Msunduzi Local Municipality', 'code' => 'KZN225', 'province' => 'KwaZulu-Natal', 'district' => 'uMgungundlovu', 'seat' => 'Pietermaritzburg', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'uMkhanyakude',
                'code'         => 'DC27',
                'municipality' => [
                    [
                        'name'     => 'uMkhanyakude District Municipality',
                        'code'     => 'DC27',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Mkuze',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Big Five Hlabisa Local Municipality', 'code' => 'KZN276', 'province' => 'KwaZulu-Natal', 'district' => 'Umkhanyakude', 'seat' => 'Hlabisa', 'type' => 'Local', ],
                            ['name' => 'Jozini Local Municipality', 'code' => 'KZN272', 'province' => 'KwaZulu-Natal', 'district' => 'Umkhanyakude', 'seat' => 'Jozini', 'type' => 'Local', ],
                            ['name' => 'uMhlabuyalingana Local Municipality', 'code' => 'KZN271', 'province' => 'KwaZulu-Natal', 'district' => 'Umkhanyakude', 'seat' => 'Kwangwanase', 'type' => 'Local', ],
                            ['name' => 'Mtubatuba Local Municipality', 'code' => 'KZN275', 'province' => 'KwaZulu-Natal', 'district' => 'Umkhanyakude', 'seat' => 'Mtubatuba', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'uMzinyathi',
                'code'         => 'DC24',
                'municipality' => [
                    [
                        'name'     => 'uMzinyathi District Municipality',
                        'code'     => 'DC24',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Dundee',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Endumeni Local Municipality', 'code' => 'KZN241', 'province' => 'KwaZulu-Natal', 'district' => 'Umzinyathi', 'seat' => 'Dundee', 'type' => 'Local', ],
                            ['name' => 'Msinga Local Municipality', 'code' => 'KZN244', 'province' => 'KwaZulu-Natal', 'district' => 'Umzinyathi', 'seat' => 'Tugela Ferry', 'type' => 'Local', ],
                            ['name' => 'Nqutu Local Municipality', 'code' => 'KZN242', 'province' => 'KwaZulu-Natal', 'district' => 'Umzinyathi', 'seat' => 'Nquthu', 'type' => 'Local', ],
                            ['name' => 'Umvoti Local Municipality', 'code' => 'KZN245', 'province' => 'KwaZulu-Natal', 'district' => 'Umzinyathi', 'seat' => 'Greytown', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'uThukela',
                'code'         => 'DC23',
                'municipality' => [
                    [
                        'name'     => 'uThukela District Municipality',
                        'code'     => 'DC23',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Ladysmith',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Alfred Duma Local Municipality', 'code' => 'KZN238', 'province' => 'KwaZulu-Natal', 'district' => 'Uthukela', 'seat' => 'Ladysmith', 'type' => 'Local', ],
                            ['name' => 'Inkosi Langalibalele Local Municipality', 'code' => 'KZN237', 'province' => 'KwaZulu-Natal', 'district' => 'Uthukela', 'seat' => 'Estcourt', 'type' => 'Local', ],
                            ['name' => 'Okhahlamba Local Municipality', 'code' => 'KZN235', 'province' => 'KwaZulu-Natal', 'district' => 'Uthukela', 'seat' => 'Bergville', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Zululand',
                'code'         => 'DC26',
                'municipality' => [
                    [
                        'name'     => 'Zululand District Municipality',
                        'code'     => 'DC26',
                        'province' => 'KwaZulu-Natal',
                        'seat'     => 'Ulundi',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Abaqulusi Local Municipality', 'code' => 'KZN263', 'province' => 'KwaZulu-Natal', 'district' => 'Zululand', 'seat' => 'Vryheid', 'type' => 'Local', ],
                            ['name' => 'eDumbe Local Municipality', 'code' => 'KZN261', 'province' => 'KwaZulu-Natal', 'district' => 'Zululand', 'seat' => 'Paulpietersburg', 'type' => 'Local', ],
                            ['name' => 'Nongoma Local Municipality', 'code' => 'KZN265', 'province' => 'KwaZulu-Natal', 'district' => 'Zululand', 'seat' => 'Nongoma', 'type' => 'Local', ],
                            ['name' => 'uPhongolo Local Municipality', 'code' => 'KZN262', 'province' => 'KwaZulu-Natal', 'district' => 'Zululand', 'seat' => 'Pongola', 'type' => 'Local', ],
                            ['name' => 'Ulundi Local Municipality', 'code' => 'KZN266', 'province' => 'KwaZulu-Natal', 'district' => 'Zululand', 'seat' => 'Ulundi', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::LIMPOPO->value => [
        'code'      => config('globalSettings.province_codes.Limpopo'),
        'districts' => [
            [
                'name'         => 'Capricorn',
                'code'         => 'DC35',
                'municipality' => [
                    [
                        'name'     => 'Capricorn District Municipality',
                        'code'     => 'DC35',
                        'province' => 'Limpopo',
                        'seat'     => 'Polokwane',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Blouberg Local Municipality', 'code' => 'LIM351', 'province' => 'Limpopo', 'district' => 'Capricorn', 'seat' => 'Senwabarwana', 'type' => 'Local', ],
                            ['name' => 'Lepelle-Nkumpi Local Municipality', 'code' => 'LIM355', 'province' => 'Limpopo', 'district' => 'Capricorn', 'seat' => 'Chuniespoort', 'type' => 'Local', ],
                            ['name' => 'Molemole Local Municipality', 'code' => 'LIM353', 'province' => 'Limpopo', 'district' => 'Capricorn', 'seat' => 'Dendron', 'type' => 'Local', ],
                            ['name' => 'Polokwane Local Municipality', 'code' => 'LIM354', 'province' => 'Limpopo', 'district' => 'Capricorn', 'seat' => 'Polokwane', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Mopani',
                'code'         => 'DC33',
                'municipality' => [
                    [
                        'name'     => 'Mopani District Municipality',
                        'code'     => 'DC33',
                        'province' => 'Limpopo',
                        'seat'     => 'Giyani',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Ba-Phalaborwa Local Municipality', 'code' => 'LIM334', 'province' => 'Limpopo', 'district' => 'Mopani', 'seat' => 'Phalaborwa', 'type' => 'Local', ],
                            ['name' => 'Greater Tzaneen Local Municipality', 'code' => 'LIM333', 'province' => 'Limpopo', 'district' => 'Mopani', 'seat' => 'Tzaneen', 'type' => 'Local', ],
                            ['name' => 'Greater Giyani Local Municipality', 'code' => 'LIM331', 'province' => 'Limpopo', 'district' => 'Mopani', 'seat' => 'Giyani', 'type' => 'Local', ],
                            ['name' => 'Greater Letaba Local Municipality', 'code' => 'LIM332', 'province' => 'Limpopo', 'district' => 'Mopani', 'seat' => 'Modjadjiskloof', 'type' => 'Local', ],
                            ['name' => 'Maruleng Local Municipality', 'code' => 'LIM335', 'province' => 'Limpopo', 'district' => 'Mopani', 'seat' => 'Hoedspruit', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Sekhukhune',
                'code'         => 'DC47',
                'municipality' => [
                    [
                        'name'     => 'Sekhukhune District Municipality',
                        'code'     => 'DC47',
                        'province' => 'Limpopo',
                        'seat'     => 'Groblersdal',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Elias Motsoaledi Local Municipality', 'code' => 'LIM472', 'province' => 'Limpopo', 'district' => 'Sekhukhune', 'seat' => 'Groblersdal', 'type' => 'Local', ],
                            ['name' => 'Ephraim Mogale Local Municipality', 'code' => 'LIM471', 'province' => 'Limpopo', 'district' => 'Sekhukhune', 'seat' => 'Marble Hall', 'type' => 'Local', ],
                            ['name' => 'Fetakgomo Tubatse Local Municipality', 'code' => 'LIM476', 'province' => 'Limpopo', 'district' => 'Sekhukhune', 'seat' => 'Apel', 'type' => 'Local', ],
                            ['name' => 'Makhuduthamaga Local Municipality', 'code' => 'LIM473', 'province' => 'Limpopo', 'district' => 'Sekhukhune', 'seat' => 'Jane Furse', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Vhembe',
                'code'         => 'DC34',
                'municipality' => [
                    [
                        'name'     => 'Vhembe District Municipality',
                        'code'     => 'DC34',
                        'province' => 'Limpopo',
                        'seat'     => 'Thohoyandou',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Collins Chabane Local Municipality', 'code' => 'LIM345', 'province' => 'Limpopo', 'district' => 'Vhembe', 'seat' => 'Malamulele', 'type' => 'Local', ],
                            ['name' => 'Makhado Local Municipality', 'code' => 'LIM344', 'province' => 'Limpopo', 'district' => 'Vhembe', 'seat' => 'Louis Trichardt', 'type' => 'Local', ],
                            ['name' => 'Musina Local Municipality', 'code' => 'LIM341', 'province' => 'Limpopo', 'district' => 'Vhembe', 'seat' => 'Musina', 'type' => 'Local', ],
                            ['name' => 'Thulamela Local Municipality', 'code' => 'LIM343', 'province' => 'Limpopo', 'district' => 'Vhembe', 'seat' => 'Thohoyandou', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Waterberg',
                'code'         => 'DC36',
                'municipality' => [
                    [
                        'name'     => 'Waterberg District Municipality',
                        'code'     => 'DC36',
                        'province' => 'Limpopo',
                        'seat'     => 'Modimolle',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Bela-Bela Local Municipality', 'code' => 'LIM366', 'province' => 'Limpopo', 'district' => 'Waterberg', 'seat' => 'Bela-Bela', 'type' => 'Local', ],
                            ['name' => 'Lephalale Local Municipality', 'code' => 'LIM362', 'province' => 'Limpopo', 'district' => 'Waterberg', 'seat' => 'Lephalale', 'type' => 'Local', ],
                            ['name' => 'Modimolle–Mookgophong Local Municipality', 'code' => 'LIM368', 'province' => 'Limpopo', 'district' => 'Waterberg', 'seat' => 'Modimolle', 'type' => 'Local', ],
                            ['name' => 'Mogalakwena Local Municipality', 'code' => 'LIM367', 'province' => 'Limpopo', 'district' => 'Waterberg', 'seat' => 'Mokopane', 'type' => 'Local', ],
                            ['name' => 'Thabazimbi Local Municipality', 'code' => 'LIM361', 'province' => 'Limpopo', 'district' => 'Waterberg', 'seat' => 'Thabazimbi', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::MPUMALANGA->value => [
        'code'      => config('globalSettings.province_codes.Mpumalanga'),
        'districts' => [
            [
                'name'         => 'Ehlanzeni',
                'code'         => 'DC32',
                'municipality' => [
                    [
                        'name'     => 'Ehlanzeni District Municipality',
                        'code'     => 'DC32',
                        'province' => 'Mpumalanga',
                        'seat'     => 'Nelspruit',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Bushbuckridge Local Municipality', 'code' => 'MP325', 'province' => 'Mpumalanga', 'district' => 'Ehlanzeni', 'seat' => 'Bushbuckridge', 'type' => 'Local', ],
                            ['name' => 'Thaba Chweu Local Municipality', 'code' => 'MP321', 'province' => 'Mpumalanga', 'district' => 'Ehlanzeni', 'seat' => 'Lydenburg', 'type' => 'Local', ],
                            ['name' => 'Mbombela Local Municipality', 'code' => 'MP326', 'province' => 'Mpumalanga', 'district' => 'Ehlanzeni', 'seat' => 'Nelspruit', 'type' => 'Local', ],
                            ['name' => 'Nkomazi Local Municipality', 'code' => 'MP324', 'province' => 'Mpumalanga', 'district' => 'Ehlanzeni', 'seat' => 'Malalane', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Gert Sibande',
                'code'         => 'DC30',
                'municipality' => [
                    [
                        'name'     => 'Gert Sibande District Municipality',
                        'code'     => 'DC30',
                        'province' => 'Mpumalanga',
                        'seat'     => 'Ermelo',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Albert Luthuli Local Municipality', 'code' => 'MP301', 'province' => 'Mpumalanga', 'district' => 'Gert Sibande', 'seat' => 'Carolina', 'type' => 'Local', ],
                            ['name' => 'Dipaleseng Local Municipality', 'code' => 'MP306', 'province' => 'Mpumalanga', 'district' => 'Gert Sibande', 'seat' => 'Balfour', 'type' => 'Local', ],
                            ['name' => 'Govan Mbeki Local Municipality', 'code' => 'MP307', 'province' => 'Mpumalanga', 'district' => 'Gert Sibande', 'seat' => 'Secunda', 'type' => 'Local', ],
                            ['name' => 'Lekwa Local Municipality', 'code' => 'MP305', 'province' => 'Mpumalanga', 'district' => 'Gert Sibande', 'seat' => 'Standerton', 'type' => 'Local', ],
                            ['name' => 'Msukaligwa Local Municipality', 'code' => 'MP302', 'province' => 'Mpumalanga', 'district' => 'Gert Sibande', 'seat' => 'Ermelo', 'type' => 'Local', ],
                            ['name' => 'Mkhondo Local Municipality', 'code' => 'MP303', 'province' => 'Mpumalanga', 'district' => 'Gert Sibande', 'seat' => 'Piet Retief', 'type' => 'Local', ],
                            ['name' => 'Pixley ka Seme Local Municipality', 'code' => 'MP304', 'province' => 'Mpumalanga', 'district' => 'Gert Sibande', 'seat' => 'Volksrust', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Nkangala',
                'code'         => 'DC31',
                'municipality' => [
                    [
                        'name'     => 'Nkangala District Municipality',
                        'code'     => 'DC31',
                        'province' => 'Mpumalanga',
                        'seat'     => 'Middelburg',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Emalahleni Local Municipality', 'code' => 'MP312', 'province' => 'Mpumalanga', 'district' => 'Nkangala', 'seat' => 'eMalahleni', 'type' => 'Local', ],
                            ['name' => 'Dr JS Moroka Local Municipality', 'code' => 'MP316', 'province' => 'Mpumalanga', 'district' => 'Nkangala', 'seat' => 'Siyabuswa', 'type' => 'Local', ],
                            ['name' => 'Emakhazeni Local Municipality', 'code' => 'MP314', 'province' => 'Mpumalanga', 'district' => 'Nkangala', 'seat' => 'Belfast', 'type' => 'Local', ],
                            ['name' => 'Steve Tshwete Local Municipality', 'code' => 'MP313', 'province' => 'Mpumalanga', 'district' => 'Nkangala', 'seat' => 'Middelburg', 'type' => 'Local', ],
                            ['name' => 'Thembisile Hani Local Municipality', 'code' => 'MP315', 'province' => 'Mpumalanga', 'district' => 'Nkangala', 'seat' => 'eMpumalanga', 'type' => 'Local', ],
                            ['name' => 'Victor Khanye Local Municipality', 'code' => 'MP311', 'province' => 'Mpumalanga', 'district' => 'Nkangala', 'seat' => 'Delmas', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::NORTH_WEST->value => [
        'code'      => config('globalSettings.province_codes.North_West'),
        'districts' => [
            [
                'name'         => 'Bojanala Platinum',
                'code'         => 'DC37',
                'municipality' => [
                    [
                        'name'     => 'Bojanala District Municipality',
                        'code'     => 'DC37',
                        'province' => 'North West',
                        'seat'     => 'Rustenburg',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Moretele Local Municipality', 'code' => 'NW371', 'province' => 'North West', 'district' => 'Bojanala', 'seat' => 'Makapanstad', 'type' => 'Local', ],
                            ['name' => 'Moses Kotane Local Municipality', 'code' => 'NW375', 'province' => 'North West', 'district' => 'Bojanala', 'seat' => 'Mogwase', 'type' => 'Local', ],
                            ['name' => 'Madibeng Local Municipality', 'code' => 'NW372', 'province' => 'North West', 'district' => 'Bojanala', 'seat' => 'Brits', 'type' => 'Local', ],
                            ['name' => 'Rustenburg Local Municipality', 'code' => 'NW373', 'province' => 'North West', 'district' => 'Bojanala', 'seat' => 'Rustenburg', 'type' => 'Local', ],
                            ['name' => 'Kgetlengrivier Local Municipality', 'code' => 'NW374', 'province' => 'North West', 'district' => 'Bojanala', 'seat' => 'Koster', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Dr Kenneth Kaunda',
                'code'         => 'DC40',
                'municipality' => [
                    [
                        'name'     => 'Dr Kenneth Kaunda District Municipality',
                        'code'     => 'DC40',
                        'province' => 'North West',
                        'seat'     => 'Klerksdorp',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'JB Marks Local Municipality', 'code' => 'NW405', 'province' => 'North West', 'district' => 'Dr Kenneth Kaunda', 'seat' => 'Potchefstroom', 'type' => 'Local', ],
                            ['name' => 'City of Matlosana Local Municipality', 'code' => 'NW403', 'province' => 'North West', 'district' => 'Dr Kenneth Kaunda', 'seat' => 'Klerksdorp', 'type' => 'Local', ],
                            ['name' => 'Maquassi Hills Local Municipality', 'code' => 'NW404', 'province' => 'North West', 'district' => 'Dr Kenneth Kaunda', 'seat' => 'Wolmaransstad', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Dr Ruth Segomotsi Mompati',
                'code'         => 'DC39',
                'municipality' => [
                    [
                        'name'     => 'Dr Ruth Segomotsi Mompati District Municipality',
                        'code'     => 'DC39',
                        'province' => 'North West',
                        'seat'     => 'Vryburg',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Greater Taung Local Municipality', 'code' => 'NW394', 'province' => 'North West', 'district' => 'Dr Ruth Segomotsi Mompati', 'seat' => 'Taung', 'type' => 'Local', ],
                            ['name' => 'Kagisano-Molopo Local Municipality', 'code' => 'NW397', 'province' => 'North West', 'district' => 'Dr Ruth Segomotsi Mompati', 'seat' => 'Ganyesa', 'type' => 'Local', ],
                            ['name' => 'Lekwa-Teemane Local Municipality', 'code' => 'NW396', 'province' => 'North West', 'district' => 'Dr Ruth Segomotsi Mompati', 'seat' => 'Christiana', 'type' => 'Local', ],
                            ['name' => 'Mamusa Local Municipality', 'code' => 'NW393', 'province' => 'North West', 'district' => 'Dr Ruth Segomotsi Mompati', 'seat' => 'Schweizer-Reneke', 'type' => 'Local', ],
                            ['name' => 'Naledi Local Municipality', 'code' => 'NW392', 'province' => 'North West', 'district' => 'Dr Ruth Segomotsi Mompati', 'seat' => 'Vryburg', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Ngaka Modiri Molema',
                'code'         => 'DC38',
                'municipality' => [
                    [
                        'name'     => 'Ngaka Modiri Molema District Municipality',
                        'code'     => 'DC38',
                        'province' => 'North West',
                        'seat'     => 'Mahikeng',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Ditsobotla Local Municipality', 'code' => 'NW384', 'province' => 'North West', 'district' => 'Ngaka Modiri Molema', 'seat' => 'Lichtenburg', 'type' => 'Local', ],
                            ['name' => 'Mahikeng Local Municipality', 'code' => 'NW383', 'province' => 'North West', 'district' => 'Ngaka Modiri Molema', 'seat' => 'Mahikeng', 'type' => 'Local', ],
                            ['name' => 'Ramotshere Moiloa Local Municipality', 'code' => 'NW385', 'province' => 'North West', 'district' => 'Ngaka Modiri Molema', 'seat' => 'Zeerust', 'type' => 'Local', ],
                            ['name' => 'Ratlou Local Municipality', 'code' => 'NW381', 'province' => 'North West', 'district' => 'Ngaka Modiri Molema', 'seat' => 'Setlagole', 'type' => 'Local', ],
                            ['name' => 'Tswaing Local Municipality', 'code' => 'NW382', 'province' => 'North West', 'district' => 'Ngaka Modiri Molema', 'seat' => 'Delareyville', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::NORTHERN_CAPE->value => [
        'code'      => config('globalSettings.province_codes.Northern_Cape'),
        'districts' => [
            [
                'name'         => 'Frances Baard',
                'code'         => 'DC9',
                'municipality' => [
                    [
                        'name'     => 'Frances Baard District Municipality',
                        'code'     => 'DC9',
                        'province' => 'Northern Cape',
                        'seat'     => 'Kimberley',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Magareng Local Municipality', 'code' => 'NC093', 'province' => 'Northern Cape', 'district' => 'Frances Baard', 'seat' => 'Warrenton', 'type' => 'Local', ],
                            ['name' => 'Dikgatlong Local Municipality', 'code' => 'NC092', 'province' => 'Northern Cape', 'district' => 'Frances Baard', 'seat' => 'Barkly West', 'type' => 'Local', ],
                            ['name' => 'Phokwane Local Municipality', 'code' => 'NC094', 'province' => 'Northern Cape', 'district' => 'Frances Baard', 'seat' => 'Hartswater', 'type' => 'Local', ],
                            ['name' => 'Sol Plaatje Local Municipality', 'code' => 'NC091', 'province' => 'Northern Cape', 'district' => 'Frances Baard', 'seat' => 'Kimberley', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'John Taolo Gaetsewe',
                'code'         => 'DC45',
                'municipality' => [
                    [
                        'name'     => 'John Taolo Gaetsewe District Municipality',
                        'code'     => 'DC45',
                        'province' => 'Northern Cape',
                        'seat'     => 'Kuruman',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Ga-Segonyana Local Municipality', 'code' => 'NC452', 'province' => 'Northern Cape', 'district' => 'John Taolo Gaetsewe', 'seat' => 'Kuruman', 'type' => 'Local', ],
                            ['name' => 'Gamagara Local Municipality', 'code' => 'NC453', 'province' => 'Northern Cape', 'district' => 'John Taolo Gaetsewe', 'seat' => 'Kathu', 'type' => 'Local', ],
                            ['name' => 'Joe Morolong Local Municipality', 'code' => 'NC451', 'province' => 'Northern Cape', 'district' => 'John Taolo Gaetsewe', 'seat' => 'Mothibistad', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Namakwa',
                'code'         => 'DC6',
                'municipality' => [
                    [
                        'name'     => 'Namakwa District Municipality',
                        'code'     => 'DC6',
                        'province' => 'Northern Cape',
                        'seat'     => 'Springbok',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Hantam Local Municipality', 'code' => 'NC065', 'province' => 'Northern Cape', 'district' => 'Namakwa', 'seat' => 'Calvinia', 'type' => 'Local', ],
                            ['name' => 'Karoo Hoogland Local Municipality', 'code' => 'NC066', 'province' => 'Northern Cape', 'district' => 'Namakwa', 'seat' => 'Williston', 'type' => 'Local', ],
                            ['name' => 'Kamiesberg Local Municipality', 'code' => 'NC064', 'province' => 'Northern Cape', 'district' => 'Namakwa', 'seat' => 'Garies', 'type' => 'Local', ],
                            ['name' => 'Khâi-Ma Local Municipality', 'code' => 'NC067', 'province' => 'Northern Cape', 'district' => 'Namakwa', 'seat' => 'Pofadder', 'type' => 'Local', ],
                            ['name' => 'Nama Khoi Local Municipality', 'code' => 'NC062', 'province' => 'Northern Cape', 'district' => 'Namakwa', 'seat' => 'Springbok', 'type' => 'Local', ],
                            ['name' => 'Richtersveld Local Municipality', 'code' => 'NC061', 'province' => 'Northern Cape', 'district' => 'Namakwa', 'seat' => 'Port Nolloth', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Pixley ka Seme',
                'code'         => 'DC7',
                'municipality' => [
                    [
                        'name'     => 'Pixley ka Seme District Municipality',
                        'code'     => 'DC7',
                        'province' => 'Northern Cape',
                        'seat'     => 'De Aar',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Emthanjeni Local Municipality', 'code' => 'NC073', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'De Aar', 'type' => 'Local', ],
                            ['name' => 'Kareeberg Local Municipality', 'code' => 'NC074', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'Carnarvon', 'type' => 'Local', ],
                            ['name' => 'Renosterberg Local Municipality', 'code' => 'NC075', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'Petrusville', 'type' => 'Local', ],
                            ['name' => 'Siyancuma Local Municipality', 'code' => 'NC078', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'Douglas', 'type' => 'Local', ],
                            ['name' => 'Siyathemba Local Municipality', 'code' => 'NC077', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'Prieska', 'type' => 'Local', ],
                            ['name' => 'Thembelihle Local Municipality', 'code' => 'NC076', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'Hopetown', 'type' => 'Local', ],
                            ['name' => 'Ubuntu Local Municipality', 'code' => 'NC071', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'Victoria West', 'type' => 'Local', ],
                            ['name' => 'Umsobomvu Local Municipality', 'code' => 'NC072', 'province' => 'Northern Cape', 'district' => 'Pixley ka Seme', 'seat' => 'Colesberg', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'ZF Mgcawu',
                'code'         => 'DC8',
                'municipality' => [
                    [
                        'name'     => 'ZF Mgcawu District Municipality',
                        'code'     => 'DC8',
                        'province' => 'Northern Cape',
                        'seat'     => 'Upington',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Dawid Kruiper Local Municipality', 'code' => 'NC087', 'province' => 'Northern Cape', 'district' => 'ZF Mgcawu', 'seat' => 'Upington', 'type' => 'Local', ],
                            ['name' => 'Kai !Garib Local Municipality', 'code' => 'NC082', 'province' => 'Northern Cape', 'district' => 'ZF Mgcawu', 'seat' => 'Kakamas', 'type' => 'Local', ],
                            ['name' => 'Kgatelopele Local Municipality', 'code' => 'NC086', 'province' => 'Northern Cape', 'district' => 'ZF Mgcawu', 'seat' => 'Daniëlskuil', 'type' => 'Local', ],
                            ['name' => '!Kheis Local Municipality', 'code' => 'NC084', 'province' => 'Northern Cape', 'district' => 'ZF Mgcawu', 'seat' => 'Groblershoop', 'type' => 'Local', ],
                            ['name' => 'Tsantsabane Local Municipality', 'code' => 'NC085', 'province' => 'Northern Cape', 'district' => 'ZF Mgcawu', 'seat' => 'Postmasburg', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    ProvinceType::WESTERN_CAPE->value => [
        'code'      => config('globalSettings.province_codes.Western_Cape'),
        'districts' => [
            [
                'name'         => 'City of Cape Town',
                'code'         => 'CPT',
                'municipality' => [
                    [
                        'name'     => 'City of Cape Town Metropolitan Municipality',
                        'code'     => 'CPT',
                        'province' => 'Western Cape',
                        'seat'     => 'Cape Town',
                        'type'     => 'Metropolitan',
                    ],
                ],
            ],

            [
                'name'         => 'Cape Winelands',
                'code'         => 'DC2',
                'municipality' => [
                    [
                        'name'     => 'Cape Winelands District Municipality',
                        'code'     => 'DC2',
                        'province' => 'Western Cape',
                        'seat'     => 'Worcester',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Witzenberg Local Municipality', 'code' => 'WC022', 'province' => 'Western Cape', 'district' => 'Cape Winelands', 'seat' => 'Ceres', 'type' => 'Local', ],
                            ['name' => 'Stellenbosch Local Municipality', 'code' => 'WC024', 'province' => 'Western Cape', 'district' => 'Cape Winelands', 'seat' => 'Stellenbosch', 'type' => 'Local', ],
                            ['name' => 'Langeberg Local Municipality', 'code' => 'WC026', 'province' => 'Western Cape', 'district' => 'Cape Winelands', 'seat' => 'Ashton', 'type' => 'Local', ],
                            ['name' => 'Breede Valley Local Municipality', 'code' => 'WC025', 'province' => 'Western Cape', 'district' => 'Cape Winelands', 'seat' => 'Worcester', 'type' => 'Local', ],
                            ['name' => 'Drakenstein Local Municipality', 'code' => 'WC023', 'province' => 'Western Cape', 'district' => 'Cape Winelands', 'seat' => 'Paarl', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Central Karoo',
                'code'         => 'DC5',
                'municipality' => [
                    [
                        'name'     => 'Central Karoo District Municipality',
                        'code'     => 'DC5',
                        'province' => 'Western Cape',
                        'seat'     => 'Beaufort West',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Beaufort West Local Municipality', 'code' => 'WC053', 'province' => 'Western Cape', 'district' => 'Central Karoo', 'seat' => 'Beaufort West', 'type' => 'Local', ],
                            ['name' => 'Laingsburg Local Municipality', 'code' => 'WC051', 'province' => 'Western Cape', 'district' => 'Central Karoo', 'seat' => 'Laingsburg', 'type' => 'Local', ],
                            ['name' => 'Prince Albert Local Municipality', 'code' => 'WC052', 'province' => 'Western Cape', 'district' => 'Central Karoo', 'seat' => 'Prince Albert', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Garden Route',
                'code'         => 'DC4',
                'municipality' => [
                    [
                        'name'     => 'Garden Route District Municipality',
                        'code'     => 'DC4',
                        'province' => 'Western Cape',
                        'seat'     => 'George',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Bitou Local Municipality', 'code' => 'WC047', 'province' => 'Western Cape', 'district' => 'Garden Route', 'seat' => 'Plettenberg Bay', 'type' => 'Local', ],
                            ['name' => 'George Local Municipality', 'code' => 'WC044', 'province' => 'Western Cape', 'district' => 'Garden Route', 'seat' => 'George', 'type' => 'Local', ],
                            ['name' => 'Hessequa Local Municipality', 'code' => 'WC042', 'province' => 'Western Cape', 'district' => 'Garden Route', 'seat' => 'Riversdale', 'type' => 'Local', ],
                            ['name' => 'Kannaland Local Municipality', 'code' => 'WC041', 'province' => 'Western Cape', 'district' => 'Garden Route', 'seat' => 'Ladismith', 'type' => 'Local', ],
                            ['name' => 'Knysna Local Municipality', 'code' => 'WC048', 'province' => 'Western Cape', 'district' => 'Garden Route', 'seat' => 'Knysna', 'type' => 'Local', ],
                            ['name' => 'Mossel Bay Local Municipality', 'code' => 'WC043', 'province' => 'Western Cape', 'district' => 'Garden Route', 'seat' => 'Mossel Bay', 'type' => 'Local', ],
                            ['name' => 'Oudtshoorn Local Municipality', 'code' => 'WC045', 'province' => 'Western Cape', 'district' => 'Garden Route', 'seat' => 'Oudtshoorn', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'Overberg',
                'code'         => 'DC3',
                'municipality' => [
                    [
                        'name'     => 'Overberg District Municipality',
                        'code'     => 'DC3',
                        'province' => 'Western Cape',
                        'seat'     => 'Bredasdorp',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Cape Agulhas Local Municipality', 'code' => 'WC033', 'province' => 'Western Cape', 'district' => 'Overberg', 'seat' => 'Bredasdorp', 'type' => 'Local', ],
                            ['name' => 'Overstrand Local Municipality', 'code' => 'WC032', 'province' => 'Western Cape', 'district' => 'Overberg', 'seat' => 'Hermanus', 'type' => 'Local', ],
                            ['name' => 'Swellendam Local Municipality', 'code' => 'WC034', 'province' => 'Western Cape', 'district' => 'Overberg', 'seat' => 'Swellendam', 'type' => 'Local', ],
                            ['name' => 'Theewaterskloof Local Municipality', 'code' => 'WC031', 'province' => 'Western Cape', 'district' => 'Overberg', 'seat' => 'Caledon', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],

            [
                'name'         => 'West Coast',
                'code'         => 'DC1',
                'municipality' => [
                    [
                        'name'     => 'West Coast District Municipality',
                        'code'     => 'DC1',
                        'province' => 'Western Cape',
                        'seat'     => 'Moorreesburg',
                        'type'     => 'District',
                        'children' => [
                            ['name' => 'Bergrivier Local Municipality', 'code' => 'WC013', 'province' => 'Western Cape', 'district' => 'West Coast', 'seat' => 'Piketberg', 'type' => 'Local', ],
                            ['name' => 'Cederberg Local Municipality', 'code' => 'WC012', 'province' => 'Western Cape', 'district' => 'West Coast', 'seat' => 'Clanwilliam', 'type' => 'Local', ],
                            ['name' => 'Matzikama Local Municipality', 'code' => 'WC011', 'province' => 'Western Cape', 'district' => 'West Coast', 'seat' => 'Vredendal', 'type' => 'Local', ],
                            ['name' => 'Saldanha Bay Local Municipality', 'code' => 'WC014', 'province' => 'Western Cape', 'district' => 'West Coast', 'seat' => 'Vredenburg', 'type' => 'Local', ],
                            ['name' => 'Swartland Local Municipality', 'code' => 'WC015', 'province' => 'Western Cape', 'district' => 'West Coast', 'seat' => 'Malmesbury', 'type' => 'Local', ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
