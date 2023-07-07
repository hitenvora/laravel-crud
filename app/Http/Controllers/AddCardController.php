<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddCardModel;    
class AddCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array(
            "name"=>$request->fnm,
            "student_id"=>$request->stid,
            "phone"=>$request->phone,
            "staff_id"=>$request->stfid,
           
        );
        AddCardModel::create($data);
        // dd($data);
        return redirect("/");
    }
        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=AddCardModel::all();
        return view('content',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata=AddCardModel::where('id',$id)->first();
        return view('show',['editdata'=>$editdata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=array(
            "name"=>$request->fnm,
            "student_id"=>$request->stid,
            "phone"=>$request->phone,
            "staff_id"=>$request->stfid,
           
        );
        AddCardModel::where('id',$id)->update($data);
        return redirect("show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // elequent query bulider
         AddCardModel::where('id',$id)->delete();
         return redirect('/')->with('del','Your data successfully deleted');
        
    }
}
