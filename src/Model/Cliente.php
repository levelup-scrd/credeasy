<?php 

namespace Sicredi\Credeasy\Model;

/**
 * @Entity
 * @Table(name="cliente")
 */
class Cliente
{

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="bigint")
     */
    public $id;

    /**
     * @Column(type="string")
     */
    public $nome;
    
    /**
     * @Column(type="string")
     */
    public $cpf;

    /**
     * @Column(type="bigint")
     */
    public $telefone;

    /**
     * @Column(type="string")
     */
    public $endereco;

    /**
     * @Column(type="string")
     */
    public $profissao;

    /**
     * @Column(type="decimal", precision=10, scale=2)
     */
    public $renda;
    
    /**
     * @Column(type="string")
     */
    public $email;

    /**
     * @Column(type="string")
     */
    public $senha;

    /**
     * @Column(type="string", name="tipo_usuario")
     */
    public $tipoDeUsuario;

    public function __construct(string $nome, string $cpf, string $telefone, string $endereco, string $profissao, float $renda, string $email, string $senha, string $tipoDeUsuario = 'CLIENTE') {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->renda = $renda;
        $this->endereco = $endereco;
        $this->profissao = $profissao;
        $this->telefone = $telefone;
        
        $this->email = $email;
        $this->senha = $senha;
        $this->tipoDeUsuario = $tipoDeUsuario;
    }

    
}
