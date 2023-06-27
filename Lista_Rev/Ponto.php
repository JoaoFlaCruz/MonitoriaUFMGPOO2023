<?php

class Ponto
{
    protected DateTime $horaInicio;
    protected DateTime $horaInicioAlmoco;
    protected DateTime $horaFimAlmoco;
    protected DateTime $horaFim;

    public function registraInicio(DateTime $pDataHora)
    {
        $this->horaInicio = $pDataHora;
    }

    public function registraInicioAlmoco(DateTime $pDataHora)
    {
        $this->horaInicioAlmoco = $pDataHora;
    }

    public function registraFimAlmoco(DateTime $pDataHora)
    {
        $this->horaFimAlmoco = $pDataHora;
    }

    public function registraFim(DateTime $pDataHora)
    {
        $this->horaFim = $pDataHora;
    }

    public function imprimePonto()
    {
        echo $this->horaInicio->format("d/m/Y H:i:s") . "\n";
        echo $this->horaInicioAlmoco->format("d/m/Y H:i:s") . "\n";
        echo $this->horaFimAlmoco->format("d/m/Y H:i:s") . "\n";
        echo $this->horaFim->format("d/m/Y H:i:s") . "\n";
    }
}