<?php

$hierarquia = array(

	array(
		'nome_cargo'=>'CEO',
		'subordinados' => array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)

					//Termino: Gerente Vendas			
				)

		),

		//Termino: Diretor Comercial
		//Inicio: Diretor Financeiro

		array(
			'nome_cargo'=>'Diretor Financeiro',
			'subordinados'=>array(
				//Inicio: Gerente de contas a pagar
				array(
					'nome_cargo'=>'Gerente de contas a pagar',
					'subordinados'=>array(
						//Inicio: Supervisor de pagamentos
						array(
							'nome_cargo'=>'Supervisor de Pagamentos'
							)

							//Termino: Supervisor de pagamentos

						)

					),

					// Termino: direto financeiro
					// Inicio: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
								//Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(

									array(
										'nome_cargo'=>'Supervisor Pedidos'
									)

								)
							)

						)
					)

				)


			)
		)

	)

);

function exibe($cargos){

	$html = '<ul>';

	foreach($cargos as $cargo){

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";

	}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);


?>