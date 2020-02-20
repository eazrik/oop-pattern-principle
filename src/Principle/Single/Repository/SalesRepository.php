<?php namespace Acme\Principle\Single\Repository;

class SalesRepository
{
    /**
     * Method between
     *
     * @param string $startDate Data
     * @param string $endDate Data
     *
     * @return mixed
     */
    public function between($startDate, $endDate)
    {
        return '45';
        //this is as getting from DB
        //return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
}
