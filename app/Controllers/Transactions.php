<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionsModel;
use CodeIgniter\HTTP\ResponseInterface;
use Error;

class Transactions extends BaseController
{
    public function register()
    {
        $session = session();

        try {
            $data['description'] = $this->request->getPost('description');
            $data['type']        = $this->request->getPost('type');
            $data['category']    = $this->request->getPost('category');
            $data['value']       = $this->request->getPost('value');
            $data['date']        = $this->request->getPost('date');

            $transactionModel = new TransactionsModel();
            $transactionModel->insert($data);

            $session->setFlashdata('flash', [
                'type'    => 'success',
                'message' => 'Transação cadastrada com sucesso!'
            ]);

            return redirect()->to('transactions');
        } catch (\Throwable $th) {
            $session->setFlashdata('flash', [
                'type'    => 'error',
                'message' => 'Erro ao cadastrar transação.'
            ]);

            return redirect()->to('transactions');
        }
    }


    public function editTransaction()
    {
        $session = session();

        try {
            $idTransaction = $this->request->getPost('idTransaction');

            $data['description'] = $this->request->getPost('description_edit');
            $data['type']        = $this->request->getPost('type_edit');
            $data['category']    = $this->request->getPost('category_edit');
            $data['value']       = $this->request->getPost('value_edit');
            $data['created_at']        = $this->request->getPost('date_edit');

            if (empty($idTransaction)) {
                $session->setFlashdata('flash', [
                    'type'    => 'error',
                    'message' => 'Erro ao editar transação.'
                ]);
                return redirect()->to('transactions');
            }

            $transactionModel = new TransactionsModel();
            $transactionModel->update($idTransaction, $data);

            $session->setFlashdata('flash', [
                'type'    => 'success',
                'message' => 'Transação editada com sucesso!'
            ]);

            return redirect()->to('transactions');
        } catch (\Throwable $th) {
            $session->setFlashdata('flash', [
                'type'    => 'error',
                'message' => 'Erro ao editar transação.'
            ]);

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
