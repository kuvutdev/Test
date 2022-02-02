# JS

Dado el formulario siguiente crear las funcionalidades requeridas.
Se valorará el hecho de usar vue, pero se puede usar librerias o frameworks que quieras.

## Validación de inputs

Cada input debe validarse antes una vez se clica fuera de él (blur) y antes de enviar el formulario.
En caso de error saldrá un mensaje debajo de cada input con información.

Validaciones:
- nombre: mínimo 5 carácteres
- email: email valido
- imagen: debe tener 1 imagen seleccionada
- tipo: debe tener 1 tipo seleccionado
- comentario: debe tener un texto
- checklegales: debe estar seleccionado

![Errores](errores.png)

## Imagen

Una vez se selecciona una imagen esta debe previsualizarse debajo del input.

![Imagen](imagen.png)

## Aviso

Ocultar el aviso y solo mostrarlo en caso de error al enviar el formulario.

## Botones

### Borrar

Al clicar el boton borrar deben resetearse todos los datos del formulario.

### Enviar

Al clickar en el boton enviar se comprueban todos los inputs y si todo es correcto se hace un submit del formulario al siguiente endpoint pasando los parametros como json:

```curl 
https://api.test.kuvut.com/test/submit
```

#### params:
- name: string
- email: string
- image: base64 image (ex: base64,/9j/4AAQSkZJRgABAQEASABIAAD/4gxYSUNDX1BST0ZJTEUAAQEAAAxITGlubwIQAABtbnRyUkdCIFhZWiAHzgACAAkABgAxAABhY3NwTVNGVAAAAABJRUMgc1JHQgAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLUhQICAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABFjcHJ0AAABUAAAADNkZXNjAAABhAAAAGx3dHB0AAAB8AAAABRia3B0AAACBAAAABRyWFlaAAACGAAAABRnWFlaAAACLAAAABRiWFlaAAACQAAAABRkbW5kAAACVAAAAHBkbWRkAAACxAAAAIh2dWVkAAADTAAAAIZ2aWV3AAAD1AAAACRsdW1pAAAD+AAAABRtZWFzAAAEDAAAACR0ZWNoAAAEMAAAAAxyVFJDAAAEPAAACAxnVFJDAAAEPAAACAxiVFJDAAAEPAAACAx0ZXh0AAAAAENvcHlyaWdodCAoYykgMTk5O)
- type: string
- comment: string
- legals: bool



## SUBMIT

En caso que la respuesta sea correcta mostrar los datos en pantalla.
Ocultar el formulario y mostrar los datos.

![Imagen](showsuccess.png)

En caso de respuesta incorrecta mostrar el error en pantalla (titulo y codigo).
El boton cerrar debe ocultar el aviso.

![Imagen](showerror.png)
