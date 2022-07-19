<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
El presente sistema permite tener una mejor administración de las inversiones y ganancias para los managers e inversionistas de axie infinity, así como llevar un mejor control de las billeteras de los usuarios para facilitar los pagos.
El sistema permite registrar las ganancias, las inversiones, y las billeteras de todos los inversionistas o managers, y hace una conversión automatica del monto equivalente en dolares o en SLP respectivamente.

para registrar la ganancia se puede especificar la moneda (SLP, AXS, RON) proveniente de axie infinity, y el sistema la convertirá automaticamente a dolares estadounidenses a la tasa de DolarToday, dividiendo la cantidad correspondiente para cada manager, y mostrandola en dolares, a la vez que sumará cada ganancia para mostrar un total generado a lo largo del tiempo y así facilitar el calculo del ROI. El sistema tambien facilita el control del dinero retirado enviado a alguna billetera y el dinero aún disponible en el ecosistema de axie infinity, mediante el boton "RETIRAR" que indicará cuando la ganancia fué retirada, sin embargo ésta permanecerá en el historial de ganancias para mostrar un total neto generado dentro de axie infinity.

Para registrar las inversiones se puede especificar la moneda de entre SLP, o DOLARES, y el sistema mostrará el equivalente en la moneda contraria (si la inversión es en SLP, el sistema mostrará el equivalente de la inversión en dolares. Si la inversión fué en dolares, el sistema mostrará el equivalente de dicha inversión en SLP)

Se pueden registrar las cuentas de las billeteras de los usuarios registrados y copiarlas con un solo click. Tambien se puede editar, eliminar, o actualizar alguna dirección