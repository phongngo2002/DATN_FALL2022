<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Motel;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function list($id, Request $request){
        $motel = new Motel();
        $this->v['motels'] = $motel->LoadMotelsWithPage($request->all(), $id);
        $this->v['idCate'] = $id;
        $this->v['params'] = $request->all() ?? [];
        // dd($this->v['params']);
        return view('admin.motels.list', $this->v);
    }

    public function detail($idMotel){
        
        $motel = new Motel();
        $this->v['motel'] = $motel->detailMotel($idMotel);
        $this->v['photo_gallery'] = $this->v['motel']->photo_gallery;

        return view('admin.motels.detail', $this->v);
    }
    public function add_Motels(){
        $modelArea = new Area();
        $area = $modelArea->getAll() ;
        return view('admin.motels.add',[
            'area'=>$area
        ]);
    }
    public function saveUpdate(Request $request,$id){
       $modelMotel = new Motel();
       $data=[
        'room_number'=>$request->room_number,
        'price'=>$request->price,
        'area'=>$request->area,
        'description'=>$request->description,
        'services'=>$request->services,
        'start_time'=>$request->start_time,
        'end_time'=>$request->end_time,
        'updated_at'=>date('Y-m-d H:i:s')
       ];
       
       $modelMotel->saveUpdate_motel($data,$request->id);
       return redirect()->route('admin.motel.list',$id)->with('msg','Cập nhật quyền thành công');
    }
    public function delete_motel($id,$idMotel){
       
        if(!empty($idMotel)){
            $modelMotel = new Motel();            
                $delStatus = $modelMotel->delete_motels($idMotel);
                if($delStatus){
                    $msg = 'Xóa thành công';
                }else{
                    $msg = 'Xóa thất bại';
                }
            }else{
                $msg='Phòng trọ không tồn tại';
            }

        
    return redirect()->route('admin.motel.list',$id)->with('msg',$msg);
    }
}
