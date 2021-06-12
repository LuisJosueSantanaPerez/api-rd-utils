<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Dominican Republic Utils

## Datos Demarcaciones y Provincias para Republica Dominicana

REST API sin autenticacion orientado a microservicios.

Instalar localmente:

-   Composer Install
-   cp .env.example .env
-   php artisan key:generate
-   php artisan migrate --seed

<hr>

## API:

#### Paises

-   Listado de paises:  
    `Type: GET`  
    `URL: http://api-url.com/api/paises/getAll `

-   Obtener un pais:  
    `Type: GET`  
    `URL: http://api-url.com/api/paises/getOne `  
    `Parameter: country_id | Country ID | Obligatorio `

-   Buscar paises:  
    `Type: GET`  
    `URL: http://api-url.com/api/paises/search `  
    `Parameter: busqueda | Parametro de busqueda | Obligatorio `

<hr>

#### Provincias

-   Listado de provincias:  
    `Type: GET`  
    `URL: http://api-url.com/api/provincias/getAll `

-   Obtener una provincia:  
    `Type: GET`  
    `URL: http://api-url.com/api/provincias/getOne `  
    `Parameter: province_code | Province Code | Obligatorio `

-   Buscar provincias:  
    `Type: GET`  
    `URL: http://api-url.com/api/provincias/search `  
    `Parameter: busqueda | Parametro de busqueda | Obligatorio `

-   Listar provincias por Pais:  
    `Type: GET`  
    `URL: http://api-url.com/api/provincias/byCountry `  
    `Parameter: country_id | Country ID | Obligatorio `

<hr>

#### Municipios

-   Listado de municipios:  
    `Type: GET`  
    `URL: http://api-url.com/api/municipios/getAll `

-   Obtener un municipio:  
    `Type: GET`  
    `URL: http://api-url.com/api/municipios/getOne `  
    `Parameter: municipality_code | Municipality Code | Obligatorio `

-   Buscar municipios:  
    `Type: GET`  
    `URL: http://api-url.com/api/municipios/search `  
    `Parameter: busqueda | Parametro de busqueda | Obligatorio `

-   Listar municipios por Provincias:  
    `Type: GET`  
    `URL: http://api-url.com/api/municipios/byProvince `  
    `Parameter: province_code | Province Code | Obligatorio `

<hr>

#### Sectores

-   Listado de sectores:  
    `Type: GET`  
    `URL: http://api-url.com/api/sectores/getAll `

-   Obtener un sector:  
    `Type: GET`  
    `URL: http://api-url.com/api/sectores/getOne `  
    `Parameter: sector_code | Sector Code | Obligatorio `

-   Buscar sectores:  
    `Type: GET`  
    `URL: http://api-url.com/api/sectores/search `  
    `Parameter: busqueda | Parametro de busqueda | Obligatorio `

-   Listar sectores por Municipios:  
    `Type: GET`  
    `URL: http://api-url.com/api/sectores/byMunicipality `  
    `Parameter: municipality_code | Municipality Code | Obligatorio `
