<?php

namespace App\Controllers;

use App\Models\TransactionsModel;

class Home extends BaseController
{


    public function index()
    {
        $TransactionsModel = new TransactionsModel();

        $dataTransactions = $TransactionsModel->findAll();

        $data['transactions'] = $dataTransactions;

        echo view('templates/header');
        echo view('transactions/transactions', $data);
        echo view('templates/footer');
    }
}
