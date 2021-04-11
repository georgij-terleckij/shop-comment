<?php

namespace App\Controller;

use App\Model\Comment;
use App\Model\Product;
use Illuminate\Http\RedirectResponse;

class ProductController
{
    public function index()
    {
        $table = 'product';
        $products = Product::all();
        return view('product/index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $appraisal = 0;
        foreach ($product->comments as $comment) {
            $appraisal = ($comment->appraisal == 0) ? $comment->appraisal : round(($comment->appraisal + $appraisal) / 2);
        }
        return view('product/show', compact('product','appraisal'));
    }

    public function create()
    {
        return view('product/create');
    }

    public function store()
    {
        $data = request()->all();
        $validator = validator()->make($data, [
            'name' => ['required'],
            'user_name' => ['required'],
            'text' => ['required']
        ]);

        if (count($error = $validator->errors()) > 0) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }
        $product = new Product();
        $product->name = $data['name'];
        $product->img = '';
        $product->user_name = $data['user_name'];
        $product->price = $data['price'];
        if ($product->save()) {
            if (isset($_FILES['img']['name'])) {
                $fileFormats = ['image/jpeg', 'image/png', 'image/gif'];
                $uploaddir = '/public/img/';
                $tempName = explode('.', $_FILES['img']['name']);
                $tempName = time() . '.' . $tempName[1];
                $uploadfile = $uploaddir . $tempName;
                if (!in_array($_FILES['img']['type'], $fileFormats)) ;
                if (move_uploaded_file($_FILES['myFile']['tmp_name'], $uploadfile)) {
                    $product->img = $uploadfile;
                    $product->save();
                }
            }
        }
        return new RedirectResponse('/create');
    }

    public function comment($id)
    {
        $data = request()->all();
        $validator = validator()->make($data, [
            'user_name' => ['required'],
            'appraisal' => ['required'],
            'text' => ['required']
        ]);

        if (count($error = $validator->errors()) > 0) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $comment = new Comment();
        $comment->user_name = $data['user_name'];
        $comment->text = $data['text'];
        $comment->product_id = $id;
        $comment->appraisal = $data['appraisal'];
        $comment->save();

        return new RedirectResponse('/product/' . $id);
    }
}