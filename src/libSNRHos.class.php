<?php
/**
 * Biblioteca mínima para atender envios de ficha eletrônica, checkin e checkout
 * de hóspedes
 * @author Airton (about.me/airton airton@hotelpago.com.br)
 */
class libSNRHos {
    
    const   FalhaCriarSoapClient        = 1;
    const   FalhaInserirFicha           = 2;
    const   FalhaAtualizarFicha         = 3;
    const   FalhaCheckin                = 4;
    const   FalhaCheckout               = 5;
    
    
    private $chave;
    private $wsld_url = 'http://fnrhws.hospedagen.turismo.gov.br/FnrhWs/FnrhWs?wsdl';
    
    private function getSoapClient()
    {
        try{
            $soapClient = new SoapClient($this->wsld_url);
        }catch(Exception $e){
            throw new Exception('falha ao criar SoapClient msg:'.$e->getMessage(), libSNRHos::FalhaCriarSoapClient);
        }
        return $soapClient;
    }
    
    public function __construct($sandbox = false) {
        if($sandbox == true){
            $this->wsld_url = 'http://localhost:8088/mockwebservice?WSDL';
        }
    }
    
    public function setCredenciais($chave)
    {
        $this->chave = $chave;
    }
    
    public function inserirFicha($ficha)
    {
        try{
            $soapClient = $this->getSoapClient();
            $soapClient->fnrhInserir($ficha);
        }catch(Exception $e){
            throw new Exception('falha ao inserir ficha msg:' . $e->getMessage(), libSNRHos::FalhaInserirFicha);
        }
    }
    
    public function atualizarFicha($ficha)
    {
        try{
            $soapClient = $this->getSoapClient();
            $soapClient->fnrhAtualizar($ficha);
        }catch(Exception $e){
            throw new Exception('falha ao atualizar ficha msg:' . $e->getMessage(), libSNRHos::FalhaAtualizarFicha);
        }
    }
    
    public function checkin($hospede)
    {
        try{
            $soapClient = $this->getSoapClient();
            return $soapClient->fnrhCheckin($hospede);
        }catch(Exception $e){
            throw new Exception('falha ao informar checkin msg:' . $e->getMessage(), libSNRHos::FalhaCheckin);
        }
    }
    
    public function checkout($hospede)
    {
        try{
            $soapClient = $this->getSoapClient();
            $soapClient->fnrhCheckout($hospede);
        }catch(Exception $e){
            throw  new Exception('falha ao informar checkout msg:' . $e->getMessage(), libSNRHos::FalhaCheckout);
        }
    }
}
