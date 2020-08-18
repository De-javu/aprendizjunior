1)## Iniciamos con las creacion del proyecto 

*********************************************************************************************
2)## Instalamos que exige la autenticacion con este comando:
composer requiere laravel/ui 
*********************************************************************************************
3)## instalamos el paquete de bootstrap las cual nos ayudara co el entorno grafico:
php artisan ui bootstrap –-auth
npm install
npm run dev
*********************************************************************************************
4)## Creamos la la conexion con la base de datos, configuramos nuestra app con la base 
*********************************************************************************************
5)## hacemos una migracion para probar la base:
 php artisan migatre
*********************************************************************************************
6)## ahora vamos a configurar la base para la creacion de un campo adicional como el apellido: en el la tabla de migracion de User.
*********************************************************************************************
7)## hacemos un refresh para pasar a la base de datos:
 php artisan migrate:refresh
*********************************************************************************************
8)## ubicamos el archivo register.blade.php , en este archivo clonamos la vista de nombre para usar la en el  apelledo.
*********************************************************************************************
9)## ahora vamos a RegistrerController.php actualizamos los campos por los que estamos utilizando para nuestro formilario de registro 
*********************************************************************************************
10)## rn rl archivo User.php  modificamos protected $fillable actualizamos los campos co losdel registroi que se va utilizar de lo contrario no genera el registro en nuestra base.
********************************************************************************************  

