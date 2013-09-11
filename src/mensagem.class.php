<?php
/**
 * Interface básica de mensagem
 *
 * @author Airton
 */
namespace libSNRHos;

interface Mensagem {
    public function setChaveAcesso($chave);
    
    public function getMensagem();
}


