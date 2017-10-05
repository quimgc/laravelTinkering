#LARAVEL

front-controller és l'index.php. És quan sempre s'executa el mateix fitxer i ell decideix a quina vista accedir.

**SPA** -> Single Page Application

**public** és la única carpeta que es publica al servidor web, ja que els clients han de poder accedir.

La següent comanda mostra totes les rutes que s'estan executant:

    php artisan route:list

Si es fa un error de sintaxis al fitxer web.php, peta tot el Laravel.

La equivalència de:
    
    php -S localhost:8000
    
és:

    php artisan serve

Per crear un controlador:

    php artisan make:controller nameController
    
Per crear una migració:

    php artisan make:migration
    
Per migrar tots els fitxers:

    php artisan migrate    


php artisan tinker serveix per "jugar" amb la terminal i fer proves directament sense haver de passar pel navegador.