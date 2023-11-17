<?php

namespace App\Http\Controllers\Portfolio;

use App\Models\Transaction;
use Inertia\Inertia;

use function Termwind\render;

class ListPortfolioAction
{
    public function __invoke()
    {
        $transactions = Transaction::orderBy('created_at')->paginate(5);

        return Inertia::render('Portfolio/List', ['transactions' => $transactions]);
    }
}