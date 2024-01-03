<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        // get data product
        $model = new ProductModel();
        // pagination
        $data['product'] = $model->paginate(10, 'product');


        // return view dashboard
        return view('dashboard', $data);
    }

    // add function addProduct
    public function addProduct()
    {
        // return view add product
        return view('product/add');
    }

    // store product
    public function storeProduct()
    {
        helper(['form']);
        $data = [];
        $model = new ProductModel();

        // validation input
        if ($this->validate($model->getValidationRules())) {
            $product = [
                'name' => $this->request->getVar('name'),
                'price' => $this->request->getVar('price'),
                // get image file
                'image' => $this->request->getFile('image'),
                'category' => $this->request->getVar('category'),
                'stock' => $this->request->getVar('stock'),
            ];
            // randomname image
            $newName = $product['image']->getRandomName();
            // move image to folder
            $product['image']->move('storage', $newName);
            // set new name image
            $product['image'] = $newName;
            $model->save($product);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            return view('product/add', $data);
        }
    }

    // edit product
    public function editProduct($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('product/edit', $data);
    }

    // update product
    public function updateProduct($id)
    {
        helper(['form']);
        $model = new ProductModel();
        // get data product
        $data = $model->find($id);
        // validation input
        if ($this->validate($model->getValidationRules())) {
            $product = [
                'name' => $this->request->getVar('name'),
                'price' => $this->request->getVar('price'),
                // get image file
                'image' => $this->request->getFile('image'),
                'category' => $this->request->getVar('category'),
                'stock' => $this->request->getVar('stock'),
            ];
            // check image not empty
            if ($product['image']->getName() !== '') {
                // randomname image
                $newName = $product['image']->getRandomName();
                // move image to folder
                $product['image']->move('storage', $newName);
                // set new name image
                $product['image'] = $newName;
                // delete old image
                unlink('storage/' . $data['image']);
            } else {
                // set old image
                $product['image'] = $data['image'];
            }
            $model->update($id, $product);
            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            return view('product/edit', $data);
        }
    }

    // delete product
    public function deleteProduct($id)
    {
        $model = new ProductModel();
        $data = $model->find($id);
        // delete image
        unlink('storage/' . $data['image']);
        $model->delete($id);
        return redirect()->to('/');
    }
}
