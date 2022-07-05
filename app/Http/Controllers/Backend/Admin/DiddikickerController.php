<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Admin\DiddikickerStoreRequest;
use App\Models\Children;
use App\Models\ChildStatus;
use App\Models\ParentProfile;
use Illuminate\Http\Request;
use App\Helpers\HelperService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DiddikickerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childs= DB::table('users')
           ->join('parent_profiles','users.id','=','parent_profiles.user_id')
            ->join('childrens', 'parent_profiles.id', '=', 'childrens.parent_profile_id')
            ->join('child_statuses', 'childrens.id', '=', 'child_statuses.children_id')
            ->select('users.email','parent_profiles.*','child_statuses.*','childrens.*')
            ->get();

        return view(HelperService::getView("diddikickers.index"))->with(['childs'=>$childs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(HelperService::getView("diddikickers.create"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiddikickerStoreRequest $request)
    {
        //validating all request
        $validated = $request->validated();
        $user_id=   Auth::id();

        $data=json_decode($request->getContent(),true);
        try{
            DB::beginTransaction();
            // Create ParentProfile

           // duplicate check
            $parent_duplicate_check=ParentProfile::orderby('created_at')->where('user_id', Auth::id())->value('id');

            //duplicate check
               if($parent_duplicate_check==null || $parent_duplicate_check=='undefined'){

                $user = ParentProfile::create([
                    'user_id' => $user_id,
                    'first_name' => $data['parents_first_name'],
                    'last_name' => $data['parents_last_name'],
                    'telephone' => $data['telephone'],
                    'address' => $data['address'],
                    'facebook_name' => $data['facebook_name'],
                    'enquired' => $data['how_enquired'],
                    'date_enquired' => $data['date_enquired'],
                    'heard_about_us' => $data['heard_about_us'],
                    'direct_debit_day' => $data['direct_debit_day'],
                    'notes' => $data['note']

                ]);

                   $parent_id=ParentProfile::max('id');

               }else{
                   $parent_id= $parent_duplicate_check;
               }



            // Create ParentProfile
//          //duplicate check
                $children_duplicate_check=Children::orderby('created_at')
                    ->where('parent_profile_id', $parent_duplicate_check)
                    ->where('first_name', $data['first_name'])
                    ->where('last_name', $data['last_name'])
                    ->where('date_of_birth', $data['date_of_birth'])
                    ->value('id');


               if($children_duplicate_check==null || $children_duplicate_check=='undefined') {

                   $user = Children::create([
                       'parent_profile_id' => $parent_id,
                       'first_name' => $data['first_name'],
                       'last_name' => $data['last_name'],
                       'date_of_birth' => $data['date_of_birth'],
                       'allergies' => $data['allergies']

                   ]);
                   $child_id = Children::max('id');


                   // Create ChildStatus

                   $user = ChildStatus::create([
                       'children_id' => $child_id,
                       'venue' => $data['venue'],
                       'class' => $data['class_name'],
                       'status' => $data['status']
                   ]);

                   DB::commit();

               }


            return response()->json([
                'success' => 'Saved Successfully'
            ]);


        }
        catch(Exception $e){
            DB::rollback();
            throw $e;
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view(HelperService::getView("diddikickers.show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $data['permissions'] = Permission::where('role_id', $id)->joinSub($page,'permissions_page',function($join){
//            $join->on('permissions.page_id','=','permissions_page.page_id');
//        })->get();
        return view(HelperService::getView("diddikickers.edit"));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
