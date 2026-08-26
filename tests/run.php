<?php
declare(strict_types=1);
require_once __DIR__ . '/../src/RegistrationValidator.php';

$valid = [
 'correo'=>'usuario@example.com','clave'=>'abcd','clave_repe'=>'abcd','nombre'=>'Ana Pérez',
 'calle'=>'Rúa Nova','numero'=>'12','piso'=>'2º A','poblacion'=>'Santiago','provincia'=>'1',
 'codigo_postal'=>'15701','estado_civil'=>'s','fecha_nacimiento'=>'1990-05-20',
 'web'=>'https://example.com','temas'=>['Música']
];
function expect(bool $condition,string $message):void{if(!$condition){fwrite(STDERR,"FAIL: $message\n");exit(1);}echo "OK: $message\n";}
expect(RegistrationValidator::validate($valid)===[], 'valid submission');
$bad=$valid;$bad['correo']='x';expect(isset(RegistrationValidator::validate($bad)['correo']),'invalid email rejected');
$bad=$valid;$bad['clave_repe']='different';expect(isset(RegistrationValidator::validate($bad)['clave_repe']),'password mismatch rejected');
$bad=$valid;$bad['fecha_nacimiento']='2999-01-01';expect(isset(RegistrationValidator::validate($bad)['fecha_nacimiento']),'future birth date rejected');
$bad=$valid;$bad['temas']=[];expect(isset(RegistrationValidator::validate($bad)['temas']),'topic required');
