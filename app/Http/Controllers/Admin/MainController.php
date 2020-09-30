<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ToolModel;
use App\Models\TookitModel;
use App\Models\StockModel;
use Validator;

class MainController extends Controller
{
    public function index()
    {
        return view('Admin-lte.home-admin-lte');
    }

    public function addUser()
    {
        return view('Admin.add-user');
    }

    public function addUserPost(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        die;
    }

    public function contactList()
    {
        return view('Admin.contact-list');
    }

    public function addCategory()
    {
        return view('Admin.add-category');
    }
    public function viewCategory()
    {
        return view('Admin.view-category');
    }
    public function stockList()
    {
        $stock = StockModel::all();
        return view('Admin-lte.stocklist', compact('stock'));
    }
    public function manageStockChoice()
    {
        return view('Admin.manage-stock-choice');
    }
    public function adminLte()
    {
        return view('Admin.admin-lte');
    }
    public function adminLteManageStock()
    {
        return view('Admin-lte.manage-stock');
    }
    public function actionItem()
    {
        return view('Admin-lte.action-item');
    }
    public function transferAtoB()
    {
        return view('Admin-lte.transfer-atob');
    }
    public function createUser()
    {
        return view('Admin-lte.create-user');
    }
    public function toolShow()
    {
        $tools = ToolModel::all();
        return view('Admin-lte.tools-view', compact('tools'));
    }
    public function createNewTool()
    {
        return view('Admin-lte.create-new-tool');
    }

    public function editTool($id)
    {
        $tool = ToolModel::find($id);
        return view('Admin-lte.edit-new-tool', compact('tool'));

    }

    public function toolKitView()
    {
        $tools = TookitModel::all();
        return view('Admin-lte.toolkit-view', compact('tools'));
    }


    public function createToolPost(Request $request)
    {
        //    return $request->all();
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'code' => 'required',
                'serial' => 'required|',
                'image' => 'required',
                'category' => 'required',
                'unit' => 'required',
                'state' => 'required',
                'brand' => 'required|',
                'cost' => 'required',
                'price' => 'required',
                'purchase_details' => 'required',
                'description' => 'required',
                'callibration' => 'required',
                'warranty' => 'required',


            ]

        );

        if ($validator->fails()) {
            return redirect()->route('createNewTool')->withErrors($validator->errors())->withInput();
        }
        $newTool = new ToolModel();
        $newRow = $newTool->create($request);
        if ($newRow) {
            return redirect()->route('createNewTool')->with('message', 'create successful');
        } else {
            return redirect()->route('createNewTool')->with('message', 'create fails');
        }
    }

    public function editToolPost(Request $request, $id)
    {
        //    return $request->all();
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'code' => 'required',
                'serial' => 'required|',
                'image' => 'required',
                'category' => 'required',
                'unit' => 'required',
                'state' => 'required',
                'brand' => 'required|',
                'cost' => 'required',
                'price' => 'required',
                'purchase_details' => 'required',
                'description' => 'required',
                'callibration' => 'required',
                'warranty' => 'required',


            ]

        );

        if ($validator->fails()) {
            return redirect()->route('createNewTool')->withErrors($validator->errors())->withInput();
        }
        $newTool = ToolModel::find($id);
        $newRow = $newTool->create($request);
        if ($newRow) {
            return redirect()->route('tools')->with('message', 'create successful');
        } else {
            return redirect()->route('tools')->with('message', 'create fails');
        }
    }


    public function createToolCsv(Request $request)
    {
        // return $request->all();
        $validator = Validator::make(
            $request->all(),
            [
                'tools' => 'required',

            ]

        );

        if ($validator->fails()) {
            return redirect()->route('createNewTool')->withErrors($validator->errors())->withInput();
        }
        $newTool = new ToolModel();
        $newRow = $newTool->create($request);
        if ($newRow) {
            return redirect()->route('createNewTool')->with('message', 'create successful');
        } else {
            return redirect()->route('createNewTool')->with('message', 'create fails');
        }
    }

    public function createNewToolkit()
    {
        return view('Admin-lte.create-new-toolkit');
    }

    public function createToolkitPost(Request $request)
    {
        // return $request->all();
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'description' => 'required',
            ]

        );

        if ($validator->fails()) {
            return redirect()->route('createNewToolkit')->withErrors($validator->errors())->withInput();
        }
        $newToolkit = new TookitModel();
        $newRow = $newToolkit->create($request);
        if ($newRow) {
            return redirect()->route('createNewToolkit')->with('message', 'create successful');
        } else {
            return redirect()->route('createNewToolkit')->with('message', 'create fails');
        }
    }
    public function stockIn()
    {
        return view('Admin-lte.stock-in');
    }
    public function stockInPost(Request $request)
    {
        $newStock = new StockModel();
        $newRow = $newStock->create($request);
        if ($newRow) {
            return redirect()->route('stockIn')->with('message', 'create successful');
        } else {
            return redirect()->route('stockIn')->with('message', 'create fails');
        }
    }

    public function stockOut()
    {
        return view('Admin-lte.stock-out');
    }
    public function transfer()
    {
        return view('Admin-lte.transfer');
    }
}
