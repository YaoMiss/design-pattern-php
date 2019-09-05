<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019/8/28
 * Time: 15:26
 */

namespace App\FluentInterface;

class Sql
{
    /** @var array */
    private $fields = array();

    /** @var array */
    private $from = array();

    /** @var array */
    private $where = array();

    public function select(array $fields): Sql
    {
        $this->fields = $fields;

        return $this;
    }

    public function from(string $table, string $alias = null): Sql
    {
        if ($alias) {
            $this->from[] = $table . ' AS ' . $alias;
        } else {
            $this->from[] = $table;
        }

        return $this;
    }

    public function where(string $condition): Sql
    {
        $this->where[] = $condition;

        return $this;
    }

    public function __toString()
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND', $this->where)
        );
    }
}
