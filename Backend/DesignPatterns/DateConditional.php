<?php
namespace DesignPatterns;
/**
 * @author Olin Gallet
 * @date 10/22/2014
 *
 * A DateConditional is a design pattern used to provide a conditional check passable as an object.
 * The interface is used to accept or reject Dates.
 */
interface DateConditional{
    public function accept($date);
}
?>