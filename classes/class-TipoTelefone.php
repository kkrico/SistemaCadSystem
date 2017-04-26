<?php

/**
 * Classe abstrata que contem os tipos de telefone
 *
 *
 * @version 1.0
 * @author dframos
 */
abstract class TipoTelefone extends BasicEnum
{
    const Celular = 0;
    const Comercial = 1;
    const Recado = 2;
    const Residencial = 3;
}