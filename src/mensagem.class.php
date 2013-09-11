<?php
/**
 * Interface básica de mensagem
 * @author Airton (about.me/airton airton@hotelpago.com.br)
 */
namespace libSNRHos;

interface Mensagem {
    public function setChaveAcesso($chave);
    public function getMensagem();
}
