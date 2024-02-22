<?php
class Client
{
    // Atributos/Propriedades
    private string $cpf;
    private string $fullname;
    private string $phone;
    private bool $status;
    private array $fillable;

    // Métodos
    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
        $this->fillable = ['fullname', 'phone', 'status'];
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value): void
    {
        if (in_array($attribute, $this->fillable))
            $this->$attribute = $value;
    }

    public function __toString()
    {
        $clientStatus = ($this->status) ? 'Ativo' : 'Inativo';
        return 'Nome: ' . $this->fullname . "\n" . 'CPF: ' . $this->cpf . "\n" . 'Telefone: ' . $this->phone . "\n" . 'Status: ' . $clientStatus;
    }
}
