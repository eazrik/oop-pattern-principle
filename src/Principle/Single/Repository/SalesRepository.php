<?php namespace Acme\Principle\Single\Repository;

class SalesRepository
{
    public function between($startDate, $endDate)
    {
        return '45';
        //this is as getting from DB
        //return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
}
