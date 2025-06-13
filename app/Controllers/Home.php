<?php

namespace App\Controllers;

use App\Models\TransactionsModel;

class Home extends BaseController
{


    public function index()
    {
        $TransactionsModel = new TransactionsModel();


        $transactionsFiltered = session()->getFlashdata('transactionsFiltered');

        if ($transactionsFiltered) {
            $dataTransactions = $transactionsFiltered;
        } else {
            $dataTransactions = $TransactionsModel->findAll();
        }

        $allRevenues = $TransactionsModel->where('type', 'Receita')->findAll();
        $data['totalRevenues'] = array_reduce($allRevenues, function ($carry, $item) {
            return $carry + $item['value'];
        }, 0);

        $allExpenses = $TransactionsModel->where('type', 'Despesa')->findAll();
        $data['totalExpenses'] = array_reduce($allExpenses, function ($carry, $item) {
            return $carry + $item['value'];
        }, 0);

        $data['currentBalance'] = $data['totalRevenues'] - $data['totalExpenses'];

        $data['transactions'] = $dataTransactions;

        echo view('templates/header');
        echo view('transactions/transactions', $data);
        echo view('templates/footer');
    }
}
