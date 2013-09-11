<?php
/**
 * Mensagem para informar checkout realizado
 * @author Airton (about.me/airton airton@hotelpago.com.br)
 */
namespace libSNRHos;

class msgCheckout implements Mensagem{
    
    private $msg;
    
    public function __construct() {
        
    }
    
    public function setChaveAcesso($chave){
        $this->msg['chaveAcesso'] = $chave;
    }
    
    /** identificação da ficha de registro de hóspede para realizar checkin
     * @param string $numeroficha
     */
    public function setFicha($numeroFicha)
    {
        $this->msg['snNum'] = $numeroFicha;
    }
    /**
     * Data hora em formato americano do checkout
     * @param Data aaaa-MM-ddTHH:mm:ss $dataHora
     */
    public function setDataCheckout($dataHora)
    {
        $this->msg['dataCheckout']=$dataHora;
    }
    
    /** 
     * Retorna mensagem para envio em array
     * @return array
     */
    public function getMensagem()
    {
        return $this->msg;
    }
}
