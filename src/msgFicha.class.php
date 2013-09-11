<?php
/**
 * Mesagem de Entrada, ficha de registro do hóspede
 * @author Airton (about.me/airton airton@hotelpago.com.br)
 */
namespace libSNRHos;

class msgFicha implements Mensagem{
    
    const   MotivoLazerFerias       =1;
    const   MotivoNegocios          =2;
    const   MotivoCongressoFeira    =3;
    const   MotivoParentesAmigos    =4;
    const   MotivoEstudosCursos     =5;
    const   MotivoReligiao          =6;
    const   MotivoSaude             =7;
    const   MotivoCompras           =8;
    const   MotivoOutro             =9;
    
    const   TransporteAviao         =1;
    const   TransporteAutomovel     =2;
    const   TransporteOnibus        =3;
    const   TransporteMoto          =4;
    const   TransporteNavio         =5;
    const   TransporteTrem          =6;
    const   TransporteOutro         =7;
    
    private $msg;
    
    public function __construct() {
        
    }
    
    public function setChaveAcesso($chave)
    {
        $this->msg['chaveAcesso'] = $chave;
    }
    
    public function setCpf($cpf)
    {
        $this->msg['fnrh']['snnumcpf'] = $cpf;
    }
    
    public function setTipoDocumento($tipo)
    {
        
    }
    
    public function setNumeroDocumento($numero)
    {
        
    }
    
    public function getMensagem(){
        return $this->msg;
    }
}

