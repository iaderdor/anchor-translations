<?php

return array(

	'users' => 'Usuarios',

	'create_user' => 'Crear nuevo usuario',
	'add_user' => 'Añade un nuevo usuarior',
	'editing_user' => 'Editando el perfil de %s ',
	'remembered' => 'Conozco mi contraseña',
	'forgotten_password' => '¿Has olvidado tu contraseña?Forgotten your password?',

	// roles
	'administrator' => 'Administrador',
	'administrator_explain' => '',

	'editor' => 'Editor',
	'editor_explain' => '',

	'user' => 'Usuario',
	'user_explain' => '',

	// form fields
	'real_name' => 'Nombre real',
	'real_name_explain' => '',

	'bio' => 'Biografía',
	'bio_explain' => '',

	'status' => 'Estado',
	'status_explain' => '',

	'role' => 'Rol',
	'role_explain' => '',

	'username' => 'Nombre de usuario',
	'username_explain' => '',
	'username_missing' => 'Por favor, introduce un nombre de usuario. Debe tener al menos %s caracteres',

	'password' => 'Contraseña',
	'password_explain' => '',
	'password_too_short' => 'La contrasela debe contener al menos %s caracteres',

	'new_password' => 'Nueva contraseña',

	'email' => 'Email',
	'email_explain' => '',
	'email_missing' => 'Por favor, introduce una dirección de email válida',
	'email_not_found' => 'Perfil no encontrado.',

	// messages
	'updated' => 'Perfil de usuario actualizado.',
	'created' => 'Perfil de usuario creado.',
	'deleted' => 'Perfil de usuario borrado.',
	'delete_error' => 'No puedes borrar tu propio perfil',
	'login_error' => 'Nombre de usuario o contraseña incorrectos.',
	'logout_notice' => 'Acabas de cerrar sesión.',
	'recovery_sent' => 'Te acabamos de enviar un email para confirmar el cambio de contraseña.',
	'recovery_expired' => 'El identificador de recuperación de contraseña ha expirado. Por favor, inténtalo otra vez.',
	'password_reset' => 'Tu nueva contraseña ha sido actualizada. Inicia sesión ahora.',

	// password recovery email
	'recovery_subject' => 'Restauración de contraseña',
	'recovery_message' => 'Acabas de pedir restaurar tu contraseña.' .
		'Para continuar, sigue el siguiente link.' . PHP_EOL . '%s',

);
