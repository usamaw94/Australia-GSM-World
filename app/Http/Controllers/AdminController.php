<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminChangePassword;
use App\Mail\customerReply;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminLogin(){
        return view('auth.login');
    }

    public function changePassword()
    {
        return view('changePassword');
    }

    public function quotationMessage($id){
        $update = DB::update("UPDATE quotation_messages SET msg_status = 'Read'
            where id = ?", [$id]);

        $message = DB::select('SELECT * FROM quotation_messages WHERE id=?',[$id]);
        $results = array(
            'message' => $message,
        );
        return view('quotationMessage')->with($results);
    }

    public function quotationMessages(){
        $messages = DB::select('SELECT * FROM quotation_messages ORDER BY created_at DESC');
        $results = array(
            'messages' => $messages,
        );
        return view('quotationMessages')->with($results);
    }

    public function deleteMassage(Request $request){
        $id = $request->messageId;

        $delete = DB::delete("DELETE FROM quotation_messages WHERE id=?",[$id]);

        if($delete){
            $msg = 'Message deleted';

            $msgs = array(
                'msg' => $msg,
            );

            return back()->with($msgs);
        }else {

                $errorMsg = "Error in deleting message";

                $msgs = array(
                    'errorMsg' => $errorMsg,
                );

                return back()->with($msgs);
        }
    }

    public function btnDeleteMassage(Request $request){
        $id = $request->messageId;

        $delete = DB::delete("DELETE FROM quotation_messages WHERE id=?",[$id]);
        if($delete){
            $msg = 'Message deleted';

            $msgs = array(
                'msg' => $msg,
            );

            return redirect('/quotationMessages')->with($msgs);
        }else {

            $errorMsg = "Error in deleting message";

            $msgs = array(
                'errorMsg' => $errorMsg,
            );

            return redirect('/quotationMessages')->with($msgs);
        }
    }

    public function addProduct(Request $request){

        $productName = $request->productName;
        $productPrice = $request->productPrice;
        $productDescription = $request->productDescription;
        $productEBayLink = $request->ebayLink;
        $productImg1 = $request->productImage1;
        $productImg2 = $request->productImage2;
        $productImg3 = $request->productImage3;

        $dbName = 'ausgsmworld';
        $tableName = 'products';

        $info = DB::select('SELECT `AUTO_INCREMENT`FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ? AND   TABLE_NAME   = ?',[$dbName,$tableName]);

        $autoInc = $info[0]->AUTO_INCREMENT;

        $imgName1 = "1_product_".$autoInc;

        $imgName2 = "2_product_".$autoInc;

        $imgName3 = "3_product_".$autoInc;


        $extension1 = $productImg1->extension();

        $storeImg1 = $productImg1->storeAs( '' , $imgName1.".".$extension1 , 'upload');

        $imgPath1  = '/uploads/'.$storeImg1;


        if($productImg2 != null || $productImg2 != ''){

            $extension2 = $productImg2->extension();

            $storeImg2 = $productImg2->storeAs( '' , $imgName2.".".$extension2 , 'upload');

            $imgPath2  = '/uploads/'.$storeImg2;
        } else {
            $imgPath2 = '';
        }


        if($productImg3 != null || $productImg3 != ''){

            $extension3 = $productImg3->extension();

            $storeImg3 = $productImg3->storeAs( '' , $imgName3.".".$extension3 , 'upload');

            $imgPath3  = '/uploads/'.$storeImg3;
        } else {
            $imgPath3 = '';
        }

        $p =new Product();
        $p->product_name =  $productName;
        $p->price = $productPrice;
        $p->product_description = $productDescription;
        $p->ebay_link = $productEBayLink;
        $p->image1Name = $imgName1;
        $p->image1Path = $imgPath1;
        $p->image2Name = $imgName2;
        $p->image2Path = $imgPath2;
        $p->image3Name = $imgName3;
        $p->image3Path = $imgPath3;
        $save = $p->save();

        if($save){
            $msg = 'Product added';

            $msgs = array(
                'msg' => $msg,
            );

            return redirect('/manageProducts')->with($msgs);
        }else {

            $errorMsg = "Error in adding product";

            $msgs = array(
                'errorMsg' => $errorMsg,
            );

            return redirect('/manageProducts')->with($msgs);
        }
    }

    public function adminProductDetails($id){
        $product = DB::select('SELECT * FROM products WHERE id=?',[$id]);
        $results = array(
            'product' => $product,
        );
        return view('adminProductDetails')->with($results);
    }

    public function editProduct($id){
        $product = DB::select('SELECT * FROM products WHERE id=?',[$id]);
        $results = array(
            'product' => $product,
        );
        return view('editProduct')->with($results);
    }

    public function updateProduct(Request $request){
        $id = $request->productId;

        $imageName1 = $request->imageName1;
        $imageName2 = $request->imageName2;
        $imageName3 = $request->imageName3;

        $imagePath1 = $request->imagePath1;
        $imagePath2 = $request->imagePath2;
        $imagePath3 = $request->imagePath3;

        $name = $request->productName;
        $price = $request->productPrice;
        $description = $request->productDescription;
        $ebay = $request->ebayLink;
        $img1 = $request->image1;
        $img2 = $request->image2;
        $img3 = $request->image3;

        $update = DB::update("UPDATE products SET product_name = ?,
            price = ?,product_description = ?,	ebay_link = ?
            where id = ?", [$name,$price,$description,$ebay,$id]);

        if($img1 != ''){
            $del_path1 = public_path().$imagePath1;
            unlink($del_path1);

            $extension1 = $img1->extension();

            $storeImg1 = $img1->storeAs( '' , $imageName1.".".$extension1 , 'upload');

            $imgPath1  = '/uploads/'.$storeImg1;

            $update = DB::update("UPDATE products SET image1Path = ?
            where id = ?", [$imgPath1,$id]);
        }

        if($img2 != ''){
            if($imagePath2 != '')
            {
                $del_path2 = public_path().$imagePath2;
                unlink($del_path2);
            }

            $extension2 = $img2->extension();

            $storeImg2 = $img2->storeAs( '' , $imageName2.".".$extension2 , 'upload');

            $imgPath2  = '/uploads/'.$storeImg2;

            $update = DB::update("UPDATE products SET image2Path = ?
            where id = ?", [$imgPath2,$id]);
        }

        if($img3 != ''){

            if($imagePath3 != '')
            {
                $del_path3 = public_path().$imagePath3;
                unlink($del_path3);
            }

            $extension3 = $img3->extension();

            $storeImg3 = $img3->storeAs( '' , $imageName3.".".$extension3 , 'upload');

            $imgPath3  = '/uploads/'.$storeImg3;

            $update = DB::update("UPDATE products SET image3Path = ?
            where id = ?", [$imgPath3,$id]);
        }

        $msg = 'Product upated';

        $msgs = array(
            'msg' => $msg,

        );

        return redirect('/adminProductDetails/'.$id)->with($msgs);

    }

    public function deleteProduct(Request $request){
        $id = $request->productId;

        $product = DB::select('SELECT * FROM products WHERE id=?',[$id]);

        $Img1 = $product[0]->image1Path;
        $Img2 = $product[0]->image2Path;
        $Img3 = $product[0]->image3Path;

        if($Img1 != ''){
            $del_path1 = public_path().$Img1;
            unlink($del_path1);
        }

        if($Img2 != ''){
            $del_path2 = public_path().$Img2;
            unlink($del_path2);
        }

        if($Img3 != ''){
            $del_path3 = public_path().$Img3;
            unlink($del_path3);
        }

        $delete = DB::delete("DELETE FROM products WHERE id=?",[$id]);

        $msg = 'Product deleted';

        $msgs = array(
            'msg' => $msg,
        );

        return back()->with($msgs);
    }

    public function btnDeleteProduct(Request $request){
        $id = $request->productId;

        $product = DB::select('SELECT * FROM products WHERE id=?',[$id]);

        $Img1 = $product[0]->image1Path;
        $Img2 = $product[0]->image2Path;
        $Img3 = $product[0]->image3Path;

        if($Img1 != ''){
            $del_path1 = public_path().$Img1;
            unlink($del_path1);
        }

        if($Img2 != ''){
            $del_path2 = public_path().$Img2;
            unlink($del_path2);
        }

        if($Img3 != ''){
            $del_path3 = public_path().$Img3;
            unlink($del_path3);
        }

        $delete = DB::delete("DELETE FROM products WHERE id=?",[$id]);

        $msg = 'Product deleted';

        $msgs = array(
            'msg' => $msg,
        );


        return redirect('/manageProducts')->with($msgs);
    }

    public function manageProducts(){
        $products = DB::select('SELECT * FROM products ORDER BY created_at DESC');
        $results = array(
            'products' => $products,
        );
        return view('manageProducts')->with($results);
    }

    public function updatePassword(AdminChangePassword $request)
    {
        $adminId = Auth::user()->id;

        $admin = DB::select('SELECT * FROM users WHERE id = ?', [$adminId]);
        $originalPassword = $admin[0]->password;

        $cPass = $request->currentPassword;
        $nPass = $request->newPassword;

        $hNPass = bcrypt($nPass);

        if (Hash::check($cPass, $originalPassword)) {
            $update = DB::update("UPDATE users SET password = '" . $hNPass . "'
            where id = ?", [$adminId]);


            $msg = 'Password Changed';

            $msgs = array(
                'msg' => $msg,
            );

            return redirect('/home')->with($msgs);
        } else {

            $errorMsg = "Incorrect current password, Password can't be changed";

            $msgs = array(
                'errorMsg' => $errorMsg,
            );

            return back()->with($msgs);
        }
    }


    public function sendMail(){
        Mail::to('usamaw94@gmail.com')->send(new customerReply());
    }
}

