<?php

function getLoginRules() {
	return array(
        array(
			'field' => 'username',
			'label' => 'Usuario',
			'rules' => 'required|trim|min_length[5]',
			'errors' => array(
				'required' => 'Debe ingresar un %s válido.',
			),
        ),
        array(
			'field' => 'password',
			'label' => 'Contraseña',
			'rules' => 'required|min_length[8]',
			'errors' => array(
				'required' => 'La %s es requerida.',
			),
        ),
	);
}
