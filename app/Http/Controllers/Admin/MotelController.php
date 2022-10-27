<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\Motel;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }
    
    
    public function index_motels($id, Request $request){
        $motel = new Motel();
        $this->v['motels'] = $motel->LoadMotelsWithPage($request->all(), $id);
        $this->v['idArea'] = $id;
        $this->v['params'] = $request->all() ?? [];
        // dd($this->v['params']);
        return view('admin.motels.list', $this->v);
    }

    public function detail_motels($id,$idMotel){
        
        $motel = new Motel();
        $this->v['motel'] = $motel->detail_motels($idMotel);
        $this->v['photo_gallery'] = $this->v['motel']->photo_gallery;

        return view('admin.motels.detail', $this->v);
    }
    public function edit_motels($id,$idMotel){
        $category = new Category();
        $this->v['categories'] = $category->getAll();
        $motel = new Motel();
        $this->v['motel'] = $motel->detail_motels($idMotel);
        $this->v['photo_gallery'] = $this->v['motel']->photo_gallery;
        $this->v['services'] =json_decode($this->v['motel']->services, true) ;
        $this->v['idArea'] = $id;
        
        return view('admin.motels.edit',$this->v);
    }
    
    public function add_motels($id){
       $category = new Category();
       $res =  $category->getAll();
    
        return view('admin.motels.add',[
            'id'=>$id,
            'category'=>$res
        ]);
    }
    public function saveAdd_motels(Request $request, $id)
    {
        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }

            return $item;
        }, $request->all());
        unset($params['cols']['_token']);
        $params['cols']['service'] = json_encode([
            'bed' => $request->bed,
            'bedroom' => $request->bedroom,
            'toilet' => $request->toilet,
            'more' => $request->service_more,
            'actor' => $request->actor
        ]);
        $params['cols']['area_id'] = $request->id;
        $model = new Motel();
       
        $result = $model->createMotel($params['cols']);
       
        return redirect()->route('admin.motel.list', ['id' => $id]);
    }
    public function saveUpdate_motels(Request $request ,$id){
       $modelMotel = new Motel();
       
       $params['cols'] = array_map(function ($item) {
        if ($item == '') {
            $item = null;
        }
        if (is_string($item)) {
            $item = trim($item);
        }

        return $item;
    }, $request->all());

    unset($params['cols']['_token']);
    $params['cols']['service'] = json_encode([
        'bed' => $request->bed,
        'bedroom' => $request->bedroom,
        'toilet' => $request->toilet,
        'more' => $request->service_more,
        'actor' => $request->actor
    ]);
    $params['cols']['area_id'] = $request->id;
       $data=[
        'category_id'=>$request->category_id,
        'room_number'=>$request->room_number,
        'price'=>$request->price,
        'area'=>$request->area,
        'description'=>$request->description,
        'video'=>$request->video,
        'image_360'=>$request->image360,
        'photo_gallery'=>$request->img,
        'services'=>$params['cols']['service'],
        'start_time'=>$request->start_time,
        'end_time'=>$request->end_time,
        'updated_at'=>date('Y-m-d H:i:s')
       ];
       $modelMotel->saveUpdate_motels($data,$request->id);
       return redirect()->route('admin.motel.list',$request->idArea)->with('msg','Cập nhật phòng trọ thành công');
    }
    public function delete_motels($id,$idMotel){
       
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
