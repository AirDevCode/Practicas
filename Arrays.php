<?php
$medicos = [
    [
    'codigo' => '101',
    'especialista' => 'DR. MANUEL CAMARGO',
    'especialidad' => 'CARDIOLOGIA',
    'valor_cons' => '32.000'
    ],
    [
    'codigo' => '102',
    'especialista' => 'DR. MAURICIO ROJAS',
    'especialidad' => 'ODONTOLOGIA',
    'valor_cons' => '25.000'
    ],
    [
    'codigo' => '103',
    'especialista' => 'DR. CARLOS OROZCO',
    'especialidad' => 'OFTALMOLOGIA',
    'valor_cons' => '22.000'
    ]
];
for($m = 0;$m < count($medicos);$m++){
    echo '<p><strong> '. $medicos[$m]['codigo'] . ' </strong>' . $medicos[$m]['especialidad'] . '</p>';
 }

 $doctores = [
     '101'=> 'DR. MANUEL CAMARGO, CARDIOLOGIA, 32.000 ',
     '102'=> 'DR. MAURICIO ROJAS, ODONTOLOGIA, 25.000 ',
     '103'=> 'DR. CARLOS OROZCO, OFTALMOLOGIA, 22.000 ',
     '104' => '24.000'
 ];

 foreach ($doctores as $doctor => $atributos) 
 {
     if ($doctor == '104'){
        echo 'DRA. CARLA GONZALES, PEDIATRIA, ';
     }

     
     echo $doctor . ": " . $atributos;
 }