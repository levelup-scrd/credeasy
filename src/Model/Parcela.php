<?php
namespace Sicredi\Credeasy\Model;

use DateTimeImmutable;
use Sicredi\Credeasy\Model\Emprestimo;

/**
 * @Entity
 * @Table(name="parcela")
 */
class Parcela {

    /**
     * @Id
     * @GeneratedValue
     * @Column(type="bigint")
     */
    public $id;

    /**
     * @Column(type="bigint")
     */
    public $numero;

    /**
     * @Column(type="decimal", precision=10, scale=2)
     */
    public $valor;

    /**
     * @Column(type="date", name="data_vencimento")
     */
    public $dataDeVencimento;
    
    /**
     * @Column(type="decimal", precision=10, scale=2)
     */
    public $multa;

    /**
     * @Column(type="decimal", precision=10, scale=2, name="valor_pago")
     */
    public $valorPago;
    
    /**
     * @Column(type="string")
     */
    public $status;
    
    /**
     * @ManyToOne(targetEntity="Emprestimo")
     * @JoinColumn(name="emprestimo_id", referencedColumnName="id")
     */
    public $emprestimo;

    public function __construct(int $numero, float $valor, DateTimeImmutable $dataDeVencimento, Emprestimo $emprestimo, float $multa = 0)
    {
        $this->numero = $numero;
        $this->valor = $valor;
        $this->multa = $multa;
        $this->dataDeVencimento = $dataDeVencimento;
        $this->emprestimo = $emprestimo;
        $this->status = "ABERTA";
    }
    
}