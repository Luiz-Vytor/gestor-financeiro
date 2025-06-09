<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionsModel;
use CodeIgniter\HTTP\ResponseInterface;

class Transactions extends BaseController
{
    public function register()
    {
        try {
            $data['description'] = $this->request->getPost('description');
            $data['type'] = $this->request->getPost('type');
            $data['category'] = $this->request->getPost('description');
            $data['value'] = $this->request->getPost('value');
            $data['date'] = $this->request->getPost('date');

            $transactionModel = new TransactionsModel();
            $transactionModel->insert($data);

            return redirect()->to('transactions');
        } catch (\Throwable $th) {
            return redirect()->to('transactions');
        }
    }

    public function delete()
    {
        try {
            $idTransaction = $this->request->getGet('id');

            $transactionModel = new TransactionsModel();
            $transactionModel->delete($idTransaction);

            return redirect()->to('transactions');
        } catch (\Throwable $th) {
            return redirect()->to('transactions');
        }
    }
}
