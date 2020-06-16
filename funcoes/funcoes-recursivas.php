<?php

    $hierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'subordinados' => array(
                //INICIO: DIRETOR COMERCIAL
                array(
                    'nome_cargo' => 'Diretor comercial',
                    'subordinados' => array(
                        //INICIO: GERENTE DE VENDAS
                        array(
                            'nome_cargo' => "Gerente de vendas"
                        )
                        //FIM: GERENTE DE VENDAS
                    )
                ),
                //FIM: DIRETOR COMERCIAL 
                //INICIO: DIRETOR FINANCEIRO       
                array(
                    'nome_cargo'=>'Diretor Financeiro',
                    'subordinados'=>array(
                        //INICIO: GERENTE DE COMPRAS
                        array(
                            'nome_cargo'=>'Gerente de compras',
                            'subordinados'=>array(
                                array(
                                    'nome_cargo'=>'Supervisor de suprimentos'
                                )        
                            )
                            
                        ),
                        //FIM: GERENTE DE COMPRAS    
                        //INICIO: GERENTE FINANCEIRO
                        array(
                            'nome_cargo'=>'Gerente Financeiro',
                            'subordinados'=>array(
                                array(
                                    'nome_cargo'=>'Supervisor de contas a pagar'
                                )
                            )
                        )
                        //FIM: GERENTE FINANCEIRO    
                    )
                )
                //FIM: DIRETOR FINANCEIRO
                
            )
        )
    );

    function exibe ($cargos){
        $html = '<ul>';

        foreach ($cargos as $cargo) {
            $html .= '<li>';

            $html .= $cargo['nome_cargo'];
            
            if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                $html .= exibe($cargo['subordinados']);
            }
            
            $html .= '</li>';
        }

        $html .= '</ul>';
        
        return $html;
    }

    echo exibe($hierarquia);
?>