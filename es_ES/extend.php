<?php

return array(

	'extend' => 'Extensiones',

	'fields' => 'Campos personalizables',
	'fields_desc' => 'Crea campos adicionales',

	'variables' => 'Variables del sitio',
	'variables_desc' => 'Crear metadatos adicionales',

	'create_field' => 'Crear un nuevo campo',
	'editing_custom_field' => 'Editar campo &ldquo;%s&rdquo;',
	'nofields_desc' => 'Aún no hay ningún campo :(',

	'create_variable' => 'Crear una nueva variable',
	'editing_variable' => 'Editar variable &ldquo;%s&rdquo;',
	'novars_desc' => 'Aun no hay ninguna variable :(',

	// form fields
	'type' => 'Tipo',
	'type_explain' => 'El tipo de contenido al que quieres añadir a este campo.',

	'field' => 'Campo',
	'field_explain' => 'Tipo de entrada html',

	'key' => 'Llave única',
	'key_explain' => 'Llave única para este campo',
	'key_missing' => 'Por favor, escribe una llave única',
	'key_exists' => 'La llave única ya está en uso',

	'label' => 'Etiqueta',
	'label_explain' => 'Nombre legible por personas del campo',
	'label_missing' => 'Por favor, escribe una etiqueta',

	'attribute_type' => 'Tipos de archivo',
	'attribute_type_explain' => 'Lista separada por comas con los tipos de archivos aceptados (vacío para aceptar todos)',

	// images
	'attributes_size_width' => 'Anchura máxima de imagen',
	'attributes_size_width_explain' => 'Las imagenes se escalaran si son más grandes que el tamaño máximo',

	'attributes_size_height' => 'Longitud máxima de imagen',
	'attributes_size_height_explain' => 'Las imagenes se escalaran si son más grandes que el tamaño máximo',

	// custom vars
	'name' => 'Nombre',
	'name_explain' => 'Un nombre único',
	'name_missing' => 'Por favor, escribe un nombre único',
	'name_exists' => 'El nombre está ya en uso',

	'value' => 'Valor',
	'value_explain' => 'Los datos que quieres almacenar (hasta 64kb)',
	'value_code_snipet' => 'Fragmento a insertar en tu plantilla:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'Tu variable ha sido creada',
	'variable_updated' => 'Tu variable ha sido actualizada',
	'variable_deleted' => 'Tu variable ha sido borrada',

	'field_created' => 'Tu campo ha sido creado',
	'field_updated' => 'Tu campo ha sido actualizado',
	'field_deleted' => 'Tu camopo ha sido borrado'

);
