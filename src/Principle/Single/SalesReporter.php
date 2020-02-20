<?php namespace Acme\Principle\Single;

use Acme\Principle\Single\Repository\SalesRepository;

//this is the refactored - single responsibility
class SalesReporter
{
    /**
     * Property $repo Repo
     */
    private $repo;

    /**
     * Method initialize
     *
     * @param SalesRepository $repo Repo
     *
     * @return mixed
     */
    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Method between
     *
     * @param string $startDate Data
     * @param string $endDate Data
     * @param SalesOutputInterface $formatter Data
     *
     * @return mixed
     */
    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
        $sales = $this->repo->between($startDate, $endDate);

        return $formatter->output($sales);
    }
}



//this is original class - not refactored thru single responsibility pattern yet
// class SalesReporter
// {
//     public function between($startDate, $endDate)
//     {
//         //perform authentication  -- should remove all
// from this class cause it is not responsible for checking authentication
//         // if (! Auth::check()) {
//         //     throw new exception('authentication is required');
//         // }

//         //get sales from db
//         $sales = $this->queryDBForSalesBetween($startDate, $endDate);
//         //return results

//         return $this->format($sales);
//     }

//     protected function queryDBForSalesBetween($startDate, $endDate)
//     {
//         return '45';
//         //this is as getting from DB
//         //return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
//     }

//     protected function format($sales)
//     {
//         return "<h1>Sales:$sales</h1>";
//     }
// }
